
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
						<select class="form-control" name="charges_type" placeholder="{{__('Charges Type')}}" id="charges_type" required>
							
							<option value="">{{__('Please Select Charges Type')}}</option>
							<option value="CONSULTATION CHARGES" @if(isset($record)&&$record->charges_type =='CONSULTATION CHARGES') selected @endif>CONSULTATION CHARGES</option>
							<option value="FOLLOWUP CHARGES" @if(isset($record)&&$record->charges_type =='FOLLOWUP CHARGES') selected @endif>FOLLOWUP CHARGES</option>
							<option value="REGISTRATION CHARGES" @if(isset($record)&&$record->charges_type =='REGISTRATION CHARGES') selected @endif>REGISTRATION CHARGES</option>
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
							<i class="fas fa-flag"></i>
						  </span>
						</div>
						<select class="form-control" name="nature" placeholder="{{__('Nature')}}" id="nature" required>
							
							<option value="">{{__('Please Select Nature')}}</option>
							<option value="OPD" @if(isset($record)&&$record->nature =='OPD') selected @endif>OPD</option>
							<option value="IPD" @if(isset($record)&&$record->nature =='IPD') selected @endif>IPD</option>
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
				<input type="text" class="form-control" placeholder="{{__('Charges*')}}" name="charges" id="charges" @if(isset($record)) value="{{$record->charges}}" @endif required>
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
							<i class="fas fa-flag"></i>
						  </span>
						</div>
						<select class="form-control" name="share_type" placeholder="{{__('Share Type')}}" id="share_type" required>
							
							<option value="">{{__('Please Select Share Type')}}</option>
							<option value="Percent" @if(isset($record)&&$record->share_type =='Percent') selected @endif>%</option>
							<option value="Amount" @if(isset($record)&&$record->share_type =='Amount') selected @endif>Amount</option>
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
						<input type="text" class="form-control" placeholder="{{__('Doctor Share')}}" name="doctor_share" id="doctor_share" @if(isset($record)) value="{{$record->doctor_share}}" @endif>
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
							<i class="fas fa-flag"></i>
						  </span>
						</div>
						<select class="form-control" name="billing_nature" placeholder="{{__('Billing Nature')}}" id="billing_nature" required>
							
							<option value="">{{__('Please Select Billing Nature')}}</option>
							<option value="Daily" @if(isset($record)&&$record->billing_nature =='Daily') selected @endif>Daily</option>
							<option value="Weekly" @if(isset($record)&&$record->billing_nature =='Weekly') selected @endif>Weekly</option>
							<option value="Monthly" @if(isset($record)&&$record->billing_nature =='Monthly') selected @endif>Monthly</option>
							<option value="No Billing" @if(isset($record)&&$record->billing_nature =='No Billing') selected @endif>No Billing</option>
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
						<input type="text" class="form-control" placeholder="{{__('Remarks')}}" name="remarks_charges" id="remarks_charges" @if(isset($record)) value="{{$record->remarks_charges}}" @endif>
					</div>
				</div>
			</div>
		</div>
  </div>