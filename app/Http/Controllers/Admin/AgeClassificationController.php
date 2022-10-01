<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AgeClassification;
use App\Http\Requests\Admin\AgeClassificationRequest;
use App\Http\Requests\Admin\ExcelImportRequest;
use App\Exports\PatientExport;
use App\Imports\PatientImport;
use Str;
use DataTables;
use Excel;
use DB;
class AgeClassificationController extends Controller
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
		
        $patients=AgeClassification::all();
        return view('admin.age_classification.index');
    }

    /**
    * get patients datatable
    *
    * @access public
    * @var  @Request $request
    */
    public function ajax(Request $request)
    {
		
		$getData = DB::table('age_classifications')
		->select('age_classifications.*', DB::raw('(CASE 
		WHEN age_classifications.status = 0 THEN "In-Active" 
		WHEN age_classifications.status = 1 THEN "Active" 
		WHEN age_classifications.status = 2 THEN "Suspend" 
		ELSE "Close" END) AS status_label')); 
		
		return DataTables::of($getData)
        ->addColumn('action',function($patient){
			//$patient = (object)$patient;
            return view('admin.age_classification._action',compact('patient'));
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
		return view('admin.age_classification.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AgeClassificationRequest $request)
    {
        $patient=AgeClassification::create([
            'name'=>$request->name,
            'gender'=>$request->gender,
			'status'=>$request->status,
        ]);

        //send patient code notification
        //send_notification('patient_code',$patient);

        session()->flash('success','Age Classification created successfully');

        return redirect()->route('admin.age_classification.index');
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
        $patient=AgeClassification::findOrFail($id);
		
        return view('admin.age_classification.edit',compact('patient','data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AgeClassificationRequest $request, $id)
    {
        $patient=AgeClassification::findOrFail($id);
		
        $patient->update([
            'name'=>$request->name,
            'gender'=>$request->gender,
            'status'=>$request->status,
        ]);

        session()->flash('success','Age Classification data updated successfully');

        return redirect()->route('admin.age_classification.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('age_classifications')->where('id', '=', $id)->delete();
        session()->flash('success',__('Age Classification deleted successfully'));
        return redirect()->route('admin.age_classification.index');
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
