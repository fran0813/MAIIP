<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <title>Finanza</title>
</head>
<body>
	<h1 class="page-header">Plan financiero</h1>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Año</th>
                <td>{{ $data['anio'] }}</td>
            </tr>
           <tr class="border-dotted">
                    <td>Plan financiero municipios ingresos totales</td>
                    <td>{{ $data['ingTot'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Plan financiero municipios 1. ingresos corrientes</td>
                    <td>{{ $data['ingCor'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Plan financiero municipios 1.1. ingresos tributarios</td>
                    <td>{{ $data['ingTri'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Plan financiero municipios 1.1.1. predial</td>
                    <td>{{ $data['ingPre'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Plan financiero municipios 1.1.2. industria y comercio</td>
                    <td>{{ $data['ingIndCom'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Plan financiero municipios  1.1.3. sobretasas a la gasolina</td>
                    <td>{{ $data['ingSobGas'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Plan financiero municipios 1.1.4. otros</td>
                    <td>{{ $data['ingOtr'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Plan financiero municipios 1.2. ingresos no tributarios</td>
                    <td>{{ $data['ingNoTri'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Plan financiero municipios 1.3. transferencias</td>
                    <td>{{ $data['ingTra'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Plan financiero municipios 1.3.1. del nivel nacional</td>
                    <td>{{ $data['ingNivNac'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Plan financiero municipios 1.3.2. otras</td>
                    <td>{{ $data['ingNoTriOtr'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Plan financiero municipios gastos totales</td>
                    <td>{{ $data['gasTot'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Plan financiero municipios 2. gastos corrientes</td>
                    <td>{{ $data['gasCor'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Plan financiero municipios 2.1. funcionamiento</td>
                    <td>{{ $data['fun'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Plan financiero municipios 2.1.1. servicios personales</td>
                    <td>{{ $data['serFun'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Plan financiero municipios 2.1.2. gastos generales</td>
                    <td>{{ $data['gasGen'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Plan financiero municipios 2.1.3. transferencias pagadas</td>
                    <td>{{ $data['traPag'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Plan financiero municipios 2.2. intereses deuda publica</td>
                    <td>{{ $data['intDeuPub'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Plan financiero municipios 3. déficit o ahorro corriente (1-2)</td>
                    <td>{{ $data['defAhoCor'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Plan financiero municipios 4. ingresos de capital</td>
                    <td>{{ $data['ingCap'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Plan financiero municipios 4.1. regalías</td>
                    <td>{{ $data['reg'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Plan financiero municipios 4.2. transferencias nacionales (sgp, etc.)</td>
                    <td>{{ $data['traNac'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Plan financiero municipios 4.3. cofinanciacion</td>
                    <td>{{ $data['cof'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Plan financiero municipios 4.4. otros</td>
                    <td>{{ $data['ingCapOtr'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Plan financiero municipios 5. gastos de capital (inversión)</td>
                    <td>{{ $data['gasCap'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Plan financiero municipios 5.1.1.1. formación brutal de capital fijo</td>
                    <td>{{ $data['forBruCapFij'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Plan financiero municipios 5.1.1.2. otros</td>
                    <td>{{ $data['gasCapOtr'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Plan financiero municipios 6. déficit o superávit total (3+4-5)</td>
                    <td>{{ $data['defSupTot'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Plan financiero municipios 7. financiamiento</td>
                    <td>{{ $data['fin'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Plan financiero municipios 7.1. crédito neto</td>
                    <td>{{ $data['creNet'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Plan financiero municipios 7.1.1. desembolsos (+)</td>
                    <td>{{ $data['des'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Plan financiero municipios 7.1.2. amortizaciones (-)</td>
                    <td>{{ $data['amo'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Plan financiero municipios 7.3. recursos del balance, variación de depósitos y otros</td>
                    <td>{{ $data['recBalVarDepOtr'] }}</td>
                </tr>
        </thead>
        <tbody>
        	
		</tbody>
	    </table>

        {{--  --}}
        <h1 class="page-header">Índice de pobreza multidimensional por componentes</h1>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Año</th>
                <td>{{ $data['anio'] }}</td>
            </tr>
            <tr class="border-dotted">
                    <td>Ingresos totales</td>
                    <td>{{ $data['ejeIngTot'] }}</td>
                </tr>   
                <tr class="border-dotted">
                    <td>1. ingresos corrientes</td>
                    <td>{{ $data['ejeIngCor'] }}</td>
                </tr>   
                <tr class="border-dotted">
                    <td>1.1 ingresos tributarios</td>
                    <td>{{ $data['ejeIngTri'] }}</td>
                </tr>   
                <tr class="border-dotted">
                    <td>1.1.1. predial</td>
                    <td>{{ $data['ejeIngPre'] }}</td>
                </tr>   
                <tr class="border-dotted">
                    <td>1.1.2. industria y comercio</td>
                    <td>{{ $data['ejeIngIndCom'] }}</td>
                </tr>   
                <tr class="border-dotted">
                    <td>1.1.3. sobretasa a la gasolina</td>
                    <td>{{ $data['ejeIngSobGas'] }}</td>
                </tr>   
                <tr class="border-dotted">
                    <td>1.1.4. otros</td>
                    <td>{{ $data['ejeIngOtr'] }}</td>
                </tr>   
                <tr class="border-dotted">
                    <td>1.2. ingresos no tributarios</td>
                    <td>{{ $data['ejeIngNoTri'] }}</td>
                </tr>   
                <tr class="border-dotted">
                    <td>1.3. transferencias</td>
                    <td>{{ $data['ejeIngTra'] }}</td>
                </tr>   
                <tr class="border-dotted">
                    <td>1.3.1. del nivel nacional</td>
                    <td>{{ $data['ejeIngNivNac'] }}</td>
                </tr>   
                <tr class="border-dotted">
                    <td>1.3.2. otras</td>
                    <td>{{ $data['ejeIngNoTriOtr'] }}</td>
                </tr>   
                <tr class="border-dotted">
                     <td>Gastos totales</td>
                    <td>{{ $data['ejeGasTot'] }}</td>
                </tr>   
                <tr class="border-dotted">
                    <td>2. gastos corrientes</td>
                    <td>{{ $data['ejeGasCor'] }}</td>
                </tr>   
                <tr class="border-dotted">
                    <td>2.1. funcionamiento</td>
                    <td>{{ $data['ejeFun'] }}</td>
                </tr>   
                <tr class="border-dotted">
                    <td>2.1.1. servicios personales</td>
                    <td>{{ $data['ejeSerFun'] }}</td>
                </tr>   
                <tr class="border-dotted">
                    <td>2.1.2. gastos generales</td>
                    <td>{{ $data['ejeGasGen'] }}</td>
                </tr>   
                <tr class="border-dotted">
                    <td>2.1.3. transferencias pagadas (nomina y a entidades)</td>
                    <td>{{ $data['ejeTraPag'] }}</td>
                </tr>   
                <tr class="border-dotted">
                    <td>2.2. intereses deuda publica</td>
                    <td>{{ $data['ejeIntDeuPub'] }}</td>
                </tr>   
                <tr class="border-dotted">
                    <td>3. déficit o ahorro corriente (1-2)</td>
                    <td>{{ $data['ejeDefAhoCor'] }}</td>
                </tr>   
                <tr class="border-dotted">
                    <td>4. ingresos de capital</td>
                    <td>{{ $data['ejeIngCap'] }}</td>
                </tr>   
                <tr class="border-dotted">
                    <td>4.1. regalías</td>
                    <td>{{ $data['ejeReg'] }}</td>
                </tr>   
                <tr class="border-dotted">
                    <td>4.2. transferencias nacionales (sgp, etc.)</td>
                    <td>{{ $data['ejeTraNac'] }}</td>
                </tr>   
                <tr class="border-dotted">
                    <td>4.3. cofinanciacion</td>
                    <td>{{ $data['ejeCof'] }}</td>
                </tr>   
                <tr class="border-dotted">
                    <td>4.4. otros</td>
                    <td>{{ $data['ejeIngCapOtr'] }}</td>
                </tr>   
                <tr class="border-dotted">
                    <td>5. gastos de capital (inversión)</td>
                    <td>{{ $data['ejeGasCap'] }}</td>
                </tr>   
                <tr class="border-dotted">
                    <td>5.1. formación brutal de capital fijo</td>
                    <td>{{ $data['ejeForBruCapFij'] }}</td>
                </tr>   
                <tr class="border-dotted">
                    <td>5.2. resto inversiones</td>
                    <td>{{ $data['ejeGasCapOtr'] }}</td>
                </tr>   
                <tr class="border-dotted">
                    <td>6. déficit o superávit total (3+4-5)</td>
                    <td>{{ $data['ejeDefSupTot'] }}</td>
                </tr>   
                <tr class="border-dotted">
                    <td>7. financiamiento (7.1 + 7.2)</td>
                    <td>{{ $data['ejeFin'] }}</td>
                </tr>   
                <tr class="border-dotted">
                    <td>7.1. crédito interno y externo (7.1.1 - 7.1.2.)</td>
                    <td>{{ $data['ejeCreNet'] }}</td>
                </tr>   
                <tr class="border-dotted">
                    <td>7.1.1. desembolsos (+)</td>
                    <td>{{ $data['ejeDes'] }}</td>
                </tr>   
                <tr class="border-dotted">
                    <td>7.1.2. amortizaciones (-)</td>
                    <td>{{ $data['ejeAmo'] }}</td>
                </tr>   
                <tr class="border-dotted">
                    <td>7.2. recursos balance, var. depósitos, otros</td>
                    <td>{{ $data['ejeRecBalVarDepOtr'] }}</td>
                </tr>
        </thead>
        <tbody>
            
        </tbody>
        </table>

        {{--  --}}
        <h1 class="page-header">Indice de desempeño integral</h1>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Año</th>
                <td>{{ $data['anio'] }}</td>
            </tr>
           <tr class="border-dotted">
                    <td>Desempeño integral capacidad administrativa</td>
                    <td>{{ $data['desIntCapAdm'] }}</td>
                </tr>   
                <tr class="border-dotted">
                    <td>Desempeño integral eficacia total</td>
                    <td>{{ $data['desIntEfiTot'] }}</td>
                </tr>   
                <tr class="border-dotted">
                    <td>Desempeño integral gestión</td>
                    <td>{{ $data['desIntGes'] }}</td>
                </tr>   
                <tr class="border-dotted">
                    <td>Desempeño integral indice integral</td>
                    <td>{{ $data['desIntIndInt'] }}</td>
                </tr>    
                <tr class="border-dotted">
                    <td>Desempeño integral requisitos legales</td>
                    <td>{{ $data['desIntReqLeg'] }}</td>
                </tr>    
                <tr class="border-dotted">
                    <td>Desempeño integral indicador de desempeño fiscal</td>
                    <td>{{ $data['desIntIndDesFis'] }}</td>
                </tr>
        </thead>
        <tbody>
            
        </tbody>
        </table>

        {{--  --}}
        <h1 class="page-header">Indice de desempeño fiscal</h1>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Año</th>
                <td>{{ $data['anio'] }}</td>
            </tr>
           <tr class="border-dotted">   
                    <td>Auto financiación de los gastos de funcionamiento</td>
                    <td>{{ $data['autGasFun'] }}</td>
                </tr>       
                <tr class="border-dotted">
                    <td>Respaldo del servicio de la deuda</td>
                    <td>{{ $data['respSerDeu'] }}</td>
                </tr>       
                <tr class="border-dotted">
                    <td>Dependencia de las transferencias de la nación y las regalías</td>
                    <td>{{ $data['depTraNacReg'] }}</td>
                </tr>       
                <tr class="border-dotted">
                    <td>Generación de recursos propios</td>
                    <td>{{ $data['genRecPro'] }}</td>
                </tr>       
                <tr class="border-dotted">
                    <td>Magnitud de la inversión</td>
                    <td>{{ $data['magInv'] }}</td>
                </tr>       
                <tr class="border-dotted">
                    <td>Capacidad de ahorro</td>
                    <td>{{ $data['capAho'] }}</td>
                </tr>       
                <tr class="border-dotted">
                    <td>Indicador de desempeño fiscal</td>
                    <td>{{ $data['indDesFis'] }}</td>
                </tr>       
                <tr class="border-dotted">
                    <td>Posición a nivel nacional</td>
                    <td>{{ $data['posNivNac'] }}</td>
                </tr>       
                <tr class="border-dotted">
                    <td>Posición a nivel departamento</td>
                    <td>{{ $data['posNivDep'] }}</td>
                </tr>       
        </thead>
        <tbody>
            
        </tbody>
        </table>

</body>
</html>