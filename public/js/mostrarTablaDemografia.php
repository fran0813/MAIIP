<?php

	$idmun = $_POST['idmun'];

	try{

		$conn = new PDO('mysql:host=localhost; dbname=maiip', "root", "12345");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = $conn->prepare('SELECT * FROM municipios,demografias WHERE demografias.municipio_id = :idmun and municipios.id = :idmun ORDER BY demografias.anio ASC LIMIT 10');
		$sql->execute(array('idmun' => $idmun));
		$resultados = $sql->fetchAll();
		$html = "";

		$html .= "<table class='table table-bordered'>
					<thead>
						<tr>
							<th>Datos</th>";
		foreach ($resultados as $resultado) {
			$anio = $resultado['anio'];
			// $alturaNivMar = $resultado['alturaNivMar'];
			
			$html .= "<th>$anio</th>";
		};

		$html .= 		"</tr>
					</thead>
					</tbody>
						<tr>
							<td>Población en edad de trabajar</td>";
		foreach ($resultados as $resultado) {
			$pobEdadTrabajar = $resultado['pobEdadTrabajar'];
			
			$html .= "<td>$pobEdadTrabajar</td>";
		};

		$html .= "</tr>
					<tr>
						<td>Póblacion potencialmente activa</td>";
		foreach ($resultados as $resultado) {
			// $pobPotActiva = $resultado['pobPotActiva'];
			
			$html .= "<td></td>";
		};

		$html .= "</tr>
					<tr>
						<td>Póblacion potencialmente inactiva</td>";
		foreach ($resultados as $resultado) {
			$pobPotInactiva = $resultado['pobPotInactiva'];
			
			$html .= "<td>$pobPotInactiva</td>";
		};

		$html .= "</tr>
					<tr>
						<td>Numero de personas menores a 15 años</td>";
		foreach ($resultados as $resultado) {
			$numPerMen = $resultado['numPerMen'];
			
			$html .= "<td>$numPerMen</td>";
		};

		$html .= "</tr>
					<tr>
						<td>Numero de personas mayores a 64 años</td>";
		foreach ($resultados as $resultado) {
			$numPermay = $resultado['numPermay'];
			
			$html .= "<td>$numPermay</td>"; //corregir M
		};

		$html .= "</tr>
					<tr>
						<td>Numero de personas independientes</td>";
		foreach ($resultados as $resultado) {
			$numPerInd = $resultado['numPerInd'];
			
			$html .= "<td>$numPerInd</td>";
		};

		$html .= "</tr>
					<tr>
						<td>Numero de personas dependientes</td>";
		foreach ($resultados as $resultado) {
			$numPerDep = $resultado['numPerDep'];
			
			$html .= "<td>$numPerDep</td>";
		};

		$html .= "</tr>
					<tr>
						<td>Población por género -Hombres";
		foreach ($resultados as $resultado) {
			$pobHom = $resultado['pobHom'];
			
			$html .= "<td>$pobHom</td>";
		};

		$html .= "</tr>
					<tr>
						<td>Población por género -Mujeres";
		foreach ($resultados as $resultado) {
			$pobMuj = $resultado['pobMuj'];
			
			$html .= "<td>$pobMuj</td>";
		};

		$html .= "</tr>
					<tr>
						<td>Población por zona -Cabecera";
		foreach ($resultados as $resultado) {
			$pobZonCab = $resultado['pobZonCab'];
			
			$html .= "<td>$pobZonCab</td>";
		};

		$html .= "</tr>
					<tr>
						<td>Población por zona -Resto";
		foreach ($resultados as $resultado) {
			$pobZonRes = $resultado['pobZonRes'];
			
			$html .= "<td>$pobZonRes</td>";
		};

		$html .= "</tr>
					<tr>
						<td>Índice de ruralidad";
		foreach ($resultados as $resultado) {
			$indRuralidad = $resultado['indRuralidad'];
			
			$html .= "<td>$indRuralidad</td>";
		};

		$html .= "</tr>
					<tr>
						<td>Población total";
		foreach ($resultados as $resultado) {
			$pobTotal = $resultado['pobTotal'];
			
			$html .= "<td>$pobTotal</td>";
		};

		$html .= "</tr>
					<tr>
						<td>Crecimiento poblacionall";
		foreach ($resultados as $resultado) {
			$crecPob = $resultado['crecPob'];
			
			$html .= "<td>$crecPob</td>";
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