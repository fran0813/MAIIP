{{-- Modal Mostrar/Actualizar --}}
<div class="modal fade" id="modalMostrarActualizar" role="dialog">

    <div class="modal-dialog">

         {{-- Modal content --}}
        <div class="modal-content">

            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Editar Generalidades y territorio</h4>
            </div>

            <div id="mostrarActualizar" class="modal-body">

            <form id="formActualizar">

                <div id="modalGT">

                </div>

                <br>

                <input id="updated_at2" type="date" style="display: none;">

                <input type="submit" value="submit">

            </form>

            <p id="respuesta2"></p>

            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>

        </div>
  
    </div>

</div>