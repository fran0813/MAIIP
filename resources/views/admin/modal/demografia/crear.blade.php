<div class="modal fade bd-example-modal-lg" id="modalCrear" role="dialog">

    <div class="modal-dialog modal-lg">

        <div class="modal-content">

            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Crear demografías</h4>
            </div>
            
            <div id="modalCrear" class="modal-body" style="border: transparent; overflow-y: auto;">

            <form id="formCrear">

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-5 col-md-5 col-sm-5">
                        <label for="anio" class="text-label">Año</label>       
                        <input id="anio" type="date" oninput="calcularCrecPob()" class="form-control" required>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-7">
                        <label for="pobEdadTrabajar" class="text-label">Población en edad de trabajar</label>        
                        <input id="pobEdadTrabajar" type="number" pattern="[0-9]+" min="0" placeholder="Integer" oninput="calcularCrecPob()" class="form-control" required>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12"><br></div> 

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <label for="pobPotActiva" class="text-label">Población activa</label>     
                        <input id="pobPotActiva" type="number" pattern="[0-9]+" min="0" placeholder="Integer" class="form-control" required>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <label for="pobPotInactiva" class="text-label">Población inactiva</label>     
                        <input id="pobPotInactiva" type="number" pattern="[0-9]+" min="0" placeholder="Integer" class="form-control" required>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12"><br></div> 

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <label for="numPerMen" class="text-label">Numero de personas menores</label>     
                        <input id="numPerMen" type="number" pattern="[0-9]+" min="0" placeholder="Integer" class="form-control" required>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <label for="numPerMay" class="text-label">Numero de personas mayores</label>     
                        <input id="numPerMay" type="number" pattern="[0-9]+" min="0" placeholder="Integer" class="form-control" required>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12"><br></div> 

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <label for="numPerInd" class="text-label">Numero de personas independientes</label>     
                        <input id="numPerInd" type="number" pattern="[0-9]+" min="0" placeholder="Integer" class="form-control" required>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <label for="numPerDep" class="text-label">Numero de personas dependientes</label>     
                        <input id="numPerDep" type="number" pattern="[0-9]+" min="0" placeholder="Integer" class="form-control" required>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12"><br></div> 

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <label for="pobHom" class="text-label">Población de hombres</label>     
                        <input id="pobHom" type="number" pattern="[0-9]+" min="0" placeholder="Integer" class="form-control" required>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <label for="pobMuj" class="text-label">Población de mujeres</label>     
                        <input id="pobMuj" type="number" pattern="[0-9]+" min="0" placeholder="Integer" class="form-control" required>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12"><br></div> 

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="pobZonCab" class="text-label">Población zona cabecera</label>     
                        <input id="pobZonCab" type="number" pattern="[0-9]+" min="0" placeholder="Integer" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="pobZonRes" class="text-label">Población zona resto</label>     
                        <input id="pobZonRes" type="number" pattern="[0-9]+" min="0" placeholder="Integer" oninput="calcularIndRuralidad()" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="indRuralidad" class="text-label">Indice de ruralidad (%)</label>     
                        <input id="indRuralidad" type="number" pattern="[0-9]+" min="0" placeholder="Integer" disabled="" class="form-control" required>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12"><br></div> 

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <label for="pobTotal" class="text-label">Población total</label>     
                        <input id="pobTotal" type="number" pattern="[0-9]+" min="0" placeholder="Integer" oninput="calcularIndRuralidad()" class="form-control" required>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">                    
                        <label for="crecPob" class="text-label">Crecimiento poblacional (%)</label>     
                        <input id="crecPob" type="number" pattern="[0-9]+" min="0" placeholder="Integer" disabled="" class="form-control" required>               
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12"><br></div> 

                <div class="col-lg-12 col-md-12 col-sm-12">                   
                    &nbsp;&nbsp;<button type="button" class="btn btn-default pull-right" data-dismiss="modal">Cerrar</button> &nbsp;&nbsp;        
                    <input type="submit" value="guardar" class="btn btn-primary pull-right">&nbsp;&nbsp;
                </div>

            </form>

            <p id="respuesta" style="display: none;"></p>
            
            </div>

            <div class="modal-footer">
              
            </div>

        </div>

    </div>

</div>