@if(auth()->user()->hasRole('SuperAdmin'))

    @extends('layouts.base')

    @include('superAdmin.section.navbar')

    @section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-ls-12 col-sm-12"></div>   

            <div class="col-md-12 col-ls-12 col-sm-12" id="mostrarTablaActivarUsuario" style="margin-top: 2%;"></div>
        </div>
    </div>
    @endsection

    @section('javascript')
        <script src="{{ asset('js/superAdmin/activarUsuario.js') }}"></script>
    @endsection

@else
    <div class="col-md-12 col-ls-12 col-sm-12 text-center">
        <h1>No tiene permisos para ver esta página</h1>
    </div>
@endif