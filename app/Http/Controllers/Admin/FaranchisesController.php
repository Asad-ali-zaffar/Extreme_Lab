<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Countries;
use App\Models\Provinces;
use App\Models\Cities;
use App\Models\Labs;
use App\Models\Organizations;
use App\Models\Faranchises;
use App\Http\Requests\Admin\FaranchiseRequest;
use App\Http\Requests\Admin\ExcelImportRequest;
use App\Exports\PatientExport;
use App\Imports\PatientImport;
use Str;
use DataTables;
use Excel;
use DB;
class FaranchisesController extends Controller
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
        $patients=Faranchises::all();
        return view('admin.faranchises.index',compact('patients'));
    }

    /**
    * get patients datatable
    *
    * @access public
    * @var  @Request $request
    */
    public function ajax(Request $request)
    {
		 $getData = DB::table('faranchises')
		->join('labs', 'labs.id', '=', 'faranchises.lab_id','left')
		->join('organizations', 'organizations.id', '=', 'faranchises.org_id','left')
		->join('countries', 'countries.id', '=', 'faranchises.country_id','left')
		->join('provinces', 'provinces.id', '=', 'faranchises.prov_id','left')
		->join('cities', 'cities.id', '=', 'faranchises.city_id','left')
		->select('faranchises.*', 'labs.name_eng as lab_name_eng', 'organizations.name_eng as org_name_eng', 'countries.eng_country_name', 'cities.name as city_name', 'provinces.name as province_name')->get();
		
		return DataTables::of($getData)
        ->addColumn('action',function($patient){
			//$patient = (object)$patient;
            return view('admin.faranchises._action',compact('patient'));
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
		$data['labs']=Labs::all();
		$data['cities']=Cities::where('province_id', 1)->get();
		$data['organizations']=Organizations::all();
		return view('admin.faranchises.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FaranchiseRequest $request)
    {
        $patient=Faranchises::create([
            'org_id'=>$request->org_id,
            'lab_id'=>$request->lab_id,
            'name_eng'=>$request->name_eng,
            'name_local'=>$request->name_local,
            'contact_name'=>$request->contact_name,
            'ph1'=>$request->ph1,
            'ph2'=>$request->ph2,
            'mob_no1'=>$request->mob_no1,
            'mob_no2'=>$request->mob_no2,
            'country_id'=>$request->country_id,
            'prov_id'=>$request->prov_id,
            'city_id'=>$request->city_id,
            'address1'=>$request->address1,
            'address2'=>$request->address2,
            'email'=>$request->email,
            'status'=>$request->status,
        ]);

        //send patient code notification
        //send_notification('patient_code',$patient);

        session()->flash('success','Faranchise created successfully');

        return redirect()->route('admin.faranchises.index');
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
        $patient=Faranchises::findOrFail($id);
		
		$data['countries']=Countries::all();
		$data['provinces']=Provinces::all();
		$data['labs']=Labs::all();
		$data['cities']=Cities::where('province_id', 1)->get();
		$data['organizations']=Organizations::all();
        return view('admin.faranchises.edit',compact('patient','data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FaranchiseRequest $request, $id)
    {
        $patient=Faranchises::findOrFail($id);
		
        $patient->update([
            'org_id'=>$request->org_id,
            'lab_id'=>$request->lab_id,
            'name_eng'=>$request->name_eng,
            'name_local'=>$request->name_local,
            'contact_name'=>$request->contact_name,
            'ph1'=>$request->ph1,
            'ph2'=>$request->ph2,
            'mob_no1'=>$request->mob_no1,
            'mob_no2'=>$request->mob_no2,
            'country_id'=>$request->country_id,
            'prov_id'=>$request->prov_id,
            'city_id'=>$request->city_id,
            'address1'=>$request->address1,
            'address2'=>$request->address2,
            'email'=>$request->email,
            'status'=>$request->status,
        ]);

        session()->flash('success','Faranchise data updated successfully');

        return redirect()->route('admin.faranchises.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $record = DB::table('faranchises')->where('id',$id)->first();
        DB::table('faranchises')->where('id', '=', $id)->delete();
        session()->flash('success',__('Faranchise deleted successfully'));
        return redirect()->route('admin.faranchises.index');
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
