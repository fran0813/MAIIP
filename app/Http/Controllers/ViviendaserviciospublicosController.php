<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \Response;
use App\Viviendaserviciopublico;
use App\Coberturaalcantarillado;
use App\Coberturaaseo;
use App\Coberturatelefono;
use App\Coberturagas;

class ViviendaserviciospublicosController extends Controller
{
	public function actualizarViviendaserviciospublicos(Request $request)
	{
		$idVSP = $_POST['idVSP'];
		$cabViv = $_POST['cabViv'];
		$cabHog = $_POST['cabHog'];
		$cabHogViv = $_POST['cabHogViv'];
		$cabPerHog = $_POST['cabPerHog'];
		$cabPerViv = $_POST['cabPerViv'];
		$rurViv = $_POST['rurViv'];
		$rurHog = $_POST['rurHog'];
		$rurHogViv = $_POST['rurHogViv'];
		$rurPerHog = $_POST['rurPerHog'];
		$rurPerViv = $_POST['rurPerViv'];
		$totalViv = $_POST['totalViv'];
		$totalHog = $_POST['totalHog'];
		$totalHogViv = $_POST['totalHogViv'];
		$totalPerHog = $_POST['totalPerHog'];
		$totalPerViv = $_POST['totalPerViv'];
		$cabCA = $_POST['cabCA'];
		$centPobCA = $_POST['centPobCA'];
		$rurDispCA = $_POST['rurDispCA'];
		$cabCAs = $_POST['cabCAs'];
		$centPobCAs = $_POST['centPobCAs'];
		$rurDispCAs = $_POST['rurDispCAs'];
		$cabCG = $_POST['cabCG'];
		$centPobCG = $_POST['centPobCG'];
		$rurDispCG = $_POST['rurDispCG'];
		$cabCT = $_POST['cabCT'];
		$centPobCT = $_POST['centPobCT'];
		$rurDispCT = $_POST['rurDispCT'];

		$vivienda_servicio_publico_update = Viviendaserviciopublico::find($idVSP);
        $vivienda_servicio_publico_update->cabViv = $cabViv;
        $vivienda_servicio_publico_update->cabHog = $cabHog;
        $vivienda_servicio_publico_update->cabHogViv = $cabHogViv;
        $vivienda_servicio_publico_update->cabPerHog = $cabPerHog;
        $vivienda_servicio_publico_update->cabPerViv = $cabPerViv;
        $vivienda_servicio_publico_update->rurViv = $rurViv;
        $vivienda_servicio_publico_update->rurHog = $rurHog;
        $vivienda_servicio_publico_update->rurHogViv = $rurHogViv;
        $vivienda_servicio_publico_update->rurPerHog = $rurPerHog;
        $vivienda_servicio_publico_update->rurPerViv = $rurPerViv;
        $vivienda_servicio_publico_update->totalViv = $totalViv;
        $vivienda_servicio_publico_update->totalHog = $totalHog;
        $vivienda_servicio_publico_update->totalHogViv = $totalHogViv;
        $vivienda_servicio_publico_update->totalPerHog = $totalPerHog;
        $vivienda_servicio_publico_update->totalPerViv = $totalPerViv;
        $vivienda_servicio_publico_update->save();

		$cobertura_alcantarillado_update = Coberturaalcantarillado::find($idVSP);
        $cobertura_alcantarillado_update->cabCA = $cabCA;
        $cobertura_alcantarillado_update->centPobCA = $centPobCA;
        $cobertura_alcantarillado_update->rurDispCA = $rurDispCA;
        $cobertura_alcantarillado_update->save();

		$cobertura_aseo_update = Coberturaaseo::find($idVSP);
        $cobertura_aseo_update->cabCAs = $cabCAs;
        $cobertura_aseo_update->centPobCAs = $centPobCAs;
        $cobertura_aseo_update->rurDispCAs = $rurDispCAs;
        $cobertura_aseo_update->save();

		$cobertura_gas_update = Coberturagas::find($idVSP);
        $cobertura_gas_update->cabCG = $cabCG;
        $cobertura_gas_update->centPobCG = $centPobCG;
        $cobertura_gas_update->rurDispCG = $rurDispCG;
        $cobertura_gas_update->save();

		$cobertura_telefono_update = Coberturatelefono::find($idVSP);
        $cobertura_telefono_update->cabCT = $cabCT;
        $cobertura_telefono_update->centPobCT = $centPobCT;
        $cobertura_telefono_update->rurDispCT = $rurDispCT;
        $cobertura_telefono_update->save();

		$html = "Se actualizaron los datos correctamente";

		return Response::json(array('html' => $html));
	}

	public function borrarViviendaserviciospublicos(Request $request)
	{
		$idVSP = $_GET['idVSP'];

		$cobertura_alcantarillado_delete = Coberturaalcantarillado::find($idVSP);
        $cobertura_alcantarillado_delete->delete();

		$cobertura_aseo_delete = Coberturaaseo::find($idVSP);
        $cobertura_aseo_delete->delete();

		$cobertura_gas_delete = Coberturagas::find($idVSP);
        $cobertura_gas_delete->delete();

		$cobertura_telefono_delete = Coberturatelefono::find($idVSP);
        $cobertura_telefono_delete->delete();

		$vivienda_servicio_publico_delete = Viviendaserviciopublico::find($idVSP);
        $vivienda_servicio_publico_delete->delete();

		$html = "Se eliminaron los datos correctamente";

		return Response::json(array('html' => $html));
	}

	public function crearViviendaserviciospublicos(Request $request)
	{
		$anioVSP = $_POST['anioVSP'];
		$comprobar = $_POST['comprobar'];
		$cabViv = $_POST['cabViv'];
		$cabHog = $_POST['cabHog'];
		$cabHogViv = $_POST['cabHogViv'];
		$cabPerHog = $_POST['cabPerHog'];
		$cabPerViv = $_POST['cabPerViv'];
		$rurViv = $_POST['rurViv'];
		$rurHog = $_POST['rurHog'];
		$rurHogViv = $_POST['rurHogViv'];
		$rurPerHog = $_POST['rurPerHog'];
		$rurPerViv = $_POST['rurPerViv'];
		$totalViv = $_POST['totalViv'];
		$totalHog = $_POST['totalHog'];
		$totalHogViv = $_POST['totalHogViv'];
		$totalPerHog = $_POST['totalPerHog'];
		$totalPerViv = $_POST['totalPerViv'];
		$cabCA = $_POST['cabCA'];
		$centPobCA = $_POST['centPobCA'];
		$rurDispCA = $_POST['rurDispCA'];
		$cabCAs = $_POST['cabCAs'];
		$centPobCAs = $_POST['centPobCAs'];
		$rurDispCAs = $_POST['rurDispCAs'];
		$cabCG = $_POST['cabCG'];
		$centPobCG = $_POST['centPobCG'];
		$rurDispCG = $_POST['rurDispCG'];
		$cabCT = $_POST['cabCT'];
		$centPobCT = $_POST['centPobCT'];
		$rurDispCT = $_POST['rurDispCT'];
		$municipio_id = $_POST['municipio_id'];
		$ban = False;

		$resultados = Viviendaserviciopublico::where(DB::raw('YEAR(anioVSP)'), $comprobar)
						->get();
		foreach ($resultados as $resultado) {
			$ban = True;
		}

		if ($ban == False) {

			$vivienda_servicio_publico_create = new Viviendaserviciopublico;
		    $vivienda_servicio_publico_create->anioVSP = $anioVSP;
		    $vivienda_servicio_publico_create->cabViv = $cabViv;
	        $vivienda_servicio_publico_create->cabHog = $cabHog;
	        $vivienda_servicio_publico_create->cabHogViv = $cabHogViv;
	        $vivienda_servicio_publico_create->cabPerHog = $cabPerHog;
	        $vivienda_servicio_publico_create->cabPerViv = $cabPerViv;
	        $vivienda_servicio_publico_create->rurViv = $rurViv;
	        $vivienda_servicio_publico_create->rurHog = $rurHog;
	        $vivienda_servicio_publico_create->rurHogViv = $rurHogViv;
	        $vivienda_servicio_publico_create->rurPerHog = $rurPerHog;
	        $vivienda_servicio_publico_create->rurPerViv = $rurPerViv;
	        $vivienda_servicio_publico_create->totalViv = $totalViv;
	        $vivienda_servicio_publico_create->totalHog = $totalHog;
	        $vivienda_servicio_publico_create->totalHogViv = $totalHogViv;
	        $vivienda_servicio_publico_create->totalPerHog = $totalPerHog;
	        $vivienda_servicio_publico_create->totalPerViv = $totalPerViv;
	        $vivienda_servicio_publico_create->municipio_id = $municipio_id;
		    $vivienda_servicio_publico_create->save();

			$resultados = Viviendaserviciopublico::orderBy('id', 'desc')
						->limit(1)
						->get();
			foreach ($resultados as $resultado) {
				$viviendaserviciopublico_id = $resultado->id;
			}

			$cobertura_alcantarillado_create = new Coberturaalcantarillado;
		    $cobertura_alcantarillado_create->cabCA = $cabCA;
	        $cobertura_alcantarillado_create->centPobCA = $centPobCA;
	        $cobertura_alcantarillado_create->rurDispCA = $rurDispCA;
	        $cobertura_alcantarillado_create->viviendaserviciopublico_id = $viviendaserviciopublico_id;
		    $cobertura_alcantarillado_create->save();

			$cobertura_aseo_create = new Coberturaaseo;
		    $cobertura_aseo_create->cabCAs = $cabCAs;
	        $cobertura_aseo_create->centPobCAs = $centPobCAs;
	        $cobertura_aseo_create->rurDispCAs = $rurDispCAs;
	        $cobertura_aseo_create->viviendaserviciopublico_id = $viviendaserviciopublico_id;
		    $cobertura_aseo_create->save();

			$cobertura_gas_create = new Coberturagas;
	        $cobertura_gas_create->cabCG = $cabCG;
	        $cobertura_gas_create->centPobCG = $centPobCG;
	        $cobertura_gas_create->rurDispCG = $rurDispCG;
	        $cobertura_gas_create->viviendaserviciopublico_id = $viviendaserviciopublico_id;
	        $cobertura_gas_create->save();

			$cobertura_telefono_create = new Coberturatelefono;
	       	$cobertura_telefono_create->cabCT = $cabCT;
	        $cobertura_telefono_create->centPobCT = $centPobCT;
	        $cobertura_telefono_create->rurDispCT = $rurDispCT;
	        $cobertura_telefono_create->viviendaserviciopublico_id = $viviendaserviciopublico_id;
	        $cobertura_telefono_create->save();

			$html = "Se registrarón los datos correctamente";
		} else {
			$html = "Ya se encuentra registrado ese año";
		}

		return Response::json(array('html' => $html));
	}

	public function grafica1Viviendaserviciospublicos(Request $request)
	{
		$idMunicipio = $_GET['idMunicipio'];
		$anioVSP = $_GET['anioVSP'];
		$html = "";

		$html = "<script type='text/javascript'>";

        $html .= "// Load the Visualization API and the corechart package.
				google.charts.load('current', {'packages':['corechart']});

				// Set a callback to run when the Google Visualization API is loaded.
				google.charts.setOnLoadCallback(drawChart);";

		$html .= "// Callback that creates and populates a data table,
				// instantiates the pie chart, passes in the data and
				// draws it.
				function drawChart() {";

		$html .= "var data = google.visualization.arrayToDataTable([
				['Año', 'Hogares por vivienda', 'Personas por hogar', 'Personas por vivienda'],";

		$resultados = Viviendaserviciopublico::select(DB::raw('YEAR(anioVSP) as YEARanioVSP'),
								'viviendasserviciospublicos.cabHogViv',
								'viviendasserviciospublicos.cabPerHog',
								'viviendasserviciospublicos.cabPerViv',
								'viviendasserviciospublicos.rurHogViv',
								'viviendasserviciospublicos.rurPerHog',
								'viviendasserviciospublicos.rurPerViv',
								'viviendasserviciospublicos.totalHogViv',
								'viviendasserviciospublicos.totalPerHog',
								'viviendasserviciospublicos.totalPerViv')
						->where('viviendasserviciospublicos.municipio_id', $idMunicipio)
						->where(DB::raw('YEAR(anioVSP)'), $anioVSP)
						->get();
		foreach ($resultados as $resultado) {
			$anio = $resultado->YEARanioVSP;
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
		}

		$html .= "]);";

		$html .= "// Set chart options
		        	var options = {	title: 'Viviendas',
		        					bar: {groupWidth: '20%'},
			        				legend: { position: 'rigth' },
			        				colors: ['#e9473f', '#397ACB', '#F8EF01']};";	

		$html .= "// Instantiate and draw our chart, passing in some options.
		        var chart = new google.visualization.ColumnChart(document.getElementById('columnchart_values'));
		        chart.draw(data, options);";

		$html .= "}";

		$html .= "</script>";

		$html .= "<div id='columnchart_values' style='width: 900px; height: 300px;'></div>
				<p> Cabecera / Rural / Total </p>";

		return Response::json(array('html' => $html));
	}

	public function grafica2Viviendaserviciospublicos(Request $request)
	{
		$idMunicipio = $_GET['idMunicipio'];
		$anioVSP = $_GET['anioVSP'];
		$html = "";

		$html = "<script type='text/javascript'>";

        $html .= "// Load the Visualization API and the corechart package.
				google.charts.load('current', {'packages':['corechart']});

				// Set a callback to run when the Google Visualization API is loaded.
				google.charts.setOnLoadCallback(drawChart);";

		$html .= "// Callback that creates and populates a data table,
				// instantiates the pie chart, passes in the data and
				// draws it.
				function drawChart() {";

		$html .= "var data = google.visualization.arrayToDataTable([
				['Año', 'Cabecera', 'Centros poblados', 'Rural disperso'],";

		$resultados = Viviendaserviciopublico::join('coberturaalcantarillado', 'viviendasserviciospublicos.id', 'coberturaalcantarillado.viviendaserviciopublico_id')
						->join('coberturaaseo', 'viviendasserviciospublicos.id', 'coberturaaseo.viviendaserviciopublico_id')
						->join('coberturagas', 'viviendasserviciospublicos.id', 'coberturagas.viviendaserviciopublico_id')
						->join('coberturatelefono', 'viviendasserviciospublicos.id', 'coberturatelefono.viviendaserviciopublico_id')
						->select(DB::raw('YEAR(anioVSP) as YEARanioVSP'),
								'viviendasserviciospublicos.cabHogViv',
								'viviendasserviciospublicos.cabPerHog',
								'viviendasserviciospublicos.cabPerViv',
								'viviendasserviciospublicos.rurHogViv',
								'viviendasserviciospublicos.rurPerHog',
								'viviendasserviciospublicos.rurPerViv',
								'viviendasserviciospublicos.totalHogViv',
								'viviendasserviciospublicos.totalPerHog',
								'viviendasserviciospublicos.totalPerViv',
								'coberturaalcantarillado.*',
								'coberturaaseo.*',
								'coberturagas.*',
								'coberturatelefono.*')
						->where('viviendasserviciospublicos.municipio_id', $idMunicipio)
						->where(DB::raw('YEAR(anioVSP)'), $anioVSP)
						->get();
		foreach ($resultados as $resultado) {
			$anio = $resultado->YEARanioVSP;
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
		}

		$html .= "]);";

		$html .= "// Set chart options
		        	var options = {	title: 'Coberturas',
		        					bar: {groupWidth: '20%'},
			        				legend: { position: 'rigth' },
			        				colors: ['#e9473f', '#397ACB', '#F8EF01']};";	

		$html .= "// Instantiate and draw our chart, passing in some options.
		        var chart = new google.visualization.ColumnChart(document.getElementById('columnchart_values2'));
		        chart.draw(data, options);";

		$html .= "}";

		$html .= "</script>";

		$html .= "<div id='columnchart_values2' style='width: 900px; height: 300px;'></div>
				<p> Alcantarillado / Aseo / Gas / Telefono </p>";

		return Response::json(array('html' => $html));
	}

	public function mostrarActualizarViviendaserviciospublicos(Request $request)
	{
		$idVSP = $_POST['idVSP'];
		$html = "";

		$resultados = Viviendaserviciopublico::join('coberturaalcantarillado', 'viviendasserviciospublicos.id', 'coberturaalcantarillado.viviendaserviciopublico_id')
			->join('coberturaaseo', 'viviendasserviciospublicos.id', 'coberturaaseo.viviendaserviciopublico_id')
			->join('coberturagas', 'viviendasserviciospublicos.id', 'coberturagas.viviendaserviciopublico_id')
			->join('coberturatelefono', 'viviendasserviciospublicos.id', 'coberturatelefono.viviendaserviciopublico_id')
			->select('viviendasserviciospublicos.id',
					DB::raw('DATE(anioVSP) as DATEanioVSP'),
					'viviendasserviciospublicos.cabViv',
					'viviendasserviciospublicos.cabHog',
					'viviendasserviciospublicos.cabHogViv',
					'viviendasserviciospublicos.cabPerHog',
					'viviendasserviciospublicos.cabPerViv',
					'viviendasserviciospublicos.rurViv',
					'viviendasserviciospublicos.rurHog',
					'viviendasserviciospublicos.rurHogViv',
					'viviendasserviciospublicos.rurPerHog',
					'viviendasserviciospublicos.rurPerViv',
					'viviendasserviciospublicos.totalViv',
					'viviendasserviciospublicos.totalHog',
					'viviendasserviciospublicos.totalHogViv',
					'viviendasserviciospublicos.totalPerHog',
					'viviendasserviciospublicos.totalPerViv',
					'coberturaalcantarillado.*',
					'coberturaaseo.*',
					'coberturagas.*',
					'coberturatelefono.*')
            ->where('viviendasserviciospublicos.id', $idVSP)
            ->get();
		foreach ($resultados as $resultado) {
			$id = $resultado->id;
			$anio = $resultado->DATEanioVSP;
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
		}

		return Response::json(array('id' => $id,
									'anio' => $anio,
									'cabViv' => $cabViv,
									'cabHog' => $cabHog,
									'cabHogViv' => $cabHogViv,
									'cabPerHog' => $cabPerHog,
									'cabPerViv' => $cabPerViv,
									'rurViv' => $rurViv,
									'rurHog' => $rurHog,
									'rurHogViv' => $rurHogViv,
									'rurPerHog' => $rurPerHog,
									'rurPerViv' => $rurPerViv,
									'totalViv' => $totalViv,
									'totalHog' => $totalHog,
									'totalHogViv' => $totalHogViv,
									'totalPerHog' => $totalPerHog,
									'totalPerViv' => $totalPerViv,
									'cabCA' => $cabCA,
									'centPobCA' => $centPobCA,
									'rurDispCA' => $rurDispCA,
									'cabCAs' => $cabCAs,
									'centPobCAs' => $centPobCAs,
									'rurDispCAs' => $rurDispCAs,
									'cabCG' => $cabCG,
									'centPobCG' => $centPobCG,
									'rurDispCG' => $rurDispCG,
									'cabCT' => $cabCT,
									'centPobCT' => $centPobCT,
									'rurDispCT' => $rurDispCT,
								));
	}

	public function mostrarViviendaserviciospublicos(Request $request)
	{
		$idMunicipio = $_GET['idMunicipio'];
		$anioVSP = $_GET['anioVSP'];
		$html = "";

		$html .= "<div class='col-sm-12 col-md-12 col-lg-12'>

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

		$resultados = Viviendaserviciopublico::join('coberturaalcantarillado', 'viviendasserviciospublicos.id', 'coberturaalcantarillado.viviendaserviciopublico_id')
						->join('coberturaaseo', 'viviendasserviciospublicos.id', 'coberturaaseo.viviendaserviciopublico_id')
						->join('coberturagas', 'viviendasserviciospublicos.id', 'coberturagas.viviendaserviciopublico_id')
						->join('coberturatelefono', 'viviendasserviciospublicos.id', 'coberturatelefono.viviendaserviciopublico_id')
						->select('viviendasserviciospublicos.*',
								'coberturaalcantarillado.*',
								'coberturaaseo.*',
								'coberturagas.*',
								'coberturatelefono.*')
						->where('viviendasserviciospublicos.municipio_id', $idMunicipio)
						->where(DB::raw('YEAR(anioVSP)'), $anioVSP)
						->get();
		foreach ($resultados as $resultado) {
			$cabViv = $resultado->cabViv;
			$rurViv = $resultado->rurViv;
			$totalViv = $resultado->totalViv;

			$html .= "<td>$cabViv</td>
					<td>$rurViv</td>
					<td>$totalViv</td>";

		};

		$html .= "</tr>
				<tr class='border-dotted'>
				<td>Hogares</td>";

		foreach ($resultados as $resultado) {
			$cabHog = $resultado->cabHog;
			$rurHog = $resultado->rurHog;
			$totalHog = $resultado->totalHog;

			$html .= "<td>$cabHog</td>
					<td>$rurHog</td>
					<td>$totalHog</td>";

		};

		$html .= "</tr>
				<tr class='border-dotted'>
				<td>Hogares por vivienda</td>";

		foreach ($resultados as $resultado) {
			$cabHogViv = $resultado->cabHogViv;
			$rurHogViv = $resultado->rurHogViv;
			$totalHogViv = $resultado->totalHogViv;

			$html .= "<td>$cabHogViv</td>
					<td>$rurHogViv</td>
					<td>$totalHogViv</td>";

		};

		$html .= "</tr>
				<tr class='border-dotted'>
				<td>Hogares</td>";

		foreach ($resultados as $resultado) {
			$cabPerHog = $resultado->cabPerHog;
			$rurPerHog = $resultado->rurPerHog;
			$totalPerHog = $resultado->totalPerHog;

			$html .= "<td>$cabPerHog</td>
					<td>$rurPerHog</td>
					<td>$totalPerHog</td>";

		};

		$html .= "</tr>
				<tr>
				<td>Personas por vivienda</td>";

		foreach ($resultados as $resultado) {
			$cabPerViv = $resultado->cabPerViv;
			$rurPerViv = $resultado->rurPerViv;
			$totalPerViv = $resultado->totalPerViv;

			$html .= "<td>$cabPerViv</td>
					<td>$rurPerViv</td>
					<td>$totalPerViv</td>";

		};

		$html .= "</tr>
				</tbody>
				</table>

				</div>";

		$html .= "<div class='col-sm-6 col-md-6 col-lg-6'>

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

		$html .= "</tr>
				<tr class='border-dotted'>
				<td>Centro poblados</td>";

		foreach ($resultados as $resultado) {
			$centPobCA = $resultado->centPobCA;

			$html .= "<td>$centPobCA</td>";
		};

		$html .= "</tr>
				<tr>
				<td>Rural disperso</td>";

		foreach ($resultados as $resultado) {
			$rurDispCA = $resultado->rurDispCA;

			$html .= "<td>$rurDispCA</td>";

		};

		$html .= "</tr>
				</tbody>
				</table>

				</div>";

		$html .= "<div class='col-sm-6 col-md-6 col-lg-6'>

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

		$html .= "</tr>
				<tr class='border-dotted'>
				<td>Centro poblados</td>";

		foreach ($resultados as $resultado) {
			$centPobCAs = $resultado->centPobCAs;

			$html .= "<td>$centPobCAs</td>";
		}

		$html .= "</tr>
				<tr>
				<td>Rural disperso</td>";

		foreach ($resultados as $resultado) {
			$rurDispCAs = $resultado->rurDispCAs;

			$html .= "<td>$rurDispCAs</td>";
		}

		$html .= "</tr>
				</tbody>
				</table>

				</div>";

		$html .= "<div class='col-sm-6 col-md-6 col-lg-6'>

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

		$html .= "</tr>
				<tr class='border-dotted'>
				<td>Centro poblados</td>";

		foreach ($resultados as $resultado) {
			$centPobCG = $resultado->centPobCG;

			$html .= "<td>$centPobCG</td>";
		}

		$html .= "</tr>
				<tr>
				<td>Rural disperso</td>";

		foreach ($resultados as $resultado) {
			$rurDispCG = $resultado->rurDispCG;

			$html .= "<td>$rurDispCG</td>";
		}

		$html .= "</tr>
				</tbody>
				</table>

				</div>";

		$html .= "<div class='col-sm-6 col-md-6 col-lg-6'>

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

		$html .= "</tr>
				<tr class='border-dotted'>
				<td>Centro poblados</td>";

		foreach ($resultados as $resultado) {
			$centPobCT = $resultado->centPobCT;

			$html .= "<td>$centPobCT</td>";
		}

		$html .= "</tr>
				<tr>
				<td>Rural disperso</td>";

		foreach ($resultados as $resultado) {
			$rurDispCT = $resultado->rurDispCT;

			$html .= "<td>$rurDispCT</td>";
		}

		$html .= "</tr>
				</tbody>
				</table>

				</div>";

		return Response::json(array('html' => $html));
	}

	public function mostrarTablaViviendaserviciospublicos(Request $request)
	{
		$idMunicipio = $_GET['idMunicipio'];

		$html = "";
		$html .= "<table class='table table-striped table-bordered table-hover'>
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

		$resultados = Viviendaserviciopublico::select('viviendasserviciospublicos.id',
								DB::raw('YEAR(anioVSP) as YEARanioVSP'),
								'viviendasserviciospublicos.cabHogViv',
								'viviendasserviciospublicos.cabPerHog',
								'viviendasserviciospublicos.cabPerViv',
								'viviendasserviciospublicos.rurHogViv',
								'viviendasserviciospublicos.rurPerHog',
								'viviendasserviciospublicos.rurPerViv',
								'viviendasserviciospublicos.totalHogViv',
								'viviendasserviciospublicos.totalPerHog',
								'viviendasserviciospublicos.totalPerViv',
								'viviendasserviciospublicos.cabViv',
								'viviendasserviciospublicos.cabHog',
								'viviendasserviciospublicos.rurViv',
								'viviendasserviciospublicos.rurHog',
								'viviendasserviciospublicos.totalViv',
								'viviendasserviciospublicos.totalHog')
						->where('viviendasserviciospublicos.municipio_id', $idMunicipio)
						->orderBy('anioVSP')
						->get();
		foreach ($resultados as $resultado) {
			$id = $resultado->id;
			$anio = $resultado->YEARanioVSP;
			$totalViv = $resultado->totalViv;
			$totalHog = $resultado->totalHog;
			$totalHogViv = $resultado->totalHogViv;

			$html .= "<tr>
					<td>$anio</td>
					<td>$totalViv</td>
					<td>$totalHog</td>
					<td>$totalHogViv</td>
					<td><a id='$id' href='#' class='btn btn-success' data-toggle='modal' data-target='#modalMostrarActualizar' value='editar'>Editar</a></td>
					</tr>";
		}

		$html .= "</tbody>
				</table>";

		// <a id='$id' href='#' class='btn btn-danger'>Borrar</a>

		return Response::json(array('html' => $html));
	}

	public function subiendoArchivoViviendaServiciosPublicos()
    {
        return view('admin.viviendasserviciospublicos.subiendoArchivoViviendaServiciosPublicos');
    }

    public function guardarArchivoViviendaServiciosPublicos(Request $request)
    {
      $file = $request->file('file');
      $name = $file->getClientOriginalName();
      Storage::disk('public')->put($name,  File::get($file));

      $request->session()->put('nameArchivoViviendaServiciosPublicos', $name);

      return redirect('/admin/subiendoArchivoViviendaServiciosPublicos');
    }

    public function subirRespuestaViviendaServiciosPublicos(Request $request)
    {     
      try { 

      $nameArchivo = null;
      $html = "";

      if ($request->session()->get("nameArchivoViviendaServiciosPublicos")) {
          $nameArchivo = $request->session()->get("nameArchivoViviendaServiciosPublicos");
      }   

      Excel::load('Storage/app/public/'.$nameArchivo, function($reader)
      {
        $booleanMunicipio = False;
        $booleanAño = False;
        $data1 = array();
        $data2 = array();
        $data3 = array();
        $data4 = array();
        $data5 = array();
        $time = date('Y/m/d H:i');

        $results = $reader->get();

        foreach ($results as $result) {

	        $resultados = Municipio::where('nombre', $result->municipio)
	          ->limit(1)
	          ->get();

	        foreach ($resultados as $resultado) {
	          $id = $resultado->id;
	          $booleanMunicipio = True;
	        }

          if ($booleanMunicipio == True) {

          	$resultados = Viviendaserviciopublico::where(DB::raw('YEAR(anioVSP)'), $result->anio)
          				->limit(1)
						->get();
		    foreach ($resultados as $resultado) {
		      $booleanAño = True;
		    }

		    if ($booleanAño = False) {
		    	
	            $data1[] = array('anioVSP' => $result->anio.'/01/01 00:00:00',
	                           'cabViv' =>  $result->cabecera_vivienda,
	                           'cabHog' =>  $result->cabecera_hogar,
	                           'cabHogViv' =>  $result->cabecera_hogares_por_vivienda,
	                           'cabPerHog' =>  $result->cabecera_personas_por_hogar,
	                           'cabPerViv' =>  $result->cabecera_personas_por_vivienda,
	                           'rurViv' =>  $result->rural_vivienda,
	                           'rurHog' =>  $result->rural_hogar,
	                           'rurHogViv' =>  $result->rural_hogares_por_vivienda,
	                           'rurPerHog' =>  $result->rural_personas_por_hogar,
	                           'rurPerViv' =>  $result->rural_personas_por_vivienda,
	                           'totalViv' =>  $result->total_vivienda,
	                           'totalHog' =>  $result->total_hogar,
	                           'totalHogViv' =>  $result->total_hogares_por_vivienda,
	                           'totalPerHog' =>  $result->total_personas_por_hogar,
	                           'totalPerViv' =>  $result->total_personas_por_vivienda,
	                           'municipio_id' => $id,
	                           'created_at' => $time,
	                           'updated_at' => $time);

	           	Viviendaserviciopublico::insert($data1);

	           	$resultados = Viviendaserviciopublico::orderBy('id', 'desc')
							->limit(1)
							->get();
				foreach ($resultados as $resultado) {
					$viviendaserviciopublico_id = $resultado->id;
				}

			    $data2[] = array('cabCA' => $result->cabecera_cobertura_alcantarillado,
	                           'centPobCA' => $result->centros_poblados_cobertura_alcantarillado,
	                           'rurDispCA' => $result->rural_disperso_cobertura_alcantarillado,
	                           'viviendaserviciopublico_id' => $viviendaserviciopublico_id,
	                           'created_at' => $time,
	                           'updated_at' => $time);

			    $data3[] = array('cabCAs' => $result->cabecera_cobertura_aseo,
	                           'centPobCAs' => $result->centros_poblados_cobertura_aseo,
	                           'rurDispCAs' => $result->rural_disperso_cobertura_aseo,
	                           'viviendaserviciopublico_id' => $viviendaserviciopublico_id,
	                           'created_at' => $time,
	                           'updated_at' => $time);

			    $data4[] = array('cabCG' => $result->cabecera_cobertura_gas,
	                           'centPobCG' => $result->centros_poblados_cobertura_gas,
	                           'rurDispCG' => $result->rural_disperso_cobertura_gas,
	                           'viviendaserviciopublico_id' => $viviendaserviciopublico_id,
	                           'created_at' => $time,
	                           'updated_at' => $time);

			    $data5[] = array('cabCT' => $result->cabecera_cobertura_telefono,
	                           'centPobCT' => $result->centros_poblados_cobertura_telefono,
	                           'rurDispCT' => $result->rural_disperso_cobertura_telefono,
	                           'viviendaserviciopublico_id' => $viviendaserviciopublico_id,
	                           'created_at' => $time,
	                           'updated_at' => $time);

			    Coberturaalcantarillado::insert($data2);
			    Coberturaaseo::insert($data3);
			    Coberturagas::insert($data4);
			    Coberturatelefono::insert($data5);

			    $data1 = array();
			    $data2 = array();
			    $data3 = array();
			    $data4 = array();
			    $data5 = array();

	            // return redirect('/admin/responder');
	            // $html .= "<h1 class='text-center' style='margin-top: 0px;''>Se ha subido los datos correctamente</h1>";
        	} else {
        		// $html .= "<h1 class='text-center' style='margin-top: 0px;''>Año no disponible.$result->anio</h1>";
        	}
            
          } else {
            // $html = ."<h1 class='text-center' style='margin-top: 0px;''>No se encontro el departamento.$result->departamento</h1>";
          }

		    
        }
      });

      } catch (Exception $e) {

        // $html .= "<h1 class='text-center' style='margin-top: 0px;''>currio un error.$e</h1>";

      }

      // return Response::json(array('html' => $html, 'boolean' => $booleanMunicipio));
    }

    public function descargarViviendaServiciosPublicos(Request $request)
    {
      $data = array();

      Excel::create('ViviendaServiciosPublicos', function($excel) {
 
          $excel->sheet('Importar', function($sheet) {

              $data[] = array('año' => "",
              				'municipio' => "",
              				 'cabecera_vivienda' => "",
	                           'cabecera_hogar' => "",
	                           'cabecera_hogares_por_vivienda' => "",
	                           'cabecera_personas_por_hogar' => "",
	                           'cabecera_personas_por_vivienda' => "",
	                           'rural_vivienda' => "",
	                           'rural_hogar' => "",
	                           'rural_hogares_por_vivienda' => "",
	                           'rural_personas_por_hogar' => "",
	                           'rural_personas_por_vivienda' => "",
	                           'total_vivienda' => "",
	                           'total_hogar' => "",
	                           'total_hogares_por_vivienda' => "",
	                           'total_personas_por_hogar' => "",
	                           'total_personas_por_vivienda' => "",
	                       'cabecera_cobertura_alcantarillado' => "",
	                           'centros_poblados_cobertura_alcantarillado' => "",
	                           'rural_disperso_cobertura_alcantarillado' => "",
	                           'cabecera_cobertura_aseo' => "",
	                           'centros_poblados_cobertura_aseo' => "",
	                           'rural_disperso_cobertura_aseo' => "",
	                       'cabecera_cobertura_gas' => "",
	                           'centros_poblados_cobertura_gas' => "",
	                           'rural_disperso_cobertura_gas' => "",
	                           'cabecera_cobertura_telefono' => "",
	                           'centros_poblados_cobertura_telefono' => "",
	                           'rural_disperso_cobertura_telefono' => "");

              $sheet->fromArray($data);

          });
      })->export('xls');
    }

}

