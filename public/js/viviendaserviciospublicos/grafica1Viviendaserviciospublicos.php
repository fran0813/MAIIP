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

		$sql = $conn->prepare('SELECT YEAR(anioVSP),cabHogViv,cabPerHog,cabPerViv,rurHogViv,rurPerHog,rurPerViv,totalHogViv,totalPerHog,totalPerViv FROM viviendasserviciospublicos WHERE viviendasserviciospublicos.municipio_id = :idMunicipio AND YEAR(anioVSP) = :anioVSP');
		$sql->execute(array('idMunicipio' => $idMunicipio, 'anioVSP' => $anioVSP));
		$resultados = $sql->fetchAll();
		$html = "";

		$html .="<script type='text/javascript'>
				google.charts.load('current', {'packages':['corechart']});
	      		google.charts.setOnLoadCallback(drawChart);

	      		function drawChart() {
		        var data = google.visualization.arrayToDataTable([
		        ['Año', 'Hogares por vivienda', 'Personas por hogar', 'Personas por vivienda'],";
		
		foreach ($resultados as $resultado) {
			$anio = $resultado['YEAR(anioVSP)'];

			$cabHogViv = $resultado['cabHogViv'];
			$rurHogViv = $resultado['rurHogViv'];
			$totalHogViv = $resultado['totalHogViv'];

			$cabPerHog = $resultado['cabPerHog'];
			$rurPerHog = $resultado['rurPerHog'];
			$totalPerHog = $resultado['totalPerHog'];

			$cabPerViv = $resultado['cabPerViv'];
			$rurPerViv = $resultado['rurPerViv'];
			$totalPerViv = $resultado['totalPerViv'];

			$html .= "['$anio', $cabHogViv, $rurHogViv, $totalHogViv],";
			$html .= "['$anio', $cabPerHog, $rurPerHog, $totalPerHog],";
			$html .= "['$anio', $cabPerViv, $rurPerViv, $totalPerViv],";

		};

		$html .="]);

	        	var options = {
		        title: 'Viviendas',
		        bar: {groupWidth: '20%'},
		        legend: { position: 'rigth' },
		        colors: ['#e9473f', '#397ACB', '#F8EF01'],
	        	};

	        	var chart = new google.visualization.ColumnChart(document.getElementById('columnchart_values'));

	        	chart.draw(data, options);
	     		}
				</script>

				<div id='columnchart_values' style='width: 900px; height: 300px;'></div>
				<p> Cabecera / Rural / Total </p>";

		echo json_encode($html);

	}catch(PDOException $e){

		$e->getMessage();
		echo json_encode($e);

	}

?>