<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Organizations,Sections};
use App\Http\Requests\Admin\DepartmentRequest;
use App\Http\Requests\Admin\ExcelImportRequest;
use App\Exports\DoctorExport;
use App\Imports\DoctorImport;
use App\Models\Departments;
use DataTables;
use Excel;
use DB;
class DepartmentsController extends Controller
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
        $patients=Departments::all();
        return view('admin.departments.index',compact('patients'));
    }

    /**
    * get antibiotics datatable
    *
    * @access public
    * @var  @Request $request
    */
    public function ajax(Request $request)
    {
         $getData = DB::table('departments')
         ->join('organizations', 'organizations.id', '=', 'departments.org_id','left')
         ->join('sections', 'sections.id', '=', 'departments.sctn_id','left')
         ->select('departments.*', 'organizations.name_eng as org_name_eng', 'sections.name_eng as sec_name_eng', DB::raw('(CASE
         WHEN departments.is_active = 0 THEN "In-Active"
         WHEN departments.is_active = 1 THEN "Active"
         WHEN departments.is_active = 2 THEN "Suspend"
         ELSE "Close" END) AS is_active'))->get();
     ;

		return DataTables::of($getData)
        ->addColumn('action',function($doctor){
			//$patient = (object)$patient;
            return view('admin.departments._action',compact('doctor'));
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
		$data['sections']=Sections::all();
		return view('admin.departments.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DepartmentRequest $request)
    {

        $doctor=Departments::create([
            'org_id'=>$request->org_id,
            'name_eng'=>$request->name_eng,
            'name_local'=>$request->name_local,
            'remarks'=>$request->remarks,
            'sctn_id'=>$request->sctn_id,
            'contact_name'=>$request->contact_name,
            'is_active'=>$request->status,
        ]);

        session()->flash('success',__('Department created successfully'));

        return redirect()->route('admin.departments.index');
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
		$patient=Departments::findOrFail($id);
        $data['organizations']=Organizations::all();
		$data['sections']=Sections::all();
        return view('admin.departments.edit',compact('patient','data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DepartmentRequest $request, $id)
    {
        // return $request;
        $doctor=Departments::findOrFail($id);
        $doctor->update([
            'org_id'=>$request->org_id,
            'name_eng'=>$request->name_eng,
            'name_local'=>$request->name_local,
            'remarks'=>$request->remarks,
            'sctn_id'=>$request->sctn_id,
            'contact_name'=>$request->contact_name,
            'is_active'=>$request->status,
        ]);
        session()->flash('success',__('Department updated successfully'));

        return redirect()->route('admin.departments.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $doctor=Departments::findOrFail($id);
        $doctor->delete();

        session()->flash('success',__('Department deleted successfully'));

        return redirect()->route('admin.departments.index');
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
        return Excel::download(new DoctorExport, 'departments.xlsx');
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
