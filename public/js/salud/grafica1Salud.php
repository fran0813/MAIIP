<?php

	$idMunicipio = $_POST['idMunicipio'];
	$anioS = $_POST['anioS'];

	try{

		$conn = new PDO('mysql:host=localhost; dbname=maiip', "root", "12345");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = $conn->prepare('SELECT YEAR(anioS),tasVacBCG,tasVacDPT,tasVacHepatitisB,tasVacHIB,tasVacPolio,tasVacTripleViral FROM salud,vacunaciones WHERE salud.municipio_id = :idMunicipio AND vacunaciones.salud_id = salud.id AND YEAR(anioS) = :anioS');
		$sql->execute(array('idMunicipio' => $idMunicipio, 'anioS' => $anioS));
		$resultados = $sql->fetchAll();
		$html = "";

		$html .="<script type='text/javascript'>
				google.charts.load('current', {'packages':['corechart']});
	      		google.charts.setOnLoadCallback(drawChart);

	      		function drawChart() {
		        var data = google.visualization.arrayToDataTable([
		        ['Año', 'Tasa BCG', 'Tasa DPT', 'Tasa Hepatitis B', 'Tasa  HIB', 'Tasa  Polio', 'Tasa  Triple viral'],";
		
		foreach ($resultados as $resultado) {
			$anio = $resultado['YEAR(anioS)'];

			$tasVacBCG = $resultado['tasVacBCG'];
			$tasVacDPT = $resultado['tasVacDPT'];
			$tasVacHepatitisB = $resultado['tasVacHepatitisB'];
			$tasVacHIB = $resultado['tasVacHIB'];
			$tasVacPolio = $resultado['tasVacPolio'];
			$tasVacTripleViral = $resultado['tasVacTripleViral'];

			$html .= "['$anio', $tasVacBCG, $tasVacDPT, $tasVacHepatitisB, $tasVacHIB, $tasVacPolio, $tasVacTripleViral],";

		};

		$html .="]);

	        	var options = {
		        title: 'Vacunaciones',
		        bar: {groupWidth: '20%'},
		        legend: { position: 'rigth' },
		        colors: ['#e9473f', '#397ACB', '#F8EF01'],
	        	};

	        	var chart = new google.visualization.ColumnChart(document.getElementById('columnchart_values'));

	        	chart.draw(data, options);
	     		}
				</script>

				<div id='columnchart_values' style='width: 900px; height: 300px;'></div>";

		echo json_encode($html);

	}catch(PDOException $e){

		$e->getMessage();
		echo json_encode($e);

	}

?>