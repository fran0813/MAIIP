@extends('user.admin.base.layout')

@section('titulo', 'Administrador')

@section('pages')
	<a href="#" class="btn btn-primary pull-right">Crear</a>

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