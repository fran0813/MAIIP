{{-- Modal Mostrar/Actualizar --}}
<div class="modal fade" id="modalMostrarActualizar" role="dialog">

    <div class="modal-dialog modal-lg">

         {{-- Modal content --}}
        <div class="modal-content">

            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Editar generalidades y territorio</h4>
            </div>

            <div id="mostrarActualizar" class="modal-body">

            <form id="formActualizar">

                <div id="modalGT">

                </div>

                <br>

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div style="display: none;">
                        <input id="updated_at2" type="date" style="display: none;">
                    </div>

                    &nbsp;&nbsp;<button type="button" class="btn btn-default pull-right" data-dismiss="modal">Cerrar</button> &nbsp;&nbsp;        
                    <input type="submit" value="Guardar Datos Nuevos" class="btn btn-primary pull-right">&nbsp;&nbsp;
                </div>

            </form>

            <p id="respuesta2"></p>

            </div>

            <div class="modal-footer">
              
            </div>

        </div>
  
    </div>

</div>