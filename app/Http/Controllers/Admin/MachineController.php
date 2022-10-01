<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Machines;
use App\Models\Departments;
use App\Models\Organizations;
use App\Http\Requests\Admin\UnitsRequest;
use App\Http\Requests\Admin\ExcelImportRequest;
use App\Exports\PatientExport;
use App\Imports\PatientImport;
use Str;
use DataTables;
use Excel;
use DB;

class MachineController extends Controller
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
        $patients=Machines::all();
        return view('admin.machine.index',compact('patients'));
    }
 /**
    * get patients datatable
    *
    * @access public
    * @var  @Request $request
    */
    public function ajax(Request $request)
    {

        $getData = DB::table('machines')
		->join('organizations', 'organizations.id', '=', 'machines.org_id','left')
        ->join('departments', 'departments.id', '=', 'machines.dpt_id','left')
		->select('machines.*', 'organizations.name_eng as org_name_eng', DB::raw('(CASE
			WHEN machines.status = 0 THEN "In-Active"
			WHEN machines.status = 1 THEN "Active"
			WHEN machines.status = 2 THEN "Suspend"
			ELSE "Close" END) AS status'))->get();
		return DataTables::of($getData)
        ->addColumn('action',function($patient){
			//$patient = (object)$patient;
            return view('admin.machine._action',compact('patient'));
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
		$data['departments']=Departments::all();
		return view('admin.machine.create',compact('data'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $patients=Machines::create([
            'org_id'=>$request->org_id,
            'name_eng'=>$request->name_eng,
            'name_local'=>$request->name_local,
            'ip_address'=>$request->ip_address,
            'network_loaction'=>$request->ph1,
            'dpt_id'=>$request->dept_id,
            'mfr_by'=>$request->mfr_by,
            'splr'=>$request->splr,
            'remarks'=>$request->remarks,
            'status'=>$request->status,
        ]);

        session()->flash('success','Machine created successfully');

        return redirect()->route('admin.machine.index');
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

        $patient=Machines::findOrFail($id);
		$data['organizations']=Organizations::all();
		$data['departments']=Departments::all();
        return view('admin.machine.edit',compact('patient','data'));

    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $patient=Machines::findOrFail($id);
        $patient->update([
            'org_id'=>$request->org_id,
            'name_eng'=>$request->name_eng,
            'name_local'=>$request->name_local,
            'ip_address'=>$request->ip_address,
            'network_loaction'=>$request->ph1,
            'dpt_id'=>$request->dept_id,
            'mfr_by'=>$request->mfr_by,
            'splr'=>$request->splr,
            'remarks'=>$request->remarks,
            'status'=>$request->status,
        ]);
        session()->flash('success','Machine data updated successfully');

        return redirect()->route('admin.machine.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $record = DB::table('machines')->where('id',$id)->first();
        DB::table('machines')->where('id', '=', $id)->delete();
        session()->flash('success',__('Machine deleted successfully'));
        return redirect()->route('admin.machine.index');
    }
}
