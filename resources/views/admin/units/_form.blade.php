<div class="row">
    <div class="col-lg-4">
       <div class="form-group">
        <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">
                  <i class="fa fa-user"></i>
              </span>
            </div>
            <input type="text" class="form-control" placeholder="{{__('Test Unit Id')}}" name="id" id="id" @if(isset($patient)) value="{{$patient->id}}" @endif readonly>
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
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1">
                        <i class="fas fa-flag"></i>
                      </span>
                    </div>
                    <select class="form-control" name="status" placeholder="{{__('Status *')}}" id="is_active" required>
                       <option value="1"  @if(isset($patient)&&$patient['status']==1) selected @endif >Active</option>
                       <option value="0"  @if(isset($patient)&&$patient['status']==0) selected @endif >In Active</option>
                       <option value="2"  @if(isset($patient)&&$patient['status']==2) selected @endif >Suspend</option>
                       <option value="3"  @if(isset($patient)&&$patient['status']==3) selected @endif >Close</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>
