<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <title>Demografías</title>
</head>
<body>
	<h1 class="page-header">Demografías</h1>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Año</th>
                <td>{{ $data['anio'] }}</td>
            </tr>
            <tr class="border-dotted">
                <td>Población en edad de trabajar</td>
                <td>{{ $data['pobEdadTrabajar'] }}</td>
            </tr>
            <tr class="border-dotted">
                <td>Población potencialmente activa</td>
                <td>{{ $data['pobPotActiva'] }}</td>
            </tr>
            <tr class="border-dotted">
                <td>Población potencialmente inactiva</td>
                <td>{{ $data['pobPotInactiva'] }}</td>
            </tr>
            <tr class="border-dotted">
                <td>Número de personas menores a 15 años</td>
                <td>{{ $data['numPerMen'] }}</td>
            </tr>
            <tr class="border-dotted">
                <td>Número de personas mayores a 64 años</td>
                <td>{{ $data['numPerMay'] }}</td>
            </tr>
            <tr class="border-dotted">
                <td>Número de personas independientes</td>
                <td>{{ $data['numPerInd'] }}</td>
            </tr>
            <tr class="border-dotted">
                <td>Número de personas dependientes</td>
                <td>{{ $data['numPerDep'] }}</td>
            </tr>
            <tr class="border-dotted">
                <td>Población por género - Hombres</td>
                <td>{{ $data['pobHom'] }}</td>
            </tr>
            <tr class="border-dotted">
                <td>Población por género - Mujeres</td>
                <td>{{ $data['pobMuj'] }}</td>
            </tr>
            <tr class="border-dotted">
                <td>Población por zona - Cabecera</td>
                <td>{{ $data['pobZonCab'] }}</td>
            </tr>
            <tr class="border-dotted">
                <td>Población por zona - Resto</td>
                <td>{{ $data['pobZonRes'] }}</td>
            </tr>
            <tr class="border-dotted">
                <td>Índice de ruralidad</td>
                <td>{{ $data['indRuralidad'] }}</td>
            </tr>
            <tr class="border-dotted">
                <td>Población total</td>
                <td>{{ $data['pobTotal'] }}</td>
            </tr>
            <tr>
                <td>Crecimiento poblacional</td>
                <td>{{ $data['crecPob'] }}</td>
            </tr>
        </thead>
        <tbody>
        	
		</tbody>
	    </table>

</body>
</html>