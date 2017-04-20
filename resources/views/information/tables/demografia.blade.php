@extends('information.main')
	
	@section('tables')

	<div class="col-sm-12 col-md-12 col-lg-12">
	
	<div class="col-sm-3 col-md-3 col-lg-3 pull-right">
		
		<a class="btn btn-danger pull-right" href="#" onclick="mostrarTablas()" style="font-size: 17px;">Mostrar</a>
		
		<br>
		<br>
		<br>

	</div>

	<div id="demografias" class="col-sm-12 col-md-12 col-lg-12">

		{{-- Datos --}}
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Datos</th>
					<th></th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Población en edad de trabajar</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>Póblacion potencialmente activa</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>Póblacion potencialmente inactiva</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>Numero de personas menores a 15 años</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>Numero de personas mayores a 64 años</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>Numero de personas independientes</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>Numero de personas dependientes</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>Población por género -Hombres</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>Población por género -Mujeres</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>Población por zona -Cabecera</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>Población por zona -Resto</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>Índice de ruralidad</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
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

	@endsection

	@section('javascripttable')
	
		<script src="{{ asset('js/tableDem.js') }}"></script>

	@endsection