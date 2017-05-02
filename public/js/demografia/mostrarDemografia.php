<?php

	$idMunicipio = $_POST['idMunicipio'];

	try{

		$conn = new PDO('mysql:host=localhost; dbname=maiip', "root", "12345");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = $conn->prepare('SELECT YEAR(anioD),pobEdadTrabajar,pobPotActiva,pobPotInactiva,numPerMen,numPerMay,numPerInd,numPerDep,pobHom,pobMuj,pobZonCab,pobZonRes,indRuralidad,pobTotal,crecPob FROM demografias WHERE demografias.municipio_id = :idMunicipio ORDER BY demografias.anioD DESC LIMIT 10');
		$sql->execute(array('idMunicipio' => $idMunicipio));
		$resultados = $sql->fetchAll();
		$html = "";

		$html .="<table class='table table-bordered'>
				<thead class='thead-s'>
				<tr>
				<th>Datos</th>";

		foreach ($resultados as $resultado) {
			$anio = $resultado['YEAR(anioD)'];
			
			$html .= "<th>$anio</th>";
		};

		$html .="</tr>
				</thead>
				</tbody>
				<tr class='border-dotted'>
				<td>Población en edad de trabajar</td>";

		foreach ($resultados as $resultado) {
			$pobEdadTrabajar = $resultado['pobEdadTrabajar'];
			
			$html .= "<td>$pobEdadTrabajar</td>";
		};

		$html .="</tr>
				<tr class='border-dotted'>
				<td>Póblacion potencialmente activa</td>";

		foreach ($resultados as $resultado) {
			$pobPotActiva = $resultado['pobPotActiva'];
			
			$html .= "<td>$pobPotActiva</td>";
		};

		$html .="</tr>
				<tr class='border-dotted'>
				<td>Póblacion potencialmente inactiva</td>";

		foreach ($resultados as $resultado) {
			$pobPotInactiva = $resultado['pobPotInactiva'];
			
			$html .= "<td>$pobPotInactiva</td>";
		};

		$html .="</tr>
				<tr class='border-dotted'>
				<td>Numero de personas menores a 15 años</td>";

		foreach ($resultados as $resultado) {
			$numPerMen = $resultado['numPerMen'];
			
			$html .= "<td>$numPerMen</td>";
		};

		$html .="</tr>
				<tr class='border-dotted'>
				<td>Numero de personas mayores a 64 años</td>";

		foreach ($resultados as $resultado) {
			$numPerMay = $resultado['numPerMay'];
			
			$html .= "<td>$numPerMay</td>"; 
		};

		$html .="</tr>
				<tr class='border-dotted'>
				<td>Numero de personas independientes</td>";

		foreach ($resultados as $resultado) {
			$numPerInd = $resultado['numPerInd'];
			
			$html .= "<td>$numPerInd</td>";
		};

		$html .="</tr>
				<tr class='border-dotted'>
				<td>Numero de personas dependientes</td>";

		foreach ($resultados as $resultado) {
			$numPerDep = $resultado['numPerDep'];
			
			$html .= "<td>$numPerDep</td>";
		};

		$html .="</tr>
				<tr class='border-dotted'>
				<td>Población por género -Hombres";

		foreach ($resultados as $resultado) {
			$pobHom = $resultado['pobHom'];
			
			$html .= "<td>$pobHom</td>";
		};

		$html .="</tr>
				<tr class='border-dotted'>
				<td>Población por género -Mujeres";

		foreach ($resultados as $resultado) {
			$pobMuj = $resultado['pobMuj'];
			
			$html .= "<td>$pobMuj</td>";
		};

		$html .="</tr>
				<tr class='border-dotted'>
				<td>Población por zona -Cabecera";

		foreach ($resultados as $resultado) {
			$pobZonCab = $resultado['pobZonCab'];
			
			$html .= "<td>$pobZonCab</td>";
		};

		$html .="</tr>
				<tr class='border-dotted'>
				<td>Población por zona -Resto";

		foreach ($resultados as $resultado) {
			$pobZonRes = $resultado['pobZonRes'];
			
			$html .= "<td>$pobZonRes</td>";
		};

		$html .="</tr>
				<tr class='border-dotted'>
				<td>Índice de ruralidad";

		foreach ($resultados as $resultado) {
			$indRuralidad = $resultado['indRuralidad'];
			
			$html .= "<td>$indRuralidad</td>";
		};

		$html .="</tr>
				<tr class='border-dotted'>
				<td>Población total";

		foreach ($resultados as $resultado) {
			$pobTotal = $resultado['pobTotal'];
			
			$html .= "<td>$pobTotal</td>";
		};

		$html .="</tr>
				<tr>
				<td>Crecimiento poblacionall";

		foreach ($resultados as $resultado) {
			$crecPob = $resultado['crecPob'];
			
			$html .= "<td>$crecPob</td>";
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