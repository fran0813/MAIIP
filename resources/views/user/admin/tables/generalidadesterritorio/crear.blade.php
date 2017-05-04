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
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="temperatura" class="text-label">Temperatura</label>        
                        <input id="temperatura" type="text" placeholder="Temperatura" class="form-control">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="alturaNivMar" class="text-label">Altura sobre el nivel del mar</label>     
                        <input id="alturaNivMar" type="text" placeholder="Altura sobre el mar" class="form-control">
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12"><br></div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-12 col-md-12 col-sm-12" style="font-size: 18px">
                        <label for="ruralG" class="text-label"><strong>Generalidades</strong></label>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="ruralG" class="text-label">Rural</label>       
                        <input id="ruralG" type="text" placeholder="Rural" oninput="calcularTotalG()" class="form-control">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="urbanoG" class="text-label">Urbano</label>     
                        <input id="urbanoG" type="text" placeholder="Urbano" oninput="calcularTotalG()" class="form-control">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="totalG" class="text-label">Total</label>       
                        <input id="totalG" type="text" placeholder="Total" disabled="" class="form-control">
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
                                <input id="constRural" type="text" placeholder="Rural" oninput="calcularConstTotal()" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6" style="padding-right: 0px">
                                <label for="constUrbano" class="text-label">Urbano</label>     
                                <input id="constUrbano" type="text" placeholder="Urbano" oninput="calcularConstTotal()" class="form-control">
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12" style="padding-left: 0px; padding-right: 0px"><br>
                                <label for="constTotal" class="text-label">Total</label>       
                                <input id="constTotal" type="text" placeholder="Total" disabled="" class="form-control">
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="col-lg-12 col-md-12 col-sm-12" style="font-size: 16px; padding-left: 0px; padding-right: 0px">
                                <label for="terrRural" class="text-label"><i class="fa fa-chevron-right" aria-hidden="true"></i> Terreno</label>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6" style="padding-left: 0px;">
                                <label for="terrRural" class="text-label" >Rural</label>        
                                <input id="terrRural" type="text" placeholder="Rural" oninput="calcularTerrTotal()" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6" style="padding-right: 0px">
                                <label for="terrUrbano" class="text-label" >Urbano</label>      
                                <input id="terrUrbano" type="text" placeholder="Urbano" oninput="calcularTerrTotal()" class="form-control">
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12" style="padding-left: 0px; padding-right: 0px"><br>
                                <label for="terrTotal" class="text-label" >Total</label>        
                                <input id="terrTotal" type="text" placeholder="Total" disabled="" class="form-control">
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
                        <input id="ruralP" type="text" placeholder="Rural" oninput="calcularTotalP()" class="form-control">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="urbanoP" class="text-label">Urbano</label>     
                        <input id="urbanoP" type="text" placeholder="Urbano" oninput="calcularTotalP()" class="form-control">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="totalP" class="text-label">Total</label>       
                        <input id="totalP" type="text" placeholder="Total" disabled="" class="form-control">
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