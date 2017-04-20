<?php

	$idmun = $_POST['idmun'];

	try{

		$conn = new PDO('mysql:host=localhost; dbname=maiip', "root", "12345");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = $conn->prepare('SELECT * FROM municipios,generalidadesterritorios WHERE generalidadesterritorios.municipio_id = :idmun and municipios.id = :idmun');
		$sql->execute(array('idmun' => $idmun));
		$resultados = $sql->fetchAll();
		$html = "";

		foreach ($resultados as $resultado) {
			$temperatura = $resultado['temperatura'];
			$alturaNivMar = $resultado['alturaNivMar'];
			
			$html .= "<table class='table table-bordered'>
							<thead>
								<tr>
									<th>Datos</th>
									<th>Valores</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Temperatura Media(°C)</td>
									<td>$temperatura</td>
								</tr>
								<tr>
									<td>Altura sobre el nivel del mal</td>
									<td>$alturaNivMar</td>
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