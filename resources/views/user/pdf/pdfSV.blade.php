<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <title>Seguridad y violencia</title>
</head>
<body>
	<h1 class="page-header">Seguridad y violencia</h1>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Año</th>
                <td>{{ $data['anio'] }}</td>
            </tr>
           <tr class="border-dotted">
                    <td>Tasa de deserción escolar total</td>
                    <td>{{ $data['tasDesEscTot'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Tasa de homicidios</td>
                    <td>{{ $data['tasHom'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Tasa de incidencia dengue</td>
                    <td>{{ $data['tasIncDen'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Tasa de lesiones personales</td>
                    <td>{{ $data['tasLesPer'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Tasa de muertes por accidentes de tránsito</td>
                    <td>{{ $data['tasMueAcc'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Tasa de suicidios</td>
                    <td>{{ $data['tasSui'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Violencia interpersonal</td>
                    <td>{{ $data['vioInt'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Casos totales</td>
                    <td>{{ $data['casTot'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Casos y tasa homicidios</td>
                    <td>{{ $data['casTasHom'] }}</td>
                </tr>
        </thead>
        <tbody>
        	
		</tbody>
	    </table>

        {{--  --}}
        <h1 class="page-header">Lesiones</h1>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Año</th>
                <td>{{ $data['anio'] }}</td>
            </tr>
            <tr class="border-dotted">
                    <td>Lesiones fatales total</td>
                    <td>{{ $data['fatTot'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Lesiones fatales hombre</td>
                    <td>{{ $data['fatHom'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Lesiones fatales mujer</td>
                    <td>{{ $data['fatMuj'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Lesiones no fatales total</td>
                    <td>{{ $data['noFatTot'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Lesiones no fatales hombre</td>
                    <td>{{ $data['noFatHom'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Lesiones no fatales mujer</td>
                    <td>{{ $data['noFatMuj'] }}</td>
                </tr>
        </thead>
        <tbody>
            
        </tbody>
        </table>

        {{--  --}}
        <h1 class="page-header">Delitos sexuales</h1>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Año</th>
                <td>{{ $data['anio'] }}</td>
            </tr>
           <tr class="border-dotted">
                    <td>Total</td>
                    <td>{{ $data['tot'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Hombre</td>
                    <td>{{ $data['hom'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Mujer</td>
                    <td>{{ $data['muj'] }}</td>
                </tr>
        </thead>
        <tbody>
            
        </tbody>
        </table>

        {{--  --}}
        <h1 class="page-header">Violencia</h1>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Año</th>
                <td>{{ $data['anio'] }}</td>
            </tr>
           <tr class="border-dotted">
                    <td>Violencia a personas mayores</td>
                    <td>{{ $data['may'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Violencia entre otros familiares</td>
                    <td>{{ $data['otrFam'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>violencia infantil</td>
                    <td>{{ $data['inf'] }}</td>
                </tr>
        </thead>
        <tbody>
            
        </tbody>
        </table>

</body>
</html>