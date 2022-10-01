<?php

namespace App\Http\Controllers\Admin;

use App\Models\Payment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\UnitsRequest;
use App\Http\Requests\Admin\ExcelImportRequest;
use App\Exports\PatientExport;
use App\Imports\PatientImport;
use Str;
use DataTables;
use Excel;
use DB;
use PhpParser\Node\Stmt\Return_;

class PaymentController extends Controller
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
        $patients = Payment::all();
        return view('admin.payments.index', compact('patients'));
    }
    /**
     * get antibiotics datatable
     *
     * @access public
     * @var  @Request $request
     */
    public function ajax(Request $request)
    {
        $getData = DB::table('payments')
            ->select('payments.*',  DB::raw('(CASE
			WHEN payments.status = 0 THEN "In-Active"
			WHEN payments.status = 1 THEN "Active"
			WHEN payments.status = 2 THEN "Suspend"
			ELSE "Close" END) AS status'),  DB::raw('(CASE
			WHEN payments.pay_group = 0 THEN "Cash"
			WHEN payments.pay_group = 1 THEN "Creadit Card"
			WHEN payments.pay_group = 2 THEN "Both"
			ELSE "Close" END) AS pay_group'))->get();

        return DataTables::of($getData)
            ->addColumn('action', function ($patient) {
                //$patient = (object)$patient;
                return view('admin.payments._action', compact('patient'));
            })->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['payment']=Payment::all();
		return view('admin.payments.create',compact('data'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $patients=Payment::create([
            'name_eng'=>$request->name_eng,
            'name_local'=>$request->name_local,
            'pay_group'=>$request->pay_group,
            'status'=>$request->status,
        ]);

        session()->flash('success','Payment created successfully');

        return redirect()->route('admin.payments.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $patient=Payment::findOrFail($id);
        return view('admin.payments.edit',compact('patient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $patient=Payment::findOrFail($id);
        $patient->update([
            'name_eng'=>$request->name_eng,
            'name_local'=>$request->name_local,
            'pay_group'=>$request->pay_group,
            'status'=>$request->status,
        ]);
        session()->flash('success','Payment data updated successfully');

        return redirect()->route('admin.payments.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $record = DB::table('payments')->where('id',$id)->first();
        DB::table('payments')->where('id', '=', $id)->delete();
        session()->flash('success',__('Payment deleted successfully'));
        return redirect()->route('admin.payments.index');
    }
}
