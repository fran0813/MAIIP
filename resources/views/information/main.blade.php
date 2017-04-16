@extends('base.layout')

	@section('titulo', 'información')

	@section('content')

	{{-- pagina de principla de la informacion --}}
	<div class="col-sm-12 col-md-12 col-lg-12">

		{{-- migas de pan --}}
		<div class="col-sm-6 col-md-6 col-lg-6">
			
		</div>

		{{-- codigo - departamentos - municipios --}}
		<div class="col-sm-6 col-md-6 col-lg-6">
			
			<div class="col-sm-12 col-md-12 col-lg-12">

				{{-- codigo --}}
				<div class="col-sm-2 col-md-2 col-lg-2">
					<input class="form-control" type="text">
				</div>

				{{-- departamento --}}
				<div class="col-sm-5 col-md-5 col-lg-5">
					<select class="form-control">
						<option>Seleccione un departamento</option>
							@foreach($departamentos as $departamento)
								<option>{{ $departamento->id }}</option>
							@endforeach
					</select>
				</div>

				{{-- municipio --}}
				<div class="col-sm-5 col-md-5 col-lg-5">
					<select class="form-control">
						<option>Seleccione un municipio</option>
							@foreach($municipios as $municipio)
								<option>{{ $municipio->departamento_id }}</option>
							@endforeach
					</select>
				</div>

			</div>

		</div>

		<br>
		<br>

	</div>

	@endsection