{{-- Modal Crear --}}
<div class="modal fade bd-example-modal-lg" id="modalCrear" role="dialog">

    <div class="modal-dialog modal-lg">

         {{-- Modal content --}}
        <div class="modal-content">

            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title"> Crear salud</h4>
            </div>
            
            <div id="modalCrear" class="modal-body">

            <form id="formCrear">

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="anio" class="text-label">Año</label>       
                        <input id="anio" type="date" class="form-control">
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12"><br></div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-12 col-md-12 col-sm-12" style="font-size: 18px">
                        <label for="tasVacBCG" class="text-label"><strong>Vacunación</strong></label>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="tasVacBCG" class="text-label">BCG</label>       
                        <input id="tasVacBCG" type="text" placeholder="Tasa de BCG" class="form-control">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="tasVacDPT" class="text-label">DPT</label>     
                        <input id="tasVacDPT" type="text" placeholder="Tasa de DPT" class="form-control">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="tasVacHepatitisB" class="text-label">Hepatitis B</label>       
                        <input id="tasVacHepatitisB" type="text" placeholder="Tasa de Hepatitis B" class="form-control">
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="tasVacHIB" class="text-label">HIB</label>       
                        <input id="tasVacHIB" type="text" placeholder="Tasa de HIB" class="form-control">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="tasVacPolio" class="text-label">Polio</label>       
                        <input id="tasVacPolio" type="text" placeholder="Tasa de Polio" class="form-control">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="tasVacTripleViral" class="text-label">Triple viral</label>       
                        <input id="tasVacTripleViral" type="text" placeholder="Tasa de Triple viral" class="form-control">
                    </div>
                </div>

               <div class="col-lg-12 col-md-12 col-sm-12"><br></div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-12 col-md-12 col-sm-12" style="font-size: 18px">
                        <label for="difBaMov" class="text-label"><strong>Discapacidades</strong></label>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="difBaMov" class="text-label">Dificultad para bañarse o moverse</label>       
                        <input id="difBaMov" type="text" placeholder="Total" class="form-control">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="difEntApr" class="text-label">Dificultad para entender o aprender</label>     
                        <input id="difEntApr" type="text" placeholder="Total" class="form-control">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="totalDis" class="text-label">Total de población con Discapacidad</label>       
                        <input id="totalDis" type="text" placeholder="Total" class="form-control">
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                     <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="difSalirCalle" class="text-label">Dificultad para salir a la calle sin ayuda o compañia</label>     
                        <input id="difSalirCalle" type="text" placeholder="Total" class="form-control">
                    </div>                    
                     <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="difMovCam" class="text-label">Dificultad para moverse o para caminar por si              </label>       
                        <input id="difMovCam" type="text" placeholder="Total" class="form-control">
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12"><br></div> 

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div style="display: none;">
                        <input id="created_at" type="date">
                        <input id="updated_at" type="date">
                    </div>
                                
                    &nbsp;&nbsp;<button type="button" class="btn btn-default pull-right" data-dismiss="modal">Cerrar</button> &nbsp;&nbsp;        
                    <input type="submit" value="Guardar Datos Nuevos" class="btn btn-primary pull-right">&nbsp;&nbsp;
                </div>

            </form>

            <p id="respuesta"></p>
        
            </div>

            <div class="modal-footer">
              
            </div>

        </div>

    </div>

</div>