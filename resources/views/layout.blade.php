<!DOCTYPE html>

<html lang="{{ config('app.locale') }}">

	<head>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">	

		<title>@yield('titulo')</title>

		<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{ asset('css/principal.css')}}">

	</head>

	<body>

		@section('header')

		<!-- Encabezado -->
		<header>
		
			<!-- Inicio -->
			<div class="col-sm-12 col-md-12 col-lg-12">

			<br>

				<!-- Logo MAIIP  -->
				<div class="col-sm-4 col-md-4 col-lg-4">
					<img class="img-responsive" src="{{ asset('img/logo.png') }}" alt="No found">
				</div>

				<!-- Nombre del proyecto -->
				<div class="col-sm-4 col-md-4 col-lg-4 text-center">
					<br>
					<br>
					<p><b>MODELO ALTERNATIVO DE INCLUSIÓN E INNOVACIÓN PRODUCTIVA</b></p>
				</div>
			
				<!-- Logo universidad -->
				<div class="col-sm-4 col-md-4 col-lg-4">
					<img class="img-responsive" src="{{ asset('img/logou.png') }}" alt="No found">		
				</div>
				
			</div>

			<!-- Navbar -->
			<div class="col-sm-12 col-md-12 col-lg-12">

			<br>

				<nav class="navbar navbar-default">

				  <div class="container-fluid">
				    <div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#idnavbar" aria-expanded="false">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
						    <span class="icon-bar"></span>
						    <span class="icon-bar"></span>
					    </button>
				    </div>

				    <div class="collapse navbar-collapse" id="idnavbar">
				    	<ul class="nav navbar-nav">
				    		<li class="active"><a href="#">Inicio <span class="sr-only">(current)</span></a></li>

				    		<li><a href="informacion">Ver</a></li>
				    	</ul>
				    </div>
				  </div>

				</nav>

			</div>
				
		</header>

		@show

		@yield('content')

		@section('footer')
		
		<!-- Pie de pagina -->
		<footer>

			<div class="col-sm-12 col-md-12 col-lg-12 color-footer">

				<!-- Copyright -->
				<div class="col-ms-4 col-md-4 col-lg-4 color-footer-leter">
					<p>Copy</p>			
				</div>

				<!-- Enlaces -->
				<div class="col-ms-8 col-md-8 col-lg-8">
					<a href="#">Inicio</a> |
					<a href="#">Ver</a>
				</div>

			</div>

		</footer>

		@show
		
	</body>

</html>