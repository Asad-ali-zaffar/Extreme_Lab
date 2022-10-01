<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\DoctorChargesRequest;
use App\Http\Requests\Admin\ExcelImportRequest;
use App\Exports\DoctorExport;
use App\Imports\DoctorImport;
use App\Models\Doctor;
use App\Models\DoctorCharges;
use App\Models\Countries;
use App\Models\Provinces;
use App\Models\Cities;
use App\Models\Organizations;
use App\Models\Departments;
use App\Models\Specializations;
use DataTables;
use Excel;
use DB;
class DoctorsChargesController extends Controller
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
         $getData = DB::table('doctor_charges')
		 ->select('doctor_charges.*')->get();
		
		return DataTables::of($getData)
        ->addColumn('action',function($doctor){
			//$patient = (object)$patient;
            return view('admin.doctors._action_charges',compact('doctor'));
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
    public function store(DoctorChargesRequest $request)
    {
        //$request['code']=doctor_code();
		//Doctor::create($request->except('_token','_method'));

        $doctor=DoctorCharges::create([
            'charges_type'=>$request->charges_type,
            'nature'=>$request->nature,
            'charges'=>$request->charges,
            'share_type'=>$request->share_type,
            'doctor_share'=>$request->doctor_share,
            'billing_nature'=>$request->billing_nature,
            'remarks_charges'=>$request->remarks_charges,
            'doc_id'=>$request->doc_id,
        ]);

		
        session()->flash('success',__('Charges created successfully'));

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
		$data['html'] = view('admin.doctors._form_charges', compact('record'))->render();
		
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
    public function update(DoctorChargesRequest $request, $id)
    {
		$record_id = $request->record_id;
        $record = DB::table('doctor_charges')->where('id',$record_id)->first();
		
		$update = \DB::table('doctor_charges') ->where('id', $record_id) ->limit(1) ->update( [ 'charges_type' => $request->charges_type, 'nature' => $request->nature, 'charges' => $request->charges, 'share_type' => $request->share_type, 'doctor_share' => $request->doctor_share, 'billing_nature' => $request->billing_nature, 'remarks_charges' => $request->remarks_charges]); 

        session()->flash('success',__('Charges updated successfully'));
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
        //$doctor=DoctorCharges::findOrFail($id);
		$record = DB::table('doctor_charges')->where('id',$id)->first();
        DB::table('doctor_charges')->where('id', '=', $id)->delete();
        session()->flash('success',__('Charges deleted successfully'));

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
