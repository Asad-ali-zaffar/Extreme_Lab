
<div class="row">
		<div class="col-lg-12">
			<div class="form-group">
				<div class="form-group">
					<div class="input-group">
						<div class="input-group-prepend">
						  <span class="input-group-text" id="basic-addon1">
							<i class="fas fa-flag"></i>
						  </span>
						</div>
						<select class="form-control" name="qualification" placeholder="{{__('Qualification')}}" id="qualification" required>
							
							<option value="">{{__('Please Select Qualification')}}</option>
							
							<option value="DOCTOR OF PHILOSOPHY" @if(isset($record)&&$record->qualification =='DOCTOR OF PHILOSOPHY') selected @endif>DOCTOR OF PHILOSOPHY</option>
							
							<option value="F.R.C.P.S" @if(isset($record)&&$record->qualification =='F.R.C.P.S') selected @endif>F.R.C.P.S</option>
							
							<option value="FCPS" @if(isset($record)&&$record->qualification =='FCPS') selected @endif>FCPS</option>
							<option value="M.B.B.S" @if(isset($record)&&$record->qualification =='M.B.B.S') selected @endif>M.B.B.S</option>
							<option value="M.C.P.S." @if(isset($record)&&$record->qualification =='M.C.P.S.') selected @endif>M.C.P.S.</option>
							<option value="MBA" @if(isset($record)&&$record->qualification =='MBA') selected @endif>MBA</option>
						</select>
					</div>
				</div>
			</div>
		</div>
		
		<div class="col-lg-12">
		   <div class="form-group">
			<div class="input-group">
				<div class="input-group-prepend">
				  <span class="input-group-text" id="basic-addon1">
					  <i class="fa fa-user"></i>
				  </span>
				</div>
				<input type="text" class="form-control" placeholder="{{__('Institute*')}}" name="institute" id="institute" @if(isset($record)) value="{{$record->institute}}" @endif required>
				<input type="hidden" class="form-control" name="doc_id" id="doc_id" @if(isset($doctor)) value="{{$doctor->id}}" @endif required>
				<input type="hidden" class="form-control" name="record_id" id="record_id" @if(isset($record)) value="{{$record->id}}" @endif required>
			</div>
		   </div>
		</div>
		
		<div class="col-lg-12">
			<div class="form-group">
				<div class="form-group">
					<div class="input-group">
						<div class="input-group-prepend">
						  <span class="input-group-text" id="basic-addon1">
							<i class="fas fa-comments"></i>
						  </span>
						</div>
						<input type="text" class="form-control" placeholder="{{__('Remarks')}}" name="remarks_qualification" id="remarks_qualification" @if(isset($record)) value="{{$record->remarks_qualification}}" @endif>
					</div>
				</div>
			</div>
		</div>
  </div>