<div class="modal fade" id="modalMostrarActualizar" role="dialog">

    <div class="modal-dialog modal-lg">

        <div class="modal-content">

            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Editar salud</h4>
            </div>

            <div id="mostrarActualizar" class="modal-body">

            <form id="formActualizar">

                <input type="text" style="display: none;" id="idS">

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="anio2" class="text-label">Año</label>       
                        <input id="anio2" type="date" class="form-control" required>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12"><br></div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-12 col-md-12 col-sm-12" style="font-size: 18px">
                        <label for="tasVacBCG2" class="text-label"><strong>Vacunación</strong></label>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="tasVacBCG2" class="text-label">BCG</label>       
                        <input id="tasVacBCG2" type="number" pattern="[0-9]+" step="0.1" min="0" placeholder="Tasa de BCG" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="tasVacDPT2" class="text-label">DPT</label>     
                        <input id="tasVacDPT2" type="number" pattern="[0-9]+" step="0.1" min="0" placeholder="Tasa de DPT" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="tasVacHepatitisB2" class="text-label">Hepatitis B</label>       
                        <input id="tasVacHepatitisB2" type="number" pattern="[0-9]+" step="0.1" min="0" placeholder="Tasa de Hepatitis B" class="form-control" required>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="tasVacHIB2" class="text-label">HIB</label>       
                        <input id="tasVacHIB2" type="number" pattern="[0-9]+" step="0.1" min="0" placeholder="Tasa de HIB" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="tasVacPolio2" class="text-label">Polio</label>       
                        <input id="tasVacPolio2" type="number" pattern="[0-9]+" step="0.1" min="0" placeholder="Tasa de Polio" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="tasVacTripleViral2" class="text-label">Triple viral</label>       
                        <input id="tasVacTripleViral2" type="number" pattern="[0-9]+" step="0.1" min="0" placeholder="Tasa de Triple viral" class="form-control" required>
                    </div>
                </div>

               <div class="col-lg-12 col-md-12 col-sm-12"><br></div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-12 col-md-12 col-sm-12" style="font-size: 18px">
                        <label for="difBaMov2" class="text-label"><strong>Discapacidades</strong></label>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="difBaMov2" class="text-label">Dificultad para bañarse o moverse</label>       
                        <input id="difBaMov2" type="number" pattern="[0-9]+" min="0" placeholder="Total" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="difEntApr2" class="text-label">Dificultad para entender o aprender</label>     
                        <input id="difEntApr2" type="number" pattern="[0-9]+" min="0" placeholder="Total" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="totalDis2" class="text-label">Total de población con Discapacidad</label>       
                        <input id="totalDis2" type="number" pattern="[0-9]+" min="0" placeholder="Total" class="form-control" required>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                     <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="difSalirCalle2" class="text-label">Dificultad para salir a la calle sin ayuda o compañia</label>     
                        <input id="difSalirCalle2" type="number" pattern="[0-9]+" min="0" placeholder="Total" class="form-control" required>
                    </div>                    
                     <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="difMovCam2" class="text-label">Dificultad para moverse o para caminar por si              </label>       
                        <input id="difMovCam2" type="number" pattern="[0-9]+" min="0" placeholder="Total" class="form-control" required>
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