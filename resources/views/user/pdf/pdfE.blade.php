<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <title>Educación</title>
</head>
<body>
	<h1 class="page-header">Educación</h1>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Año</th>
                <td>{{ $data['anio'] }}</td>
            </tr>
            <tr class="border-dotted">
                <td>Prejardin y jardín (rural)</td>
                <td>{{ $data['rurJardin'] }}</td>
            </tr>
            <tr class="border-dotted">
                <td>Prejardin y jardín (urbano)</td>
                <td>{{ $data['urbJardin'] }}</td>
            </tr>
            <tr class="border-dotted">
                <td>Transición (rural)</td>
                <td>{{ $data['rurTrans'] }}</td>
            </tr>
            <tr class="border-dotted">
                <td>Transición (urbano)</td>
                <td>{{ $data['urbTrans'] }}</td>
            </tr>
            <tr class="border-dotted">
                <td>Primaria (rural)</td>
                <td>{{ $data['rurPrim'] }}</td>
            </tr>
            <tr class="border-dotted">
                <td>Primaria (urbano)</td>
                <td>{{ $data['urbPrim'] }}</td>
            </tr>
            <tr class="border-dotted">
                <td>Secundaria (rural)</td>
                <td>{{ $data['rurSecu'] }}</td>
            </tr>
            <tr class="border-dotted">
                <td>Secundaria (urbano)</td>
                <td>{{ $data['urbSecu'] }}</td>
            </tr>
            <tr class="border-dotted">
                <td>Media (rural)</td>
                <td>{{ $data['rurMedia'] }}</td>
            </tr>
            <tr>
                <td>Media (urbano)</td>
                <td>{{ $data['urbMedia'] }}</td>
            </tr>
        </thead>
        <tbody>
        	
		</tbody>
	    </table>

        {{--  --}}
        <h1 class="page-header">Matricula por nivel</h1>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Año</th>
                <td>{{ $data['anio'] }}</td>
            </tr>
            <tr class="border-dotted">
                <td>Prejardin y jardín</td>
                <<td>{{ $data['jardin'] }}</td>
            </tr>
            <tr class="border-dotted">
                <td>Transición</td>
                <td>{{ $data['trans'] }}</td>
            </tr>
            <tr>
                <td>Primaria</td>
                <td>{{ $data['prim'] }}</td>
            </tr>
            <tr>
                <td>Secundaria</td>
                <td>{{ $data['secu'] }}</td>
            </tr>
            <tr>
                <td>Media</td>
                <td>{{ $data['media'] }}</td>
            </tr>
        </thead>
        <tbody>
            
        </tbody>
        </table>

        {{--  --}}
        <h1 class="page-header">Matricula por genero</h1>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Año</th>
                <td>{{ $data['anio'] }}</td>
            </tr>
            <tr class="border-dotted">
                <td>Femenino</td>
                <td>{{ $data['femenino'] }}</td>
            </tr>
            <tr class="border-dotted">
                <td>Masculino</td>
                <td>{{ $data['masculino'] }}</td>
            </tr>
        </thead>
        <tbody>
            
        </tbody>
        </table>
</body>
</html>