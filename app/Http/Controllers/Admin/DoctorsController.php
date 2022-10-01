<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\DoctorRequest;
use App\Http\Requests\Admin\ExcelImportRequest;
use App\Exports\DoctorExport;
use App\Imports\DoctorImport;
use App\Models\Doctor;
use App\Models\Countries;
use App\Models\Provinces;
use App\Models\Cities;
use App\Models\Organizations;
use App\Models\Departments;
use App\Models\Specializations;
use DataTables;
use Excel;
use DB;
class DoctorsController extends Controller
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
         $getData = DB::table('doctors')
		->join('countries', 'countries.id', '=', 'doctors.count_id','left')
		->join('provinces', 'provinces.id', '=', 'doctors.prov_id','left')
		->join('cities', 'cities.id', '=', 'doctors.city_id','left')
		->select('doctors.*', 'countries.eng_country_name', 'cities.name as city_name', 'provinces.name as province_name')->get();
		
		return DataTables::of($getData)
        ->addColumn('action',function($doctor){
			//$patient = (object)$patient;
            return view('admin.doctors._action',compact('doctor'));
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
    public function store(DoctorRequest $request)
    {
        //$request['code']=doctor_code();
		//Doctor::create($request->except('_token','_method'));

		$profile_image = '';
		 //Profile Image
        if($request->hasFile('profile_image'))
        {
            //upload profile_image
            $signature=$request->file('profile_image');
            $signature_name='doc'.date('his').'.'.$signature->getClientOriginalExtension();
            $signature->move('uploads/profile_images',$signature_name);
            $profile_image=$signature_name;
        }
		
        $doctor=Doctor::create([
            'code'=>doctor_code(),
			'profile_image'=>$profile_image,
            'nature'=>$request->nature,
            'name_eng'=>$request->name_eng,
            'name_local'=>$request->name_local,
            'dept_id'=>$request->dept_id,
            'spec_id'=>$request->spec_id,
            'gender'=>$request->gender,
            'dob'=>$request->dob,
            'martial_status'=>$request->martial_status,
            'count_id'=>$request->count_id,
            'prov_id'=>$request->prov_id,
            'city_id'=>$request->city_id,
            'mob1'=>$request->mob1,
            'mob2'=>$request->mob2,
            'room_no'=>$request->room_no,
            'cnic'=>$request->cnic,
            'doc_portal_user'=>$request->doc_portal_user,
            'gl_acc'=>$request->gl_acc,
            'remarks'=>$request->remarks,
        ]);

		
        session()->flash('success',__('Doctor created successfully'));

        return redirect()->route('admin.doctors.index');
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DoctorRequest $request, $id)
    {
        $doctor=Doctor::findOrFail($id);
        
		$profile_image = '';
		 //Profile Image
        if($request->hasFile('profile_image'))
        {
            //upload profile_image
            $signature=$request->file('profile_image');
            $signature_name='doc'.$id.'.'.$signature->getClientOriginalExtension();
            $signature->move('uploads/profile_images',$signature_name);
            $profile_image=$signature_name;
        }
		
		if($request->hasFile('profile_image')){
			$doctor->update([
			'profile_image'=>$profile_image
			]);
		}
        $doctor->update([
            'code'=>doctor_code(),
            'nature'=>$request->nature,
            'name_eng'=>$request->name_eng,
            'name_local'=>$request->name_local,
            'dept_id'=>$request->dept_id,
            'spec_id'=>$request->spec_id,
            'gender'=>$request->gender,
            'dob'=>$request->dob,
            'martial_status'=>$request->martial_status,
            'count_id'=>$request->count_id,
            'prov_id'=>$request->prov_id,
            'city_id'=>$request->city_id,
            'mob1'=>$request->mob1,
            'mob2'=>$request->mob2,
            'room_no'=>$request->room_no,
            'cnic'=>$request->cnic,
            'doc_portal_user'=>$request->doc_portal_user,
            'gl_acc'=>$request->gl_acc,
            'remarks'=>$request->remarks,
        ]);
        session()->flash('success',__('Doctor updated successfully'));

        return redirect()->route('admin.doctors.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('doctors')->where('id', '=', $id)->delete();
        session()->flash('success',__('Doctor deleted successfully'));

        return redirect()->route('admin.doctors.index');
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
