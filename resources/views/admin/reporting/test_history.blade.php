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
                        <li class="breadcrumb-item active">{{__('Test History Report')}}</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection

@section('content')
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">{{__('Test History Report')}}</h3>
            <a href="{{route('admin.reporting.test_history_report')}}?download=1">
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
                                    <form action="{{route('admin.reporting.test_history_report')}}"
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
                                                    <label for="filter_party">{{__('Party.')}}</label>
                                                    <select id="filter_party" class="form-control select2" name="filter_party">
                                                        <option value="">Select Party</option>
                                                        @foreach($parties as $key => $party)
                                                            <option value="{{$key}}"> {{$party}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            {{--<div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="filter_test">{{__('Test.')}}</label>
                                                    <select id="filter_test" class="form-control" name="filter_test">
                                                        <option value="">Select Test</option>
                                                        @foreach($tests as $key => $test)
                                                            <option value="{{$key}}"> {{$test}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>--}}
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="filter_airline">{{__('Airline.')}}</label>
                                                    <select id="filter_airline" class="form-control select2" name="filter_airline">
                                                        <option value="">Select Airline</option>
                                                        @foreach($airlines as $key => $airline)
                                                            <option value="{{$key}}"> {{$airline}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="actions">Actions</label><br>
                                                    <button class="btn btn-danger" type="submit">Show Data By Filters
                                                    </button>
                                                    <a href="javascript:void(0);" class="btn btn-primary download_pdf" data-url="{{route('admin.reporting.test_history_report')}}?download=1">Download Data By Filters (as PDF)
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
                            <th>Lab#</th>
                            <th>{{__('Party Name')}}</th>
                            <th>{{__('Passport #')}}</th>
                            <th>{{__('Airline')}}</th>
                            <th>{{__('Flight #')}}</th>
                            <th>{{__('Flight Date')}}</th>
                            <th>{{__('Pnr #')}}</th>
                            <th>{{__('CNIC #')}}</th>
                            <th>{{__('Country')}}</th>
                            <th>{{__('Test')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                            @php
                                $total_customer=0;;
                            @endphp
                            @foreach($test_history as $party)
                                <tr>
                                    <td colspan="10"><h4>{{$party->name_eng}}</h4></td>
                                </tr>
                                @foreach($party->tests as $test)
                                    @php
                                        $total_customer++;;
                                    @endphp
                                    <tr>
                                        <td>{{$test->lab_no}}</td>
                                        <td>{{App\Models\Patient::getUserNameById($test->patient_id)}}</td>
                                        <td>{{$test->passport_no}}</td>
                                        <td>{{App\Models\Airlines::where('id',$test->airline_id)->value('name_eng')}}</td>
                                        <td>{{$test->flight_no}}</td>
                                        <td>{{$test->flight_date}}</td>
                                        <td>{{$test->pnr_no}}</td>
                                        <td>{{App\Models\Patient::where('id',$test->patient_id)->value('cnic')}}</td>
                                        <td>{{App\Models\Countries::where('id',$test->dest_count_id)->value('eng_country_name')}}</td>
                                        <td>{{$test->lab_no}}</td>
                                    </tr>
                                @endforeach
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th >Total Patient</th>
                                <th colspan="9">{{$total_customer}}</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        //$('table.display').DataTable();

        $(document).on('click', '.download_pdf', function () {
            var data = $('.filter_form').serialize();
            console.log($(this).data('url') + '&' + data);
            window.location.href = $(this).data('url') + '&' + data;
        });
    </script>
@endsection
