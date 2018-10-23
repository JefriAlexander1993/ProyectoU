<!DOCTYPE html>
<html>
<head>

  <link href="{{asset('assets/css/material-dashboard.css')}}" rel="stylesheet" />
  <link rel="stylesheet" href="{{asset('assets/css/fontawesome/css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/fontawesome/css/fontawesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/document.css')}}">


	<title>@yield('title','programing C&J') </title>
</head>
<body>
@include('frond.store.partials.navbar')
  @yield('content')

  <script src="{{asset('assets/js/core/jquery.min.js')}}"></script>
  <script src="{{asset('js/jquery.dataTables.min.js') }}"></script>
  <script src="{{asset('js/dataTables.bootstrap4.min.js') }}"></script>


  <script src="{{asset('assets/js/core/popper.min.js')}}"></script>
  <script src="{{asset('assets/js/core/bootstrap-material-design.min.js')}}"></script>

<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('assets/js/material-dashboard.min.js')}}"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="{{asset('assets/demo/demo.js')}}"></script>
  <script src="{{asset('js/document.js')}}"></script>
    <script src="{{asset('js/datatable.js') }}"></script>
  <script src="{{asset('js/sweetalert.min.js')}}"></script>

</body>
</html>