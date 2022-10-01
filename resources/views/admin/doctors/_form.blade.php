<div class="row" id="general_informaion">
	<div class="col-lg-4">
       <div class="form-group">
        <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">
                  <i class="fa fa-user"></i>
              </span>
            </div>
            <input type="text" class="form-control" placeholder="{{__('Doctor Id')}}" name="id" id="id" @if(isset($doctor)) value="{{$doctor->id}}" @endif readonly>
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
                    <select class="form-control" name="nature" placeholder="{{__('Nature')}}" id="nature" required>
                        <option value="">Please Select Nature</option>
                        <option value="Visting" @if(isset($doctor)&&$doctor['nature']=='Visting') selected @endif>Visting</option>
						<option value="Payroll" @if(isset($doctor)&&$doctor['nature']=='Payroll') selected @endif>Payroll</option>
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
                  <i class="fa fa-user"></i>
              </span>
            </div>
            <input type="text" class="form-control" placeholder="{{__('Name (English) *')}}" name="name_eng" id="name_eng" @if(isset($doctor)) value="{{$doctor->name_eng}}" @endif required>
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
            <input type="text" class="form-control" placeholder="{{__('Name (Local)')}}" name="name_local" id="name_local" @if(isset($doctor)) value="{{$doctor->name_local}}" @endif >
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
                    <select class="form-control select2" name="dept_id" placeholder="{{__('Department *')}}" id="dept_id" required>
                       <option value="">Please Select Department</option>
					   @foreach($data['departments'] as $single)
							 <option value="{{$single['id']}}"  @if(isset($doctor)&&$doctor['dept_id']==$single['id']) selected @endif >{{$single['name_eng']}}</option>
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
                    <select class="form-control select2" name="spec_id" placeholder="{{__('Specialization *')}}" id="spec_id" required>
                       <option value="">Please Select Specialization</option>
					   @foreach($data['specializations'] as $single)
							 <option value="{{$single['id']}}"  @if(isset($doctor)&&$doctor['spec_id']==$single['id']) selected @endif >{{$single['name_eng']}}</option>
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
                    <select class="form-control" name="gender" placeholder="{{__('Gender')}}" id="gender" required>
                         <option value="">{{__('Please Select Gender')}}</option>
						<option value="Male" @if(isset($doctor)&&$doctor['gender']=='Male') selected @endif>Male</option>
						<option value="Female" @if(isset($doctor)&&$doctor['gender']=='Female') selected @endif>Female</option>
						<option value="New Born" @if(isset($doctor)&&$doctor['gender']=='New Born') selected @endif>New Born</option>
						<option value="Child" @if(isset($doctor)&&$doctor['gender']=='Child') selected @endif>Child</option>
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
                    <select class="form-control" name="martial_status" placeholder="{{__('Martial Status')}}" id="martial_status" required>
                        <option value="">{{__('Please Select Martial Status ')}}</option>
						<option value="Single" @if(isset($doctor)&&$doctor['martial_status']=='Single') selected @endif>Single</option>
						<option value="Married" @if(isset($doctor)&&$doctor['martial_status']=='Married') selected @endif>Married</option>
						<option value="Divorced" @if(isset($doctor)&&$doctor['martial_status']=='Divorced') selected @endif>Divorced</option>
						<option value="Widowed" @if(isset($doctor)&&$doctor['martial_status']=='Widowed') selected @endif>Widowed</option>
						<option value="Separated" @if(isset($doctor)&&$doctor['martial_status']=='Separated') selected @endif>Separated</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

	  <div class="col-lg-4">
		<div class="form-group">
			<div class="input-group mb-3">
				<div class="input-group-prepend">
				  <span class="input-group-text" id="basic-addon1">
					<i class="fas fa-calendar-alt"></i>
				  </span>
				</div>
				<input type="text" class="form-control datepicker" placeholder="{{__('Dob')}}" name="dob" id="dob"  @if(isset($doctor)) value="{{$doctor->dob}}" @endif autocomplete="off">
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
                    <select class="form-control select2" name="country_id" placeholder="{{__('Country')}}" id="country_id">
                       @foreach($data['countries'] as $single)
							 <option value="{{$single['id']}}"  @if(isset($doctor)&&$doctor['country_id']==$single['id']) selected @elseif($single['id'] == '165') selected @endif >{{$single['eng_country_name']}}</option>
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
                    <select class="form-control" name="prov_id" placeholder="{{__('Province')}}" id="prov_id">
                        <option value="" disabled selected>{{__('Select Province ')}}</option>
						 @foreach($data['provinces'] as $single)
							 <option value="{{$single['id']}}"  @if(isset($doctor)&&$doctor['prov_id']==$single['id']) selected @elseif($single['id'] == '1') selected @endif >{{$single['name']}}</option>
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
                    <select class="form-control" name="city_id" placeholder="{{__('City')}}" id="city_id">
                        <option value="" disabled selected>{{__('Select City ')}}</option>
						 @foreach($data['cities'] as $single)
							 <option value="{{$single['id']}}"  @if(isset($doctor)&&$doctor['city_id']==$single['id']) selected @elseif($single['id'] == '2') selected @endif >{{$single['name']}}</option>
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
                        <i class="fas fa-mobile"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control" placeholder="{{__('Mobile#')}}" name="mob1" id="mob1" @if(isset($doctor)) value="{{$doctor->mob1}}" @endif>
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
                    <input type="text" class="form-control" placeholder="{{__('Mobile# 2')}}" name="mob2" id="mob2" @if(isset($doctor)) value="{{$doctor->mob2}}" @endif>
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
                    <select class="form-control" name="room_no" placeholder="{{__('Room#')}}" id="room_no" required>
                        <option value="">{{__('Please Select Room# ')}}</option>
						<option value="101"  @if(isset($doctor)&&$doctor['room_no']=='101') selected @endif>Room - 101</option>
						<option value="102"  @if(isset($doctor)&&$doctor['room_no']=='102') selected @endif>Room - 102</option>
						<option value="103"  @if(isset($doctor)&&$doctor['room_no']=='103') selected @endif>Room - 103</option>
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
                        <i class="fas fa-mobile"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control" placeholder="{{__('CNIC#')}}" name="cnic" id="cnic" @if(isset($doctor)) value="{{$doctor->cnic}}" @endif>
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
                    <input type="text" class="form-control" placeholder="{{__('Remarks')}}" name="remarks" id="remarks" @if(isset($doctor)) value="{{$doctor->remarks}}" @endif>
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
                <img class="img-thumbnail pImage" src="@if(isset($doctor)) {{url('uploads/profile_images/')}}/{{$doctor['profile_image']}}  @else {{url('/public/img/no-image.png')}} @endif" alt="Signature">
            </div>
        </div>
    </div>
</div>

@if(isset($doctor))
<div class="row" id="qualification">
	<div class="col-lg-12 card-primary mb20 mt20">
		<div class="card-header">
			<h3 class="card-title w-100">
				Qualification
				<button type="button" class="btn btn-primary float-right btnBlue" data-toggle="modal" data-target="#qualificationModal">Add</button>
			</h3>
			<!-- Button trigger modal -->

		</div>
        <div class="row table-responsive">
		  <div class="col-12">
			<table id="table_qualification" class="table table-striped table-hover table-bordered"  width="100%">
			  <thead>
				<tr>
				  <th width="10px">#</th>
				  <th>{{__('Qualification')}}</th>
				  <th>{{__('Institute')}}</th>
				  <th>{{__('Remarks')}}</th>
				  <th width="80px">{{__('Action')}}</th>
				</tr>
			  </thead>
			  <tbody>

			  </tbody>
			</table>
		  </div>
		</div>
	</div>
</div>

<div class="row" id="expertise">
	<div class="col-lg-12 card-primary mb20 mt20">
		<div class="card-header">
			<h3 class="card-title w-100">
				Area Of Expertise
				<button type="button" class="btn btn-primary float-right btnBlue" data-toggle="modal" data-target="#expertiseModal">Add</button>
			</h3>
			<!-- Button trigger modal -->

		</div>
        <div class="row table-responsive">
		  <div class="col-12">
			<table id="table_expertise" class="table table-striped table-hover table-bordered"  width="100%">
			  <thead>
				<tr>
				  <th width="10px">#</th>
				  <th>{{__('Expertises')}}</th>
				  <th>{{__('Remarks')}}</th>
				  <th width="80px">{{__('Action')}}</th>
				</tr>
			  </thead>
			  <tbody>

			  </tbody>
			</table>
		  </div>
		</div>
	</div>
</div>

<div class="row" id="charges">
	<div class="col-lg-12 card-primary mb20 mt20">
		<div class="card-header">
			<h3 class="card-title w-100">
				Charges
				<button type="button" class="btn btn-primary float-right btnBlue" data-toggle="modal" data-target="#chargesModal">Add</button>
			</h3>
			<!-- Button trigger modal -->

		</div>
        <div class="row table-responsive">
		  <div class="col-12">
			<table id="table_charges" class="table table-striped table-hover table-bordered"  width="100%">
			  <thead>
				<tr>
				  <th width="10px">#</th>
				  <th>{{__('Charges Type')}}</th>
				  <th>{{__('Nature')}}</th>
				  <th>{{__('Charges')}}</th>
				  <th>{{__('Share Type')}}</th>
				  <th>{{__('Doctor Share')}}</th>
				  <th>{{__('Billing Nature')}}</th>
				  <th>{{__('Remarks')}}</th>
				  <th width="80px">{{__('Action')}}</th>
				</tr>
			  </thead>
			  <tbody>

			  </tbody>
			</table>
		  </div>
		</div>
	</div>
</div>
@endif

