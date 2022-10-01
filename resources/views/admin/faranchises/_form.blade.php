<div class="row">
    <div class="col-lg-4">
       <div class="form-group">
        <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">
                  <i class="fa fa-user"></i>
              </span>
            </div>
            <input type="text" class="form-control" placeholder="{{__('Faranchise Id')}}" name="fname" id="id" @if(isset($patient)) value="{{$patient->id}}" @endif readonly>
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
                    <select class="form-control select2" name="org_id" placeholder="{{__('Organization *')}}" id="org_id" required>
                       @foreach($data['organizations'] as $single)
							 <option value="{{$single['id']}}"  @if(isset($patient)&&$patient['org_id']==$single['id']) selected @endif >{{$single['name_eng']}}</option>
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
                    <select class="form-control select2" name="lab_id" placeholder="{{__('Lab Id')}}" id="lab_id" required>
						@foreach($data['labs'] as $single)
							 <option value="{{$single['id']}}"  @if(isset($patient)&&$patient['lab_id']==$single['id']) selected @endif >{{$single['name_eng']}}</option>
						@endforeach
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
            <input type="text" class="form-control" placeholder="{{__('Name (English) *')}}" name="name_eng" id="name_eng" @if(isset($patient)) value="{{$patient->name_eng}}" @endif required>
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
            <input type="text" class="form-control" placeholder="{{__('Name (Local)')}}" name="name_local" id="name_local" @if(isset($patient)) value="{{$patient->name_local}}" @endif >
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
            <input type="text" class="form-control" placeholder="{{__('Contact Person')}}" name="contact_name" id="contact_name" @if(isset($patient)) value="{{$patient->contact_name}}" @endif>
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
                    <input type="text" class="form-control" placeholder="{{__('Phone#')}}" name="ph1" id="ph1" @if(isset($patient)) value="{{$patient->ph1}}" @endif required>
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
                    <input type="text" class="form-control" placeholder="{{__('Phone# 2')}}" name="ph2" id="ph2" @if(isset($patient)) value="{{$patient->ph2}}" @endif>
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
                    <input type="text" class="form-control" placeholder="{{__('Mobile#')}}" name="mob_no1" id="mob_no1" @if(isset($patient)) value="{{$patient->mob_no1}}" @endif>
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
                    <input type="text" class="form-control" placeholder="{{__('Mobile# 2')}}" name="mob_no2" id="mob_no2" @if(isset($patient)) value="{{$patient->mob_no2}}" @endif>
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
                    <select class="form-control select2" name="country_id" placeholder="{{__('Country')}}" id="country_id">
                       @foreach($data['countries'] as $single)
							 <option value="{{$single['id']}}"  @if(isset($patient)&&$patient['country_id']==$single['id']) selected @elseif($single['id'] == '165') selected @endif >{{$single['eng_country_name']}}</option>
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
							 <option value="{{$single['id']}}"  @if(isset($patient)&&$patient['prov_id']==$single['id']) selected @elseif($single['id'] == '1') selected @endif >{{$single['name']}}</option>
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
							 <option value="{{$single['id']}}"  @if(isset($patient)&&$patient['city_id']==$single['id']) selected @elseif($single['id'] == '2') selected @endif >{{$single['name']}}</option>
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
                        <i class="fas fa-map-marker-alt"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control" placeholder="{{__('Address *')}}" name="address1" id="address1" @if(isset($patient)) value="{{$patient->address1}}" @endif required>
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
                    <input type="text" class="form-control" placeholder="{{__('Address 2')}}" name="address2" id="address2" @if(isset($patient)) value="{{$patient->address2}}" @endif>
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
                        <i class="fas fa-user"></i>
                      </span>
                    </div>
                    <input type="email" class="form-control" placeholder="{{__('Email')}}" name="email" id="email" @if(isset($patient)) value="{{$patient->email}}" @endif>
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
                    <select class="form-control" name="status" placeholder="{{__('Status')}}" id="status" required>
                       <option value="0"  @if(isset($patient)&&$patient['status']==0) selected @endif >Active</option>
                       <option value="1"  @if(isset($patient)&&$patient['status']==1) selected @endif >In-Active</option>
                       <option value="2"  @if(isset($patient)&&$patient['status']==2) selected @endif >Suspend</option>
                       <option value="3"  @if(isset($patient)&&$patient['status']==3) selected @endif >Closed</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>
