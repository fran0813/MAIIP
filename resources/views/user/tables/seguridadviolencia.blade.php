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

<div class="col-sm-12 col-md-12 col-lg-12">

	<div id="seguridadviolencia" class="col-sm-12 col-md-12 col-lg-12">

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
					<td>Población en edad de trabajar</td>
					<td></td>
					<td></td>
				</tr>
				<tr class="border-dotted">
					<td>Póblacion potencialmente activa</td>
					<td></td>
					<td></td>
				</tr>
				<tr class="border-dotted">
					<td>Póblacion potencialmente inactiva</td>
					<td></td>
					<td></td>
				</tr>
				<tr class="border-dotted">
					<td>Numero de personas menores a 15 años</td>
					<td></td>
					<td></td>
				</tr>
				<tr class="border-dotted">
					<td>Numero de personas mayores a 64 años</td>
					<td></td>
					<td></td>
				</tr>
				<tr class="border-dotted">
					<td>Numero de personas independientes</td>
					<td></td>
					<td></td>
				</tr>
				<tr class="border-dotted">
					<td>Numero de personas dependientes</td>
					<td></td>
					<td></td>
				</tr>
				<tr class="border-dotted">
					<td>Población por género -Hombres</td>
					<td></td>
					<td></td>
				</tr>
				<tr class="border-dotted">
					<td>Población por género -Mujeres</td>
					<td></td>
					<td></td>
				</tr>
				<tr class="border-dotted">
					<td>Población por zona -Cabecera</td>
					<td></td>
					<td></td>
				</tr>
				<tr class="border-dotted">
					<td>Población por zona -Resto</td>
					<td></td>
					<td></td>
				</tr>
				<tr class="border-dotted">
					<td>Índice de ruralidad</td>
					<td></td>
					<td></td>
				</tr>
				<tr class="border-dotted">
					<td>Población total</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>Crecimiento poblacional</td>
					<td></td>
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

<center>
	<div id="grafica2" class="col-sm-12 col-md-12 col-lg-12"  style="display: none;">

	</div>
</center>

@endsection

@section('javascripttable')
	<script type="text/javascript" src="{{ url('https://www.gstatic.com/charts/loader.js') }}"></script>
	<script src="{{ asset('js/user/demografia.js') }}"></script>
@endsection
