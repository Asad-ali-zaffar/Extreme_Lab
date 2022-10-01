<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CustomerRegistrationCenter;
use DataTables;
class CustomerRegistrationCenterController extends Controller
{
    /**
     * assign roles
     */
    public function __construct()
    {
        /* $this->middleware('can:view_culture_option',     ['only' => ['index', 'show','ajax']]);
        $this->middleware('can:create_culture_option',   ['only' => ['create', 'store']]);
        $this->middleware('can:edit_culture_option',     ['only' => ['edit', 'update']]);
        $this->middleware('can:delete_culture_option',   ['only' => ['destroy']]); */
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.culture_options.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
	
	 if(!isset($request['id'])){
		 
		  $vendor_lab=CustomerRegistrationCenter::create([
			  'center_id'=>$request['center_id'],
			  'status'=>$request['status'],
			  'name_eng'=>$request['center_name_eng'],
			  'name_local'=>$request['center_name_local'],
			  'customer_registration_id'=>$request['cust_id']
		  ]);
		  
		  //session()->flash('success',__('Vendor Lab created successfully'));
		  return response()->json(array('status'=>1,'message'=>"Vendor Center created successfully"));
	 }
	 else{
		 
		 $patient=CustomerRegistrationCenter::findOrFail($request['id']);
		 $patient->update([
		  'center_id'=>$request['center_id'],
		  'name_eng'=>$request['center_name_eng'],
		  'name_local'=>$request['center_name_local'],
          'status'=>$request['status'],
         ]);
		
		//session()->flash('success',__('Vendor Lab updated successfully'));
	    return response()->json(array('status'=>1,'message'=>"Vendor Center updated successfully"));
	 }
    

       
	   
      //return redirect()->route('admin.customer_registration.edit',$request['cust_id']);
       
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
		
		
		$patient=CustomerRegistrationCenter::findOrFail($id);
        
		  echo "<pre>";
		  print_r($patient);
		  exit;
		  
		
		
		
        session()->flash('success',__('Vendor Lab updated successfully'));

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
		$id = $request['id'];
        $culture_option=CustomerRegistrationCenter::where('id',$id)->firstOrFail();
        $culture_option->delete();

        session()->flash('success',__('Vendor Center deleted successfully'));
		return response()->json(array('status'=>1,'message'=>"Vendor Center deleted successfully"));
		
        //return redirect()->back();

    }
}
