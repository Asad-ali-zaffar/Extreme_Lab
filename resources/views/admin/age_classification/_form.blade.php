<div class="row">
    <div class="col-lg-6">
       <div class="form-group">
        <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">
                  <i class="fa fa-user"></i>
              </span>
            </div>
            <input type="text" class="form-control" placeholder="{{__('Class Id *')}}" name="id" id="id" @if(isset($patient)) value="{{$patient->id}}" @endif readonly>
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
            <input type="text" class="form-control" placeholder="{{__('Name (English)*')}}" name="name" id="name" @if(isset($patient)) value="{{$patient->name}}" @endif required>
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
                    <select class="form-control" name="gender" placeholder="{{__('Gender')}}" id="gender" required>
                         <option value="">{{__('Please Select Gender *')}}</option>
						<option value="Male" @if(isset($patient)&&$patient['gender']=='Male') selected @endif>Male</option>
						<option value="Female" @if(isset($patient)&&$patient['gender']=='Female') selected @endif>Female</option>
						<option value="New Born" @if(isset($patient)&&$patient['gender']=='New Born') selected @endif>New Born</option>
						<option value="Child" @if(isset($patient)&&$patient['gender']=='Child') selected @endif>Child</option>
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
                    <select class="form-control" name="status" placeholder="{{__('Status')}}" id="status" required>
                       <option value="0"  @if(isset($patient)&&$patient['status']==0) selected @endif >In Active</option>
                       <option value="1"  @if(isset($patient)&&$patient['status']==1) selected @endif >Active</option>
                       <option value="2"  @if(isset($patient)&&$patient['status']==2) selected @endif >Suspend</option>
                       <option value="3"  @if(isset($patient)&&$patient['status']==3) selected @endif >Close</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>
