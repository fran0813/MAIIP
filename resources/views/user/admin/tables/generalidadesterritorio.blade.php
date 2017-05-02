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

	<div class="col-lg-12 col-md-12 col-sm-12">
		<div class="panel panel-default">
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div id="tablaGeneralidadesterritorio" class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Año</th>
                                <th>Funciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                {{-- <td><a id="1" href="#" class="btn btn-success" data-toggle="modal" data-target="#modalMostrarActualizar">Editar</a> <a id="1" href="#" class="btn btn-danger">Borrar</a></td> --}}
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.table-responsive -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>

    @include('user.admin.tables.generalidadesterritorio.crear')

    @include('user.admin.tables.generalidadesterritorio.mostrarActualizar')

    @endsection

    @section('javascript')

        <script src="{{ asset('js/principal/principal.js') }}"></script>
        <script src="{{ asset('js/usuario/generalidadesterritorio/generalidadesterritorio.js') }}"></script>
        <script src="{{ asset('js/usuario/generalidadesterritorio/crear.js') }}"></script>
        <script src="{{ asset('js/usuario/generalidadesterritorio/actualizar.js') }}"></script>

    @endsection