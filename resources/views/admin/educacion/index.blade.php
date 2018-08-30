@extends('layouts.adminBase')

@section('content')

<div class="col-sm-12 col-md-12 collg-12">

    @include('admin.section.adminSelect')
    
    <div id="crear" class="col-sm-2 col-md-2 col-lg-2" hidden="">
       <a href="#" style="margin-left: 10px;" class="btn btn-primary pull-right" data-toggle="modal" data-target="#modalCrear" onclick="limpiarRespuesta()">Crear</a>    
    </div>

    <div id="importar" class="col-sm-2 col-md-2 col-lg-2" hidden="">
       <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalImportarEducacion">Importar</a>      
    </div>

</div>
<div class="col-lg-12 col-md-12 col-sm-12"><br></div>
<div class="col-lg-12 col-md-12 col-sm-12">
	<div class="panel panel-default">
        <div class="panel-body">
            <div id="tablaeducacion" class="table-responsive">
                <center><h3>Porfavor seleccione un <strong>Departamento</strong> y un <strong>Municipio</strong></h3></center>
            </div>
        </div>
    </div>
</div>

@include('admin.modal.educacion.crear')
@include('admin.modal.educacion.mostrarActualizar')
@include('admin.modal.educacion.importar')
@endsection

@section('javascript')
    <script src="{{ asset('js/admin/main.js') }}"></script>
    <script src="{{ asset('js/admin/educacion.js') }}"></script>
@endsection