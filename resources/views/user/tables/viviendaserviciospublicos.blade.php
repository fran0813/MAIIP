@extends('layouts.informacion')

@section('breadcrumbs')
<ol class="breadcrumb">
	<li class="color-breadcrumbs"><a href="{{ url('/informacion') }}"><b>Información</b></a></li>
	<li class="active"><b>Vivienda y Servicios públicos</b></li>
</ol>
@endsection

@section('selects')
	@include('user.section.selectsVSP')
@endsection

@section('tables')
<div class="col-sm-12 col-md-12 col-lg-12">

	<div class="col-sm-2 col-md-2 col-lg-2 pull-right">

		<select id="añoVSP" class="form-control" onchange="mostrarTablasVSP();">
			<option>Año</option>
		</select>

		<br>
		<br>

	</div>

</div>

<div id="viviendaserviciospublicos" class="col-sm-12 col-md-12 col-lg-12">

	<div class="col-sm-12 col-md-12 col-lg-12">

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

		<table class="table table-bordered table-hover">
			<thead class="thead-s">
				<tr>
					<th>Cobertura alcantarillado</th>
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

		<table class="table table-bordered table-hover">
			<thead class="thead-s">
				<tr>
					<th>Cobertura teléfono</th>
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
	<div id="grafica1" class="col-sm-12 col-md-12 col-lg-12" style="display: none;">

	</div>
</center>

<center>
	<div id="grafica2" class="col-sm-12 col-md-12 col-lg-12" style="display: none;">

	</div>
</center>

@endsection

@section('javascripttable')
	<script type="text/javascript" src="{{ url('https://www.gstatic.com/charts/loader.js') }}"></script>
	<script src="{{ asset('js/user/viviendaserviciospublicos.js') }}"></script>
@endsection
