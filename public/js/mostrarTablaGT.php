<?php

	$idmun = $_POST['idmun'];

	try{

		$conn = new PDO('mysql:host=localhost; dbname=maiip', "root", "12345");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = $conn->prepare('SELECT * FROM municipios,generalidadesterritorios WHERE generalidadesterritorios.municipio_id = :idmun and municipios.id = :idmun');
		$sql->execute(array('idmun' => $idmun));
		$resultados = $sql->fetchAll();
		$html = "";

		$html .="<table class='table table-bordered'>
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
			
			$html .= "<td>$temperatura</td>";
								
		};

		$html .="</tr>
				<tr'>
				<td>Altura sobre el nivel del mal</td>";

		foreach ($resultados as $resultado) {
			$alturaNivMar = $resultado['alturaNivMar'];
			
			$html .= "<td>$alturaNivMar</td>";

		};

		$html .="</tr>
				</tbody>
				</table>";

		echo json_encode($html);

	}catch(PDOException $e){

		$a = "ERROR:".$e->getMessage();
		echo json_encode($a);

	}

?>