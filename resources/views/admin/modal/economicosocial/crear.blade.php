<div class="modal fade bd-example-modal-lg" id="modalCrear" role="dialog">

    <div class="modal-dialog modal-lg">

        <div class="modal-content">

            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Crear Económico social</h4>
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
                        <label for="numHecSemBos" class="text-label"><strong>Economico-social</strong></label>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="numHecSemBos" class="text-label">Número de hectáreas</label>       
                        <input id="numHecSemBos" type="number" pattern="[0-9]+" min="0" step="0.00000000000001" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="areAgrCosTot" class="text-label">Área agrícola cosechada total</label>     
                        <input id="areAgrCosTot" type="number" pattern="[0-9]+" min="0" step="0.00000000000001" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                    </div>               
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="proAgrTot" class="text-label">Producción agrícola total</label>      
                        <input id="proAgrTot" type="number" pattern="[0-9]+" step="0.00000000000001" min="0" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="proCar" class="text-label">Producción de carbón</label>       
                        <input id="proCar" type="number" pattern="[0-9]+" min="0" step="0.00000000000001" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="invBovTotMac" class="text-label">Inventario bovinos total machos</label>    
                        <input id="invBovTotMac" type="number" pattern="[0-9]+" min="0" placeholder="Double" class="form-control" required oninput="calcularInventarioBovinos()">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="invBovTotHem" class="text-label">Inventario bovinos total hembras</label>      
                        <input id="invBovTotHem" type="number" pattern="[0-9]+" min="0" placeholder="Double" class="form-control" required oninput="calcularInventarioBovinos()">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="invBovTot" class="text-label">Inventario bovinos total</label>       
                        <input id="invBovTot" type="number" pattern="[0-9]+" min="0" placeholder="Double" class="form-control" required disabled="">
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="incIpmRur" class="text-label">Incidencia IPM rural</label>    
                        <input id="incIpmRur" type="number" pattern="[0-9]+" min="0" step="0.00000000000001" placeholder="Double" class="form-control" required oninput="calcularIpm()" >
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="incIpmUrb" class="text-label">Incidencia IPM urbano</label>      
                        <input id="incIpmUrb" type="number" pattern="[0-9]+" min="0" step="0.00000000000001" placeholder="Double" class="form-control" required oninput="calcularIpm()" >
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="incIpmTot" class="text-label">Incidencia IPM total</label>       
                        <input id="incIpmTot" type="number" pattern="[0-9]+" min="0" step="0.00000000000001" placeholder="Double" class="form-control" required disabled="">
                    </div>
                </div>

               <div class="col-lg-12 col-md-12 col-sm-12"><br></div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-12 col-md-12 col-sm-12" style="font-size: 18px">
                        <label for="uniCom" class="text-label"><strong>Unidades comerciales</strong></label>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="uniCom" class="text-label">Unidades comerciales</label>       
                        <input id="uniCom" type="number" pattern="[0-9]+" min="0" placeholder="Integer" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="uniSer" class="text-label">Unidades de servicios</label>     
                        <input id="uniSer" type="number" pattern="[0-9]+" min="0" placeholder="Integer" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="uniInd" class="text-label">Unidades industriales</label>       
                        <input id="uniInd" type="number" pattern="[0-9]+" min="0" placeholder="Integer" class="form-control" required>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="uniGraCom" class="text-label">Unidades grande comerciales</label>       
                        <input id="uniGraCom" type="number" pattern="[0-9]+" min="0" placeholder="Integer" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="uniGraInd" class="text-label">Unidades grande industria</label>     
                        <input id="uniGraInd" type="number" pattern="[0-9]+" min="0" placeholder="Integer" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="uniGraSer" class="text-label">Unidades grande servicios</label>       
                        <input id="uniGraSer" type="number" pattern="[0-9]+" min="0" placeholder="Integer" class="form-control" required>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="uniMedCom" class="text-label">Unidades mediana comerciales</label>       
                        <input id="uniMedCom" type="number" pattern="[0-9]+" min="0" placeholder="Integer" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="uniMedInd" class="text-label">Unidades mediana industria</label>     
                        <input id="uniMedInd" type="number" pattern="[0-9]+" min="0" placeholder="Integer" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="uniMedSer" class="text-label">Unidades mediana servicios</label>       
                        <input id="uniMedSer" type="number" pattern="[0-9]+" min="0" placeholder="Integer" class="form-control" required>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="uniMicCom" class="text-label">Unidades micro comerciales</label>       
                        <input id="uniMicCom" type="number" pattern="[0-9]+" min="0" placeholder="Integer" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="uniMicInd" class="text-label">Unidades micro industria</label>     
                        <input id="uniMicInd" type="number" pattern="[0-9]+" min="0" placeholder="Integer" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="uniMicSer" class="text-label">Unidades micro servicios</label>       
                        <input id="uniMicSer" type="number" pattern="[0-9]+" min="0" placeholder="Integer" class="form-control" required>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="uniPeqCom" class="text-label">Unidades pequeña comerciales</label>       
                        <input id="uniPeqCom" type="number" pattern="[0-9]+" min="0" placeholder="Integer" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="uniPeqInd" class="text-label">Unidades pequeña industria</label>     
                        <input id="uniPeqInd" type="number" pattern="[0-9]+" min="0" placeholder="Integer" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="uniPeqSer" class="text-label">Unidades pequeña servicios</label>       
                        <input id="uniPeqSer" type="number" pattern="[0-9]+" min="0" placeholder="Integer" class="form-control" required>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12"><br></div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-12 col-md-12 col-sm-12" style="font-size: 18px">
                        <label for="altTasDepEco" class="text-label"><strong>Índice de pobreza multidimensional por componentes</strong></label>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="altTasDepEco" class="text-label">Alta tasa de dependencia económica</label>       
                        <input id="altTasDepEco" type="number" pattern="[0-9]+" min="0" step="0.00000000000001" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="ana" class="text-label">Analfabetismo</label>     
                        <input id="ana" type="number" pattern="[0-9]+" min="0" step="0.00000000000001" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="bajLogEdu" class="text-label">Bajo logro educativo</label>       
                        <input id="bajLogEdu" type="number" pattern="[0-9]+" min="0" step="0.00000000000001" placeholder="Double" class="form-control" required>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="barAccSerSal" class="text-label">Barreras de acceso a servicio de salud</label>       
                        <input id="barAccSerSal" type="number" pattern="[0-9]+" min="0" step="0.00000000000001" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="barAccSerCiu" class="text-label">Barreras de acceso a servicios para cuidado de la primera infancia</label>     
                        <input id="barAccSerCiu" type="number" pattern="[0-9]+" min="0" step="0.00000000000001" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="empInf" class="text-label">Empleo informal</label>       
                        <input id="empInf" type="number" pattern="[0-9]+" min="0" step="0.00000000000001" placeholder="Double" class="form-control" required>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="hac" class="text-label">Hacinamiento</label>       
                        <input id="hac" type="number" pattern="[0-9]+" min="0" step="0.00000000000001" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="inaEliExc" class="text-label">Inadecuada eliminación de excretas</label>     
                        <input id="inaEliExc" type="number" pattern="[0-9]+" min="0" step="0.00000000000001" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="inaEsc" class="text-label">Inasistencia escolar</label>       
                        <input id="inaEsc" type="number" pattern="[0-9]+" min="0" step="0.00000000000001" placeholder="Double" class="form-control" required>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="parIna" class="text-label">Paredes inadecuadas</label>       
                        <input id="parIna" type="number" pattern="[0-9]+" min="0" step="0.00000000000001" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="pisIna" class="text-label">Pisos inadecuados</label>     
                        <input id="pisIna" type="number" pattern="[0-9]+" min="0" step="0.00000000000001" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="rezEsc" class="text-label">Rezago escolar</label>       
                        <input id="rezEsc" type="number" pattern="[0-9]+" min="0" step="0.00000000000001" placeholder="Double" class="form-control" required>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="sinAccFueAgMej" class="text-label">Sin acceso a fuente de agua mejorada</label>       
                        <input id="sinAccFueAgMej" type="number" pattern="[0-9]+" min="0" step="0.00000000000001" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="sinAseSal" class="text-label">Sin aseguramiento en salud</label>     
                        <input id="sinAseSal" type="number" pattern="[0-9]+" min="0" step="0.00000000000001" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="traInf" class="text-label">Trabajo infantil</label>       
                        <input id="traInf" type="number" pattern="[0-9]+" min="0" step="0.00000000000001" placeholder="Double" class="form-control" required>
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