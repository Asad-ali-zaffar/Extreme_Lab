<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sample;
use App\Models\Pattern;
use App\Models\Units;
use App\Models\Labs;
use App\Models\Countries;
use App\Models\Provinces;
use App\Models\Cities;
use App\Models\Departments;
use App\Models\Organizations;
use App\Models\TestRegistration;
use App\Http\Requests\Admin\TestRegistrationRequest;
use App\Http\Requests\Admin\ExcelImportRequest;
use App\Exports\PatientExport;
use App\Imports\PatientImport;
use Str;
use DataTables;
use Excel;
use DB;
class TestRegistrationController extends Controller
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
        $patients=TestRegistration::all();
        return view('admin.test_registration.index',compact('patients'));
    }

    /**
    * get patients datatable
    *
    * @access public
    * @var  @Request $request
    */
    public function ajax(Request $request)
    {
		
		 $getData = DB::table('test_registrations')
		->join('organizations', 'organizations.id', '=', 'test_registrations.org_id','left')
		->join('departments', 'departments.id', '=', 'test_registrations.dept_id','left')
		->join('patterns', 'patterns.id', '=', 'test_registrations.pattern_id','left')
		->join('samples', 'samples.id', '=', 'test_registrations.sample_id','left')
		->select('test_registrations.*', 'organizations.name_eng as org_name_eng', 'samples.name_eng as sample_name_eng', 'patterns.name as pattern_name', 'departments.name_eng as name_dept', DB::raw('(CASE 
			WHEN test_registrations.status = 0 THEN "In-Active" 
			WHEN test_registrations.status = 1 THEN "Active" 
			WHEN test_registrations.status = 2 THEN "Suspend" 
			ELSE "Close" END) AS status_label'), DB::raw('(CASE 
			WHEN test_registrations.perform_by = 0 THEN "Self" 
			WHEN test_registrations.perform_by = 1 THEN "Both" 
			ELSE "Outside" END) AS perform_by_name'))->get();
			
		return DataTables::of($getData)
        ->addColumn('action',function($patient){
			//$patient = (object)$patient;
            return view('admin.test_registration._action',compact('patient'));
        })->make(true); 	
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$data['organizations']=Organizations::all();
		$data['departments']=Departments::all();
		$data['units']=Units::all();
		$data['patterns']=Pattern::all();
		$data['samples']=Sample::all();
		return view('admin.test_registration.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TestRegistrationRequest $request)
    {
        $patient=TestRegistration::create([
            'type'=>$request->type,
            'org_id'=>$request->org_id,
            'name_eng'=>$request->name_eng,
            'nature'=>$request->nature,
            'dept_id'=>$request->dept_id,
            'perform_by'=>$request->perform_by,
            'unit_id'=>$request->unit_id,
            'price'=>$request->price,
            'urgent_price'=>$request->urgent_price,
            'pattern_id'=>$request->pattern_id,
            'reporting_days'=>$request->reporting_days,
            'sample_id'=>$request->sample_id,
            'test_req'=>$request->test_req,
            'remarks'=>$request->remarks,
            'special_remarks'=>$request->special_remarks,
            'status'=>$request->status
        ]);	

        //send patient code notification
        //send_notification('patient_code',$patient);

        session()->flash('success','Test registration created successfully');

        return redirect()->route('admin.test_registration.index');
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
        $patient=TestRegistration::findOrFail($id);
		$data['organizations']=Organizations::all();
		$data['departments']=Departments::all();
		$data['units']=Units::all();
		$data['patterns']=Pattern::all();
		$data['samples']=Sample::all();
		
		return view('admin.test_registration.edit',compact('patient','data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TestRegistrationRequest $request, $id)
    {
        $patient=TestRegistration::findOrFail($id);
		
        $patient->update([
            'type'=>$request->type,
            'org_id'=>$request->org_id,
            'name_eng'=>$request->name_eng,
            'nature'=>$request->nature,
            'dept_id'=>$request->dept_id,
            'perform_by'=>$request->perform_by,
            'unit_id'=>$request->unit_id,
            'price'=>$request->price,
            'urgent_price'=>$request->urgent_price,
            'pattern_id'=>$request->pattern_id,
            'reporting_days'=>$request->reporting_days,
            'sample_id'=>$request->sample_id,
            'test_req'=>$request->test_req,
            'remarks'=>$request->remarks,
            'special_remarks'=>$request->special_remarks,
            'status'=>$request->status
        ]);

        session()->flash('success','Test registration data updated successfully');

        return redirect()->route('admin.test_registration.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patient=TestRegistration::findOrFail($id);//get patient
        $patient->groups()->delete();//delete groups
        $patient->delete();//delete patient
        session()->flash('success',__('Patient deleted successfully'));
        return redirect()->route('admin.test_registration.index');
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
	
	public function doc_upload(Request $request)
    {
		
		$vendor_id = $request->customer_registration_id;
		$desc = $request->doc_details;
		$file_name = '';
		
		//doc_file
        if($request->hasFile('doc_file'))
        {
            //upload file
            $doc_file=$request->file('doc_file');
            $file_name=date('Ymdhis').'.'.$doc_file->getClientOriginalExtension();
            $doc_file->move('uploads/doc_file',$file_name);
            //$file_name;
        }
		
		$docArray = array();
		$docArray['customer_registration_id'] = $vendor_id; 
		$docArray['doc_file'] = $file_name; 
		$docArray['doc_details'] = $desc; 
		
		DB::table('customer_registration_docs')->insert($docArray);
		
        session()->flash('success',__('Document uploaded successfully'));
        return redirect()->back();
    }
	public function doc_delete(Request $request)
    {
		
		$id = $request->id;
		DB::table('customer_registration_docs')->where('id','=',$id)->delete();	
		
        //session()->flash('success',__('Document deleted successfully'));
        //return redirect()->back();
		
		return response()->json(array('status'=>1,'message'=>"Document deleted successfully"));
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