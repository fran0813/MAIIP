<div class="modal fade fade bd-example-modal-lg" id="modalMostrarActualizar" role="dialog">

    <div class="modal-dialog modal-lg">

        <div class="modal-content">

            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Editar Departamento</h4>
            </div>

            <div id="mostrarActualizar" class="modal-body">

            <form id="formActualizar">

                <input type="text" style="display: none;" id="id">

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <label for="codigoD2" class="text-label">Código departamental</label>     
                        <input id="codigoD2" type="number" pattern="[0-9]+" min="0" placeholder="Codígo departamental" class="form-control" required>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <label for="nombre2" class="text-label">nombre</label>     
                        <input id="nombre2" type="text" placeholder="nombre" class="form-control" required>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12"><br></div>  

                <div class="col-lg-12 col-md-12 col-sm-12">                   
                    &nbsp;&nbsp;<button type="button" class="btn btn-default pull-right" data-dismiss="modal">Cerrar</button> &nbsp;&nbsp;        
                    <input type="submit" value="guardar" class="btn btn-primary pull-right">&nbsp;&nbsp;
                </div>

            </form>

            <p id="respuesta2" style="display: none;"></p>

            </div>

            <div class="modal-footer">
              
            </div>

        </div>
  
    </div>

</div>