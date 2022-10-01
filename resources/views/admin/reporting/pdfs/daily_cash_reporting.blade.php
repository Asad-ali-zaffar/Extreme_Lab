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
