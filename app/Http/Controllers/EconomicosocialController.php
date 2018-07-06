<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \Response;
use App\Economicosocial;
use App\Unidadcomercial;
use App\Indicepobrezamultidimensional;

class EconomicosocialController extends Controller
{
    public function actualizarEconomicosocial(Request $request)
	{
		$idES = $_POST['idES'];
		$numHecSemBos = $_POST['numHecSemBos'];
        $areAgrCosTot = $_POST['areAgrCosTot'];
        $proAgrTot = $_POST['proAgrTot'];
        $proCar = $_POST['proCar'];
        $invBovTotMac = $_POST['invBovTotMac'];
        $invBovTotHem = $_POST['invBovTotHem'];
        $invBovTot = $_POST['invBovTot'];
        $incIpmTot = $_POST['incIpmTot'];
        $incIpmRur = $_POST['incIpmRur'];
        $incIpmUrb = $_POST['incIpmUrb'];
        $uniCom = $_POST['uniCom'];
        $uniSer = $_POST['uniSer'];
        $uniGraCom = $_POST['uniGraCom'];
        $uniGraInd = $_POST['uniGraInd'];
        $uniGraSer = $_POST['uniGraSer'];
        $uniInd = $_POST['uniInd'];
        $uniMedCom = $_POST['uniMedCom'];
        $uniMedInd = $_POST['uniMedInd'];
        $uniMedSer = $_POST['uniMedSer'];
        $uniMicCom = $_POST['uniMicCom'];
        $uniMicInd = $_POST['uniMicInd'];
        $uniMicSer = $_POST['uniMicSer'];
        $uniPeqCom = $_POST['uniPeqCom'];
        $uniPeqInd = $_POST['uniPeqInd'];
        $uniPeqSer = $_POST['uniPeqSer'];
        $altTasDepEco = $_POST['altTasDepEco'];
        $ana = $_POST['ana'];
        $bajLogEdu = $_POST['bajLogEdu'];
        $barAccSerSal = $_POST['barAccSerSal'];
        $barAccSerCiu = $_POST['barAccSerCiu'];
        $empInf = $_POST['empInf'];
        $hac = $_POST['hac'];
        $inaEliExc = $_POST['inaEliExc'];
        $inaEsc = $_POST['inaEsc'];
        $parIna = $_POST['parIna'];
        $pisIna = $_POST['pisIna'];
        $rezEsc = $_POST['rezEsc'];
        $sinAccFueAgMej = $_POST['sinAccFueAgMej'];
        $sinAseSal = $_POST['sinAseSal'];
        $traInf = $_POST['traInf'];

		$economico_social_update = Economicosocial::find($idES);
        $economico_social_update->numHecSemBos = $numHecSemBos;
        $economico_social_update->areAgrCosTot = $areAgrCosTot;
        $economico_social_update->proAgrTot = $proAgrTot;
        $economico_social_update->proCar = $proCar;
        $economico_social_update->invBovTotMac = $invBovTotMac;
        $economico_social_update->invBovTotHem = $invBovTotHem;
        $economico_social_update->invBovTot = $invBovTot;
        $economico_social_update->incIpmTot = $incIpmTot;
        $economico_social_update->incIpmRur = $incIpmRur;
        $economico_social_update->incIpmUrb = $incIpmUrb;
        $economico_social_update->save();

		$unidad_comercial_update = Unidadcomercial::find($idES);
        $unidad_comercial_update->uniCom = $uniCom;
        $unidad_comercial_update->uniSer = $uniSer;
        $unidad_comercial_update->uniGraCom = $uniGraCom;
        $unidad_comercial_update->uniGraInd = $uniGraInd;
        $unidad_comercial_update->uniGraSer = $uniGraSer;
        $unidad_comercial_update->uniInd = $uniInd;
        $unidad_comercial_update->uniMedCom = $uniMedCom;
        $unidad_comercial_update->uniMedInd = $uniMedInd;
        $unidad_comercial_update->uniMedSer = $uniMedSer;
        $unidad_comercial_update->uniMicCom = $uniMicCom;
        $unidad_comercial_update->uniMicInd = $uniMicInd;
        $unidad_comercial_update->uniMicSer = $uniMicSer;
        $unidad_comercial_update->uniPeqCom = $uniPeqCom;
        $unidad_comercial_update->uniPeqInd = $uniPeqInd;
        $unidad_comercial_update->uniPeqSer = $uniPeqSer;
        $unidad_comercial_update->save();

		$indice_pobreza_multidimensional_update = Indicepobrezamultidimensional::find($idES);
        $indice_pobreza_multidimensional_update->altTasDepEco = $altTasDepEco;
        $indice_pobreza_multidimensional_update->ana = $ana;
        $indice_pobreza_multidimensional_update->bajLogEdu = $bajLogEdu;
        $indice_pobreza_multidimensional_update->barAccSerSal = $barAccSerSal;
        $indice_pobreza_multidimensional_update->barAccSerCiu = $barAccSerCiu;
        $indice_pobreza_multidimensional_update->empInf = $empInf;
        $indice_pobreza_multidimensional_update->hac = $hac;
        $indice_pobreza_multidimensional_update->inaEliExc = $inaEliExc;
        $indice_pobreza_multidimensional_update->inaEsc = $inaEsc;
        $indice_pobreza_multidimensional_update->parIna = $parIna;
        $indice_pobreza_multidimensional_update->pisIna = $pisIna;
        $indice_pobreza_multidimensional_update->rezEsc = $rezEsc;
        $indice_pobreza_multidimensional_update->sinAccFueAgMej = $sinAccFueAgMej;
        $indice_pobreza_multidimensional_update->sinAseSal = $sinAseSal;
        $indice_pobreza_multidimensional_update->traInf = $traInf;
        $indice_pobreza_multidimensional_update->save();

		$html = "Se actualizaron los datos correctamente";

		return Response::json(array('html' => $html));
	}

	public function borrarEconomicosocial(Request $request)
	{
		$idES = $_GET['idES'];

		$indice_pobreza_multidimensional_delete = Indicepobrezamultidimensional::find($idES);
        $indice_pobreza_multidimensional_delete->delete();

		$unidad_comercial_delete = Unidadcomercial::find($idES);
        $unidad_comercial_delete->delete();

		$economico_social_delete = Economicosocial::find($idES);
        $economico_social_delete->delete();

		$html = "Se eliminaron los datos correctamente";

		return Response::json(array('html' => $html));
	}

	public function crearEconomicosocial(Request $request)
	{
		$anioES = $_POST['anioES'];
		$comprobar = $_POST['comprobar'];
		$numHecSemBos = $_POST['numHecSemBos'];
        $areAgrCosTot = $_POST['areAgrCosTot'];
        $proAgrTot = $_POST['proAgrTot'];
        $proCar = $_POST['proCar'];
        $invBovTotMac = $_POST['invBovTotMac'];
        $invBovTotHem = $_POST['invBovTotHem'];
        $invBovTot = $_POST['invBovTot'];
        $incIpmTot = $_POST['incIpmTot'];
        $incIpmRur = $_POST['incIpmRur'];
        $incIpmUrb = $_POST['incIpmUrb'];
        $uniCom = $_POST['uniCom'];
        $uniSer = $_POST['uniSer'];
        $uniGraCom = $_POST['uniGraCom'];
        $uniGraInd = $_POST['uniGraInd'];
        $uniGraSer = $_POST['uniGraSer'];
        $uniInd = $_POST['uniInd'];
        $uniMedCom = $_POST['uniMedCom'];
        $uniMedInd = $_POST['uniMedInd'];
        $uniMedSer = $_POST['uniMedSer'];
        $uniMicCom = $_POST['uniMicCom'];
        $uniMicInd = $_POST['uniMicInd'];
        $uniMicSer = $_POST['uniMicSer'];
        $uniPeqCom = $_POST['uniPeqCom'];
        $uniPeqInd = $_POST['uniPeqInd'];
        $uniPeqSer = $_POST['uniPeqSer'];
        $altTasDepEco = $_POST['altTasDepEco'];
        $ana = $_POST['ana'];
        $bajLogEdu = $_POST['bajLogEdu'];
        $barAccSerSal = $_POST['barAccSerSal'];
        $barAccSerCiu = $_POST['barAccSerCiu'];
        $empInf = $_POST['empInf'];
        $hac = $_POST['hac'];
        $inaEliExc = $_POST['inaEliExc'];
        $inaEsc = $_POST['inaEsc'];
        $parIna = $_POST['parIna'];
        $pisIna = $_POST['pisIna'];
        $rezEsc = $_POST['rezEsc'];
        $sinAccFueAgMej = $_POST['sinAccFueAgMej'];
        $sinAseSal = $_POST['sinAseSal'];
        $traInf = $_POST['traInf'];
		$municipio_id = $_POST['municipio_id'];
		$ban = False;

		$resultados = Economicosocial::where(DB::raw('YEAR(anioES)'), $comprobar)
						->get();
		foreach ($resultados as $resultado) {
			$ban = True;
		}

		if ($ban == False) {

			$economico_social_create = new Economicosocial;
			$economico_social_create->anioES = $anioES;
		    $economico_social_create->numHecSemBos = $numHecSemBos;
	        $economico_social_create->areAgrCosTot = $areAgrCosTot;
	        $economico_social_create->proAgrTot = $proAgrTot;
	        $economico_social_create->proCar = $proCar;
	        $economico_social_create->invBovTotMac = $invBovTotMac;
	        $economico_social_create->invBovTotHem = $invBovTotHem;
	        $economico_social_create->invBovTot = $invBovTot;
	        $economico_social_create->incIpmTot = $incIpmTot;
	        $economico_social_create->incIpmRur = $incIpmRur;
	        $economico_social_create->incIpmUrb = $incIpmUrb;
	        $economico_social_create->municipio_id = $municipio_id;
		    $economico_social_create->save();

			$resultados = Economicosocial::orderBy('id', 'desc')
						->limit(1)
						->get();
			foreach ($resultados as $resultado) {
				$economicosocial_id = $resultado->id;
			}

			$unidad_comercial_create = new Unidadcomercial;
		    $unidad_comercial_create->uniCom = $uniCom;
		    $unidad_comercial_create->uniSer = $uniSer;
	        $unidad_comercial_create->uniGraCom = $uniGraCom;
	        $unidad_comercial_create->uniGraInd = $uniGraInd;
	        $unidad_comercial_create->uniGraSer = $uniGraSer;
	        $unidad_comercial_create->uniInd = $uniInd;
	        $unidad_comercial_create->uniMedCom = $uniMedCom;
	        $unidad_comercial_create->uniMedInd = $uniMedInd;
	        $unidad_comercial_create->uniMedSer = $uniMedSer;
	        $unidad_comercial_create->uniMicCom = $uniMicCom;
	        $unidad_comercial_create->uniMicInd = $uniMicInd;
	        $unidad_comercial_create->uniMicSer = $uniMicSer;
	        $unidad_comercial_create->uniPeqCom = $uniPeqCom;
	        $unidad_comercial_create->uniPeqInd = $uniPeqInd;
	        $unidad_comercial_create->uniPeqSer = $uniPeqSer;
	        $unidad_comercial_create->economicosocial_id = $economicosocial_id;
		    $unidad_comercial_create->save();

			$indice_pobreza_multidimensional_create = new Indicepobrezamultidimensional;
		    $indice_pobreza_multidimensional_create->altTasDepEco = $altTasDepEco;
	        $indice_pobreza_multidimensional_create->ana = $ana;
	        $indice_pobreza_multidimensional_create->bajLogEdu = $bajLogEdu;
	        $indice_pobreza_multidimensional_create->barAccSerSal = $barAccSerSal;
	        $indice_pobreza_multidimensional_create->barAccSerCiu = $barAccSerCiu;
	        $indice_pobreza_multidimensional_create->empInf = $empInf;
	        $indice_pobreza_multidimensional_create->hac = $hac;
	        $indice_pobreza_multidimensional_create->inaEliExc = $inaEliExc;
	        $indice_pobreza_multidimensional_create->inaEsc = $inaEsc;
	        $indice_pobreza_multidimensional_create->parIna = $parIna;
	        $indice_pobreza_multidimensional_create->pisIna = $pisIna;
	        $indice_pobreza_multidimensional_create->rezEsc = $rezEsc;
	        $indice_pobreza_multidimensional_create->sinAccFueAgMej = $sinAccFueAgMej;
	        $indice_pobreza_multidimensional_create->sinAseSal = $sinAseSal;
	        $indice_pobreza_multidimensional_create->traInf = $traInf;
	        $indice_pobreza_multidimensional_create->economicosocial_id = $economicosocial_id;
		    $indice_pobreza_multidimensional_create->save();

			$html = "Se registrarón los datos correctamente";
		} else {
			$html = "Ya se encuentra registrado ese año";
		}

		return Response::json(array('html' => $html));
	}

	public function grafica1Economicosocial(Request $request)
	{
		$idMunicipio = $_GET['idMunicipio'];
		$anioES = $_GET['anioES'];
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

		$resultados = Economicosocial::select(DB::raw('YEAR(anioES) as YEARanioES'),
								'economicosocial.incImpTot',
								'economicosocial.incIpmRur',
								'economicosocial.incIpmUrb')
						->where('economicosocial.municipio_id', $idMunicipio)
						->where(DB::raw('YEAR(anioES)'), $anioES)
						->get();
		foreach ($resultados as $resultado) {
			$anio = $resultado->YEARanioES;
			$incImpTot = $resultado->incImpTot;
			$incIpmRur = $resultado->incIpmRur;
			$incIpmUrb = $resultado->incIpmUrb;

			$html .= "['$anio', $incImpTot, $incIpmRur, $incIpmUrb],";
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

	public function grafica2Economicosocial(Request $request)
	{
		$idMunicipio = $_GET['idMunicipio'];
		$anioES = $_GET['anioES'];
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

		$resultados = Economicosocial::join('indicepobrezamultidimensional', 'economicosocial.id', 'indicepobrezamultidimensional.economicosocial_id')
						->select(DB::raw('YEAR(anioES) as YEARanioES'),
								'matriculaporgenero.*')
						->where('economicosocial.municipio_id', $idMunicipio)
						->orderBy('economicosocial.anioES', 'asc')
						->get();
		foreach ($resultados as $resultado) {
			$anio = $resultado->YEARanioES;
			$altTasDepEco = $resultado->altTasDepEco;
	        $ana = $resultado->ana;
	        $bajLogEdu = $resultado->bajLogEdu;
	        $barAccSerSal = $resultado->barAccSerSal;
	        $barAccSerCiu = $resultado->barAccSerCiu;
	        $empInf = $resultado->empInf;
	        $hac = $resultado->hac;
	        $inaEliExc = $resultado->inaEliExc;
	        $inaEsc = $resultado->inaEsc;
	        $parIna = $resultado->parIna;
	        $pisIna = $resultado->pisIna;
	        $rezEsc = $resultado->rezEsc;
	        $sinAccFueAgMej = $resultado->sinAccFueAgMej;
	        $sinAseSal = $resultado->sinAseSal;
	        $traInf = $resultado->traInf;

			$html .= "['$anio', 
			$altTasDepEco,
	        $ana,
	        $bajLogEdu,
	        $barAccSerSal,
	        $barAccSerCiu,
	        $empInf,
	        $hac,
	        $inaEliExc,
	        $inaEsc,
	        $parIna,
	        $pisIna,
	        $rezEsc,
	        $sinAccFueAgMej,
	        $sinAseSal,
	        $traInf
			],";
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

	public function mostrarActualizarEconomicosocial(Request $request)
	{
		$idES = $_POST['idES'];
		$html = "";

		$resultados = Economicosocial::join('unidadcomercial', 'economicosocial.id', 'unidadcomercial.economicosocial_id')
			->join('indicepobrezamultidimensional', 'economicosocial.id', 'indicepobrezamultidimensional.economicosocial_id')
			->select('economicosocial.id',
					DB::raw('DATE(anioES) as DATEanioES'),
					'numHecSemBos',
			        'areAgrCosTot',
			        'proAgrTot',
			        'proCar',
			        'invBovTotMac',
			        'invBovTotHem',
			        'invBovTot',
			        'incIpmTot',
			        'incIpmRur',
			        'incIpmUrb',
					'unidadcomercial.*',
					'indicepobrezamultidimensional.*')
            ->where('economicosocial.id', $idES)
            ->get();
		foreach ($resultados as $resultado) {
			$id = $resultado->id;
			$anio = $resultado->DATEanioES;
			$numHecSemBos = $resultado->numHecSemBos;
	        $areAgrCosTot = $resultado->areAgrCosTot;
	        $proAgrTot = $resultado->proAgrTot;
	        $proCar = $resultado->proCar;
	        $invBovTotMac = $resultado->invBovTotMac;
	        $invBovTotHem = $resultado->invBovTotHem;
	        $invBovTot = $resultado->invBovTot;
	        $incIpmTot = $resultado->incIpmTot;
	        $incIpmRur = $resultado->incIpmRur;
	        $incIpmUrb = $resultado->incIpmUrb;
	        $uniCom = $resultado->uniCom;
	        $uniSer = $resultado->uniSer;
	        $uniGraCom = $resultado->uniGraCom;
	        $uniGraInd = $resultado->uniGraInd;
	        $uniGraSer = $resultado->uniGraSer;
	        $uniInd = $resultado->uniInd;
	        $uniMedCom = $resultado->uniMedCom;
	        $uniMedInd = $resultado->uniMedInd;
	        $uniMedSer = $resultado->uniMedSer;
	        $uniMicCom = $resultado->uniMicCom;
	        $uniMicInd = $resultado->uniMicInd;
	        $uniMicSer = $resultado->uniMicSer;
	        $uniPeqCom = $resultado->uniPeqCom;
	        $uniPeqInd = $resultado->uniPeqInd;
	        $uniPeqSer = $resultado->uniPeqSer;
	        $altTasDepEco = $resultado->altTasDepEco;
	        $ana = $resultado->ana;
	        $bajLogEdu = $resultado->bajLogEdu;
	        $barAccSerSal = $resultado->barAccSerSal;
	        $barAccSerCiu = $resultado->barAccSerCiu;
	        $empInf = $resultado->empInf;
	        $hac = $resultado->hac;
	        $inaEliExc = $resultado->inaEliExc;
	        $inaEsc = $resultado->inaEsc;
	        $parIna = $resultado->parIna;
	        $pisIna = $resultado->pisIna;
	        $rezEsc = $resultado->rezEsc;
	        $sinAccFueAgMej = $resultado->sinAccFueAgMej;
	        $sinAseSal = $resultado->sinAseSal;
	        $traInf = $resultado->traInf;
		}

		return Response::json(array('id' => $id,
									'anio' => $anio,
									'numHecSemBos' => $numHecSemBos,
						        'areAgrCosTot' => $areAgrCosTot,
						        'proAgrTot' => $proAgrTot,
						        'proCar' => $proCar,
						        'invBovTotMac' => $invBovTotMac,
						        'invBovTotHem' => $invBovTotHem,
						        'invBovTot' => $invBovTot,
						        'incIpmTot' => $incIpmTot,
						        'incIpmRur' => $incIpmRur,
						        'incIpmUrb' => $incIpmUrb,
						        'uniCom' => $uniCom,
						        'uniSer' => $uniSer,
						        'uniGraCom' => $uniGraCom,
						        'uniGraInd' => $uniGraInd,
						        'uniGraSer' => $uniGraSer,
						        'uniInd' => $uniInd,
						        'uniMedCom' => $uniMedCom,
						        'uniMedInd' => $uniMedInd,
						        'uniMedSer' => $uniMedSer,
						        'uniMicCom' => $uniMicCom,
						        'uniMicInd' => $uniMicInd,
						        'uniMicSer' => $uniMicSer,
						        'uniPeqCom' => $uniPeqCom,
						        'uniPeqInd' => $uniPeqInd,
						        'uniPeqSer' => $uniPeqSer,
						        'altTasDepEco' => $altTasDepEco,
						        'ana' => $ana,
						        'bajLogEdu' => $bajLogEdu,
						        'barAccSerSal' => $barAccSerSal,
						        'barAccSerCiu' => $barAccSerCiu,
						        'empInf' => $empInf,
						        'hac' => $hac,
						        'inaEliExc' => $inaEliExc,
						        'inaEsc' => $inaEsc,
						        'parIna' => $parIna,
						        'pisIna' => $pisIna,
						        'rezEsc' => $rezEsc,
						        'sinAccFueAgMej' => $sinAccFueAgMej,
						        'sinAseSal' => $sinAseSal,
						        'traInf' => $traInf,
								));
	}

	public function mostrarEconomicosocial(Request $request)
	{
		$idMunicipio = $_GET['idMunicipio'];
		$anioES = $_GET['anioES'];
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

		$resultados = Economicosocial::join('unidadcomercial', 'economicosocial.id', 'unidadcomercial.economicosocial_id')
			->join('indicepobrezamultidimensional', 'economicosocial.id', 'indicepobrezamultidimensional.economicosocial_id')
			->select('economicosocial.id',
					DB::raw('DATE(anioES) as DATEanioES'),
					'numHecSemBos',
			        'areAgrCosTot',
			        'proAgrTot',
			        'proCar',
			        'invBovTotMac',
			        'invBovTotHem',
			        'invBovTot',
			        'incIpmTot',
			        'incIpmRur',
			        'incIpmUrb',
					'unidadcomercial.*',
					'indicepobrezamultidimensional.*')
            ->where('economicosocial.municipio_id', $idMunicipio)
            ->where(DB::raw('YEAR(anioES)'), $anioES)
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

	public function mostrarTablaEconomicosocial(Request $request)
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

	public function subiendoArchivoEconomicoSocial()
    {
        return view('admin.economicosocial.subiendoArchivoEconomicoSocial');
    }

    public function guardarArchivoEconomicoSocial(Request $request)
    {
      $file = $request->file('file');
      $name = $file->getClientOriginalName();
      Storage::disk('public')->put($name,  File::get($file));

      $request->session()->put('nameArchivoEconomicoSocial', $name);

      return redirect('/admin/subiendoArchivoEconomicoSocial');
    }

    public function subirRespuestaEconomicoSocial(Request $request)
    {     
      try { 

      $nameArchivo = null;
      $html = "";

      if ($request->session()->get("nameArchivoViviendaEconomicoSocial")) {
          $nameArchivo = $request->session()->get("nameArchivoEconomicoSocial");
      }   

      Excel::load('Storage/app/public/'.$nameArchivo, function($reader)
      {
        $booleanMunicipio = False;
        $booleanAño = False;
        $data1 = array();
        $data2 = array();
        $data3 = array();
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

          	$resultados = Economicosocial::where(DB::raw('YEAR(anioES)'), $result->anio)
          				->limit(1)
						->get();
		    foreach ($resultados as $resultado) {
		      $booleanAño = True;
		    }

		    if ($booleanAño = False) {
		    	
	            $data1[] = array('anioEs' => $result->anio.'/01/01 00:00:00',
	                           'numHecSemBos' => $result->numero_de_hectareas_sembradas_con_bosque,
						        'areAgrCosTot' => $result->area_agricola_cosechada_total,
						        'proAgrTot' => $result->produccion_agricola_total,
						        'proCar' => $result->produccion_de_carbon,
						        'invBovTotMac' => $result->inventario_bovinos_total_machos,
						        'invBovTotHem' => $result->inventario_bovinos_total_hembras,
						        'invBovTot' => $result->inventario_bovinos_total,
						        'incIpmTot' => $result->incidencia_imp_total,
						        'incIpmRur' => $result->incidencia_imp_rural,
						        'incIpmUrb' => $result->incidencia_imp_urbana,
	                           'municipio_id' => $id,
	                           'created_at' => $time,
	                           'updated_at' => $time);

	           	Economicosocial::insert($data1);

	           	$resultados = Economicosocial::orderBy('id', 'desc')
							->limit(1)
							->get();
				foreach ($resultados as $resultado) {
					$economicosocial_id = $resultado->id;
				}

			    $data2[] = array('uniCom' => $result->unidades_comerciales,
						        'uniSer' => $result->unidades_de_servicios,
						        'uniGraCom' => $result->unidades_grande_comerciales,
						        'uniGraInd' => $result->unidades_grande_industria,
						        'uniGraSer' => $result->unidades_grande_servicios,
						        'uniInd' => $result->unidades_industria,
						        'uniMedCom' => $result->unidades_media_comerciales,
						        'uniMedInd' => $result->unidades_media_industria,
						        'uniMedSer' => $result->unidades_media_servicios,
						        'uniMicCom' => $result->unidades_micro_comerciales,
						        'uniMicInd' => $result->unidades_micro_industria,
						        'uniMicSer' => $result->unidades_micro_servicios,
						        'uniPeqCom' => $result->unidades_pequeña_comerciales,
						        'uniPeqInd' => $result->unidades_pequeña_industria,
						        'uniPeqSer' => $result->uniPeqSer,
	                           'economicosocial_id' => $unidades_pequeña_servicios,
	                           'created_at' => $time,
	                           'updated_at' => $time);


			    $data3[] = array('altTasDepEco' => $result->alta_tasa_dependencia_economica,
						        'ana' => $result->analfabetismo,
						        'bajLogEdu' => $result->bajo_logro_educativo,
						        'barAccSerSal' => $result->barreras_de_acceso_a_servicio_de_salud,
						        'barAccSerCiu' => $result->barreras_de_acceso_a_servicios_para_cuidados_de_la_primera_infancia,
						        'empInf' => $result->empleo_informal,
						        'hac' => $result->hacinamiento,
						        'inaEliExc' => $result->inadecuacion_eliminacion_de_excretas,
						        'inaEsc' => $result->inasistencia_escolar,
						        'parIna' => $result->paredes_inadecuadas,
						        'pisIna' => $result->pisos_inadecuados,
						        'rezEsc' => $result->rezago_escolar,
						        'sinAccFueAgMej' => $result->sin_acceso_a_fuente_de_agua_mejorada,
						        'sinAseSal' => $result->sin_aseguramiento_en_salud,
						        'traInf' => $result->trabajo_infantil,
	                           'economicosocial_id' => $economicosocial_id,
	                           'created_at' => $time,
	                           'updated_at' => $time);

			    Unidadcomercial::insert($data2);
			    Indicepobrezamultidimensional::insert($data3);

			    $data1 = array();
			    $data2 = array();
			    $data3 = array();

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

    public function descargarViviendaEconomicoSocial(Request $request)
    {
      $data = array();

      Excel::create('EconomicoSocial', function($excel) {
 
          $excel->sheet('Importar', function($sheet) {

              $data[] = array('año' => "",
              				'municipio' => "",
              				 'numero_de_hectareas_sembradas_con_bosque' => "",
						        'area_agricola_cosechada_total' => "",
						        'produccion_agricola_total' => "",
						        'produccion_de_carbon' => "",
						        'inventario_bovinos_total_machos' => "",
						        'inventario_bovinos_total_hembras' => "",
						        'inventario_bovinos_total' => "",
						        'incidencia_imp_total' => "",
						        'incidencia_imp_rural' => "",
						        'incidencia_imp_urbana' => "",
						        'unidades_comerciales' => "",
						        'unidades_de_servicios' => "",
						        'unidades_grande_comerciales' => "",
						        'unidades_grande_industria' => "",
						        'unidades_grande_servicios' => "",
						        'unidades_industria' => "",
						        'unidades_media_comerciales' => "",
						        'unidades_media_industria' => "",
						        'unidades_media_servicios' => "",
						        'unidades_micro_comerciales' => "",
						        'unidades_micro_industria' => "",
						        'unidades_micro_servicios' => "",
						        'unidades_pequeña_comerciales' => "",
						        'unidades_pequeña_industria' => "",
						        'unidades_pequeña_servicios' => "",
						        'alta_tasa_dependencia_economica' => "",
						        'analfabetismo' => "",
						        'bajo_logro_educativo' => "",
						        'barreras_de_acceso_a_servicio_de_salud' => "",
						        'barreras_de_acceso_a_servicios_para_cuidados_de_la_primera_infancia' => "",
						        'empleo_informal' => "",
						        'hacinamiento' => "",
						        'inadecuacion_eliminacion_de_excretas' => "",
						        'inasistencia_escolar' => "",
						        'paredes_inadecuadas' => "",
						        'pisos_inadecuados' => "",
						        'rezago_escolar' => "",
						        'sin_acceso_a_fuente_de_agua_mejorada' => "",
						        'sin_aseguramiento_en_salud' => "",
						        'trabajo_infantil' => "");

              $sheet->fromArray($data);

          });
      })->export('xls');
    }

}

