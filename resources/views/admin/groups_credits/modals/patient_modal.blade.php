<div class="modal fade" id="patient_modal" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-lg-custom">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">{{__('Create Patient')}}</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form action="{{route('ajax.create_patient')}}" method="POST" id="create_patient">
            @csrf
            <div class="text-danger" id="patient_modal_error"></div>
            <div class="modal-body" id="create_patient_inputs">
                <div class="row" id="general_informaion">
			<div class="col-lg-4">
				<div class="form-group">
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
							  <span class="input-group-text" id="basic-addon1">
								<i class="fas fa-user"></i>
							  </span>
							</div>
							<select class="form-control" name="patient_type" placeholder="{{__('Patient Type')}}" id="patient_type">
								<option value="Local Patient" selected @if(isset($patient)&&$patient['patient_type']=='Local Patient') selected @endif>{{__('Local Patient')}}</option>
								<option value="Overseas Traveller"  @if(isset($patient)&&$patient['patient_type']=='Overseas Traveller') selected @endif>{{__('Overseas Traveller')}}</option>
								<option value="General Traveller"  @if(isset($patient)&&$patient['patient_type']=='General Traveller') selected @endif>{{__('General Traveller')}}</option>
							</select>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-lg-4">
			   <div class="form-group">
				<div class="input-group">
					<div class="input-group-prepend">
					  <span class="input-group-text" id="basic-addon1">
						  <i class="fa fa-calendar"></i>
					  </span>
					</div>
					<input type="text" class="form-control datepicker" placeholder="{{__('Registration Date')}}" name="reg_date" id="reg_date" @if(isset($patient)) value="{{$patient->reg_date}}" @else  value="{{date('d-m-Y')}}" @endif readonly>
				</div>
			   </div>
			</div>
			
			<div class="col-lg-4">
				<div class="form-group">
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
							  <span class="input-group-text" id="basic-addon1">
								<i class="fas fa-user"></i>
							  </span>
							</div>
							<select class="form-control" name="salutation" placeholder="{{__('Salutation')}}" id="salutation" required>
								<option value="MR." selected @if(isset($patient)&&$patient['salutation']=='MR.') selected @endif>{{__('MR.')}}</option>
								<option value="MRS."  @if(isset($patient)&&$patient['salutation']=='MRS.') selected @endif>{{__('MRS.')}}</option>
								<option value="MISS."  @if(isset($patient)&&$patient['salutation']=='MISS.') selected @endif>{{__('MISS.')}}</option>
								<option value="MS."  @if(isset($patient)&&$patient['salutation']=='MS.') selected @endif>{{__('MS.')}}</option>
								<option value="MASTER."  @if(isset($patient)&&$patient['salutation']=='MASTER.') selected @endif>{{__('MASTER.')}}</option>
								<option value="BABY."  @if(isset($patient)&&$patient['salutation']=='BABY.') selected @endif>{{__('BABY.')}}</option>
							</select>
						</div>
					</div>
				</div>
			</div>
			
		</div>

		<div class="row">
			<div class="col-lg-4">
			   <div class="form-group">
				<div class="input-group">
					<div class="input-group-prepend">
					  <span class="input-group-text" id="basic-addon1">
						  <i class="fa fa-user"></i>
					  </span>
					</div>
					<input type="text" class="form-control" placeholder="{{__('Patient First Name *')}}" name="fname" id="fname" @if(isset($patient)) value="{{$patient->fname}}" @endif required>
				</div>
			   </div>
			</div>
			<div class="col-lg-4">
			   <div class="form-group">
				<div class="input-group">
					<div class="input-group-prepend">
					  <span class="input-group-text" id="basic-addon1">
						  <i class="fa fa-user"></i>
					  </span>
					</div>
					<input type="text" class="form-control" placeholder="{{__('Patient Middle Name')}}" name="midname" id="midname" @if(isset($patient)) value="{{$patient->midname}}" @endif>
				</div>
			   </div>
			</div>

			<div class="col-lg-4">
			   <div class="form-group">
				<div class="input-group">
					<div class="input-group-prepend">
					  <span class="input-group-text" id="basic-addon1">
						  <i class="fa fa-user"></i>
					  </span>
					</div>
					<input type="text" class="form-control" placeholder="{{__('Patient Last Name *')}}" name="lname" id="lname" @if(isset($patient)) value="{{$patient->lname}}" @endif required>
				</div>
			   </div>
			</div>
			
			
			<div class="col-lg-4">
				<div class="form-group">
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
							  <span class="input-group-text" id="basic-addon1">
								<i class="fas fa-user"></i>
							  </span>
							</div>
							<select class="form-control" name="guardian" placeholder="{{__('Guardian ')}}" id="guardian" required>
								<option value="" disabled selected>{{__('Please Select Guardian * ')}}</option>
								<option value="S/O"  @if(isset($patient)&&$patient['guardian']=='S/O') selected @endif>{{__('S/O')}}</option>
								<option value="W/O"  @if(isset($patient)&&$patient['guardian']=='W/O') selected @endif>{{__('W/O')}}</option>
								<option value="D/O"  @if(isset($patient)&&$patient['guardian']=='D/O') selected @endif>{{__('D/O')}}</option>
								<option value="SELF"  @if(isset($patient)&&$patient['guardian']=='SELF') selected @endif>{{__('SELF')}}</option>
								<option value="F/O"  @if(isset($patient)&&$patient['guardian']=='F/O') selected @endif>{{__('F/O')}}</option>
							</select>
						</div>
					</div>
				</div>
			</div>
			

			<div class="col-lg-4">
				<div class="form-group">
					<div class="input-group">
						<div class="input-group-prepend">
						  <span class="input-group-text" id="basic-addon1">
							<i class="fas fa-user"></i>
						  </span>
						</div>
						<input type="text" class="form-control" placeholder="{{__('Guardian Name *')}}" name="guardian_name" id="guardian_name" @if(isset($patient)) value="{{$patient->guardian_name}}" @endif required>
					</div>
				</div>
			</div>

			<div class="col-lg-4">
				<div class="form-group">
					<div class="input-group">
						<div class="input-group-prepend">
						  <span class="input-group-text" id="basic-addon1">
							<i class="fas fa-child"></i>
						  </span>
						</div>
						<input type="text" class="form-control" placeholder="{{__('Age')}}" name="age" id="age" @if(isset($patient)) value="{{$data['interval']->y}}" @endif>
					</div>
				</div>
			</div>
			
			
			<div class="col-lg-4">
				<div class="form-group">
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
							  <span class="input-group-text" id="basic-addon1">
								<i class="fas fa-transgender"></i>
							  </span>
							</div>
							<select class="form-control" name="gender" placeholder="{{__('Gender')}}" id="gender" required>
								<option value="" disabled selected>{{__('Select Gender *')}}</option>
								<option value="male"  @if(isset($patient)&&$patient['gender']=='male') selected @endif>{{__('Male')}}</option>
								<option value="female"  @if(isset($patient)&&$patient['gender']=='female') selected @endif>{{__('Female')}}</option>
							</select>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-lg-4">
				<div class="form-group">
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
							  <span class="input-group-text" id="basic-addon1">
								<i class="fas fa-mars"></i>
							  </span>
							</div>
							<select class="form-control" name="martial_status" placeholder="{{__('Marital Status')}}" id="martial_status">
								<option value="" disabled selected>{{__('Select Marital Status')}}</option>
								<option value="SINGLE"  @if(isset($patient)&&$patient['martial_status']=='SINGLE') selected @endif>{{__('SINGLE')}}</option>
								<option value="MARRIED"  @if(isset($patient)&&$patient['martial_status']=='MARRIED') selected @endif>{{__('MARRIED')}}</option>
								<option value="DIVORCED"  @if(isset($patient)&&$patient['martial_status']=='DIVORCED') selected @endif>{{__('DIVORCED')}}</option>
								<option value="WIDOWED"  @if(isset($patient)&&$patient['martial_status']=='WIDOWED') selected @endif>{{__('WIDOWED')}}</option>
								<option value="SEPARATED"  @if(isset($patient)&&$patient['martial_status']=='SEPARATED') selected @endif>{{__('SEPARATED')}}</option>
							</select>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-lg-4">
				<div class="form-group">
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
							  <span class="input-group-text" id="basic-addon1">
								<i class="fas fa-calendar"></i>
							  </span>
							</div>
							<input type="text" class="form-control datepicker" placeholder="{{__('Date of birth *')}}" name="dob" required @if(isset($patient)) value="{{$patient['dob']}}" @endif required readonly>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-lg-4">
				<div class="form-group">
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
							  <span class="input-group-text" id="basic-addon1">
								<i class="fas fa-id-card"></i>
							  </span>
							</div>
							<input type="text" class="form-control" placeholder="{{__('CNIC')}}" name="cnic" @if(isset($patient)) value="{{$patient['cnic']}}" @endif>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-8">
				<div class="form-group">
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
							  <span class="input-group-text" id="basic-addon1">
								<i class="fas fa-comments"></i>
							  </span>
							</div>
							<input type="text" class="form-control" placeholder="{{__('Patient Remarks')}}" name="remarks" @if(isset($patient)) value="{{$patient['remarks']}}" @endif>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-lg-10">
				<div class="input-group form-group">
					<div class="input-group-prepend">
						<span class="input-group-text">
							  <i class="fas fa-signature" aria-hidden="true"></i>
						</span>
					  </div>
					<div class="custom-file">
						<input type="file" accept="image/*" class="custom-file-input" id="exampleInputFile" name="profile_image">
						<label class="custom-file-label" for="exampleInputFile">Upload Image</label>
					</div>
				</div>
			</div>
			 <div class="col-lg-2">
				<div class="card card-primary">
					<div class="card-body p-1">
						<img class="img-thumbnail pImage" src="@if(isset($patient)) {{url('uploads/profile_images/')}}/{{$patient['profile_image']}}  @else {{url('/public/img/no-image.png')}} @endif" alt="Signature">
					</div>
				</div>
			</div>	
			<!--
		   

			<div class="col-lg-4">
				<div class="form-group">
					<div class="input-group">
						<div class="input-group-prepend">
						  <span class="input-group-text" id="basic-addon1">
							<i class="fas fa-phone-alt"></i>
						  </span>
						</div>
						<input type="text" class="form-control" placeholder="{{__('Phone number')}}" name="phone" id="phone"  @if(isset($patient)) value="{{$patient->phone}}" @endif required>
					</div>
				</div>
				
			</div>
			-->
		</div>


		<div class="row" id="personal_informaion">
			<div class="col-lg-12 card-primary mb20 mt20">
				<div class="card-header">
					<h3 class="card-title">Personal Information</h3>
				</div>
			</div>
			
			<div class="col-lg-4">
				<div class="form-group">
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
							  <span class="input-group-text" id="basic-addon1">
								<i class="fas fa-flag"></i>
							  </span>
							</div>
							<select class="form-control" name="country" placeholder="{{__('Country *')}}" id="country" required>
							   @foreach($data['countries'] as $single)
									 <option value="{{$single['id']}}"  @if(isset($patient)&&$patient['country']==$single['id']) selected @elseif($single['id'] == '165') selected @endif >{{$single['eng_country_name']}}</option>
								@endforeach
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="form-group">
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
							  <span class="input-group-text" id="basic-addon1">
								<i class="fas fa-flag"></i>
							  </span>
							</div>
							<select class="form-control" name="province" placeholder="{{__('Province *')}}" id="province" required>
								<option value="" disabled selected>{{__('Select Province ')}}</option>
								 @foreach($data['provinces'] as $single)
									 <option value="{{$single['id']}}"  @if(isset($patient)&&$patient['province']==$single['id']) selected @elseif($single['id'] == '1') selected @endif >{{$single['name']}}</option>
								@endforeach
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="form-group">
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
							  <span class="input-group-text" id="basic-addon1">
								<i class="fas fa-flag"></i>
							  </span>
							</div>
							<select class="form-control" name="city" placeholder="{{__('City *')}}" id="city" required>
								<option value="" disabled selected>{{__('Select City ')}}</option>
								 @foreach($data['cities'] as $single)
									 <option value="{{$single['id']}}"  @if(isset($patient)&&$patient['city']==$single['id']) selected @elseif($single['id'] == '2') selected @endif >{{$single['name']}}</option>
								 @endforeach
							</select>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-lg-4">
				<div class="form-group">
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
							  <span class="input-group-text" id="basic-addon1">
								<i class="fas fa-phone"></i>
							  </span>
							</div>
							<input type="text" class="form-control" placeholder="{{__('Home Phone#')}}" name="phone" id="phone" @if(isset($patient)) value="{{$patient->phone}}" @endif>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="form-group">
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
							  <span class="input-group-text" id="basic-addon1">
								<i class="fas fa-mobile"></i>
							  </span>
							</div>
							<input type="text" class="form-control" placeholder="{{__('Mobile#1 *')}}" name="mobile_no1" id="mobile_no1" @if(isset($patient)) value="{{$patient->mobile_no1}}" @endif required>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="form-group">
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
							  <span class="input-group-text" id="basic-addon1">
								<i class="fas fa-mobile"></i>
							  </span>
							</div>
							<input type="text" class="form-control" placeholder="{{__('Mobile#2')}}" name="mobile_no2" id="mobile_no2" @if(isset($patient)) value="{{$patient->mobile_no2}}" @endif>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="form-group">
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
							  <span class="input-group-text" id="basic-addon1">
								<i class="fas fa-flag"></i>
							  </span>
							</div>
							<input type="text" class="form-control" placeholder="{{__('Nationality')}}" name="nationality" id="nationality" @if(isset($patient)) value="{{$patient->nationality}}" @endif>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="form-group">
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
							  <span class="input-group-text" id="basic-addon1">
								<i class="fas fa-map-marker-alt"></i>
							  </span>
							</div>
							<input type="text" class="form-control" placeholder="{{__('Residential Address *')}}" name="address" id="address" @if(isset($patient)) value="{{$patient->address}}" @endif required>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="form-group">
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
							  <span class="input-group-text" id="basic-addon1">
								<i class="fas fa-map-marker-alt"></i>
							  </span>
							</div>
							<input type="text" class="form-control" placeholder="{{__('Postal Address')}}" name="postal_address" id="postal_address" @if(isset($patient)) value="{{$patient->postal_address}}" @endif>
						</div>
					</div>
				</div>
			</div>
			 <div class="col-lg-4">
				<div class="form-group">
					<div class="input-group">
						<div class="input-group-prepend">
						  <span class="input-group-text" id="basic-addon1">
							<i class="fas fa-envelope"></i>
						  </span>
						</div>
						<input type="email" class="form-control" placeholder="{{__('Email Address')}}" name="email" id="email" @if(isset($patient)) value="{{$patient->email}}" @endif>
					</div>
				</div>
			</div>
		</div>

		<div class="row" id="emergency_contact">
			<div class="col-lg-12 card-primary mb20 mt20">
				<div class="card-header">
					<h3 class="card-title">Emergency Contact</h3>
				</div>
			</div>
			
			
			<div class="col-lg-4">
				<div class="form-group">
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
							  <span class="input-group-text" id="basic-addon1">
								<i class="fas fa-user"></i>
							  </span>
							</div>
							<input type="text" class="form-control" placeholder="{{__('Emergency Contact Name')}}" name="emerg_contact_name" id="emerg_contact_name" @if(isset($patient)) value="{{$patient->emerg_contact_name}}" @endif>
						</div>
					</div>
				</div>
			</div>
			
			 <div class="col-lg-4">
				<div class="form-group">
					<div class="input-group">
						<div class="input-group-prepend">
						  <span class="input-group-text" id="basic-addon1">
							<i class="fas fa-user"></i>
						  </span>
						</div>
						<input type="text" class="form-control" placeholder="{{__('Emergency Contact Relation')}}" name="emerg_contact_rel" id="emerg_contact_rel" @if(isset($patient)) value="{{$patient->emerg_contact_rel}}" @endif>
					</div>
				</div>
			</div>
			
			<div class="col-lg-4">
				<div class="form-group">
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
							  <span class="input-group-text" id="basic-addon1">
								<i class="fas fa-phone"></i>
							  </span>
							</div>
							<input type="text" class="form-control" placeholder="{{__('Emergency Contact Phone')}}" name="emerg_contact_ph" id="emerg_contact_ph" @if(isset($patient)) value="{{$patient->emerg_contact_ph}}" @endif>
						</div>
					</div>
				</div>
			</div>
		</div>

                
                
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-danger" data-dismiss="modal">{{__('Close')}}</button>
                <button type="submit" class="btn btn-primary">{{__('Save')}}</button>
            </div>
        </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>