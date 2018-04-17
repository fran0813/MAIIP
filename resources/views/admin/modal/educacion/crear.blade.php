<div class="modal fade bd-example-modal-lg" id="modalCrear" role="dialog">

    <div class="modal-dialog modal-lg">

        <div class="modal-content">

            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Crear educación</h4>
            </div>
            
            <div id="modalCrear" class="modal-body" style="border: transparent; overflow-y: auto;">

            <form id="formCrear">

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-5 col-md-5 col-sm-5">
                        <label for="anio" class="text-label">Año</label>       
                        <input id="anio" type="date" class="form-control" required>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12"><br></div> 

                 <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-12 col-md-12 col-sm-12" style="font-size: 18px">
                        <label for="rurJardin" class="text-label"><strong>Educacion</strong></label>
                    </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="col-lg-12 col-md-12 col-sm-12" style="font-size: 16px; padding-left: 0px; padding-right: 0px">
                                <label for="rurJardin" class="text-label"><i class="fa fa-chevron-right" aria-hidden="true"></i> Rural</label>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6" style="padding-left: 0px;">
                                <label for="rurJardin" class="text-label">Prejardin y jardin</label>       
                                <input id="rurJardin" type="number" pattern="[0-9]+" min="0" placeholder="Prejardin y jardin" class="form-control" required oninput="calcularJardin();validarGenero()">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6" style="padding-right: 0px">
                                <label for="rurTrans" class="text-label">Transición</label>     
                                <input id="rurTrans" type="number" pattern="[0-9]+" min="0" placeholder="Transición" class="form-control" required oninput="calcularTransicion();validarGenero()">
                            </div>
                            <br>
                            <br>
                            <div class="col-lg-6 col-md-6 col-sm-6" style="padding-left: 0px">
                                <label for="rurPrim" class="text-label">Primaria</label>       
                                <input id="rurPrim" type="number" pattern="[0-9]+" min="0" placeholder="Primaria" class="form-control" required oninput="calcularPrimaria();validarGenero()">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6" style="padding-right: 0px;">
                                <label for="rurSecu" class="text-label">Secundaria</label>       
                                <input id="rurSecu" type="number" pattern="[0-9]+" min="0" placeholder="Secundaria" class="form-control" required oninput="calcularSecundaria();validarGenero()">
                            </div>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <div class="col-lg-6 col-md-6 col-sm-6" style="padding-left: 0px;">
                                <label for="rurMedia" class="text-label">Media</label>       
                                <input id="rurMedia" type="number" pattern="[0-9]+" min="0" placeholder="Media" class="form-control" required oninput="calcularMedia();validarGenero()">
                            </div>
                        </div>

                       <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="col-lg-12 col-md-12 col-sm-12" style="font-size: 16px; padding-left: 0px; padding-right: 0px">
                                <label for="urbJardin" class="text-label"><i class="fa fa-chevron-right" aria-hidden="true"></i> Urbano</label>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6" style="padding-left: 0px;">
                                <label for="urbJardin" class="text-label">Prejardin y jardin</label>       
                                <input id="urbJardin" type="number" pattern="[0-9]+" min="0" placeholder="Prejardin y jardin" class="form-control" required oninput="calcularJardin();validarGenero()">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6" style="padding-right: 0px">
                                <label for="urbTrans" class="text-label">Transición</label>     
                                <input id="urbTrans" type="number" pattern="[0-9]+" min="0" placeholder="Transición" class="form-control" required oninput="calcularTransicion();validarGenero()">
                            </div>
                            <br>
                            <br>
                            <div class="col-lg-6 col-md-6 col-sm-6" style="padding-left: 0px">
                                <label for="urbPrim" class="text-label">Primaria</label>       
                                <input id="urbPrim" type="number" pattern="[0-9]+" min="0" placeholder="Primaria" class="form-control" required oninput="calcularPrimaria();validarGenero()">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6" style="padding-right: 0px;">
                                <label for="urbSecu" class="text-label">Secundaria</label>       
                                <input id="urbSecu" type="number" pattern="[0-9]+" min="0" placeholder="Secundaria" class="form-control" required oninput="calcularSecundaria();validarGenero()">
                            </div>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <div class="col-lg-6 col-md-6 col-sm-6" style="padding-left: 0px;">
                                <label for="urbMedia" class="text-label">Media</label>       
                                <input id="urbMedia" type="number" pattern="[0-9]+" min="0" placeholder="Media" class="form-control" required oninput="calcularMedia();validarGenero()">
                            </div>
                        </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12"><br></div> 

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-12 col-md-12 col-sm-12" style="font-size: 18px">
                        <label for="jardin" class="text-label"><strong>Matriculas por nivel</strong></label>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="jardin" class="text-label">Prejardin y jardin</label>       
                        <input id="jardin" type="number" pattern="[0-9]+" min="0" placeholder="Prejardin y jardin" class="form-control" required disabled="">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="trans" class="text-label">Transición</label>     
                        <input id="trans" type="number" pattern="[0-9]+" min="0" placeholder="Transición" class="form-control" required disabled="">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="prim" class="text-label">Primaria</label>       
                        <input id="prim" type="number" pattern="[0-9]+" min="0" placeholder="Primaria" class="form-control" required disabled="">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="secu" class="text-label">Secundaria</label>       
                        <input id="secu" type="number" pattern="[0-9]+" min="0" placeholder="Secundaria" class="form-control" required disabled="">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="media" class="text-label">Media</label>       
                        <input id="media" type="number" pattern="[0-9]+" min="0" placeholder="Media" class="form-control" required disabled="">
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12"><br></div> 

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-12 col-md-12 col-sm-12" style="font-size: 18px">
                        <label for="femenino" class="text-label"><strong>Matriculas por genero</strong></label>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">              
                        <label for="femenino" class="text-label">Femenino</label>       
                        <input id="femenino" type="number" pattern="[0-9]+" min="0" placeholder="Femenino" class="form-control" required oninput="validarGenero();">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <label for="masculino" class="text-label">Masculino</label>     
                        <input id="masculino" type="number" pattern="[0-9]+" min="0" placeholder="Masculino" class="form-control" required oninput="validarGenero();">
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