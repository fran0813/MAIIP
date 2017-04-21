<?php

	$idmun = $_POST['idmun'];

	try{

		$conn = new PDO('mysql:host=localhost; dbname=maiip', "root", "12345");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = $conn->prepare('SELECT * FROM municipios,generalidadesterritorios,generalidades WHERE generalidadesterritorios.municipio_id = :idmun and municipios.id = :idmun and generalidadesterritorios.id=generalidades.generalidadterritorio_id');
		$sql->execute(array('idmun' => $idmun));
		$resultados = $sql->fetchAll();
		$html = "";

		$html .= "<table class='table table-bordered'>
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

		$html .= "</tr>
					<tr class='border-dotted'>
						<td>Urbana</td>";
		foreach ($resultados as $resultado) {
			$urbanoG = $resultado['urbanoG'];

			$html .="<td>$urbanoG</td>";
		}

		$html .= "</tr>
					<tr>
						<td>Extensión total</td>";
		foreach ($resultados as $resultado) {
			$totalG = $resultado['totalG'];

			$html .="<td>$totalG</td>";
		}
		$html .=		"</tr>
					</tbody>
				</table>";

		echo json_encode($html);

	}catch(PDOException $e){

		$a = "ERROR:".$e->getMessage();
		echo json_encode($a);

	}

?>