<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\Test;
use App\Models\Setting;
use App\Models\Patient;
use App\Models\Countries;
use App\Models\Provinces;
use App\Models\Cities;
use App\Models\DiscountRole;
use App\Models\CustomerRegistration;
use App\Models\TestRegistration;
use App\Models\Labs;
use App\Models\Airlines;
use App\Models\Doctor;
use App\Models\Organizations;
use App\Http\Requests\Admin\GroupRequest;
use DataTables;
use CodeItNow\BarcodeBundle\Utils\BarcodeGenerator;

class GroupsController extends Controller
{
     /**
     * assign roles
     */
    public function __construct()
    {
        $this->middleware('can:view_group',     ['only' => ['index', 'show','ajax']]);
        $this->middleware('can:create_group',   ['only' => ['create', 'store']]);
        $this->middleware('can:edit_group',     ['only' => ['edit', 'updae']]);
        $this->middleware('can:delete_group',   ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.groups.index');
    }
	
	public function searching(Request $request)
    {
		$count = Group::count();
		$data['labs']=Labs::all();
		$data['parties']=CustomerRegistration::all();
		return view('admin.groups.searching',compact('count','data'));
    }
	public function invoice_statuses(Request $request)
    {
		$count = Group::count();
		$data['labs']=Labs::all();
		$data['parties']=CustomerRegistration::all();
		return view('admin.groups.invoice_statuses',compact('count','data'));
    }
	
	
	public function invoice_cancel_req($id)
    {
		$count = Group::count();
		$data['discountroles']=DiscountRole::all();
		$data['countries']=Countries::all();
		$data['provinces']=Provinces::all();
		$data['organizations']=Organizations::all();
		$data['patients']=Patient::all();
		$data['tests']=TestRegistration::all();
		$data['labs']=Labs::all();
		$data['parties']=CustomerRegistration::all();
		$data['airlines']=Airlines::all();
		$data['doctors']=Doctor::all();
		$data['cities']=Cities::where('province_id', 1)->get();
		$date = new \DateTime(date('Y-m-d'));
        $now = new \DateTime();
        $interval = $now->diff($date);
		
		$data['interval']=$interval;
		
		$group = '';
		if(isset($id) && $id != 0){
			$group=Group::with(['tests','cultures'])->findOrFail($id);
			$tests=Test::where('parent_id',0)->orWhere('separated',true)->get();
			return view('admin.groups.invoice_cancel_req',compact('count','data','group'));
		}	
		else{
			return view('admin.groups.invoice_cancel_req',compact('count','data'));
		}
    }

	
    /**
    * get groups datatable
    *
    * @access public
    * @var  @Request $request
    */
    public function ajax(Request $request)
    {
        $model=Group::query()->with('patient')->orderBy('id','desc');

        if($request['filter_status']!=null)
        {
            $model->where('done',$request['filter_status']);
        }

        if($request['filter_type']!=null)
        {
            $model->where('inv_type',$request['filter_type']);
        }

        if($request['filter_barcode']!=null)
        {
            $model->where('barcode',$request['filter_barcode']);
        }

        if($request['filter_date']!=null)
        {
            //format date
            $date=explode('-',$request['filter_date']);
            $from=date('Y-m-d',strtotime($date[0]));
            $to=date('Y-m-d 23:59:59',strtotime($date[1]));

            //select groups of date between
            ($from==$to)?$mode->whereDate('created_at',$from):$model->whereBetween('created_at',[$from,$to]);
        }
        
        return DataTables::eloquent($model)
        ->editColumn('inv_type',function($group){
            return ($group['inv_type'] == 1 ? 'Cash Sales' : 'Credit Sales');
        })
		->editColumn('subtotal',function($group){
            return formated_price($group['subtotal']);
        })
        ->editColumn('discount',function($group){
            return formated_price($group['discount']);
        })
        ->editColumn('total',function($group){
            return formated_price($group['total']);
        })
        ->editColumn('paid',function($group){
            return formated_price($group['paid']);
        })
        ->editColumn('due',function($group){
            return view('admin.groups._due',compact('group'));
        })
        ->editColumn('done',function($group){
            return view('admin.groups._status',compact('group'));
        })
        ->addColumn('action',function($group){
            return view('admin.groups._action',compact('group'));
        })
        ->toJson();
    }

    /**
    * get groups datatable
    *
    * @access public
    * @var  @Request $request
    */
    public function ajax_search(Request $request)
    {
        $model=Group::query()->with('patient')->orderBy('id','desc');

        if($request['filter_status']!=null)
        {
            $model->where('done',$request['filter_status']);
        }

        if($request['filter_type']!=null)
        {
            $model->where('inv_type',$request['filter_type']);
        }

        if($request['filter_barcode']!=null)
        {
            $model->where('barcode',$request['filter_barcode']);
        }
        if($request['filter_lab_id']!=null)
        {
            $model->where('lab_id',$request['filter_lab_id']);
        }
        if($request['filter_lab_center_id']!=null)
        {
            $model->where('lab_center_id',$request['filter_lab_center_id']);
        }
        if($request['filter_inv_no']!=null)
        {
            $model->where('inv_no',$request['filter_inv_no']);
        }
        if($request['filter_lab_party_id']!=null)
        {
            $model->where('party_id',$request['filter_lab_party_id']);
        }
        if($request['filter_amount_range']!=null)
        {
			if (strpos($request['filter_amount_range'], '-') !== false) {
				
				$exploded = explode('-',$request['filter_amount_range']);
				
				$model->where('total','>=',$exploded[0]);
				$model->where('total','<=',$exploded[1]);
				
			}
			else{
				$model->where('total','>=',$request['filter_amount_range']);
			}
            
        }

        if($request['filter_date']!=null)
        {
            //format date
            $date=explode('-',$request['filter_date']);
            $from=date('Y-m-d',strtotime($date[0]));
            $to=date('Y-m-d 23:59:59',strtotime($date[1]));

            //select groups of date between
            ($from==$to)?$mode->whereDate('created_at',$from):$model->whereBetween('created_at',[$from,$to]);
        }
        
        return DataTables::eloquent($model)
        ->editColumn('inv_type',function($group){
            return ($group['inv_type'] == 1 ? 'Cash Sales' : 'Credit Sales');
        })
		->editColumn('subtotal',function($group){
            return formated_price($group['subtotal']);
        })
        ->editColumn('discount',function($group){
            return formated_price($group['discount']);
        })
        ->editColumn('total',function($group){
            return formated_price($group['total']);
        })
        ->editColumn('paid',function($group){
            return formated_price($group['paid']);
        })
        ->editColumn('due',function($group){
            return view('admin.groups._due',compact('group'));
        })
        ->editColumn('done',function($group){
            return view('admin.groups._status',compact('group'));
        })
        ->toJson();
    }
	
	public function ajax_requested_search(Request $request)
    {
		
        $model=Group::query()->with('patient')->orderBy('id','desc');
		$model->where('is_status_request','!=',0);
		
        if($request['filter_status']!=null)
        {
            $model->where('done',$request['filter_status']);
        }

        if($request['filter_type']!=null)
        {
            $model->where('inv_type',$request['filter_type']);
        }

        if($request['filter_barcode']!=null)
        {
            $model->where('barcode',$request['filter_barcode']);
        }
        if($request['filter_lab_id']!=null)
        {
            $model->where('lab_id',$request['filter_lab_id']);
        }
        if($request['filter_lab_center_id']!=null)
        {
            $model->where('lab_center_id',$request['filter_lab_center_id']);
        }
        if($request['filter_inv_no']!=null)
        {
            $model->where('inv_no',$request['filter_inv_no']);
        }
        if($request['filter_lab_party_id']!=null)
        {
            $model->where('party_id',$request['filter_lab_party_id']);
        }
        if($request['filter_amount_range']!=null)
        {
			if (strpos($request['filter_amount_range'], '-') !== false) {
				
				$exploded = explode('-',$request['filter_amount_range']);
				
				$model->where('total','>=',$exploded[0]);
				$model->where('total','<=',$exploded[1]);
				
			}
			else{
				$model->where('total','>=',$request['filter_amount_range']);
			}
            
        }

        if($request['filter_date']!=null)
        {
            //format date
            $date=explode('-',$request['filter_date']);
            $from=date('Y-m-d',strtotime($date[0]));
            $to=date('Y-m-d 23:59:59',strtotime($date[1]));

            //select groups of date between
            ($from==$to)?$mode->whereDate('created_at',$from):$model->whereBetween('created_at',[$from,$to]);
        }
        
        return DataTables::eloquent($model)
        ->editColumn('inv_type',function($group){
            return ($group['inv_type'] == 1 ? 'Cash Sales' : 'Credit Sales');
        })
		->editColumn('subtotal',function($group){
            return formated_price($group['subtotal']);
        })
        ->editColumn('discount',function($group){
            return formated_price($group['discount']);
        })
        ->editColumn('total',function($group){
            return formated_price($group['total']);
        })
        ->editColumn('paid',function($group){
            return formated_price($group['paid']);
        })
        ->editColumn('due',function($group){
            return view('admin.groups._due',compact('group'));
        })
        ->editColumn('done',function($group){
            return view('admin.groups._status_request_invoice',compact('group'));
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
        //$tests=Test::where('parent_id',0)->orWhere('separated',true)->get();
       
		$date = new \DateTime(date('Y-m-d'));
        $now = new \DateTime();
        $interval = $now->diff($date);
		
		$data['interval']=$interval;
		$data['discountroles']=DiscountRole::all();
		$data['countries']=Countries::all();
		$data['provinces']=Provinces::all();
		$data['organizations']=Organizations::all();
		$data['patients']=Patient::all();
		$data['tests']=TestRegistration::all();
		$data['labs']=Labs::all();
		$data['parties']=CustomerRegistration::all();
		$data['airlines']=Airlines::all();
		$data['doctors']=Doctor::all();
		$data['cities']=Cities::where('province_id', 1)->get();
		
        return view('admin.groups.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GroupRequest $request)
    {
		
	   unset($_POST['code']);	
       $group=Group::create($request->except('_token','tests','cultures','DataTables_Table_0_length','DataTables_Table_1_length'));
       
       //store assigned tests
       if($request->has('tests'))
       {
           foreach($request['tests'] as $test)
           {
               $price=Test::find($test)['price'];
               
               GroupTest::create([
                   'group_id'=>$group->id,
                   'test_id'=>$test,
                   'price'=>$price
               ]);
           }
       }

       //barcode
       $this->generate_barcode($group);

       //assign default report 
       $this->assign_tests_report($group['id']);

       //calculations
       group_test_calculations($group['id']);

       //save receipt pdf
       $pdf=generate_pdf($group,2);

       if(isset($pdf))
       {
          $group->update(['receipt_pdf'=>$pdf]);
       }

       //send notification with the patient code
       $patient=Patient::find($group['patient_id']);
       send_notification('patient_code',$patient);

       session()->flash('success',__('Invoice saved successfully'));

       return redirect()->route('admin.groups.show',$group['id']);
    }
	
	public function request_for_cancel(Request $request)
    {
		
		$id = $_POST['hidden_id'];
		$inv_no = $_POST['inv_no'];
		$inv_reason = $_POST['inv_reason'];
		Group::where('inv_no',$inv_no)->update([
            'request_reason'=>$inv_reason,
            'is_status_request'=>1
        ]);
		
		session()->flash('success',__('Invoice Cancel Request sent successfully'));
        return redirect()->route('admin.invoice_cancel_req',$id);
	}
	
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $group=Group::with('tests.test')->findOrFail($id);

        return view('admin.groups.show',compact('group'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		$date = new \DateTime(date('Y-m-d'));
        $now = new \DateTime();
        $interval = $now->diff($date);
		
		$data['interval']=$interval;
		$data['discountroles']=DiscountRole::all();
		$data['countries']=Countries::all();
		$data['provinces']=Provinces::all();
		$data['organizations']=Organizations::all();
		$data['patients']=Patient::all();
		$data['tests']=TestRegistration::all();
		$data['labs']=Labs::all();
		$data['parties']=CustomerRegistration::all();
		$data['airlines']=Airlines::all();
		$data['doctors']=Doctor::all();
		$data['cities']=Cities::where('province_id', 1)->get();
		
        $group=Group::with(['tests','cultures'])->findOrFail($id);
        
		$tests=Test::where('parent_id',0)->orWhere('separated',true)->get();
       
        return view('admin.groups.edit',compact('group','tests','data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GroupRequest $request, $id)
    {
        $group=Group::findOrFail($id);

        $group->update($request->except('_method','_token','tests','cultures','DataTables_Table_0_length','DataTables_Table_1_length'));
        
        //old tests
        $group_tests=[];
        foreach($group['tests'] as $test)
        {
            array_push($group_tests,$test['test_id']);
        }
        
        //old cultures
        $group_cultures=[];
        foreach($group['cultures'] as $culture)
        {
            array_push($group_cultures,$culture['culture_id']);
        }

        //update tests
        if($request->has('tests'))
        {
            GroupTest::where('group_id',$id)->whereNotIn('test_id',$request['tests'])->delete(); 
            
            //assign new price
            $group_update_tests=GroupTest::where('group_id',$id)->whereIn('test_id',$request['tests'])->get();
            foreach($group_update_tests as $group_test)
            {
                $test=Test::find($group_test['test_id']);
                $group_test->update([
                    'price'=>$test['price']
                ]);
            }
        }else{
            GroupTest::where('group_id',$id)->delete();
        }

        //update cultures
        if($request->has('cultures'))
        {
            GroupCulture::where('group_id',$id)->whereNotIn('culture_id',$request['cultures'])->delete();
            //assign new price
            $group_update_cultures=GroupCulture::where('group_id',$id)->whereIn('culture_id',$request['cultures'])->get();
            foreach($group_update_cultures as $group_culture)
            {
                $culture=Culture::find($group_culture['culture_id']);
                $group_culture->update([
                    'price'=>$culture['price']
                ]);
            }
        }
        else{
            GroupCulture::where('group_id',$id)->delete();
        }


        //store assigned tests
        if($request->has('tests'))
        {
            foreach($request['tests'] as $test)
            {
                if(!in_array($test,$group_tests))
                {
                    $price=Test::find($test)['price'];
                
                    GroupTest::create([
                        'group_id'=>$group->id,
                        'test_id'=>$test,
                        'price'=>$price
                    ]);
                }
            }
        }

        //store assigned cultures
        $culture_options=CultureOption::where('parent_id',0)->get();
        if($request->has('cultures'))
        {
            foreach($request['cultures'] as $culture)
            {
                if(!in_array($culture,$group_cultures))
                {
                    $price=Culture::find($culture)['price'];
                
                    $group_culture=GroupCulture::create([
                        'group_id'=>$group->id,
                        'culture_id'=>$culture,
                        'price'=>$price
                    ]);

                    //assign default report
                    foreach($culture_options as $culture_option)
                    {
                        GroupCultureOption::create([
                            'group_culture_id'=>$group_culture['id'],
                            'culture_option_id'=>$culture_option['id'],
                        ]);
                    }
                }
            }
        }

        //assign default report 
        $this->assign_tests_report($id);

        //calculations
        group_test_calculations($id);

        //save receipt pdf
        $group=Group::with(['tests','cultures'])->where('id',$id)->first();

        $pdf=generate_pdf($group,2);
       
        if(isset($pdf))
        {
            $group->update(['receipt_pdf'=>$pdf]);
        }

        //send notification with the patient code
        $patient=Patient::find($group['patient_id']);
        send_notification('patient_code',$patient);

        session()->flash('success',__('Group updated successfully'));

        return redirect()->route('admin.groups.show',$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //delete group
        $group=Group::findOrFail($id);
        $group->delete();

        //delete group tests
        $group_tests=GroupTest::where('group_id',$id)->get();

        //delete test results
        foreach($group_tests as $group_test)
        {
           GroupTestResult::where('group_test_id',$group_test['id'])->delete();
        }
        GroupTest::where('group_id',$id)->delete();

        //delete group cultures
        $group_cultures=GroupCulture::where('group_id',$id)->get();
        foreach($group_cultures as $group_culture)
        {
            GroupCultureResult::where('group_culture_id',$group_culture['id'])->delete();
        }
        GroupCulture::where('group_id',$id)->delete();
        
        //return success
        session()->flash('success',__('Group deleted successfully'));
        return redirect()->route('admin.groups.index');
    }


    /**
     * generate pdf
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function pdf($id)
    {
        $group=Group::with('patient','analyses','cultures')->where('id',$id)->first();

        $response=generate_pdf($group,2);

        if(!empty($response))
        {
            return redirect($response['url']);
        }
        else{
            session()->flash('failed',__('Something Went Wrong'));
            return redirect()->back();
        }

    }


    /**
     * assign default tests report
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function assign_tests_report($id)
    {
        $group=Group::with('tests')->where('id',$id)->first();

        foreach($group['tests'] as $test)
        {
            if(!$test->has_results)
            {
                $test->update(['has_results'=>true]);
                
                $separated=Test::where('id',$test['test_id'])->first();
                
                if($separated['separated'])
                {
                    GroupTestResult::create([
                        'group_test_id'=>$test['id'],
                        'test_id'=>$test['test_id'],
                    ]);
                }

                foreach($test['test']['components'] as $component) 
                {
                    GroupTestResult::create([
                        'group_test_id'=>$test['id'],
                        'test_id'=>$component['id'],
                    ]);
                }
            }
        }
    }


    /**
     * generate barcode
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function generate_barcode($group)
    {
        $barcode=mt_rand(100000000000, 999999999999);
        
        $exist=Group::where('barcode',$barcode)->first();

        if($exist)
        {
            $this->generate_barcode($group);
        }

        Group::where('id',$group['id'])->update([
            'barcode'=>$barcode
        ]);
    }

    /**
     * print barcode
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function print_barcode(Request $request,$id)
    {
        $request->validate([
            'number'=>'required|numeric|min:1'
        ]);

        $group=Group::findOrFail($id);

        $number=$request['number'];

        $barcode = new BarcodeGenerator();
        $barcode->setText($group['barcode']);
        $barcode->setType(BarcodeGenerator::Ean13);
        $barcode->setScale(2);
        $barcode->setThickness(25);
        $barcode->setFontSize(10);
        
		$barcode_base64 = $barcode->generate();
		
        $pdf=print_barcode($group,$number,$barcode_base64);

        return redirect($pdf);
    }

    /**
     * send receipt mail
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function send_receipt_mail(Request $request,$id)
    {
        $group=Group::findOrFail($id);
        $patient=$group['patient'];

        send_notification('receipt',$patient,$group);

        session()->flash('success',__('Mail sent successfully'));

        return redirect()->route('admin.groups.index');
    }
}
