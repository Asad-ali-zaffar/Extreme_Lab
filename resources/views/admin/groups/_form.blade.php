<style>
	.labelCustom{
		display: block;
	}
	.select2-container {
		width: 100% !important;
	}
</style>
<!-- Patient Info -->
 <div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">
            {{__('Patient Info')}}
        </h3>
		{{--
        @can('create_patient')
            <button type="button" class="btn btn-warning btn-sm add_patient float-right"  data-toggle="modal" data-target="#patient_modal">
                <i class="fa fa-exclamation-triangle"></i>  {{__('Register New Patient?')}}
            </button>
        @endcan
		--}}
    </div>
    <div class="card-body">
        <div class="row">
			<div class="col-lg-12">
				<div class="form-group labelSize">
					<label class="radio-inline">
					  <input type="radio" name="inv_type" value="1" @if(!isset($group)) checked @endif @if(isset($group)&&$group['inv_type']=='1') checked @endif> Cash Sales Invoice
					</label>

					<label class="radio-inline" style="margin-left: 20px;">
					  <input type="radio" name="inv_type" value="2" @if(isset($group)&&$group['inv_type']=='2') checked @endif> Credit Sales Invoice
					</label>
				</div>
			</div>

            <div class="col-lg-3">
                <div class="form-group">
                     <label class="labelCustom">{{__('MR#')}}</label>
                    <select id="code" name="" class="form-control" required>
                        @if(isset($group)&&isset($group['patient']))
                            <option value="{{$group['patient']['id']}}" selected>{{$group['patient']['code']}}</option>
                        @endif
                    </select>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <label>{{__('Patient Name')}}</label>
                    <select id="name" name="patient_id" class="form-control" required>
						 @foreach($data['patients'] as $single)
							 <option value="{{$single['id']}}">{{ucwords($single['fname'] . ' ' . $single['midname'] . ' ' . $single['lname'])}}</option>
						 @endforeach

                    </select>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label>{{__('Invoice Date Time')}}</label>
					<div id="picker" name="inv_date_time" class="datetimepicker"> </div>
					<input type="hidden" id="result" value="">
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
					<label>{{__('Patient Type')}}</label>
                    <select class="form-control" name="patient_type" placeholder="{{__('Patient Type')}}" id="patient_type">
                        <option value="Local Patient" selected @if(isset($group)&&$group['patient_type']=='Local Patient') selected @endif>{{__('Local Patient')}}</option>
                        <option value="Overseas Traveller"  @if(isset($group)&&$group['patient_type']=='Overseas Traveller') selected @endif>{{__('Overseas Traveller')}}</option>
                        <option value="General Traveller"  @if(isset($group)&&$group['patient_type']=='General Traveller') selected @endif>{{__('General Traveller')}}</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label>{{__('Date of birth')}}</label>
                    <input class="form-control" id="dob" @if(isset($group)&&isset($group['patient'])) value="{{$group['patient']['dob']}}" @endif readonly>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label>{{__('Age')}}</label>
                    <input class="form-control" id="age" @if(isset($group)&&isset($group['age'])) value="{{$group['patient']['age']}}" @endif readonly>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label>{{__('Mobile')}}</label>
                    <input class="form-control" id="mobile_no1" @if(isset($group)&&isset($group['patient'])) value="{{$group['patient']['mobile_no1']}}" @endif  readonly>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label>{{__('CNIC')}}</label>
                    <input class="form-control" id="cnic" @if(isset($group)&&isset($group['patient'])) value="{{$group['patient']['cnic']}}" @endif  readonly>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label>{{__('Email')}}</label>
                    <input class="form-control" id="email" @if(isset($group)&&isset($group['patient'])) value="{{$group['patient']['email']}}" @endif readonly>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label>{{__('Gender')}}</label>
                    <input class="form-control" id="gender" @if(isset($group)&&isset($group['patient'])) value="{{$group['patient']['gender']}}" @endif readonly>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label>{{__('Address')}}</label>
                    <input class="form-control" id="address" @if(isset($group)&&isset($group['patient'])) value="{{$group['patient']['address']}}" @endif readonly>
                </div>
            </div>
			<div class="col-lg-3 showTravDiv">
                <div class="form-group">
                    <label>{{__('Passport No')}}</label>
                    <input class="form-control" name="passport_no" id="passport_no" @if(isset($group)&&isset($group['passport_no'])) value="{{$group['passport_no']}}" @endif>
                </div>
            </div>
			<div class="col-lg-3 showTravDiv">
                <div class="form-group">
                    <label>{{__('Expiry Date')}}</label>
                    <input class="form-control datepicker" name="exp_date" id="exp_date" @if(isset($group)&&isset($group['exp_date'])) value="{{$group['exp_date']}}" @endif >
                </div>
            </div>
			<div class="col-lg-3 showTravDiv">
                <div class="form-group">
                    <label>{{__('Flight No')}}</label>
                    <input class="form-control" name="flight_no" id="flight_no" @if(isset($group)&&isset($group['flight_no'])) value="{{$group['flight_no']}}" @endif>
                </div>
            </div>
			<div class="col-lg-3 showTravDiv">
                <div class="form-group">
                    <label>{{__('PNR No')}}</label>
                    <input class="form-control" name="pnr_no"  id="pnr_no" @if(isset($group)&&isset($group['pnr_no'])) value="{{$group['pnr_no']}}" @endif >
                </div>
            </div>
			<div class="col-lg-3 showTravDiv">
                <div class="form-group">
                    <label>{{__('Travelling Date')}}</label>
                    <input class="form-control datepicker" id="trav_date" name="trav_date" @if(isset($group)&&isset($group['trav_date'])) value="{{$group['trav_date']}}" @endif >
                </div>
            </div>
			<div class="col-lg-3 showTravDiv">
                <div class="form-group">
                    <label>{{__('Airline Name')}}</label>
                    <select id="airline_id" name="airline_id" class="form-control select2">
						 @foreach($data['airlines'] as $single)
							 <option value="{{$single['id']}}" @if(isset($group)&&$group['airline_id']==$single['id']) selected @endif>{{$single['name_eng']}}</option>
						 @endforeach

                    </select>
                </div>
            </div>

			<div class="col-lg-3 showTravDiv">
                <div class="form-group">
                    <label>{{__('Destination Country')}}</label>
                    <select id="dest_count_id" name="dest_count_id" class="form-control select2">
						 @foreach($data['countries'] as $single)
							 <option value="{{$single['id']}}" @if(isset($group)&&$group['dest_count_id']==$single['id']) selected @endif>{{$single['eng_country_name']}}</option>
						 @endforeach

                    </select>
                </div>
            </div>

			{{--
            <div class="col-lg-3">
                <div class="form-group">
                    <label>{{__('Doctor')}}</label>
                    @can('create_doctor')
                        <button type="button" class="btn btn-warning btn-sm float-right"  data-toggle="modal" data-target="#doctor_modal"><i class="fa fa-exclamation-triangle"></i> {{__('Not Listed ?')}}</button>
                    @endcan
                    <select class="form-control" name="doctor_id" id="doctor">
                        @if(isset($group)&&isset($group['doctor']))
                            <option value="{{$group['doctor']['id']}}"  @if(isset($group)&&$group['doctor_id']==$single['id']) selected @endif>{{$group['doctor']['name']}}</option>
                        @endif
                    </select>
                </div>
            </div>
			--}}
        </div>
    </div>
</div>
<!-- /patient info-->

<!-- Location & Party Details  -->
<div class="row">
	<div class="col-lg-6">
		 <div class="card card-primary">
			<div class="card-header">
				<h3 class="card-title">
					{{__('Location & Party Details ')}}
				</h3>
			</div>
			<div class="card-body">
				<div class="row">
					<div class="col-lg-6">
						<div class="form-group">
							<label>{{__('Lab *')}}</label>
							<select id="lab_id" name="lab_id" class="form-control select2" required>
								<option value="">Please select lab</option>
								@foreach($data['labs'] as $single)
									 <option value="{{$single['id']}}" @if(isset($group)&&$group['lab_id']==$single['id']) selected @endif>{{$single['name_eng']}}</option>
								 @endforeach
							</select>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="form-group">
							<label>{{__('Lab Center')}}</label>
							<select id="center_id" name="lab_center_id" class="form-control" required>

							</select>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="form-group">
							<label>{{__('Party *')}}</label>
							<select id="party_id" name="party_id" class="form-control select2" required>
								<option value="">Please select party</option>
								@foreach($data['parties'] as $single)
									 <option value="{{$single['id']}}" @if(isset($group)&&$group['party_id']==$single['id']) selected @endif>{{$single['name_eng']}}</option>
								 @endforeach
							</select>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="form-group">
							<label>{{__('Party Center')}}</label>
							<select id="party_center_id" name="party_center_id" class="form-control" required>

							</select>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="form-group">
							<label>{{__('Party Doctor')}}</label>
							<select id="doctor_id" name="doctor_id" class="form-control select2">
								<option value="">Please select doctor</option>
								@foreach($data['doctors'] as $single)
									 <option value="{{$single['id']}}" @if(isset($group)&&$group['doctor_id']==$single['id']) selected @endif>{{$single['name_eng']}}</option>
								 @endforeach
							</select>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-6">
		 <div class="card card-primary">
			<div class="card-header">
				<h3 class="card-title">
					{{__('Details')}}
				</h3>
			</div>
			<div class="card-body">
				<div class="row">
					<div class="col-lg-6">
						<div class="form-group labelSize">
							<label class="radio-inline">
							  <input type="radio" name="walk_in_or_cash" value="Walk In" checked @if(isset($group)&&$group['walk_in_or_cash']=='Walk In') checked @endif > Walk In
							</label>

							<label class="radio-inline" style="margin-left: 20px;">
							  <input type="radio" name="walk_in_or_cash" value="Cash Customer" @if(isset($group)&&$group['walk_in_or_cash']=='Cash Customer') checked @endif > Cash Customer
							</label>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="form-group">
							<label>{{__('Lab No')}}</label>
							<input class="form-control" name="lab_no" id="lab_no" @if(isset($group)&&isset($group['lab_no'])) value="{{$group['lab_no']}}" @endif  >
						</div>
					</div>
					<div class="col-lg-6">
						<div class="form-group">
							<label>{{__('Organization *')}}</label>
							<select id="org_id" name="org_id" class="form-control select2" required>
								@foreach($data['organizations'] as $single)
									<option value="{{$single['id']}}"  @if(isset($group)&&$group['org_id']==$single['id']) selected @endif>{{$single['name_eng']}}</option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="form-group">
							<label>{{__('Invoice No')}}</label>
							<input class="form-control" id="inv_no" name="inv_no" @if(isset($group)&&isset($group['inv_no'])) value="{{$group['inv_no']}}" @endif >
						</div>
					</div>

					<div class="col-lg-6">
						<div class="form-group">
							<label>{{__('Case No')}}</label>
							<input class="form-control" name="case_no" id="case_no" @if(isset($group)&&isset($group['case_no'])) value="{{$group['case_no']}}" @endif  >
						</div>
					</div>

					<div class="col-lg-6">
						<div class="form-group">
							<label>{{__('Invoice Status')}}</label>
							<select name="status" id="status" class="form-control">
								<option value="0" @if(isset($group)&&$group['status']=='0') selected @endif >Pending</option>
								<option value="1" @if(isset($group)&&$group['status']=='1') selected @endif >Completed</option>
							</select>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
<!-- /patient info-->

<!-- test -->
<div class="row">
    <div class="col-lg-6">
        <div class="card card-danger">
            <div class="card-header">
                <h5 class="card-title">
                    {{__('Tests')}}
                </h5>
            </div>
            <div class="card-body tests">
                <table class="table table-bordered table-sm datatables" width="100%">
                    <thead>
                        <tr>
                            <td>{{__('Test Name')}}</td>
                            <td>{{__('Urgent')}}</td>
                            <td>{{__('Price')}}</td>
                            <td>{{__('Urgent Price')}}</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data['tests'] as $test)
                            <tr>
                                <td>
                                    <input type="checkbox" class="test" id="test_{{$test['id']}}" value="{{$test['id']}}" price="{{$test['price']}}" urgent_price="{{$test['urgent_price']}}">
                                    <label for="test_{{$test['id']}}" style="margin-left: 5px;">{{$test['name_eng']}}</label>
                                </td>
                                <td>
									<input type="checkbox"  class="test_urgent" id="test_urgent_{{$test['id']}}" value="{{$test['id']}}"  price="{{$test['price']}}" urgent_price="{{$test['urgent_price']}}">
								</td>

								<td>
                                    {{formated_price($test['price'])}}
                                </td>
								<td>
                                    {{formated_price($test['urgent_price'])}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
       <div class="card card-danger">
           <div class="card-header">
               <h5 class="card-title text-center">
                   {{__('Receipt')}}
               </h5>
           </div>
           <div class="card-body cultures">
                <div class="" id="receipt">
         <div class="">
             <div class="">
                <table class="table  table-stripped" id="receipt_table">
                    <tbody>

                        <tr>
                            <td>{{__('Subtotal')}}</td>
                            <td>
                                <input type="number" id="subtotal" name="subtotal"  @if(isset($group)) value="{{$group['subtotal']}}" @else value="0"  @endif readonly class="form-control">
                            </td>
                            <td>
                                {{get_currency()}}
                            </td>
                        </tr>



						<tr>
                            <td>{{__('Discount Code')}}</td>
                            <td>
                                <select id="disc_code_id" name="disc_code_id" class="form-control select2" required>
									 <option value="">{{__('Select Discount Option')}}</option>
									@foreach($data['discountroles'] as $single)
										<option value="{{$single['id']}}" discount="{{$single['discount_perct']}}"  >{{$single['name_eng']}} ({{$single['discount_perct']}}%) </option>
									@endforeach
								</select>
                            </td>
                            <td>
                            </td>
                        </tr>

                        <tr>
                            <td>{{__('Discount Per')}}</td>
                            <td>
                                <input type="number" id="discount_per" name="discount_per"  @if(isset($group)) value="{{$group['discount']}}" @else value="0" readonly  @endif  class="form-control">
                            </td>
                            <td>
                                {{get_currency()}}
                            </td>
                        </tr>

                        <tr>
                            <td>{{__('Discount Amount')}}</td>
                            <td>
                                <input type="number" id="discount_amount" name="discount_amount"  @if(isset($group)) value="{{$group['discount']}}" @else value="0"  @endif  class="form-control">
                            </td>
                            <td>
                                {{get_currency()}}
                            </td>
                        </tr>


                        <tr>
                            <td>{{__('Total')}}</td>
                            <td>
                                <input type="number" id="total" name="total" class="form-control" @if(isset($group)) value="{{$group['total']}}" @else value="0"  @endif  readonly>
                            </td>
                            <td>
                                {{get_currency()}}
                            </td>
                        </tr>

                        <tr>
                            <td>{{__('Payable Amount')}}</td>
                            <td>
                                <input type="number" id="paid" name="paid" min="0" class="form-control" @if(isset($group)) value="{{$group['paid']}}" @else value="0"  @endif   required>
                            </td>
                            <td>
                                {{get_currency()}}
                            </td>
                        </tr>
                        <tr>
                            <td>{{__('Payment Type')}}</td>
                            <td>
                               <select id="payment_type" name="payment_type" class="form-control" required>
									<option value="CASH" selected>CASH</option>
									<option value="CASH AND CARD" >CASH AND CARD</option>
									<option value="CREDIT CARD" >CREDIT CARD</option>
									<option value="CROSS CHEQUE (PAYEES ACCOUNT)" >CROSS CHEQUE (PAYEES ACCOUNT)</option>
									<option value="DEBIT CARD" >DEBIT CARD</option>
									<option value="PAYMENT ORDER" >PAYMENT ORDER</option>
								</select>
                            </td>
                            <td>
                            </td>
                        </tr>
                        <tr>
                            <td>{{__('Due Cash')}}</td>
                            <td>
                                <input type="number" id="due" name="due" class="form-control" @if(isset($group)) value="{{$group['due']}}" @else value="0"  @endif  >
                            </td>
                            <td>
                                {{get_currency()}}
                            </td>
                        </tr>
                    </tbody>
                </table>
             </div>
         </div>
    </div>
           </div>
       </div>
    </div>


	{{--
    <div class="col-lg-6">
       <div class="card card-danger">
           <div class="card-header">
               <h5 class="card-title text-center">
                   {{__('Cultures')}}
               </h5>
           </div>
           <div class="card-body cultures">
                <table class="table table-bordered table-sm datatables" width="100%">
                    <thead>
                        <tr>
                            <td>{{__('Culture Name')}}</td>
                            <td>{{__('Price')}}</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cultures as $culture)
                            <tr>
                                <td>
                                    <input type="checkbox" class="culture" id="culture_{{$culture['id']}}" value="{{$culture['id']}}" price="{{$culture['price']}}">
                                    <label for="culture_{{$culture['id']}}">{{$culture['name']}}</label>
                                </td>
                                <td>
                                    {{formated_price($culture['price'])}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
           </div>
       </div>
    </div>
	--}}


 </div>
<!-- \End test -->


<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        <button type="submit" class="btn btn-primary form-control">{{__('Save')}}</button>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        <a href="{{route('admin.groups.index')}}" class="btn btn-danger form-control">{{__('Cancel')}}</a>
    </div>
</div>

<br>

<script>
	var get_lab_centers = "{{route('admin.get_lab_centers')}}";
	var get_party_centers = "{{route('admin.get_party_centers')}}";
</script>