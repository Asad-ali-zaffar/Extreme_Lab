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
    <thead
        style="color: #fff !important;
    background-color: #0547ff!important;
    border-color: #0547ff;
    box-shadow: 0 10px 20px -10px rgb(27 85 226 / 59%);">
    <tr>
        <th>ID#</th>
        <th>Name</th>
        <th>Contact Person</th>
        <th>Phone #</th>
        <th>Mobile #</th>
        <th>Status</th>
        <th>Credit Limit</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $i = 0;
    foreach($customer_registrations as $customer_registration) { ?>
    <tr>
        <td>{{$i + 1}}</td>
        <td>{{$customer_registration->name_eng}}</td>
        <td>{{$customer_registration->contact_name}}</td>
        <td>{{$customer_registration->ph1}}</td>
        <td>{{$customer_registration->mob_no1}}</td>
        <td>{{customer_registration_status($customer_registration->status)}}</td>
        <td>{{$customer_registration->credit_limit}}</td>
    </tr>
    <?php $i++; } ?>
    </tbody>
</table>
