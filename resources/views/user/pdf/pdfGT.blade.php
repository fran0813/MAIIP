<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <title>Generalidades y territorios</title>
</head>
<body>
	<h1 class="page-header">Generalidades y territorios</h1>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Año</th>
                <td>{{ $data['anio'] }}</td>
            </tr> 
            <tr>
                <th>Temperatura</th>
                <td>{{ $data['temperatura'] }}</td>
            </tr> 
            <tr>
                <th>Altura nivel del mar</th>
                <td>{{ $data['alturaNivMar'] }}</td>
            </tr> 
        </thead>
        <tbody>
        	
		</tbody>
	    </table>

        {{--  --}}
        <h1 class="page-header">Generalidades</h1>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Año</th>
                <td>{{ $data['anio'] }}</td>
            </tr> 
            <tr>
                <th>Rural generalidades</th>
                <td>{{ $data['ruralG'] }}</td>
            </tr> 
            <tr>
                <th>Urbano Generalidades</th>
                <td>{{ $data['urbanoG'] }}</td>
            </tr> 
            <tr>
                <th>Total generalidades</th>
                <td>{{ $data['totalG'] }}</td>
            </tr>             
        </thead>
        <tbody>
            
        </tbody>
        </table>

        {{--  --}}
        <h1 class="page-header">Territorios</h1>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Año</th>
                <td>{{ $data['anio'] }}</td>
            </tr>  
            <tr>
                <th>Construcción rural</th>
                <td>{{ $data['constRural'] }}</td>
            </tr> 
            <tr>
                <th>Construcción urbano</th>
                <td>{{ $data['constUrbano'] }}</td>
            </tr> 
            <tr>
                <th>Construcción total</th>
                <td>{{ $data['constTotal'] }}</td>
            </tr> 
            <tr>
                <th>Territorio rural</th>
                <td>{{ $data['terrRural'] }}</td>
            </tr> 
            <tr>
                <th>Territorio Urbano</th>
                <td>{{ $data['terrUrbano'] }}</td>
            </tr> 
            <tr>
                <th>Territorio Total</th>
                <td>{{ $data['terrTotal'] }}</td>
            </tr> 
        </thead>
        <tbody>
            
        </tbody>
        </table>

         {{--  --}}
        <h1 class="page-header">Predio</h1>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Año</th>
                <td>{{ $data['anio'] }}</td>
            </tr>  
            <tr>
                <th>Rural predio</th>
                <td>{{ $data['ruralP'] }}</td>
            </tr> 
            <tr>
                <th>Urbano predio</th>
                <td>{{ $data['urbanoP'] }}</td>
            </tr> 
            <tr>
                <th>Total predio</th>
                <td>{{ $data['totalP'] }}</td>
            </tr> 
        </thead>
        <tbody>
            
        </tbody>
        </table>
</body>
</html>