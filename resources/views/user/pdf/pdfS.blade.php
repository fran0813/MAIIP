<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <title>Salud</title>
</head>
<body>
	<h1 class="page-header">Salud</h1>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Año</th>
                <td>{{ $data['anio'] }}</td>
            </tr>
            <tr class="border-dotted">
                <td>BCG</td>
                <td>{{ $data['tasVacBCG'] }}</td>
            </tr>
            <tr class="border-dotted">
                <td>DPT</td>
                <td>{{ $data['tasVacDPT'] }}</td>
            </tr>
            <tr class="border-dotted">
                <td>Hepatitis B</td>
                <td>{{ $data['tasVacHepatitisB'] }}</td>
            </tr>
            <tr class="border-dotted">
                <td>HIB</td>
                <td>{{ $data['tasVacHIB'] }}</td>
            </tr>
            <tr class="border-dotted">
                <td>Polio</td>
                <td>{{ $data['tasVacPolio'] }}</td>
            </tr>
            <tr>
                <td>Triple viral</td>
                <td>{{ $data['tasVacTripleViral'] }}</td>
            </tr>
        </thead>
        <tbody>
        	
		</tbody>
	    </table>

        {{--  --}}
        <h1 class="page-header">Discapacidades</h1>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Año</th>
                <td>{{ $data['anio'] }}</td>
            </tr>
            <tr class="border-dotted">
                    <td>Dificultad para bañarse o moverse</td>
                    <td>{{ $data['difBaMov'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Dificultad para entender o aprender</td>
                    <td>{{ $data['difEntApr'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Dificultad para moverse o para caminar por si</td>
                    <td>{{ $data['difMovCam'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Dificultad para salir a la calle sin ayuda o compañía</td>
                    <td>{{ $data['difSalirCalle'] }}</td>
                </tr>
                <tr>
                    <td>Total de población con Discapacidad</td>
                    <td>{{ $data['totalDis'] }}</td>
                </tr>
        </thead>
        <tbody>
            
        </tbody>
        </table>


</body>
</html>