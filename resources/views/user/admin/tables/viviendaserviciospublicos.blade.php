@extends('user.admin.base.layout')

    @section('titulo', 'Administrador')

    @section('pages')

    <div class="col-sm-12 col-md-12 collg-12">
        
        {{-- Selects --}}
        @include('user.admin.base.selects')
        
       <div id="crear" class="col-sm-2 col-md-2 col-lg-2" hidden="">
           <a href="#" style="margin-left: 10px;" class="btn btn-primary pull-right" data-toggle="modal" data-target="#modalCrear">Crear</a> 
           <a href="#" class="btn btn-primary pull-right" data-toggle="modal" data-target="#">Importar</a>      
        </div>

    </div>
    <div class="col-lg-12 col-md-12 col-sm-12"><br></div>
	<div class="col-lg-12 col-md-12 col-sm-12">
		<div class="panel panel-default">
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div id="tablaviviendaserviciospublicos" class="table-responsive">
                    <center><h3>Porfavor seleccione un <strong>Departamento</strong> y un <strong>Municipio</strong></h3></center>
                </div>
                <!-- /.table-responsive -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>

    @include('user.admin.tables.viviendaserviciospublicos.crear')

    @include('user.admin.tables.viviendaserviciospublicos.mostrarActualizar')

    @endsection

    @section('javascript')

        <script src="{{ asset('js/principal/principal.js') }}"></script>
        <script src="{{ asset('js/usuario/viviendaserviciospublicos/viviendaserviciospublicos.js') }}"></script>
        <script src="{{ asset('js/usuario/viviendaserviciospublicos/crear.js') }}"></script>
        <script src="{{ asset('js/usuario/viviendaserviciospublicos/actualizar.js') }}"></script>

    @endsection