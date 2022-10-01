<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Labs;
use App\Models\Usershift;
use App\Http\Requests\Admin\UsershiftRequest;
use App\Http\Requests\Admin\ExcelImportRequest;
use App\Exports\PatientExport;
use App\Imports\PatientImport;
use Str;
use DataTables;
use Excel;
use DB;
class UsershiftController extends Controller
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
		
        $patients=Usershift::all();
        return view('admin.usershift.index');
    }

    /**
    * get patients datatable
    *
    * @access public
    * @var  @Request $request
    */
    public function ajax(Request $request)
    {
		$getData = DB::table('usershifts')
		->join('labs', 'labs.id', '=', 'usershifts.lab_id','left')
		->join('users', 'users.id', '=', 'usershifts.added_by','left')
		->select('usershifts.*', 'labs.name_eng as lab_name_eng', 'users.name as added_by_name', DB::raw('(CASE WHEN usershifts.status = 0 THEN "OPEN" ELSE "CLOSE" END) AS status_label')); 
		
		return DataTables::of($getData)
        ->addColumn('action',function($patient){
			//$patient = (object)$patient;
            return view('admin.usershift._action',compact('patient'));
        })->make(true); 
		
		
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$data = array();
		$data['labs']=Labs::all();
		$data['supervisor_shifts'] = DB::table('supervisorshifts')
		->join('labs', 'labs.id', '=', 'supervisorshifts.lab_id','left')
		->join('users', 'users.id', '=', 'supervisorshifts.added_by','left')
		->select('supervisorshifts.*', 'labs.name_eng as lab_name_eng', 'users.name as added_by_name', DB::raw('(CASE WHEN supervisorshifts.status = 0 THEN "OPEN" ELSE "CLOSE" END) AS status_label'))->where('shift_date',date('d-m-Y'))->get(); 
		return view('admin.usershift.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsershiftRequest $request)
    {
        $patient=Usershift::create([
            'lab_id'=>$request->lab_id,
            'shift_prefix'=>$request->shift_prefix,
            'status'=>$request->status,
            'added_by'=>auth()->guard('admin')->user()['id'],
        ]);

        //send patient code notification
        //send_notification('patient_code',$patient);

        session()->flash('success','User shift created successfully');

        return redirect()->route('admin.usershift.index');
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
		$data = array();
        $patient=Usershift::findOrFail($id);
		
		$data['supervisor_shifts'] = DB::table('supervisorshifts')
		->join('labs', 'labs.id', '=', 'supervisorshifts.lab_id','left')
		->join('users', 'users.id', '=', 'supervisorshifts.added_by','left')
		->select('supervisorshifts.*', 'labs.name_eng as lab_name_eng', 'users.name as added_by_name', DB::raw('(CASE WHEN supervisorshifts.status = 0 THEN "OPEN" ELSE "CLOSE" END) AS status_label'))->where('shift_date',date('d-m-Y'))->get(); 
		
		$data['labs']=Labs::all();
        return view('admin.usershift.edit',compact('patient','data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UsershiftRequest $request, $id)
    {
        $patient=Usershift::findOrFail($id);
		
        $patient->update([
            'lab_id'=>$request->lab_id,
            'shift_prefix'=>$request->shift_prefix,
            'status'=>$request->status,
            'added_by'=>auth()->guard('admin')->user()['id'],
        ]);

        session()->flash('success','User shift data updated successfully');

        return redirect()->route('admin.usershift.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('usershifts')->where('id', '=', $id)->delete();
        session()->flash('success',__('User shift deleted successfully'));
        return redirect()->route('admin.usershift.index');
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
