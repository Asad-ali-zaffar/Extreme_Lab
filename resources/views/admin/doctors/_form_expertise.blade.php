
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
						<select class="form-control" name="expertise" placeholder="{{__('Expertise')}}" id="expertise" required>
							
							<option value="">{{__('Please Select Expertise')}}</option>
							
							<option value="CARDIAC SURGERY" @if(isset($record)&&$record->expertise =='CARDIAC SURGERY') selected @endif>CARDIAC SURGERY</option>
							
							<option value="ENT" @if(isset($record)&&$record->expertise =='ENT') selected @endif>ENT</option>
							
							<option value="GENERAL SURGERY" @if(isset($record)&&$record->expertise =='GENERAL SURGERY') selected @endif>GENERAL SURGERY</option>
							<option value="GYNECOLOGY" @if(isset($record)&&$record->expertise =='GYNECOLOGY') selected @endif>GYNECOLOGY</option>
							<option value="HEPATOLOGY" @if(isset($record)&&$record->expertise =='HEPATOLOGY') selected @endif>HEPATOLOGY</option>
							<option value="INTERNAL MEDICINE" @if(isset($record)&&$record->expertise =='INTERNAL MEDICINE') selected @endif>INTERNAL MEDICINE</option>
						</select>
					</div>
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
						<input type="text" class="form-control" placeholder="{{__('Remarks')}}" name="remarks_expertises" id="remarks_expertises" @if(isset($record)) value="{{$record->remarks_expertises}}" @endif>
						
						<input type="hidden" class="form-control" name="doc_id" id="doc_id" @if(isset($doctor)) value="{{$doctor->id}}" @endif required>
						<input type="hidden" class="form-control" name="record_id" id="record_id" @if(isset($record)) value="{{$record->id}}" @endif required>
					</div>
				</div>
			</div>
		</div>
  </div>