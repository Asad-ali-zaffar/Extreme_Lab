<div class="row">
    <div class="col-lg-4">
       <div class="form-group">
        <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">
                  <i class="fa fa-user"></i>
              </span>
            </div>
            <input type="text" class="form-control" placeholder="{{__('Shift No')}}" name="id" id="id" @if(isset($patient)) value="{{$patient->id}}" @endif readonly>
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
                    <select class="form-control select2" name="lab_id" placeholder="{{__('Lab Name')}}" id="lab_id" required>
						<option value="">Please Select Lab*</option>
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
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1">
                        <i class="fas fa-flag"></i>
                      </span>
                    </div>
                    <select class="form-control" name="shift_prefix" placeholder="{{__('Shift Prefix')}}" id="shift_prefix" required>
						<option value="">Please Shift Prefix*</option>
						<option value="morning"  @if(isset($patient)&&$patient['shift_prefix']=='morning') selected @endif >Morning</option>
                        <option value="evening"  @if(isset($patient)&&$patient['shift_prefix']=='evening') selected @endif >Evening</option>
                        <option value="night"  @if(isset($patient)&&$patient['shift_prefix']=='night') selected @endif >Night</option>
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
				<input type="text" class="form-control datepicker" placeholder="{{__('Shift Date*')}}" name="shift_date" id="shift_date"  @if(isset($patient)) value="{{$patient->shift_date}}" @endif autocomplete="off" required>
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
                    <select class="form-control" name="status" placeholder="{{__('Shift Status')}}" id="status" required>
                       <option value="0"  @if(isset($patient)&&$patient['status']==0) selected @endif >Open</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>
