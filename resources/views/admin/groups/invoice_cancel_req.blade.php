@extends('layouts.app')

@section('title')
    {{__('Cancel Invoice Request')}}
@endsection

@section('breadcrumb')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
		 <div class="col-md-4">
			  <h1 class="m-0 text-dark">
				<i class="nav-icon fas fa-layer-group"></i>
				{{__('Cancel Invoice Request')}}
			  </h1>	
		  </div>
		  <div class="col-md-8">
			  <h1 class="m-0 text-dark">
				@if(isset($group)&&isset($group['is_status_request'])) 
					<div class="alert alert-danger" style="padding: 5px;">Reason: {{$group['request_reason']}}</div>
				@endif
			  </h1>	
		  </div>
		  
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
@endsection

@section('content')
   
   <!-- Form -->
   <form action="{{route('admin.groups.request_for_cancel')}}" method="POST" id="">
    @csrf
    @include('admin.groups._form_cancel_invoice')
   </form>
   <!-- \Form -->

   <!-- Models -->
   @include('admin.groups.modals.doctor_modal')
   <!--\Models-->


@endsection

@section('scripts')
  <script src="{{url('public/js/admin/cancel_invoice.js')}}"></script>
@endsection
