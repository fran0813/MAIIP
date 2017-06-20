<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \Response;

class ViviendaserviciospublicosController extends Controller
{
    public function actualizarViviendaserviciospublicos(){

	$idVSP = $_GET['idVSP'];

	$cabViv = $_GET['cabViv'];
	$cabHog = $_GET['cabHog'];
	$cabHogViv = $_GET['cabHogViv'];
	$cabPerHog = $_GET['cabPerHog'];
	$cabPerViv = $_GET['cabPerViv'];

	$rurViv = $_GET['rurViv'];
	$rurHog = $_GET['rurHog'];
	$rurHogViv = $_GET['rurHogViv'];
	$rurPerHog = $_GET['rurPerHog'];
	$rurPerViv = $_GET['rurPerViv'];

	$totalViv = $_GET['totalViv'];
	$totalHog = $_GET['totalHog'];
	$totalHogViv = $_GET['totalHogViv'];
	$totalPerHog = $_GET['totalPerHog'];
	$totalPerViv = $_GET['totalPerViv'];

	$cabCA = $_GET['cabCA'];
	$centPobCA = $_GET['centPobCA'];
	$rurDispCA = $_GET['rurDispCA'];

	$cabCAs = $_GET['cabCAs'];
	$centPobCAs = $_GET['centPobCAs'];
	$rurDispCAs = $_GET['rurDispCAs'];

	$cabCG = $_GET['cabCG'];
	$centPobCG = $_GET['centPobCG'];
	$rurDispCG = $_GET['rurDispCG'];

	$cabCT = $_GET['cabCT'];
	$centPobCT = $_GET['centPobCT'];
	$rurDispCT = $_GET['rurDispCT'];

	$updated_at = $_GET['updated_at'];

		$sql = $conn->prepare('UPDATE viviendasserviciospublicos SET cabViv = :cabViv, cabHog = :cabHog, cabHogViv = :cabHogViv, cabPerHog = :cabPerHog, cabPerViv = :cabPerViv, rurViv = :rurViv, rurHog = :rurHog, rurHogViv = :rurHogViv, rurPerHog = :rurPerHog, rurPerViv = :rurPerViv, totalViv = :totalViv, totalHog = :totalHog, totalHogViv= :totalHogViv, totalPerHog = :totalPerHog, totalPerViv = :totalPerViv, updated_at =:updated_at WHERE id = :idVSP');
		$sql->bindParam("idVSP", $idVSP, PDO::PARAM_STR);

		$sql->bindParam("cabViv", $cabViv, PDO::PARAM_STR);
		$sql->bindParam("cabHog", $cabHog, PDO::PARAM_STR);
		$sql->bindParam("cabHogViv", $cabHogViv, PDO::PARAM_STR);
		$sql->bindParam("cabPerHog", $cabPerHog, PDO::PARAM_STR);
		$sql->bindParam("cabPerViv", $cabPerViv, PDO::PARAM_STR);

		$sql->bindParam("rurViv", $rurViv, PDO::PARAM_STR);
		$sql->bindParam("rurHog", $rurHog, PDO::PARAM_STR);
		$sql->bindParam("rurHogViv", $rurHogViv, PDO::PARAM_STR);
		$sql->bindParam("rurPerHog", $rurPerHog, PDO::PARAM_STR);
		$sql->bindParam("rurPerViv", $rurPerViv, PDO::PARAM_STR);

		$sql->bindParam("totalViv", $totalViv, PDO::PARAM_STR);
		$sql->bindParam("totalHog", $totalHog, PDO::PARAM_STR);
		$sql->bindParam("totalHogViv", $totalHogViv, PDO::PARAM_STR);
		$sql->bindParam("totalPerHog", $totalPerHog, PDO::PARAM_STR);
		$sql->bindParam("totalPerViv", $totalPerViv, PDO::PARAM_STR);

		$sql->bindParam("updated_at", $updated_at, PDO::PARAM_STR);
		$sql->execute();

		$sql = $conn->prepare('UPDATE coberturaalcantarillado SET cabCA = :cabCA, centPobCA = :centPobCA, rurDispCA = :rurDispCA, updated_at = :updated_at WHERE viviendaserviciopublico_id = :idVSP');
		$sql->bindParam("idVSP", $idVSP, PDO::PARAM_STR);
		$sql->bindParam("cabCA", $cabCA, PDO::PARAM_STR);
		$sql->bindParam("centPobCA", $centPobCA, PDO::PARAM_STR);
		$sql->bindParam("rurDispCA", $rurDispCA, PDO::PARAM_STR);
		$sql->bindParam("updated_at", $updated_at, PDO::PARAM_STR);
		$sql->execute();

		$sql = $conn->prepare('UPDATE coberturaaseo SET cabCAs = :cabCAs, centPobCAs = :centPobCAs, rurDispCAs = :rurDispCAs, updated_at = :updated_at WHERE viviendaserviciopublico_id = :idVSP');
		$sql->bindParam("idVSP", $idVSP, PDO::PARAM_STR);
		$sql->bindParam("cabCAs", $cabCAs, PDO::PARAM_STR);
		$sql->bindParam("centPobCAs", $centPobCAs, PDO::PARAM_STR);
		$sql->bindParam("rurDispCAs", $rurDispCAs, PDO::PARAM_STR);
		$sql->bindParam("updated_at", $updated_at, PDO::PARAM_STR);
		$sql->execute();

		$sql = $conn->prepare('UPDATE coberturagas SET cabCG = :cabCG, centPobCG = :centPobCG, rurDispCG = :rurDispCG, updated_at = :updated_at WHERE viviendaserviciopublico_id = :idVSP');
		$sql->bindParam("idVSP", $idVSP, PDO::PARAM_STR);
		$sql->bindParam("cabCG", $cabCG, PDO::PARAM_STR);
		$sql->bindParam("centPobCG", $centPobCG, PDO::PARAM_STR);
		$sql->bindParam("rurDispCG", $rurDispCG, PDO::PARAM_STR);
		$sql->bindParam("updated_at", $updated_at, PDO::PARAM_STR);
		$sql->execute();

		$sql = $conn->prepare('UPDATE coberturatelefono SET cabCT = :cabCT, centPobCT = :centPobCT, rurDispCT = :rurDispCT, updated_at = :updated_at WHERE viviendaserviciopublico_id = :idVSP');
		$sql->bindParam("idVSP", $idVSP, PDO::PARAM_STR);
		$sql->bindParam("cabCT", $cabCT, PDO::PARAM_STR);
		$sql->bindParam("centPobCT", $centPobCT, PDO::PARAM_STR);
		$sql->bindParam("rurDispCT", $rurDispCT, PDO::PARAM_STR);
		$sql->bindParam("updated_at", $updated_at, PDO::PARAM_STR);
		$sql->execute();

		$html = "Se actualizaron los datos";

		return Response::json(array('html' => $html,));

	}

	public function borrarViviendaserviciospublicos(){

	$idVSP = $_GET['idVSP'];

		// $sql = $conn->prepare('DELETE FROM coberturaalcantarillado WHERE viviendaserviciopublico_id = :idVSP');
		// $sql->bindParam("idVSP", $idVSP, PDO::PARAM_STR);
		// $sql->execute();

		// $sql = $conn->prepare('DELETE FROM coberturaaseo WHERE viviendaserviciopublico_id = :idVSP');
		// $sql->bindParam("idVSP", $idVSP, PDO::PARAM_STR);
		// $sql->execute();

		// $sql = $conn->prepare('DELETE FROM coberturagas WHERE viviendaserviciopublico_id = :idVSP');
		// $sql->bindParam("idVSP", $idVSP, PDO::PARAM_STR);
		// $sql->execute();

		// $sql = $conn->prepare('DELETE FROM coberturatelefono WHERE viviendaserviciopublico_id = :idVSP');
		// $sql->bindParam("idVSP", $idVSP, PDO::PARAM_STR);
		// $sql->execute();

		// $sql = $conn->prepare('DELETE FROM viviendasserviciospublicos WHERE id = :idVSP');
		// $sql->bindParam("idVSP", $idVSP, PDO::PARAM_STR);
		// $sql->execute();

		$html = "borrado";

		return Response::json(array('html' => $html,));

	}

	public function crearViviendaserviciospublicos(){

		$anioVSP = $_GET['anioVSP'];
		$comprobar = $_GET['comprobar'];

		$cabViv = $_GET['cabViv'];
		$cabHog = $_GET['cabHog'];
		$cabHogViv = $_GET['cabHogViv'];
		$cabPerHog = $_GET['cabPerHog'];
		$cabPerViv = $_GET['cabPerViv'];

		$rurViv = $_GET['rurViv'];
		$rurHog = $_GET['rurHog'];
		$rurHogViv = $_GET['rurHogViv'];
		$rurPerHog = $_GET['rurPerHog'];
		$rurPerViv = $_GET['rurPerViv'];

		$totalViv = $_GET['totalViv'];
		$totalHog = $_GET['totalHog'];
		$totalHogViv = $_GET['totalHogViv'];
		$totalPerHog = $_GET['totalPerHog'];
		$totalPerViv = $_GET['totalPerViv'];

		$cabCA = $_GET['cabCA'];
		$centPobCA = $_GET['centPobCA'];
		$rurDispCA = $_GET['rurDispCA'];

		$cabCAs = $_GET['cabCAs'];
		$centPobCAs = $_GET['centPobCAs'];
		$rurDispCAs = $_GET['rurDispCAs'];

		$cabCG = $_GET['cabCG'];
		$centPobCG = $_GET['centPobCG'];
		$rurDispCG = $_GET['rurDispCG'];

		$cabCT = $_GET['cabCT'];
		$centPobCT = $_GET['centPobCT'];
		$rurDispCT = $_GET['rurDispCT'];

		$municipio_id = $_GET['municipio_id'];
		$created_at = $_GET['created_at'];
		$updated_at = $_GET['updated_at'];

		$sql = $conn->prepare('SELECT * FROM viviendasserviciospublicos WHERE YEAR(anioVSP) = :comprobar');
		$sql->execute(array('comprobar' => $comprobar));
		$resultados = $sql->fetchAll();
		$ban = False;

		foreach ($resultados as $resultado) {
			$ban = True;
		};

		if($ban == False){

		$sql = $conn->prepare('INSERT INTO viviendasserviciospublicos VALUES (null, :anioVSP, :cabViv, :cabHog, :cabHogViv, :cabPerHog, :cabPerViv, :rurViv, :rurHog, :rurHogViv, :rurPerHog, :rurPerViv, :totalViv, :totalHog, :totalHogViv, :totalPerHog, :totalPerViv, :municipio_id, :created_at, :updated_at)');

		$sql->bindParam("anioVSP", $anioVSP, PDO::PARAM_STR);

		$sql->bindParam("cabViv", $cabViv, PDO::PARAM_STR);
		$sql->bindParam("cabHog", $cabHog, PDO::PARAM_STR);
		$sql->bindParam("cabHogViv", $cabHogViv, PDO::PARAM_STR);
		$sql->bindParam("cabPerHog", $cabPerHog, PDO::PARAM_STR);
		$sql->bindParam("cabPerViv", $cabPerViv, PDO::PARAM_STR);

		$sql->bindParam("rurViv", $rurViv, PDO::PARAM_STR);
		$sql->bindParam("rurHog", $rurHog, PDO::PARAM_STR);
		$sql->bindParam("rurHogViv", $rurHogViv, PDO::PARAM_STR);
		$sql->bindParam("rurPerHog", $rurPerHog, PDO::PARAM_STR);
		$sql->bindParam("rurPerViv", $rurPerViv, PDO::PARAM_STR);

		$sql->bindParam("totalViv", $totalViv, PDO::PARAM_STR);
		$sql->bindParam("totalHog", $totalHog, PDO::PARAM_STR);
		$sql->bindParam("totalHogViv", $totalHogViv, PDO::PARAM_STR);
		$sql->bindParam("totalPerHog", $totalPerHog, PDO::PARAM_STR);
		$sql->bindParam("totalPerViv", $totalPerViv, PDO::PARAM_STR);

		$sql->bindParam("municipio_id", $municipio_id, PDO::PARAM_STR);
		$sql->bindParam("created_at", $created_at, PDO::PARAM_STR);
		$sql->bindParam("updated_at", $updated_at, PDO::PARAM_STR);
		$sql->execute();

		$sql = $conn->prepare('SELECT * FROM viviendasserviciospublicos ORDER BY id DESC LIMIT 1');
		$sql->execute();
		$resultados = $sql->fetchAll();

		foreach ($resultados as $resultado) {
			$viviendasserviciospublicos_id = $resultado['id'];
		};

		$sql = $conn->prepare('INSERT INTO coberturaalcantarillado VALUES (null, :cabCA, :centPobCA, :rurDispCA, :viviendasserviciospublicos_id, :created_at, :updated_at)');
		$sql->bindParam("cabCA", $cabCA, PDO::PARAM_STR);
		$sql->bindParam("centPobCA", $centPobCA, PDO::PARAM_STR);
		$sql->bindParam("rurDispCA", $rurDispCA, PDO::PARAM_STR);
		$sql->bindParam("viviendasserviciospublicos_id", $viviendasserviciospublicos_id, PDO::PARAM_STR);
		$sql->bindParam("created_at", $created_at, PDO::PARAM_STR);
		$sql->bindParam("updated_at", $updated_at, PDO::PARAM_STR);
		$sql->execute();

		$sql = $conn->prepare('INSERT INTO coberturaaseo VALUES (null, :cabCAs, :centPobCAs, :rurDispCAs, :viviendasserviciospublicos_id, :created_at, :updated_at)');
		$sql->bindParam("cabCAs", $cabCAs, PDO::PARAM_STR);
		$sql->bindParam("centPobCAs", $centPobCAs, PDO::PARAM_STR);
		$sql->bindParam("rurDispCAs", $rurDispCAs, PDO::PARAM_STR);
		$sql->bindParam("viviendasserviciospublicos_id", $viviendasserviciospublicos_id, PDO::PARAM_STR);
		$sql->bindParam("created_at", $created_at, PDO::PARAM_STR);
		$sql->bindParam("updated_at", $updated_at, PDO::PARAM_STR);
		$sql->execute();


		$sql = $conn->prepare('INSERT INTO coberturagas VALUES (null, :cabCG, :centPobCG, :rurDispCG, :viviendasserviciospublicos_id, :created_at, :updated_at)');
		$sql->bindParam("cabCG", $cabCG, PDO::PARAM_STR);
		$sql->bindParam("centPobCG", $centPobCG, PDO::PARAM_STR);
		$sql->bindParam("rurDispCG", $rurDispCG, PDO::PARAM_STR);
		$sql->bindParam("viviendasserviciospublicos_id", $viviendasserviciospublicos_id, PDO::PARAM_STR);
		$sql->bindParam("created_at", $created_at, PDO::PARAM_STR);
		$sql->bindParam("updated_at", $updated_at, PDO::PARAM_STR);
		$sql->execute();

		$sql = $conn->prepare('INSERT INTO coberturatelefono VALUES (null, :cabCT, :centPobCT, :rurDispCT, :viviendasserviciospublicos_id, :created_at, :updated_at)');
		$sql->bindParam("cabCT", $cabCT, PDO::PARAM_STR);
		$sql->bindParam("centPobCT", $centPobCA, PDO::PARAM_STR);
		$sql->bindParam("rurDispCT", $rurDispCA, PDO::PARAM_STR);
		$sql->bindParam("viviendasserviciospublicos_id", $viviendasserviciospublicos_id, PDO::PARAM_STR);
		$sql->bindParam("created_at", $created_at, PDO::PARAM_STR);
		$sql->bindParam("updated_at", $updated_at, PDO::PARAM_STR);
		$sql->execute();

		$html = "Se registrarón los datos correctamente";

		}else{

		$html = "Ya se encuentra registrado ese año";

		}

		return Response::json(array('html' => $html,));

	}

	public function grafica1Viviendaserviciospublicos(){

		$idMunicipio = $_GET['idMunicipio'];
		$anioVSP = $_GET['anioVSP'];

		$resultados = DB::table('viviendasserviciospublicos')
            ->select('viviendasserviciospublicos.anioVSP', 'viviendasserviciospublicos.cabHogViv', 'viviendasserviciospublicos.cabPerHog', 'viviendasserviciospublicos.cabPerViv', 'viviendasserviciospublicos.rurHogViv', 'viviendasserviciospublicos.rurPerHog', 'viviendasserviciospublicos.rurPerViv', 'viviendasserviciospublicos.totalHogViv', 'viviendasserviciospublicos.totalPerHog', 'viviendasserviciospublicos.totalPerViv')
            ->where('viviendasserviciospublicos.municipio_id', '=', $idMunicipio)
            ->where('viviendasserviciospublicos.anioVSP', '=', $anioVSP)
            ->get();

		$html = "";
		$html .="<script type='text/javascript'>
				google.charts.load('current', {'packages':['corechart']});
	      		google.charts.setOnLoadCallback(drawChart);

	      		function drawChart() {
		        var data = google.visualization.arrayToDataTable([
		        ['Año', 'Hogares por vivienda', 'Personas por hogar', 'Personas por vivienda'],";
		
		foreach ($resultados as $resultado) {
			$anio = $resultado->anioVSP;

			$cabHogViv = $resultado->cabHogViv;
			$rurHogViv = $resultado->rurHogViv;
			$totalHogViv = $resultado->totalHogViv;

			$cabPerHog = $resultado->cabPerHog;
			$rurPerHog = $resultado->rurPerHog;
			$totalPerHog = $resultado->totalPerHog;

			$cabPerViv = $resultado->cabPerViv;
			$rurPerViv = $resultado->rurPerViv;
			$totalPerViv = $resultado->totalPerViv;

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

		return Response::json(array('html' => $html,));

	}

	public function grafica2Viviendaserviciospublicos(){

		$idMunicipio = $_GET['idMunicipio'];
		$anioVSP = $_GET['anioVSP'];

		$resultados = DB::table('viviendasserviciospublicos')
		 	->join('coberturaalcantarillado', 'viviendasserviciospublicos.id', '=', 'coberturaalcantarillado.viviendaserviciopublico_id')
		 	->join('coberturaaseo', 'viviendasserviciospublicos.id', '=', 'coberturaaseo.viviendaserviciopublico_id')
		 	->join('coberturagas', 'viviendasserviciospublicos.id', '=', 'coberturagas.viviendaserviciopublico_id')
		 	->join('coberturatelefono', 'viviendasserviciospublicos.id', '=', 'coberturatelefono.viviendaserviciopublico_id')
            ->select('viviendasserviciospublicos.anioVSP', 'viviendasserviciospublicos.cabHogViv', 'viviendasserviciospublicos.cabPerHog', 'viviendasserviciospublicos.cabPerViv', 'viviendasserviciospublicos.rurHogViv', 'viviendasserviciospublicos.rurPerHog', 'viviendasserviciospublicos.rurPerViv', 'viviendasserviciospublicos.totalHogViv', 'viviendasserviciospublicos.totalPerHog', 'viviendasserviciospublicos.totalPerViv', 'coberturaalcantarillado.*', 'coberturaaseo.*', 'coberturagas.*', 'coberturatelefono.*')
            ->where('viviendasserviciospublicos.municipio_id', '=', $idMunicipio)
            ->where('viviendasserviciospublicos.anioVSP', '=', $anioVSP)
            ->get();

		$html = "";

		$html .="<script type='text/javascript'>
				google.charts.load('current', {'packages':['corechart']});
	      		google.charts.setOnLoadCallback(drawChart);

	      		function drawChart() {
		        var data = google.visualization.arrayToDataTable([
		        ['Año', 'Cabecera', 'Centros poblados', 'Rural disperso'],";
		
		foreach ($resultados as $resultado) {
			$anio = $resultado->anioVSP;

			$cabCA = $resultado->cabCA;
			$centPobCA = $resultado->centPobCA;
			$rurDispCA = $resultado->rurDispCA;

			$cabCAs = $resultado->cabCAs;
			$centPobCAs = $resultado->centPobCAs;
			$rurDispCAs = $resultado->rurDispCAs;

			$cabCG = $resultado->cabCG;
			$centPobCG = $resultado->centPobCG;
			$rurDispCG = $resultado->rurDispCG;

			$cabCT = $resultado->cabCT;
			$centPobCT = $resultado->centPobCT;
			$rurDispCT = $resultado->rurDispCT;

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

		return Response::json(array('html' => $html,));

	}

	public function mostrarActualizarViviendaserviciospublicos(){

		$idVSP = $_GET['idVSP'];

		$resultados = DB::table('viviendasserviciospublicos')
		 	->join('coberturaalcantarillado', 'viviendasserviciospublicos.id', '=', 'coberturaalcantarillado.viviendaserviciopublico_id')
		 	->join('coberturaaseo', 'viviendasserviciospublicos.id', '=', 'coberturaaseo.viviendaserviciopublico_id')
		 	->join('coberturagas', 'viviendasserviciospublicos.id', '=', 'coberturagas.viviendaserviciopublico_id')
		 	->join('coberturatelefono', 'viviendasserviciospublicos.id', '=', 'coberturatelefono.viviendaserviciopublico_id')
            ->select('viviendasserviciospublicos.id', 'viviendasserviciospublicos.anioVSP', 'viviendasserviciospublicos.cabHogViv', 'viviendasserviciospublicos.cabPerHog', 'viviendasserviciospublicos.cabPerViv', 'viviendasserviciospublicos.rurHogViv', 'viviendasserviciospublicos.rurPerHog', 'viviendasserviciospublicos.rurPerViv', 'viviendasserviciospublicos.totalHogViv', 'viviendasserviciospublicos.totalPerHog', 'viviendasserviciospublicos.totalPerViv', 'coberturaalcantarillado.*', 'coberturaaseo.*', 'coberturagas.*', 'coberturatelefono.*')
            ->where('viviendasserviciospublicos.anioVSP', '=', $anioVSP)
            ->get();

		$html = "";

		foreach ($resultados as $resultado) {
			$id = $resultado->id;               
			$anio = $resultado->anioVSP;

			$cabViv = $resultado->cabViv;
			$cabHog = $resultado->cabHog;
			$cabHogViv = $resultado->cabHogViv;
			$cabPerHog = $resultado->cabPerHog;
			$cabPerViv = $resultado->cabPerViv;

            $rurViv = $resultado->rurViv;
            $rurHog = $resultado->rurHog;
            $rurHogViv = $resultado->rurHogViv;
            $rurPerHog = $resultado->rurPerHog;
            $rurPerViv = $resultado->rurPerViv;

            $totalViv = $resultado->totalViv;
            $totalHog = $resultado->totalHog;
            $totalHogViv = $resultado->totalHogViv;
            $totalPerHog = $resultado->totalPerHog;
            $totalPerViv = $resultado->totalPerViv;

            $cabCA = $resultado->cabCA;
            $centPobCA = $resultado->centPobCA;
            $rurDispCA = $resultado->rurDispCA;

            $cabCAs = $resultado->cabCAs;
            $centPobCAs = $resultado->centPobCAs;
            $rurDispCAs = $resultado->rurDispCAs;

            $cabCG = $resultado->cabCG;
            $centPobCG = $resultado->centPobCG;
            $rurDispCG = $resultado->rurDispCG;

            $cabCT = $resultado->cabCT;
            $centPobCT = $resultado->centPobCT;
            $rurDispCT = $resultado->rurDispCT;		

			$html .="
                    <div class='col-lg-12 col-md-12 col-sm-12'>
                    <div class='col-lg-4 col-md-4 col-sm-4'>
                        <label for='anio' class='text-label'>Año</label>       
                        <input id='anio' type='date' class='form-control' value='$anio' disabled=''>
                    </div>
                </div>

                <div class='col-lg-12 col-md-12 col-sm-12'><br></div>

                <div class='col-lg-12 col-md-12 col-sm-12'>
                    <div class='col-lg-12 col-md-12 col-sm-12' style='font-size: 18px'>
                        <label for='cabViv2' class='text-label'><strong>Viviendas</strong></label>
                    </div>
                    <div class='col-lg-4 col-md-4 col-sm-4'>              
                        <label for='cabViv2' class='text-label'>Cabecera</label>       
                        <input id='cabViv2' type='text' placeholder='cabecera viviendas' oninput='calcularTotalCabViv2()' class='form-control' value='$cabViv'>
                    </div>
                    <div class='col-lg-4 col-md-4 col-sm-4'>
                        <label for='rurViv2' class='text-label'>Rural</label>     
                        <input id='rurViv2' type='text' placeholder='Rural viviendas' oninput='calcularTotalCabViv2()' class='form-control' value='$rurViv'>
                    </div>
                    <div class='col-lg-4 col-md-4 col-sm-4'>
                        <label for='totalViv2' class='text-label'>Total</label>       
                        <input id='totalViv2' type='text' placeholder='Total' disabled='' class='form-control' value='$totalViv'>
                    </div>
                </div>

               <div class='col-lg-12 col-md-12 col-sm-12'><br></div>

                <div class='col-lg-12 col-md-12 col-sm-12'>
                    <div class='col-lg-12 col-md-12 col-sm-12' style='font-size: 18px'>
                        <label for='cabHog2' class='text-label'><strong>Hogares</strong></label>
                    </div>
                    <div class='col-lg-4 col-md-4 col-sm-4'>              
                        <label for='cabHog2' class='text-label'>Cabecera</label>       
                        <input id='cabHog2' type='text' placeholder='cabecera hogares' oninput='calcularTotalCabHog2()' class='form-control' value='$cabHog'>
                    </div>
                    <div class='col-lg-4 col-md-4 col-sm-4'>
                        <label for='rurHog2' class='text-label'>Rural</label>     
                        <input id='rurHog2' type='text' placeholder='Rural hogares' oninput='calcularTotalCabHog2()' class='form-control' value='$rurHog'>
                    </div>
                    <div class='col-lg-4 col-md-4 col-sm-4'>
                        <label for='totalHog2' class='text-label'>Total</label>       
                        <input id='totalHog2' type='text' placeholder='Total' disabled='' class='form-control' value='$totalHog'>
                    </div>
                </div>

                <div class='col-lg-12 col-md-12 col-sm-12'><br></div>

                <div class='col-lg-12 col-md-12 col-sm-12'>
                    <div class='col-lg-12 col-md-12 col-sm-12' style='font-size: 18px'>
                        <label for='cabHogViv2' class='text-label'><strong>Hogares por vivienda</strong></label>
                    </div>
                    <div class='col-lg-4 col-md-4 col-sm-4'>              
                        <label for='cabHogViv2' class='text-label'>Cabecera</label>       
                        <input id='cabHogViv2' type='text' placeholder='cabecera hogares por vivienda' oninput='calcularTotalCabHogViv2()' class='form-control' value='$cabHogViv'>
                    </div>
                    <div class='col-lg-4 col-md-4 col-sm-4'>
                        <label for='rurHogViv2' class='text-label'>Rural</label>     
                        <input id='rurHogViv2' type='text' placeholder='Rural hogares por vivienda' oninput='calcularTotalCabHogViv2()' class='form-control' value='$rurHogViv'>
                    </div>
                    <div class='col-lg-4 col-md-4 col-sm-4'>
                        <label for='totalHogViv2' class='text-label'>Total</label>       
                        <input id='totalHogViv2' type='text' placeholder='Total' disabled='' class='form-control' value='$totalHogViv'>
                    </div>
                </div>

                <div class='col-lg-12 col-md-12 col-sm-12'><br></div>

                <div class='col-lg-12 col-md-12 col-sm-12'>
                    <div class='col-lg-12 col-md-12 col-sm-12' style='font-size: 18px'>
                        <label for='cabPerHog2' class='text-label'><strong>Personas por hogar</strong></label>
                    </div>
                    <div class='col-lg-4 col-md-4 col-sm-4'>              
                        <label for='cabPerHog2' class='text-label'>Cabecera</label>       
                        <input id='cabPerHog2' type='text' placeholder='cabecera personas por hogar' oninput='calcularTotalCabPerHog2()' class='form-control' value='$cabPerHog'>
                    </div>
                    <div class='col-lg-4 col-md-4 col-sm-4'>
                        <label for='rurPerHog2' class='text-label'>Rural</label>     
                        <input id='rurPerHog2' type='text' placeholder='Rural personas por hogar' oninput='calcularTotalCabPerHog2()' class='form-control' value='$rurPerHog'>
                    </div>
                    <div class='col-lg-4 col-md-4 col-sm-4'>
                        <label for='totalPerHog2' class='text-label'>Total</label>       
                        <input id='totalPerHog2' type='text' placeholder='Total' disabled='' class='form-control' value='$totalPerHog'>
                    </div>
                </div>

                <div class='col-lg-12 col-md-12 col-sm-12'><br></div>

                <div class='col-lg-12 col-md-12 col-sm-12'>
                    <div class='col-lg-12 col-md-12 col-sm-12' style='font-size: 18px'>
                        <label for='cabPerViv2' class='text-label'><strong>Personas por vivienda</strong></label>
                    </div>
                    <div class='col-lg-4 col-md-4 col-sm-4'>              
                        <label for='cabPerViv2' class='text-label'>Cabecera</label>       
                        <input id='cabPerViv2' type='text' placeholder='cabecera personas por vivienda' oninput='calcularTotalCabPerViv2()' class='form-control' value='$cabPerViv'>
                    </div>
                    <div class='col-lg-4 col-md-4 col-sm-4'>
                        <label for='rurPerViv2' class='text-label'>Rural</label>     
                        <input id='rurPerViv2' type='text' placeholder='Rural personas por vivienda' oninput='calcularTotalCabPerViv2()' class='form-control' value='$rurPerViv'>
                    </div>
                    <div class='col-lg-4 col-md-4 col-sm-4'>
                        <label for='totalPerViv2' class='text-label'>Total</label>       
                        <input id='totalPerViv2' type='text' placeholder='Total' disabled='' class='form-control' value='$totalPerViv'>
                    </div>
                </div>

                <div class='col-lg-12 col-md-12 col-sm-12'><br></div>

                <div class='col-lg-12 col-md-12 col-sm-12'>
                    <div class='col-lg-12 col-md-12 col-sm-12' style='font-size: 18px'>
                        <label for='cabCA2' class='text-label'><strong>Cobertura alcantarillado</strong></label>
                    </div>
                    <div class='col-lg-4 col-md-4 col-sm-4'>              
                        <label for='cabCA2' class='text-label'>Cabecera</label>       
                        <input id='cabCA2' type='text' placeholder='Cabecera' class='form-control' value='$cabCA'>
                    </div>
                    <div class='col-lg-4 col-md-4 col-sm-4'>
                        <label for='centPobCA2' class='text-label'>Centros poblados</label>     
                        <input id='centPobCA2' type='text' placeholder='Centros poblados' class='form-control' value='$centPobCA'>
                    </div>
                    <div class='col-lg-4 col-md-4 col-sm-4'>
                        <label for='rurDispCA2' class='text-label'>Rural dispersos</label>       
                        <input id='rurDispCA2' type='text' placeholder='Rural dispersos' class='form-control' value='$rurDispCA'>
                    </div>
                </div>

                <div class='col-lg-12 col-md-12 col-sm-12'><br></div>

                <div class='col-lg-12 col-md-12 col-sm-12'>
                    <div class='col-lg-12 col-md-12 col-sm-12' style='font-size: 18px'>
                        <label for='cabCAs2' class='text-label'><strong>Cobertura aseo</strong></label>
                    </div>
                    <div class='col-lg-4 col-md-4 col-sm-4'>              
                        <label for='cabCAs2' class='text-label'>Cabecera</label>       
                        <input id='cabCAs2' type='text' placeholder='Cabecera' class='form-control' value='$cabCAs'>
                    </div>
                    <div class='col-lg-4 col-md-4 col-sm-4'>
                        <label for='centPobCAs2' class='text-label'>Centros poblados</label>     
                        <input id='centPobCAs2' type='text' placeholder='Centros poblados' class='form-control' value='$centPobCAs'>
                    </div>
                    <div class='col-lg-4 col-md-4 col-sm-4'>
                        <label for='rurDispCAs2' class='text-label'>Rural dispersos</label>       
                        <input id='rurDispCAs2' type='text' placeholder='Rural dispersos' class='form-control' value='$rurDispCAs'>
                    </div>
                </div>

                <div class='col-lg-12 col-md-12 col-sm-12'><br></div>

                <div class='col-lg-12 col-md-12 col-sm-12'>
                    <div class='col-lg-12 col-md-12 col-sm-12' style='font-size: 18px'>
                        <label for='cabCG2' class='text-label'><strong>Cobertura gas</strong></label>
                    </div>
                    <div class='col-lg-4 col-md-4 col-sm-4'>              
                        <label for='cabCG2' class='text-label'>Cabecera</label>       
                        <input id='cabCG2' type='text' placeholder='Cabecera' class='form-control' value='$cabCG'>
                    </div>
                    <div class='col-lg-4 col-md-4 col-sm-4'>
                        <label for='centPobCG2' class='text-label'>Centros poblados</label>     
                        <input id='centPobCG2' type='text' placeholder='Centros poblados' class='form-control' value='$centPobCG'>
                    </div>
                    <div class='col-lg-4 col-md-4 col-sm-4'>
                        <label for='rurDispCG2' class='text-label'>Rural dispersos</label>       
                        <input id='rurDispCG2' type='text' placeholder='Rural dispersos' class='form-control' value='$rurDispCG'>
                    </div>
                </div>

                <div class='col-lg-12 col-md-12 col-sm-12'><br></div>

                <div class='col-lg-12 col-md-12 col-sm-12'>
                    <div class='col-lg-12 col-md-12 col-sm-12' style='font-size: 18px'>
                        <label for='cabCT2' class='text-label'><strong>Cobertura telefono</strong></label>
                    </div>
                    <div class='col-lg-4 col-md-4 col-sm-4'>              
                        <label for='cabCT2' class='text-label'>Cabecera</label>       
                        <input id='cabCT2' type='text' placeholder='Cabecera' class='form-control' value='$cabCT'>
                    </div>
                    <div class='col-lg-4 col-md-4 col-sm-4'>
                        <label for='centPobCT2' class='text-label'>Centros poblados</label>     
                        <input id='centPobCT2' type='text' placeholder='Centros poblados' class='form-control' value='$centPobCT'>
                    </div>
                    <div class='col-lg-4 col-md-4 col-sm-4'>
                        <label for='rurDispCT2' class='text-label'>Rural dispersos</label>       
                        <input id='rurDispCT2' type='text' placeholder='Rural dispersos' class='form-control' value='$rurDispCT'>
                    </div>
                </div>

                <div class='col-lg-12 col-md-12 col-sm-12'><br></div>
               ";

			$html .="<input id='idVSP' type='text' value='$id' style='display: none;'>";
		};

		return Response::json(array('html' => $html,));

	}

	public function mostrarViviendaserviciospublicos(){

		$idMunicipio = $_GET['idMunicipio'];
		$anioVSP = $_GET['anioVSP'];
	
		$resultados = DB::table('viviendasserviciospublicos')
			->join('coberturaalcantarillado', 'viviendasserviciospublicos.id', '=', 'coberturaalcantarillado.viviendaserviciopublico_id')
		 	->join('coberturaaseo', 'viviendasserviciospublicos.id', '=', 'coberturaaseo.viviendaserviciopublico_id')
		 	->join('coberturagas', 'viviendasserviciospublicos.id', '=', 'coberturagas.viviendaserviciopublico_id')
		 	->join('coberturatelefono', 'viviendasserviciospublicos.id', '=', 'coberturatelefono.viviendaserviciopublico_id')
            ->select('viviendasserviciospublicos.*', 'coberturaalcantarillado.*', 'coberturaaseo.*', 'coberturagas.*', 'coberturatelefono.*')
            ->where('viviendasserviciospublicos.municipio_id', '=', $idMunicipio)
            ->where('viviendasserviciospublicos.anioVSP', '=', $anioVSP)
            ->get();

		$html = "";

		//Tabla de datos principales
		$html .="<div class='col-sm-12 col-md-12 col-lg-12'>

				<table class='table table-bordered table-hover'>
				<thead class='thead-s'>
				<tr>
				<th>Datos</th>
				<th>Cabecera</th>
				<th>Rural</th>
				<th>Total</th>
				</tr>
				</thead>
				<tbody>
				<tr class='border-dotted'>
				<td>Viviendas</td>";
							
		foreach ($resultados as $resultado) {
			$cabViv = $resultado->cabViv;
			$rurViv = $resultado->rurViv;
			$totalViv = $resultado->totalViv;
			
			$html .="<td>$cabViv</td>
					<td>$rurViv</td>
					<td>$totalViv</td>";
								
		};

		$html .="</tr>
				<tr class='border-dotted'>
				<td>Hogares</td>";

		foreach ($resultados as $resultado) {
			$cabHog = $resultado->cabHog;
			$rurHog = $resultado->rurHog;
			$totalHog = $resultado->totalHog;
			
			$html .="<td>$cabHog</td>
					<td>$rurHog</td>
					<td>$totalHog</td>";

		};

		$html .="</tr>
				<tr class='border-dotted'>
				<td>Hogares por vivienda</td>";

		foreach ($resultados as $resultado) {
			$cabHogViv = $resultado->cabHogViv;
			$rurHogViv = $resultado->rurHogViv;
			$totalHogViv = $resultado->totalHogViv;
			
			$html .="<td>$cabHogViv</td>
					<td>$rurHogViv</td>
					<td>$totalHogViv</td>";

		};

		$html .="</tr>
				<tr class='border-dotted'>
				<td>Hogares</td>";

		foreach ($resultados as $resultado) {
			$cabPerHog = $resultado->cabPerHog;
			$rurPerHog = $resultado->rurPerHog;
			$totalPerHog = $resultado->totalPerHog;
			
			$html .="<td>$cabPerHog</td>
					<td>$rurPerHog</td>
					<td>$totalPerHog</td>";

		};

		$html .="</tr>
				<tr>
				<td>Personas por vivienda</td>";

		foreach ($resultados as $resultado) {
			$cabPerViv = $resultado->cabPerViv;
			$rurPerViv = $resultado->rurPerViv;
			$totalPerViv = $resultado->totalPerViv;
			
			$html .="<td>$cabPerViv</td>
					<td>$rurPerViv</td>
					<td>$totalPerViv</td>";

		};

		$html .="</tr>
				</tbody>
				</table>

				</div>";

		// Tabla de cobertura alcantarillado
		$html .="<div class='col-sm-6 col-md-6 col-lg-6'>

				<table class='table table-bordered table-hover'>
				<thead class='thead-s'>
				<tr>
				<th>Cobertura Alcantarillado</th>
				<th>Valores</th>
				</tr>
				</thead>
				<tbody>
				<tr class='border-dotted'>
				<td>Cabecera</td>";

		foreach ($resultados as $resultado) {
			$cabCA = $resultado->cabCA;

			$html .= "<td>$cabCA</td>";
		};

		$html .="</tr>
				<tr class='border-dotted'>
				<td>Centro poblados</td>";

		foreach ($resultados as $resultado) {
			$centPobCA = $resultado->centPobCA;

			$html .= "<td>$centPobCA</td>";							
		};

		$html .="</tr>
				<tr>
				<td>Rural disperso</td>";

		foreach ($resultados as $resultado) {
			$rurDispCA = $resultado->rurDispCA;

			$html .= "<td>$rurDispCA</td>";
		};

		$html .="</tr>
				</tbody>
				</table>

				</div>";

		// Tabla cobertura aseo
		$html .="<div class='col-sm-6 col-md-6 col-lg-6'>

				<table class='table table-bordered table-hover'>
				<thead class='thead-s'>
				<tr>
				<th>Cobertura aseo</th>
				<th>Valores</th>
				</tr>
				</thead>
				<tbody>
				<tr class='border-dotted'>
				<td>Cabecera</td>";

		foreach ($resultados as $resultado) {
			$cabCAs = $resultado->cabCAs;
		
			$html .= "<td>$cabCAs</td>";
								
		};

		$html .="</tr>
				<tr class='border-dotted'>
				<td>Centro poblados</td>";

		foreach ($resultados as $resultado) {
			$centPobCAs = $resultado->centPobCAs;

			$html .="<td>$centPobCAs</td>";
		}

		$html .="</tr>
				<tr>
				<td>Rural disperso</td>";

		foreach ($resultados as $resultado) {
			$rurDispCAs = $resultado->rurDispCAs;

			$html .="<td>$rurDispCAs</td>";
		}
		
		$html .="</tr>
				</tbody>
				</table>

				</div>";

		// Tabla cobertura gas
		$html .="<div class='col-sm-6 col-md-6 col-lg-6'>

				<table class='table table-bordered table-hover'>
				<thead class='thead-s'>
				<tr>
				<th>Cobertura aseo</th>
				<th>Valores</th>
				</tr>
				</thead>
				<tbody>
				<tr class='border-dotted'>
				<td>Cabecera</td>";

		foreach ($resultados as $resultado) {
			$cabCG = $resultado->cabCG;
		
			$html .= "<td>$cabCG</td>";
								
		};

		$html .="</tr>
				<tr class='border-dotted'>
				<td>Centro poblados</td>";

		foreach ($resultados as $resultado) {
			$centPobCG = $resultado->centPobCG;

			$html .="<td>$centPobCG</td>";
		}

		$html .="</tr>
				<tr>
				<td>Rural disperso</td>";

		foreach ($resultados as $resultado) {
			$rurDispCG = $resultado->rurDispCG;

			$html .="<td>$rurDispCG</td>";
		}
		
		$html .="</tr>
				</tbody>
				</table>

				</div>";

		// Tabla cobertura telefono
		$html .="<div class='col-sm-6 col-md-6 col-lg-6'>

				<table class='table table-bordered table-hover'>
				<thead class='thead-s'>
				<tr>
				<th>Cobertura aseo</th>
				<th>Valores</th>
				</tr>
				</thead>
				<tbody>
				<tr class='border-dotted'>
				<td>Cabecera</td>";

		foreach ($resultados as $resultado) {
			$cabCT = $resultado->cabCT;
		
			$html .= "<td>$cabCT</td>";
								
		};

		$html .="</tr>
				<tr class='border-dotted'>
				<td>Centro poblados</td>";

		foreach ($resultados as $resultado) {
			$centPobCT = $resultado->centPobCT;

			$html .="<td>$centPobCT</td>";
		}

		$html .="</tr>
				<tr>
				<td>Rural disperso</td>";

		foreach ($resultados as $resultado) {
			$rurDispCT = $resultado->rurDispCT;

			$html .="<td>$rurDispCT</td>";
		}
		
		$html .="</tr>
				</tbody>
				</table>

				</div>";

		return Response::json(array('html' => $html,));

	}

	public function mostrarTablaViviendaserviciospublicos(){

		$idMunicipio = $_GET['idMunicipio'];

		$resultados = DB::table('viviendasserviciospublicos')
            ->select('viviendasserviciospublicos.id', 'viviendasserviciospublicos.anioVSP', 'viviendasserviciospublicos.cabHogViv', 'viviendasserviciospublicos.cabPerHog', 'viviendasserviciospublicos.cabPerViv', 'viviendasserviciospublicos.rurHogViv', 'viviendasserviciospublicos.rurPerHog', 'viviendasserviciospublicos.rurPerViv', 'viviendasserviciospublicos.totalHogViv', 'viviendasserviciospublicos.totalPerHog', 'viviendasserviciospublicos.totalPerViv', 'viviendasserviciospublicos.cabViv', 'viviendasserviciospublicos.cabHog', 'viviendasserviciospublicos.rurViv', 'viviendasserviciospublicos.rurHog', 'viviendasserviciospublicos.totalViv', 'viviendasserviciospublicos.totalHog')
            ->where('viviendasserviciospublicos.municipio_id', '=', $idMunicipio)
            ->orderBy('anioVSP')
            ->get();

		$html = "";
		$html .="<table class='table table-striped table-bordered table-hover'>
				<thead>
				<tr>
				<th>Año</th>
				<th>Total de viviendas</th>
				<th>Total de hogares</th>
				<th>Total de hogares por vivienda</th>
				<th>Funciones</th>
				</tr>
				</thead>
				<tbody>";

		foreach ($resultados as $resultado) {
			$id = $resultado->id;
			$anio = $resultado->anioVSP;
			$totalViv = $resultado->totalViv;
			$totalHog = $resultado->totalHog;
			$totalHogViv = $resultado->totalHogViv;
			
			$html .="<tr>
					<td>$anio</td>
					<td>$totalViv</td>
					<td>$totalHog</td>
					<td>$totalHogViv</td>
					<td><a id='$id' href='#' class='btn btn-success' data-toggle='modal' data-target='#modalMostrarActualizar'>Editar</a></td>
					</tr>";
		};

		$html .="</tbody>
				</table>";

		// <a id='$id' href='#' class='btn btn-danger'>Borrar</a>

		return Response::json(array('html' => $html,));

	}

}
