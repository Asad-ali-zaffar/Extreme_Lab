@if($group['is_status_request'] == 1)
    <div class="text-center btn btn-warning"> Pending </div>
@elseif($group['is_status_request'] == 2)
    <div class="text-center  btn btn-danger"> Declined </div>
@else
    <div class="text-center btn btn-success"> Approved</div>
@endif