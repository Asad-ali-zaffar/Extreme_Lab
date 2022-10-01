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
