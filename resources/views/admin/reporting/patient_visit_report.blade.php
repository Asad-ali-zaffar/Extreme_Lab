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
                        <li class="breadcrumb-item active">{{__('Patient Visit Report')}}</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection

@section('content')
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">{{__('Patient Visit Report')}}</h3>
            <a href="{{route('admin.reporting.patient_visit_report')}}?download=1">
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
                                    <form action="{{route('admin.reporting.patient_visit_report')}}"
                                          class="filter_form">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="filter_date">{{__('Date')}}</label>
                                                    <input type="text" class="form-control datepickerrange"
                                                           name="filter_date"
                                                           id="filter_date" placeholder="{{__('Date')}}">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
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
                                            <div class="col-md-6">
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
                                                    <label for="filter_party_center">{{__('Party Center.')}}</label>
                                                    <select id="filter_party_center" class="form-control select2" name="filter_party_center">
                                                        <option value="">Select Party Center</option>
                                                        @foreach($customer_centers as $key => $party)
                                                            <option value="{{$key}}"> {{$party}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="filter_test">{{__('Test.')}}</label>
                                                    <input type="text" class="form-control" name="filter_test"
                                                           id="filter_test" placeholder="{{__('Test.')}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="filter_payment_type">{{__('Payment Type')}}</label>
                                                    <select name="filter_payment_type" id="filter_payment_type" class="form-control select2">
                                                        <option disabled selected>{{__('Select Payment Type')}}</option>
                                                        <option value="WALK IN">{{__('Walk in')}}</option>
                                                        <option value="CASH">{{__('Cash')}}</option>
                                                        <option value="CREDIT">{{__('Credit')}}</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="actions">Actions</label><br>
                                                    <button class="btn btn-danger" type="submit">Show Data By Filters
                                                    </button>
                                                    <a href="javascript:void(0);" class="btn btn-primary download_pdf"
                                                       data-url="{{route('admin.reporting.patient_visit_report')}}?download=1">Download
                                                        Data By Filters (as PDF)
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
                            <th>{{__('Invoice #')}}</th>
                            <th>{{__('Date')}}</th>
                            <th>{{__('Lab #')}}</th>
                            <th>{{__('Case #')}}</th>
                            <th>{{__('Bill Type')}}</th>
                            <th>{{__('Patient Name')}}</th>
                            <th>{{__('Lab Name')}}</th>
                            <th>{{__('Referred By')}}</th>
                            <th>{{__('Total')}}</th>
                            <th>{{__('Disc')}}</th>
                            <th>{{__('Net')}}</th>
                            <th>{{__('Paid')}}</th>
                            <th>{{__('Balance')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                            $grand_total = $total_discount = $total_net = $total_paid = $total_balance = $total_patient = 0;
                        @endphp
                        @foreach($patient_visits as $patient_visit)
                            @php
                                //dd($patient_visit);
                                $total = $patient_visit->total;
                                $discount = $patient_visit->discount;
                                $net = $patient_visit->total - $patient_visit->discount;
                                $paid = $patient_visit->paid;
                                $balance = $net - $patient_visit->paid;

                                $grand_total += $total;
                                $total_discount += $discount;
                                $total_net += $net;
                                $total_paid += $paid;
                                $total_balance += $balance;
                                $total_patient++;
                                $invoice_date = date('d/m/Y', strtotime($patient_visit->created_at))
                            @endphp
                            <tr>
                                <td>{{$patient_visit->inv_no}}</td>
                                <td>{{$invoice_date}}</td>
                                <td>{{$patient_visit->lab_no}}</td>
                                <td>{{$patient_visit->case_no}}</td>
                                <td>{{$patient_visit->payment_type}}</td>
                                <td>{{$patient_visit->patient['fname']}}</td>
                                <td>{{$patient_visit->lab->name_eng}}</td>
                                <td>{{$patient_visit->party->name_eng}}</td>
                                <td>{{$total}}</td>
                                <td>{{$discount}}</td>
                                <td>{{$net}}</td>
                                <td>{{$paid}}</td>
                                <td>{{$balance}}</td>
                                <td></td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th colspan="6" class="text-right">Total Patients: {{$total_patient}}</th>
                            <th colspan="2" class="text-right">Grand Total</th>
                            <th>{{$grand_total}}</th>
                            <th> {{$total_discount}}</th>
                            <th> {{$total_net}}</th>
                            <th> {{$total_paid}}</th>
                            <th> {{$total_balance}}</th>
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
    <script>
        var get_lab_centers = "{{route('admin.get_lab_centers')}}";
        var get_party_centers = "{{route('admin.get_party_centers')}}";
    </script>
    <script>
        $(document).on('change','#filter_lab', function (e) {
            var lab_id = $(this).val();
            $.ajax({
                dataType: 'JSON',
                type: "POST",
                url: get_lab_centers,
                data: { "lab_id":lab_id },
                beforeSend:function(){
                  $('.preloader').show();
                  $('.loader').show();
                },
                success:function(response)
                {
                    if(response.html == ''){
                        swal.fire({
                        buttons: false,
                        title:'Error',
                        icon:'error',
                        text: response.message,
                        timer: 3000,
                        closeOnConfirm: false
                      });
                    }
                    else{
                       $("#filter_lab_center").html(response.html);
                    }
                },
                complete:function()
                {
                  $('.preloader').hide();
                  $('.loader').hide();
                }
            });
         });
         $(document).on('change','#filter_party', function (e) {
            var party_id = $(this).val();
            $.ajax({
                dataType: 'JSON',
                type: "POST",
                url: get_party_centers,
                data: { "party_id":party_id },
                beforeSend:function(){
                  $('.preloader').show();
                  $('.loader').show();
                },
                success:function(response)
                {
                    if(response.html == ''){
                        swal.fire({
                        buttons: false,
                        title:'Error',
                        icon:'error',
                        text: response.message,
                        timer: 3000,
                        closeOnConfirm: false
                      });
                    }
                    else{
                       $("#filter_party_center").html(response.html);
                    }
                },
                complete:function()
                {
                  $('.preloader').hide();
                  $('.loader').hide();
                }
            });
         });</script>


@endsection

