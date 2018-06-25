@extends('layouts.adminBase')

@section('content')

<div class="col-sm-12 col-md-12 collg-12">
    
    @include('admin.section.adminSelect')
    
    <div id="crear" class="col-sm-2 col-md-2 col-lg-2" hidden="">
       <a href="#" style="margin-left: 10px;" class="btn btn-primary pull-right" data-toggle="modal" data-target="#modalCrear" onclick="limpiarRespuesta()">Crear</a> 
       <a href="#" class="btn btn-primary pull-right" data-toggle="modal" data-target="#modalImportarDemografia">Importar</a>      
    </div>

</div>
<div class="col-lg-12 col-md-12 col-sm-12"><br></div>
<div class="col-lg-12 col-md-12 col-sm-12">
	<div class="panel panel-default">
        <div class="panel-body">
            <div id="tablaDemografia" class="table-responsive">
                <center><h3>Porfavor seleccione un <strong>Departamento</strong> y un <strong>Municipio</strong></h3></center>
            </div>
        </div>
    </div>
</div>

@include('admin.modal.demografia.crear')
@include('admin.modal.demografia.mostrarActualizar')
@include('admin.modal.demografia.importar')
@endsection

@section('javascript')
    <script src="{{ asset('js/admin/main.js') }}"></script>
    <script src="{{ asset('js/admin/demografia.js') }}"></script>
@endsection