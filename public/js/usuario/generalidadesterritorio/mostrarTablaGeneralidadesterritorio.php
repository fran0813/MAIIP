<?php

	// Variables de entorno
	$db_connection = getenv('DB_CONNECTION');	
	$db_host = getenv('DB_HOST'); 
	$db_database = getenv('DB_DATABASE');
	$db_username = getenv('DB_USERNAME');
	$db_password = getenv('DB_PASSWORD');

	$idMunicipio = $_POST['idMunicipio'];

	try{

		$conn = new PDO("$db_connection:host=$db_host; dbname=maiip", "u_maiip", "$db_password");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = $conn->prepare('SELECT id,YEAR(anioGT),temperatura,alturaNivMar FROM generalidadesterritorios WHERE generalidadesterritorios.municipio_id = :idMunicipio ORDER BY anioGT');
		$sql->execute(array('idMunicipio' => $idMunicipio));
		$resultados = $sql->fetchAll();
		$html = "";

		$html .="<table class='table table-striped table-bordered table-hover'>
				<thead>
				<tr>
				<th>Año</th>
				<th>Temperatura</th>
				<th>Altura sobre el nivel del mar</th>
				<th>Funciones</th>
				</tr>
				</thead>
				<tbody>";

		foreach ($resultados as $resultado) {
			
			$id = $resultado['id'];
			$anio = $resultado['YEAR(anioGT)'];
			$temperatura = $resultado['temperatura'];
			$alturaNivMar = $resultado['alturaNivMar'];
			
			$html .="<tr>
					<td>$anio</td>
					<td>$temperatura</td>
					<td>$alturaNivMar</td>
					<td><a id='$id' href='#' class='btn btn-success' data-toggle='modal' data-target='#modalMostrarActualizar'>Editar</a></td>
					</tr>";
		};

		$html .="</tbody>
				</table>";

		// <a id='$id' href='#' class='btn btn-danger'>Borrar</a>

		echo json_encode($html);

	}catch(PDOException $e){

		$e->getMessage();
		echo json_encode($e);

	}

?>