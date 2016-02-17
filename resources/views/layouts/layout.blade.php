<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap-theme.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/color.css')}}">
</head>
<body class='space'>
	<header>
		@include('layouts.partial.menu')
	</header>
	<section>
		@include('alerts.error')
		@include('alerts.request')
		@yield('content')
		
	</section>
	<script src="{{asset('plugins/jquery/js/jquery.js')}}"></script>
	<script src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
</body>
</html>