<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Countries;
use App\Models\Provinces;
use App\Models\Cities;
use App\Models\Organizations;
use App\Http\Requests\Admin\OrganizationRequest;
use App\Http\Requests\Admin\ExcelImportRequest;
use App\Exports\PatientExport;
use App\Imports\PatientImport;
use Str;
use DataTables;
use Excel;
use DB;
class organizationController extends Controller
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
        $patients=Organizations::all();
        //$sql = "select * , LPAD(000,3,id) from organizations ORDER BY id desc";
		//$patients = DB::select($sql);
		return view('admin.organization.index',compact('patients'));
    }

    /**
    * get patients datatable
    *
    * @access public
    * @var  @Request $request
    */
    public function ajax(Request $request)
    {
        $model=Organizations::selectRaw('* , LPAD(id,4,0) as idCustom');
		
		/* 
			$sql = "select * , LPAD(000,3,id) from organizations ORDER BY id desc";
			$model = DB::select($sql);
		*/
        return DataTables::eloquent($model)
        ->addColumn('action',function($patient){
            return view('admin.organization._action',compact('patient'));
        })
        ->toJson();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$data['countries']=Countries::all();
		$data['provinces']=Provinces::all();
		$data['cities']=Cities::where('province_id', 1)->get();
		return view('admin.organization.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OrganizationRequest $request)
    {
        $patient=Organizations::create([
            'name_eng'=>$request->name_eng,
            'name_local'=>$request->name_local,
            'ntn_no'=>$request->ntn_no,
            'str_no'=>$request->str_no,
            'buss_nature'=>$request->buss_nature,
            'location'=>$request->location,
            'address'=>$request->address,
            'cash_gl_account'=>$request->cash_gl_account,
            'is_active'=>$request->is_active,
        ]);

        //send patient code notification
        //send_notification('patient_code',$patient);

        session()->flash('success','Organization created successfully');

        return redirect()->route('admin.organizations.index');
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
        $patient=Organizations::findOrFail($id);
		
		$date = new \DateTime($patient->dob);
        $now = new \DateTime();
        $interval = $now->diff($date);
		
		$data['interval']=$interval;
		$data['countries']=Countries::all();
		$data['provinces']=Provinces::all();
		$data['cities']=Cities::where('province_id', 1)->get();
        return view('admin.organization.edit',compact('patient','data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(OrganizationRequest $request, $id)
    {
        $patient=Organizations::findOrFail($id);
		
        $patient->update([
            'name_eng'=>$request->name_eng,
            'name_local'=>$request->name_local,
            'ntn_no'=>$request->ntn_no,
            'str_no'=>$request->str_no,
            'buss_nature'=>$request->buss_nature,
            'location'=>$request->location,
            'address'=>$request->address,
            'cash_gl_account'=>$request->cash_gl_account,
            'is_active'=>$request->is_active,
        ]);

        session()->flash('success','Organization data updated successfully');

        return redirect()->route('admin.organizations.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patient=Organizations::findOrFail($id);//get patient
        $patient->delete();//delete patient
        session()->flash('success',__('Organization deleted successfully'));
        return redirect()->route('admin.organizations.index');
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
