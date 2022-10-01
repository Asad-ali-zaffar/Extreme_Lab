<div class="row">
    <div class="col-lg-4">
       <div class="form-group">
        <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">
                  <i class="fa fa-user"></i>
              </span>
            </div>
            <input type="text" class="form-control" placeholder="{{__('Id *')}}" name="id" id="id" @if(isset($patient)) value="{{$patient->id}}" @endif readonly>
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
                    <select class="form-control" name="type" placeholder="{{__('Type')}}" id="type" required>
                       <option value="0"  @if(isset($patient)&&$patient['type']==0) selected @endif >Test</option>
                       <option value="1"  @if(isset($patient)&&$patient['type']==1) selected @endif >Part</option>
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
					<select class="form-control select2" name="org_id" placeholder="{{__('Organization *')}}" id="org_id" required>
					    <option value="">Please select organization</option>
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
            <input type="text" class="form-control" placeholder="{{__('Name *')}}" name="name_eng" id="name_eng" @if(isset($patient)) value="{{$patient->name}}" @endif required>
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
                        <option value="">Please select nature</option>
					   <option value="0"  @if(isset($patient)&&$patient['nature']==0) selected @endif >Hide</option>
                       <option value="1"  @if(isset($patient)&&$patient['nature']==1) selected @endif >Discount</option>
                       <option value="2"  @if(isset($patient)&&$patient['nature']==2) selected @endif >Routine Test</option>
                       <option value="3"  @if(isset($patient)&&$patient['nature']==3) selected @endif >Special Test</option>
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
					<select class="form-control select2" name="dept_id" placeholder="{{__('Department *')}}" id="dept_id" required>
					    <option value="">Please select department</option>
						@foreach($data['departments'] as $single)
							 <option value="{{$single['id']}}"  @if(isset($patient)&&$patient['dept_id']==$single['id']) selected @endif >{{$single['name_eng']}}</option>
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
                    <select class="form-control" name="perform_by" placeholder="{{__('Perform By')}}" id="perform_by" required>
                       <option value="0"  @if(isset($patient)&&$patient['perform_by']==0) selected @endif >Self</option>
                       <option value="1"  @if(isset($patient)&&$patient['perform_by']==1) selected @endif >Both</option>
                       <option value="2"  @if(isset($patient)&&$patient['perform_by']==2) selected @endif >Outside</option>
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
					<select class="form-control select2" name="unit_id" placeholder="{{__('Unit *')}}" id="unit_id" required>
					    <option value="">Please select unit *</option>
						@foreach($data['units'] as $single)
							 <option value="{{$single['id']}}"  @if(isset($patient)&&$patient['unit_id']==$single['id']) selected @endif >{{$single['name_local']}}</option>
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
            <input type="text" class="form-control" placeholder="{{__('Price *')}}" name="price" id="price" @if(isset($patient)) value="{{$patient->price}}" @endif required>
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
            <input type="text" class="form-control" placeholder="{{__('Urgent Price')}}" name="urgent_price" id="urgent_price" @if(isset($patient)) value="{{$patient->urgent_price}}" @endif >
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
					<select class="form-control select2" name="pattern_id" placeholder="{{__('Pattern *')}}" id="pattern_id" required>
					    @foreach($data['patterns'] as $single)
							 <option value="{{$single['id']}}"  @if(isset($patient)&&$patient['pattern_id']==$single['id']) selected @endif >{{$single['name']}}</option>
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
            <input type="text" class="form-control" placeholder="{{__('Reporting Days')}}" name="reporting_days" id="reporting_days" @if(isset($patient)) value="{{$patient->reporting_days}}" @endif >
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
					<select class="form-control select2" name="sample_id" placeholder="{{__('Sample Requirement *')}}" id="sample_id" required>
						<option value="">Please select sample * </option>
					    @foreach($data['samples'] as $single)
							 <option value="{{$single['id']}}"  @if(isset($patient)&&$patient['sample_id']==$single['id']) selected @endif >{{$single['name_eng']}}</option>
						@endforeach
					</select>
				</div>
			</div>
		</div>
	</div>
	
	
	<div class="col-lg-8">
       <div class="form-group">
        <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">
                  <i class="fa fa-user"></i>
              </span>
            </div>
            <input type="text" class="form-control" placeholder="{{__('Test Requirement')}}" name="test_req" id="test_req" @if(isset($patient)) value="{{$patient->test_req}}" @endif >
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
            <input type="text" class="form-control" placeholder="{{__('Special Remarks')}}" name="special_remarks" id="special_remarks" @if(isset($patient)) value="{{$patient->special_remarks}}" @endif >
        </div>
       </div>
    </div>
	
	<div class="col-lg-8">
       <div class="form-group">
        <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">
                  <i class="fa fa-user"></i>
              </span>
            </div>
            <input type="text" class="form-control" placeholder="{{__('Remarks')}}" name="remarks" id="remarks" @if(isset($patient)) value="{{$patient->remarks}}" @endif >
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
                       <option value="0"  @if(isset($patient)&&$patient['status']==0) selected @endif >In Active</option>
                       <option value="1"  @if(isset($patient)&&$patient['status']==1) selected @endif >Active</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
	
</div>
