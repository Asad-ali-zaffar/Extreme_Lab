<div class="row">
    <div class="col-md-6">ExtremeLabs</div>
    <div class="col-md-6">{{date('d-m-Y h:i:s A')}}</div>
</div>
<table>
    <thead>
    <tr>
        <th>ID#</th>
        <th>Name</th>
        <th>Contact Person</th>
        <th>Phone #</th>
        <th>Mobile #</th>
        <th>Status</th>
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
    </tr>
    <?php $i++; } ?>
    </tbody>
</table>
