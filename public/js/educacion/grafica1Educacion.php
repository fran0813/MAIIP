<?php

	$idMunicipio = $_POST['idMunicipio'];

	try{

		$conn = new PDO('mysql:host=localhost; dbname=maiip', "root", "12345");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = $conn->prepare('SELECT YEAR(anioE),femenino,masculino FROM educacion,matriculapormunicipiogenero WHERE educacion.municipio_id = :idMunicipio AND matriculapormunicipiogenero.educacion_id = educacion.id ORDER BY educacion.anioE ASC');
		$sql->execute(array('idMunicipio' => $idMunicipio));
		$resultados = $sql->fetchAll();
		$html = "";

		$html .="<script type='text/javascript'>
				google.charts.load('current', {'packages':['corechart']});
	      		google.charts.setOnLoadCallback(drawChart);

	      		function drawChart() {
		        var data = google.visualization.arrayToDataTable([
		        ['Año', 'Femenino', 'Masculino'],";
		
		foreach ($resultados as $resultado) {
			$anio = $resultado['YEAR(anioE)'];
			$femenino = $resultado['femenino'];
			$masculino = $resultado['masculino'];

			$html .= "['$anio', $femenino, $masculino],";
		};

		$html .="]);

	        	var options = {
		        title: 'Matriculas por genero',
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