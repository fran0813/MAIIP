@extends('base.layout')

	@section('titulo', 'index')

	@section('content')

	<!-- Contenido -->
	<div class="col-sm-12 col-md-12 col-lg-12" style="padding-left: 0;padding-right: 0;">

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
		<div class="col-sm-12 col-md-12 col-lg-12" style="padding-left: 0;padding-right: 0;background-color: #fff">

		<br>

			<div class="col-sm-7 col-md-7 col-lg-7">

				<p class="text-center titulo" ><b>MAIIP</b></p>

				<p class="text-center" style="font-size: 15px;">El Modelo Alternativo de Inclusión e Innovación Productiva es una herramienta multidimensional, dinámica y funcional que busca generar innovación social en territorios con altos niveles de ruralidad en Colombia, a partir de la construcción con las comunidades de un sistema de generación de valor orientado a ampliar las capacidades territoriales a partir de instrumentos de gestión empresarial aplicados a las dimensiones productivas, asociativas, turísticas, patrimoniales y de conectividad</p>

				<center>
					<br>
					<a class="btn btn-danger" href="http://www.unipiloto.edu.co/construccion-social-del-territorio/maiip/" style="font-size: 17px;">Mas información</a>
				</center>

			</div>
			<div class="col-sm-5 col-md-5 col-lg-5" style="padding-left: 0;padding-right: 0;">
			<img class="img-responsive" src="{{ asset('img/img1.png')}}" alt="Foto">
			</div>

			<br>
		</div>

	</div>

	@endsection