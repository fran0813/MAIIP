@if(auth()->user()->hasRole('Admin'))

    @extends('layouts.adminBase')

    @include('admin.section.navbar')

    @section('content')
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
        <h1>Bienvenido {{ Auth::user()->name }}</h1>
    </div>
    @endsection

@else
    <div class="col-md-12 col-ls-12 col-sm-12 text-center">
        <h1>No tiene permisos para ver esta página</h1>
    </div>
@endif