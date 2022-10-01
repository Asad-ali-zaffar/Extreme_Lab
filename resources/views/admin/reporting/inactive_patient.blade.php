@extends('layouts.app')

@section('title')
    {{__('Reporting')}}
@endsection

@section('breadcrumb')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        <i class="nav-icon fas fa-user-injured"></i>
                        {{__('Reporting')}}
                    </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">{{__('Home')}}</a></li>
                        <li class="breadcrumb-item active">{{__('InActive Customer Registration Report')}}</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection

@section('content')
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">{{__('InActive Customer Registration Report (ICRR)')}}</h3>
            <a href="{{route('admin.inactive_patient_reporting')}}?report=incrr">
                <button class="btn-primary btn-sm" style="float: right;">Download PDF</button>
            </a>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12 table-responsive">
                    <table id="table" class="table table-striped table-hover table-bordered display" width="100%">
                        <thead>
                        <tr>
                            <th>ID#</th>
                            <th>{{__('Name')}}</th>
                            <th>{{__('Contact Person')}}</th>
                            <th>{{__('Phone #')}}</th>
                            <th>{{__('Mobile #')}}</th>
                            <th>{{__('Status')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($customer_registrations as $customer_registration)
                            <tr>
                                <td>{{$loop->index + 1}}</td>
                                <td>{{$customer_registration->name_eng}}</td>
                                <td>{{$customer_registration->contact_name}}</td>
                                <td>{{$customer_registration->ph1}}</td>
                                <td>{{$customer_registration->mob_no1}}</td>
                                <td>{{customer_registration_status($customer_registration->status)}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $('table.display').DataTable();
    </script>
@endsection
