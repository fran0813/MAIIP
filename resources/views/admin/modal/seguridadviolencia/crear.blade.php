<div class="modal fade bd-example-modal-lg" id="modalCrear" role="dialog">

    <div class="modal-dialog modal-lg">

        <div class="modal-content">

            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Crear seguridad y violencia</h4>
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
                        <label for="tasDesEscTot" class="text-label"><strong>Seguridad y violencia</strong></label>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="tasDesEscTot" class="text-label">Deserción escolar total</label>       
                        <input id="tasDesEscTot" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Tasa de deserción escolar total" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="tasHom" class="text-label">Homicidios</label>     
                        <input id="tasHom" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Tasa de homicidios" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="tasIncDen" class="text-label">Incidencia dengue</label>       
                        <input id="tasIncDen" type="number" pattern="[0-9]+" step="0.1" min="0" placeholder="Tasa de incidencia dengue" class="form-control" required>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="tasLesPer" class="text-label">Lesiones personales</label>       
                        <input id="tasLesPer" type="number" pattern="[0-9]+" step="0.1" min="0" placeholder="Tasa de lesiones personales" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="tasMueAcc" class="text-label">Muertes por accidentes de tránsito</label>       
                        <input id="tasMueAcc" type="number" pattern="[0-9]+" step="0.1" min="0" placeholder="Tasa de muertes por accidentes de tránsito" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="tasSui" class="text-label">Suicidios</label>       
                        <input id="tasSui" type="number" pattern="[0-9]+" step="0.1" min="0" placeholder="Tasa de suicidios" class="form-control" required>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="vioInt" class="text-label">Violencia interpersonal</label>       
                        <input id="vioInt" type="number" pattern="[0-9]+" step="0.1" min="0" placeholder="Violencia interpersonal" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="casTot" class="text-label">Casos totales</label>       
                        <input id="casTot" type="number" pattern="[0-9]+" step="0.1" min="0" placeholder="Casos totales" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="casTasHom" class="text-label">Casos y tasa homicidios</label>       
                        <input id="casTasHom" type="number" pattern="[0-9]+" step="0.1" min="0" placeholder="Casos y tasa homicidios" class="form-control" required>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12"><br></div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-12 col-md-12 col-sm-12" style="font-size: 18px">
                        <label for="fatTot" class="text-label"><strong>Lesiones</strong></label>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="fatTot" class="text-label">Lesiones fatales total</label>       
                        <input id="fatTot" type="number" pattern="[0-9]+" step="0.1" min="0" placeholder="Lesiones fatales total" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="fatHom" class="text-label">Lesiones fatales hombre</label>     
                        <input id="fatHom" type="number" pattern="[0-9]+" step="0.1" min="0" placeholder="TotaLesiones fatales hombrel" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="fatMuj" class="text-label">Lesiones fatales mujer</label>       
                        <input id="fatMuj" type="number" pattern="[0-9]+" step="0.1" min="0" placeholder="Lesiones fatales mujer" class="form-control" required>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="noFatTot" class="text-label">Lesiones no fatales total</label>       
                        <input id="noFatTot" type="number" pattern="[0-9]+" step="0.1" min="0" placeholder="Lesiones no fatales total" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="noFatHom" class="text-label">Lesiones no fatales hombre</label>     
                        <input id="noFatHom" type="number" pattern="[0-9]+" step="0.1" min="0" placeholder="Lesiones no fatales hombre" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="noFatMuj" class="text-label">Lesiones no fatales mujer</label>       
                        <input id="noFatMuj" type="number" pattern="[0-9]+" step="0.1" min="0" placeholder="Lesiones no fatales mujer" class="form-control" required>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12"><br></div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-12 col-md-12 col-sm-12" style="font-size: 18px">
                        <label for="tot" class="text-label"><strong>Delitos sexuales</strong></label>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="tot" class="text-label">Total</label>       
                        <input id="tot" type="number" pattern="[0-9]+" step="0.1" min="0" placeholder="Total" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="hom" class="text-label">Hombre</label>     
                        <input id="hom" type="number" pattern="[0-9]+" step="0.1" min="0" placeholder="Hombre" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="muj" class="text-label">Mujer</label>       
                        <input id="muj" type="number" pattern="[0-9]+" step="0.1" min="0" placeholder="Mujer" class="form-control" required>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12"><br></div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-12 col-md-12 col-sm-12" style="font-size: 18px">
                        <label for="may" class="text-label"><strong>Violencia</strong></label>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="may" class="text-label">Violencia a personas mayores</label>       
                        <input id="may" type="number" pattern="[0-9]+" step="0.1" min="0" placeholder="Violencia a personas mayores" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="otrFam" class="text-label">Violencia entre otros familiares</label>     
                        <input id="otrFam" type="number" pattern="[0-9]+" step="0.1" min="0" placeholder="Violencia entre otros familiares" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="inf" class="text-label">Violencia Infantil</label>       
                        <input id="inf" type="number" pattern="[0-9]+" step="0.1" min="0" placeholder="Violencia Infantil" class="form-control" required>
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