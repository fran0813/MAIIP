<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \Response;
use App\Demografia;

class DemografiaController extends Controller
{
	public function actualizarDemografia(Request $request)
	{
		$idD = $_POST['idD'];
		$pobEdadTrabajar = $_POST['pobEdadTrabajar'];
		$pobPotActiva = $_POST['pobPotActiva'];
		$pobPotInactiva = $_POST['pobPotInactiva'];
		$numPerMen = $_POST['numPerMen'];
		$numPerMay = $_POST['numPerMay'];
		$numPerInd = $_POST['numPerInd'];
		$numPerDep = $_POST['numPerDep'];
		$pobHom = $_POST['pobHom'];
		$pobMuj = $_POST['pobMuj'];
		$pobZonCab = $_POST['pobZonCab'];
		$pobZonRes = $_POST['pobZonRes'];
		$indRuralidad = $_POST['indRuralidad'];
		$pobTotal = $_POST['pobTotal'];
		$crecPob = $_POST['crecPob'];

		$demografia_update = Demografia::find($idD);
        $demografia_update->pobEdadTrabajar = $pobEdadTrabajar;
        $demografia_update->pobPotActiva = $pobPotActiva;
        $demografia_update->pobPotInactiva = $pobPotInactiva;
        $demografia_update->numPerMen = $numPerMen;
        $demografia_update->numPerMay = $numPerMay;
        $demografia_update->numPerInd = $numPerInd;
        $demografia_update->numPerDep = $numPerDep;
        $demografia_update->pobHom = $pobHom;
        $demografia_update->pobMuj = $pobMuj;
        $demografia_update->pobZonCab = $pobZonCab;
        $demografia_update->pobZonRes = $pobZonRes;
        $demografia_update->indRuralidad = $indRuralidad;
        $demografia_update->pobTotal = $pobTotal;
        $demografia_update->crecPob = $crecPob;
        $demografia_update->save();

		$html = "Se actualizaron los datos correctamente";

		return Response::json(array('html' => $html));
	}

	public function borrarDemografia(Request $request)
	{
		$idD = $_GET['idD'];

		$demografia_delete = Demografia::find($idD);
        $demografia_delete->delete();

		$html = "Se eliminaron los datos correctamente";

		return Response::json(array('html' => $html));
	}

	public function crearDemografia(Request $request)
	{
		$anioD = $_POST['anioD'];
		$comprobar = $_POST['comprobar'];
		$pobEdadTrabajar = $_POST['pobEdadTrabajar'];
		$pobPotActiva = $_POST['pobPotActiva'];
		$pobPotInactiva = $_POST['pobPotInactiva'];
		$numPerMen = $_POST['numPerMen'];
		$numPerMay = $_POST['numPerMay'];
		$numPerInd = $_POST['numPerInd'];
		$numPerDep = $_POST['numPerDep'];
		$pobHom = $_POST['pobHom'];
		$pobMuj = $_POST['pobMuj'];
		$pobZonCab = $_POST['pobZonCab'];
		$pobZonRes = $_POST['pobZonRes'];
		$indRuralidad = $_POST['indRuralidad'];
		$pobTotal = $_POST['pobTotal'];
		$crecPob = $_POST['crecPob'];
		$municipio_id = $_POST['municipio_id'];
		$ban = False;

		$resultados = Demografia::where(DB::raw('YEAR(anioD)'), $comprobar)
						->get();
		foreach ($resultados as $resultado) {
			$ban = True;
		}

		if ($ban == False) {

			$demografia_create = new Demografia;
		    $demografia_create->anioD = $anioD;
		    $demografia_create->pobEdadTrabajar = $pobEdadTrabajar;
	        $demografia_create->pobPotActiva = $pobPotActiva;
	        $demografia_create->pobPotInactiva = $pobPotInactiva;
	        $demografia_create->numPerMen = $numPerMen;
	        $demografia_create->numPerMay = $numPerMay;
	        $demografia_create->numPerInd = $numPerInd;
	        $demografia_create->numPerDep = $numPerDep;
	        $demografia_create->pobHom = $pobHom;
	        $demografia_create->pobMuj = $pobMuj;
	        $demografia_create->pobZonCab = $pobZonCab;
	        $demografia_create->pobZonRes = $pobZonRes;
	        $demografia_create->indRuralidad = $indRuralidad;
	        $demografia_create->pobTotal = $pobTotal;
	        $demografia_create->crecPob = $crecPob;
	        $demografia_create->municipio_id = $municipio_id;
		    $demografia_create->save();

			$html = "Se registrarón los datos correctamente";
		} else {
			$html = "Ya se encuentra registrado ese año";
		}

		return Response::json(array('html' => $html));
	}

	public function grafica1Demografia(Request $request)
	{
		$idMunicipio = $_GET['idMunicipio'];
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
				['Año', 'Índice de ruralidad', 'Crecimiento poblacional'],";

		$resultados = Demografia::select(DB::raw('YEAR(anioD) as YEARanioD'),
								'demografias.indRuralidad',
								'demografias.crecPob')
						->where('demografias.municipio_id', $idMunicipio)
						->orderBy('demografias.anioD', 'asc')
						->get();
		foreach ($resultados as $resultado) {
			$anio = $resultado->YEARanioD;
			$indRuralidad = $resultado->indRuralidad;
			$crecPob = $resultado->crecPob;

			$html .= "['$anio', $indRuralidad, $crecPob],";
		}

		$html .= "]);";

		$html .= "// Set chart options
		        	var options = {	title: 'Índice de ruralidad V.S Crecimiento demografico',
		        					curveType: 'function',
			        				legend: { position: 'rigth' },
			        				colors: ['#e9473f', '#131FBD'],
			                       	vAxis: {format: 'percent'}};";	

		$html .= "// Instantiate and draw our chart, passing in some options.
		        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
		        chart.draw(data, options);";

		$html .= "}";

		$html .= "</script>";

		$html .= "<div id='curve_chart' style='width: 900px; height: 500px'></div>";

		return Response::json(array('html' => $html));
	}

	public function grafica2Demografia(Request $request)
	{
		$idMunicipio = $_GET['idMunicipio'];
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
				['Año', 'Población total'],";

		$resultados = Demografia::select(DB::raw('YEAR(anioD) as YEARanioD'), 'demografias.pobTotal')
					->where('demografias.municipio_id', $idMunicipio)
					->orderBy('demografias.anioD', 'asc')
					->get();
		foreach ($resultados as $resultado) {
			$anio = $resultado->YEARanioD;
			$pobTotal = $resultado->pobTotal;

			$html .= "['$anio', $pobTotal],";

		};

		$html .= "]);";

		$html .= "// Set chart options
		        	var options = {	title: 'Población total',
		        					bar: {groupWidth: '20%'},
			        				legend: { position: 'rigth' },
			        				colors: ['#e9473f'],
			                       	};";	

		$html .= "// Instantiate and draw our chart, passing in some options.
		        var chart = new google.visualization.ColumnChart(document.getElementById('columnchart_values'));
		        chart.draw(data, options);";

		$html .= "}";

		$html .= "</script>";

		$html .= "<div id='columnchart_values' style='width: 900px; height: 300px;'></div>";

		return Response::json(array('html' => $html));
	}

	public function mostrarActualizarDemografia()
	{
		$idD = $_POST['idD'];
		$html = "";

		$resultados = Demografia::select('demografias.id',
							DB::raw('DATE(anioD) as DATEanioD'),
							'demografias.pobEdadTrabajar',
							'demografias.pobPotActiva',
							'demografias.pobPotInactiva',
							'demografias.numPerMen',
							'demografias.numPerMay',
							'demografias.numPerInd',
							'demografias.numPerDep',
							'demografias.pobHom',
							'demografias.pobMuj',
							'demografias.pobZonCab',
							'demografias.pobZonRes',
							'demografias.indRuralidad',
							'demografias.pobTotal',
							'demografias.crecPob')
					->where('demografias.id', $idD)
					->get();

		foreach ($resultados as $resultado) {
			$id = $resultado->id;
			$anio = $resultado->DATEanioD;
			$pobEdadTrabajar = $resultado->pobEdadTrabajar;
			$pobPotActiva = $resultado->pobPotActiva;
			$pobPotInactiva = $resultado->pobPotInactiva;
			$numPerMen = $resultado->numPerMen;
			$numPerMay = $resultado->numPerMay;
			$numPerInd = $resultado->numPerInd;
			$numPerDep = $resultado->numPerDep;
			$pobHom = $resultado->pobHom;
			$pobMuj = $resultado->pobMuj;
			$pobZonCab = $resultado->pobZonCab;
			$pobZonRes = $resultado->pobZonRes;
			$indRuralidad = $resultado->indRuralidad;
			$pobTotal = $resultado->pobTotal;
			$crecPob = $resultado->crecPob;
		};

		return Response::json(array('id' => $id,
									'anio' => $anio,
									'pobEdadTrabajar' => $pobEdadTrabajar,
									'pobPotActiva' => $pobPotActiva,
									'pobPotInactiva' => $pobPotInactiva,
									'numPerMen' => $numPerMen,
									'numPerMay' => $numPerMay,
									'numPerInd' => $numPerInd,
									'numPerDep' => $numPerDep,
									'pobHom' => $pobHom,
									'pobMuj' => $pobMuj,
									'pobZonCab' => $pobZonCab,
									'pobZonRes' => $pobZonRes,
									'indRuralidad' => $indRuralidad,
									'pobTotal' => $pobTotal,
									'crecPob' => $crecPob,
								));
	}

	public function mostrarDemografia(Request $request)
	{
		$idMunicipio = $_GET['idMunicipio'];
		$html = "";

		$html .= "<table class='table table-bordered' style='overflow-x: scroll;'>
				<thead class='thead-s'>
				<tr>
				<th>Datos</th>";

		$resultados = Demografia::select(DB::raw('YEAR(anioD) as YEARanioD'),
								'demografias.pobEdadTrabajar',
								'demografias.pobPotActiva',
								'demografias.pobPotInactiva',
								'demografias.numPerMen',
								'demografias.numPerMay',
								'demografias.numPerInd',
								'demografias.numPerDep',
								'demografias.pobHom',
								'demografias.pobMuj',
								'demografias.pobZonCab',
								'demografias.pobZonRes',
								'demografias.indRuralidad',
								'demografias.pobTotal',
								'demografias.crecPob')
						->where('demografias.municipio_id', $idMunicipio)
						->orderBy('demografias.anioD', 'asc')
						->get();
		foreach ($resultados as $resultado) {
			$anio = $resultado->YEARanioD;

			$html .= "<th>$anio</th>";

		};

		$html .= "</tr>
				</thead>
				</tbody>
				<tr class='border-dotted'>
				<td>Población en edad de trabajar</td>";

		foreach ($resultados as $resultado) {
			$pobEdadTrabajar = $resultado->pobEdadTrabajar;

			$html .= "<td>$pobEdadTrabajar</td>";

		};

		$html .= "</tr>
				<tr class='border-dotted'>
				<td>Póblacion potencialmente activa</td>";

		foreach ($resultados as $resultado) {
			$pobPotActiva = $resultado->pobPotActiva;

			$html .= "<td>$pobPotActiva</td>";

		};

		$html .= "</tr>
				<tr class='border-dotted'>
				<td>Póblacion potencialmente inactiva</td>";

		foreach ($resultados as $resultado) {
			$pobPotInactiva = $resultado->pobPotInactiva;

			$html .= "<td>$pobPotInactiva</td>";

		};

		$html .= "</tr>
				<tr class='border-dotted'>
				<td>Numero de personas menores a 15 años</td>";

		foreach ($resultados as $resultado) {
			$numPerMen = $resultado->numPerMen;

			$html .= "<td>$numPerMen</td>";

		};

		$html .= "</tr>
				<tr class='border-dotted'>
				<td>Numero de personas mayores a 64 años</td>";

		foreach ($resultados as $resultado) {
			$numPerMay = $resultado->numPerMay;

			$html .= "<td>$numPerMay</td>";

		};

		$html .= "</tr>
				<tr class='border-dotted'>
				<td>Numero de personas independientes</td>";

		foreach ($resultados as $resultado) {
			$numPerInd = $resultado->numPerInd;

			$html .= "<td>$numPerInd</td>";

		};

		$html .= "</tr>
				<tr class='border-dotted'>
				<td>Numero de personas dependientes</td>";

		foreach ($resultados as $resultado) {
			$numPerDep = $resultado->numPerDep;

			$html .= "<td>$numPerDep</td>";

		};

		$html .= "</tr>
				<tr class='border-dotted'>
				<td>Población por género -Hombres";

		foreach ($resultados as $resultado) {
			$pobHom = $resultado->pobHom;

			$html .= "<td>$pobHom</td>";

		};

		$html .= "</tr>
				<tr class='border-dotted'>
				<td>Población por género -Mujeres";

		foreach ($resultados as $resultado) {
			$pobMuj = $resultado->pobMuj;

			$html .= "<td>$pobMuj</td>";

		};

		$html .= "</tr>
				<tr class='border-dotted'>
				<td>Población por zona -Cabecera";

		foreach ($resultados as $resultado) {
			$pobZonCab = $resultado->pobZonCab;

			$html .= "<td>$pobZonCab</td>";

		};

		$html .= "</tr>
				<tr class='border-dotted'>
				<td>Población por zona -Resto";

		foreach ($resultados as $resultado) {
			$pobZonRes = $resultado->pobZonRes;

			$html .= "<td>$pobZonRes</td>";

		};

		$html .= "</tr>
				<tr class='border-dotted'>
				<td>Índice de ruralidad";

		foreach ($resultados as $resultado) {
			$indRuralidad = $resultado->indRuralidad;

			$html .= "<td>$indRuralidad%</td>";

		};

		$html .= "</tr>
				<tr class='border-dotted'>
				<td>Población total";

		foreach ($resultados as $resultado) {
			$pobTotal = $resultado->pobTotal;

			$html .= "<td>$pobTotal</td>";

		};

		$html .= "</tr>
				<tr>
				<td>Crecimiento poblacionall";

		foreach ($resultados as $resultado) {
			$crecPob = $resultado->crecPob;

			if ($crecPob == "0") {
				$html .= "<td>N/A</td>";
			} else {
				$html .= "<td>$crecPob%</td>";
			}
		};

		$html .= "</tr>
				</tbody>
				</table>";

		return Response::json(array('html' => $html, ));

	}

	public function calcularCrecPob(Request $request)
	{
		$anioD = $_POST['anioD'];
		$pobEdadTrabajarActual = $_POST['pobEdadTrabajar'];
		$html = "";
		$ban = False;

		$resultados = Demografia::select('demografias.pobEdadTrabajar')
						->where('demografias.anioD', '<', $anioD)
						->orderBy('anioD', 'desc')
						->limit(1)
						->get();
		foreach ($resultados as $resultado) {
			$pobEdadTrabajarAnterior = $resultado->pobEdadTrabajar;
			$ban = True;
		};

		if ($ban == True) {
			$html = number_format((float)(log(($pobEdadTrabajarActual / $pobEdadTrabajarAnterior))*100), 2, '.', '');
		}else{
			$html = "0";
		}

		return Response::json(array('html' => $html));
	}

	public function calcularCrecPob2(Request $request)
	{
		$anioD = $_POST['anioD'];
		$pobEdadTrabajarActual = $_POST['pobEdadTrabajar'];
		$html = "";
		$ban = False;

		$resultados = DEmografia::select('demografias.pobEdadTrabajar')
						->where('demografias.anioD', '<', $anioD)
						->orderBy('anioD', 'desc')
						->limit(1)
						->get();
		foreach ($resultados as $resultado) {
			$pobEdadTrabajarAnterior = $resultado->pobEdadTrabajar;
			$ban = True;
		};

		if($ban == True){
			$html = number_format((float)(log(($pobEdadTrabajarActual / $pobEdadTrabajarAnterior))*100), 2, '.', '')."%";
		}else{
			$html = "0";
		}

		return Response::json(array('html' => $html));
	}

	public function mostrarTablaDemografia(Request $request)
	{
		$idMunicipio = $_GET['idMunicipio'];

		$resultados = Demografia::select('demografias.id',
        			DB::raw('YEAR(anioD) as YEARanioD'),
        			'demografias.indRuralidad',
        			'demografias.pobTotal',
        			'demografias.crecPob')
            ->where('demografias.municipio_id', $idMunicipio)
            ->orderBy('anioD')
            ->get();

		$html = "";
		$html .= "<table class='table table-striped table-bordered table-hover'>
				<thead>
				<tr>
				<th>Año</th>
				<th>Indice de ruralidad</th>
				<th>Población total</th>
				<th>Crecimiento poblacional</th>
				<th>Funciones</th>
				</tr>
				</thead>
				<tbody>";

		foreach ($resultados as $resultado) {
			$id = $resultado->id;
			$anio = $resultado->YEARanioD;
			$indRuralidad = $resultado->indRuralidad;
			$pobTotal = $resultado->pobTotal;
			$crecPob = $resultado->crecPob;

			$html .= "<tr>
					<td>$anio</td>
					<td>$indRuralidad</td>
					<td>$pobTotal</td>
					<td>$crecPob</td>
					<td><a id='$id' href='#' class='btn btn-success' data-toggle='modal' data-target='#modalMostrarActualizar' value='editar'>Editar</a></td>
					</tr>";
		}

		$html .= "</tbody>
				</table>";

		// <a id='$id' href='#' class='btn btn-danger'>Borrar</a>

		return Response::json(array('html' => $html));
	}
}
