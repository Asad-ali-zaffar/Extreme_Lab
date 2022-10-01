<div class="row">
	<div class="col-lg-6">
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

	<div class="col-lg-6">
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
	

    <div class="col-lg-6">
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">
                    <i class="fas fa-id-card"></i>
                  </span>
                </div>
                <input type="text" class="form-control" placeholder="{{__('NTN #')}}" name="ntn_no" id="ntn_no" @if(isset($patient)) value="{{$patient->ntn_no}}" @endif>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">
                    <i class="fas fa-id-card"></i>
                  </span>
                </div>
                <input type="text" class="form-control" placeholder="{{__('STRN #')}}" name="str_no" id="str_no" @if(isset($patient)) value="{{$patient->str_no}}" @endif>
            </div>
        </div>
    </div>
	
	<div class="col-lg-6">
        <div class="form-group">
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1">
                        <i class="fas fa-calendar"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control" placeholder="{{__('Nature of Business')}}" id="buss_nature" name="buss_nature" @if(isset($patient)) value="{{$patient['buss_nature']}}" @endif >
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
                        <i class="fas fa-id-card"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control" placeholder="{{__('Location')}}" id="location" name="location" @if(isset($patient)) value="{{$patient['location']}}" @endif>
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
                        <i class="fas fa-address-card"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control" placeholder="{{__('Address')}}" id="address" name="address" @if(isset($patient)) value="{{$patient['address']}}" @endif>
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
                        <i class="fas fa-id-card"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control" placeholder="{{__('Cash GL Account *')}}" id="cash_gl_account" name="cash_gl_account" @if(isset($patient)) value="{{$patient['cash_gl_account']}}" @endif required>
                </div>
            </div>
        </div>
    </div>
	
</div>
