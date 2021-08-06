<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="{{asset('assets/bootstrap5.0.2/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/styles/stylesheet.css')}}">
</head>
<body>
    @yield('content')
    <script src="{{asset('assets/script/jquery-3.6.0.min.js')}}"></script>
	<script src="{{asset('assets/bootstrap5.0.2/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/script/scripts.js')}}"></script>
</body>
</html>