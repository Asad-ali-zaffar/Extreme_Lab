<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>{{$info['name']}} | @yield('title')</title>
<link rel="apple-touch-icon" sizes="57x57" href="{{url('public/img/apple-icon-57x57.png')}}">
<link rel="apple-touch-icon" sizes="60x60" href="{{url('public/img/apple-icon-60x60.png')}}">
<link rel="apple-touch-icon" sizes="72x72" href="{{url('public/img/apple-icon-72x72.png')}}">
<link rel="apple-touch-icon" sizes="76x76" href="{{url('public/img/apple-icon-76x76.png')}}">
<link rel="apple-touch-icon" sizes="114x114" href="{{url('public/img/apple-icon-114x114.png')}}">
<link rel="apple-touch-icon" sizes="120x120" href="{{url('public/img/apple-icon-120x120.png')}}">
<link rel="apple-touch-icon" sizes="144x144" href="{{url('public/img/apple-icon-144x144.png')}}">
<link rel="apple-touch-icon" sizes="152x152" href="{{url('public/img/apple-icon-152x152.png')}}">
<link rel="apple-touch-icon" sizes="180x180" href="{{url('public/img/apple-icon-180x180.png')}}">
<link rel="icon" type="image/png" sizes="192x192"  href="{{url('public/img/android-icon-192x192.png')}}">
<link rel="icon" type="image/png" sizes="32x32" href="{{url('public/img/favicon-32x32.png')}}">
<link rel="icon" type="image/png" sizes="96x96" href="{{url('public/img/favicon-96x96.png')}}">
<link rel="icon" type="image/png" sizes="16x16" href="{{url('public/img/favicon-16x16.png')}}">
<link rel="manifest" href="{{url('public/img/manifest.json')}}">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="{{url('public/img/ms-icon-144x144.png')}}">
<meta name="theme-color" content="#ffffff">
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Font Awesome -->
<link rel="stylesheet" href="{{url('public/plugins/fontawesome-free/css/all.min.css')}}">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- Tempusdominus Bbootstrap 4 -->
<link rel="stylesheet" href="{{url('public/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
<!-- iCheck -->
<link rel="stylesheet" href="{{url('public/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
<!-- JQVMap -->
<link rel="stylesheet" href="{{url('public/plugins/jqvmap/jqvmap.min.css')}}">
<!-- Theme style -->
<link rel="stylesheet" href="{{url('public/dist/css/adminlte.min.css')}}">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="{{url('public/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
<!-- Daterange picker -->
<link rel="stylesheet" href="{{url('public/plugins/daterangepicker/daterangepicker.css')}}">
<link rel="stylesheet" href="{{url('public/plugins/datetimepickerNew/css/datetimepicker.css')}}">
<!-- summernote -->
<link rel="stylesheet" href="{{url('public/plugins/summernote/summernote-bs4.css')}}">
<!-- Google Font: Source Sans Pro -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
<!-- Datatables -->
<link rel="stylesheet" href="{{url('public/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{url('public/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{url('public/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('public/plugins/datatables-fixedheader/css/fixedHeader.bootstrap4.min.css')}}">
<!-- toastr css -->
<link rel="stylesheet" href="{{ URL::asset('public/css/toastr.min.css')}}">
<!-- select2 css -->
<link rel="stylesheet" href="{{ url('public/css/select2.css')}}" type="text/css">
<!-- jquery ui -->
<link rel="stylesheet" href="{{url('public/plugins/jquery-ui/jquery-ui.min.css')}}">
<!-- sweetalert -->
<link rel="stylesheet" href="{{url('public/plugins/sweetalert2/sweetalert2.min.css')}}">
<link rel="stylesheet" href="{{url('public/css/custom_css.css')}}">
<!-- RTL -->
@if(session('rtl'))
    <link rel="stylesheet" href="{{url('public/assets/css/rtl.css')}}">
    <link rel="stylesheet" href="{{url('public/assets/css/bootstrap-rtl.min.css')}}">
@endif

@stack('css')

@yield('css')
