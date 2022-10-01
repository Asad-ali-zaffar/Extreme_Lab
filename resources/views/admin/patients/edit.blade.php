@extends('layouts.app')

@section('title')
{{__('Edit patient')}}
@endsection

@section('breadcrumb')

<div class="content-header">
    <div class="container-fluid" id="myHeaderLinks">
      <div class="row mb-2">
        <div class="col-sm-5">
          <h1 class="m-0 text-dark">
            <i class="nav-icon fas fa-user-injured"></i>
            {{__('Patients')}}
          </h1>
        </div><!-- /.col -->
        <div class="col-sm-7">
          <ol class="breadcrumb customOl">
            <li class="breadcrumb-item"><a href="#general_informaion">{{__('General Information')}}</a></li>
            <li class="breadcrumb-item"><a href="#personal_informaion">{{__('Personal Information')}}</a></li>
            <li class="breadcrumb-item"><a href="#emergency_contact">{{__('Emergency Contact')}}</a></li>
            <li class="breadcrumb-item"><a href="#patient_documents">{{__('Patient Document')}}</a></li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
@endsection

@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">{{__('Edit patient')}}</h3>
    </div>
    <!-- /.card-header -->
    <form method="POST" action="{{route('admin.patients.update',$patient->id)}}"  enctype="multipart/form-data"  id="patient_form">
        <!-- /.card-header -->
        <div class="card-body">
            @csrf
            @method('put')
            @include('admin.patients._form')
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">{{__('Save')}}</button>
        </div>
    </form>
    <!-- /.card-body -->
  </div>

@endsection
@section('scripts')
  <script src="{{url('public/js/admin/patients.js')}}"></script>
  <script>
    $(document).ready(function() {
        var data = $('#patient_type').val();
        let check = "{{ $patient['patient_type'] }}";
        if(data != 'Local Patient'){
            $('.display_tr').show();
        }        
    });
  </script>
@endsection