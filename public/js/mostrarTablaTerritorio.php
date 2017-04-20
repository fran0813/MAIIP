<?php

	$idmun = $_POST['idmun'];

	try{

		$conn = new PDO('mysql:host=localhost; dbname=maiip', "root", "12345");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = $conn->prepare('SELECT * FROM municipios,generalidadesterritorios,territorios WHERE generalidadesterritorios.municipio_id = :idmun and municipios.id = :idmun and generalidadesterritorios.id=territorios.generalidadterritorio_id');
		$sql->execute(array('idmun' => $idmun));
		$resultados = $sql->fetchAll();
		$html = "";

		foreach ($resultados as $resultado) {
			$constRural = $resultado['constRural'];
			$constUrbano = $resultado['constUrbano'];
			$constTotal = $resultado['constTotal'];
			$terrRural = $resultado['terrRural'];
			$terrUrbano = $resultado['terrUrbano'];
			$terrTotal = $resultado['terrTotal'];

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
									<td>Zona rural</td>
									<td>$constRural</td>
									<td>$terrRural</td>
								</tr>
								<tr>
									<td>Zona urbana</td>
									<td>$constUrbano</td>
									<td>$terrUrbano</td>
								</tr>
								<tr>
									<td>Total por municipio</td>
									<td>$constTotal</td>
									<td>$terrTotal</td>
								</tr>
							</tbody>
						</table>";
		};

		echo json_encode($html);

	}catch(PDOException $e){

		$a = "ERROR:".$e->getMessage();
		echo json_encode($a);

	}

?>