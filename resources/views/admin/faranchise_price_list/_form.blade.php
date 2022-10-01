<div class="row">
    <div class="col-lg-6">
       <div class="form-group">
        <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">
                  <i class="fa fa-user"></i>
              </span>
            </div>
            <input type="text" class="form-control" placeholder="{{__('Id *')}}" name="id" id="id" @if(isset($patient)) value="{{$patient->id}}" @endif readonly>
        </div>
       </div>
    </div>
	
	<div class="col-lg-6">
		<div class="form-group">
			<div class="form-group">
				<div class="input-group">
					<div class="input-group-prepend">
					  <span class="input-group-text" id="basic-addon1">
						<i class="fas fa-flag"></i>
					  </span>
					</div>
					<select class="form-control select2" name="org_id" placeholder="{{__('Organization *')}}" id="org_id" required>
					   <option value="">Please select organization</option>
					   @foreach($data['organizations'] as $single)
							 <option value="{{$single['id']}}"  @if(isset($patient)&&$patient['org_id']==$single['id']) selected @endif >{{$single['name_eng']}}</option>
						@endforeach
					</select>
				</div>
			</div>
		</div>
	</div>
	
	<div class="col-lg-6">
		<div class="form-group">
			<div class="form-group">
				<div class="input-group">
					<div class="input-group-prepend">
					  <span class="input-group-text" id="basic-addon1">
						<i class="fas fa-flag"></i>
					  </span>
					</div>
					<select class="form-control select2" name="lab_id" placeholder="{{__('Lab *')}}" id="lab_id" required>
					   <option value="">Please select lab</option>
					   @foreach($data['labs'] as $single)
							 <option value="{{$single['id']}}"  @if(isset($patient)&&$patient['lab_id']==$single['id']) selected @endif >{{$single['name_eng']}}</option>
						@endforeach
					</select>
				</div>
			</div>
		</div>
	</div>
	
	<div class="col-lg-6">
		<div class="form-group">
			<div class="form-group">
				<div class="input-group">
					<div class="input-group-prepend">
					  <span class="input-group-text" id="basic-addon1">
						<i class="fas fa-flag"></i>
					  </span>
					</div>
					<select class="form-control select2" name="franchise_id" placeholder="{{__('Franchise *')}}" id="franchise_id" required>
					   <option value="">Please select franchise</option>
					   @foreach($data['franchises'] as $single)
							 <option value="{{$single['id']}}"  @if(isset($patient)&&$patient['franchise_id']==$single['id']) selected @endif >{{$single['name_eng']}}</option>
						@endforeach
					</select>
				</div>
			</div>
		</div>
	</div>
					
	<div class="col-lg-6">
       <div class="form-group">
        <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">
                  <i class="fa fa-user"></i>
              </span>
            </div>
            <input type="text" autocomplete="off" class="form-control datepicker" placeholder="{{__('Start Date *')}}" name="start_date" id="start_date" @if(isset($patient)) value="{{$patient->start_date}}" @endif required>
        </div>
       </div>
    </div>
				
	<div class="col-lg-6">
       <div class="form-group">
        <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">
                  <i class="fa fa-user"></i>
              </span>
            </div>
            <input type="text" autocomplete="off" class="form-control datepicker" placeholder="{{__('End Date *')}}" name="end_date" id="end_date" @if(isset($patient)) value="{{$patient->end_date}}" @endif required>
        </div>
       </div>
    </div>

	 <div class="col-lg-6">
        <div class="form-group">
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1">
                        <i class="fas fa-flag"></i>
                      </span>
                    </div>
                    <select class="form-control" name="status" placeholder="{{__('Status')}}" id="status" required>
                       <option value="0"  @if(isset($patient)&&$patient['status']==0) selected @endif >Active</option>
                       <option value="1"  @if(isset($patient)&&$patient['status']==1) selected @endif >In Active</option>
                       <option value="2"  @if(isset($patient)&&$patient['status']==2) selected @endif >Suspend</option>
                       <option value="3"  @if(isset($patient)&&$patient['status']==3) selected @endif >Closed</option>
                    </select>
                </div>
            </div>
        </div>
    </div>			
</div>

@if(isset($patient))
<div class="row">
<div class="col-lg-12">
	<div class="card card-primary">
		<div class="card-header">
			<h5 class="card-title">
				{{__('Discounted Tests')}}
			</h5>
		</div>
		<div class="card-body">
			<div class="row">
				<div class="col-lg-12">
					<table class="table table-bordered table-stripped">
						<thead>
							<tr>
								<th>{{__('Test Name')}}</th>
								<th>{{__('Test Price')}}</th>
								<th>{{__('Discount Type')}}</th>
								<th>{{__('Discount Value')}}</th>
								<th>{{__('Party Price')}}</th>
								<th>{{__('Reporting Days')}}</th>
								<th>{{__('Status')}}</th>
								<th width="100px">
									<button type="button" class="btn btn-sm btn-primary add_centers">
										<i class="fa fa-plus"></i>
									</button>
								</th>
							</tr>
						</thead>
						<tbody>
							
							@if(isset($data['price_list']))
								@foreach($data['price_list'] as $singleCenter)
									<tr>
										<td>{{$singleCenter->test_name}}</td>
										<td>{{$singleCenter->price}}</td>
										<td>{{$singleCenter->status_label_type}}</td>
										<td>{{$singleCenter->discount_value}}</td>
										<td>{{$singleCenter->party_price}}</td>
										<td>{{$singleCenter->reporting_days}}</td>
										<td>
											{{$singleCenter->status_label}}
										</td>
										<td>
										
											<button type="button" class="btn btn-danger btn-sm delete_row_center" data_id="{{$singleCenter->id}}">
												<i class="fa fa-trash"></i>
											</button>
											
										</td>
									</tr>
								@endforeach
							@endif
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
@endif	
<style>
	.datepicker {
		z-index: 9 !important;
	}
</style>
<script>
	var vendor_discount_price_create = "{{route('admin.faranchise_price_list_discount.store')}}";
	var vendor_discount_price_delete = "{{route('admin.faranchise_price_list_discount.destroy',1)}}";
	
	var cust_price_list_id = "@if(isset($patient)) {{$patient->id}} @endif";
	
	var all_tests = "";
	 @foreach($data['tests'] as $single)
		 all_tests+='<option value="{{$single["id"]}}" >{{$single["name_eng"]}}</option>';
	@endforeach							
</script>
