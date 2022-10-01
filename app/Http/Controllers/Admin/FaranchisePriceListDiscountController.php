<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\FaranchisePriceListsDiscount;
use App\Http\Requests\Admin\FaranchisePriceListDiscountRequest;
use App\Http\Requests\Admin\ExcelImportRequest;
use App\Exports\PatientExport;
use App\Imports\PatientImport;
use Str;
use DataTables;
use Excel;
use DB;
class FaranchisePriceListDiscountController extends Controller
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
        $patients=FaranchisePriceListsDiscount::all();
        return view('admin.faranchise_price_list.index',compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$data = array();
		return view('admin.faranchise_price_list.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FaranchisePriceListDiscountRequest $request)
    {
        $patient=FaranchisePriceListsDiscount::create([
            'test_id'=>$request->test_id,
            'faranchise_list_id'=>$request->faranchise_list_id,
            'discount_type'=>$request->discount_type,
            'price'=>$request->price,
            'party_price'=>$request->party_price,
            'reporting_days'=>$request->reporting_days,
            'status'=>$request->status
        ]);

        //send patient code notification
        //send_notification('patient_code',$patient);

        //session()->flash('success','Discount created successfully');
		
		return response()->json(array('status'=>1,'message'=>"Discount created successfully"));
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
        $patient=FaranchisePriceListsDiscount::findOrFail($id);
		$data['organizations']=Organizations::all();
		$data['customers']=CustomerRegistration::all();
		$data['tests']=TestRegistration::all();
		$data['price_list']= FaranchisePriceListsDiscount::where('faranchise_list_id',$id);
		
        return view('admin.faranchise_price_list.edit',compact('patient','data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FaranchisePriceListDiscountRequest $request, $id)
    {
        $patient=FaranchisePriceListsDiscount::findOrFail($id);
		
        $patient->update([
            'org_id'=>$request->org_id,
            'cust_id'=>$request->cust_id,
            'cust_type'=>$request->cust_type,
            'start_date'=>$request->start_date,
            'end_date'=>$request->end_date,
            'status'=>$request->status
        ]);

        session()->flash('success','Customer price list updated successfully');

        return redirect()->route('admin.customer_price_list.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patient=FaranchisePriceListsDiscount::findOrFail($id);//get patient
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