<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Countries;
use App\Models\Provinces;
use App\Models\Cities;
use App\Models\Labs;
use App\Models\Faranchises;
use App\Models\Organizations;
use App\Models\TestRegistration;
use App\Models\CustomerRegistration;
use App\Models\FaranchisesPriceList;
use App\Http\Requests\Admin\FaranchisesPriceListRequest;
use App\Http\Requests\Admin\ExcelImportRequest;
use App\Exports\PatientExport;
use App\Imports\PatientImport;
use Str;
use DataTables;
use Excel;
use DB;
class FaranchisePriceListController extends Controller
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
        $patients=FaranchisesPriceList::all();
        return view('admin.faranchise_price_list.index',compact('patients'));
    }

    /**
    * get patients datatable
    *
    * @access public
    * @var  @Request $request
    */
    public function ajax(Request $request)
    {
		 $getData = DB::table('faranchises_price_lists')
		->join('organizations', 'organizations.id', '=', 'faranchises_price_lists.org_id','left')
		->join('faranchises', 'faranchises.id', '=', 'faranchises_price_lists.franchise_id','left')
		->join('labs', 'labs.id', '=', 'faranchises_price_lists.lab_id','left')
		->select('faranchises_price_lists.*' ,'faranchises.name_eng as faranchise_name','labs.name_eng as lab_name', 'organizations.name_eng as org_name_eng', DB::raw('(CASE 
			WHEN faranchises_price_lists.status = 0 THEN "Active" 
			ELSE "In-Active" END) AS status_label'))->get();
		
		return DataTables::of($getData)
        ->addColumn('action',function($patient){
			//$patient = (object)$patient;
            return view('admin.faranchise_price_list._action',compact('patient'));
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
		$data['customers']=CustomerRegistration::all();
		$data['tests']=TestRegistration::all();
		$data['labs']=Labs::all();
		$data['franchises']=Faranchises::all();
		return view('admin.faranchise_price_list.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FaranchisesPriceListRequest $request)
    {
        $patient=FaranchisesPriceList::create([
            'org_id'=>$request->org_id,
            'lab_id'=>$request->lab_id,
            'franchise_id'=>$request->franchise_id,
            'start_date'=>$request->start_date,
            'end_date'=>$request->end_date,
            'status'=>$request->status
        ]);

        //send patient code notification
        //send_notification('patient_code',$patient);

        session()->flash('success','Franchise Price list created successfully');

        return redirect()->route('admin.faranchise_price_list.index');
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
        $patient=FaranchisesPriceList::findOrFail($id);
		$data['organizations']=Organizations::all();
		$data['customers']=CustomerRegistration::all();
		$data['tests']=TestRegistration::all();
		$data['labs']=Labs::all();
		$data['franchises']=Faranchises::all();
		//$data['price_list']= FaranchisesPriceListsDiscount::where('cust_price_list_id',$id)->get();
		
		
		 $data['price_list'] = DB::table('faranchise_price_lists_discounts')
		->join('test_registrations', 'test_registrations.id', '=', 'faranchise_price_lists_discounts.test_id','left')
		->select('faranchise_price_lists_discounts.*' ,'test_registrations.name_eng as test_name', DB::raw('(CASE 
			WHEN faranchise_price_lists_discounts.discount_type = 1 THEN "Value" 
			ELSE "Percent" END) AS status_label_type'), DB::raw('(CASE 
			WHEN faranchise_price_lists_discounts.status = 0 THEN "Offered" 
			WHEN faranchise_price_lists_discounts.status = 1 THEN "Agreed" 
			ELSE "Disputed" END) AS status_label'))->get();
			
        return view('admin.faranchise_price_list.edit',compact('patient','data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FaranchisesPriceListRequest $request, $id)
    {
        $patient=FaranchisesPriceList::findOrFail($id);
		
        $patient->update([
            'org_id'=>$request->org_id,
            'lab_id'=>$request->lab_id,
            'franchise_id'=>$request->franchise_id,
            'start_date'=>$request->start_date,
            'end_date'=>$request->end_date,
            'status'=>$request->status
        ]);

        session()->flash('success','Franchise price list updated successfully');

        return redirect()->route('admin.faranchise_price_list.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patient=FaranchisesPriceList::findOrFail($id);//get patient
        $patient->groups()->delete();//delete groups
        $patient->delete();//delete patient
        session()->flash('success',__('Customer price list deleted successfully'));
        return redirect()->route('admin.faranchise_price_list.index');
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