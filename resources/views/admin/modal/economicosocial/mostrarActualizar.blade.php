<div class="modal fade" id="modalMostrarActualizar" role="dialog">

    <div class="modal-dialog modal-lg">

        <div class="modal-content">

            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Editar Economico social</h4>
            </div>

            <div id="mostrarActualizar" class="modal-body">

            <form id="formActualizar">

                <input type="text" style="display: none;" id="idES">

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="anio2" class="text-label">Año</label>       
                        <input id="anio2" type="date" class="form-control" required>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12"><br></div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-12 col-md-12 col-sm-12" style="font-size: 18px">
                        <label for="numHecSemBos2" class="text-label"><strong>Economico-social</strong></label>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="numHecSemBos2" class="text-label">Número de hectáreas</label>       
                        <input id="numHecSemBos2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Hectáreas sembradas con bosques por municipio área en bosques total " class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="areAgrCosTot2" class="text-label">Área agrícola cosechada total</label>     
                        <input id="areAgrCosTot2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Área agrícola cosechada total" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                    </div>               
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="proAgrTot2" class="text-label">Producción agrícola total</label>      
                        <input id="proAgrTot2" type="number" pattern="[0-9]+" step="0.1" min="0" placeholder="Producción agrícola total" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="proCar2" class="text-label">Producción de carbón</label>       
                        <input id="proCar2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Hectáreas sembradas" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="invBovTotMac2" class="text-label">Inventario bovinos total machos</label>    
                        <input id="invBovTotMac2" type="number" pattern="[0-9]+" min="0" placeholder="Machos" class="form-control" required oninput="calcularInventarioBovinos()">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="invBovTotHem2" class="text-label">Inventario bovinos total hembras</label>      
                        <input id="invBovTotHem2" type="number" pattern="[0-9]+" min="0" placeholder="Hembras" class="form-control" required oninput="calcularInventarioBovinos()">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="invBovTot2" class="text-label">Inventario bovinos total</label>       
                        <input id="invBovTot2" type="number" pattern="[0-9]+" min="0" placeholder="Total" class="form-control" required disabled="">
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="incIpmRur2" class="text-label">Incidencia IPM rural</label>    
                        <input id="incIpmRur2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Rural" class="form-control" required oninput="calcularIpm2()" >
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="incIpmUrb2" class="text-label">Incidencia IPM urbano</label>      
                        <input id="incIpmUrb2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Urbano" class="form-control" required oninput="calcularIpm2()" >
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="incIpmTot2" class="text-label">Incidencia IPM total</label>       
                        <input id="incIpmTot2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Total" class="form-control" required disabled="">
                    </div>
                </div>

               <div class="col-lg-12 col-md-12 col-sm-12"><br></div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-12 col-md-12 col-sm-12" style="font-size: 18px">
                        <label for="uniCom2" class="text-label"><strong>Unidades comerciales</strong></label>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="uniCom2" class="text-label">Unidades comerciales</label>       
                        <input id="uniCom2" type="number" pattern="[0-9]+" min="0" placeholder="Comercial" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="uniSer2" class="text-label">Unidades de servicios</label>     
                        <input id="uniSer2" type="number" pattern="[0-9]+" min="0" placeholder="Servicios" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="uniInd2" class="text-label">Unidades industriales</label>       
                        <input id="uniInd2" type="number" pattern="[0-9]+" min="0" placeholder="Industriales" class="form-control" required>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="uniGraCom2" class="text-label">Unidades grande comerciales</label>       
                        <input id="uniGraCom2" type="number" pattern="[0-9]+" min="0" placeholder="Comercial" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="uniGraInd2" class="text-label">Unidades grande industria</label>     
                        <input id="uniGraInd2" type="number" pattern="[0-9]+" min="0" placeholder="Servicios" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="uniGraSer2" class="text-label">Unidades grande servicios</label>       
                        <input id="uniGraSer2" type="number" pattern="[0-9]+" min="0" placeholder="Industriales" class="form-control" required>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="uniMedCom2" class="text-label">Unidades mediana comerciales</label>       
                        <input id="uniMedCom2" type="number" pattern="[0-9]+" min="0" placeholder="Comercial" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="uniMedInd2" class="text-label">Unidades mediana industria</label>     
                        <input id="uniMedInd2" type="number" pattern="[0-9]+" min="0" placeholder="Servicios" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="uniMedSer2" class="text-label">Unidades mediana servicios</label>       
                        <input id="uniMedSer2" type="number" pattern="[0-9]+" min="0" placeholder="Industriales" class="form-control" required>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="uniMicCom2" class="text-label">Unidades micro comerciales</label>       
                        <input id="uniMicCom2" type="number" pattern="[0-9]+" min="0" placeholder="Comercial" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="uniMicInd2" class="text-label">Unidades micro industria</label>     
                        <input id="uniMicInd2" type="number" pattern="[0-9]+" min="0" placeholder="Servicios" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="uniMicSer2" class="text-label">Unidades micro servicios</label>       
                        <input id="uniMicSer2" type="number" pattern="[0-9]+" min="0" placeholder="Industriales" class="form-control" required>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="uniPeqCom2" class="text-label">Unidades pequeña comerciales</label>       
                        <input id="uniPeqCom2" type="number" pattern="[0-9]+" min="0" placeholder="Comercial" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="uniPeqInd2" class="text-label">Unidades pequeña industria</label>     
                        <input id="uniPeqInd2" type="number" pattern="[0-9]+" min="0" placeholder="Servicios" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="uniPeqSer2" class="text-label">Unidades pequeña servicios</label>       
                        <input id="uniPeqSer2" type="number" pattern="[0-9]+" min="0" placeholder="Industriales" class="form-control" required>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12"><br></div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-12 col-md-12 col-sm-12" style="font-size: 18px">
                        <label for="altTasDepEco2" class="text-label"><strong>Índice de pobreza multidimensional por componentes</strong></label>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="altTasDepEco2" class="text-label">Alta tasa de dependencia económica</label>       
                        <input id="altTasDepEco2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Alta tasa de dependencia económica" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="ana2" class="text-label">Analfabetismo</label>     
                        <input id="ana2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Analfabetismo" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="bajLogEdu2" class="text-label">Bajo logro educativo</label>       
                        <input id="bajLogEdu2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Bajo logro educativo" class="form-control" required>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="barAccSerSal2" class="text-label">Barreras de acceso a servicio de salud</label>       
                        <input id="barAccSerSal2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Barreras de acceso a servicio de salu" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="barAccSerCiu2" class="text-label">Barreras de acceso a servicios para cuidado de la primera infancia</label>     
                        <input id="barAccSerCiu2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Barreras de acceso a servicios para cuidado de la primera infancia" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="empInf2" class="text-label">Empleo informal</label>       
                        <input id="empInf2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Empleo informal" class="form-control" required>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="hac2" class="text-label">Hacinamiento</label>       
                        <input id="hac2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Hacinamiento" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="inaEliExc2" class="text-label">Inadecuada eliminación de excretas</label>     
                        <input id="inaEliExc2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Inadecuada eliminación de excretas" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="inaEsc2" class="text-label">Inasistencia escolar</label>       
                        <input id="inaEsc2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Inasistencia escolar" class="form-control" required>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="parIna2" class="text-label">Paredes inadecuadas</label>       
                        <input id="parIna2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Paredes inadecuadas" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="pisIna2" class="text-label">Pisos inadecuados</label>     
                        <input id="pisIna2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Pisos inadecuados" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="rezEsc2" class="text-label">Rezago escolar</label>       
                        <input id="rezEsc2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Rezago escolar" class="form-control" required>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="sinAccFueAgMej2" class="text-label">Sin acceso a fuente de agua mejorada</label>       
                        <input id="sinAccFueAgMej2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Sin acceso a fuente de agua mejorada" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="sinAseSal2" class="text-label">Sin aseguramiento en salud</label>     
                        <input id="sinAseSal2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Sin aseguramiento en salud" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="traInf2" class="text-label">Trabajo infantil</label>       
                        <input id="traInf2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Trabajo infantil" class="form-control" required>
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