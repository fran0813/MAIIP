@extends('user.admin.base.layout')

@section('titulo', 'Administrador')

@section('pages')
	<!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> Inicio
                </li>
            </ol>
        </div>
    </div>

	<div class="col-md-12 col-lg-12 col-sm-12 text-center">	

		<center><img class="img-responsive" src="{{ asset('img/logo.png') }}" alt="No found" width="18%"></center>
		<h1>Bienvenido administrador <strong>Lucas</strong></h1>


	</div>
@endsection