@extends('user.pdf')

@section('breadcrumbs')

<ol class="breadcrumb">
	<li class="color-breadcrumbs"><a href="{{ url('/pdf') }}"><b>Pdf</b></a></li>
	<li class="active"><b>Demografía</b></li>
@endsection

@section('tables')

	<form class="form-horizontal" method="GET" action='/demografia/pdf' enctype="multipart/form-data" target="_blank">
	
		<div class="col-sm-6 col-md-6 col-lg-6">
			<select id="departamento" name="departamento" class="form-control" onchange="mostrarMunicipios();establecerDepartamento();" required="">
				<option>Seleccione un departamento</option>
			</select>
		</div>

		<div class="col-sm-6 col-md-6 col-lg-6">
			<select id="municipio" name="municipio" class="form-control" onchange="establecerMunicipio();años()" required="">
				<option>Seleccione un municipio</option>			
			</select>
		</div>

		<div class="col-sm-6 col-md-6 col-lg-6">
			<select id="date1" name="date1" class="form-control" required>
				<option value="">Seleccione del año</option>
			</select>
		</div>

		<button type="submit" class="btn btn-success">Aceptar</button>
	</form>

@endsection


@section('javascripttable')
<script src="{{ asset('jquery/jquery.min.js') }}"></script>
	<script src="{{ asset('js/user/pdfdemografia.js') }}"></script>
@endsection
