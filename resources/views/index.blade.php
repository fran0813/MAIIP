@extends('base.layout')

	@section('titulo', 'index')

	@section('content')

	<!-- Contenido -->
	<div class="col-sm-12 col-md-12 col-lg-12">

		<!-- Slider -->
		<div class="col-sm-12 col-md-12 col-lg-12">
			
			<div id="myCarousel" class="carousel slide" data-ride="carousel">

			  	<!-- Indicators -->
				<ol class="carousel-indicators">
				    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				    <li data-target="#myCarousel" data-slide-to="1"></li>
				    <li data-target="#myCarousel" data-slide-to="2"></li>
				    <li data-target="#myCarousel" data-slide-to="3"></li>
			  	</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
			    	<div class="item active">
			      		<img class="img-responsive" src="{{ asset('img/slider1.png')}}" alt="Chania">
			    	</div>

				    <div class="item">
				    	<img class="img-responsive" src="{{ asset('img/slider2.png')}}" alt="Chania">
				    </div>

				    <div class="item">
				      	<img class="img-responsive" src="{{ asset('img/slider3.png')}}" alt="Chania">
				    </div>

				    <div class="item">
				    	<img class="img-responsive" src="{{ asset('img/slider4.png')}}" alt="Chania">
				    </div>
				</div>

				<!-- Left and right controls -->
				<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
			  	</a>
			  	<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			    	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			    	<span class="sr-only">Next</span>
			  	</a>

			</div>
		</div>

		<!-- Contenido MAIIP -->
		<div class="col-sm-12 col-md-12 col-lg-12">

		<br>

			<p class="text-center"><b>MAIIP</b></p>

			<p class="text-center">El Modelo Alternativo de Inclusión e Innovación Productiva es una herramienta multidimensional, dinámica y funcional que busca generar innovación social en territorios con altos niveles de ruralidad en Colombia, a partir de la construcción con las comunidades de un sistema de generación de valor orientado a ampliar las capacidades territoriales a partir de instrumentos de gestión empresarial aplicados a las dimensiones productivas, asociativas, turísticas, patrimoniales y de conectividad</p>

			<center>
				<a class="btn btn-danger" href="http://www.unipiloto.edu.co/construccion-social-del-territorio/maiip/">Mas información</a>
			</center>

			<br>
		</div>

	</div>

	@endsection