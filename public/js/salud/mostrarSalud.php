<?php

	// Variables de entorno
	$db_connection = getenv('DB_CONNECTION');	
	$db_host = getenv('DB_HOST');
	$db_database = getenv('DB_DATABASE');
	$db_username = getenv('DB_USERNAME');
	$db_password = getenv('DB_PASSWORD');

	$idMunicipio = $_POST['idMunicipio'];
	$anioS = $_POST['anioS'];

	try{

		$conn = new PDO("$db_connection:host=$db_host; dbname=$db_database", "$db_username", "$db_password");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = $conn->prepare('SELECT * FROM salud,vacunaciones,discapacidades WHERE salud.municipio_id = :idMunicipio AND vacunaciones.salud_id = salud.id AND discapacidades.salud_id = salud.id AND YEAR(anioS) = :anioS');
		$sql->execute(array('idMunicipio' => $idMunicipio, 'anioS' => $anioS));
		$resultados = $sql->fetchAll();
		$html = "";

		//Tabla de vacunaciones
		$html .="<div class='col-sm-6 col-md-6 col-lg-6'>

			<table class='table table-bordered table-hover'>
				<thead class='thead-s'>
					<tr>
						<th>Tasa de Vacunación</th>
						<th>Valores</th>
					</tr>
				</thead>
				<tbody>
					<tr class='border-dotted'>
						<td>BCG</td>";
							
		foreach ($resultados as $resultado) {
			$tasVacBCG = $resultado['tasVacBCG'];
			
			$html .="<td>$tasVacBCG</td>";
								
		};

		$html .="</tr>
					<tr class='border-dotted'>
						<td>DPT</td>";

		foreach ($resultados as $resultado) {
			$tasVacDPT = $resultado['tasVacDPT'];

			$html .="<td>$tasVacDPT</td>";

		};

		$html .="</tr>
					<tr class='border-dotted'>
						<td>Hepatitis B</td>";

		foreach ($resultados as $resultado) {
			$tasVacHepatitisB = $resultado['tasVacHepatitisB'];

			$html .="<td>$tasVacHepatitisB</td>";

		};

		$html .="</tr>
					<tr class='border-dotted'>
						<td>HIB</td>";

		foreach ($resultados as $resultado) {
			$tasVacHIB = $resultado['tasVacHIB'];
			
			$html .="<td>$tasVacHIB</td>";

		};

		$html .="</tr>
					<tr class='border-dotted'>
						<td>Polio</td>";

		foreach ($resultados as $resultado) {
			$tasVacPolio = $resultado['tasVacPolio'];
			
			$html .="<td>$tasVacPolio</td>";

		};

		$html .="</tr>
					<tr>
						<td>Triple viral</td>";

		foreach ($resultados as $resultado) {
			$tasVacTripleViral = $resultado['tasVacTripleViral'];
			
			$html .="<td>$tasVacTripleViral</td>";

		};

		$html .="</tr>
				</tbody>
				</table>

				</div>";

		// Tabla discapacidades
		$html .="<div class='col-sm-6 col-md-6 col-lg-6'>

			<table class='table table-bordered table-hover'>
				<thead class='thead-s'>
					<tr>
						<th>Discapacidades</th>
						<th>Valores</th>
					</tr>
				</thead>
				<tbody>
					<tr class='border-dotted'>
						<td>Dificultad para bañarse o moverse</td>";

		foreach ($resultados as $resultado) {
			$difBaMov = $resultado['difBaMov'];

			$html .= "<td>$difBaMov</td>";
		};

		$html .="</tr>
					<tr class='border-dotted'>
						<td>Dificultad para entender o aprender</td>";

		foreach ($resultados as $resultado) {
			$difEntApr = $resultado['difEntApr'];

			$html .= "<td>$difEntApr</td>";							
		};

		$html .="</tr>
					<tr class='border-dotted'>
						<td>Dificultad para moverse o para caminar por si</td>";

		foreach ($resultados as $resultado) {
			$difMovCam = $resultado['difMovCam'];

			$html .= "<td>$difMovCam</td>";
		};

		$html .="</tr>
					<tr class='border-dotted'>
						<td>Dificultad para salir a la calle sin ayuda o compañía</td>";

		foreach ($resultados as $resultado) {
			$difSalirCalle = $resultado['difSalirCalle'];

			$html .= "<td>$difSalirCalle</td>";
		};

		$html .="</tr>
					<tr>
						<td>Total de población con Discapacidad</td>";

		foreach ($resultados as $resultado) {
			$totalDis = $resultado['totalDis'];

			$html .= "<td>$totalDis</td>";
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