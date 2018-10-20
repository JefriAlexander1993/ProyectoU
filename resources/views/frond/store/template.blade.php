<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet"  href="{{asset('plugins/bootstrap/css/bootstrap.css')}}">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<title>@yield('title','programing C&J') </title>
</head>
<body>
	@include('frond.store.partials.navbar')

	@yield('content')

	@include('frond.store.partials.footer')
	<script type="text/javascript" src="{{asset('plugins/jquery/js/jquery-3.3.1.js')}}"></script>
	<script type="text/javascript" src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/main.js')}}"></script>
	<script src="{{ asset('js/pinterest_grid.js') }}"></script>
</body>
</html>