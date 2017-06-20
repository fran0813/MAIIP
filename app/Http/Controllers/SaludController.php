<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaludController extends Controller
{
    public function actualizarSalud(){

	$idS = $_POST['idS'];

	$tasVacBCG = $_POST['tasVacBCG'];
	$tasVacDPT = $_POST['tasVacDPT'];
	$tasVacHepatitisB = $_POST['tasVacHepatitisB'];
	$tasVacHIB = $_POST['tasVacHIB'];
	$tasVacPolio = $_POST['tasVacPolio'];
	$tasVacTripleViral = $_POST['tasVacTripleViral'];

	$difBaMov = $_POST['difBaMov'];
	$difEntApr = $_POST['difEntApr'];
	$difMovCam = $_POST['difMovCam'];
	$difSalirCalle = $_POST['difSalirCalle'];
	$totalDis = $_POST['totalDis'];

	$updated_at = $_POST['updated_at'];

		$sql = $conn->prepare('UPDATE vacunaciones SET tasVacBCG = :tasVacBCG, tasVacDPT = :tasVacDPT, tasVacHepatitisB = :tasVacHepatitisB, tasVacHIB= :tasVacHIB, tasVacPolio = :tasVacPolio, tasVacTripleViral = :tasVacTripleViral, updated_at =:updated_at WHERE salud_id = :idS');
		$sql->bindParam("idS", $idS, PDO::PARAM_STR);

		$sql->bindParam("tasVacBCG", $tasVacBCG, PDO::PARAM_STR);
		$sql->bindParam("tasVacDPT", $tasVacDPT, PDO::PARAM_STR);
		$sql->bindParam("tasVacHepatitisB", $tasVacHepatitisB, PDO::PARAM_STR);
		$sql->bindParam("tasVacHIB", $tasVacHIB, PDO::PARAM_STR);
		$sql->bindParam("tasVacPolio", $tasVacPolio, PDO::PARAM_STR);
		$sql->bindParam("tasVacTripleViral", $tasVacTripleViral, PDO::PARAM_STR);

		$sql->bindParam("updated_at", $updated_at, PDO::PARAM_STR);
		$sql->execute();

		$sql = $conn->prepare('UPDATE discapacidades SET difBaMov = :difBaMov, difEntApr = :difEntApr, difMovCam = :difMovCam, difSalirCalle = :difSalirCalle, totalDis = :totalDis, updated_at = :updated_at WHERE salud_id = :idS');
		$sql->bindParam("idS", $idS, PDO::PARAM_STR);

		$sql->bindParam("difBaMov", $difBaMov, PDO::PARAM_STR);
		$sql->bindParam("difEntApr", $difEntApr, PDO::PARAM_STR);
		$sql->bindParam("difMovCam", $difMovCam, PDO::PARAM_STR);
		$sql->bindParam("difSalirCalle", $difSalirCalle, PDO::PARAM_STR);
		$sql->bindParam("totalDis", $totalDis, PDO::PARAM_STR);

		$sql->bindParam("updated_at", $updated_at, PDO::PARAM_STR);
		$sql->execute();

		$html = "Se actualizaron los datos";

		return Response::json(array('html' => $html, 'departamentos' => $departamentos->toArray()));

	}

	public function borrarSalud(){

	$idS = $_POST['idS'];

		$sql = $conn->prepare('DELETE FROM vacunaciones WHERE salud_id = :idS');
		$sql->bindParam("idS", $idS, PDO::PARAM_STR);
		$sql->execute();

		$sql = $conn->prepare('DELETE FROM discapacidades WHERE salud_id = :idS');
		$sql->bindParam("idS", $idS, PDO::PARAM_STR);
		$sql->execute();

		$sql = $conn->prepare('DELETE FROM salud WHERE id = :idS');
		$sql->bindParam("idS", $idS, PDO::PARAM_STR);
		$sql->execute();

		$html = "borrado";

		return Response::json(array('html' => $html, 'departamentos' => $departamentos->toArray()));

	}

	public function crearSalud(){

	$anioS = $_POST['anioS'];
	$comprobar = $_POST['comprobar'];

	$tasVacBCG = $_POST['tasVacBCG'];
	$tasVacDPT = $_POST['tasVacDPT'];
	$tasVacHepatitisB = $_POST['tasVacHepatitisB'];
	$tasVacHIB = $_POST['tasVacHIB'];
	$tasVacPolio = $_POST['tasVacPolio'];
	$tasVacTripleViral = $_POST['tasVacTripleViral'];

	$difBaMov = $_POST['difBaMov'];
	$difEntApr = $_POST['difEntApr'];
	$difMovCam = $_POST['difMovCam'];
	$difSalirCalle = $_POST['difSalirCalle'];
	$totalDis = $_POST['totalDis'];

	$municipio_id = $_POST['municipio_id'];
	$created_at = $_POST['created_at'];
	$updated_at = $_POST['updated_at'];

		$sql = $conn->prepare('SELECT * FROM salud WHERE YEAR(anioS) = :comprobar');
		$sql->execute(array('comprobar' => $comprobar));
		$resultados = $sql->fetchAll();
		$ban = False;

		foreach ($resultados as $resultado) {
			$ban = True;
		};

		if($ban == False){

		$sql = $conn->prepare('INSERT INTO salud VALUES (null, :anioS, :municipio_id, :created_at, :updated_at)');

		$sql->bindParam("anioS", $anioS, PDO::PARAM_STR);

		$sql->bindParam("municipio_id", $municipio_id, PDO::PARAM_STR);
		$sql->bindParam("created_at", $created_at, PDO::PARAM_STR);
		$sql->bindParam("updated_at", $updated_at, PDO::PARAM_STR);
		$sql->execute();

		$sql = $conn->prepare('SELECT * FROM salud ORDER BY id DESC LIMIT 1');
		$sql->execute();
		$resultados = $sql->fetchAll();

		foreach ($resultados as $resultado) {
			$salud_id = $resultado['id'];
		};

		$sql = $conn->prepare('INSERT INTO vacunaciones VALUES (null, :tasVacBCG, :tasVacDPT, :tasVacHepatitisB, :tasVacHIB, :tasVacPolio, :tasVacTripleViral, :salud_id, :created_at, :updated_at)');
		$sql->bindParam("tasVacBCG", $tasVacBCG, PDO::PARAM_STR);
		$sql->bindParam("tasVacDPT", $tasVacDPT, PDO::PARAM_STR);
		$sql->bindParam("tasVacHepatitisB", $tasVacHepatitisB, PDO::PARAM_STR);
		$sql->bindParam("tasVacHIB", $tasVacHIB, PDO::PARAM_STR);
		$sql->bindParam("tasVacPolio", $tasVacPolio, PDO::PARAM_STR);
		$sql->bindParam("tasVacTripleViral", $tasVacTripleViral, PDO::PARAM_STR);
		$sql->bindParam("salud_id", $salud_id, PDO::PARAM_STR);
		$sql->bindParam("created_at", $created_at, PDO::PARAM_STR);
		$sql->bindParam("updated_at", $updated_at, PDO::PARAM_STR);
		$sql->execute();

		$sql = $conn->prepare('INSERT INTO discapacidades VALUES (null, :difBaMov, :difEntApr, :difMovCam, :difSalirCalle, :totalDis, :salud_id, :created_at, :updated_at)');
		$sql->bindParam("difBaMov", $difBaMov, PDO::PARAM_STR);
		$sql->bindParam("difEntApr", $difEntApr, PDO::PARAM_STR);
		$sql->bindParam("difMovCam", $difMovCam, PDO::PARAM_STR);
		$sql->bindParam("difSalirCalle", $difSalirCalle, PDO::PARAM_STR);
		$sql->bindParam("totalDis", $totalDis, PDO::PARAM_STR);
		$sql->bindParam("salud_id", $salud_id, PDO::PARAM_STR);
		$sql->bindParam("created_at", $created_at, PDO::PARAM_STR);
		$sql->bindParam("updated_at", $updated_at, PDO::PARAM_STR);
		$sql->execute();

		$html = "Se registrarón los datos correctamente";

		}else{

		$html = "Ya se encuentra registrado ese año";

		}

		return Response::json(array('html' => $html, 'departamentos' => $departamentos->toArray()));

	}

	public function grafica1Salud(){

	$idMunicipio = $_POST['idMunicipio'];
	$anioS = $_POST['anioS'];

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

		return Response::json(array('html' => $html, 'departamentos' => $departamentos->toArray()));

	}

	public function grafica2Salud(){

	$idMunicipio = $_POST['idMunicipio'];
	$anioS = $_POST['anioS'];

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

		return Response::json(array('html' => $html, 'departamentos' => $departamentos->toArray()));

	}

	public function mostrarActualizarSalud(){

	$idS = $_POST['idS'];

		$sql = $conn->prepare('SELECT salud.id,DATE(anioS),tasVacBCG,tasVacDPT,tasVacHepatitisB,tasVacHIB,tasVacPolio,tasVacTripleViral,difBaMov,difEntApr,difMovCam,difSalirCalle,totalDis FROM salud,vacunaciones,discapacidades WHERE salud.id = :idS AND vacunaciones.salud_id = salud.id AND discapacidades.salud_id = salud.id');
		$sql->execute(array('idS' => $idS));
		$resultados = $sql->fetchAll();
		$html = "";

		foreach ($resultados as $resultado) {
            $id = $resultado['id'];               
            $anio = $resultado['DATE(anioS)'];

            $tasVacBCG = $resultado['tasVacBCG'];
            $tasVacDPT = $resultado['tasVacDPT'];
            $tasVacHepatitisB = $resultado['tasVacHepatitisB'];
            $tasVacHIB = $resultado['tasVacHIB'];
            $tasVacPolio = $resultado['tasVacPolio'];
            $tasVacTripleViral = $resultado['tasVacTripleViral'];

            $difBaMov = $resultado['difBaMov'];
            $difEntApr = $resultado['difEntApr'];
            $difMovCam = $resultado['difMovCam'];
            $difSalirCalle = $resultado['difSalirCalle'];
            $totalDis = $resultado['totalDis'];

			$html .="
                    <div class='col-lg-12 col-md-12 col-sm-12'>
                    <div class='col-lg-4 col-md-4 col-sm-4'>
                        <label for='anio2' class='text-label'>Año</label>       
                        <input id='anio2' type='date' class='form-control' value='$anio' disabled=''>
                    </div>
                </div>

                <div class='col-lg-12 col-md-12 col-sm-12'><br></div>

                <div class='col-lg-12 col-md-12 col-sm-12'>
                    <div class='col-lg-12 col-md-12 col-sm-12' style='font-size: 18px'>
                        <label for='tasVacBCG2' class='text-label'><strong>Vacunación</strong></label>
                    </div>
                    <div class='col-lg-4 col-md-4 col-sm-4'>              
                        <label for='tasVacBCG2' class='text-label'>BCG</label>       
                        <input id='tasVacBCG2' type='text' placeholder='Tasa de BCG' class='form-control' value='$tasVacBCG'>
                    </div>
                    <div class='col-lg-4 col-md-4 col-sm-4'>
                        <label for='tasVacDPT2' class='text-label'>DPT</label>     
                        <input id='tasVacDPT2' type='text' placeholder='Tasa de DPT' class='form-control' value='$tasVacDPT'>
                    </div>
                    <div class='col-lg-4 col-md-4 col-sm-4'>
                        <label for='tasVacHepatitisB2' class='text-label'>Hepatitis B</label>       
                        <input id='tasVacHepatitisB2' type='text' placeholder='Tasa de Hepatitis B' class='form-control' value='$tasVacHepatitisB'>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class='col-lg-4 col-md-4 col-sm-4'>
                        <label for='tasVacHIB2' class='text-label'>HIB</label>       
                        <input id='tasVacHIB2' type='text' placeholder='Tasa de HIB' class='form-control' value='$tasVacHIB'>
                    </div>
                    <div class='col-lg-4 col-md-4 col-sm-4'>
                        <label for='tasVacPolio2' class='text-label'>Polio</label>       
                        <input id='tasVacPolio2' type='text' placeholder='Tasa de Polio' class='form-control' value='$tasVacPolio'>
                    </div>
                    <div class='col-lg-4 col-md-4 col-sm-4'>
                        <label for='tasVacTripleViral2' class='text-label'>Triple viral</label>       
                        <input id='tasVacTripleViral2' type='text' placeholder='Tasa de Triple viral' class='form-control' value='$tasVacTripleViral'>
                    </div>
                </div>

               <div class='col-lg-12 col-md-12 col-sm-12'><br></div>

                <div class='col-lg-12 col-md-12 col-sm-12'>
                    <div class='col-lg-12 col-md-12 col-sm-12' style='font-size: 18px'>
                        <label for='difBaMov2' class='text-label'><strong>Discapacidades</strong></label>
                    </div>
                    <div class='col-lg-4 col-md-4 col-sm-4'>              
                        <label for='difBaMov2' class='text-label'>Dificultad para bañarse o moverse</label>       
                        <input id='difBaMov2' type='text' placeholder='Total' class='form-control' value='$difBaMov'>
                    </div>
                    <div class='col-lg-4 col-md-4 col-sm-4'>
                        <label for='difEntApr2' class='text-label'>Dificultad para entender o aprender</label>     
                        <input id='difEntApr2' type='text' placeholder='Total' class='form-control' value='$difEntApr'>
                    </div>
                    <div class='col-lg-4 col-md-4 col-sm-4'>
                        <label for='totalDis2' class='text-label'>Total de población con Discapacidad</label>       
                        <input id='totalDis2' type='text' placeholder='Total' class='form-control' value='$totalDis'>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                     <div class='col-lg-4 col-md-4 col-sm-4'>
                        <label for='difSalirCalle2' class='text-label'>Dificultad para salir a la calle sin ayuda o compañia</label>     
                        <input id='difSalirCalle2' type='text' placeholder='Total' class='form-control' value='$difSalirCalle'>
                    </div>                    
                     <div class='col-lg-4 col-md-4 col-sm-4'>
                        <label for='difMovCam2' class='text-label'>Dificultad para moverse o para caminar por si</label>       
                        <input id='difMovCam2' type='text' placeholder='Total' class='form-control' value='$difMovCam'>
                    </div>
                </div>

                <div class='col-lg-12 col-md-12 col-sm-12'><br></div> 
               ";

			$html .="<input id='idS' type='text' value='$id' style='display: none;'>";
		};

		return Response::json(array('html' => $html, 'departamentos' => $departamentos->toArray()));

	}

	public function mostrarSalud(){

	$idMunicipio = $_POST['idMunicipio'];
	$anioS = $_POST['anioS'];

		$sql = $conn->prepare('SELECT * FROM salud,vacunaciones,discapacidades WHERE salud.municipio_id = :idMunicipio AND vacunaciones.salud_id = salud.id AND discapacidades.salud_id = salud.id AND YEAR(anioS) = :anioS');
		$sql->execute(array('idMunicipio' => $idMunicipio, 'anioS' => $anioS));
		$resultados = $sql->fetchAll();
		$html = "";

		//Tabla de vacunaciones
		$html .="<div class='col-sm-6 col-md-6 col-lg-6'>

			<table class='table table-bordered table-hover'>
				<thead class='thead-s'>
					<tr>
						<th>Tasa de Vacunación</th>
						<th>Valores</th>
					</tr>
				</thead>
				<tbody>
					<tr class='border-dotted'>
						<td>BCG</td>";
							
		foreach ($resultados as $resultado) {
			$tasVacBCG = $resultado['tasVacBCG'];
			
			$html .="<td>$tasVacBCG</td>";
								
		};

		$html .="</tr>
					<tr class='border-dotted'>
						<td>DPT</td>";

		foreach ($resultados as $resultado) {
			$tasVacDPT = $resultado['tasVacDPT'];

			$html .="<td>$tasVacDPT</td>";

		};

		$html .="</tr>
					<tr class='border-dotted'>
						<td>Hepatitis B</td>";

		foreach ($resultados as $resultado) {
			$tasVacHepatitisB = $resultado['tasVacHepatitisB'];

			$html .="<td>$tasVacHepatitisB</td>";

		};

		$html .="</tr>
					<tr class='border-dotted'>
						<td>HIB</td>";

		foreach ($resultados as $resultado) {
			$tasVacHIB = $resultado['tasVacHIB'];
			
			$html .="<td>$tasVacHIB</td>";

		};

		$html .="</tr>
					<tr class='border-dotted'>
						<td>Polio</td>";

		foreach ($resultados as $resultado) {
			$tasVacPolio = $resultado['tasVacPolio'];
			
			$html .="<td>$tasVacPolio</td>";

		};

		$html .="</tr>
					<tr>
						<td>Triple viral</td>";

		foreach ($resultados as $resultado) {
			$tasVacTripleViral = $resultado['tasVacTripleViral'];
			
			$html .="<td>$tasVacTripleViral</td>";

		};

		$html .="</tr>
				</tbody>
				</table>

				</div>";

		// Tabla discapacidades
		$html .="<div class='col-sm-6 col-md-6 col-lg-6'>

			<table class='table table-bordered table-hover'>
				<thead class='thead-s'>
					<tr>
						<th>Discapacidades</th>
						<th>Valores</th>
					</tr>
				</thead>
				<tbody>
					<tr class='border-dotted'>
						<td>Dificultad para bañarse o moverse</td>";

		foreach ($resultados as $resultado) {
			$difBaMov = $resultado['difBaMov'];

			$html .= "<td>$difBaMov</td>";
		};

		$html .="</tr>
					<tr class='border-dotted'>
						<td>Dificultad para entender o aprender</td>";

		foreach ($resultados as $resultado) {
			$difEntApr = $resultado['difEntApr'];

			$html .= "<td>$difEntApr</td>";							
		};

		$html .="</tr>
					<tr class='border-dotted'>
						<td>Dificultad para moverse o para caminar por si</td>";

		foreach ($resultados as $resultado) {
			$difMovCam = $resultado['difMovCam'];

			$html .= "<td>$difMovCam</td>";
		};

		$html .="</tr>
					<tr class='border-dotted'>
						<td>Dificultad para salir a la calle sin ayuda o compañía</td>";

		foreach ($resultados as $resultado) {
			$difSalirCalle = $resultado['difSalirCalle'];

			$html .= "<td>$difSalirCalle</td>";
		};

		$html .="</tr>
					<tr>
						<td>Total de población con Discapacidad</td>";

		foreach ($resultados as $resultado) {
			$totalDis = $resultado['totalDis'];

			$html .= "<td>$totalDis</td>";
		};

		$html .="</tr>
				</tbody>
				</table>

				</div>";

		return Response::json(array('html' => $html, 'departamentos' => $departamentos->toArray()));

	}

	public function mostrarTablaSalud(){

	$idMunicipio = $_POST['idMunicipio'];

		$sql = $conn->prepare('SELECT id,YEAR(anioS),tasVacBCG,tasVacDPT,tasVacHepatitisB FROM salud WHERE salud.municipio_id = :idMunicipio ORDER BY anioS');
		$sql->execute(array('idMunicipio' => $idMunicipio));
		$resultados = $sql->fetchAll();
		$html = "";

		$html .="<table class='table table-striped table-bordered table-hover'>
				<thead>
				<tr>
				<th>Año</th>
				<th>Tasa de vacunación contra el BCG</th>
				<th>Tasa de vacunación contra el DPT</th>
				<th>Tasa de vacunación contra la hepatitis B</th>
				<th>Funciones</th>
				</tr>
				</thead>
				<tbody>";

		foreach ($resultados as $resultado) {

			$id = $resultado['id'];
			$anio = $resultado['YEAR(anioS)'];
			$tasVacBCG = $resultado['tasVacBCG'];
			$tasVacDPT = $resultado['tasVacDPT'];
			$tasVacHepatitisB = $resultado['tasVacHepatitisB'];
			
			$html .="<tr>
					<td>$anio</td>
					<td>$tasVacBCG</td>
					<td>$tasVacDPT</td>
					<td>$tasVacHepatitisB</td>
					<td><a id='$id' href='#' class='btn btn-success' data-toggle='modal' data-target='#modalMostrarActualizar'>Editar</a></td>
					</tr>";
		};

		$html .="</tbody>
                </table>";

        // <a id='$id' href='#' class='btn btn-danger'>Borrar</a>

		return Response::json(array('html' => $html, 'departamentos' => $departamentos->toArray()));

	}

}
