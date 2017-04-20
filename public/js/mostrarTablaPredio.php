<?php

	$idmun = $_POST['idmun'];

	try{

		$conn = new PDO('mysql:host=localhost; dbname=maiip', "root", "12345");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = $conn->prepare('SELECT * FROM municipios,generalidadesterritorios,predios WHERE generalidadesterritorios.municipio_id = :idmun and municipios.id = :idmun and generalidadesterritorios.id=predios.generalidadterritorio_id');
		$sql->execute(array('idmun' => $idmun));
		$resultados = $sql->fetchAll();
		$html = "";

		foreach ($resultados as $resultado) {
			$ruralP = $resultado['ruralP'];
			$urbanoP = $resultado['urbanoP'];
			$totalP = $resultado['totalP'];

			$html .= "<table class='table table-bordered'>
							<thead>
								<tr>
									<th>Predios</th>
									<th>Valores</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Zona rural</td>
									<td>$ruralP</td>
								</tr>
								<tr>
									<td>Zona urbana</td>
									<td>$urbanoP</td>
								</tr>
								<tr>
									<td>Total por municipio</td>
									<td>$totalP</td>
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