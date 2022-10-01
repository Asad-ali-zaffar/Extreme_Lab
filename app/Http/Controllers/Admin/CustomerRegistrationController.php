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
use App\Models\CustomerRegistration;
use App\Models\CustomerRegistrationCenter;
use App\Http\Requests\Admin\CentersRequest;
use App\Http\Requests\Admin\ExcelImportRequest;
use App\Exports\PatientExport;
use App\Imports\PatientImport;
use Str;
use DataTables;
use Excel;
use DB;
class CustomerRegistrationController extends Controller
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
        return view('admin.customer_registration.index',compact('patients'));
    }

    /**
    * get patients datatable
    *
    * @access public
    * @var  @Request $request
    */
    public function ajax(Request $request)
    {
		 $getData = DB::table('customer_registrations')
		->join('organizations', 'organizations.id', '=', 'customer_registrations.org_id','left')
		->select('customer_registrations.*', 'organizations.name_eng as org_name_eng', DB::raw('(CASE 
			WHEN customer_registrations.status = 0 THEN "In-Active" 
			WHEN customer_registrations.status = 1 THEN "Active" 
			WHEN customer_registrations.status = 2 THEN "Suspend" 
			ELSE "Close" END) AS status_label'))->get();
		
		return DataTables::of($getData)
        ->addColumn('action',function($patient){
			//$patient = (object)$patient;
            return view('admin.customer_registration._action',compact('patient'));
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
		$data['centers']=Centers::all();
		$data['provinces']=Provinces::all();
		$data['cities']=Cities::where('province_id', 1)->get();
		$data['labs']=Centers::all();
		$data['organizations']=Organizations::all();
		return view('admin.customer_registration.create',compact('data'));
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

        return redirect()->route('admin.customer_registration.index');
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
        $patient=CustomerRegistration::findOrFail($id);
		$data['labs']=Labs::all();
		$data['centers']=Centers::all();
		$data['countries']=Countries::all();
		$data['provinces']=Provinces::all();
		$data['cities']=Cities::where('province_id', 1)->get();
		$data['organizations']=Organizations::all();
		
		//$vendors = CustomerRegistration::find(1)->vendor_labs;
		
		$vendor_labs = CustomerRegistration::with([
			'vendor_labs' => function($q) {
				$q
				->join('labs', 'labs.id', '=', 'customer_registration_labs.lab_id')
				->select('labs.name_eng as lab_name','customer_registration_labs.*', DB::raw('(CASE 
					WHEN customer_registration_labs.status = 1 THEN "In-Active" 
					WHEN customer_registration_labs.status = 0 THEN "Active" END) AS status_label'))
				->orderBy('customer_registration_labs.id', 'asc');
			}
		])->get()->toArray();
		
		$vendor_centers = CustomerRegistration::with([
			'vendor_centers' => function($q) {
				$q
				->join('centers', 'centers.id', '=', 'customer_registration_centers.center_id')
				->select('centers.name_eng as name_eng_center','customer_registration_centers.*', DB::raw('(CASE 
					WHEN customer_registration_centers.status = 1 THEN "In-Active" 
					WHEN customer_registration_centers.status = 0 THEN "Active" END) AS status_label'))
				->orderBy('customer_registration_centers.id', 'asc');
			}
		])->get()->toArray();
		
		$data['vendor_labs'] = $vendor_labs;
		$data['vendor_centers'] = $vendor_centers;
		
		$files = DB::table('customer_registration_docs')->select('customer_registration_docs.*')->where('customer_registration_id', $id)->get();
		
		$data['files'] = $files;
        return view('admin.customer_registration.edit',compact('patient','data'));
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

        return redirect()->route('admin.customer_registration.index');
    }
	
	public function get_party_centers(Request $request)
    {
		$party_id = $request->party_id;
		$center_id = isset($request->center_id) ? $request->center_id : '';
		$partyCenters = CustomerRegistrationCenter::where('customer_registration_id', $party_id)->get();
		$html = '';	
		$status = 0;	
		$message = 'No party centers found';
		
		if(isset($partyCenters)){
			foreach($partyCenters as $single){
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
        return redirect()->route('admin.customer_registration.index');
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