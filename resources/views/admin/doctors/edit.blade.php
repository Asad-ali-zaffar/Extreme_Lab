@extends('layouts.app')

@section('title')
{{__('Edit Doctor')}}
@endsection

@section('css')
@endsection


@section('breadcrumb')
<div class="content-header">
    <div class="container-fluid" id="myHeaderLinks">
      <div class="row mb-2">
        <div class="col-sm-7">
          <h1 class="m-0 text-dark">
            <i class="nav-icon fas fa-user-injured"></i>
            {{__('Doctors')}}
          </h1>
        </div><!-- /.col -->
        <div class="col-sm-5">
          <ol class="breadcrumb customOl">
            <li class="breadcrumb-item"><a href="#general_informaion">{{__('General Information')}}</a></li>
            <li class="breadcrumb-item"><a href="#qualification">{{__('Qualification')}}</a></li>
            <li class="breadcrumb-item"><a href="#expertise">{{__('Area of Experties')}}</a></li>
            <li class="breadcrumb-item"><a href="#charges">{{__('Charges')}}</a></li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
@endsection

@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">{{__('Create doctor')}}</h3>
    </div>
    <form method="POST" action="{{route('admin.doctors.update',$doctor['id'])}}"  enctype="multipart/form-data"  >
        <!-- /.card-header -->
        <div class="card-body">
            @csrf
            @method('put')
            @include('admin.doctors._form')
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">
              <i class="fa fa-check"></i> {{__('Save')}}
            </button>
        </div>
    </form>
</div>


<!-- Modal -->
<div class="modal fade mt-25" id="expertiseModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form method="POST" action="{{route('admin.doctorsexpertises.store')}}" >
	<div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Area of Expertise</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		  @include('admin.doctors._form_expertise')
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </form>
  </div>
</div>

<!-- Modal -->
<div class="modal fade mt-25" id="chargesModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form method="POST" action="{{route('admin.doctorscharges.store')}}" >
	<div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Charges</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		  @include('admin.doctors._form_charges')
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </form>
  </div>
</div>

<!-- Form update modal -->
<div class="modal fade mt-25" id="editModalCharges" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<form class="" id="" action="{{route('admin.doctorscharges.update',$doctor['id'])}}" method="post">
				@csrf
				@method('put')
				<div class="modal-header">
					<h5 class="modal-title editTitle"></h5>
					<button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
				</div>
				<div class="modal-body htmlModal">
					
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default light" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary processBtnUpdate">Update</button>
				</div>
			</form>	
		</div>
	</div>
</div>

<!-- Form update modal -->
<div class="modal fade mt-25" id="editModalExpertise" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<form class="" id="" action="{{route('admin.doctorsexpertises.update',$doctor['id'])}}" method="post">
				@csrf
				@method('put')
				<div class="modal-header">
					<h5 class="modal-title editTitle"></h5>
					<button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
				</div>
				<div class="modal-body htmlModal">
					
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default light" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary processBtnUpdate">Update</button>
				</div>
			</form>	
		</div>
	</div>
</div>


<!-- Modal -->
<div class="modal fade mt-25" id="qualificationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form method="POST" action="{{route('admin.doctorsqualifications.store')}}" >
	<div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Qualifications</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		  @include('admin.doctors._form_qualification')
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </form>
  </div>
</div>


<!-- Form update modal -->
<div class="modal fade mt-25" id="editModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<form class="" id="" action="{{route('admin.doctorsqualifications.update',$doctor['id'])}}" method="post">
				@csrf
				@method('put')
				<div class="modal-header">
					<h5 class="modal-title editTitle"></h5>
					<button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
				</div>
				<div class="modal-body htmlModal">
					
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default light" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary processBtnUpdate">Update</button>
				</div>
			</form>	
		</div>
	</div>
</div>

@endsection
@section('scripts')
  <script>
	var doc_id = "{{$doctor['id']}}";
  </script>
  <script src="{{url('public/js/admin/doctors.js')}}"></script>
@endsection