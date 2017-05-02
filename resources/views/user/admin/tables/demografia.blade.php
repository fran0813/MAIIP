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
            <select id="municipio" class="form-control">
                <option>Seleccione un municipio</option>            
            </select>
        </div>
        
        <div class="col-sm-2 col-md-2 col-lg-2">
           <a href="#" class="btn btn-primary pull-right">Crear</a>        
        </div>

    </div>

	<div class="col-lg-12 col-md-12 col-sm-12">
		<div class="panel panel-default">
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Año</th>
                                <th>Funciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>hola</td>
                                <td><a href="#" class="btn btn-success">Editar</a> <a href="#" class="btn btn-danger">Borrar</a></td>
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
    
    @endsection