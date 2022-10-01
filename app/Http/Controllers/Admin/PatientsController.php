<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Countries;
use App\Models\Provinces;
use App\Models\Cities;
use App\Http\Requests\Admin\PatientRequest;
use App\Http\Requests\Admin\ExcelImportRequest;
use App\Exports\PatientExport;
use App\Imports\PatientImport;
use Str;
use DataTables;
use Excel;
class PatientsController extends Controller
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
        $patients=Patient::all();
        return view('admin.patients.index',compact('patients'));
    }

    /**
    * get patients datatable
    *
    * @access public
    * @var  @Request $request
    */
    public function ajax(Request $request)
    {
        $model=Patient::query();

        return DataTables::eloquent($model)
        ->addColumn('action',function($patient){
            return view('admin.patients._action',compact('patient'));
        })
        ->toJson();
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
		return view('admin.patients.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PatientRequest $request)
    {
		$profile_image = '';
		 //Profile Image
        if($request->hasFile('profile_image'))
        {
            //upload profile_image
            $signature=$request->file('profile_image');
            // $signature_name=$id.'.'.$signature->getClientOriginalExtension();
            $signature_name=time().'.'.$signature->getClientOriginalExtension(); // Ahmed
            $signature->move('uploads/profile_images',$signature_name);
            $profile_image=$signature_name;
        }
		
        $patient=Patient::create([
            'code'=>patient_code(),
			'profile_image'=>$profile_image,
            'fname'=>$request->fname,
            'midname'=>$request->midname,
            'lname'=>$request->lname,
            'gender'=>$request->gender,
            'dob'=>$request->dob,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'address'=>$request->address,
            'patient_type'=>$request->patient_type,
            'reg_date'=>$request->reg_date,
            'salutation'=>$request->salutation,
            'guardian'=>$request->guardian,
            'age'=>$request->age,
            'guardian_name'=>$request->guardian_name,
            'martial_status'=>$request->martial_status,
            'remarks'=>$request->remarks,
            /////////// new ////////////
            'religion'=>$request->religion,
            'passport_no'=>$request->passport_no,
            'ex_date'=>$request->ex_date,
            'blood_group'=>$request->blood_group,
            /////////// end ////////////
            'cnic'=>$request->cnic,
            'country'=>$request->country,
            'province'=>$request->province,
            'city'=>$request->city,
            'nationality'=>$request->nationality,
            'postal_address'=>$request->postal_address,
            'emerg_contact_name'=>$request->emerg_contact_name,
            'emerg_contact_rel'=>$request->emerg_contact_rel,
            'emerg_contact_ph'=>$request->emerg_contact_ph,
            'mobile_no1'=>$request->mobile_no1,
            'mobile_no2'=>$request->mobile_no2,
            'emerg_contact_ph'=>$request->emerg_contact_ph,
        ]);

        //send patient code notification
        //send_notification('patient_code',$patient);

        session()->flash('success','Patient created successfully');

        return redirect()->route('admin.patients.index');
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
        $patient=Patient::findOrFail($id);
		
		$date = new \DateTime($patient->dob);
        $now = new \DateTime();
        $interval = $now->diff($date);
		
		$data['interval']=$interval;
		$data['countries']=Countries::all();
		$data['provinces']=Provinces::all();
		$data['cities']=Cities::where('province_id', 1)->get();
        return view('admin.patients.edit',compact('patient','data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PatientRequest $request, $id)
    {
        $patient=Patient::findOrFail($id);
		$profile_image = '';
		 //Profile Image
        if($request->hasFile('profile_image'))
        {
            //upload profile_image
            $signature=$request->file('profile_image');
            $signature_name=$id.'.'.$signature->getClientOriginalExtension();
            $signature->move('uploads/profile_images',$signature_name);
            $profile_image=$signature_name;
        }
		
		if($request->hasFile('profile_image')){
			$patient->update([
			'profile_image'=>$profile_image
			]);
		}
        $patient->update([
            'fname'=>$request->fname,
            'midname'=>$request->midname,
            'lname'=>$request->lname,
            'gender'=>$request->gender,
            'dob'=>$request->dob,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'address'=>$request->address,
            'patient_type'=>$request->patient_type,
            'reg_date'=>$request->reg_date,
            'salutation'=>$request->salutation,
            'guardian'=>$request->guardian,
            'age'=>$request->age,
            'guardian_name'=>$request->guardian_name,
            'martial_status'=>$request->martial_status,
            'remarks'=>$request->remarks,
            //
            'religion'=>$request->religion,
            'passport_no'=>$request->passport_no,
            'ex_date'=>$request->ex_date,
            'blood_group'=>$request->blood_group,
            //
            'cnic'=>$request->cnic,
            'country'=>$request->country,
            'province'=>$request->province,
            'city'=>$request->city,
            'nationality'=>$request->nationality,
            'postal_address'=>$request->postal_address,
            'emerg_contact_name'=>$request->emerg_contact_name,
            'emerg_contact_rel'=>$request->emerg_contact_rel,
            'emerg_contact_ph'=>$request->emerg_contact_ph,
            'mobile_no1'=>$request->mobile_no1,
            'mobile_no2'=>$request->mobile_no2,
            'emerg_contact_ph'=>$request->emerg_contact_ph,
        ]);
        
        if($request->patient_type == 'Local Patient'){
            $patient->update([
                'religion'=>null,
                'passport_no'=>null,
                'ex_date'=>null,
                'blood_group'=>null,
            ]);
        }

        session()->flash('success','Patient data updated successfully');

        return redirect()->route('admin.patients.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patient=Patient::findOrFail($id);//get patient
        $patient->groups()->delete();//delete groups
        $patient->delete();//delete patient
        session()->flash('success',__('Patient deleted successfully'));
        return redirect()->route('admin.patients.index');
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
