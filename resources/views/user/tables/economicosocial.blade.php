@extends('layouts.informacion')

@section('breadcrumbs')
<ol class="breadcrumb">
	<li class="color-breadcrumbs"><a href="{{ url('/informacion') }}"><b>Información</b></a></li>
	<li class="active"><b>Economico social</b></li>
</ol>
@endsection

@section('selects')
	@include('user.section.selectsES')
@endsection

@section('tables')

<div class="col-sm-12 col-md-12 col-lg-12">

	<div class="col-sm-2 col-md-2 col-lg-2 pull-right">

		<select id="añoES" class="form-control" onchange="mostrarTablasSV()">
			<option>Año</option>
		</select>

		<br>
		<br>

	</div>

</div>

<div id="economicosocial" class="col-sm-12 col-md-12 col-lg-12">

	<div  class="col-sm-6 col-md-6 col-lg-6">

		<table class="table table-bordered table-hover">
			<thead class="thead-s">
				<tr>
					<th>Unidades comerciales</th>
					<th>Valores</th>
				</tr>
			</thead>
			<tbody>
				<tr class="border-dotted">
					<td>Unidades comerciales</td>
					<td></td>
				</tr>
				<tr class="border-dotted">
					<td>Unidades de servicios</td>
					<td></td>
				</tr>
				<tr class="border-dotted">
					<td>Unidades grande comerciales</td>
					<td></td>
				</tr>
				<tr class="border-dotted">
					<td>Unidades grande industria</td>
					<td></td>
				</tr>
				<tr class="border-dotted">
					<td>Unidades grande servicios</td>
					<td></td>
				</tr>
				<tr class="border-dotted">
					<td>Unidades industriales</td>
					<td></td>
				</tr>
				<tr class="border-dotted">
					<td>Unidades mediana comerciales</td>
					<td></td>
				</tr>
				<tr class="border-dotted">
					<td>Unidades mediana industria</td>
					<td></td>
				</tr>
				<tr class="border-dotted">
					<td>Unidades mediana servicios</td>
					<td></td>
				</tr>
				<tr class="border-dotted">
					<td>Unidades micro comerciales</td>
					<td></td>
				</tr>
				<tr class="border-dotted">
					<td>Unidades micro industria</td>
					<td></td>
				</tr>
				<tr class="border-dotted">
					<td>Unidades micro servicios</td>
					<td></td>
				</tr>
				<tr class="border-dotted">
					<td>Unidades pequeña comerciales</td>
					<td></td>
				</tr>
				<tr class="border-dotted">
					<td>Unidades pequeña industria</td>
					<td></td>
				</tr>
				<tr class="border-dotted">
					<td>Unidades pequeña Servicios</td>
					<td></td>
				</tr>				
			</tbody>
		</table>

	</div>

	<div  class="col-sm-6 col-md-6 col-lg-6">

		<table class="table table-bordered table-hover">
			<thead class="thead-s">
				<tr>
					<th>Índice de pobreza multidimensional por componentes</th>
					<th>Valores</th>
				</tr>
			</thead>
			<tbody>
				<tr class="border-dotted">
					<td>Alta tasa de dependencia económica</td>
					<td></td>
				</tr>
				<tr class="border-dotted">
					<td>Analfabetismo</td>
					<td></td>
				</tr>
				<tr class="border-dotted">
					<td>Bajo logro educativo</td>
					<td></td>
				</tr>
				<tr class="border-dotted">
					<td>Barreras de acceso a servicio de salud</td>
					<td></td>
				</tr>
				<tr class="border-dotted">
					<td>Barreras de acceso a servicios para cuidado de la primera infancia</td>
					<td></td>
				</tr>
				<tr class="border-dotted">
					<td>Empleo informal</td>
					<td></td>
				</tr>
				<tr class="border-dotted">
					<td>Hacinamiento</td>
					<td></td>
				</tr>
				<tr class="border-dotted">
					<td>Inadecuada eliminación de excretas</td>
					<td></td>
				</tr>
				<tr class="border-dotted">
					<td>Inasistencia escolar</td>
					<td></td>
				</tr>
				<tr class="border-dotted">
					<td>Paredes inadecuadas</td>
					<td></td>
				</tr>
				<tr class="border-dotted">
					<td>Pisos inadecuados</td>
					<td></td>
				</tr>
				<tr class="border-dotted">
					<td>Rezago escolar</td>
					<td></td>
				</tr>
				<tr class="border-dotted">
					<td>Sin acceso a fuente de agua mejorada</td>
					<td></td>
				</tr>
				<tr class="border-dotted">
					<td>Sin aseguramiento en salud</td>
					<td></td>
				</tr>
				<tr class="border-dotted">
					<td>Trabajo infantil</td>
					<td></td>
				</tr>
			</tbody>
		</table>

	</div>

	<div class="col-sm-12 col-md-12 col-lg-12"></div>

	<div  class="col-sm-6 col-md-6 col-lg-6">

		<table class="table table-bordered table-hover">
			<thead class="thead-s">
				<tr>
					<th>Economico-social</th>
					<th>Valores</th>
				</tr>
			</thead>
			<tbody>
				<tr class="border-dotted">
					<td>Número de hectáreas sembradas con bosques por municipio área en bosques total</td>
					<td></td>
				</tr>
				<tr class="border-dotted">
					<td>Área agrícola cosechada total</td>
					<td></td>
				</tr>
				<tr class="border-dotted">
					<td>Producción agrícola total</td>
					<td></td>
				</tr>
				<tr class="border-dotted">
					<td>Producción de carbón</td>
					<td></td>
				</tr>
				<tr class="border-dotted">
					<td>Inventario bovinos total machos</td>
					<td></td>
				</tr>
				<tr class="border-dotted">
					<td>Inventario bovinos total hembras</td>
					<td></td>
				</tr>
				<tr class="border-dotted">
					<td>Inventario bovinos total</td>
					<td></td>
				</tr>
				<tr class="border-dotted">
					<td>Incidencia IPM total</td>
					<td></td>
				</tr>
				<tr class="border-dotted">
					<td>Incidencia IPM urbano</td>
					<td></td>
				</tr>
				<tr class="border-dotted">
					<td>Incidencia IPM rural</td>
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
	<script src="{{ asset('js/user/economicosocial.js') }}"></script>
@endsection
