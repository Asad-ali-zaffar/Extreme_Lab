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
                        <li class="breadcrumb-item active">{{__('Patient Registration Report')}}</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection

@section('content')
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">{{__('Patient Registration Report')}}</h3>
            <a href="{{route('admin.reporting.patient_registration_report')}}?download=1">
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
                                    <form action="{{route('admin.reporting.patient_registration_report')}}"
                                          class="filter_form">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label  for="date">{{__('Date')}}</label>
                                                    <input type="text" class="form-control datepickerrange" name="date"
                                                           id="date" placeholder="{{__('Date')}}">
                                                </div>
                                            </div>


                                            <!-- <div class="col-md-3">
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
                                            </div> -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="actions">Actions</label><br>
                                                    <button class="btn btn-danger" type="submit">Show Data By Filters
                                                    </button>
                                                    <a href="javascript:void(0);" class="btn btn-primary download_pdf" data-url="{{route('admin.reporting.patient_registration_report')}}?download=1">Download Data By Filters (as PDF)
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
                            <th>{{__('Gender')}}</th>
                            <th>{{__('DOB')}}</th>
                            <th>{{__('Phone #')}}</th>
                            <th>{{__('Email')}}</th>
                            <th>{{__('Patient Type')}}</th>
                            <th>{{__('Reg. Date')}}</th>
                            <th>{{__('Age')}}</th>
                            <th>{{__('CNIC')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($patient_registrations as $patient_registration)
                            <tr>
                                <td>{{$loop->index + 1}}</td>
                                <td>{{$patient_registration->salutation . ' ' . $patient_registration->fname}}</td>
                                <td>{{$patient_registration->gender}}</td>
                                <td>{{$patient_registration->dob}}</td>
                                <td>{{$patient_registration->phone}}</td>
                                <td>{{$patient_registration->email}}</td>
                                <td>{{$patient_registration->patient_type}}</td>
                                <td>{{$patient_registration->reg_date}}</td>
                                <td>{{$patient_registration->age}}</td>
                                <td>{{$patient_registration->cnic}}</td>
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
