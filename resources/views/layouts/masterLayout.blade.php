<!DOCTYPE html>
<html>
	<head>
		<link href="{{ url('css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ url('css/navbar.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('css/fontawesome-all.css') }}" rel="stylesheet" />

		<script src="{{ url('js/jquery-3.3.1.js') }}"></script>
		<script src="{{ url('js/bootstrap.js') }}"></script>
	</head>
	<body>
		@include('layouts.navbar')
		<div class="container main">
			@yield('content')
		</div>


	</body>
</html>
