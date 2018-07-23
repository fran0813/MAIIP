<div class="modal fade bd-example-modal-lg" id="modalCrear" role="dialog">

    <div class="modal-dialog modal-lg">

        <div class="modal-content">

            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Crear Finanza</h4>
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
                        <label for="ingTot" class="text-label"><strong>Plan financiero</strong></label>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="ingTot" class="text-label">Plan financiero municipios ingresos totales</label>       
                        <input id="ingTot" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="ingCor" class="text-label">Plan financiero municipios 1. ingresos corrientes</label>     
                        <input id="ingCor" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required oninput="calcularDeficitCorriente();">
                    </div>
                     <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="ingTri" class="text-label">Plan financiero municipios 1.1. ingresos tributarios</label>     
                        <input id="ingTri" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>             
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="ingPre" class="text-label">Plan financiero municipios 1.1.1. predial</label>       
                        <input id="ingPre" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="ingIndCom" class="text-label">Plan financiero municipios 1.1.2. industria y comercio</label>     
                        <input id="ingIndCom" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>
                     <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="ingSobGas" class="text-label">Plan financiero municipios 1.1.3. sobretasas a la gasolina</label>     
                        <input id="ingSobGas" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>             
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="ingOtr" class="text-label">Plan financiero municipios 1.1.4. otros</label>       
                        <input id="ingOtr" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="ingNoTri" class="text-label">Plan financiero municipios 1.2. ingresos no tributarios</label>     
                        <input id="ingNoTri" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>
                     <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="ingTra" class="text-label">Plan financiero municipios 1.3. transferencias</label>     
                        <input id="ingTra" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>             
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="ingNivNac" class="text-label">Plan financiero municipios 1.3.1. del nivel nacional</label>       
                        <input id="ingNivNac" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="ingNoTriOtr" class="text-label">Plan financiero municipios 1.3.2. otras</label>     
                        <input id="ingNoTriOtr" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>
                     <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="gasTot" class="text-label">Plan financiero municipios gastos totales</label>     
                        <input id="gasTot" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>             
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="gasCor" class="text-label">Plan financiero municipios 2. gastos corrientes</label>       
                        <input id="gasCor" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required oninput="calcularDeficitCorriente();">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="fun" class="text-label">Plan financiero municipios 2.1. funcionamiento</label>     
                        <input id="fun" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>
                     <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="serFun" class="text-label">Plan financiero municipios 2.1.1. servicios personales</label>     
                        <input id="serFun" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>             
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="gasGen" class="text-label">Plan financiero municipios 2.1.2. gastos generales</label>       
                        <input id="gasGen" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="traPag" class="text-label">Plan financiero municipios 2.1.3. transferencias pagadas</label>     
                        <input id="traPag" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>
                     <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="intDeuPub" class="text-label">Plan financiero municipios 2.2. intereses deuda publica</label>     
                        <input id="intDeuPub" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>             
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="defAhoCor" class="text-label">Plan financiero Municipios 3. deficit o ahorro corriente (1-2)</label>       
                        <input id="defAhoCor" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required disabled oninput="calcularSuperavit();">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="ingCap" class="text-label">Plan financiero municipios 4. ingresos de capital</label>     
                        <input id="ingCap" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required oninput="calcularSuperavit();">
                    </div>
                     <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="reg" class="text-label">Plan financiero municipios 4.1. regalías</label>     
                        <input id="reg" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>             
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="traNac" class="text-label">Plan financiero municipios 4.2. transferencias nacionales (sgp, etc.)</label>       
                        <input id="traNac" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="cof" class="text-label">Plan financiero municipios 4.3. cofinanciacion</label>     
                        <input id="cof" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>
                     <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="ingCapOtr" class="text-label">Plan financiero municipios 4.4. otros</label>     
                        <input id="ingCapOtr" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>             
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="gasCap" class="text-label">Plan financiero municipios 5. gastos de capital (inversion)</label>       
                        <input id="gasCap" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required oninput="calcularSuperavit();">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="forBruCapFij" class="text-label">Plan financiero municipios 5.1.1.1. formacion brutal de capital fijo</label>     
                        <input id="forBruCapFij" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>
                     <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="gasCapOtr" class="text-label">Plan financiero municipios 5.1.1.2. otros</label>     
                        <input id="gasCapOtr" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>             
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="defSupTot" class="text-label">Plan financiero municipios 6. deficit o superavit total (3+4-5)</label>       
                        <input id="defSupTot" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required disabled>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="fin" class="text-label">Plan financiero municipios 7. financiamiento</label>     
                        <input id="fin" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>
                     <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="creNet" class="text-label">Plan financiero municipios 7.1. credito neto</label>     
                        <input id="creNet" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>             
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="des" class="text-label">Plan financiero municipios 7.1.1. desembolsos (+)</label>       
                        <input id="des" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="amo" class="text-label">Plan financiero municipios 7.1.2. amortizaciones (-)</label>     
                        <input id="amo" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>
                     <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="recBalVarDepOtr" class="text-label">Plan financiero municipios 7.3. recursos del balance, variacion de depositos y otros</label>     
                        <input id="recBalVarDepOtr" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div> 
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12"><br></div> 

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-12 col-md-12 col-sm-12" style="font-size: 18px">
                        <label for="ejeIngTot" class="text-label"><strong>Ejecucion presupuesto</strong></label>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="ejeIngTot" class="text-label">Ingresos totales</label>       
                        <input id="ejeIngTot" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="ejeIngCor" class="text-label">1. Ingresos corrientes</label>     
                        <input id="ejeIngCor" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required oninput="calcularDeficitCorrienteEP();">
                    </div>
                     <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="ejeIngTri" class="text-label">1.1. Ingresos tributarios</label>     
                        <input id="ejeIngTri" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>             
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="ejeIngPre" class="text-label">1.1.1. Predial</label>       
                        <input id="ejeIngPre" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="ejeIngIndCom" class="text-label">1.1.2. Industria y comercio</label>     
                        <input id="ejeIngIndCom" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>
                     <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="ejeIngSobGas" class="text-label">1.1.3. Sobretasas a la gasolina</label>     
                        <input id="ejeIngSobGas" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>             
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="ejeIngOtr" class="text-label">1.1.4. Otros</label>       
                        <input id="ejeIngOtr" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="ejeIngNoTri" class="text-label">1.2. Ingresos no tributarios</label>     
                        <input id="ejeIngNoTri" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>
                     <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="ejeIngTra" class="text-label">1.3. transferencias</label>     
                        <input id="ejeIngTra" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>             
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="ejeIngNivNac" class="text-label">1.3.1. Del nivel nacional</label>       
                        <input id="ejeIngNivNac" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="ejeIngNoTriOtr" class="text-label">1.3.2. Otras</label>     
                        <input id="ejeIngNoTriOtr" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>
                     <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="ejeGasTot" class="text-label">Gastos totales</label>     
                        <input id="ejeGasTot" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>             
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="ejeGasCor" class="text-label">2. Gastos corrientes</label>       
                        <input id="ejeGasCor" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required oninput="calcularDeficitCorrienteEP();">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="ejeFun" class="text-label">2.1. Funcionamiento</label>     
                        <input id="ejeFun" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>
                     <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="ejeSerFun" class="text-label">2.1.1. Servicios personales</label>     
                        <input id="ejeSerFun" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>             
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="ejeGasGen" class="text-label">2.1.2. Gastos generales</label>       
                        <input id="ejeGasGen" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="ejeTraPag" class="text-label">2.1.3. Transferencias pagadas</label>     
                        <input id="ejeTraPag" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>
                     <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="ejeIntDeuPub" class="text-label">2.2. Intereses deuda publica</label>     
                        <input id="ejeIntDeuPub" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>             
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="ejeDefAhoCor" class="text-label">3. Deficit o ahorro corriente (1-2)</label>       
                        <input id="ejeDefAhoCor" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required disabled oninput="calcularSuperavitEP();">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="ejeIngCap" class="text-label">4. Ingresos de capital</label>     
                        <input id="ejeIngCap" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required oninput="calcularSuperavitEP();">
                    </div>
                     <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="ejeReg" class="text-label">4.1. Regalías</label>     
                        <input id="ejeReg" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>             
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="ejeTraNac" class="text-label">4.2. Transferencias nacionales (sgp, etc.)</label>       
                        <input id="ejeTraNac" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="ejeCof" class="text-label">4.3. Cofinanciacion</label>     
                        <input id="ejeCof" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>
                     <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="ejeIngCapOtr" class="text-label">4.4. Otros</label>     
                        <input id="ejeIngCapOtr" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>             
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="ejeGasCap" class="text-label">5. Gastos de capital (inversion)</label>       
                        <input id="ejeGasCap" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required oninput="calcularSuperavitEP();">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="ejeForBruCapFij" class="text-label">5.1.1.1. Formacion brutal de capital fijo</label>     
                        <input id="ejeForBruCapFij" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>
                     <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="ejeGasCapOtr" class="text-label">5.1.1.2. Otros</label>     
                        <input id="ejeGasCapOtr" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>             
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="ejeDefSupTot" class="text-label">6. Deficit o superavit total (3+4-5)</label>       
                        <input id="ejeDefSupTot" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required disabled>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="ejeFin" class="text-label">7. Financiamiento (7.1 + 7.2)</label>     
                        <input id="ejeFin" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required disabled>
                    </div>
                     <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="ejeCreNet" class="text-label">7.1. interno y externo (7.1.1 - 7.1.2.)</label>     
                        <input id="ejeCreNet" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required disabled oninput="calcularFinanciamiento();">
                    </div>             
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="ejeDes" class="text-label">7.1.1. Desembolsos (+)</label>       
                        <input id="ejeDes" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required oninput="calcularInternoExterno();">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="ejeAmo" class="text-label">7.1.2. Amortizaciones (-)</label>     
                        <input id="ejeAmo" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required oninput="calcularInternoExterno();">
                    </div>
                     <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="ejeRecBalVarDepOtr" class="text-label">7.2. Recursos del balance, variacion de depositos y otros</label>     
                        <input id="ejeRecBalVarDepOtr" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required oninput="calcularFinanciamiento();">
                    </div> 
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12"><br></div> 

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-12 col-md-12 col-sm-12" style="font-size: 18px">
                        <label for="desIntCapAdm" class="text-label"><strong>Indice de desempeño integral</strong></label>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="desIntCapAdm" class="text-label">Desempeño integral capacidad administrativa</label>       
                        <input id="desIntCapAdm" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="desIntEfiTot" class="text-label">Desempeño integral eficacia total</label>     
                        <input id="desIntEfiTot" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="desIntGes" class="text-label">Desempeño integral gestión</label>       
                        <input id="desIntGes" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
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
                        <label for="desIntIndInt" class="text-label">Desempeño integral indice integral</label>       
                        <input id="desIntIndInt" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="desIntReqLeg" class="text-label">Desempeño integral requisitos legales</label>       
                        <input id="desIntReqLeg" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="desIntIndDesFis" class="text-label">Desempeño integral indicador de desempeño fiscal</label>       
                        <input id="desIntIndDesFis" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12"><br></div> 

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-12 col-md-12 col-sm-12" style="font-size: 18px">
                        <label for="autGasFun" class="text-label"><strong>Indice de desempeño fiscal</strong></label>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">              
                        <label for="autGasFun" class="text-label">Autofinanciación de los gastos de funcionamiento</label>       
                        <input id="autGasFun" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="respSerDeu" class="text-label">Respaldo del servicio de la deuda</label>     
                        <input id="respSerDeu" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="depTraNacReg" class="text-label">Dependencia de las transferencias de la Nación y las Regalías</label>       
                        <input id="depTraNacReg" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="genRecPro" class="text-label">Generación de recursos propios</label>       
                        <input id="genRecPro" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="magInv" class="text-label">Magnitud de la inversión</label>       
                        <input id="magInv" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="capAho" class="text-label">Capacidad de ahorro</label>       
                        <input id="capAho" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="indDesFis" class="text-label">Indicador de desempeño Fiscal</label>       
                        <input id="indDesFis" type="number" pattern="[0-9]+" min="0" step="0.1" placeholder="Double" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="posNivNac" class="text-label">Posición a nivel nacional</label>       
                        <input id="posNivNac" type="number" pattern="[0-9]+" min="0" placeholder="Integer" class="form-control" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="posNivDep" class="text-label">Posición a nivel departamento</label>       
                        <input id="posNivDep" type="number" pattern="[0-9]+" min="0" placeholder="Integer" class="form-control" required>
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