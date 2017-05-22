{{-- Modal Mostrar/Actualizar --}}
<div class="modal fade fade bd-example-modal-lg" id="modalMostrarActualizar" role="dialog">

    <div class="modal-dialog modal-lg">

         {{-- Modal content --}}
        <div class="modal-content">

            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Editar educación</h4>
            </div>

            <div id="mostrarActualizar" class="modal-body">

            <form id="formActualizar">

                <div id="modalE">

                </div>

                <br>

                <input id="updated_at2" type="date" style="display: none;">
                
                <div class="col-lg-12 col-md-12 col-sm-12"><br></div> 

                <div class="col-lg-12 col-md-12 col-sm-12">                    
                    &nbsp;&nbsp;<button type="button" class="btn btn-default pull-right" data-dismiss="modal">Cerrar</button> &nbsp;&nbsp;        
                    <input type="submit" value="Actualizar Datos" class="btn btn-primary pull-right">&nbsp;&nbsp;

                </div>

            </form>

            <p id="respuesta2"></p>

            </div>

            <div class="modal-footer">
              
            </div>

        </div>
  
    </div>

</div>