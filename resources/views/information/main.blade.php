@extends('base.layout')

	@section('titulo', 'información')

	@section('content')

	{{-- Inicio --}}
	<div class="col-sm-12 col-md-12 col-lg-12">

		{{-- migas de pan --}}
		<div class="col-sm-6 col-md-6 col-lg-6">
			
		</div>

		{{-- codigo - departamentos - municipios --}}
		<div class="col-sm-6 col-md-6 col-lg-6">
			
			<div class="col-sm-12 col-md-12 col-lg-12">

				{{-- codigo --}}
				<div id="cod" class="col-sm-2 col-md-2 col-lg-2">
					<input class="form-control" type="text" value="">
				</div>

				{{-- departamento --}}
				<div class="col-sm-5 col-md-5 col-lg-5">
					<select id="dep" class="form-control" onchange="mostrarMunicipios()">
						<option>Seleccione un departamento</option>
							@foreach($departamentos as $departamento)
								<option value="{{ $departamento->id }}">{{ $departamento->nombre }}</option>
							@endforeach
					</select>
				</div>

				{{-- municipio --}}
				<div class="col-sm-5 col-md-5 col-lg-5">
					<select id="mun" class="form-control" onchange="mostrarCodigo()">
						<option>Seleccione un municipio</option>			
					</select>
				</div>

			</div>

		</div>

		<br>
		<br>

	</div>

	
	<div class="col-sm-12 col-md-12 col-lg-12">
		<br>
		{{-- Submenu --}}
		@include('base.partials.submenu')

		{{-- Tabla - Graficas --}}
		<div class="col-sm-10 col-md-10 col-lg-10" style="background-color: #fff;padding: 18px;">
			Tablas y graficas
		<br>
		</div>
		
	</div>

	@endsection

	@section('javascript')

		<script src="{{ asset('js/main.js') }}"></script>
	
	@endsection

