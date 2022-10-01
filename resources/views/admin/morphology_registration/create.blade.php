@extends('layouts.app')

@section('title')
{{__('Create Normal Range Heading')}}
@endsection

@section('breadcrumb')
<div class="content-header">
    <div class="container-fluid" id="myHeaderLinks">
      <div class="row mb-2">
        <div class="col-sm-12">
          <h1 class="m-0 text-dark">
            <i class="nav-icon fas fa-user-injured"></i>
            {{__('Normal Range Heading')}}
          </h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
@endsection

@section('content')
<div class="card card-primary" id="page-wrap">
    <div class="card-header">
      <h3 class="card-title">{{__('General')}}</h3>
    </div>
    <form method="POST" action="{{route('admin.morphology_registration.store')}}"  enctype="multipart/form-data"  id="form">
        <!-- /.card-header -->
        <div class="card-body">
            @csrf
            @include('admin.morphology_registration._form')
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">{{__('Save')}}</button>
        </div>
    </form>	

</div>
 
@endsection
@section('scripts')
  <script src="{{url('public/js/admin/morphology_registration.js')}}"></script>
@endsection