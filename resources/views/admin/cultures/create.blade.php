@extends('layouts.app')

@section('title')
{{__('Create Culture')}}
@endsection

@section('css')
@endsection

@section('breadcrumb')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">
            <i class="nav-icon fas fa-vial"></i>
            {{__('Cultures')}}
          </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">{{__('Home')}}</a></li>
            <li class="breadcrumb-item"><a href="{{route('admin.cultures.index')}}">{{__('Cultures')}}</a></li>
            <li class="breadcrumb-item active">{{__('Create Culture')}}</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
@endsection

@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">{{__('Create Culture')}}</h3>
    </div>
    <form method="POST" action="{{route('admin.cultures.store')}}">
        <!-- /.card-header -->
        <div class="card-body">
            @csrf
            @include('admin.cultures._form')
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
  <!-- Summernote -->
  <script src="{{url('public/plugins/summernote/summernote-bs4.min.js')}}"></script>
  
  <script src="{{url('js/admin/cultures.js')}}"></script>
@endsection