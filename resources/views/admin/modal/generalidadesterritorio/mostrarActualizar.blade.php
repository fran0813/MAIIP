<div class="modal fade" id="modalMostrarActualizar" role="dialog">

    <div class="modal-dialog modal-lg">

        <div class="modal-content">

            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Editar generalidades y territorio</h4>
            </div>

            <div id="mostrarActualizar" class="modal-body">

            <form id="formActualizar">

                <input type="text" style="display: none;" id="idGT">

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="anio2" class="text-label">Año</label>       
                        <input id="anio2" type="date" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="temperatura2" class="text-label">Temperatura</label>        
                        <input id="temperatura2" type="number" pattern="[0-9]+" min="0" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="alturaNivMar2" class="text-label">Altura sobre el nivel del mar</label>     
                        <input id="alturaNivMar2" type="number" pattern="[0-9]+" min="0" placeholder="Integer" class="form-control" required>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12"><br></div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-12 col-md-12 col-sm-12" style="font-size: 18px">
                        <label for="ruralG2" class="text-label"><strong>Generalidades</strong></label>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="ruralG2" class="text-label">Rural</label>       
                        <input id="ruralG2" type="number" pattern="[0-9]+" min="0" step="0.00000000000001" placeholder="Double" oninput="calcularTotalG2()" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="urbanoG2" class="text-label">Urbano</label>     
                        <input id="urbanoG2" type="number" pattern="[0-9]+" min="0" step="0.00000000000001" placeholder="Double" oninput="calcularTotalG2()" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="totalG2" class="text-label">Total</label>       
                        <input id="totalG2" type="number" pattern="[0-9]+" min="0" step="0.00000000000001" placeholder="Double" disabled class="form-control" required>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12"><br></div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-12 col-md-12 col-sm-12" style="font-size: 18px">
                        <label for="constRural2" class="text-label"><strong>Territorio</strong></label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="col-lg-12 col-md-12 col-sm-12" style="font-size: 16px; padding-left: 0px; padding-right: 0px">
                                <label for="constRural2" class="text-label"><i class="fa fa-chevron-right" aria-hidden="true"></i> Construida</label>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6" style="padding-left: 0px;">
                                <label for="constRural2" class="text-label">Rural</label>       
                                <input id="constRural2" type="number" pattern="[0-9]+" min="0" placeholder="Integer" oninput="calcularConstTotal2()" class="form-control" required>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6" style="padding-right: 0px">
                                <label for="constUrbano2" class="text-label">Urbano</label>     
                                <input id="constUrbano2" type="number" pattern="[0-9]+" min="0" placeholder="Integer" oninput="calcularConstTotal2()" class="form-control" required>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12" style="padding-left: 0px; padding-right: 0px"><br>
                                <label for="constTotal2" class="text-label">Total</label>       
                                <input id="constTotal2" type="number" pattern="[0-9]+" min="0" placeholder="Integer" disabled class="form-control" required>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="col-lg-12 col-md-12 col-sm-12" style="font-size: 16px; padding-left: 0px; padding-right: 0px">
                                <label for="terrRural2" class="text-label"><i class="fa fa-chevron-right" aria-hidden="true"></i> Terreno</label>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6" style="padding-left: 0px;">
                                <label for="terrRural2" class="text-label" >Rural</label>        
                                <input id="terrRural2" type="number" pattern="[0-9]+" min="0" step="0.00000000000001" placeholder="Double" oninput="calcularTerrTotal2()" class="form-control" required>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6" style="padding-right: 0px">
                                <label for="terrUrbano2" class="text-label" >Urbano</label>      
                                <input id="terrUrbano2" type="number" pattern="[0-9]+" min="0" step="0.00000000000001" placeholder="Double" oninput="calcularTerrTotal2()" class="form-control" required>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12" style="padding-left: 0px; padding-right: 0px"><br>
                                <label for="terrTotal2" class="text-label" >Total</label>        
                                <input id="terrTotal2" type="number" pattern="[0-9]+" min="0" step="0.00000000000001" placeholder="Double" disabled class="form-control" required>
                            </div>
                        </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12"><br></div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-12 col-md-12 col-sm-12" style="font-size: 18px">
                        <label for="ruralP2" class="text-label">Predios</label>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="ruralP2" class="text-label">Rural</label>       
                        <input id="ruralP2" type="number" pattern="[0-9]+" min="0" placeholder="Integer" oninput="calcularTotalP2()" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="urbanoP2" class="text-label">Urbano</label>     
                        <input id="urbanoP2" type="number" pattern="[0-9]+" min="0" placeholder="Integer" oninput="calcularTotalP2()" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="totalP2" class="text-label">Total</label>       
                        <input id="totalP2" type="number" pattern="[0-9]+" min="0" placeholder="Integer" disabled class="form-control" required>
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