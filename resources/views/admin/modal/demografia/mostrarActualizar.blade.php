<div class="modal fade fade bd-example-modal-lg" id="modalMostrarActualizar" role="dialog">

    <div class="modal-dialog modal-lg">

        <div class="modal-content">

            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Editar demografías</h4>
            </div>

            <div id="mostrarActualizar" class="modal-body">

            <form id="formActualizar">

                <input type="text" style="display: none;" id="idD">

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-5 col-md-5 col-sm-5">
                        <label for="anio2" class="text-label">Año</label>       
                        <input id="anio2" type="date" oninput="calcularCrecPob2()" class="form-control" required>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-7">
                        <label for="pobEdadTrabajar2" class="text-label">Población en edad de trabajar</label>        
                        <input id="pobEdadTrabajar2" type="number" pattern="[0-9]+" min="0" placeholder="Integer" oninput="calcularCrecPob2()" class="form-control" required>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12"><br></div> 

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <label for="pobPotActiva2" class="text-label">Población activa</label>     
                        <input id="pobPotActiva2" type="number" pattern="[0-9]+" min="0" placeholder="Integer" class="form-control" required>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <label for="pobPotInactiva2" class="text-label">Población inactiva</label>     
                        <input id="pobPotInactiva2" type="number" pattern="[0-9]+" min="0" placeholder="Integer" class="form-control" required>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12"><br></div> 

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <label for="numPerMen2" class="text-label">Numero de personas menores</label>     
                        <input id="numPerMen2" type="number" pattern="[0-9]+" min="0" placeholder="Integer" class="form-control" required>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <label for="numPerMay2" class="text-label">Numero de personas mayores</label>     
                        <input id="numPerMay2" type="number" pattern="[0-9]+" min="0" placeholder="Integer" class="form-control" required>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12"><br></div> 

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <label for="numPerInd2" class="text-label">Numero de personas independientes</label>     
                        <input id="numPerInd2" type="number" pattern="[0-9]+" min="0" placeholder="Integer" class="form-control" required>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <label for="numPerDep2" class="text-label">Numero de personas dependientes</label>     
                        <input id="numPerDep2" type="number" pattern="[0-9]+" min="0" placeholder="Integer" class="form-control" required>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12"><br></div> 

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <label for="pobHom2" class="text-label">Población de hombres</label>     
                        <input id="pobHom2" type="number" pattern="[0-9]+" min="0" placeholder="Integer" class="form-control" required>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <label for="pobMuj2" class="text-label">Población de mujeres</label>     
                        <input id="pobMuj2" type="number" pattern="[0-9]+" min="0" placeholder="Integer" class="form-control" required>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12"><br></div> 

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="pobZonCab2" class="text-label">Población zona cabecera</label>     
                        <input id="pobZonCab2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Integer" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="pobZonRes2" class="text-label">Población zona resto</label>     
                        <input id="pobZonRes2" type="number" pattern="[0-9]+" min="0" placeholder="Integer" oninput="calcularIndRuralidad2()" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="indRuralidad2" class="text-label">Indice de ruralidad (%)</label>     
                        <input id="indRuralidad2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" disabled="" class="form-control" required>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12"><br></div> 

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <label for="pobTotal2" class="text-label">Población total</label>     
                        <input id="pobTotal2" type="number" pattern="[0-9]+" min="0" placeholder="Integer" oninput="calcularIndRuralidad2()" class="form-control" required>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">                    
                        <label for="crecPob2" class="text-label">Crecimiento poblacional (%)</label>     
                        <input id="crecPob2" type="number" pattern="[0-9]+" min="0" placeholder="Double" disabled="" class="form-control" required>               
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