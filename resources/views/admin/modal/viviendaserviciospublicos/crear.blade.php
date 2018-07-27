<div class="modal fade bd-example-modal-lg" id="modalCrear" role="dialog">

    <div class="modal-dialog modal-lg">

        <div class="modal-content">

            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Crear vivienda y servicios públicos</h4>
            </div>
            
            <div id="modalCrear" class="modal-body" style="border: transparent; overflow-y: auto;">

            <form id="formCrear">

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="anio" class="text-label">Año</label>       
                        <input id="anio" type="date" class="form-control" required>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12"><br></div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-12 col-md-12 col-sm-12" style="font-size: 18px">
                        <label for="cabViv" class="text-label"><strong>Viviendas</strong></label>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="cabViv" class="text-label">Cabecera</label>       
                        <input id="cabViv" type="number" pattern="[0-9]+" min="0" placeholder="Integer" oninput="calcularTotalCabViv()" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="rurViv" class="text-label">Rural</label>     
                        <input id="rurViv" type="number" pattern="[0-9]+" min="0" placeholder="Integer" oninput="calcularTotalCabViv()" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="totalViv" class="text-label">Total</label>       
                        <input id="totalViv" type="number" pattern="[0-9]+" min="0" placeholder="Integer" disabled="" class="form-control" required>
                    </div>
                </div>

               <div class="col-lg-12 col-md-12 col-sm-12"><br></div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-12 col-md-12 col-sm-12" style="font-size: 18px">
                        <label for="cabHog" class="text-label"><strong>Hogares</strong></label>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="cabHog" class="text-label">Cabecera</label>       
                        <input id="cabHog" type="number" pattern="[0-9]+" min="0" placeholder="Integer" oninput="calcularTotalCabHog()" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="rurHog" class="text-label">Rural</label>     
                        <input id="rurHog" type="number" pattern="[0-9]+" min="0" placeholder="Integer" oninput="calcularTotalCabHog()" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="totalHog" class="text-label">Total</label>       
                        <input id="totalHog" type="number" pattern="[0-9]+" min="0" placeholder="Integer" disabled="" class="form-control" required>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12"><br></div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-12 col-md-12 col-sm-12" style="font-size: 18px">
                        <label for="cabHogViv" class="text-label"><strong>Hogares por vivienda</strong></label>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="cabHogViv" class="text-label">Cabecera</label>       
                        <input id="cabHogViv" type="number" pattern="[0-9]+" step="0.1" min="0" placeholder="Double" oninput="calcularTotalCabHogViv()" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="rurHogViv" class="text-label">Rural</label>     
                        <input id="rurHogViv" type="number" pattern="[0-9]+" step="0.1" min="0" placeholder="Double" oninput="calcularTotalCabHogViv()" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="totalHogViv" class="text-label">Total</label>       
                        <input id="totalHogViv" type="number" pattern="[0-9]+" step="0.1" min="0" placeholder="Double" disabled="" class="form-control" required>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12"><br></div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-12 col-md-12 col-sm-12" style="font-size: 18px">
                        <label for="cabPerHog" class="text-label"><strong>Personas por hogar</strong></label>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="cabPerHog" class="text-label">Cabecera</label>       
                        <input id="cabPerHog" type="number" pattern="[0-9]+" step="0.1" min="0" placeholder="Double" oninput="calcularTotalCabPerHog()" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="rurPerHog" class="text-label">Rural</label>     
                        <input id="rurPerHog" type="number" pattern="[0-9]+" step="0.1" min="0" placeholder="Double" oninput="calcularTotalCabPerHog()" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="totalPerHog" class="text-label">Total</label>       
                        <input id="totalPerHog" type="number" pattern="[0-9]+" step="0.1" min="0" placeholder="Double" disabled="" class="form-control" required>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12"><br></div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-12 col-md-12 col-sm-12" style="font-size: 18px">
                        <label for="cabPerViv" class="text-label"><strong>Personas por vivienda</strong></label>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="cabPerViv" class="text-label">Cabecera</label>       
                        <input id="cabPerViv" type="number" pattern="[0-9]+" step="0.1" min="0" placeholder="Double" oninput="calcularTotalCabPerViv()" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="rurPerViv" class="text-label">Rural</label>     
                        <input id="rurPerViv" type="number" pattern="[0-9]+" step="0.1" min="0" placeholder="Double" oninput="calcularTotalCabPerViv()" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="totalPerViv" class="text-label">Total</label>       
                        <input id="totalPerViv" type="number" pattern="[0-9]+" step="0.1" min="0" placeholder="Double" disabled="" class="form-control" required>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12"><br></div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-12 col-md-12 col-sm-12" style="font-size: 18px">
                        <label for="cabCA" class="text-label"><strong>Cobertura alcantarillado</strong></label>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="cabCA" class="text-label">Cabecera</label>       
                        <input id="cabCA" type="number" pattern="[0-9]+" step="0.1" min="0" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="centPobCA" class="text-label">Centros poblados</label>     
                        <input id="centPobCA" type="number" pattern="[0-9]+" step="0.1" min="0" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="rurDispCA" class="text-label">Rural dispersos</label>       
                        <input id="rurDispCA" type="number" pattern="[0-9]+" step="0.1" min="0" placeholder="Double" class="form-control" required>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12"><br></div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-12 col-md-12 col-sm-12" style="font-size: 18px">
                        <label for="cabCAs" class="text-label"><strong>Cobertura aseo</strong></label>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="cabCAs" class="text-label">Cabecera</label>       
                        <input id="cabCAs" type="number" pattern="[0-9]+" step="0.1" min="0" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="centPobCAs" class="text-label">Centros poblados</label>     
                        <input id="centPobCAs" type="number" pattern="[0-9]+" step="0.1" min="0" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="rurDispCAs" class="text-label">Rural dispersos</label>       
                        <input id="rurDispCAs" type="number" pattern="[0-9]+" step="0.1" min="0" placeholder="Double" class="form-control" required>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12"><br></div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-12 col-md-12 col-sm-12" style="font-size: 18px">
                        <label for="cabCG" class="text-label"><strong>Cobertura gas</strong></label>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="cabCG" class="text-label">Cabecera</label>       
                        <input id="cabCG" type="number" pattern="[0-9]+" step="0.1" min="0" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="centPobCG" class="text-label">Centros poblados</label>     
                        <input id="centPobCG" type="number" pattern="[0-9]+" step="0.1" min="0" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="rurDispCG" class="text-label">Rural dispersos</label>       
                        <input id="rurDispCG" type="number" pattern="[0-9]+" step="0.1" min="0" placeholder="Double" class="form-control" required>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12"><br></div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-12 col-md-12 col-sm-12" style="font-size: 18px">
                        <label for="cabCT" class="text-label"><strong>Cobertura telefono</strong></label>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="cabCT" class="text-label">Cabecera</label>       
                        <input id="cabCT" type="number" pattern="[0-9]+" step="0.1" min="0" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="centPobCT" class="text-label">Centros poblados</label>     
                        <input id="centPobCT" type="number" pattern="[0-9]+" step="0.1" min="0" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="rurDispCT" class="text-label">Rural dispersos</label>       
                        <input id="rurDispCT" type="number" pattern="[0-9]+" step="0.1" min="0" placeholder="Double" class="form-control" required>
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