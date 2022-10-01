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
            {{__('Requested Invoices')}}
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
   <!-- /.card-header -->
    <div class="card-body">
	
   <div class="">
	  <div class="row">
		<div class="col-lg-4">
		  <div class="form-group">
			 <input type="text" class="form-control" id="filter_barcode" placeholder="{{__('Barcode')}}">
		  </div>
		</div>
		
		<div class="col-lg-4">
		  <div class="form-group">
			 <input type="text" class="form-control" id="inv_no" placeholder="{{__('Invoice No')}}">
		  </div>
		</div>
		
		<div class="col-lg-4">
		  <div class="form-group">
			 <select name="filter_status" id="filter_status" class="form-control select2">
				<option value="" selected>{{__('All')}}</option>
				<option value="1">{{__('Pending')}}</option>
				<option value="2">{{__('decline')}}</option>
				<option value="3">{{__('Approved')}}</option>
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
                 <th width="50px">{{__('Total')}}</th>
                 <th width="50px">{{__('Reason')}}</th>
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
   <script src="{{url('public/js/admin/invoice_statuses.js')}}"></script>
@endsection