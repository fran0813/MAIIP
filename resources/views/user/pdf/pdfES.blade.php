<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <title>Económico social</title>
</head>
<body>
	<h1 class="page-header">Unidades comerciales</h1>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Año</th>
                <td>{{ $data['anio'] }}</td>
            </tr>
           <tr class="border-dotted">
                    <td>Unidades comerciales</td>
                    <td>{{ $data['uniCom'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Unidades de servicios</td>
                    <td>{{ $data['uniSer'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Unidades grande comerciales</td>
                    <td>{{ $data['uniGraCom'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Unidades grande industria</td>
                    <td>{{ $data['uniGraInd'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Unidades grande servicios</td>
                    <td>{{ $data['uniGraSer'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Unidades industriales</td>
                    <td>{{ $data['uniInd'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Unidades mediana comerciales</td>
                    <td>{{ $data['uniMedCom'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Unidades mediana industria</td>
                    <td>{{ $data['uniMedInd'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Unidades mediana servicios</td>
                    <td>{{ $data['uniMedSer'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Unidades micro comerciales</td>
                    <td>{{ $data['uniMicCom'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Unidades micro industria</td>
                    <td>{{ $data['uniMicInd'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Unidades micro servicios</td>
                    <td>{{ $data['uniMicSer'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Unidades pequeña comerciales</td>
                    <td>{{ $data['uniPeqCom'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Unidades pequeña industria</td>
                    <td>{{ $data['uniPeqInd'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Unidades pequeña Servicios</td>
                    <td>{{ $data['uniPeqSer'] }}</td>
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
                    <td>Alta tasa de dependencia económica</td>
                    <td>{{ $data['altTasDepEco'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Analfabetismo</td>
                    <td>{{ $data['ana'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Bajo logro educativo</td>
                    <td>{{ $data['bajLogEdu'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Barreras de acceso a servicio de salud</td>
                    <td>{{ $data['barAccSerSal'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Barreras de acceso a servicios para cuidado de la primera infancia</td>
                    <td>{{ $data['barAccSerCiu'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Empleo informal</td>
                    <td>{{ $data['empInf'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Hacinamiento</td>
                    <td>{{ $data['hac'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Inadecuada eliminación de excretas</td>
                    <td>{{ $data['inaEliExc'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Inasistencia escolar</td>
                    <td>{{ $data['inaEsc'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Paredes inadecuadas</td>
                    <td>{{ $data['parIna'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Pisos inadecuados</td>
                    <td>{{ $data['pisIna'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Rezago escolar</td>
                    <td>{{ $data['rezEsc'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Sin acceso a fuente de agua mejorada</td>
                    <td>{{ $data['sinAccFueAgMej'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Sin aseguramiento en salud</td>
                    <td>{{ $data['sinAseSal'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Trabajo infantil</td>
                    <td>{{ $data['traInf'] }}</td>
                </tr>
        </thead>
        <tbody>
            
        </tbody>
        </table>

        {{--  --}}
        <h1 class="page-header">Económico-social</h1>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Año</th>
                <td>{{ $data['anio'] }}</td>
            </tr>
           <tr class="border-dotted">
                    <td>Número de hectáreas sembradas con bosques por municipio área en bosques total</td>
                    <td>{{ $data['numHecSemBos'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Área agrícola cosechada total</td>
                    <td>{{ $data['areAgrCosTot'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Producción agrícola total</td>
                    <td>{{ $data['proAgrTot'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Producción de carbón</td>
                    <td>{{ $data['proCar'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Inventario bovinos total machos</td>
                    <td>{{ $data['invBovTotMac'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Inventario bovinos total hembras</td>
                    <td>{{ $data['invBovTotHem'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Inventario bovinos total</td>
                    <td>{{ $data['invBovTot'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Incidencia IPM total</td>
                    <td>{{ $data['incIpmTot'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Incidencia IPM urbano</td>
                    <td>{{ $data['incIpmUrb'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Incidencia IPM rural</td>
                    <td>{{ $data['incIpmRur'] }}</td>
                </tr>
        </thead>
        <tbody>
            
        </tbody>
        </table>

</body>
</html>