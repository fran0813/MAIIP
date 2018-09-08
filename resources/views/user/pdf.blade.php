@extends('layouts.base')

@section('active')
	<li><a href="{{ url('/') }}">Inicio <span class="sr-only">(current)</span></a></li>
	<li ><a href="{{ url('/informacion') }}">Información</a></li>
	<li class="active"><a href="{{ url('/pdf') }}">Descargar pdf</a></li>
@endsection

@section('breadcrumbs')

<ol class="breadcrumb">
   <li class="active">Pdf</li>
</ol>

@endsection

@section('content')

{{-- Inicio --}}
<div class="col-sm-12 col-md-12 col-lg-12">

	{{-- Migas de pan --}}
	<div class="col-sm-6 col-md-6 col-lg-6">

		@yield('breadcrumbs')

	</div>

	{{-- Codigo - Departamentos - Municipios --}}
	<div class="col-sm-6 col-md-6 col-lg-6">

		@yield('selects')

	</div>

	<br>
	<br>

</div>


<div class="col-sm-12 col-md-12 col-lg-12">

	<br>

	{{-- Submenu --}}
	@include('user.section.submenu2')

	{{-- Tabla - Graficas --}}
	<div class="col-sm-10 col-md-10 col-lg-10" style="background-color: #fff;padding: 18px;">

		@yield('tables')

		Por favor seleccione una característica

	</div>

</div>

@endsection

@section('javascript')
	<script src="{{ asset('js/user/main.js') }}"></script>
@endsection

@yield('javascripttable')