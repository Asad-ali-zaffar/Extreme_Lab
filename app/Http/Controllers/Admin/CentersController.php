<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Countries;
use App\Models\Provinces;
use App\Models\Cities;
use App\Models\Labs;
use App\Models\Centers;
use App\Models\Organizations;
use App\Http\Requests\Admin\CentersRequest;
use App\Http\Requests\Admin\ExcelImportRequest;
use App\Exports\PatientExport;
use App\Imports\PatientImport;
use Str;
use DataTables;
use Excel;
use DB;
class CentersController extends Controller
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
        $patients=Centers::all();
        return view('admin.centers.index',compact('patients'));
    }

    /**
    * get patients datatable
    *
    * @access public
    * @var  @Request $request
    */
    public function ajax(Request $request)
    {
		 $getData = DB::table('centers')
		->join('labs', 'labs.id', '=', 'centers.lab_id','left')
		->join('countries', 'countries.id', '=', 'centers.country_id','left')
		->join('provinces', 'provinces.id', '=', 'centers.prov_id','left')
		->join('cities', 'cities.id', '=', 'centers.city_id','left')
		->select('centers.*', 'labs.name_eng as lab_name_eng', 'countries.eng_country_name', 'cities.name as city_name', 'provinces.name as province_name')->get();
		
		return DataTables::of($getData)
        ->addColumn('action',function($patient){
			//$patient = (object)$patient;
            return view('admin.centers._action',compact('patient'));
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
		$data['labs']=Centers::all();
		return view('admin.centers.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CentersRequest $request)
    {
        $patient=Centers::create([
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
            'email'=>$request->email
        ]);

        //send patient code notification
        //send_notification('patient_code',$patient);

        session()->flash('success','Center created successfully');

        return redirect()->route('admin.centers.index');
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
        $patient=Centers::findOrFail($id);
		$data['labs']=Centers::all();
		$data['countries']=Countries::all();
		$data['provinces']=Provinces::all();
		$data['cities']=Cities::where('province_id', 1)->get();
		$data['organizations']=Organizations::all();
        return view('admin.centers.edit',compact('patient','data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CentersRequest $request, $id)
    {
        $patient=Centers::findOrFail($id);
		
        $patient->update([
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
            'email'=>$request->email
        ]);

        session()->flash('success','Center data updated successfully');

        return redirect()->route('admin.centers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patient=Centers::findOrFail($id);//get patient
        $patient->groups()->delete();//delete groups
        $patient->delete();//delete patient
        session()->flash('success',__('Patient deleted successfully'));
        return redirect()->route('admin.centers.index');
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
