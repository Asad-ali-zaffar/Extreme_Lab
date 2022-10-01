@extends('layouts.app')

@section('title')
    {{__('Edit invoice')}}
@endsection

@section('breadcrumb')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">
            <i class="nav-icon fas fa-layer-group"></i>
            {{__('Invoices')}}
          </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">{{__('Home')}}</a></li>
            <li class="breadcrumb-item"><a href="{{route('admin.groups.index')}}">{{__('Groups')}}</a></li>
            <li class="breadcrumb-item active">{{__('Edit invoice')}}</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
@endsection

@section('content')
   
   <!-- Form -->
   <form action="{{route('admin.groups.update',$group->id)}}" method="POST" id="group_form">
        @csrf
        @method('put')
        @include('admin.groups._form')
   </form>
   <!-- \Form -->

   <!-- Models -->
   @include('admin.groups.modals.patient_modal')
   @include('admin.groups.modals.doctor_modal')
   <!--\Models-->


@endsection

@section('scripts')

  <script>
	
		var test_arr=[];
		
		@if(isset($group)&&$group['lab_id']!='')
			  
			  var lab_id = {{$group['lab_id']}};
			  var center_id = {{$group['lab_center_id']}};
			  
			  $.ajax({
				  dataType: 'JSON',
				  type: "POST",
				  url: get_lab_centers,
				  data: { "lab_id":lab_id , "center_id": center_id },
				  beforeSend:function(){
					$('.preloader').show();
					$('.loader').show();
				  },
				  success:function(response)
				  {
					  if(response.html == ''){
						  swal.fire({
						  buttons: false,
						  title:'Error',
						  icon:'error',
						  text: response.message,
						  timer: 3000,
						  closeOnConfirm: false
						});	
					  }
					  else{
						 $("#center_id").html(response.html);
					  }
				  },
				  complete:function()
				  {
					$('.preloader').hide();
					$('.loader').hide();
				  }
			  });
		@endif
	
		@if(isset($group)&&$group['party_id']!='')
			  var party_id = {{$group['party_id']}};
			  var center_id = {{$group['party_center_id']}};
		  
			  $.ajax({
				  dataType: 'JSON',
				  type: "POST",
				  url: get_party_centers,
				  data: { "party_id":party_id , "center_id":center_id },
				  beforeSend:function(){
					$('.preloader').show();
					$('.loader').show();
				  },
				  success:function(response)
				  {
					  if(response.html == ''){
						  swal.fire({
						  buttons: false,
						  title:'Error',
						  icon:'error',
						  text: response.message,
						  timer: 3000,
						  closeOnConfirm: false
						});	
					  }
					  else{
						 $("#party_center_id").html(response.html);
					  }
				  },
				  complete:function()
				  {
					$('.preloader').hide();
					$('.loader').hide();
				  }
			  });
		@endif
	
  </script>
  
  <script src="{{url('public/js/admin/groups.js')}}"></script>

 @endsection