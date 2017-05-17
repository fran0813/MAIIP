<?php

	$idMunicipio = $_POST['idMunicipio'];
	$anioVSP = $_POST['anioVSP'];

	try{

		$conn = new PDO('mysql:host=localhost; dbname=maiip', "root", "12345");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = $conn->prepare('SELECT * FROM viviendasserviciospublicos,coberturaalcantarillado,coberturaaseo,coberturagas,coberturatelefono WHERE viviendasserviciospublicos.municipio_id = :idMunicipio AND coberturaalcantarillado.viviendaserviciopublico_id = viviendasserviciospublicos.id AND coberturaaseo.viviendaserviciopublico_id = viviendasserviciospublicos.id AND coberturagas.viviendaserviciopublico_id = viviendasserviciospublicos.id AND coberturatelefono.viviendaserviciopublico_id = viviendasserviciospublicos.id AND YEAR(anioVSP) = :anioVSP');
		$sql->execute(array('idMunicipio' => $idMunicipio, 'anioVSP' => $anioVSP));
		$resultados = $sql->fetchAll();
		$html = "";

		//Tabla de datos principales
		$html .="<div class='col-sm-12 col-md-12 col-lg-12'>

				<table class='table table-bordered table-hover'>
				<thead class='thead-s'>
				<tr>
				<th>Datos</th>
				<th>Cabecera</th>
				<th>Rural</th>
				<th>Total</th>
				</tr>
				</thead>
				<tbody>
				<tr class='border-dotted'>
				<td>Viviendas</td>";
							
		foreach ($resultados as $resultado) {
			$cabViv = $resultado['cabViv'];
			$rurViv = $resultado['rurViv'];
			$totalViv = $resultado['totalViv'];
			
			$html .="<td>$cabViv</td>
					<td>$rurViv</td>
					<td>$totalViv</td>";
								
		};

		$html .="</tr>
				<tr class='border-dotted'>
				<td>Hogares</td>";

		foreach ($resultados as $resultado) {
			$cabHog = $resultado['cabHog'];
			$rurHog = $resultado['rurHog'];
			$totalHog = $resultado['totalHog'];
			
			$html .="<td>$cabHog</td>
					<td>$rurHog</td>
					<td>$totalHog</td>";

		};

		$html .="</tr>
				<tr class='border-dotted'>
				<td>Hogares por vivienda</td>";

		foreach ($resultados as $resultado) {
			$cabHogViv = $resultado['cabHogViv'];
			$rurHogViv = $resultado['rurHogViv'];
			$totalHogViv = $resultado['totalHogViv'];
			
			$html .="<td>$cabHogViv</td>
					<td>$rurHogViv</td>
					<td>$totalHogViv</td>";

		};

		$html .="</tr>
				<tr class='border-dotted'>
				<td>Hogares</td>";

		foreach ($resultados as $resultado) {
			$cabPerHog = $resultado['cabPerHog'];
			$rurPerHog = $resultado['rurPerHog'];
			$totalPerHog = $resultado['totalPerHog'];
			
			$html .="<td>$cabPerHog</td>
					<td>$rurPerHog</td>
					<td>$totalPerHog</td>";

		};

		$html .="</tr>
				<tr>
				<td>Personas por vivienda</td>";

		foreach ($resultados as $resultado) {
			$cabPerViv = $resultado['cabPerViv'];
			$rurPerViv = $resultado['rurPerViv'];
			$totalPerViv = $resultado['totalPerViv'];
			
			$html .="<td>$cabPerViv</td>
					<td>$rurPerViv</td>
					<td>$totalPerViv</td>";

		};

		$html .="</tr>
				</tbody>
				</table>

				</div>";

		// Tabla de cobertura alcantarillado
		$html .="<div class='col-sm-6 col-md-6 col-lg-6'>

				<table class='table table-bordered table-hover'>
				<thead class='thead-s'>
				<tr>
				<th>Cobertura Alcantarillado</th>
				<th>Valores</th>
				</tr>
				</thead>
				<tbody>
				<tr class='border-dotted'>
				<td>Cabecera</td>";

		foreach ($resultados as $resultado) {
			$cabCA = $resultado['cabCA'];

			$html .= "<td>$cabCA</td>";
		};

		$html .="</tr>
				<tr class='border-dotted'>
				<td>Centro poblados</td>";

		foreach ($resultados as $resultado) {
			$centPobCA = $resultado['centPobCA'];

			$html .= "<td>$centPobCA</td>";							
		};

		$html .="</tr>
				<tr>
				<td>Rural disperso</td>";

		foreach ($resultados as $resultado) {
			$rurDispCA = $resultado['rurDispCA'];

			$html .= "<td>$rurDispCA</td>";
		};

		$html .="</tr>
				</tbody>
				</table>

				</div>";

		// Tabla cobertura aseo
		$html .="<div class='col-sm-6 col-md-6 col-lg-6'>

				<table class='table table-bordered table-hover'>
				<thead class='thead-s'>
				<tr>
				<th>Cobertura aseo</th>
				<th>Valores</th>
				</tr>
				</thead>
				<tbody>
				<tr class='border-dotted'>
				<td>Cabecera</td>";

		foreach ($resultados as $resultado) {
			$cabCAs = $resultado['cabCAs'];
		
			$html .= "<td>$cabCAs</td>";
								
		};

		$html .="</tr>
				<tr class='border-dotted'>
				<td>Centro poblados</td>";

		foreach ($resultados as $resultado) {
			$centPobCAs = $resultado['centPobCAs'];

			$html .="<td>$centPobCAs</td>";
		}

		$html .="</tr>
				<tr>
				<td>Rural disperso</td>";

		foreach ($resultados as $resultado) {
			$rurDispCAs = $resultado['rurDispCAs'];

			$html .="<td>$rurDispCAs</td>";
		}
		
		$html .="</tr>
				</tbody>
				</table>

				</div>";

		// Tabla cobertura gas
		$html .="<div class='col-sm-6 col-md-6 col-lg-6'>

				<table class='table table-bordered table-hover'>
				<thead class='thead-s'>
				<tr>
				<th>Cobertura aseo</th>
				<th>Valores</th>
				</tr>
				</thead>
				<tbody>
				<tr class='border-dotted'>
				<td>Cabecera</td>";

		foreach ($resultados as $resultado) {
			$cabCG = $resultado['cabCG'];
		
			$html .= "<td>$cabCG</td>";
								
		};

		$html .="</tr>
				<tr class='border-dotted'>
				<td>Centro poblados</td>";

		foreach ($resultados as $resultado) {
			$centPobCG = $resultado['centPobCG'];

			$html .="<td>$centPobCG</td>";
		}

		$html .="</tr>
				<tr>
				<td>Rural disperso</td>";

		foreach ($resultados as $resultado) {
			$rurDispCG = $resultado['rurDispCG'];

			$html .="<td>$rurDispCG</td>";
		}
		
		$html .="</tr>
				</tbody>
				</table>

				</div>";

		// Tabla cobertura telefono
		$html .="<div class='col-sm-6 col-md-6 col-lg-6'>

				<table class='table table-bordered table-hover'>
				<thead class='thead-s'>
				<tr>
				<th>Cobertura aseo</th>
				<th>Valores</th>
				</tr>
				</thead>
				<tbody>
				<tr class='border-dotted'>
				<td>Cabecera</td>";

		foreach ($resultados as $resultado) {
			$cabCT = $resultado['cabCT'];
		
			$html .= "<td>$cabCT</td>";
								
		};

		$html .="</tr>
				<tr class='border-dotted'>
				<td>Centro poblados</td>";

		foreach ($resultados as $resultado) {
			$centPobCT = $resultado['centPobCT'];

			$html .="<td>$centPobCT</td>";
		}

		$html .="</tr>
				<tr>
				<td>Rural disperso</td>";

		foreach ($resultados as $resultado) {
			$rurDispCT = $resultado['rurDispCT'];

			$html .="<td>$rurDispCT</td>";
		}
		
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