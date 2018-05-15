<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
	<head>
		<!-- head -->
		@include ('layouts.head')
		<!-- /head -->
	</head>
	<body class="@yield('judulbody')">
		@yield('login')
		@yield('menu')
		@include('layouts.j-query')
	</body>
</html>