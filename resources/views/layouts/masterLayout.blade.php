<!DOCTYPE html>
<html>
	<head>
		<!-- Libs -->
		<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('css/fontawesome-all.css') }}" rel="stylesheet" />

		<script src="{{ asset('js/jquery-3.3.1.js') }}" type="text/javascript"></script>
		<script src="{{ asset('js/bootstrap.js') }}" type="text/javascript"></script>
		<!-- Custom css -->
		<link href="{{ asset('css/navbar.css') }}" rel="stylesheet" type="text/css" />
	</head>
	<body>
		@include('layouts.navbar')
		<div class="container main">
			@yield('content')
		</div>

	</body>
</html>
