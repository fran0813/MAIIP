@extends('information.main')
	
	@section('tables')
	
	<div class="col-sm-12 col-md-12 col-lg-12">
		
		<div class="col-sm-3 col-md-3 col-lg-3 pull-right">
			
			<a class="btn btn-danger pull-right" href="#" onclick="mostrarTablas()" style="font-size: 17px;">Mostrar</a>
			
			<br>
			<br>
			<br>

		</div>

	</div>

	<div class="col-sm-12 col-md-12 col-lg-12">

		<div id="datos" class="col-sm-6 col-md-6 col-lg-6">

			{{-- Datos --}}
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

		<div id="predios" class="col-sm-6 col-md-6 col-lg-6">

			{{-- Predios --}}
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

	</div>

	<div class="col-sm-12 col-md-12 col-lg-12">

		<div id="generalidades" class="col-sm-6 col-md-6 col-lg-6">

			{{-- Generalidad --}}
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

		<div id="territorios" class="col-sm-6 col-md-6 col-lg-6">

			{{-- Territorio --}}
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
	
		<script src="{{ asset('js/tableGT.js') }}"></script>

	@endsection