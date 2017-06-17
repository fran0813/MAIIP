<!DOCTYPE html>

<html lang="{{ config('app.locale') }}">

	<head>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">	

		<title> @yield('title') </title>

		{{-- Botstrap --}}
		<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/main.css') }}">

	</head>

	<body>
	
		<input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}">

		<!-- Encabezado de la pagina -->
		<header>

			@include('base.partials.navbar')
				
		</header>

		{{-- Contenido de la pagina --}}
		<section>

			@yield('content')

		</section>

		<!-- Pie de pagina -->
		<br>
		
		<footer>

			@include('base.partials.footer')

		</footer>

		{{-- Jquery - Javascript --}}
		<script src="{{ asset('jquery/jquery.min.js') }}"></script>
		<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>

		@yield('javascript')
		
	</body>

</html>