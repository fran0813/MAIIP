<?php

	$idMunicipio = $_POST['idMunicipio'];

	try{

		$conn = new PDO('mysql:host=localhost; dbname=maiip', "root", "12345");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = $conn->prepare('SELECT YEAR(anio),pobTotal FROM demografias WHERE demografias.municipio_id = :idMunicipio ORDER BY demografias.anio DESC LIMIT 10');
		$sql->execute(array('idMunicipio' => $idMunicipio));
		$resultados = $sql->fetchAll();
		$html = "";

		$html .="<script type='text/javascript'>
				google.charts.load('current', {'packages':['corechart']});
	      		google.charts.setOnLoadCallback(drawChart);

	      		function drawChart() {
		        var data = google.visualization.arrayToDataTable([
		        ['Año', 'Población total'],";
		
		foreach ($resultados as $resultado) {
			$anio = $resultado['YEAR(anio)'];
			$pobTotal = $resultado['pobTotal'];

			$html .= "['$anio', $pobTotal],";
		};

		$html .="]);

	        	var options = {
		        title: 'Población total',
		        bar: {groupWidth: '20%'},
		        legend: { position: 'bottom' },
		        colors: ['#e9473f']
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