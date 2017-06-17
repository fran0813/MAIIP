<?php

	// Variables de entorno
	$db_connection = getenv('DB_CONNECTION');	
	$db_host = getenv('DB_HOST');
	$db_database = getenv('DB_DATABASE');
	$db_username = getenv('DB_USERNAME');
	$db_password = getenv('DB_PASSWORD');

	$idMunicipio = $_POST['idMunicipio'];

	try{

		$conn = new PDO("$db_connection:host=$db_host; dbname=$db_database", "$db_username", "$db_password");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = $conn->prepare('SELECT YEAR(anioE),rurJardin,urbJardin,rurTrans,urbTrans,rurPrim,urbPrim,rurSecu,urbSecu,rurMedia,urbMedia,jardin,trans,prim,secu,media,femenino,masculino FROM educacion,matriculapormunicipiogenero,matriculapornivel WHERE educacion.municipio_id = :idMunicipio AND matriculapornivel.educacion_id = educacion.id AND matriculapormunicipiogenero.educacion_id = educacion.id ORDER BY educacion.anioE ASC');
		$sql->execute(array('idMunicipio' => $idMunicipio));
		$resultados = $sql->fetchAll();
		$html = "";

		$html .="<div class='col-sm-12 col-md-12 col-lg-12'>

				<table class='table table-bordered table-hover'>
				<thead class='thead-s'>
				<tr>
				<th>Datos</th>";

		foreach ($resultados as $resultado) {
			$anio = $resultado['YEAR(anioE)'];
			
			$html .= "<th>$anio</th>";
		};

		$html .="</tr>
				</thead>
				<tbody>
				<tr class='border-dotted'>
				<td>Prejardin y jardin (rural)</td>";

		foreach ($resultados as $resultado) {
			$rurJardin = $resultado['rurJardin'];
			
			$html .= "<td>$rurJardin</td>";
		};

		$html .="</tr>
					<tr class='border-dotted'>
						<td>Prejardin y jardin (urbano)</td>";

		foreach ($resultados as $resultado) {
			$urbJardin = $resultado['urbJardin'];
			
			$html .= "<td>$urbJardin</td>";
		};

		$html .="</tr>
					<tr class='border-dotted'>
						<td>Transición (rural)</td>";

		foreach ($resultados as $resultado) {
			$rurTrans = $resultado['rurTrans'];
			
			$html .= "<td>$rurTrans</td>";
		};

		$html .="</tr>
					<tr class='border-dotted'>
						<td>Transición (urbano)</td>";

		foreach ($resultados as $resultado) {
			$urbTrans = $resultado['urbTrans'];
			
			$html .= "<td>$urbTrans</td>";
		};

		$html .="</tr>
					<tr class='border-dotted'>
						<td>Primaria (rural)</td>";

		foreach ($resultados as $resultado) {
			$rurPrim = $resultado['rurPrim'];
			
			$html .= "<td>$rurPrim</td>"; 
		};

		$html .="</tr>
					<tr class='border-dotted'>
						<td>Primaria (urbano)</td>";

		foreach ($resultados as $resultado) {
			$urbPrim = $resultado['urbPrim'];
			
			$html .= "<td>$urbPrim</td>";
		};

		$html .="</tr>
					<tr class='border-dotted'>
						<td>Secundaria (rural)</td>";

		foreach ($resultados as $resultado) {
			$rurSecu = $resultado['rurSecu'];
			
			$html .= "<td>$rurSecu</td>";
		};

		$html .="</tr>
					<tr class='border-dotted'>
						<td>Secundaria (urbano)</td>";

		foreach ($resultados as $resultado) {
			$urbSecu = $resultado['urbSecu'];
			
			$html .= "<td>$urbSecu</td>";
		};

		$html .="</tr>
					<tr class='border-dotted'>
						<td>Media (rural)</td>";

		foreach ($resultados as $resultado) {
			$rurMedia = $resultado['rurMedia'];
			
			$html .= "<td>$rurMedia</td>";
		};

		$html .="</tr>
					<tr>
						<td>Media (urbano)</td>";

		foreach ($resultados as $resultado) {
			$urbMedia = $resultado['urbMedia'];
			
			$html .= "<td>$urbMedia</td>";
		};

		$html .="</tr>
				</tbody>
			</table>

			</div>";

		// Tabla de matriculas por nivel
		$html .="<div class='col-sm-12 col-md-12 col-lg-12'>

			<table class='table table-bordered table-hover'>
				<thead class='thead-s'>
					<tr>
						<th>Matricula por nivel</th>";

		foreach ($resultados as $resultado) {
			$anio = $resultado['YEAR(anioE)'];
			
			$html .= "<th>$anio</th>";
		};

		$html .="</tr>
				</thead>
				<tbody>
					<tr class='border-dotted'>
						<td>Prejardin y jardin</td>";

		foreach ($resultados as $resultado) {
			$jardin = $resultado['jardin'];
			
			$html .= "<td>$jardin</td>";
		};

		$html .="</tr>
					<tr class='border-dotted'>
						<td>Transición</td>";

		foreach ($resultados as $resultado) {
			$trans = $resultado['trans'];
			
			$html .= "<td>$trans</td>";
		};

		$html .="</tr>
					<tr class='border-dotted'>
						<td>Primaria (rural)</td>";

		foreach ($resultados as $resultado) {
			$rurPrim = $resultado['rurPrim'];
			
			$html .= "<td>$rurPrim</td>"; 
		};

		$html .="</tr>
					<tr class='border-dotted'>
						<td>Primaria</td>";

		foreach ($resultados as $resultado) {
			$prim = $resultado['prim'];
			
			$html .= "<td>$prim</td>";
		};

		$html .="</tr>
					<tr class='border-dotted'>
						<td>Secundaria</td>";

		foreach ($resultados as $resultado) {
			$secu = $resultado['secu'];
			
			$html .= "<td>$secu</td>";
		};

		$html .="</tr>
					<tr>
						<td>Media</td>";

		foreach ($resultados as $resultado) {
			$media = $resultado['media'];
			
			$html .= "<td>$media</td>";
		};

		$html .="</tr>
				</tbody>
			</table>

			</div>";	

		// Tabla de matriculas por genero
		$html .="<div class='col-sm-12 col-md-12 col-lg-12'>

			<table class='table table-bordered table-hover'>
				<thead class='thead-s'>
					<tr>
						<th>Matricula por genero</th>";

		foreach ($resultados as $resultado) {
			$anio = $resultado['YEAR(anioE)'];
			
			$html .= "<th>$anio</th>";
		};

		$html .="</tr>
				</thead>
				<tbody>
					<tr class='border-dotted'>
						<td>Femenino</td>";

		foreach ($resultados as $resultado) {
			$femenino = $resultado['femenino'];
			
			$html .= "<td>$femenino</td>";
		};

		$html .="</tr>
					<tr class='border-dotted'>
						<td>Masculino</td>";

		foreach ($resultados as $resultado) {
			$masculino = $resultado['masculino'];
			
			$html .= "<td>$masculino</td>";
		};

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