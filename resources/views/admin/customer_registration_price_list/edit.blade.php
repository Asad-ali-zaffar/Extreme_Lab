@extends('layouts.app')

@section('title')
{{__('Edit patient')}}
@endsection

@section('breadcrumb')

<div class="content-header">
    <div class="container-fluid" id="myHeaderLinks">
      <div class="row mb-2">
        <div class="col-sm-12">
          <h1 class="m-0 text-dark">
            <i class="nav-icon fas fa-user-injured"></i>
            {{__('Customer Price List')}}
          </h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
@endsection

@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">{{__('Edit Price List')}}</h3>
    </div>
    <!-- /.card-header -->
    <form method="POST" action="{{route('admin.customer_price_list.update',$patient->id)}}"  enctype="multipart/form-data"  id="form">
        <!-- /.card-header -->
        <div class="card-body">
            @csrf
            @method('put')
            @include('admin.customer_registration_price_list._form')
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
  <script src="{{url('public/js/admin/customer_price_list.js')}}"></script>
@endsection