@extends('layouts.app')

@section('title')
{{__('Create Doctor')}}
@endsection

@section('css')
@endsection

@section('breadcrumb')
<div class="content-header">
    <div class="container-fluid" id="myHeaderLinks">
      <div class="row mb-2">
        <div class="col-sm-7">
          <h1 class="m-0 text-dark">
            <i class="nav-icon fas fa-user-injured"></i>
            {{__('Doctors')}}
          </h1>
        </div><!-- /.col -->
        <div class="col-sm-5">
          <ol class="breadcrumb customOl">
            <li class="breadcrumb-item"><a href="#general_informaion">{{__('General Information')}}</a></li>
			<!--
            <li class="breadcrumb-item"><a href="#qualification">{{__('Qualification')}}</a></li>
            <li class="breadcrumb-item"><a href="#expertise">{{__('Area of Experties')}}</a></li>
            <li class="breadcrumb-item"><a href="#charges">{{__('Charges')}}</a></li> -->
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
@endsection

@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">{{__('Create Doctor')}}</h3>
    </div>
    <form method="POST" action="{{route('admin.doctors.store')}}"  enctype="multipart/form-data"  >
        <!-- /.card-header -->
        <div class="card-body">
            @csrf
            @include('admin.doctors._form')
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">
              <i class="fa fa-check"></i> {{__('Save')}}
            </button>
        </div>
    </form>
</div>


@endsection
@section('scripts')
  <script src="{{url('public/js/admin/doctors.js')}}"></script>
@endsection