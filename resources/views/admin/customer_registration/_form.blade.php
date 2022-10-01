<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
	@if(isset($patient))
		<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Customer/Vendor Information</a>
	
		<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Lab Information</a>
		
		<a class="nav-item nav-link" id="nav-center-tab" data-toggle="tab" href="#nav-center" role="tab" aria-controls="nav-profile" aria-selected="false">Center Information</a>
		
		<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Customer Document</a>
	@endif
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">	
	<div class="row">
		<div class="col-lg-6">
			<div class="card card-primary" id="page-wrap">
				<div class="card-header">
				  <h3 class="card-title">{{__('General Information')}}</h3>
				</div>
				<div class="card-body" style=" padding: 15px 0px; ">
					<div class="col-lg-12">
					   <div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
							  <span class="input-group-text" id="basic-addon1">
								  <i class="fa fa-user"></i>
							  </span>
							</div>
							<input type="text" class="form-control" placeholder="{{__('Id')}}" name="id" id="id" @if(isset($patient)) value="{{$patient->id}}" @endif readonly>
						</div>
					   </div>
					</div>
					<div class="col-lg-12">
						<div class="form-group">
							<div class="form-group">
								<div class="input-group">
									<div class="input-group-prepend">
									  <span class="input-group-text" id="basic-addon1">
										<i class="fas fa-flag"></i>
									  </span>
									</div>
									<select class="form-control select2" name="org_id" placeholder="{{__('Organization *')}}" id="org_id" required>
									   @foreach($data['organizations'] as $single)
											 <option value="{{$single['id']}}"  @if(isset($patient)&&$patient['org_id']==$single['id']) selected @endif >{{$single['name_eng']}}</option>
										@endforeach
									</select>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-lg-12">
					   <div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
							  <span class="input-group-text" id="basic-addon1">
								  <i class="fa fa-user"></i>
							  </span>
							</div>
							<input type="text" class="form-control" placeholder="{{__('Name (English) *')}}" name="name_eng" id="name_eng" @if(isset($patient)) value="{{$patient->name_eng}}" @endif required>
						</div>
					   </div>
					</div>

					<div class="col-lg-12">
					   <div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
							  <span class="input-group-text" id="basic-addon1">
								  <i class="fa fa-user"></i>
							  </span>
							</div>
							<input type="text" class="form-control" placeholder="{{__('Name (Local)')}}" name="name_local" id="name_local" @if(isset($patient)) value="{{$patient->name_local}}" @endif >
						</div>
					   </div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="col-lg-6">
			<div class="card card-primary" id="page-wrap">
				<div class="card-header">
				  <h3 class="card-title">{{__('Contact Information')}}</h3>
				</div>
				<div class="card-body" style=" padding: 15px 0px; ">
					
					<div class="col-lg-12">
					   <div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
							  <span class="input-group-text" id="basic-addon1">
								  <i class="fa fa-user"></i>
							  </span>
							</div>
							<input type="text" class="form-control" placeholder="{{__('Contact Person')}}" name="contact_name" id="contact_name" @if(isset($patient)) value="{{$patient->contact_name}}" @endif>
						</div>
					   </div>
					</div>
					
					<div class="col-lg-12">
						<div class="form-group">
							<div class="form-group">
								<div class="input-group">
									<div class="input-group-prepend">
									  <span class="input-group-text" id="basic-addon1">
										<i class="fas fa-phone"></i>
									  </span>
									</div>
									<input type="text" class="form-control" placeholder="{{__('Phone#')}}" name="ph1" id="ph1" @if(isset($patient)) value="{{$patient->ph1}}" @endif required>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="form-group">
							<div class="form-group">
								<div class="input-group">
									<div class="input-group-prepend">
									  <span class="input-group-text" id="basic-addon1">
										<i class="fas fa-phone"></i>
									  </span>
									</div>
									<input type="text" class="form-control" placeholder="{{__('Phone# 2')}}" name="ph2" id="ph2" @if(isset($patient)) value="{{$patient->ph2}}" @endif>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-lg-12">
						<div class="row">
							<div class="col-lg-6">
								<div class="form-group">
									<div class="form-group">
										<div class="input-group">
											<div class="input-group-prepend">
											  <span class="input-group-text" id="basic-addon1">
												<i class="fas fa-mobile"></i>
											  </span>
											</div>
											<input type="text" class="form-control" placeholder="{{__('Mobile#')}}" name="mob_no1" id="mob_no1" @if(isset($patient)) value="{{$patient->mob_no1}}" @endif>
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
												<i class="fas fa-mobile"></i>
											  </span>
											</div>
											<input type="text" class="form-control" placeholder="{{__('Mobile# 2')}}" name="mob_no2" id="mob_no2" @if(isset($patient)) value="{{$patient->mob_no2}}" @endif>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		<div class="col-lg-12">
			<div class="card card-primary" id="page-wrap">
				<div class="card-header">
				  <h3 class="card-title">{{__('Address')}}</h3>
				</div>
				<div class="card-body" style=" padding: 15px 0px; ">
						 <div class="col-lg-12">
							<div class="form-group">
								<div class="form-group">
									<div class="input-group">
										<div class="input-group-prepend">
										  <span class="input-group-text" id="basic-addon1">
											<i class="fas fa-flag"></i>
										  </span>
										</div>
										<select class="form-control select2" name="country_id" placeholder="{{__('Country')}}" id="country_id">
										   @foreach($data['countries'] as $single)
												 <option value="{{$single['id']}}"  @if(isset($patient)&&$patient['country_id']==$single['id']) selected @elseif($single['id'] == '165') selected @endif >{{$single['eng_country_name']}}</option>
											@endforeach
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<div class="form-group">
									<div class="input-group">
										<div class="input-group-prepend">
										  <span class="input-group-text" id="basic-addon1">
											<i class="fas fa-flag"></i>
										  </span>
										</div>
										<select class="form-control" name="prov_id" placeholder="{{__('Province')}}" id="prov_id">
											<option value="" disabled selected>{{__('Select Province ')}}</option>
											 @foreach($data['provinces'] as $single)
												 <option value="{{$single['id']}}"  @if(isset($patient)&&$patient['prov_id']==$single['id']) selected @elseif($single['id'] == '1') selected @endif >{{$single['name']}}</option>
											@endforeach
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<div class="form-group">
									<div class="input-group">
										<div class="input-group-prepend">
										  <span class="input-group-text" id="basic-addon1">
											<i class="fas fa-flag"></i>
										  </span>
										</div>
										<select class="form-control" name="city_id" placeholder="{{__('City')}}" id="city_id">
											<option value="" disabled selected>{{__('Select City ')}}</option>
											 @foreach($data['cities'] as $single)
												 <option value="{{$single['id']}}"  @if(isset($patient)&&$patient['city_id']==$single['id']) selected @elseif($single['id'] == '2') selected @endif >{{$single['name']}}</option>
											 @endforeach
										</select>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-lg-12">
							<div class="form-group">
								<div class="form-group">
									<div class="input-group">
										<div class="input-group-prepend">
										  <span class="input-group-text" id="basic-addon1">
											<i class="fas fa-map-marker-alt"></i>
										  </span>
										</div>
										<input type="text" class="form-control" placeholder="{{__('Address *')}}" name="address1" id="address1" @if(isset($patient)) value="{{$patient->address1}}" @endif required>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<div class="form-group">
									<div class="input-group">
										<div class="input-group-prepend">
										  <span class="input-group-text" id="basic-addon1">
											<i class="fas fa-map-marker-alt"></i>
										  </span>
										</div>
										<input type="text" class="form-control" placeholder="{{__('Address 2')}}" name="address2" id="address2" @if(isset($patient)) value="{{$patient->address2}}" @endif>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-12">
							<div class="form-group">
								<div class="form-group">
									<div class="input-group">
										<div class="input-group-prepend">
										  <span class="input-group-text" id="basic-addon1">
											<i class="fas fa-user"></i>
										  </span>
										</div>
										<input type="email" class="form-control" placeholder="{{__('Email')}}" name="email" id="email" @if(isset($patient)) value="{{$patient->email}}" @endif>
									</div>
								</div>
							</div>
						</div>
					
				</div>
			</div>
		</div>
	</div>
	  <div class="card-footer">
		<button type="submit" class="btn btn-primary">{{__('Save')}}</button>
	  </div>
  </div>
  
  @if(isset($patient))
	  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
			<div class="row">
				<div class="col-lg-12">
					<div class="card card-primary">
						<div class="card-header">
							<h5 class="card-title">
								{{__('Labs Information')}}
							</h5>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-lg-12">
									<table class="table table-bordered table-stripped">
										<thead>
											<tr>
												<th>{{__('Lab Name')}}</th>
												<th>{{__('Status')}}</th>
												<th width="100px">
													<button type="button" class="btn btn-sm btn-primary add_labs">
														<i class="fa fa-plus"></i>
													</button>
												</th>
											</tr>
										</thead>
										<tbody>
											@foreach($data['vendor_labs'][0]['vendor_labs'] as $singleVendorLab)
												<tr>
												
													<td>
														{{$singleVendorLab['lab_name']}}
													</td>
													<td>
														{{$singleVendorLab['status_label']}}
													</td>
													<td>
													 <a class="btn btn-primary btn-sm edit_vendor_lab" href="javascript:void(0)" data-id="{{$singleVendorLab['id']}}" data-status="{{$singleVendorLab['status']}}" data-lab-id="{{$singleVendorLab['lab_id']}}">
															<i class="fa fa-edit" aria-hidden="true"></i>
														</a>
														
														<button type="button" class="btn btn-danger btn-sm delete_row" data_id="{{$singleVendorLab['id']}}">
															<i class="fa fa-trash"></i>
														</button>
													</td>
												</tr>
											@endforeach
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	  </div>
	  
	  <div class="tab-pane fade" id="nav-center" role="tabpanel" aria-labelledby="nav-center-tab">
			<div class="row">
				<div class="col-lg-12">
					<div class="card card-primary">
						<div class="card-header">
							<h5 class="card-title">
								{{__('Center Information')}}
							</h5>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-lg-12">
									<table class="table table-bordered table-stripped">
										<thead>
											<tr>
												<th>{{__('Center')}}</th>
												<th>{{__('Name(English)')}}</th>
												<th>{{__('Name(Local)')}}</th>
												<th>{{__('Status')}}</th>
												<th width="100px">
													<button type="button" class="btn btn-sm btn-primary add_centers">
														<i class="fa fa-plus"></i>
													</button>
												</th>
											</tr>
										</thead>
										<tbody>
											@foreach($data['vendor_centers'][0]['vendor_centers'] as $singleCenter)
												<tr>
													<td>{{$singleCenter['name_eng_center']}}</td>
													<td>{{$singleCenter['name_eng']}}</td>
													<td>{{$singleCenter['name_local']}}</td>
													<td>
														{{$singleCenter['status_label']}}
													</td>
													<td>
													
														<a class="btn btn-primary btn-sm edit_vendor_center" href="javascript:void(0)" data-id="{{$singleCenter['id']}}" data-status="{{$singleCenter['status']}}" data-center-id="{{$singleCenter['center_id']}}" data-eng-name="{{$singleCenter['name_eng']}}" data-local-name="{{$singleCenter['name_local']}}">
															<i class="fa fa-edit" aria-hidden="true"></i>
														</a>
														
														<button type="button" class="btn btn-danger btn-sm delete_row_center" data_id="{{$singleCenter['id']}}">
															<i class="fa fa-trash"></i>
														</button>
														
													</td>
												</tr>
											@endforeach
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		
	  </div>
	  
	  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
			<div class="row">
				<div class="col-lg-12">
					<div class="card card-primary">
						<div class="card-header">
							<h5 class="card-title">
								{{__('Upload Document')}}
							</h5>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-lg-12">
									<table class="table table-bordered table-stripped">
										<thead>
											<tr>
												<th>{{__('Doc Description')}}</th>
												<th>{{__('File')}}</th>
												<th width="100px">
													<button type="button" class="btn btn-sm btn-primary add_doc" data-id="{{$patient->id}}">
														<i class="fa fa-plus"></i>
													</button>
												</th>
											</tr>
										</thead>
										<tbody>
											@foreach($data['files'] as $single)
											
												<tr>
													<td>{{$single->doc_details}}</td>
													<td> <a target="_blank" href="{{url('uploads/doc_file/')}}/{{$single->doc_file}}">Open File</a></td>
													<td>
													
														<button type="button" class="btn btn-danger btn-sm delete_row_file" data_id="{{$single->id}}">
															<i class="fa fa-trash"></i>
														</button>
														
													</td>
												</tr>
											@endforeach
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	  </div>
  @endif
  
</div>

<script>
	var doc_delete = "{{route('admin.customer_registration.doc_delete')}}";
	var doc_upload = "{{route('admin.customer_registration.doc_upload')}}";
	var vendor_lab = "{{route('admin.customer_registration_lab.store')}}";
	var vendor_lab_delete = "{{route('admin.customer_registration_lab.destroy',1)}}";
	var cust_id = "@if(isset($patient)) {{$patient->id}} @endif";
	
	var all_labs = "";
	 @foreach($data['labs'] as $single)
		 all_labs+='<option value="{{$single["id"]}}" >{{$single["name_eng"]}}</option>';
	@endforeach
	
	var vendor_center = "{{route('admin.customer_registration_center.store')}}";
	var vendor_center_delete = "{{route('admin.customer_registration_center.destroy',1)}}";
	
	var all_centers = "";
	 @foreach($data['centers'] as $single)
		 all_centers+='<option value="{{$single["id"]}}" >{{$single["name_eng"]}}</option>';
	@endforeach							
</script>

@push('css')
	<style>
		#country_id .select2-container {
			width: 96% !important;
		}
		#select2-lab_id-container , #select2-lab_id_edit-container , #select2-center_id-container ,#select2-center_id_edit-container{
			text-align: left;
		}
	</style>
@endpush