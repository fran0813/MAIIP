<?php

	// Variables de entorno
	$db_connection = getenv('DB_CONNECTION');	
	$db_host = getenv('DB_HOST');
	$db_database = getenv('DB_DATABASE');
	$db_username = getenv('DB_USERNAME');
	$db_password = getenv('DB_PASSWORD');

	$idMunicipio = $_POST['idMunicipio'];
	$anioS = $_POST['anioS'];

	try{

		$conn = new PDO("$db_connection:host=$db_host; dbname=$db_database", "$db_username", "$db_password");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = $conn->prepare('SELECT YEAR(anioS),difBaMov,difEntApr,difMovCam,difSalirCalle,totalDis FROM salud,discapacidades WHERE salud.municipio_id = :idMunicipio AND discapacidades.salud_id = salud.id AND YEAR(anioS) = :anioS');
		$sql->execute(array('idMunicipio' => $idMunicipio, 'anioS' => $anioS));
		$resultados = $sql->fetchAll();
		$html = "";

		$html .="<script type='text/javascript'>
				google.charts.load('current', {'packages':['corechart']});
	      		google.charts.setOnLoadCallback(drawChart);

	      		function drawChart() {
		        var data = google.visualization.arrayToDataTable([
		        ['Año', 'Dificultad para bañarse o moverse',
		         'Dificultad para entender o aprender',
		         'Dificultad para moverse o para caminar por si',
		         'Dificultad para salir a la calle sin ayuda o compañía',
		         'Total de población con Discapacidad'],";
		
		foreach ($resultados as $resultado) {
			$anio = $resultado['YEAR(anioS)'];

			$difBaMov = $resultado['difBaMov'];
			$difEntApr = $resultado['difEntApr'];
			$difMovCam = $resultado['difMovCam'];
			$difSalirCalle = $resultado['difSalirCalle'];
			$totalDis = $resultado['totalDis'];

			$html .= "['$anio', $difBaMov, $difEntApr, $difMovCam, $difSalirCalle, $totalDis],";

		};

		$html .="]);

	        	var options = {
		        title: 'Discapacidades',
		        bar: {groupWidth: '20%'},
		        legend: { position: 'rigth' },
		        colors: ['#e9473f', '#397ACB', '#F8EF01'],
	        	};

	        	var chart = new google.visualization.ColumnChart(document.getElementById('columnchart_values2'));

	        	chart.draw(data, options);
	     		}
				</script>

				<div id='columnchart_values2' style='width: 900px; height: 300px;'></div>";

		echo json_encode($html);

	}catch(PDOException $e){

		$e->getMessage();
		echo json_encode($e);

	}

?>