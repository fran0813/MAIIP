@extends('information.base.layout')

	@section('title', 'Vivienda y Servicios publicos')

	@section('breadcrumbs')

	<ol class="breadcrumb">
		<li class="color-breadcrumbs"><a href="{{ url('/informacion') }}"><b>Información</b></a></li>
		<li class="active"><b>Salud</b></li>
		{{-- @if ( ! Auth::guest() )
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
		@endif --}}
	</ol>

	@endsection

	@section('selects')

		@include('information.base.partials.selectsS')

	@endsection

	@section('tables')

	<div class="col-sm-12 col-md-12 col-lg-12">

		<div class="col-sm-2 col-md-2 col-lg-2 pull-right">

			<select id="añoS" class="form-control" onchange="mostrarTablasS()">
				<option>Año</option>
			</select>

			<br>
			<br>

		</div>

	</div>

	<div id="salud" class="col-sm-12 col-md-12 col-lg-12">

		<div class="col-sm-6 col-md-6 col-lg-6">

			{{-- Vacunaciones --}}
			<table class="table table-bordered table-hover">
				<thead class="thead-s">
					<tr>
						<th>Tasa de Vacunación</th>
						<th>Valores</th>
					</tr>
				</thead>
				<tbody>
					<tr class="border-dotted">
						<td>BCG</td>
						<td></td>
					</tr>
					<tr class="border-dotted">
						<td>DPT</td>
						<td></td>
					</tr>
					<tr class="border-dotted">
						<td>Hepatitis B</td>
						<td></td>
					</tr>
					<tr class="border-dotted">
						<td>HIB</td>
						<td></td>
					</tr>
					<tr class="border-dotted">
						<td>Polio</td>
						<td></td>
					</tr>
					<tr>
						<td>Triple viral</td>
						<td></td>
					</tr>
				</tbody>
			</table>

		</div>

		<div class="col-sm-6 col-md-6 col-lg-6">

			{{-- Discapacidades --}}
			<table class="table table-bordered table-hover">
				<thead class="thead-s">
					<tr>
						<th>Discapacidades</th>
						<th>Valores</th>
					</tr>
				</thead>
				<tbody>
					<tr class="border-dotted">
						<td>Dificultad para bañarse o moverse</td>
						<td></td>
					</tr>
					<tr class="border-dotted">
						<td>Dificultad para entender o aprender</td>
						<td></td>
					</tr>
					<tr class="border-dotted">
						<td>Dificultad para moverse o para caminar por si</td>
						<td></td>
					</tr>
					<tr class="border-dotted">
						<td>Dificultad para salir a la calle sin ayuda o compañía</td>
						<td></td>
					</tr>
					<tr>
						<td>Total de población con Discapacidad</td>
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
		<script src="{{ asset('js/salud/salud.js') }}"></script>

	@endsection
