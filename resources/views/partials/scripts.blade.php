@stack('js')

<!-- jQuery -->
<script src="{{url('public/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{url('public/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{url('public/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{url('public/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{url('public/plugins/sparklines/sparkline.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{url('public/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{url('public/plugins/moment/moment.min.js')}}"></script>
<script src="{{url('public/plugins/daterangepicker/daterangepicker.js')}}"></script>
<script src="{{url('public/plugins/datetimepickerNew/js/datetimepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{url('public/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{url('public/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{url('public/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{url('public/dist/js/adminlte.js')}}"></script>
<!-- DataTables -->
<script src="{{url('public/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{url('public/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{url('public/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{url('public/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{url('public/plugins/datatables-fixedheader/js/dataTables.fixedHeader.min.js')}}" type="text/javascript"></script>
<script src="{{url('public/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{url('public/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{url('public/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{url('public/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{url('public/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{url('public/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{url('public/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{url('public/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<!-- Toastr-->
<script src="{{ url('public/js/toastr.min.js')}}"></script>
<!-- Validate -->
<script src="{{url('public/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{url('public/plugins/print/jQuery.print.min.js')}}"></script>
<script src="{{url('public/js/jquery.classyqr.min.js')}}"></script>
<script src="{{url('public/js/select2.js')}}"></script>
<script src="{{url('public/plugins/sweetalert2/sweetalert2.min.js')}}"></script>
<script src="{{url('public/plugins/sweetalert2/sweetalert.init.js')}}"></script>
<!-- Url for ajax -->
  <script>
    $('.datetimepicker').dateTimePicker({
	  positionShift: { top: 20, left: 0},
	  title:"Select Date and Time",
	  buttonTitle:"Select"
	});

	var ajaxUrl = 'labs/';
	@if(strpos(Config::get('app.url'), 'global_labs') !== false)
		var ajaxUrl = 'global_labs/';
	@endif

	//var db_url = 'https://labs.tekrons.com.pk/'+ajaxUrl+'admin/';
	var db_url = 'http://localhost/global_labs/admin/';
  </script>

<!-- Scripts Translation -->
<script>
  var translations=`{!! session("trans") !!}`;
  function trans(key)
  {
    var trans=JSON.parse(translations);
    return (trans[key]!=null?trans[key]:key);
  }
</script>
<!-- Main dashboard -->
@if(auth()->guard('admin')->check())
  <script src="{{ url('public/js/admin/main.js')}}"></script>
@else
  <script src="{{ url('public/js/patient/main.js')}}"></script>
@endif


<!-- Flash messages -->
<script>
  @if(session()->has('success'))
    toastr_success(trans("{{Session::get('success')}}"));
  @endif
  @if(Session()->has('failed')||session()->has('errors'))
    toastr_error(trans("{{Session::get('failed')}}"));
  @endif
</script>
