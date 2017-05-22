@extends('user.admin.base.layout')

    @section('titulo', 'Administrador')

    @section('pages')

    <div class="col-sm-12 col-md-12 collg-12">
        
        {{-- Selects --}}
        @include('user.admin.base.selects')
        
        <div id="crear" class="col-sm-2 col-md-2 col-lg-2" hidden="">
           <a href="#" class="btn btn-primary pull-right" data-toggle="modal" data-target="#modalCrear">Crear</a>
        </div>

    </div>
    <div class="col-lg-12 col-md-12 col-sm-12"><br></div>
	<div class="col-lg-12 col-md-12 col-sm-12">
		<div class="panel panel-default">
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div id="tablasalud" class="table-responsive">
                    <center><h3>Porfavor seleccione un <strong>Departamento</strong> y un <strong>Municipio</strong></h3></center>
                </div>
                <!-- /.table-responsive -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>

    @include('user.admin.tables.salud.crear')

    @include('user.admin.tables.salud.mostrarActualizar')

    @endsection

    @section('javascript')

        <script src="{{ asset('js/principal/principal.js') }}"></script>
        <script src="{{ asset('js/usuario/salud/salud.js') }}"></script>
        <script src="{{ asset('js/usuario/salud/crear.js') }}"></script>
        <script src="{{ asset('js/usuario/salud/actualizar.js') }}"></script>

    @endsection