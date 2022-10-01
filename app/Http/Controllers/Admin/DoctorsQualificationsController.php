<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\DoctorQualificationsRequest;
use App\Http\Requests\Admin\ExcelImportRequest;
use App\Exports\DoctorExport;
use App\Imports\DoctorImport;
use App\Models\Doctor;
use App\Models\DoctorQualifications;
use App\Models\Countries;
use App\Models\Provinces;
use App\Models\Cities;
use App\Models\Organizations;
use App\Models\Departments;
use App\Models\Specializations;
use DataTables;
use Excel;
use DB;
class DoctorsQualificationsController extends Controller
{   /**
    * assign roles
    */
    public function __construct()
    {
        $this->middleware('can:view_doctor',     ['only' => ['index', 'show','ajax']]);
        $this->middleware('can:create_doctor',   ['only' => ['create', 'store']]);
        $this->middleware('can:edit_doctor',     ['only' => ['edit', 'update']]);
        $this->middleware('can:delete_doctor',   ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.doctors.index');
    }

    /**
    * get antibiotics datatable
    *
    * @access public
    * @var  @Request $request
    */
    public function ajax(Request $request)
    {
		 $doc_id = $request->doc_id;
         $getData = DB::table('doctor_qualifications')->where('doc_id',$doc_id)->select('doctor_qualifications.*')->get();
		
		return DataTables::of($getData)
        ->addColumn('action',function($doctor){
			//$patient = (object)$patient;
            return view('admin.doctors._action_qualification',compact('doctor'));
        })->make(true); 
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
		$data['organizations']=Organizations::all();
		$data['departments']=Departments::all();
		$data['specializations']=Specializations::all();
        return view('admin.doctors.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DoctorQualificationsRequest $request)
    {
        //$request['code']=doctor_code();
		//Doctor::create($request->except('_token','_method'));

        $doctor=DoctorQualifications::create([
            'qualification'=>$request->qualification,
            'institute'=>$request->institute,
            'remarks_qualification'=>$request->remarks_qualification,
            'doc_id'=>$request->doc_id,
        ]);

		
        session()->flash('success',__('Qualification created successfully'));

        return redirect()->route('admin.doctors.edit',$request->doc_id);
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
        $doctor=Doctor::findOrFail($id);
		$data['countries']=Countries::all();
		$data['provinces']=Provinces::all();
		$data['cities']=Cities::where('province_id', 1)->get();
		$data['organizations']=Organizations::all();
		$data['departments']=Departments::all();
		$data['specializations']=Specializations::all();
        return view('admin.doctors.edit',compact('doctor','data'));
    }
    public function get_details(Request $request)
    {
		$id = $request->post('id');
		$tbl = $request->post('tbl');
        $record = DB::table($tbl)->where('id',$id)->first();
		
		$data['details'] = $record;
		$data['html'] = view('admin.doctors._form_qualification', compact('record'))->render();
		
		echo json_encode($data);
		exit;
		
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DoctorQualificationsRequest $request, $id)
    {
		$record_id = $request->record_id;
        $record = DB::table('doctor_qualifications')->where('id',$record_id)->first();
		
		$update = \DB::table('doctor_qualifications') ->where('id', $record_id) ->limit(1) ->update( [ 'qualification' => $request->qualification, 'institute' => $request->institute, 'remarks_qualification' => $request->remarks_qualification]); 

        session()->flash('success',__('Qualification updated successfully'));
		return redirect()->route('admin.doctors.edit',$record->doc_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //$doctor=DoctorQualifications::findOrFail($id);
		$record = DB::table('doctor_qualifications')->where('id',$id)->first();
        DB::table('doctor_qualifications')->where('id', '=', $id)->delete();
        session()->flash('success',__('Qualification deleted successfully'));

        return redirect()->route('admin.doctors.edit',$record->doc_id);
    }

    /**
    * Export doctors
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function export()
    {
        ob_end_clean(); // this
        ob_start(); // and this
        return Excel::download(new DoctorExport, 'doctors.xlsx');
    }

    /**
    * Import doctors
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
            Excel::import(new DoctorImport, $request->file('import'));
        }

        session()->flash('success',__('Doctor imported successfully'));

        return redirect()->back();
    }

    /**
    * Download doctors template
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function download_template()
    {
        ob_end_clean(); // this
        ob_start(); // and this
        return response()->download(storage_path('app/public/doctors_template.xlsx'),'doctors_template.xlsx');
    }
}
