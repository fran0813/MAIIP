<?php

	// Variables de entorno
	$db_connection = getenv('DB_CONNECTION');	
	$db_host = getenv('DB_HOST');
	$db_database = getenv('DB_DATABASE');
	$db_username = getenv('DB_USERNAME');
	$db_password = getenv('DB_PASSWORD');

	$idMunicipio = $_POST['idMunicipio'];
	$anioGT = $_POST['anioGT'];

	try{

		$conn = new PDO("$db_connection:host=$db_host; dbname=$db_database", "$db_username", "$db_password");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = $conn->prepare('SELECT * FROM generalidadesterritorios,predios,generalidades,territorios WHERE generalidadesterritorios.municipio_id = :idMunicipio AND predios.generalidadterritorio_id = generalidadesterritorios.id AND generalidades.generalidadterritorio_id = generalidadesterritorios.id AND territorios.generalidadterritorio_id = generalidadesterritorios.id AND YEAR(anioGT) = :anioGT');
		$sql->execute(array('idMunicipio' => $idMunicipio, 'anioGT' => $anioGT));
		$resultados = $sql->fetchAll();
		$html = "";

		// Tabla de datos principales
		$html .="<div class='col-sm-6 col-md-6 col-lg-6'>

				<table class='table table-bordered'>
				<thead class='thead-s'>
				<tr>
				<th>Datos</th>
				<th>Valores</th>
				</tr>
				</thead>
				<tbody>
				<tr class='border-dotted'>
				<td>Temperatura Media(°C)</td>";
							
		foreach ($resultados as $resultado) {
			$temperatura = $resultado['temperatura'];

			if($temperatura == 0){
				$temperatura = "N.D.";
			}
			
			$html .= "<td>$temperatura</td>";
								
		};

		$html .="</tr>
				<tr'>
				<td>Altura sobre el nivel del mal</td>";

		foreach ($resultados as $resultado) {
			$alturaNivMar = $resultado['alturaNivMar'];

			if($alturaNivMar == 0){
				$alturaNivMar= "N.D.";
			}
			
			$html .= "<td>$alturaNivMar</td>";

		};

		$html .="</tr>
				</tbody>
				</table>

				</div>";

		// Tabla de predios
		$html .="<div class='col-sm-6 col-md-6 col-lg-6'>

				<table class='table table-bordered'>
				<thead class='thead-s'>
				<tr>
				<th>Predios</th>
				<th>Valores</th>
				</tr>
				</thead>
				<tbody>
				<tr class='border-dotted'>
				<td>Zona rural</td>";

		foreach ($resultados as $resultado) {
			$ruralP = $resultado['ruralP'];

			$html .= "<td>$ruralP</td>";
		};

		$html .="</tr>
				<tr class='border-dotted'>
				<td>Zona urbana</td>";

		foreach ($resultados as $resultado) {
			$urbanoP = $resultado['urbanoP'];

			$html .= "<td>$urbanoP</td>";							
		};

		$html .="</tr>
				<tr>
				<td>Total por municipio</td>";

		foreach ($resultados as $resultado) {
			$totalP = $resultado['totalP'];

			$html .= "<td>$totalP</td>";
		};

		$html .="</tr>
				</tbody>
				</table>

				</div>";

		// Tabla de generalidad
		$html .="<div class='col-sm-6 col-md-6 col-lg-6'>

				<table class='table table-bordered'>
				<thead class='thead-s'>
				<tr>
				<th>Generalidad</th>
				<th>Valores (km2)</th>
				</tr>
				</thead>
				<tbody>
				<tr class='border-dotted'>
				<td>Rural</td>";

		foreach ($resultados as $resultado) {
			$ruralG = $resultado['ruralG'];
		
			$html .= "<td>$ruralG</td>";
								
		};

		$html .="</tr>
				<tr class='border-dotted'>
				<td>Urbana</td>";

		foreach ($resultados as $resultado) {
			$urbanoG = $resultado['urbanoG'];

			$html .="<td>$urbanoG</td>";
		}

		$html .="</tr>
				<tr>
				<td>Extensión total</td>";

		foreach ($resultados as $resultado) {
			$totalG = $resultado['totalG'];

			$html .="<td>$totalG</td>";
		}
		
		$html .="</tr>
				</tbody>
				</table>

				</div>";

		// Tabla de territorio
		$html .="<div class='col-sm-6 col-md-6 col-lg-6'>
				<table class='table table-bordered'>
				<thead class='thead-s'>
				<tr>
				<th>Territorio</th>
				<th>A. construida</th>
				<th>A. terreno</th>
				</tr>
				</thead>
				<tbody>
				<tr class='border-dotted'>
				<td>Zona rural</td>";

		foreach ($resultados as $resultado) {
			$constRural = $resultado['constRural'];
			$terrRural = $resultado['terrRural'];

			$html .= "<td>$constRural</td>
						<td>$terrRural</td>";
		};

		$html .="</tr>
				<tr class='border-dotted'>
				<td>Zona urbana</td>";

		foreach ($resultados as $resultado) {
			$constUrbano = $resultado['constUrbano'];
			$terrUrbano = $resultado['terrUrbano'];

			$html .= "<td>$constUrbano</td>
						<td>$terrUrbano</td>";						
		};

		$html .="</tr>
				<tr>
				<td>Total por municipio</td>";

		foreach ($resultados as $resultado) {
			$constTotal = $resultado['constTotal'];
			$terrTotal = $resultado['terrTotal'];

			$html .= "<td>$constTotal</td>
						<td>$terrTotal</td>";
		};

		$html .="</tr>
				</tbody>
				</table>

				</div>";

		echo json_encode($html);

	}catch(PDOException $e){

		$a = "ERROR:".$e->getMessage();
		echo json_encode($a);

	}

?>