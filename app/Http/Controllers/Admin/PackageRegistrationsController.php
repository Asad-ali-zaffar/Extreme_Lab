<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PackageRegistrations;
use App\Http\Requests\Admin\PackageRegistrationsRequest;
use App\Http\Requests\Admin\ExcelImportRequest;
use App\Exports\PatientExport;
use App\Imports\PatientImport;
use Str;
use DataTables;
use Excel;
use DB;
class PackageRegistrationsController extends Controller
{
    /**
     * assign roles
     */
    public function __construct()
    {
        $this->middleware('can:view_patient',     ['only' => ['index', 'show', 'ajax']]);
        $this->middleware('can:create_patient',   ['only' => ['create', 'store']]);
        $this->middleware('can:edit_patient',     ['only' => ['edit', 'update']]);
        $this->middleware('can:delete_patient',   ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		
        $patients=PackageRegistrations::all();
        return view('admin.package_registrations.index');
    }

    /**
    * get patients datatable
    *
    * @access public
    * @var  @Request $request
    */
    public function ajax(Request $request)
    {
		
		$getData = DB::table('package_registrations')
		->select('package_registrations.*', DB::raw('(CASE 
		WHEN package_registrations.status = 0 THEN "Active" 
		WHEN package_registrations.status = 1 THEN "In-Active" 
		WHEN package_registrations.status = 2 THEN "Suspend" 
		WHEN package_registrations.status = 3 THEN "Closed" 
		END) AS status_label')); 
		
		return DataTables::of($getData)
        ->addColumn('action',function($patient){
			//$patient = (object)$patient;
            return view('admin.package_registrations._action',compact('patient'));
        })->make(true); 
		
		
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$data = array();
		return view('admin.package_registrations.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PackageRegistrationsRequest $request)
    {
        $patient=PackageRegistrations::create([
            'amount'=>$request->amount,
            'name_eng'=>$request->name_eng,
            'name_local'=>$request->name_local,
            'valid_from'=>$request->valid_from,
            'valid_to'=>$request->valid_to,
            'discount'=>$request->discount,
            'status'=>$request->status,
        ]);

        //send patient code notification
        //send_notification('patient_code',$patient);

        session()->flash('success','Package created successfully');

        return redirect()->route('admin.package_registrations.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		$data = array();
        $patient=PackageRegistrations::findOrFail($id);
		
        return view('admin.package_registrations.edit',compact('patient','data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PackageRegistrationsRequest $request, $id)
    {
        $patient=PackageRegistrations::findOrFail($id);
		
        $patient->update([
            'amount'=>$request->amount,
            'name_eng'=>$request->name_eng,
            'name_local'=>$request->name_local,
            'valid_from'=>$request->valid_from,
            'valid_to'=>$request->valid_to,
            'discount'=>$request->discount,
            'status'=>$request->status,
        ]);

        session()->flash('success','Package data updated successfully');

        return redirect()->route('admin.package_registrations.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('package_registrations')->where('id', '=', $id)->delete();
        session()->flash('success',__('Package deleted successfully'));
        return redirect()->route('admin.package_registrations.index');
    }

    /**
    * Export patients
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function export()
    {
        ob_end_clean(); // this
        ob_start(); // and this
        return Excel::download(new PatientExport, 'patients.xlsx');
    }

    /**
    * Import patients
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function import(ExcelImportRequest $request)
    {
        if($request->hasFile('import'))
        {
            ob_end_clean(); // this
            ob_start(); // and this
            Excel::import(new PatientImport, $request->file('import'));
        }

        session()->flash('success',__('Patients imported successfully'));

        return redirect()->back();
    }

    /**
    * Download patients template
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function download_template()
    {
        ob_end_clean(); // this
        ob_start(); // and this
        return response()->download(storage_path('app/public/patients_template.xlsx'),'patients_template.xlsx');
    }
}
