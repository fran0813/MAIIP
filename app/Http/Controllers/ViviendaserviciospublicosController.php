<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \Response;

class ViviendaserviciospublicosController extends Controller
{
	// Función para actualizar los datos de vivienda y servicios publicos
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

		$viviendasserviciospublicos = array('cabViv' => $cabViv,
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
											'updated_at' => $updated_at, );

		DB::table('viviendasserviciospublicos')
			->where('id', $idVSP)
			->update($viviendasserviciospublicos);

		$coberturaalcantarillado = array('cabCA' => $cabCA,
										'centPobCA' => $centPobCA,
										'rurDispCA' => $rurDispCA,
										'updated_at' => $updated_at, );

		DB::table('coberturaalcantarillado')
			->where('viviendaserviciopublico_id', $idVSP)
			->update($coberturaalcantarillado);

		$coberturaaseo = array('cabCAs' => $cabCAs,
							'centPobCAs' => $centPobCAs,
							'rurDispCAs' => $rurDispCAs,
							'updated_at' => $updated_at, );

		DB::table('coberturaaseo')
			->where('viviendaserviciopublico_id', $idVSP)
			->update($coberturaaseo);

		$coberturagas = array('cabCG' => $cabCG,
							'centPobCG' => $centPobCG,
							'rurDispCG' => $rurDispCG,
							'updated_at' => $updated_at, );

		DB::table('coberturagas')
			->where('viviendaserviciopublico_id', $idVSP)
			->update($coberturagas);

		$coberturatelefono = array('cabCT' => $cabCT,
								'centPobCT' => $centPobCT,
								'rurDispCT' => $rurDispCT,
								'updated_at' => $updated_at, );

		DB::table('coberturatelefono')
			->where('viviendaserviciopublico_id', $idVSP)
			->update($coberturatelefono);

		$html = "Se actualizaron los datos correctamente";

		return Response::json(array('html' => $html, ));

	}

	// Función para eliminar los datos de vivienda y servicios publicos
	public function borrarViviendaserviciospublicos(){

		$idVSP = $_GET['idVSP'];

		DB::table('coberturaalcantarillado')
			->where('viviendaserviciopublico_id', $idVSP)
			->delete();

		DB::table('coberturaaseo')
			->where('viviendaserviciopublico_id', $idVSP)
			->delete();

		DB::table('coberturagas')
			->where('viviendaserviciopublico_id', $idVSP)
			->delete();

		DB::table('coberturatelefono')
			->where('viviendaserviciopublico_id', $idVSP)
			->delete();

		DB::table('viviendasserviciospublicos')
			->where('id', $idVSP)
			->delete();

		$html = "Se eliminaron los datos correctamente";

		return Response::json(array('html' => $html, ));

	}

	// Función para crear los datos de vivienda y servicios publicos
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
		
		$resultados = DB::table('viviendasserviciospublicos')
						->select('viviendasserviciospublicos.*')
						->where(DB::raw('YEAR(anioVSP)'), $comprobar)
						->get();

		$ban = False;

		foreach ($resultados as $resultado) {
			$ban = True;

		};

		if($ban == False){

			$viviendasserviciospublicos = array('anioVSP' => $anioVSP,
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
											'municipio_id' => $municipio_id,
											'created_at' => $created_at,
											'updated_at' => $updated_at, );

			DB::table('viviendasserviciospublicos')
				->insert($viviendasserviciospublicos);

			$resultados = DB::table('viviendasserviciospublicos')
						->select('viviendasserviciospublicos.*')
						->orderBy('id', 'desc')
						->limit(1)
						->get();

			foreach ($resultados as $resultado) {
				$viviendaserviciopublico_id = $resultado->id;

			};

			$coberturaalcantarillado = array('cabCA' => $cabCA,
											'centPobCA' => $centPobCA,
											'rurDispCA' => $rurDispCA,
											'viviendaserviciopublico_id' => $viviendaserviciopublico_id,
											'created_at' => $created_at,
											'updated_at' => $updated_at, );

			DB::table('coberturaalcantarillado')
				->insert($coberturaalcantarillado);

			$coberturaaseo = array('cabCAs' => $cabCAs,
								'centPobCAs' => $centPobCAs,
								'rurDispCAs' => $rurDispCAs,
								'viviendaserviciopublico_id' => $viviendaserviciopublico_id,
								'created_at' => $created_at,
								'updated_at' => $updated_at, );

			DB::table('coberturaaseo')
				->insert($coberturaaseo);

			$coberturagas = array('cabCG' => $cabCG,
								'centPobCG' => $centPobCG,
								'rurDispCG' => $rurDispCG,
								'viviendaserviciopublico_id' => $viviendaserviciopublico_id,
								'created_at' => $created_at,
								'updated_at' => $updated_at, );

			DB::table('coberturagas')
				->insert($coberturagas);

			$coberturatelefono = array('cabCT' => $cabCT,
									'centPobCT' => $centPobCT,
									'rurDispCT' => $rurDispCT,
									'viviendaserviciopublico_id' => $viviendaserviciopublico_id,
									'created_at' => $created_at,
									'updated_at' => $updated_at, );

			DB::table('coberturatelefono')
				->insert($coberturatelefono);

			$html = "Se registrarón los datos correctamente";

		}else{

			$html = "Ya se encuentra registrado ese año";

		}

		return Response::json(array('html' => $html, ));

	}

	// Muestra la grafica de viviendas
	public function grafica1Viviendaserviciospublicos(){

		$idMunicipio = $_GET['idMunicipio'];
		$anioVSP = $_GET['anioVSP'];

		$resultados = DB::table('viviendasserviciospublicos')
						->select(DB::raw('YEAR(anioVSP) as YEARanioVSP'),
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
						->where('viviendasserviciospublicos.anioVSP', $anioVSP)
						->get();

		$html = "";
		$html .= "<script type='text/javascript'>
				google.charts.load('current', {'packages':['corechart']});
	      		google.charts.setOnLoadCallback(drawChart);

	      		function drawChart() {
		        var data = google.visualization.arrayToDataTable([
		        ['Año', 'Hogares por vivienda', 'Personas por hogar', 'Personas por vivienda'],";
		
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

		};

		$html .= "]);

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

		return Response::json(array('html' => $html, ));

	}

	// Muestra la grafica de coberturas
	public function grafica2Viviendaserviciospublicos(){

		$idMunicipio = $_GET['idMunicipio'];
		$anioVSP = $_GET['anioVSP'];

		$resultados = DB::table('viviendasserviciospublicos')
						->join('coberturaalcantarillado', 'viviendasserviciospublicos.id', 'coberturaalcantarillado.viviendaserviciopublico_id')
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
						->where('viviendasserviciospublicos.anioVSP', $anioVSP)
						->get();

		$html = "";
		$html .= "<script type='text/javascript'>
				google.charts.load('current', {'packages':['corechart']});
	      		google.charts.setOnLoadCallback(drawChart);

	      		function drawChart() {
		        var data = google.visualization.arrayToDataTable([
		        ['Año', 'Cabecera', 'Centros poblados', 'Rural disperso'],";
		
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

		};

		$html .= "]);

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

		return Response::json(array('html' => $html, ));

	}

	// Muestra los datos que seran actualizados en vivienda y servicios publicos 
	public function mostrarActualizarViviendaserviciospublicos(){

		$idVSP = $_GET['idVSP'];

		$resultados = DB::table('viviendasserviciospublicos')
		 	->join('coberturaalcantarillado', 'viviendasserviciospublicos.id', 'coberturaalcantarillado.viviendaserviciopublico_id')
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

		$html = "";

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

			$html .= "<div class='col-lg-12 col-md-12 col-sm-12'>
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

					<div class='col-lg-12 col-md-12 col-sm-12'><br></div>";

			$html .= "<input id='idVSP' type='text' value='$id' style='display: none;'>";

		};

		return Response::json(array('html' => $html, ));

	}

	// Muestra la tabla de vivienda y servicios publicos en la vista de información
	public function mostrarViviendaserviciospublicos(){

		$idMunicipio = $_GET['idMunicipio'];
		$anioVSP = $_GET['anioVSP'];
	
		$resultados = DB::table('viviendasserviciospublicos')
			->join('coberturaalcantarillado', 'viviendasserviciospublicos.id', 'coberturaalcantarillado.viviendaserviciopublico_id')
		 	->join('coberturaaseo', 'viviendasserviciospublicos.id', 'coberturaaseo.viviendaserviciopublico_id')
		 	->join('coberturagas', 'viviendasserviciospublicos.id', 'coberturagas.viviendaserviciopublico_id')
		 	->join('coberturatelefono', 'viviendasserviciospublicos.id', 'coberturatelefono.viviendaserviciopublico_id')
            ->select('viviendasserviciospublicos.*',
        			'coberturaalcantarillado.*',
        			'coberturaaseo.*',
        			'coberturagas.*',
        			'coberturatelefono.*')
            ->where('viviendasserviciospublicos.municipio_id', $idMunicipio)
            ->where('viviendasserviciospublicos.anioVSP', $anioVSP)
            ->get();

		$html = "";

		//Tabla de datos principales
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

		// Tabla de cobertura alcantarillado
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

		// Tabla cobertura aseo
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

		// Tabla cobertura gas
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

		// Tabla cobertura telefono
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

		return Response::json(array('html' => $html, ));

	}

	// Muestra la tabla vivienda y servicios publicos en la vista del administrador
	public function mostrarTablaViviendaserviciospublicos(){

		$idMunicipio = $_GET['idMunicipio'];

		$resultados = DB::table('viviendasserviciospublicos')
            ->select('viviendasserviciospublicos.id',
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
					<td><a id='$id' href='#' class='btn btn-success' data-toggle='modal' data-target='#modalMostrarActualizar'>Editar</a></td>
					</tr>";

		};

		$html .= "</tbody>
				</table>";

		// <a id='$id' href='#' class='btn btn-danger'>Borrar</a>

		return Response::json(array('html' => $html, ));

	}

}
