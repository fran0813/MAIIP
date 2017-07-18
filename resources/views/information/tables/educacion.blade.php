@extends('information.base.layout')

	@section('title', 'Vivienda y Servicios publicos')

	@section('breadcrumbs')

	<ol class="breadcrumb">
		<li class="color-breadcrumbs"><a href="{{ url('/informacion') }}"><b>Información</b></a></li>
		<li class="active"><b>Educación</b></li>
		@if ( ! Auth::guest() )
			<li>
				<a href="{{ route('logout') }}"
					onclick="event.preventDefault();
							 document.getElementById('logout-form').submit();">
					Salir
				</a>
				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
					{{ csrf_field() }}
				</form>
			</li>
		@endif
	</ol>

	@endsection

	@section('selects')

		@include('information.base.partials.selectsE')

	@endsection

	@section('tables')

	<div id="educacion" class="col-sm-12 col-md-12 col-lg-12">

		<div class="col-sm-12 col-md-12 col-lg-12">

			{{-- Datos --}}
			<table class="table table-bordered table-hover">
				<thead class="thead-s">
					<tr>
						<th>Datos</th>
						<th>Año</th>
						<th>Año</th>
					</tr>
				</thead>
				<tbody>
					<tr class="border-dotted">
						<td>Prejardin y jardin (rural)</td>
						<td></td>
						<td></td>
					</tr>
					<tr class="border-dotted">
						<td>Prejardin y jardin (urbano)</td>
						<td></td>
						<td></td>
					</tr>
					<tr class="border-dotted">
						<td>Transición (rural)</td>
						<td></td>
						<td></td>
					</tr>
					<tr class="border-dotted">
						<td>Transición (urbano)</td>
						<td></td>
						<td></td>
					</tr>
					<tr class="border-dotted">
						<td>Primaria (rural)</td>
						<td></td>
						<td></td>
					</tr>
					<tr class="border-dotted">
						<td>Primaria (urbano)</td>
						<td></td>
						<td></td>
					</tr>
					<tr class="border-dotted">
						<td>Secundaria (rural)</td>
						<td></td>
						<td></td>
					</tr>
					<tr class="border-dotted">
						<td>Secundaria (urbano)</td>
						<td></td>
						<td></td>
					</tr>
					<tr class="border-dotted">
						<td>Media (rural)</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Media (urbano)</td>
						<td></td>
						<td></td>
					</tr>
				</tbody>
			</table>

		</div>

		<div class="col-sm-12 col-md-12 col-lg-12">

			{{-- Nivel--}}
			<table class="table table-bordered table-hover">
				<thead class="thead-s">
					<tr>
						<th>Matricula por nivel</th>
						<th>Año</th>
						<th>Año</th>
					</tr>
				</thead>
				<tbody>
					<tr class="border-dotted">
						<td>Prejardin y jardin</td>
						<td></td>
						<td></td>
					</tr>
					<tr class="border-dotted">
						<td>Transición</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Primaria</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Secundaria</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Media</td>
						<td></td>
						<td></td>
					</tr>
				</tbody>
			</table>

		</div>

		<div class="col-sm-12 col-md-12 col-lg-12">

			{{-- Generos --}}
			<table class="table table-bordered table-hover">
				<thead class="thead-s">
					<tr>
						<th>Matricula por genero</th>
						<th>Año</th>
						<th>Año</th>
					</tr>
				</thead>
				<tbody>
					<tr class="border-dotted">
						<td>Femenino</td>
						<td></td>
						<td></td>
					</tr>
					<tr class="border-dotted">
						<td>Masculino</td>
						<td></td>
						<td></td>
					</tr>
				</tbody>
			</table>

		</div>

	</div>

	<center>
		<div id="grafica1" class="col-sm-12 col-md-12 col-lg-12">

		</div>
	</center>

	<center>
		<div id="grafica2" class="col-sm-12 col-md-12 col-lg-12">

		</div>
	</center>

	@endsection

	@section('javascripttable')

		<script type="text/javascript" src="{{ url('https://www.gstatic.com/charts/loader.js') }}"></script>
		<script src="{{ asset('js/educacion/educacion.js') }}"></script>

	@endsection
