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
                        <li class="breadcrumb-item active">{{__('Customer Registrations')}}</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection

@section('content')
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">{{__('Customer Registrations Report (CRR)')}}</h3>
            <a href="{{route('admin.reporting.customer_registrations')}}?download=1">
                <button class="btn-primary btn-sm" style="float: right;">Download PDF</button>
            </a>
        </div>
        <div class="card-body">
            <!-- filter -->
            <div id="accordion">
                <div class="card card-info">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                       class="btn btn-primary collapsed" aria-expanded="false">
                        <i class="fas fa-filter"></i> {{__('Filters')}}
                    </a>
                    <div id="collapseOne" class="panel-collapse in collapse">
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                    <form action="{{route('admin.reporting.customer_registrations')}}"
                                          class="filter_form">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="date">{{__('Date')}}</label>
                                                    <input type="text" class="form-control datepickerrange" name="date"
                                                           id="date" placeholder="{{__('Date')}}">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="status">{{__('Status')}}</label>
                                                    <select name="status" id="status" class="form-control select2">
                                                        <option value="" selected>{{__('All')}}</option>
                                                        <option value="0">{{__('Active')}}</option>
                                                        <option value="1">{{__('In-Active')}}</option>
                                                        <option value="2">{{__('Suspended')}}</option>
                                                        <option value="3">{{__('CLosed')}}</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="filter_party_type">{{__('Party Type')}}</label>
                                                    <select name="filter_party_type" id="filter_party_type" class="form-control select2">
                                                        <option disabled selected>{{__('Select Party Type')}}</option>
                                                        <option value="26">{{__('Cash')}}</option>
                                                        <option value="27">{{__('Credit')}}</option>
                                                        <option value="28">{{__('Vendor')}}</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="filter_party">{{__('Party.')}}</label>
                                                    <select id="filter_party" class="form-control select2" name="filter_party">
                                                        <option value="">Select Party</option>
                                                        @foreach($parties as $key => $party)
                                                            <option value="{{$key}}"> {{$party}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="actions">Actions</label><br>
                                                    <button class="btn btn-danger" type="submit">Show Data By Filters
                                                    </button>
                                                    <a href="javascript:void(0);" class="btn btn-primary download_pdf" data-url="{{route('admin.reporting.customer_registrations')}}?download=1">Download Data By Filters (as PDF)
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- \filter -->
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

        $(document).on('click', '.download_pdf', function () {
            var data = $('.filter_form').serialize();
            console.log($(this).data('url') + '&' + data);
            window.location.href = $(this).data('url') + '&' + data;
        });
    </script>
@endsection
