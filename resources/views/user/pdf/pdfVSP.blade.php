<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <title>Vivienda y servicios públicos</title>
</head>
<body>
	<h1 class="page-header">Vivienda y servicios públicos</h1>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Año</th>
                <td>{{ $data['anio'] }}</td>
            </tr>
            <tr class="border-dotted">
                <td>Viviendas cabecera</td>
                <td>{{ $data['cabViv'] }}</td>
            </tr>
            <tr class="border-dotted">
                <td>Viviendas rural</td>
                <td>{{ $data['rurViv'] }}</td>
            </tr>
            <tr class="border-dotted">
                <td>Viviendas total</td>
                <td>{{ $data['totalViv'] }}</td>
            </tr>
            <tr class="border-dotted">
                <td>Hogares cabecera</td>
                <td>{{ $data['cabHog'] }}</td>
            </tr>
            <tr class="border-dotted">
                <td>Hogares rural</td>
                <td>{{ $data['rurHog'] }}</td>
            </tr>
            <tr class="border-dotted">
                <td>Personas total</td>
                <td>{{ $data['totalHog'] }}</td>
            </tr>
            <tr>
                <td>Hogares por vivienda cabecera</td>
                <td>{{ $data['cabHogViv'] }}</td>
            </tr>
            <tr class="border-dotted">
                <td>Hogares por vivienda rural</td>
                <td>{{ $data['rurHogViv'] }}</td>
            </tr>
            <tr class="border-dotted">
                <td>Hogares por vivienda total</td>
                <td>{{ $data['totalHogViv'] }}</td>
            </tr>
            <tr class="border-dotted">
                <td>Personas por hogar cabecera</td>
                <td>{{ $data['cabPerHog'] }}</td>
            </tr>
            <tr class="border-dotted">
                <td>Personas por hogar rural</td>
                <td>{{ $data['rurPerHog'] }}</td>
            </tr>
            <tr class="border-dotted">
                <td>Personas por hogar total</td>
                <td>{{ $data['totalPerHog'] }}</td>
            </tr>
            <tr class="border-dotted">
                <td>Personas por vivienda cabecera</td>
                <td>{{ $data['cabPerViv'] }}</td>
            </tr>
            <tr class="border-dotted">
                <td>Personas por vivienda rural</td>
                <td>{{ $data['rurPerViv'] }}</td>
            </tr>
            <tr class="border-dotted">
                <td>Personas por vivienda total</td>
                <td>{{ $data['totalPerViv'] }}</td>
            </tr>
        </thead>
        <tbody>
        	
		</tbody>
	    </table>

        {{--  --}}
        <h1 class="page-header">Cobertura alcantarillado</h1>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Año</th>
                <td>{{ $data['anio'] }}</td>
            </tr>
            <tr class="border-dotted">
                    <td>Cabecera</td>
                    <td>{{ $data['cabCA'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Centro poblados</td>
                    <td>{{ $data['centPobCA'] }}</td>
                </tr>
                <tr>
                    <td>Rural disperso</td>
                    <td>{{ $data['rurDispCA'] }}</td>
                </tr>
        </thead>
        <tbody>
            
        </tbody>
        </table>

       {{--  --}}
        <h1 class="page-header">Cobertura aseo</h1>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Año</th>
                <td>{{ $data['anio'] }}</td>
            </tr>
            <tr class="border-dotted">
                    <td>Cabecera</td>
                    <td>{{ $data['cabCAs'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Centro poblados</td>
                    <td>{{ $data['centPobCAs'] }}</td>
                </tr>
                <tr>
                    <td>Rural disperso</td>
                    <td>{{ $data['rurDispCAs'] }}</td>
                </tr>
        </thead>
        <tbody>
            
        </tbody>
        </table>

        {{--  --}}
        <h1 class="page-header">Cobertura gas</h1>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Año</th>
                <td>{{ $data['anio'] }}</td>
            </tr>
            <tr class="border-dotted">
                    <td>Cabecera</td>
                    <td>{{ $data['cabCG'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Centro poblados</td>
                    <td>{{ $data['centPobCG'] }}</td>
                </tr>
                <tr>
                    <td>Rural disperso</td>
                    <td>{{ $data['rurDispCG'] }}</td>
                </tr>
        </thead>
        <tbody>
            
        </tbody>
        </table>

        {{--  --}}
        <h1 class="page-header">Cobertura teléfono</h1>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Año</th>
                <td>{{ $data['anio'] }}</td>
            </tr>
            <tr class="border-dotted">
                    <td>Cabecera</td>
                    <td>{{ $data['cabCT'] }}</td>
                </tr>
                <tr class="border-dotted">
                    <td>Centro poblados</td>
                    <td>{{ $data['centPobCT'] }}</td>
                </tr>
                <tr>
                    <td>Rural disperso</td>
                    <td>{{ $data['rurDispCT'] }}</td>
                </tr>
        </thead>
        <tbody>
            
        </tbody>
        </table>
</body>
</html>