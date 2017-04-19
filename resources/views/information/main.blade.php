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
<<<<<<< HEAD
								<option id="{{ $departamento->id}}">{{ $departamento->nombre}}</option>
=======
								<option value="{{ $departamento->id }}">{{ $departamento->nombre }}</option>
>>>>>>> 7e3b6accbdfc19ae0a62005860a156b5f44f7950
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

<<<<<<< HEAD
	@endsection

	
=======
	{{-- Tabla - Graficas --}}
	<div class="col-sm-12 col-md-12 col-lg-12">

		<div class="col-sm-3 col-md-3 col-lg-3">
			<a href="#">Generalidades y territorio</a> 
			<br>
			<a href="#">Demografia</a>
			<br>
		</div>
			
	</div>

	@endsection

	@section('javascript')

		<script src="{{ asset('js/main.js') }}"></script>
	
	@endsection
>>>>>>> 7e3b6accbdfc19ae0a62005860a156b5f44f7950
