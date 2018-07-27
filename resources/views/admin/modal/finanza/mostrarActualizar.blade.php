<div class="modal fade" id="modalMostrarActualizar" role="dialog">

    <div class="modal-dialog modal-lg">

        <div class="modal-content">

            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Editar Finanza</h4>
            </div>

            <div id="mostrarActualizar" class="modal-body">

            <form id="formActualizar">

                <input type="text" style="display: none;" id="idF">

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-5 col-md-5 col-sm-5">
                        <label for="anio2" class="text-label">Año</label>       
                        <input id="anio2" type="date" class="form-control" required>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12"><br></div> 

                 <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-12 col-md-12 col-sm-12" style="font-size: 18px">
                        <label for="ingTot2" class="text-label"><strong>Plan financiero</strong></label>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="ingTot2" class="text-label">Plan financiero municipios ingresos totales</label>       
                        <input id="ingTot2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="ingCor2" class="text-label">Plan financiero municipios 1. ingresos corrientes</label>     
                        <input id="ingCor2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required oninput="calcularDeficitCorriente2();">
                    </div>
                     <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="ingTri2" class="text-label">Plan financiero municipios 1.1. ingresos tributarios</label>     
                        <input id="ingTri2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>             
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="ingPre2" class="text-label">Plan financiero municipios 1.1.1. predial</label>       
                        <input id="ingPre2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="ingIndCom2" class="text-label">Plan financiero municipios 1.1.2. industria y comercio</label>     
                        <input id="ingIndCom2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>
                     <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="ingSobGas2" class="text-label">Plan financiero municipios 1.1.3. sobretasas a la gasolina</label>     
                        <input id="ingSobGas2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>             
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="ingOtr2" class="text-label">Plan financiero municipios 1.1.4. otros</label>       
                        <input id="ingOtr2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="ingNoTri2" class="text-label">Plan financiero municipios 1.2. ingresos no tributarios</label>     
                        <input id="ingNoTri2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>
                     <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="ingTra2" class="text-label">Plan financiero municipios 1.3. transferencias</label>     
                        <input id="ingTra2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>             
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="ingNivNac2" class="text-label">Plan financiero municipios 1.3.1. del nivel nacional</label>       
                        <input id="ingNivNac2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="ingNoTriOtr2" class="text-label">Plan financiero municipios 1.3.2. otras</label>     
                        <input id="ingNoTriOtr2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>
                     <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="gasTot2" class="text-label">Plan financiero municipios gastos totales</label>     
                        <input id="gasTot2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>             
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="gasCor2" class="text-label">Plan financiero municipios 2. gastos corrientes</label>       
                        <input id="gasCor2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required oninput="calcularDeficitCorriente2();">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="fun2" class="text-label">Plan financiero municipios 2.1. funcionamiento</label>     
                        <input id="fun2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>
                     <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="serFun2" class="text-label">Plan financiero municipios 2.1.1. servicios personales</label>     
                        <input id="serFun2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>             
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="gasGen2" class="text-label">Plan financiero municipios 2.1.2. gastos generales</label>       
                        <input id="gasGen2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="traPag2" class="text-label">Plan financiero municipios 2.1.3. transferencias pagadas</label>     
                        <input id="traPag2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>
                     <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="intDeuPub2" class="text-label">Plan financiero municipios 2.2. intereses deuda publica</label>     
                        <input id="intDeuPub2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>             
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="defAhoCor2" class="text-label">Plan financiero Municipios 3. déficit o ahorro corriente (1-2)</label>       
                        <input id="defAhoCor2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required disabled oninput="calcularSuperavit2();">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="ingCap2" class="text-label">Plan financiero municipios 4. ingresos de capital</label>     
                        <input id="ingCap2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required oninput="calcularSuperavit2();">
                    </div>
                     <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="reg2" class="text-label">Plan financiero municipios 4.1. regalías</label>     
                        <input id="reg2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>             
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="traNac2" class="text-label">Plan financiero municipios 4.2. transferencias nacionales (sgp, etc.)</label>       
                        <input id="traNac2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="cof2" class="text-label">Plan financiero municipios 4.3. cofinanciacion</label>     
                        <input id="cof2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>
                     <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="ingCapOtr2" class="text-label">Plan financiero municipios 4.4. otros</label>     
                        <input id="ingCapOtr2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>             
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="gasCap2" class="text-label">Plan financiero municipios 5. gastos de capital (inversión)</label>       
                        <input id="gasCap2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required oninput="calcularSuperavit2();">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="forBruCapFij2" class="text-label">Plan financiero municipios 5.1.1.1. formación brutal de capital fijo</label>     
                        <input id="forBruCapFij2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>
                     <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="gasCapOtr2" class="text-label">Plan financiero municipios 5.1.1.2. otros</label>     
                        <input id="gasCapOtr2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>             
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="defSupTot2" class="text-label">Plan financiero municipios 6. déficit o superávit total (3+4-5)</label>       
                        <input id="defSupTot2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required disabled>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="fin2" class="text-label">Plan financiero municipios 7. financiamiento</label>     
                        <input id="fin2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>
                     <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="creNet2" class="text-label">Plan financiero municipios 7.1. crédito neto</label>     
                        <input id="creNet2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>             
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="des2" class="text-label">Plan financiero municipios 7.1.1. desembolsos (+)</label>       
                        <input id="des2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="amo2" class="text-label">Plan financiero municipios 7.1.2. amortizaciones (-)</label>     
                        <input id="amo2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>
                     <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="recBalVarDepOtr2" class="text-label">Plan financiero municipios 7.3. recursos del balance, variación de depósitos y otros</label>     
                        <input id="recBalVarDepOtr2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div> 
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12"><br></div> 

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-12 col-md-12 col-sm-12" style="font-size: 18px">
                        <label for="ejeIngTot2" class="text-label"><strong>Ejecución presupuesto</strong></label>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="ejeIngTot2" class="text-label">Ingresos totales</label>       
                        <input id="ejeIngTot2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="ejeIngCor2" class="text-label">1. Ingresos corrientes</label>     
                        <input id="ejeIngCor2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required oninput="calcularDeficitCorrienteEP2();">
                    </div>
                     <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="ejeIngTri2" class="text-label">1.1. Ingresos tributarios</label>     
                        <input id="ejeIngTri2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>             
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="ejeIngPre2" class="text-label">1.1.1. Predial</label>       
                        <input id="ejeIngPre2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="ejeIngIndCom2" class="text-label">1.1.2. Industria y comercio</label>     
                        <input id="ejeIngIndCom2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>
                     <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="ejeIngSobGas2" class="text-label">1.1.3. Sobretasas a la gasolina</label>     
                        <input id="ejeIngSobGas2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>             
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="ejeIngOtr2" class="text-label">1.1.4. Otros</label>       
                        <input id="ejeIngOtr2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="ejeIngNoTri2" class="text-label">1.2. Ingresos no tributarios</label>     
                        <input id="ejeIngNoTri2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>
                     <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="ejeIngTra2" class="text-label">1.3. transferencias</label>     
                        <input id="ejeIngTra2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>             
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="ejeIngNivNac2" class="text-label">1.3.1. Del nivel nacional</label>       
                        <input id="ejeIngNivNac2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="ejeIngNoTriOtr2" class="text-label">1.3.2. Otras</label>     
                        <input id="ejeIngNoTriOtr2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>
                     <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="ejeGasTot2" class="text-label">Gastos totales</label>     
                        <input id="ejeGasTot2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>             
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="ejeGasCor2" class="text-label">2. Gastos corrientes</label>       
                        <input id="ejeGasCor2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required oninput="calcularDeficitCorrienteEP2();">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="ejeFun2" class="text-label">2.1. Funcionamiento</label>     
                        <input id="ejeFun2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>
                     <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="ejeSerFun2" class="text-label">2.1.1. Servicios personales</label>     
                        <input id="ejeSerFun2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>             
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="ejeGasGen2" class="text-label">2.1.2. Gastos generales</label>       
                        <input id="ejeGasGen2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="ejeTraPag2" class="text-label">2.1.3. Transferencias pagadas</label>     
                        <input id="ejeTraPag2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>
                     <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="ejeIntDeuPub2" class="text-label">2.2. Intereses deuda publica</label>     
                        <input id="ejeIntDeuPub2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>             
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="ejeDefAhoCor2" class="text-label">3. Déficit o ahorro corriente (1-2)</label>       
                        <input id="ejeDefAhoCor2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required disabled oninput="calcularSuperavitEP2();">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="ejeIngCap2" class="text-label">4. Ingresos de capital</label>     
                        <input id="ejeIngCap2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required oninput="calcularSuperavitEP2();">
                    </div>
                     <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="ejeReg2" class="text-label">4.1. Regalías</label>     
                        <input id="ejeReg2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>             
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="ejeTraNac2" class="text-label">4.2. Transferencias nacionales (sgp, etc.)</label>       
                        <input id="ejeTraNac2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="ejeCof2" class="text-label">4.3. Cofinanciacion</label>     
                        <input id="ejeCof2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>
                     <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="ejeIngCapOtr2" class="text-label">4.4. Otros</label>     
                        <input id="ejeIngCapOtr2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>             
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="ejeGasCap2" class="text-label">5. Gastos de capital (inversión)</label>       
                        <input id="ejeGasCap2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required oninput="calcularSuperavitEP2();">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="ejeForBruCapFij2" class="text-label">5.1.1.1. Formación brutal de capital fijo</label>     
                        <input id="ejeForBruCapFij2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>
                     <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="ejeGasCapOtr2" class="text-label">5.1.1.2. Otros</label>     
                        <input id="ejeGasCapOtr2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>             
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="ejeDefSupTot2" class="text-label">6. Déficit o superávit total (3+4-5)</label>       
                        <input id="ejeDefSupTot2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required disabled>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="ejeFin2" class="text-label">7. Financiamiento (7.1 + 7.2)</label>     
                        <input id="ejeFin2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required disabled>
                    </div>
                     <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="ejeCreNet2" class="text-label">7.1. interno y externo (7.1.1 - 7.1.2.)</label>     
                        <input id="ejeCreNet2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required disabled oninput="calcularFinanciamiento2();">
                    </div>             
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="ejeDes2" class="text-label">7.1.1. Desembolsos (+)</label>       
                        <input id="ejeDes2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required oninput="calcularInternoExterno2();">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="ejeAmo2" class="text-label">7.1.2. Amortizaciones (-)</label>     
                        <input id="ejeAmo2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required oninput="calcularInternoExterno2();">
                    </div>
                     <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="ejeRecBalVarDepOtr2" class="text-label">7.2. Recursos del balance, variación de depósitos y otros</label>     
                        <input id="ejeRecBalVarDepOtr2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required oninput="calcularFinanciamiento2();">
                    </div> 
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12"><br></div> 

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-12 col-md-12 col-sm-12" style="font-size: 18px">
                        <label for="desIntCapAdm2" class="text-label"><strong>Indice de desempeño integral</strong></label>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="desIntCapAdm2" class="text-label">Desempeño integral capacidad administrativa</label>       
                        <input id="desIntCapAdm2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="desIntEfiTot2" class="text-label">Desempeño integral eficacia total</label>     
                        <input id="desIntEfiTot2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="desIntGes2" class="text-label">Desempeño integral gestión</label>       
                        <input id="desIntGes2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col-lg-12 col-md-12 col-sm-12"></div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="desIntIndInt2" class="text-label">Desempeño integral indice integral</label>       
                        <input id="desIntIndInt2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="desIntReqLeg2" class="text-label">Desempeño integral requisitos legales</label>       
                        <input id="desIntReqLeg2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="desIntIndDesFis2" class="text-label">Desempeño integral indicador de desempeño fiscal</label>       
                        <input id="desIntIndDesFis2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12"><br></div> 

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-12 col-md-12 col-sm-12" style="font-size: 18px">
                        <label for="autGasFun2" class="text-label"><strong>Indice de desempeño fiscal</strong></label>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="autGasFun2" class="text-label">Auto financiación de los gastos de funcionamiento</label>       
                        <input id="autGasFun2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="respSerDeu2" class="text-label">Respaldo del servicio de la deuda</label>     
                        <input id="respSerDeu2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="depTraNacReg2" class="text-label">Dependencia de las transferencias de la Nación y las Regalías</label>       
                        <input id="depTraNacReg2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="genRecPro2" class="text-label">Generación de recursos propios</label>       
                        <input id="genRecPro2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="magInv2" class="text-label">Magnitud de la inversión</label>       
                        <input id="magInv2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="capAho2" class="text-label">Capacidad de ahorro</label>       
                        <input id="capAho2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="indDesFis2" class="text-label">Indicador de desempeño Fiscal</label>       
                        <input id="indDesFis2" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="posNivNac2" class="text-label">Posición a nivel nacional</label>       
                        <input id="posNivNac2" type="number" pattern="[0-9]+" min="0" placeholder="Integer" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="posNivDep2" class="text-label">Posición a nivel departamento</label>       
                        <input id="posNivDep2" type="number" pattern="[0-9]+" min="0" placeholder="Integer" class="form-control" required>
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