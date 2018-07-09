@extends('layouts.informacion')

@section('breadcrumbs')
<ol class="breadcrumb">
	<li class="color-breadcrumbs"><a href="{{ url('/informacion') }}"><b>Información</b></a></li>
	<li class="active"><b>Seguridad y violencia</b></li>
</ol>
@endsection

@section('selects')
	@include('user.section.selectsSV')
@endsection

@section('tables')

<div class="col-sm-12 col-md-12 col-lg-12">

	<div class="col-sm-2 col-md-2 col-lg-2 pull-right">

		<select id="añoSV" class="form-control" onchange="mostrarTablasSV()">
			<option>Año</option>
		</select>

		<br>
		<br>

	</div>

</div>

<div id="seguridadviolencia" class="col-sm-12 col-md-12 col-lg-12">

	<div class="col-sm-6 col-md-6 col-lg-6">

		<table class="table table-bordered table-hover">
			<thead class="thead-s">
				<tr>
					<th>Seguridad y violencia</th>
					<th>Valores</th>
				</tr>
			</thead>
			<tbody>
				<tr class="border-dotted">
					<td>Tasa de deserción escolar total</td>
					<td></td>
				</tr>
				<tr class="border-dotted">
					<td>Tasa de homicidios</td>
					<td></td>
				</tr>
				<tr class="border-dotted">
					<td>Tasa de incidencia dengue</td>
					<td></td>
				</tr>
				<tr class="border-dotted">
					<td>Tasa de lesiones personales</td>
					<td></td>
				</tr>
				<tr class="border-dotted">
					<td>Tasa de muertes por accidentes de tránsito</td>
					<td></td>
				</tr>
				<tr class="border-dotted">
					<td>Tasa de suicidios</td>
					<td></td>
				</tr>
				<tr class="border-dotted">
					<td>Violencia interpersonal</td>
					<td></td>
				</tr>
				<tr class="border-dotted">
					<td>Casos totales</td>
					<td></td>
				</tr>
				<tr class="border-dotted">
					<td>Casos y tasa homicidios</td>
					<td></td>
				</tr>
			</tbody>
		</table>

	</div>

	<div class="col-sm-6 col-md-6 col-lg-6">

		<table class="table table-bordered table-hover">
			<thead class="thead-s">
				<tr>
					<th>Lesiones</th>
					<th>Valores</th>
				</tr>
			</thead>
			<tbody>
				<tr class="border-dotted">
					<td>Lesiones fatales total</td>
					<td></td>
				</tr>
				<tr class="border-dotted">
					<td>Lesiones fatales hombre</td>
					<td></td>
				</tr>
				<tr class="border-dotted">
					<td>Lesiones fatales mujer</td>
					<td></td>
				</tr>
				<tr class="border-dotted">
					<td>Lesiones no fatales total</td>
					<td></td>
				</tr>
				<tr class="border-dotted">
					<td>Lesiones no fatales hombre</td>
					<td></td>
				</tr>
				<tr class="border-dotted">
					<td>Lesiones no fatales mujer</td>
					<td></td>
				</tr>
			</tbody>
		</table>

	</div>

	<div class="col-sm-12 col-md-12 col-lg-12"></div>

	<div class="col-sm-6 col-md-6 col-lg-6">

		<table class="table table-bordered table-hover">
			<thead class="thead-s">
				<tr>
					<th>Delitos sexuales</th>
					<th>Valores</th>
				</tr>
			</thead>
			<tbody>
				<tr class="border-dotted">
					<td>Total</td>
					<td></td>
				</tr>
				<tr class="border-dotted">
					<td>Hombre</td>
					<td></td>
				</tr>
				<tr class="border-dotted">
					<td>Mujer</td>
					<td></td>
				</tr>
			</tbody>
		</table>

	</div>

	<div class="col-sm-6 col-md-6 col-lg-6">

		<table class="table table-bordered table-hover">
			<thead class="thead-s">
				<tr>
					<th>Violencia</th>
					<th>Valores</th>
				</tr>
			</thead>
			<tbody>
				<tr class="border-dotted">
					<td>Violencia a personas mayores</td>
					<td></td>
				</tr>
				<tr class="border-dotted">
					<td>Violencia entre otros familiares</td>
					<td></td>
				</tr>
				<tr class="border-dotted">
					<td>Violencia Infantil</td>
					<td></td>
				</tr>
			</tbody>
		</table>

	</div>

</div>

<center>
	<div id="grafica1" class="col-sm-12 col-md-12 col-lg-12"  style="display: none;">

	</div>
</center>

@endsection

@section('javascripttable')
	<script type="text/javascript" src="{{ url('https://www.gstatic.com/charts/loader.js') }}"></script>
	<script src="{{ asset('js/user/seguridadviolencia.js') }}"></script>
@endsection
