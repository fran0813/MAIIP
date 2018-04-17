<div class="modal fade bd-example-modal-lg" id="modalCrear" role="dialog">

    <div class="modal-dialog modal-lg">

        <div class="modal-content">

            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Crear generalidades y territorios</h4>
            </div>
            
            <div id="modalCrear" class="modal-body" style="border: transparent; overflow-y: auto;">

            <form id="formCrear">

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="anio" class="text-label">Año</label>       
                        <input id="anio" type="date" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="temperatura" class="text-label">Temperatura</label>        
                        <input id="temperatura" type="number" pattern="[0-9]+" min="0" placeholder="Temperatura" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="alturaNivMar" class="text-label">Altura sobre el nivel del mar</label>     
                        <input id="alturaNivMar" type="number" pattern="[0-9]+" min="0" placeholder="Altura sobre el mar" class="form-control" required>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12"><br></div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-12 col-md-12 col-sm-12" style="font-size: 18px">
                        <label for="ruralG" class="text-label"><strong>Generalidades</strong></label>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="ruralG" class="text-label">Rural</label>       
                        <input id="ruralG" type="number" pattern="[0-9]+" min="0" placeholder="Rural" oninput="calcularTotalG()" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="urbanoG" class="text-label">Urbano</label>     
                        <input id="urbanoG" type="number" pattern="[0-9]+" min="0" placeholder="Urbano" oninput="calcularTotalG()" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="totalG" class="text-label">Total</label>       
                        <input id="totalG" type="number" pattern="[0-9]+" min="0" placeholder="Total" disabled class="form-control" required>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12"><br></div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-12 col-md-12 col-sm-12" style="font-size: 18px">
                        <label for="constRural" class="text-label"><strong>Territorio</strong></label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="col-lg-12 col-md-12 col-sm-12" style="font-size: 16px; padding-left: 0px; padding-right: 0px">
                                <label for="constRural" class="text-label"><i class="fa fa-chevron-right" aria-hidden="true"></i> Construida</label>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6" style="padding-left: 0px;">
                                <label for="constRural" class="text-label">Rural</label>       
                                <input id="constRural" type="number" pattern="[0-9]+" min="0" placeholder="Rural" oninput="calcularConstTotal()" class="form-control" required>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6" style="padding-right: 0px">
                                <label for="constUrbano" class="text-label">Urbano</label>     
                                <input id="constUrbano" type="number" pattern="[0-9]+" min="0" placeholder="Urbano" oninput="calcularConstTotal()" class="form-control" required>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12" style="padding-left: 0px; padding-right: 0px"><br>
                                <label for="constTotal" class="text-label">Total</label>       
                                <input id="constTotal" type="number" pattern="[0-9]+" min="0" placeholder="Total" disabled class="form-control" required>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="col-lg-12 col-md-12 col-sm-12" style="font-size: 16px; padding-left: 0px; padding-right: 0px">
                                <label for="terrRural" class="text-label"><i class="fa fa-chevron-right" aria-hidden="true"></i> Terreno</label>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6" style="padding-left: 0px;">
                                <label for="terrRural" class="text-label" >Rural</label>        
                                <input id="terrRural" type="number" pattern="[0-9]+" min="0" placeholder="Rural" oninput="calcularTerrTotal()" class="form-control" required>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6" style="padding-right: 0px">
                                <label for="terrUrbano" class="text-label" >Urbano</label>      
                                <input id="terrUrbano" type="number" pattern="[0-9]+" min="0" placeholder="Urbano" oninput="calcularTerrTotal()" class="form-control" required>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12" style="padding-left: 0px; padding-right: 0px"><br>
                                <label for="terrTotal" class="text-label" >Total</label>        
                                <input id="terrTotal" type="number" pattern="[0-9]+" min="0" placeholder="Total" disabled class="form-control" required>
                            </div>
                        </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12"><br></div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-12 col-md-12 col-sm-12" style="font-size: 18px">
                        <label for="ruralP" class="text-label">Predios</label>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="ruralP" class="text-label">Rural</label>       
                        <input id="ruralP" type="number" pattern="[0-9]+" min="0" placeholder="Rural" oninput="calcularTotalP()" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="urbanoP" class="text-label">Urbano</label>     
                        <input id="urbanoP" type="number" pattern="[0-9]+" min="0" placeholder="Urbano" oninput="calcularTotalP()" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="totalP" class="text-label">Total</label>       
                        <input id="totalP" type="number" pattern="[0-9]+" min="0" placeholder="Total" disabled class="form-control" required>
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