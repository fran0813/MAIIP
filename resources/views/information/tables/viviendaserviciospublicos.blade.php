@extends('information.base.layout')

	@section('title', 'Vivienda y Servicios publicos')

	@section('breadcrumbs')

	<ol class="breadcrumb">
		<li class="color-breadcrumbs"><a href="{{ url('/informacion') }}"><b>Información</b></a></li>
		<li class="active"><b>Vivienda y Servicios publicos</b></li>
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

		@include('information.base.partials.selectsVSP')

	@endsection

	@section('tables')

	<div class="col-sm-12 col-md-12 col-lg-12">

		<div class="col-sm-2 col-md-2 col-lg-2 pull-right">

			<select id="añoVSP" class="form-control" onchange="mostrarTablasVSP()">
				<option>Año</option>
			</select>

			<br>
			<br>

		</div>

	</div>

	<div id="viviendaserviciospublicos" class="col-sm-12 col-md-12 col-lg-12">

		<div class="col-sm-12 col-md-12 col-lg-12">

			{{-- Datos --}}
			<table class="table table-bordered table-hover">
				<thead class="thead-s">
					<tr>
						<th>Datos</th>
						<th>Cabecera</th>
						<th>Rural</th>
						<th>Total</th>
					</tr>
				</thead>
				<tbody>
					<tr class="border-dotted">
						<td>Viviendas</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr class="border-dotted">
						<td>Hogares</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr class="border-dotted">
						<td>Hogares por vivienda</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr class="border-dotted">
						<td>Personas por hogar</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Personas por vivienda</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
				</tbody>
			</table>

		</div>

		<div class="col-sm-6 col-md-6 col-lg-6">

			{{-- Alcantarillado --}}
			<table class="table table-bordered table-hover">
				<thead class="thead-s">
					<tr>
						<th>Cobertura Alcantarillado</th>
						<th>Valores</th>
					</tr>
				</thead>
				<tbody>
					<tr class="border-dotted">
						<td>Cabecera</td>
						<td></td>
					</tr>
					<tr class="border-dotted">
						<td>Centro poblados</td>
						<td></td>
					</tr>
					<tr>
						<td>Rural disperso</td>
						<td></td>
					</tr>
				</tbody>
			</table>

		</div>

		<div class="col-sm-6 col-md-6 col-lg-6">

			{{-- Aseo --}}
			<table class="table table-bordered table-hover">
				<thead class="thead-s">
					<tr>
						<th>Cobertura aseo</th>
						<th>Valores</th>
					</tr>
				</thead>
				<tbody>
					<tr class="border-dotted">
						<td>Cabecera</td>
						<td></td>
					</tr>
					<tr class="border-dotted">
						<td>Centro poblados</td>
						<td></td>
					</tr>
					<tr>
						<td>Rural disperso</td>
						<td></td>
					</tr>
				</tbody>
			</table>

		</div>

		<div class="col-sm-6 col-md-6 col-lg-6">

			{{-- Gas --}}
			<table class="table table-bordered table-hover">
				<thead class="thead-s">
					<tr>
						<th>Cobertura gas</th>
						<th>Valores</th>
					</tr>
				</thead>
				<tbody>
					<tr class="border-dotted">
						<td>Cabecera</td>
						<td></td>
					</tr>
					<tr class="border-dotted">
						<td>Centro poblados</td>
						<td></td>
					</tr>
					<tr>
						<td>Rural disperso</td>
						<td></td>
					</tr>
				</tbody>
			</table>

		</div>

		<div class="col-sm-6 col-md-6 col-lg-6">

			{{-- Gas --}}
			<table class="table table-bordered table-hover">
				<thead class="thead-s">
					<tr>
						<th>Cobertura telefono</th>
						<th>Valores</th>
					</tr>
				</thead>
				<tbody>
					<tr class="border-dotted">
						<td>Cabecera</td>
						<td></td>
					</tr>
					<tr class="border-dotted">
						<td>Centro poblados</td>
						<td></td>
					</tr>
					<tr>
						<td>Rural disperso</td>
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
		<script src="{{ asset('js/viviendaserviciospublicos/viviendaserviciospublicos.js') }}"></script>

	@endsection
