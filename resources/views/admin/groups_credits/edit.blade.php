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
            <li class="breadcrumb-item"><a href="{{route('admin.groups_credits.index')}}">{{__('Groups')}}</a></li>
            <li class="breadcrumb-item active">{{__('Edit invoice')}}</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
@endsection

@section('content')
   
   <!-- Form -->
   <form action="{{route('admin.groups_credits.update',$group->id)}}" method="POST" id="group_form">
        @csrf
        @method('put')
        @include('admin.groups_credits._form')
   </form>
   <!-- \Form -->

   <!-- Models -->
   @include('admin.groups_credits.modals.patient_modal')
   @include('admin.groups_credits.modals.doctor_modal')
   <!--\Models-->


@endsection

@section('scripts')
  <script>
    var test_arr=[];
    var culture_arr=[];

    (function($){

      "use strict";

      //selected tests
      @foreach($group['tests'] as $test)
        test_arr.push('{{$test["test_id"]}}');
      @endforeach

      //selected cultures
      @foreach($group['cultures'] as $culture)
        culture_arr.push('{{$culture["culture_id"]}}');
      @endforeach

    })(jQuery);
  </script>
  <script src="{{url('js/admin/groups_credits.js')}}"></script>
@endsection