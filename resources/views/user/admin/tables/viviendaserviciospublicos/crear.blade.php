{{-- Modal Crear --}}
<div class="modal fade bd-example-modal-lg" id="modalCrear" role="dialog">

    <div class="modal-dialog modal-lg">

         {{-- Modal content --}}
        <div class="modal-content">

            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title"> Crear Generalidades y territorios</h4>
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
                        <label for="cabViv" class="text-label"><strong>Viviendas</strong></label>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="cabViv" class="text-label">Cabecera</label>       
                        <input id="cabViv" type="text" placeholder="cabecera viviendas" oninput="calcularTotalCabViv()" class="form-control">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="rurViv" class="text-label">Rural</label>     
                        <input id="rurViv" type="text" placeholder="Rural viviendas" oninput="calcularTotalCabViv()" class="form-control">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="totalViv" class="text-label">Total</label>       
                        <input id="totalViv" type="text" placeholder="Total" disabled="" class="form-control">
                    </div>
                </div>

               <div class="col-lg-12 col-md-12 col-sm-12"><br></div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-12 col-md-12 col-sm-12" style="font-size: 18px">
                        <label for="cabHog" class="text-label"><strong>Hogares</strong></label>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="cabHog" class="text-label">Cabecera</label>       
                        <input id="cabHog" type="text" placeholder="cabecera hogares" oninput="calcularTotalCabHog()" class="form-control">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="rurHog" class="text-label">Rural</label>     
                        <input id="rurHog" type="text" placeholder="Rural hogares" oninput="calcularTotalCabHog()" class="form-control">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="totalHog" class="text-label">Total</label>       
                        <input id="totalHog" type="text" placeholder="Total" disabled="" class="form-control">
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12"><br></div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-12 col-md-12 col-sm-12" style="font-size: 18px">
                        <label for="cabHogViv" class="text-label"><strong>Hogares por vivienda</strong></label>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="cabHogViv" class="text-label">Cabecera</label>       
                        <input id="cabHogViv" type="text" placeholder="cabecera hogares por vivienda" oninput="calcularTotalCabHogViv()" class="form-control">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="rurHogViv" class="text-label">Rural</label>     
                        <input id="rurHogViv" type="text" placeholder="Rural hogares por vivienda" oninput="calcularTotalCabHogViv()" class="form-control">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="totalHogViv" class="text-label">Total</label>       
                        <input id="totalHogViv" type="text" placeholder="Total" disabled="" class="form-control">
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12"><br></div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-12 col-md-12 col-sm-12" style="font-size: 18px">
                        <label for="cabPerHog" class="text-label"><strong>Personas por hogar</strong></label>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="cabPerHog" class="text-label">Cabecera</label>       
                        <input id="cabPerHog" type="text" placeholder="cabecera personas por hogar" oninput="calcularTotalCabPerHog()" class="form-control">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="rurPerHog" class="text-label">Rural</label>     
                        <input id="rurPerHog" type="text" placeholder="Rural personas por hogar" oninput="calcularTotalCabPerHog()" class="form-control">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="totalPerHog" class="text-label">Total</label>       
                        <input id="totalPerHog" type="text" placeholder="Total" disabled="" class="form-control">
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12"><br></div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-12 col-md-12 col-sm-12" style="font-size: 18px">
                        <label for="cabPerViv" class="text-label"><strong>Personas por vivienda</strong></label>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="cabPerViv" class="text-label">Cabecera</label>       
                        <input id="cabPerViv" type="text" placeholder="cabecera personas por vivienda" oninput="calcularTotalCabPerViv()" class="form-control">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="rurPerViv" class="text-label">Rural</label>     
                        <input id="rurPerViv" type="text" placeholder="Rural personas por vivienda" oninput="calcularTotalCabPerViv()" class="form-control">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="totalPerViv" class="text-label">Total</label>       
                        <input id="totalPerViv" type="text" placeholder="Total" disabled="" class="form-control">
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12"><br></div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-12 col-md-12 col-sm-12" style="font-size: 18px">
                        <label for="cabCA" class="text-label"><strong>Cobertura alcantarillado</strong></label>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="cabCA" class="text-label">Cabecera</label>       
                        <input id="cabCA" type="text" placeholder="Cabecera" class="form-control">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="centPobCA" class="text-label">Centros poblados</label>     
                        <input id="centPobCA" type="text" placeholder="Centros poblados" class="form-control">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="rurDispCA" class="text-label">Rural dispersos</label>       
                        <input id="rurDispCA" type="text" placeholder="Rural dispersos" class="form-control">
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12"><br></div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-12 col-md-12 col-sm-12" style="font-size: 18px">
                        <label for="cabCA" class="text-label"><strong>Cobertura aseo</strong></label>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="cabCAs" class="text-label">Cabecera</label>       
                        <input id="cabCAs" type="text" placeholder="Cabecera" class="form-control">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="centPobCAs" class="text-label">Centros poblados</label>     
                        <input id="centPobCAs" type="text" placeholder="Centros poblados" class="form-control">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="rurDispCAs" class="text-label">Rural dispersos</label>       
                        <input id="rurDispCAs" type="text" placeholder="Rural dispersos" class="form-control">
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12"><br></div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-12 col-md-12 col-sm-12" style="font-size: 18px">
                        <label for="cabCA" class="text-label"><strong>Cobertura gas</strong></label>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="cabCG" class="text-label">Cabecera</label>       
                        <input id="cabCG" type="text" placeholder="Cabecera" class="form-control">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="centPobCG" class="text-label">Centros poblados</label>     
                        <input id="centPobCG" type="text" placeholder="Centros poblados" class="form-control">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="rurDispCG" class="text-label">Rural dispersos</label>       
                        <input id="rurDispCG" type="text" placeholder="Rural dispersos" class="form-control">
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12"><br></div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-12 col-md-12 col-sm-12" style="font-size: 18px">
                        <label for="cabCA" class="text-label"><strong>Cobertura telefono</strong></label>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="cabCT" class="text-label">Cabecera</label>       
                        <input id="cabCT" type="text" placeholder="Cabecera" class="form-control">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="centPobCT" class="text-label">Centros poblados</label>     
                        <input id="centPobCT" type="text" placeholder="Centros poblados" class="form-control">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="rurDispCT" class="text-label">Rural dispersos</label>       
                        <input id="rurDispCT" type="text" placeholder="Rural dispersos" class="form-control">
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