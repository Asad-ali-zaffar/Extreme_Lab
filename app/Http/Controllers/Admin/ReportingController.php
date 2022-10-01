<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Airlines;
use App\Models\CustomerRegistration;

use App\Models\CustomerRegistrationCenter;
use App\Models\CustomerRegistrationLab;
use App\Models\Group;
use App\Models\Labs;
use App\Models\Patient as Patient;
use App\Models\Test;
use Illuminate\Http\Request;
use File;
use Artisan;
use PDF;
use Illuminate\Support\Facades\DB;

class ReportingController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:view_reporting', ['only' => ['index']]);
    }

    public function customer_registrations(Request $request)
    {
        $where = '1=1';
        $parties = CustomerRegistration::all()->pluck('name_eng', 'id');
        $data['parties'] = $parties;
        if ($request->date) {
            $date = explode(' - ', $request->date);
            $where .= " AND DATE(created_at) BETWEEN '" . date('Y-m-d', strtotime($date[0])) . "' AND '" . date('Y-m-d', strtotime($date[1])) . "'";
        }
        if ($request->filter_party_type) {
            $where .= ' AND party_type = ' . $request->filter_party_type;
        }
        if ($request->status) {
            $where .= ' AND status = ' . $request->status;
        }

        $data['customer_registrations'] = CustomerRegistration::whereRaw($where)->get();

        if ($request->has('download')) {
            generate_pdf('admin.reporting.pdfs.customer_registrations', $data);
        } else {
            return view('admin.reporting.customer_registrations', $data);
        }
    }

    public function inactive_patients(Request $request)
    {
        $where = '1=1';
        if ($request->date) {
            $date = explode(' - ', $request->date);
            $where .= " AND DATE(created_at) BETWEEN '" . date('Y-m-d', strtotime($date[0])) . "' AND '" . date('Y-m-d', strtotime($date[1])) . "'";
        }
        $data['customer_registrations'] = CustomerRegistration::where(['status' => 1])->whereRaw($where)->get();

        if ($request->has('download')) {
            generate_pdf('admin.reporting.pdfs.inactive_patients', $data);
        } else {
            return view('admin.reporting.inactive_patients', $data);
        }
    }

    public function daily_cash_reporting(Request $request)
    {
        $model = Group::query()->with('party')->with('lab')->with('patient')->orderBy('id', 'desc');
        $parties = CustomerRegistration::all()->pluck('name_eng', 'id');
        $labs = Labs::all()->pluck('name_eng', 'id');
        $customer_centers = CustomerRegistrationCenter::all()->pluck('name_eng', 'id');
        $lab_centers = CustomerRegistrationLab::all()->pluck('name_eng', 'id');
        $data = [
            'labs' => $labs,
            'parties' => $parties,
            'customer_centers' => $customer_centers,
            'lab_centers' => $lab_centers,
        ];

        $model->where('payment_type', 'CASH');

        if ($request->has('filter_type')) {
            $model->where('inv_type', $request['filter_type']);
        }
        if ($request->has('filter_party_center')) {
            $model->where('party_center_id', $request['filter_party_center']);
        }
        if ($request->has('filter_party_center')) {
            $model->where('party_center_id', $request['filter_party_center']);
        }
        if ($request->has('filter_lab')) {
            $model->where('lab_id', $request['filter_lab']);
        }
        if ($request->has('filter_lab_center')) {
            $model->where('lab_center_id', $request['filter_lab_center']);
        }

        if ($request->has('filter_barcode')) {
            $model->where('barcode', 'like', "%$request->filter_barcode%");
        }
        if ($request->has('filter_date')) {
            $date = explode('-', $request['filter_date']);
            $from = date('Y-m-d', strtotime($date[0]));
            $to = date('Y-m-d 23:59:59', strtotime($date[1]));

            //select groups of date between
            ($from == $to) ? $model->whereDate('created_at', $from) : $model->whereBetween('created_at', [$from, $to]);
        }

        $data['cash_activity'] = $model->get();
        //dd( $data['cash_activity'][0]->lab);
        if ($request->has('download')) {
            generate_pdf('admin.reporting.pdfs.daily_cash_reporting', $data);
        } else {
            return view('admin.reporting.daily_cash_reporting', $data);
        }
    }

    public function daily_credit_reporting(Request $request)
    {
        $model = Group::query()->with('party')->with('lab')->with('patient')->orderBy('id', 'desc');

        $model->where('payment_type', 'PAYMENT ORDER');
        $parties = CustomerRegistration::all()->pluck('name_eng', 'id');
        $labs = Labs::all()->pluck('name_eng', 'id');
        $customer_centers = CustomerRegistrationCenter::all()->pluck('name_eng', 'id');
        $lab_centers = CustomerRegistrationLab::all()->pluck('name_eng', 'id');
        $data = [
            'labs' => $labs,
            'parties' => $parties,
            'customer_centers' => $customer_centers,
            'lab_centers' => $lab_centers,
        ];

        if ($request->has('filter_type')) {
            $model->where('inv_type', $request['filter_type']);
        }
        if ($request->has('filter_party_center')) {
            $model->where('party_center_id', $request['filter_party_center']);
        }
        if ($request->has('filter_party_center')) {
            $model->where('party_center_id', $request['filter_party_center']);
        }
        if ($request->has('filter_lab')) {
            $model->where('lab_id', $request['filter_lab']);
        }
        if ($request->has('filter_lab_center')) {
            $model->where('lab_center_id', $request['filter_lab_center']);
        }

        if ($request->has('filter_barcode')) {
            $model->where('barcode', 'like', "%$request->filter_barcode%");
        }
        if ($request->has('filter_date')) {
            $date = explode('-', $request['filter_date']);
            $from = date('Y-m-d', strtotime($date[0]));
            $to = date('Y-m-d 23:59:59', strtotime($date[1]));

            //select groups of date between
            if($from == $to){
                $data['cash_activity']=Group::whereDate('created_at', $from)->get();
                return view('admin.reporting.daily_credit_reporting', $data);
            }
            else{
                $data['cash_activity']= Group::where('created_at', '>=', $from)->where('created_at', '<=', $to)->get();
                return view('admin.reporting.daily_credit_reporting', $data);
            }
            // ($from == $to) ? $model->whereDate('created_at', $from) : $model->whereBetween('created_at', [$from, $to]);
        }

        $data['cash_activity'] = $model->get();
        //dd( $data['cash_activity'][0]->lab);
        if ($request->has('download')) {
            generate_pdf('admin.reporting.pdfs.daily_credit_reporting', $data);
        } else {
            return view('admin.reporting.daily_credit_reporting', $data);
        }
    }

    public function patient_visit_report(Request $request)
    {
        // return $request;
        $model = Group::query()->with('party')->with('lab')->with('patient')->orderBy('id', 'desc');

        if ($request->has('filter_payment_type')) {
            $model->where('payment_type', 'like', "%$request->filter_payment_type%");
        }

        $parties = CustomerRegistration::all()->pluck('name_eng', 'id');
        $labs = Labs::all()->pluck('name_eng', 'id');
        $customer_centers = CustomerRegistrationCenter::all()->pluck('name_eng', 'id');
        $lab_centers = CustomerRegistrationLab::all()->pluck('name_eng', 'id');
        // $lab_centers = CustomerRegistrationLab::all();
        $data = [
            'labs' => $labs,
            'parties' => $parties,
            'customer_centers' => $customer_centers,
            'lab_centers' => $lab_centers,
        ];

        if ($request->has('filter_type')) {
            $model->where('inv_type', $request['filter_type']);
        }
        if ($request->has('filter_party_center')) {
            $model->where('party_center_id', $request['filter_party_center']);
        }
        if ($request->has('filter_party_center')) {
            $model->where('party_center_id', $request['filter_party_center']);
        }
        if ($request->has('filter_lab')) {
            $model->where('lab_id', $request['filter_lab']);
        }
        if ($request->has('filter_lab_center')) {
            $model->where('lab_center_id', $request['filter_lab_center']);
        }

        if ($request->has('filter_date')) {
            $date = explode('-', $request['filter_date']);
            $from = date('Y-m-d', strtotime($date[0]));
            $to = date('Y-m-d 23:59:59', strtotime($date[1]));

            //select groups of date between
            // $data['patient_visits']= Group::where('created_at', '>=', $from)->where('created_at', '<=', $to)->get();
            // ($from == $to) ?  $model->whereDate('created_at', $from) :  $model->whereBetween('created_at', [$from, $to]);

            // ($from == $to) ?  $data['patient_visits']=Group::whereDate('created_at', $from)->get() : $data['patient_visits']= Group::where('created_at', '>=', $from)->where('created_at', '<=', $to)->get();
            if($from == $to){
                $data['patient_visits']=Group::whereDate('created_at', $from)->get();
                return view('admin.reporting.patient_visit_report', $data);
            }
            else{
                $data['patient_visits']= Group::where('created_at', '>=', $from)->where('created_at', '<=', $to)->get();
                return view('admin.reporting.patient_visit_report', $data);
            }
        }
        $data['patient_visits'] = $model->get();
        //dd( $data['cash_activity'][0]->lab);
        if ($request->has('download')) {
            generate_pdf('admin.reporting.pdfs.patient_visit_report', $data);
        } else {
            return view('admin.reporting.patient_visit_report', $data);
        }
    }

    public function patient_registration_report(Request $request)
    {
        $where = '1=1';
        $data['patient_registrations']=array();
        if ($request->date) {
            $date = explode('-', $request->date);
            $from = date('Y-m-d', strtotime($date[0]));
            $to = date('Y-m-d', strtotime($date[1]));
            $data['patient_registrations'] = Patient::where('dob', '>=', $from)->where('dob', '<=', $to)->get();
            return view('admin.reporting.patient_registration_report', $data);
        }
        if ($request->status) {
            $where .= ' AND status = ' . $request->status;
        }
        $data['patient_registrations'] = Patient::whereRaw($where)->get();
        if ($request->has('download')) {
            generate_pdf('admin.reporting.pdfs.patient_registration_report', $data);
        } else {
            return view('admin.reporting.patient_registration_report', $data);
        }
    }

    public function test_history_report(Request $request)
    {
        // return $request;
        $airlines = Airlines::all()->pluck('name_eng', 'id');
        $parties = CustomerRegistration::all()->pluck('name_eng', 'id');
        $tests = Test::all()->pluck('name', 'id');
        $data = [
            'airlines' => $airlines,
            'parties' => $parties,
            'tests' => $tests,

        ];

        $filters = [
            'date' => '',
            'filter_party' => '',
            'filter_test' => '',
            'filter_airline' => '',
        ];
        // $date = '';

        if ($request->date) {
            $data['date'] = $request->date;
            $filters['date'] = $request->date;
        }
        if ($request->filter_party) {
            $filters['filter_party'] = $request->filter_party;
        }
        if ($request->filter_test) {

            $filters['filter_test'] = $request->filter_test;
        }
        if ($request->filter_airline) {

            $filters['filter_airline'] = $request->filter_airline;
        }
        // dd($filters,$request->filter_test);
        $groups = CustomerRegistration::with([
            'tests' => function ($q) use ($filters) {
                if ($filters['date']) {
                    $dates = explode('-', $filters['date']);
                    $from = date('Y-m-d', strtotime($dates[0]));
                    $to = date('Y-m-d 23:59:59', strtotime($dates[1]));
                    ($from == $to) ? $q->whereDate('created_at', $from) : $q->whereBetween('created_at', [$from, $to]);

                    if ($filters['filter_airline']) {
                        $q->where('airline_id', $filters['filter_airline']);
                    }

                    /*if ($filters['filter_test']) {
                        $q->where('test_id',$filters['filter_test']);
                    }*/
                }
            }
        ])->orderBy('id', 'desc');

        if ($request->filter_party) {
            $groups->where('id', $request->filter_party);
        }

        $data['test_history'] = $groups->get();
        //dd($data['test_history']);
        if ($request->has('download')) {
            generate_pdf('admin.reporting.pdfs.test_history', $data);
        } else {
            return view('admin.reporting.test_history', $data);
        }
    }
}
