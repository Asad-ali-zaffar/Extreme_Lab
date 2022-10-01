@extends('layouts.app')

@section('title')
{{__('Invoices')}}
@endsection


@section('breadcrumb')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">
            <i class="nav-icon fas fa-layer-group"></i>
            {{__('Lab Invoice Search')}}
          </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">{{__('Home')}}</a></li>
            <li class="breadcrumb-item active">{{__('Groups')}}</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
@endsection

@section('content')
<div class="card card-primary card-outline">
    <div class="card-header">
      <h3 class="card-title"><b>Total Row Count {{$count}}</b></h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
	
   <div class="">
	  <div class="row">
		<div class="col-lg-3">
		  <div class="form-group">
			 <input type="text" class="form-control datepickerrange" id="filter_date" placeholder="{{__('Date')}}">
		  </div>
		</div>
		<div class="col-lg-3">
		  <div class="form-group">
			 <input type="text" class="form-control" id="filter_barcode" placeholder="{{__('Barcode')}}">
		  </div>
		</div>
		
		<div class="col-lg-3">
		  <div class="form-group">
			 <input type="text" class="form-control" id="inv_no" placeholder="{{__('Invoice No')}}">
		  </div>
		</div>
		
		<div class="col-lg-3">
		  <div class="form-group">
			 <select name="filter_status" id="filter_status" class="form-control select2">
				<option value="" selected>{{__('All')}}</option>
				<option value="1">{{__('Done')}}</option>
				<option value="0">{{__('Pending')}}</option>
			 </select>
		  </div>
		</div>
		
		
		<div class="col-lg-3">
		  <div class="form-group">
			 <select name="filter_type" id="filter_type" class="form-control select2">
				<option value="" selected>{{__('All')}}</option>
				<option value="1">{{__('Cash Sales')}}</option>
				<option value="2">{{__('Credit Sales')}}</option>
			 </select>
		  </div>
		</div>
		
		<div class="col-lg-3">
			<div class="form-group">
				<select id="lab_id" name="lab_id" class="form-control select2 lab_id" required>
					<option value="">Please select lab</option>
					@foreach($data['labs'] as $single)
						 <option value="{{$single['id']}}" @if(isset($group)&&$group['lab_id']==$single['id']) selected @endif>{{$single['name_eng']}}</option>
					 @endforeach
				</select>
			</div> 
		</div>
		
		<div class="col-lg-3">
			<div class="form-group">
				<select id="center_id" name="lab_center_id" class="form-control" required>
					<option value="">Please select center</option>
				</select>
			</div> 
		</div>
		
		<div class="col-lg-3">
			<div class="form-group">
				<select id="party_id" name="party_id" class="form-control select2" required>
					<option value="">Please select party</option>
					@foreach($data['parties'] as $single)
						 <option value="{{$single['id']}}" @if(isset($group)&&$group['party_id']==$single['id']) selected @endif>{{$single['name_eng']}}</option>
					 @endforeach
				</select>
			</div> 
		</div>
		
		
		<div class="col-lg-3">
			<div class="form-group">
				<select id="amount_range" name="amount_range" class="form-control" required>
					<option value="">Please select amount range </option>
					<option value="0-500">0-500</option>
					<option value="100-500">100-500</option>
					<option value="500-1000">500-1000</option>
					<option value="1000-2000">1000-2000</option>
					<option value="2000-5000">2000-5000</option>
					<option value="5000-10000">5000-10000</option>
					<option value="10000-15000">10000-15000</option>
					<option value="15000">More than 15000 </option>
				</select>
			</div> 
		</div>
		
		
	  </div>
	</div>
	
	
    <!-- \filter -->
      <div class="row">
         <div class="col-lg-12 table-responsive">
            <table id="groups_table" class="table table-striped table-hover table-bordered" width="100%">
               <thead>
               <tr>
                 <th width="10px">#</th>
                 <th width="100px">{{__('Type')}}</th>
                 <th width="100px">{{__('Invoice #')}}</th>
                 <th width="10px">{{__('Barcode')}}</th>
                 <th width="100px">{{__('Patient Code')}}</th>
                 <th width="100px">{{__('Patient Name')}}</th>
                 <th width="50px">{{__('Subtotal')}}</th>
                 <th width="50px">{{__('Total')}}</th>
                 <th width="50px">{{__('Paid')}}</th>
                 <th width="100px">{{__('Date')}}</th>
                 <th width="10px">{{__('Status')}}</th>
               </tr>
               </thead>
               <tbody>
                 
               </tbody>
             </table>
         </div>
      </div>
    </div>
    <!-- /.card-body -->
  </div>

@endsection
@section('scripts')
   <script> 
		var get_lab_centers = "{{route('admin.get_lab_centers')}}"; 
   </script>
   <script src="{{url('public/js/select2.js')}}"></script>
   <script src="{{url('public/js/admin/searching.js')}}"></script>
@endsection