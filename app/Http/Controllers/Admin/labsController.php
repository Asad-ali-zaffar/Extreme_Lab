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
use App\Http\Requests\Admin\LabsRequest;
use App\Http\Requests\Admin\ExcelImportRequest;
use App\Exports\PatientExport;
use App\Imports\PatientImport;
use Str;
use DataTables;
use Excel;
use DB;
class labsController extends Controller
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
        $patients=Labs::all();
        return view('admin.labs.index',compact('patients'));
    }

    /**
    * get patients datatable
    *
    * @access public
    * @var  @Request $request
    */
    public function ajax(Request $request)
    {
        //$model=Labs::query();
		//$model =DB::table(DB::raw(" (select lb.* , o.name_eng as org_name_eng FROM labs as lb LEFT JOIN organizations as o ON lb.org_id = o.id ORDER BY lb.id DESC )" ));
		
        //return Datatables::eloquent($model)->toJson();
		
		 $getData = DB::table('labs')
		->join('organizations', 'organizations.id', '=', 'labs.org_id','left')
		->join('countries', 'countries.id', '=', 'labs.country_id','left')
		->join('provinces', 'provinces.id', '=', 'labs.prov_id','left')
		->join('cities', 'cities.id', '=', 'labs.city_id','left')
		->select('labs.*', 'organizations.name_eng as org_name_eng', 'countries.eng_country_name', 'cities.name as city_name', 'provinces.name as province_name')->get();
		
		return DataTables::of($getData)
        ->addColumn('action',function($patient){
			//$patient = (object)$patient;
            return view('admin.labs._action',compact('patient'));
        })->make(true); 
		
		/* $datatable = DataTables::of($getData)->make(true);
		return $datatable; */
		
		/* return DataTables::of($getData)
        ->addColumn('action',function($patient){
            return view('admin.labs._action',compact('patient'));
        }); */
		
		//return $datatable;
		
		/* return Datatables::of(\DB::table(\DB::raw("
            (SELECT lb.* , o.name_eng as org_name_eng FROM labs as lb LEFT JOIN organizations as o ON lb.org_id = o.id ORDER BY lb.id DESC)
            ")))->toJson(true); */
			
		/* return DataTables::eloquent($model)
        ->addColumn('action',function($patient){
            return view('admin.labs._action',compact('patient'));
        })
        ->toJson()->make(true); */
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
		return view('admin.labs.create',compact('data'));
    }
	
	public function get_lab_centers(Request $request)
    {
		$lab_id = $request->lab_id;
		$center_id = isset($request->center_id) ? $request->center_id : '';
		
		$centers = Centers::where('lab_id', $lab_id)->get();
		$html = '';	
		$status = 0;	
		$message = 'No centers found';
		
		if(isset($centers)){
			foreach($centers as $single){
				$selected = '';
				if($center_id == $single['id']){
					$selected = 'selected';
				}
				$html .= '<option value="'.$single['id'].'" '.$selected.'>'.$single['name_eng'].'</option>';
			}
			
			$status = 1;
			$html = $html;
			$message = '';
		}
		return response()->json(array('status'=>$status,'status'=>1,'message'=>$message,'html'=>$html));	
    }
	
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LabsRequest $request)
    {
        $patient=Labs::create([
            'org_id'=>$request->org_id,
            'inv_type'=>$request->inv_type,
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
            'rev_acc'=>$request->rev_acc,
            'cash_acc'=>$request->cash_acc,
            'bank_acc'=>$request->bank_acc,
            'email'=>$request->email,
            'remarks'=>$request->remarks,
        ]);

        //send patient code notification
        //send_notification('patient_code',$patient);

        session()->flash('success','Lab created successfully');

        return redirect()->route('admin.labs.index');
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
        $patient=Labs::findOrFail($id);
		
		$data['countries']=Countries::all();
		$data['provinces']=Provinces::all();
		$data['cities']=Cities::where('province_id', 1)->get();
		$data['organizations']=Organizations::all();
        return view('admin.labs.edit',compact('patient','data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LabsRequest $request, $id)
    {
        $patient=Labs::findOrFail($id);
		
        $patient->update([
            'org_id'=>$request->org_id,
            'inv_type'=>$request->inv_type,
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
            'rev_acc'=>$request->rev_acc,
            'cash_acc'=>$request->cash_acc,
            'bank_acc'=>$request->bank_acc,
            'email'=>$request->email,
            'remarks'=>$request->remarks,
        ]);

        session()->flash('success','Lab data updated successfully');

        return redirect()->route('admin.labs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('labs')->where('id', '=', $id)->delete();
		//$patient->groups()->delete();//delete groups
        session()->flash('success',__('Lab deleted successfully'));
        return redirect()->route('admin.labs.index');
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
