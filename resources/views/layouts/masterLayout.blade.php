<!DOCTYPE html>
<html>
	<head>
		<link href="{{ url('css/bootstrap.css')}}" rel="stylesheet" type="text/css" />
	</head>
	<body>
		@include('layouts.navbar')
		<div class="container main">
			@yield('content')
		</div>

		<script src="{{ url('js/bootstrap.js')}}"></script>
	</body>
</html>
