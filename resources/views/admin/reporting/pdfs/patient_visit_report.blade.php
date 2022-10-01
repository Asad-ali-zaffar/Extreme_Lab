<div class="row">
    <div class="col-md-6">ExtremeLabs</div>
    <div class="col-md-6">{{date('d-m-Y h:i:s A')}}</div>
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
<table id="customers">
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
