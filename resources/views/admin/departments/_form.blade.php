<div class="row">
    <div class="col-lg-6">
        <div class="form-group">
         <div class="input-group">
             <div class="input-group-prepend">
               <span class="input-group-text" id="basic-addon1">
                   <i class="fa fa-user"></i>
               </span>
             </div>
             <input type="text" class="form-control" placeholder="{{__('Department Id')}}" name="fname" id="id" @if(isset($patient)) value="{{$patient->id}}" @endif readonly>
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
                        <i class="fas fa-flag"></i>
                      </span>
                    </div>
                    <select class="form-control select2" name="sctn_id" placeholder="{{__('Section *')}}" id="sctn_id" required>
                       @foreach($data['sections'] as $single)
							 <option value="{{$single['id']}}"  @if(isset($patient)&&$patient['sctn_id']==$single['id']) selected @endif >{{$single['name_eng']}}</option>
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
                    <select class="form-control" name="status" placeholder="{{__('Status')}}" id="inv_type" required>
                        <option value="0" data-select2-id="19">In-Active</option>
                        <option value="1" data-select2-id="20">Active</option>
                        <option value="2" data-select2-id="21">Suspended</option>
                        <option value="3" data-select2-id="22">CLosed</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

</div>
