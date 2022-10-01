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
                        <li class="breadcrumb-item active">{{__('Daily Activity Credit Report')}}</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection

@section('content')
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">{{__('Daily Activity Credit Report')}}</h3>
            <a href="{{route('admin.reporting.daily_credit_reporting')}}?download=1">
                <button class="btn-primary btn-sm" style="float: right;">Download PDF</button>
            </a>
        </div>
        <div class="card-body">
            <div id="accordion">
                <!-- we are adding the .class so bootstrap.js collapse plugin detects it -->
                <div class="card card-info">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                       class="btn btn-primary collapsed" aria-expanded="false">
                        <i class="fas fa-filter"></i> {{__('Filters')}}
                    </a>
                    <div id="collapseOne" class="panel-collapse in collapse">
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                    <form action="{{route('admin.reporting.daily_credit_reporting')}}"
                                          class="filter_form">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="filter_date">{{__('Date')}}</label>
                                                    <input type="text" class="form-control datepickerrange" name="filter_date"
                                                           id="filter_date" placeholder="{{__('Date')}}">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
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
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="filter_party_center">{{__('Party Center.')}}</label>
                                                    <select id="filter_party_center" class="form-control select2" name="filter_party_center">
                                                        <option value="">Select Party Center</option>
                                                        @foreach($customer_centers as $key => $party)
                                                            <option value="{{$key}}"> {{$party}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="filter_lab">{{__('Lab.')}}</label>
                                                    <select id="filter_lab" class="form-control select2" name="filter_lab">
                                                        <option value="">Select Lab</option>
                                                        @foreach($labs as $key => $party)
                                                            <option value="{{$key}}"> {{$party}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="filter_lab_center">{{__('Lab Center.')}}</label>
                                                    <select id="filter_lab_center" class="form-control select2" name="filter_lab_center">
                                                        <option value="">Select Lab Center</option>
                                                        @foreach($lab_centers as $key => $party)
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
                                                    <a href="javascript:void(0);" class="btn btn-primary download_pdf" data-url="{{route('admin.reporting.daily_credit_reporting')}}?download=1">Download Data By Filters (as PDF)
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
            <div class="row">
                <div class="col-lg-12 table-responsive">
                    <table id="patient_groups_tables" class="table table-striped table-bordered" width="100%">
                        <thead>
                        <tr>
                            <th width="20px">Mr #</th>
                            <th width="150px">{{__('Invoice Date')}}</th>
                            <th width="150px">{{__('Patient Name')}}</th>
                            <th>{{__('Lab Name')}}</th>
                            <th>{{__('Party Name')}}</th>
                            <th>{{__('Patient Type')}}</th>
                            <th>{{__('Barcode')}}</th>
                            <th>{{__('Tol Amount')}}</th>
                            <th>{{__('Disc Amount')}}</th>
                            <th>{{__('Paid Amount')}}</th>
                            <th>{{__('Cancel')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                            $grand_total = $total_discount = $total_paid = 0;
                            $total_patient = 0;
                        @endphp
                        @foreach($cash_activity as $cash)
                            @php
                                //dd($cash);
                                $grand_total += $cash->total;
                                $total_discount += $cash->discount;
                                $total_paid += $cash->paid;
                                $total_patient++;
                                $invoice_date = date('d/m/Y', strtotime($cash->created_at))
                            @endphp
                            <tr>
                                <td>{{$cash->id}}</td>
                                <td>{{$invoice_date}}</td>
                                <td>{{$cash->patient['fname']}}</td>
                                <td>{{$cash->lab->name_eng}}</td>
                                <td>{{$cash->party->name_eng}}</td>
                                <td>{{$cash->patient['patient_type']}}</td>
                                <td>{{$cash->barcode}}</td>
                                <td>{{$cash->total}}</td>
                                <td>{{$cash->discount}}</td>
                                <td>{{$cash->paid}}</td>
                                <td></td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th colspan="3" class="text-right">Total Patients: {{$total_patient}}</th>
                            <th colspan="4" class="text-right">Grand Total</th>
                            <th>{{$grand_total}}</th>
                            <th> {{$total_discount}}</th>
                            <th> {{$total_paid}}</th>
                            <th></th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
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
