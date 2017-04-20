<?php

	$idmun = $_POST['idmun'];

	try{

		$conn = new PDO('mysql:host=localhost; dbname=maiip', "root", "12345");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = $conn->prepare('SELECT * FROM municipios,generalidadesterritorios,territorios WHERE generalidadesterritorios.municipio_id = :idmun and municipios.id = :idmun and generalidadesterritorios.id=territorios.generalidadterritorio_id');
		$sql->execute(array('idmun' => $idmun));
		$resultados = $sql->fetchAll();
		$html = "";

		$html .= "<table class='table table-bordered'>
					<thead>
						<tr>
							<th>Territorio</th>
							<th>A. construida</th>
							<th>A. terreno</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Zona rural</td>";
		foreach ($resultados as $resultado) {
			$constRural = $resultado['constRural'];
			$terrRural = $resultado['terrRural'];

			$html .= "<td>$constRural</td>
						<td>$terrRural</td>";
		};

		$html .= "</tr>
					<tr>
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

		$html .=		"</tr>
					</tbody>
				</table>";

		echo json_encode($html);

	}catch(PDOException $e){

		$a = "ERROR:".$e->getMessage();
		echo json_encode($a);

	}

?>