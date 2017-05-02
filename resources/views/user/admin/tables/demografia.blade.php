@extends('user.admin.base.layout')

    @section('titulo', 'Administrador')

    @section('pages')

	<div class="col-sm-12 col-md-12 collg-12">
        
        {{-- departamento --}}
        <div class="col-sm-5 col-md-5 col-lg-5">
            <select id="departamento" class="form-control" onchange="mostrarMunicipios()">
                <option>Seleccione un departamento</option>
            </select>
        </div>

        {{-- municipio --}}
        <div class="col-sm-5 col-md-5 col-lg-5">
            <select id="municipio" class="form-control" onchange="mostrarDatos()">
                <option>Seleccione un municipio</option>            
            </select>
        </div>
        
        <div id="crear" class="col-sm-2 col-md-2 col-lg-2" hidden="">
           <a href="#" class="btn btn-primary pull-right" data-toggle="modal" data-target="#modalCrear">Crear</a>        
        </div>

    </div>

	<div class="col-lg-12 col-md-12 col-sm-12">
		<div class="panel panel-default">
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div id="tablaDemografia" class="table-responsive">
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
                                {{-- <td><a href="#" class="btn btn-success">Editar</a> <a href="#" class="btn btn-danger">Borrar</a></td> --}}
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

    @include('user.admin.tables.demografia.crear')

    @include('user.admin.tables.demografia.mostrarActualizar')
    
    @endsection

    @section('javascript')

        <script src="{{ asset('js/principal/principal.js') }}"></script>
        <script src="{{ asset('js/usuario/demografia/demografia.js') }}"></script>
        <script src="{{ asset('js/usuario/demografia/crear.js') }}"></script>
        <script src="{{ asset('js/usuario/demografia/actualizar.js') }}"></script>

    @endsection