
@extends('layouts.adminBase')

@section('content')

<div class="col-sm-12 col-md-12 collg-12">
        
    <div id="crear" class="col-sm-2 col-md-2 col-lg-2" hidden="">
       <a href="#" style="margin-left: 10px;" class="btn btn-primary" data-toggle="modal" data-target="#modalCrear" onclick="limpiarRespuesta()">Crear</a> 
    </div>

    <div id="importar" class="col-sm-2 col-md-2 col-lg-2" hidden="">
       <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalImportarDepartamento">Importar</a>      
    </div>

</div>
<div class="col-lg-12 col-md-12 col-sm-12"><br></div>
<div class="col-lg-12 col-md-12 col-sm-12">
	<div class="panel panel-default">
        <div class="panel-body">
            <div id="tablaDepartamento" class="table-responsive">
                {{-- <center><h3>Porfavor seleccione un <strong>Departamento</strong></center> --}}
            </div>
        </div>
    </div>
</div>

@include('admin.modal.departamento.crear')
@include('admin.modal.departamento.mostrarActualizar')
@include('admin.modal.departamento.importar')
@endsection

@section('javascript')
    <script src="{{ asset('js/admin/main.js') }}"></script>
    <script src="{{ asset('js/admin/departamento.js') }}"></script>
@endsection