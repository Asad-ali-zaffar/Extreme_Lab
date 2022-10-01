@can('edit_doctor')
    <a href="javascript:void(0)" class="btn btn-primary btn-sm editRecord" data-id="{{$doctor->id}}" data-tbl="doctor_qualifications">
        <i class="fa fa-edit"></i>
    </a>
@endcan

@can('delete_doctor')
    <form method="POST" action="{{route('admin.doctorsqualifications.destroy',$doctor->id)}}" class="d-inline">
        <input type="hidden" name="_method" value="delete">
        <input type="hidden" name="doc_id" value="{{$doctor->id}}">
		<button type="submit" class="btn btn-danger btn-sm delete_doctor_quali">
            <i class="fa fa-trash"></i>
        </button>
    </form>
@endcan