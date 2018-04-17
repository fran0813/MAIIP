<div class="modal fade fade bd-example-modal-lg" id="modalMostrarActualizar" role="dialog">

    <div class="modal-dialog modal-lg">

        <div class="modal-content">

            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Editar educación</h4>
            </div>

            <div id="mostrarActualizar" class="modal-body">

            <form id="formActualizar">

                <input type="text" style="display: none;" id="idE">

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-5 col-md-5 col-sm-5">
                        <label for="anio2" class="text-label">Año</label>       
                        <input id="anio2" type="date" class="form-control" required>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12"><br></div> 

                 <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-12 col-md-12 col-sm-12" style="font-size: 18px">
                        <label for="rurJardin2" class="text-label"><strong>Educacion</strong></label>
                    </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="col-lg-12 col-md-12 col-sm-12" style="font-size: 16px; padding-left: 0px; padding-right: 0px">
                                <label for="rurJardin2" class="text-label"><i class="fa fa-chevron-right" aria-hidden="true"></i> Rural</label>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6" style="padding-left: 0px;">
                                <label for="rurJardin2" class="text-label">Prejardin y jardin</label>       
                                <input id="rurJardin2" type="number" pattern="[0-9]+" min="0" placeholder="Prejardin y jardin" class="form-control" required oninput="calcularJardin2();validarGenero2();">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6" style="padding-right: 0px">
                                <label for="rurTrans2" class="text-label">Transición</label>     
                                <input id="rurTrans2" type="number" pattern="[0-9]+" min="0" placeholder="Transición" class="form-control" required oninput="calcularTransicion2();validarGenero2();">
                            </div>
                            <br>
                            <br>
                            <div class="col-lg-6 col-md-6 col-sm-6" style="padding-left: 0px">
                                <label for="rurPrim2" class="text-label">Primaria</label>       
                                <input id="rurPrim2" type="number" pattern="[0-9]+" min="0" placeholder="Primaria" class="form-control" required oninput="calcularPrimaria2();validarGenero2();">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6" style="padding-right: 0px;">
                                <label for="rurSecu2" class="text-label">Secundaria</label>       
                                <input id="rurSecu2" type="number" pattern="[0-9]+" min="0" placeholder="Secundaria" class="form-control" required oninput="calcularSecundaria2();validarGenero2();">
                            </div>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <div class="col-lg-6 col-md-6 col-sm-6" style="padding-left: 0px;">
                                <label for="rurMedia2" class="text-label">Media</label>       
                                <input id="rurMedia2" type="number" pattern="[0-9]+" min="0" placeholder="Media" class="form-control" required oninput="calcularMedia2();validarGenero2();">
                            </div>
                        </div>

                       <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="col-lg-12 col-md-12 col-sm-12" style="font-size: 16px; padding-left: 0px; padding-right: 0px">
                                <label for="urbJardin2" class="text-label"><i class="fa fa-chevron-right" aria-hidden="true"></i> Urbano</label>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6" style="padding-left: 0px;">
                                <label for="urbJardin2" class="text-label">Prejardin y jardin</label>       
                                <input id="urbJardin2" type="number" pattern="[0-9]+" min="0" placeholder="Prejardin y jardin" class="form-control" required oninput="calcularJardin2();validarGenero2();">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6" style="padding-right: 0px">
                                <label for="urbTrans2" class="text-label">Transición</label>     
                                <input id="urbTrans2" type="number" pattern="[0-9]+" min="0" placeholder="Transición" class="form-control" required oninput="calcularTransicion2();validarGenero2();">
                            </div>
                            <br>
                            <br>
                            <div class="col-lg-6 col-md-6 col-sm-6" style="padding-left: 0px">
                                <label for="urbPrim2" class="text-label">Primaria</label>       
                                <input id="urbPrim2" type="number" pattern="[0-9]+" min="0" placeholder="Primaria" class="form-control" required oninput="calcularPrimaria2();validarGenero2();">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6" style="padding-right: 0px;">
                                <label for="urbSecu2" class="text-label">Secundaria</label>       
                                <input id="urbSecu2" type="number" pattern="[0-9]+" min="0" placeholder="Secundaria" class="form-control" required oninput="calcularSecundaria2();validarGenero2();">
                            </div>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <div class="col-lg-6 col-md-6 col-sm-6" style="padding-left: 0px;">
                                <label for="urbMedia2" class="text-label">Media</label>       
                                <input id="urbMedia2" type="number" pattern="[0-9]+" min="0" placeholder="Media" class="form-control" required oninput="calcularMedia2();validarGenero2();">
                            </div>
                        </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12"><br></div> 

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-12 col-md-12 col-sm-12" style="font-size: 18px">
                        <label for="jardin2" class="text-label"><strong>Matriculas por nivel</strong></label>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="jardin2" class="text-label">Prejardin y jardin</label>       
                        <input id="jardin2" type="number" pattern="[0-9]+" min="0" placeholder="Prejardin y jardin" class="form-control" required disabled="">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="trans2" class="text-label">Transición</label>     
                        <input id="trans2" type="number" pattern="[0-9]+" min="0" placeholder="Transición" class="form-control" required disabled="">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="prim2" class="text-label">Primaria</label>       
                        <input id="prim2" type="number" pattern="[0-9]+" min="0" placeholder="Primaria" class="form-control" required disabled="">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="secu2" class="text-label">Secundaria</label>       
                        <input id="secu2" type="number" pattern="[0-9]+" min="0" placeholder="Secundaria" class="form-control" required disabled="">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="media2" class="text-label">Media</label>       
                        <input id="media2" type="number" pattern="[0-9]+" min="0" placeholder="Media" class="form-control" required disabled="">
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12"><br></div> 

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-12 col-md-12 col-sm-12" style="font-size: 18px">
                        <label for="femenino2" class="text-label"><strong>Matriculas por genero</strong></label>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">              
                        <label for="femenino2" class="text-label">Femenino</label>       
                        <input id="femenino2" type="number" pattern="[0-9]+" min="0" placeholder="Femenino" class="form-control" required oninput="validarGenero2();">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <label for="masculino2" class="text-label">Masculino</label>     
                        <input id="masculino2" type="number" pattern="[0-9]+" min="0" placeholder="Masculino" class="form-control" required oninput="validarGenero2();">
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