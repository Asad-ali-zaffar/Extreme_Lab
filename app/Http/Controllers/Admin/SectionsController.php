<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sections;
use Illuminate\Http\Request;
use App\Models\Organizations;
use App\Http\Requests\Admin\UnitsRequest;
use App\Http\Requests\Admin\ExcelImportRequest;
use App\Exports\PatientExport;
use App\Imports\PatientImport;
use Str;
use DataTables;
use Excel;
use DB;

class SectionsController extends Controller
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
        $patients=Sections::all();
        return view('admin.section.index',compact('patients'));
    }/**
    * get patients datatable
    *
    * @access public
    * @var  @Request $request
    */
    public function ajax(Request $request)
    {

        $getData = DB::table('sections')
		->join('organizations', 'organizations.id', '=', 'sections.org_id','left')
		->select('sections.*', 'organizations.name_eng as org_name_eng', DB::raw('(CASE
			WHEN sections.status = 0 THEN "In-Active"
			WHEN sections.status = 1 THEN "Active"
			WHEN sections.status = 2 THEN "Suspend"
			ELSE "Close" END) AS status'))->get();
		return DataTables::of($getData)
        ->addColumn('action',function($patient){
			// $patient = (object)$patient;
            return view('admin.section._action',compact('patient'));
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
		return view('admin.section.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $patients=Sections::create([
            'org_id'=>$request->org_id,
            'name_eng'=>$request->name_eng,
            'name_local'=>$request->name_local,
            'status'=>$request->status,
        ]);

        session()->flash('success','Section created successfully');

        return redirect()->route('admin.section.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sections  $sections
     * @return \Illuminate\Http\Response
     */
    public function show(Sections $sections)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sections  $sections
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $patient=Sections::findOrFail($id);
		$data['organizations']=Organizations::all();
        return view('admin.section.edit',compact('patient','data'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sections  $sections
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $patient=Sections::findOrFail($id);
        $patient->update([
            'org_id'=>$request->org_id,
            'name_eng'=>$request->name_eng,
            'name_local'=>$request->name_local,
            'status'=>$request->status,
        ]);
        session()->flash('success','Section data updated successfully');

        return redirect()->route('admin.section.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sections  $sections
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $record = DB::table('sections')->where('id',$id)->first();
        DB::table('sections')->where('id', '=', $id)->delete();
        session()->flash('success',__('Section deleted successfully'));
        return redirect()->route('admin.section.index');

    }
}
