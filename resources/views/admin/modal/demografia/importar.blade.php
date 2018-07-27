<div class="modal fade bd-example-modal-lg" id="modalImportarDemografia" role="dialog">

    <div class="modal-dialog modal-lg">

        <div class="modal-content">

            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Importar Demografía</h4>
            </div>
            
            <div id="modalImportarDemografia" class="modal-body" style="border: transparent; overflow-y: auto;">

            <form id="formImportarDemografia" method="POST" action='/admin/guardarArchivoDemografia' enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <center><label for="archivo">Subir datos de un archivo Excel</label>
                  
                <input type="file" name="file" class="form-control-file">
                <br>
                <button class="btn btn-success" type="submit">Importar</button></center>                    
            </form>

            <a href="{{ url('/admin/descargarDemografia') }}" class="btn btn-info">Descargar Archivo</a>   

            <p id="respuesta3" style="display: none;"></p>
            
            </div>

            <div class="modal-footer">
              
            </div>

        </div>

    </div>

</div>