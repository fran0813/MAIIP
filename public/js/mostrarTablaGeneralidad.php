<?php

	$idmun = $_POST['idmun'];

	try{

		$conn = new PDO('mysql:host=localhost; dbname=maiip', "root", "12345");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = $conn->prepare('SELECT * FROM municipios,generalidadesterritorios,generalidades WHERE generalidadesterritorios.municipio_id = :idmun and municipios.id = :idmun and generalidadesterritorios.id=generalidades.generalidadterritorio_id');
		$sql->execute(array('idmun' => $idmun));
		$resultados = $sql->fetchAll();
		$html = "";

		foreach ($resultados as $resultado) {
			$ruralG = $resultado['ruralG'];
			$urbanoG = $resultado['urbanoG'];
			$totalG = $resultado['totalG'];

			$html .= "<table class='table table-bordered'>
							<thead>
								<tr>
									<th>Generalidad</th>
									<th>Valores (km2)</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Rural</td>
									<td>$ruralG</td>
								</tr>
								<tr>
									<td>Urbana</td>
									<td>$urbanoG</td>
								</tr>
								<tr>
									<td>Extensión total</td>
									<td>$totalG</td>
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