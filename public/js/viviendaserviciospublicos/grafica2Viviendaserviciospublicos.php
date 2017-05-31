<?php

	// Variables de entorno
	$db_connection = getenv('DB_CONNECTION');	
	$db_host = getenv('DB_HOST');
	$db_database = getenv('DB_DATABASE');
	$db_username = getenv('DB_USERNAME');
	$db_password = getenv('DB_PASSWORD');

	$idMunicipio = $_POST['idMunicipio'];
	$anioVSP = $_POST['anioVSP'];

	try{

		$conn = new PDO("$db_connection:host=$db_host; dbname=$db_database", "$db_username", "$db_password");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = $conn->prepare('SELECT YEAR(anioVSP),cabCA,centPobCA,rurDispCA,cabCAs,centPobCAs,rurDispCAs,cabCG,centPobCG,rurDispCG,cabCT,centPobCT,rurDispCT FROM viviendasserviciospublicos,coberturaalcantarillado,coberturaaseo,coberturagas,coberturatelefono WHERE viviendasserviciospublicos.municipio_id = :idMunicipio AND YEAR(anioVSP) = :anioVSP AND coberturaalcantarillado.viviendaserviciopublico_id = viviendasserviciospublicos.id AND coberturaaseo.viviendaserviciopublico_id = viviendasserviciospublicos.id AND coberturagas.viviendaserviciopublico_id = viviendasserviciospublicos.id AND coberturatelefono.viviendaserviciopublico_id = viviendasserviciospublicos.id');
		$sql->execute(array('idMunicipio' => $idMunicipio, 'anioVSP' => $anioVSP));
		$resultados = $sql->fetchAll();
		$html = "";

		$html .="<script type='text/javascript'>
				google.charts.load('current', {'packages':['corechart']});
	      		google.charts.setOnLoadCallback(drawChart);

	      		function drawChart() {
		        var data = google.visualization.arrayToDataTable([
		        ['Año', 'Cabecera', 'Centros poblados', 'Rural disperso'],";
		
		foreach ($resultados as $resultado) {
			$anio = $resultado['YEAR(anioVSP)'];

			$cabCA = $resultado['cabCA'];
			$centPobCA = $resultado['centPobCA'];
			$rurDispCA = $resultado['rurDispCA'];

			$cabCAs = $resultado['cabCAs'];
			$centPobCAs = $resultado['centPobCAs'];
			$rurDispCAs = $resultado['rurDispCAs'];

			$cabCG = $resultado['cabCG'];
			$centPobCG = $resultado['centPobCG'];
			$rurDispCG = $resultado['rurDispCG'];

			$cabCT = $resultado['cabCT'];
			$centPobCT = $resultado['centPobCT'];
			$rurDispCT = $resultado['rurDispCT'];

			$html .= "['$anio', $cabCA, $centPobCA, $rurDispCA],";
			$html .= "['$anio', $cabCAs, $centPobCAs, $rurDispCAs],";
			$html .= "['$anio', $cabCG, $centPobCG, $rurDispCG],";
			$html .= "['$anio', $cabCT, $centPobCT, $rurDispCT],";

		};

		$html .="]);

	        	var options = {
		        title: 'Coberturas',
		        bar: {groupWidth: '20%'},
		        legend: { position: 'rigth' },
		        colors: ['#e9473f', '#397ACB', '#F8EF01'],
	        	};

	        	var chart = new google.visualization.ColumnChart(document.getElementById('columnchart_values2'));

	        	chart.draw(data, options);
	     		}
				</script>

				<div id='columnchart_values2' style='width: 900px; height: 300px;'></div>
				<p> Alcantarillado / Aseo / Gas / Telefono </p>";

		echo json_encode($html);

	}catch(PDOException $e){

		$e->getMessage();
		echo json_encode($e);

	}

?>