<?php

	$idMunicipio = $_POST['idMunicipio'];

	try{

		$conn = new PDO('mysql:host=localhost; dbname=maiip', "root", "12345");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = $conn->prepare('SELECT YEAR(anioE),jardin,trans,prim,secu,media FROM educacion,matriculapornivel WHERE educacion.municipio_id = :idMunicipio AND matriculapornivel.educacion_id = educacion.id ORDER BY educacion.anioE ASC');
		$sql->execute(array('idMunicipio' => $idMunicipio));
		$resultados = $sql->fetchAll();
		$html = "";

		$html .="<script type='text/javascript'>
				google.charts.load('current', {'packages':['corechart']});
	      		google.charts.setOnLoadCallback(drawChart);

	      		function drawChart() {
		        var data = google.visualization.arrayToDataTable([
		        ['Año', 'Jardin', 'Transición', 'Primaria', 'Secundaria', 'Media'],";
		
		foreach ($resultados as $resultado) {
			$anio = $resultado['YEAR(anioE)'];

			$jardin = $resultado['jardin'];
			$trans = $resultado['trans'];
			$prim = $resultado['prim'];
			$secu = $resultado['secu'];
			$media = $resultado['media'];

			$html .= "['$anio', $jardin, $trans, $prim, $secu, $media],";
		};

		$html .="]);

	        	var options = {
		        title: 'Matriculas por nivel',
		        bar: {groupWidth: '20%'},
		        legend: { position: 'rigth' },
		        colors: ['#e9473f', '#397ACB', '#F8EF01']
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