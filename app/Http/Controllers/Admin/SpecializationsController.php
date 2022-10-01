<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\SpecializationRequest;
use App\Http\Requests\Admin\ExcelImportRequest;
use App\Exports\DoctorExport;
use App\Imports\DoctorImport;
use App\Models\Specializations;
use DataTables;
use Excel;
use DB;
class SpecializationsController extends Controller
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
        return view('admin.specializations.index');
    }

    /**
    * get antibiotics datatable
    *
    * @access public
    * @var  @Request $request
    */
    public function ajax(Request $request)
    {
         $getData = DB::table('specializations')->select('specializations.*')->get();
		
		return DataTables::of($getData)
        ->addColumn('action',function($doctor){
			//$patient = (object)$patient;
            return view('admin.specializations._action',compact('doctor'));
        })->make(true); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		return view('admin.specializations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SpecializationRequest $request)
    {
      
        $doctor=Specializations::create([
            'name_eng'=>$request->name_eng,
            'name_local'=>$request->name_local,
        ]);

        session()->flash('success',__('Specialization created successfully'));

        return redirect()->route('admin.specializations.index');
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
		$doctor=Specializations::findOrFail($id);
        return view('admin.specializations.edit',compact('doctor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SpecializationRequest $request, $id)
    {
        $doctor=Specializations::findOrFail($id);
        $doctor->update([
            'name_eng'=>$request->name_eng,
            'name_local'=>$request->name_local,
        ]);
        session()->flash('success',__('Specialization updated successfully'));

        return redirect()->route('admin.specializations.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $doctor=Specializations::findOrFail($id);
        $doctor->delete();

        session()->flash('success',__('Specialization deleted successfully'));

        return redirect()->route('admin.specializations.index');
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
        return Excel::download(new DoctorExport, 'specializations.xlsx');
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
