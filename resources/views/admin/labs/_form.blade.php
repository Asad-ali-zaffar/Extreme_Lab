<div class="row">
    <div class="col-lg-4">
       <div class="form-group">
        <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">
                  <i class="fa fa-user"></i>
              </span>
            </div>
            <input type="text" class="form-control" placeholder="{{__('Lab Id')}}" name="fname" id="id" @if(isset($patient)) value="{{$patient->id}}" @endif readonly>
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
                    <select class="form-control" name="inv_type" placeholder="{{__('Invoice Type')}}" id="inv_type" required>
                       <option value="1"  @if(isset($patient)&&$patient['inv_type']==1) selected @endif >A4</option>
                       <option value="2"  @if(isset($patient)&&$patient['inv_type']==2) selected @endif >Thermal</option>
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
                        <i class="fas fa-address-card"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control" placeholder="{{__('Revenue Account')}}" name="rev_acc" id="rev_acc" @if(isset($patient)) value="{{$patient->rev_acc}}" @endif>
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
                        <i class="fas fa-address-card"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control" placeholder="{{__('Cash Account')}}" name="cash_acc" id="cash_acc" @if(isset($patient)) value="{{$patient->cash_acc}}" @endif>
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
                        <i class="fas fa-address-card"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control" placeholder="{{__('Bank Account')}}" name="bank_acc" id="bank_acc" @if(isset($patient)) value="{{$patient->bank_acc}}" @endif>
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
                        <i class="fas fa-comments"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control" placeholder="{{__('Remarks')}}" name="remarks" id="remarks" @if(isset($patient)) value="{{$patient->remarks}}" @endif>
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
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-app-indicator" viewBox="0 0 16 16">
                            <path d="M5.5 2A3.5 3.5 0 0 0 2 5.5v5A3.5 3.5 0 0 0 5.5 14h5a3.5 3.5 0 0 0 3.5-3.5V8a.5.5 0 0 1 1 0v2.5a4.5 4.5 0 0 1-4.5 4.5h-5A4.5 4.5 0 0 1 1 10.5v-5A4.5 4.5 0 0 1 5.5 1H8a.5.5 0 0 1 0 1H5.5z"/>
                            <path d="M16 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                          </svg>
                      </span>
                    </div>
                    {{-- <select class="form-control" name="inv_type" placeholder="{{__('Status')}}" id="inv_type" required>
                       <option value="1"  @if(isset($patient)&&$patient['inv_type']==1) selected @endif >A4</option>
                       <option value="2"  @if(isset($patient)&&$patient['inv_type']==2) selected @endif >Thermal</option>
                    </select> --}}
                     <select class="form-control" name="status" placeholder="{{__('Status')}}" id="inv_type" required>
                       
                        <option value="0" data-select2-id="19">Active</option>
                        <option value="1" data-select2-id="20">In-Active</option>
                        <option value="2" data-select2-id="21">Suspended</option>
                        <option value="3" data-select2-id="22">CLosed</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>

