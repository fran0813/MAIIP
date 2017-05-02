<?php

	$idMunicipio = $_POST['idMunicipio'];

	try{

		$conn = new PDO('mysql:host=localhost; dbname=maiip', "root", "12345");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = $conn->prepare('SELECT YEAR(anioD),indRuralidad,crecPob FROM demografias WHERE demografias.municipio_id = :idMunicipio ORDER BY demografias.anioD DESC LIMIT 10');
		$sql->execute(array('idMunicipio' => $idMunicipio));
		$resultados = $sql->fetchAll();
		$html = "";

		$html .="<script type='text/javascript'>
				google.charts.load('current', {'packages':['corechart']});
	      		google.charts.setOnLoadCallback(drawChart);

	      		function drawChart() {
		        var data = google.visualization.arrayToDataTable([
		        ['Año', 'Índice de ruralidad', 'Crecimiento poblacional'],";
		
		foreach ($resultados as $resultado) {
			$anio = $resultado['YEAR(anioD)'];
			$indRuralidad = $resultado['indRuralidad'];
			$crecPob = $resultado['crecPob'];

			$html .= "['$anio', $indRuralidad, $crecPob],";
		};

		$html .="]);

	        	var options = {
		        title: 'Índice de ruralidad V.S Crecimiento demografico',
		        curveType: 'function',
		        legend: { position: 'rigth' },
		        colors: ['#e9473f', '#131FBD']
	        	};

	        	var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

	        	chart.draw(data, options);
	     		}
				</script>

				<div id='curve_chart' style='width: 900px; height: 500px'></div>";

		echo json_encode($html);

	}catch(PDOException $e){

		$e->getMessage();
		echo json_encode($e);

	}

?>