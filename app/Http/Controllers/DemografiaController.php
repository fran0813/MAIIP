<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \Response;

class DemografiaController extends Controller
{
	// Función para actualizar los datos de demografia
	public function actualizarDemografia(){

		$idD = $_GET['idD'];
		$pobEdadTrabajar = $_GET['pobEdadTrabajar'];
		$pobPotActiva = $_GET['pobPotActiva'];
		$pobPotInactiva = $_GET['pobPotInactiva'];
		$numPerMen = $_GET['numPerMen'];
		$numPerMay = $_GET['numPerMay'];
		$numPerInd = $_GET['numPerInd'];
		$numPerDep = $_GET['numPerDep'];
		$pobHom = $_GET['pobHom'];
		$pobMuj = $_GET['pobMuj'];
		$pobZonCab = $_GET['pobZonCab'];
		$pobZonRes = $_GET['pobZonRes'];
		$indRuralidad = $_GET['indRuralidad'];
		$pobTotal = $_GET['pobTotal'];
		$crecPob = $_GET['crecPob'];
		$updated_at = $_GET['updated_at'];

		$demografias = array('pobEdadTrabajar' => $pobEdadTrabajar,
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
							'updated_at' => $updated_at, );

		DB::table('demografias')
			->where('id', $idD)
			->update($demografias);

		$html = "Se actualizaron los datos correctamente";

		return Response::json(array('html' => $html, ));

	}

	// Función para eliminar los datos de demografia
	public function borrarDemografia(){

		$idD = $_GET['idD'];

		DB::table('demografias')
			->where('id', $idD)
			->delete();

		$html = "Se eliminaron los datos correctamente";

		return Response::json(array('html' => $html, ));

	}

	// Función para crear los datos de demografia
	public function crearDemografia(){

		$anioD = $_GET['anioD'];
		$comprobar = $_GET['comprobar'];
		$pobEdadTrabajar = $_GET['pobEdadTrabajar'];
		$pobPotActiva = $_GET['pobPotActiva'];
		$pobPotInactiva = $_GET['pobPotInactiva'];
		$numPerMen = $_GET['numPerMen'];
		$numPerMay = $_GET['numPerMay'];
		$numPerInd = $_GET['numPerInd'];
		$numPerDep = $_GET['numPerDep'];
		$pobHom = $_GET['pobHom'];
		$pobMuj = $_GET['pobMuj'];
		$pobZonCab = $_GET['pobZonCab'];
		$pobZonRes = $_GET['pobZonRes'];
		$indRuralidad = $_GET['indRuralidad'];
		$pobTotal = $_GET['pobTotal'];
		$crecPob = $_GET['crecPob'];
		$created_at = $_GET['created_at'];
		$updated_at = $_GET['updated_at'];
		$municipio_id = $_GET['municipio_id'];

		$resultados = DB::table('demografias')
						->select('demografias.*')
						->where(DB::raw('YEAR(anioD)'), '=', $comprobar)
						->get();
				
		$ban = False;

		foreach ($resultados as $resultado) {
			$ban = True;

		
		};

		if($ban == False){

			$demografias = array('anioD' => $anioD,
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
								'municipio_id' => $municipio_id,
								'created_at' => $created_at,
								'updated_at' => $updated_at, );

			DB::table('demografias')
				->insert($demografias);

			$html = "Se registrarón los datos correctamente";

		}else{

			$html = "Ya se encuentra registrado ese año";

		}

		return Response::json(array('html' => $html, ));

	}

	// Muestra la grafica del índice de ruralidad vs el crecimiento poblacional
	public function grafica1Demografia(){

		$idMunicipio = $_GET['idMunicipio'];

		$resultados = DB::table('demografias')
						->select(DB::raw('YEAR(anioD) as YEARanioD'),
								'demografias.indRuralidad',
								'demografias.crecPob')
						->where('demografias.municipio_id', '=', $idMunicipio)
						->orderBy('demografias.anioD', 'asc')
						->get();
		
		$html = "";
		$html .= "<script type='text/javascript'>
				google.charts.load('current', {'packages':['corechart']});
				google.charts.setOnLoadCallback(drawChart);

				function drawChart() {
				var data = google.visualization.arrayToDataTable([
				['Año', 'Índice de ruralidad', 'Crecimiento poblacional'],";

		foreach ($resultados as $resultado) {
			$anio = $resultado->YEARanioD;
			$indRuralidad = $resultado->indRuralidad;
			$porcentajeIndRuralidad = ($indRuralidad/100);
			$crecPob = $resultado->crecPob;
			$porcentajeCrecPob = ($crecPob/100);

			$html .= "['$anio', $porcentajeIndRuralidad, $porcentajeCrecPob],";
		
		};

		$html .= "]);

				var options = {
				title: 'Índice de ruralidad V.S Crecimiento demografico',
				curveType: 'function',
				legend: { position: 'rigth' },
				colors: ['#e9473f', '#131FBD'],
				vAxis: {format: 'percent'}
				};

				var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

				chart.draw(data, options);
				}
				</script>

				<div id='curve_chart' style='width: 900px; height: 500px'></div>";

		return Response::json(array('html' => $html, ));

	}

	// Muestra la grafica de población total
	public function grafica2Demografia(){

		$idMunicipio = $_GET['idMunicipio'];

		$resultados = DB::table('demografias')
					->select(DB::raw('YEAR(anioD) as YEARanioD'), 'demografias.pobTotal')
					->where('demografias.municipio_id', '=', $idMunicipio)
					->orderBy('demografias.anioD', 'asc')
					->get();

		$html = "";
		$html .= "<script type='text/javascript'>
				google.charts.load('current', {'packages':['corechart']});
				google.charts.setOnLoadCallback(drawChart);

				function drawChart() {
				var data = google.visualization.arrayToDataTable([
				['Año', 'Población total'],";
		
		foreach ($resultados as $resultado) {
			$anio = $resultado->YEARanioD;
			$pobTotal = $resultado->pobTotal;

			$html .= "['$anio', $pobTotal],";
		
		};

		$html .= "]);

				var options = {
				title: 'Población total',
				bar: {groupWidth: '20%'},
				legend: { position: 'rigth' },
				colors: ['#e9473f']
				};

				var chart = new google.visualization.ColumnChart(document.getElementById('columnchart_values'));

				chart.draw(data, options);
				}
				</script>

				<div id='columnchart_values' style='width: 900px; height: 300px;'></div>";

		return Response::json(array('html' => $html, ));

	}

	// Muestra los datos que seran actualizados en demografia 
	public function mostrarActualizarDemografia(){

		$idD = $_GET['idD'];

		$resultados = DB::table('demografias')
					->select('demografias.id',
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
					->where('demografias.id', '=', $idD)
					->get();

		$html = "";

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

			$html .= "<div class='col-lg-12 col-md-12 col-sm-12'>
					<div class='col-lg-5 col-md-5 col-sm-5'>
					<label for='anio2' class='text-label'>Año</label>       
					<input id='anio2' type='date' value='$anio' disabled='' class='form-control'>
					</div>
					<div class='col-lg-7 col-md-7 col-sm-7'>
					<label for='pobEdadTrabajar2' class='text-label'>Población en edad de trabajar</label>        
					<input id='pobEdadTrabajar2' type='text' value='$pobEdadTrabajar' oninput='calcularCrecPob2()' class='form-control'>
					</div>
					</div>

					<div class='col-lg-12 col-md-12 col-sm-12'><br></div> 

					<div class='col-lg-12 col-md-12 col-sm-12'>
					<div class='col-lg-6 col-md-6 col-sm-6'>
					<label for='pobPotActiva2' class='text-label'>Población activa</label>     
					<input id='pobPotActiva2' type='text' value='$pobPotActiva' class='form-control'>
					</div>
					<div class='col-lg-6 col-md-6 col-sm-6'>
					<label for='pobPotInactiva2' class='text-label'>Población inactiva</label>     
					<input id='pobPotInactiva2' type='text' value='$pobPotInactiva' class='form-control'>
					</div>
					</div>

					<div class='col-lg-12 col-md-12 col-sm-12'><br></div> 

					<div class='col-lg-12 col-md-12 col-sm-12'>
					<div class='col-lg-6 col-md-6 col-sm-6'>
					<label for='numPerMen2' class='text-label'>Numero de personas menores</label>     
					<input id='numPerMen2' type='text' value='$numPerMen' class='form-control'>
					</div>
					<div class='col-lg-6 col-md-6 col-sm-6'>
					<label for='numPerMay2' class='text-label'>Numero de personas mayores</label>     
					<input id='numPerMay2' type='text' value='$numPerMay' class='form-control'>
					</div>
					</div>

					<div class='col-lg-12 col-md-12 col-sm-12'><br></div> 

					<div class='col-lg-12 col-md-12 col-sm-12'>
					<div class='col-lg-6 col-md-6 col-sm-6'>
					<label for='numPerInd2' class='text-label'>Numero de personas independientes</label>     
					<input id='numPerInd2' type='text' value='$numPerInd' class='form-control'>
					</div>
					<div class='col-lg-6 col-md-6 col-sm-6'>
					<label for='numPerDep2' class='text-label'>Numero de personas dependientes</label>     
					<input id='numPerDep2' type='text' value='$numPerDep' class='form-control'>
					</div>
					</div>

					<div class='col-lg-12 col-md-12 col-sm-12'><br></div> 

					<div class='col-lg-12 col-md-12 col-sm-12'>
					<div class='col-lg-6 col-md-6 col-sm-6'>
					<label for='pobHom2' class='text-label'>Población de hombres</label>     
					<input id='pobHom2' type='text' value='$pobHom' class='form-control'> 
					</div>
					<div class='col-lg-6 col-md-6 col-sm-6'>
					<label for='pobMuj2' class='text-label'>Población de mujeres</label>     
					<input id='pobMuj2' type='text' value='$pobMuj' class='form-control'>
					</div>
					</div>

					<div class='col-lg-12 col-md-12 col-sm-12'><br></div> 

					<div class='col-lg-12 col-md-12 col-sm-12'>
					<div class='col-lg-4 col-md-4 col-sm-4'>
					<label for='pobZonCab2' class='text-label'>Población zona cabecera</label>     
					<input id='pobZonCab2' type='text' value='$pobZonCab' class='form-control'>
					</div>
					<div class='col-lg-4 col-md-4 col-sm-4'>
					<label for='pobZonRes2' class='text-label'>Población zona resto</label>     
					<input id='pobZonRes2' type='text' value='$pobZonRes' oninput='calcularIndRuralidad2()' class='form-control'>
					</div>
					<div class='col-lg-4 col-md-4 col-sm-4'>
					<label for='indRuralidad2' class='text-label'>Indice de ruralidad</label>     
					<input id='indRuralidad2' type='text' value='$indRuralidad' disabled='' class='form-control'>
					</div>
					</div>

					<div class='col-lg-12 col-md-12 col-sm-12'><br></div> 

					<div class='col-lg-12 col-md-12 col-sm-12'>
					<div class='col-lg-6 col-md-6 col-sm-6'>
					<label for='pobTotal2' class='text-label'>Población total</label>     
					<input id='pobTotal2' type='text' value='$pobTotal' oninput='calcularIndRuralidad2()' class='form-control'>
					</div>
					<div id='recibirCrecPob2' class='col-lg-6 col-md-6 col-sm-6'>

					<label for='crecPob2' class='text-label'>Crecimiento poblacional</label>     
					<input id='crecPob2' type='text' value='$crecPob' disabled='' class='form-control'>

					</div>
					</div>";

			$html .= "<input id='idD' type='text' value='$id' style='display: none;'>";
		
		};

		return Response::json(array('html' => $html, ));

	}

	// Muestra la tabla de demografias en la vista de información
	public function mostrarDemografia(){

		$idMunicipio = $_GET['idMunicipio'];

		$resultados = DB::table('demografias')
						->select(DB::raw('YEAR(anioD) as YEARanioD'),
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
						->where('demografias.municipio_id', '=', $idMunicipio)
						->orderBy('demografias.anioD', 'asc')
						->get();

		$html = "";
		$html .= "<table class='table table-bordered'>
				<thead class='thead-s'>
				<tr>
				<th>Datos</th>";

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
			
			$html .= "<td>$indRuralidad</td>";
		
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
			
			$html .= "<td>$crecPob</td>";
		
		};	

		$html .= "</tr>
				</tbody>
				</table>";	

		return Response::json(array('html' => $html, ));

	}

	// Calcula el crecimiento poblacional
	public function calcularCrecPob(){

		$anioD = $_GET['anioD'];
		$pobEdadTrabajarActual = $_GET['pobEdadTrabajar'];

		$resultados = DB::table('demografias')
						->select('demografias.pobEdadTrabajar')
						->where('demografias.anioD', '<', $anioD)
						->orderBy('anioD', 'desc')
						->limit(1)
						->get();
		
		$html = "";
		$ban = False;

		foreach ($resultados as $resultado) {
			$pobEdadTrabajarAnterior = $resultado->pobEdadTrabajar;
			$ban = True;
		
		};

		if($ban == True){

			$pobEdadTrabajarTotal = number_format((float)(log(($pobEdadTrabajarActual / $pobEdadTrabajarAnterior))*100), 2, '.', '')."%";

			$html = "<label for='crecPob' class='text-label'>Crecimiento poblacional</label>
					<input id='crecPob' type='text' placeholder='Crecimiento poblacional' value='$pobEdadTrabajarTotal' disabled='' class='form-control'>";

		}else{

			$html = "<label for='crecPob' class='text-label'>Crecimiento poblacional</label> 
					<input id='crecPob' type='text' placeholder='Crecimiento poblacional' value='N/A' disabled='' class='form-control'>";

		}

		return Response::json(array('html' => $html, ));

	}

	// Calcula el crecimiento poblacional para el actualizar
	public function calcularCrecPob2(){

		$anioD = $_GET['anioD'];
		$pobEdadTrabajarActual = $_GET['pobEdadTrabajar'];

		$resultados = DB::table('demografias')
						->select('demografias.pobEdadTrabajar')
						->where('demografias.anioD', '<', $anioD)
						->orderBy('anioD', 'desc')
						->limit(1)
						->get();

		$html = "";
		$ban = False;

		foreach ($resultados as $resultado) {
			$pobEdadTrabajarAnterior = $resultado->pobEdadTrabajar;
			$ban = True;
		
		};

		if($ban == True){

			$pobEdadTrabajarTotal = number_format((float)(log(($pobEdadTrabajarActual / $pobEdadTrabajarAnterior))*100), 2, '.', '')."%";

			$html = "<label for='crecPob' class='text-label'>Crecimiento poblacional</label>
					<input id='crecPob2' type='text' placeholder='Crecimiento poblacional' value='$pobEdadTrabajarTotal' disabled='' class='form-control'>";

		}else{

			$html = "<label for='crecPob' class='text-label'>Crecimiento poblacional</label> 
					<input id='crecPob2' type='text' placeholder='Crecimiento poblacional' value='N/A' disabled='' class='form-control'>";

		}

		return Response::json(array('html' => $html, ));

	}

	// Muestra la tabla demografia en la vista del administrador
	public function mostrarTablaDemografia(){

		$idMunicipio = $_GET['idMunicipio'];

		$resultados = DB::table('demografias')
            ->select('demografias.id',
        			DB::raw('YEAR(anioD) as YEARanioD'),
        			'demografias.indRuralidad',
        			'demografias.pobTotal',
        			'demografias.crecPob')
            ->where('demografias.municipio_id', '=', $idMunicipio)
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
					<td><a id='$id' href='#' class='btn btn-success' data-toggle='modal' data-target='#modalMostrarActualizar'>Editar</a></td>
					</tr>";
		
		};

		$html .= "</tbody>
				</table>";

		// <a id='$id' href='#' class='btn btn-danger'>Borrar</a>

		return Response::json(array('html' => $html, ));

	}

}
