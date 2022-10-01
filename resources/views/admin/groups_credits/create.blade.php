@extends('layouts.app')

@section('title')
    {{__('Create invoice')}}
@endsection

@section('breadcrumb')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
		 <div class="col-md-2">
			  <h1 class="m-0 text-dark">
				<i class="nav-icon fas fa-layer-group"></i>
				{{__('Invoices')}}
			  </h1>	
		  </div>
		  
		  <div class="col-md-10">
			  <ol class="breadcrumb customOl float-right">
				<li class="breadcrumb-item"><a href="#general_informaion"> <i class="nav-icon fas fa-user"></i> {{__('Register New Patient')}}</a></li>
				<li class="breadcrumb-item"><a href="{{route('admin.patients.index')}}"><i class="nav-icon fas fa-list"></i>{{__('View List')}}</a></li>
				<li class="breadcrumb-item"><a href="#emergency_contact"><i class="nav-icon fas fa-plane"></i>{{__('Travel History')}}</a></li>
				<li class="breadcrumb-item noBgBlue"><a href="#patient_documents"><i class="nav-icon fas fa-home"></i>{{__('Home')}}</a></li>
				<li class="breadcrumb-item noBgRed"><a href="#patient_documents"><i class="nav-icon fas fa-close"></i>{{__('Cancel Invoice')}}</a></li>
				<li class="breadcrumb-item"><a href="#patient_documents"><i class="nav-icon fas fa-plane"></i>{{__('Airline')}}</a></li>
				<li class="breadcrumb-item"><a href="#patient_documents"><i class="nav-icon fas fa-flag"></i>{{__('Country')}}</a></li>
				<li class="breadcrumb-item btn-danger"><a href="#patient_documents"><i class="nav-icon fas fa-print"></i>{{__('Invoice')}}</a></li>
			  </ol>
		  </div>
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
@endsection

@section('content')
   
   <!-- Form -->
   <form action="{{route('admin.groups_credits.store')}}" method="POST" id="group_form">
    @csrf
    @include('admin.groups_credits._form')
   </form>
   <!-- \Form -->

   <!-- Models -->
   @include('admin.groups_credits.modals.patient_modal')
   @include('admin.groups_credits.modals.doctor_modal')
   <!--\Models-->


@endsection

@section('scripts')
  <script src="{{url('public/js/admin/groups.js')}}"></script>
@endsection
