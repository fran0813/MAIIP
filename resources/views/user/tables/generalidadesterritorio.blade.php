@extends('layouts.informacion')

@section('breadcrumbs')

<ol class="breadcrumb">
	<li class="color-breadcrumbs"><a href="{{ url('/informacion') }}"><b>Información</b></a></li>
	<li class="active"><b>Generalidades y territorio</b></li>
@endsection

@section('selects')
	@include('user.section.selectsGT')
@endsection

@section('tables')

<div class="col-sm-12 col-md-12 col-lg-12">

	<div class="col-sm-2 col-md-2 col-lg-2 pull-right">

		<select id="añoGT" class="form-control" onchange="mostrarTablasGT()">
			<option>Año</option>
		</select>

		<br>
		<br>

	</div>

</div>

<div id="generalidadesterritorio" class="col-sm-12 col-md-12 col-lg-12">

	<div class="col-sm-6 col-md-6 col-lg-6">

		<table class="table table-bordered table-hover">
			<thead class="thead-s">
				<tr>
					<th>Datos</th>
					<th>Valores</th>
				</tr>
			</thead>
			<tbody>
				<tr class="border-dotted">
					<td>Temperatura Media(°C)</td>
					<td></td>
				</tr>
				<tr>
					<td>Altura sobre el nivel del mal</td>
					<td></td>
				</tr>
			</tbody>
		</table>

	</div>

	<div class="col-sm-6 col-md-6 col-lg-6">

		<table class="table table-bordered table-hover">
			<thead class="thead-s">
				<tr>
					<th>Predios</th>
					<th>Valores</th>
				</tr>
			</thead>
			<tbody>
				<tr class="border-dotted">
					<td>Zona rural</td>
					<td></td>
				</tr>
				<tr class="border-dotted">
					<td>Zona urbana</td>
					<td></td>
				</tr>
				<tr>
					<td>Total por municipio</td>
					<td></td>
				</tr>
			</tbody>
		</table>

	</div>

	<div class="col-sm-6 col-md-6 col-lg-6">

		<table class="table table-bordered table-hover">
			<thead class="thead-s">
				<tr>
					<th>Generalidad</th>
					<th>Valores (km2)</th>
				</tr>
			</thead>
			<tbody>
				<tr class="border-dotted">
					<td>Rural</td>
					<td></td>
				</tr>
				<tr class="border-dotted">
					<td>Urbana</td>
					<td></td>
				</tr>
				<tr>
					<td>Extensión total</td>
					<td></td>
				</tr>
			</tbody>
		</table>

	</div>

	<div class="col-sm-6 col-md-6 col-lg-6">

		<table class="table table-bordered table-hover">
			<thead class="thead-s">
				<tr>
					<th>Territorio</th>
					<th>A. construida</th>
					<th>A. terreno</th>
				</tr>
			</thead>
			<tbody>
				<tr class="border-dotted">
					<td>Zona rural</td>
					<td></td>
					<td></td>
				</tr>
				<tr class="border-dotted">
					<td>Zona urbana</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>Total por municipio</td>
					<td></td>
					<td></td>
				</tr>
			</tbody>
		</table>

	</div>

</div>

@endsection

@section('javascripttable')
	<script src="{{ asset('js/user/generalidadesterritorio.js') }}"></script>
@endsection
