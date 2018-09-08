<div class="modal fade" id="modalMostrarActualizar" role="dialog">

    <div class="modal-dialog modal-lg">

        <div class="modal-content">

            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Editar seguridad y violencia</h4>
            </div>

            <div id="mostrarActualizar" class="modal-body">

            <form id="formActualizar">

                <input type="text" style="display: none;" id="idSV">

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="anio2" class="text-label">Año</label>       
                        <input id="anio2" type="date" class="form-control" required>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12"><br></div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-12 col-md-12 col-sm-12" style="font-size: 18px">
                        <label for="tasDesEscTot2" class="text-label"><strong>Seguridad y violencia</strong></label>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="tasDesEscTot2" class="text-label">Deserción escolar total</label>       
                        <input id="tasDesEscTot2" type="number" pattern="[0-9]+" min="0" step="0.00000000000001" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="tasHom2" class="text-label">Homicidios</label>     
                        <input id="tasHom2" type="number" pattern="[0-9]+" min="0" step="0.00000000000001" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="tasIncDen2" class="text-label">Incidencia dengue</label>       
                        <input id="tasIncDen2" type="number" pattern="[0-9]+" step="0.00000000000001" min="0" placeholder="Double" class="form-control" required>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="tasLesPer2" class="text-label">Lesiones personales</label>       
                        <input id="tasLesPer2" type="number" pattern="[0-9]+" step="0.00000000000001" min="0" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="tasMueAcc2" class="text-label">Muertes por accidentes de tránsito</label>       
                        <input id="tasMueAcc2" type="number" pattern="[0-9]+" step="0.00000000000001" min="0" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="tasSui2" class="text-label">Suicidios</label>       
                        <input id="tasSui2" type="number" pattern="[0-9]+" step="0.00000000000001" min="0" placeholder="Double" class="form-control" required>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="vioInt2" class="text-label">Violencia interpersonal</label>       
                        <input id="vioInt2" type="number" pattern="[0-9]+" step="0.00000000000001" min="0" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="casTot2" class="text-label">Casos totales</label>       
                        <input id="casTot2" type="number" pattern="[0-9]+" step="0.00000000000001" min="0" placeholder=Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="casTasHom2" class="text-label">Casos y tasa homicidios</label>       
                        <input id="casTasHom2" type="number" pattern="[0-9]+" step="0.00000000000001" min="0" placeholder="Double" class="form-control" required>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12"><br></div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-12 col-md-12 col-sm-12" style="font-size: 18px">
                        <label for="fatTot2" class="text-label"><strong>Lesiones</strong></label>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="fatTot2" class="text-label">Lesiones fatales total</label>       
                        <input id="fatTot2" type="number" pattern="[0-9]+" step="0.00000000000001" min="0" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="fatHom2" class="text-label">Lesiones fatales hombre</label>     
                        <input id="fatHom2" type="number" pattern="[0-9]+" step="0.00000000000001" min="0" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="fatMuj2" class="text-label">Lesiones fatales mujer</label>       
                        <input id="fatMuj2" type="number" pattern="[0-9]+" step="0.00000000000001" min="0" placeholder="Double" class="form-control" required>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="noFatTot2" class="text-label">Lesiones no fatales total</label>       
                        <input id="noFatTot2" type="number" pattern="[0-9]+" step="0.00000000000001" min="0" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="noFatHom2" class="text-label">Lesiones no fatales hombre</label>     
                        <input id="noFatHom2" type="number" pattern="[0-9]+" step="0.00000000000001" min="0" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="noFatMuj2" class="text-label">Lesiones no fatales mujer</label>       
                        <input id="noFatMuj2" type="number" pattern="[0-9]+" step="0.00000000000001" min="0" placeholder="Double" class="form-control" required>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12"><br></div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-12 col-md-12 col-sm-12" style="font-size: 18px">
                        <label for="tot2" class="text-label"><strong>Delitos sexuales</strong></label>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="tot2" class="text-label">Total</label>       
                        <input id="tot2" type="number" pattern="[0-9]+" step="0.00000000000001" min="0" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="hom2" class="text-label">Hombre</label>     
                        <input id="hom2" type="number" pattern="[0-9]+" step="0.00000000000001" min="0" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="muj2" class="text-label">Mujer</label>       
                        <input id="muj2" type="number" pattern="[0-9]+" step="0.00000000000001" min="0" placeholder="Double" class="form-control" required>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12"><br></div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-12 col-md-12 col-sm-12" style="font-size: 18px">
                        <label for="may2" class="text-label"><strong>Violencia</strong></label>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="may2" class="text-label">Violencia a personas mayores</label>       
                        <input id="may2" type="number" pattern="[0-9]+" step="0.00000000000001" min="0" placeholder="Integer" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="otrFam2" class="text-label">Violencia entre otros familiares</label>     
                        <input id="otrFam2" type="number" pattern="[0-9]+" step="0.00000000000001" min="0" placeholder="Integer" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="inf2" class="text-label">Violencia Infantil</label>       
                        <input id="inf2" type="number" pattern="[0-9]+" step="0.00000000000001" min="0" placeholder="Integer" class="form-control" required>
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