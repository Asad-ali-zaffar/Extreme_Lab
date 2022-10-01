<div class="row">
    <div class="col-md-6">ExtremeLabs</div>
    <div class="col-md-6"></div>
    <table style="width: 100%">
        <tr>
            <th>ExtremeLabs</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <th>{{date('D')}}  {{date('d-m-Y h:i:s A')}}</th>
        </tr>
        <tr>
            <th>Test History Report / THR</th>
            <td></td>
            @if ($date)
                <td>{{date('d-M-Y', strtotime($date[0]))}} To {{date('d-M-Y', strtotime($date[1]))}}</td>
            @else
                <td></td>
            @endif
            <td></td>
            <td></td>
            <th></th>
        </tr>
    </table>
</div>
<style>
    #customers {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    #customers td, #customers th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    #customers tr:nth-child(even){background-color: #f2f2f2;}

    #customers tr:hover {background-color: #ddd;}

    #customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #04AA6D;
        color: white;
    }
</style>
<table id="customers" class="table table-striped table-hover table-bordered display" width="100%">
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
