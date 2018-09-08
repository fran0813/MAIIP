<div class="modal fade" id="modalMostrarActualizar" role="dialog">

    <div class="modal-dialog modal-lg">

        <div class="modal-content">

            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Editar viviendas y servicios públicos</h4>
            </div>

            <div id="mostrarActualizar" class="modal-body">

            <form id="formActualizar">

                <input type="text" style="display: none;" id="idVSP">

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="anio2" class="text-label">Año</label>       
                        <input id="anio2" type="date" class="form-control" required>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12"><br></div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-12 col-md-12 col-sm-12" style="font-size: 18px">
                        <label for="cabViv2" class="text-label"><strong>Viviendas</strong></label>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="cabViv2" class="text-label">Cabecera</label>       
                        <input id="cabViv2" type="number" pattern="[0-9]+" min="0" placeholder="Integer" oninput="calcularTotalCabViv2()" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="rurViv2" class="text-label">Rural</label>     
                        <input id="rurViv2" type="number" pattern="[0-9]+" min="0" placeholder="Integer" oninput="calcularTotalCabViv2()" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="totalViv2" class="text-label">Total</label>       
                        <input id="totalViv2" type="number" pattern="[0-9]+" min="0" placeholder="Integer" disabled="" class="form-control" required>
                    </div>
                </div>

               <div class="col-lg-12 col-md-12 col-sm-12"><br></div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-12 col-md-12 col-sm-12" style="font-size: 18px">
                        <label for="cabHog2" class="text-label"><strong>Hogares</strong></label>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="cabHog2" class="text-label">Cabecera</label>       
                        <input id="cabHog2" type="number" pattern="[0-9]+" min="0" placeholder="Integer" oninput="calcularTotalCabHog2()" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="rurHog2" class="text-label">Rural</label>     
                        <input id="rurHog2" type="number" pattern="[0-9]+" min="0" placeholder="Integer" oninput="calcularTotalCabHog2()" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="totalHog2" class="text-label">Total</label>       
                        <input id="totalHog2" type="number" pattern="[0-9]+" min="0" placeholder="Integer" disabled="" class="form-control" required>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12"><br></div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-12 col-md-12 col-sm-12" style="font-size: 18px">
                        <label for="cabHogViv2" class="text-label"><strong>Hogares por vivienda</strong></label>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="cabHogViv2" class="text-label">Cabecera</label>       
                        <input id="cabHogViv2" type="number" pattern="[0-9]+" step="0.00000000000001" min="0" placeholder="Double" oninput="calcularTotalCabHogViv2()" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="rurHogViv2" class="text-label">Rural</label>     
                        <input id="rurHogViv2" type="number" pattern="[0-9]+" step="0.00000000000001" min="0" placeholder="Double" oninput="calcularTotalCabHogViv2()" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="totalHogViv2" class="text-label">Total</label>       
                        <input id="totalHogViv2" type="number" pattern="[0-9]+" step="0.00000000000001" min="0" placeholder="Double" disabled="" class="form-control" required>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12"><br></div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-12 col-md-12 col-sm-12" style="font-size: 18px">
                        <label for="cabPerHog2" class="text-label"><strong>Personas por hogar</strong></label>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="cabPerHog2" class="text-label">Cabecera</label>       
                        <input id="cabPerHog2" type="number" pattern="[0-9]+" step="0.00000000000001" min="0" placeholder="Double" oninput="calcularTotalCabPerHog2()" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="rurPerHog2" class="text-label">Rural</label>     
                        <input id="rurPerHog2" type="number" pattern="[0-9]+" step="0.00000000000001" min="0" placeholder="Double" oninput="calcularTotalCabPerHog2()" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="totalPerHog2" class="text-label">Total</label>       
                        <input id="totalPerHog2" type="number" pattern="[0-9]+" step="0.00000000000001" min="0" placeholder="Double" disabled="" class="form-control" required>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12"><br></div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-12 col-md-12 col-sm-12" style="font-size: 18px">
                        <label for="cabPerViv2" class="text-label"><strong>Personas por vivienda</strong></label>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="cabPerViv2" class="text-label">Cabecera</label>       
                        <input id="cabPerViv2" type="number" pattern="[0-9]+" step="0.00000000000001" min="0" placeholder="Double" oninput="calcularTotalCabPerViv2()" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="rurPerViv2" class="text-label">Rural</label>     
                        <input id="rurPerViv2" type="number" pattern="[0-9]+" step="0.00000000000001" min="0" placeholder="Double" oninput="calcularTotalCabPerViv2()" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="totalPerViv2" class="text-label">Total</label>       
                        <input id="totalPerViv2" type="number" pattern="[0-9]+" step="0.00000000000001" min="0" placeholder="Double" disabled="" class="form-control" required>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12"><br></div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-12 col-md-12 col-sm-12" style="font-size: 18px">
                        <label for="cabCA2" class="text-label"><strong>Cobertura alcantarillado</strong></label>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="cabCA2" class="text-label">Cabecera</label>       
                        <input id="cabCA2" type="number" pattern="[0-9]+" step="0.00000000000001" min="0" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="centPobCA2" class="text-label">Centros poblados</label>     
                        <input id="centPobCA2" type="number" pattern="[0-9]+" step="0.00000000000001" min="0" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="rurDispCA2" class="text-label">Rural dispersos</label>       
                        <input id="rurDispCA2" type="number" pattern="[0-9]+" step="0.00000000000001" min="0" placeholder="Double" class="form-control" required>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12"><br></div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-12 col-md-12 col-sm-12" style="font-size: 18px">
                        <label for="cabCAs2" class="text-label"><strong>Cobertura aseo</strong></label>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="cabCAs2" class="text-label">Cabecera</label>       
                        <input id="cabCAs2" type="number" pattern="[0-9]+" step="0.00000000000001" min="0" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="centPobCAs2" class="text-label">Centros poblados</label>     
                        <input id="centPobCAs2" type="number" pattern="[0-9]+" step="0.00000000000001" min="0" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="rurDispCAs2" class="text-label">Rural dispersos</label>       
                        <input id="rurDispCAs2" type="number" pattern="[0-9]+" step="0.00000000000001" min="0" placeholder="Double" class="form-control" required>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12"><br></div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-12 col-md-12 col-sm-12" style="font-size: 18px">
                        <label for="cabCG2" class="text-label"><strong>Cobertura gas</strong></label>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="cabCG2" class="text-label">Cabecera</label>       
                        <input id="cabCG2" type="number" pattern="[0-9]+" step="0.00000000000001" min="0" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="centPobCG2" class="text-label">Centros poblados</label>     
                        <input id="centPobCG2" type="number" pattern="[0-9]+" step="0.00000000000001" min="0" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="rurDispCG2" class="text-label">Rural dispersos</label>       
                        <input id="rurDispCG2" type="number" pattern="[0-9]+" step="0.00000000000001" min="0" placeholder="Double" class="form-control" required>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12"><br></div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-12 col-md-12 col-sm-12" style="font-size: 18px">
                        <label for="cabCT2" class="text-label"><strong>Cobertura telefono</strong></label>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="cabCT2" class="text-label">Cabecera</label>       
                        <input id="cabCT2" type="number" pattern="[0-9]+" step="0.00000000000001" min="0" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="centPobCT2" class="text-label">Centros poblados</label>     
                        <input id="centPobCT2" type="number" pattern="[0-9]+" step="0.00000000000001" min="0" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="rurDispCT2" class="text-label">Rural dispersos</label>       
                        <input id="rurDispCT2" type="number" pattern="[0-9]+" step="0.00000000000001" min="0" placeholder="Double" class="form-control" required>
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