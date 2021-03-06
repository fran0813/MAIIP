<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use Storage;
use File;
use \Response;
use App\Economicosocial;
use App\Unidadcomercial;
use App\Indicepobrezamultidimensional;
use App\Municipio;
use Barryvdh\DomPDF\Facade as PDF;

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
			$economico_social_create->anioES = $comprobar.'/01/01 00:00';
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
				['Año', 'Incidencia IPM total', 'Incidencia IPM rural', 'Incidencia IPM urbano'],";

		$resultados = Economicosocial::select(DB::raw('YEAR(anioES) as YEARanioES'),
								'economicosocial.incIpmTot',
								'economicosocial.incIpmRur',
								'economicosocial.incIpmUrb')
						->where('economicosocial.municipio_id', $idMunicipio)
						->where(DB::raw('YEAR(anioES)'), $anioES)
						->get();
		foreach ($resultados as $resultado) {
			$anio = $resultado->YEARanioES;
			$incIpmTot = $resultado->incIpmTot;
			$incIpmRur = $resultado->incIpmRur;
			$incIpmUrb = $resultado->incIpmUrb;

			$html .= "['$anio', $incIpmTot, $incIpmRur, $incIpmUrb],";
		}

		$html .= "]);";

		$html .= "// Set chart options
		        	var options = {	title: 'Incidencia IPM',
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
				['Año', 'Alta tasa de dependencia económica',
				 'Analfabetismo',
				 'Bajo logro educativo',
				 'Barreras de acceso a servicio de salud',
				 'Barreras de acceso a servicios para cuidado de la primera infancia',
				 'AnalfabeEmpleo informaltismo',
				 'Hacinamiento',
				 'Inadecuada eliminación de excretas',
				 'Inasistencia escolar',
				 'Paredes inadecuadas',
				 'Pisos inadecuados',
				 'Rezago escolar',
				 'Sin acceso a fuente de agua mejorada',
				 'Sin aseguramiento en salud',
				 'Trabajo infantil'],";

		$resultados = Economicosocial::join('indicepobrezamultidimensional', 'economicosocial.id', 'indicepobrezamultidimensional.economicosocial_id')
						->select(DB::raw('YEAR(anioES) as YEARanioES'),
								'indicepobrezamultidimensional.*')
						->where('economicosocial.municipio_id', $idMunicipio)
						->where(DB::raw('YEAR(anioES)'), $anioES)
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
		        	var options = {	title: 'Incidencia IPM por componentes',
		        					bar: {groupWidth: '20%'},
			        				legend: { position: 'rigth' },
			        				colors: ['#e9473f', '#397ACB', '#F8EF01']};";	

		$html .= "// Instantiate and draw our chart, passing in some options.
		        var chart = new google.visualization.ColumnChart(document.getElementById('columnchart_values2'));
		        chart.draw(data, options);";

		$html .= "}";

		$html .= "</script>";

		$html .= "<div id='columnchart_values2' style='width: 900px; height: 300px;'></div>
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

		$html .= "<div class='col-sm-6 col-md-6 col-lg-6'>

				<table class='table table-bordered table-hover'>
				<thead class='thead-s'>
				<tr>
				<th>Unidades comerciales</th>
				<th>Valores</th>
				</tr>
				</thead>
				<tbody>
				<tr class='border-dotted'>
				<td>Unidades comerciales</td>";

		$resultados = Economicosocial::join('unidadcomercial', 'economicosocial.id', 'unidadcomercial.economicosocial_id')
			->join('indicepobrezamultidimensional', 'economicosocial.id', 'indicepobrezamultidimensional.economicosocial_id')
			->select('economicosocial.id',
					DB::raw('YEAR(anioES) as YEARanioES'),
					'economicosocial.numHecSemBos',
			        'economicosocial.areAgrCosTot',
			        'economicosocial.proAgrTot',
			        'economicosocial.proCar',
			        'economicosocial.invBovTotMac',
			        'economicosocial.invBovTotHem',
			        'economicosocial.invBovTot',
			        'economicosocial.incIpmTot',
			        'economicosocial.incIpmRur',
			        'economicosocial.incIpmUrb',
					'unidadcomercial.*',
					'indicepobrezamultidimensional.*')
            ->where('economicosocial.municipio_id', $idMunicipio)
            ->where(DB::raw('YEAR(anioES)'), $anioES)
            ->get();
		foreach ($resultados as $resultado) {
			$uniCom = $resultado->uniCom;

			if ($uniCom == 0) {
	        	$uniCom = "N.D";
	        }

			$html .= "<td>$uniCom</td>";

		};

		$html .= "</tr>
				<tr class='border-dotted'>
				<td>Unidades de servicios</td>";

		foreach ($resultados as $resultado) {
			$uniSer = $resultado->uniSer;

			if ($uniSer == 0) {
	        	$uniSer = "N.D";
	        }

			$html .= "<td>$uniSer</td>";

		};

		$html .= "</tr>
				<tr class='border-dotted'>
				<td>Unidades grande comerciales</td>";

		foreach ($resultados as $resultado) {
			$uniGraCom = $resultado->uniGraCom;

			if ($uniGraCom == 0) {
	        	$uniGraCom = "N.D";
	        }

			$html .= "<td>$uniGraCom</td>";

		};

		$html .= "</tr>
				<tr class='border-dotted'>
				<td>Unidades grande industria</td>";

		foreach ($resultados as $resultado) {
			$uniGraInd = $resultado->uniGraInd;

			if ($uniGraInd == 0) {
	        	$uniGraInd = "N.D";
	        }

			$html .= "<td>$uniGraInd</td>";

		};

		$html .= "</tr>
				<tr class='border-dotted'>
				<td>Unidades grande servicios</td>";

		foreach ($resultados as $resultado) {
			$uniGraSer = $resultado->uniGraSer;

			if ($uniGraSer == 0) {
	        	$uniGraSer = "N.D";
	        }

			$html .= "<td>$uniGraSer</td>";

		};

		$html .= "</tr>
				<tr class='border-dotted'>
				<td>Unidades industriales</td>";

		foreach ($resultados as $resultado) {
			$uniInd = $resultado->uniInd;

			if ($uniInd == 0) {
	        	$uniInd = "N.D";
	        }

			$html .= "<td>$uniInd</td>";

		};

		$html .= "</tr>
				<tr class='border-dotted'>
				<td>Unidades mediana comerciales</td>";

		foreach ($resultados as $resultado) {
			$uniMedCom = $resultado->uniMedCom;

			if ($uniMedCom == 0) {
	        	$uniMedCom = "N.D";
	        }

			$html .= "<td>$uniMedCom</td>";

		};

		$html .= "</tr>
				<tr class='border-dotted'>
				<td>Unidades mediana industria</td>";

		foreach ($resultados as $resultado) {
			$uniMedInd = $resultado->uniMedInd;

			if ($uniMedInd == 0) {
	        	$uniMedInd = "N.D";
	        }

			$html .= "<td>$uniMedInd</td>";

		};

		$html .= "</tr>
				<tr class='border-dotted'>
				<td>Unidades mediana servicios</td>";

		foreach ($resultados as $resultado) {
			$uniMedSer = $resultado->uniMedSer;

			if ($uniMedSer == 0) {
	        	$uniMedSer = "N.D";
	        }

			$html .= "<td>$uniMedSer</td>";

		};

		$html .= "</tr>
				<tr class='border-dotted'>
				<td>Unidades micro comerciales</td>";

		foreach ($resultados as $resultado) {
			$uniMicCom = $resultado->uniMicCom;

			if ($uniMicCom == 0) {
	        	$uniMicCom = "N.D";
	        }

			$html .= "<td>$uniMicCom</td>";

		};

		$html .= "</tr>
				<tr class='border-dotted'>
				<td>Unidades micro industria</td>";

		foreach ($resultados as $resultado) {
			$uniMicInd = $resultado->uniMicInd;

			if ($uniMicInd == 0) {
	        	$uniMicInd = "N.D";
	        }

			$html .= "<td>$uniMicInd</td>";

		};

		$html .= "</tr>
				<tr class='border-dotted'>
				<td>Unidades micro servicios</td>";

		foreach ($resultados as $resultado) {
			$uniMicSer = $resultado->uniMicSer;

			if ($uniMicSer == 0) {
	        	$uniMicSer = "N.D";
	        }

			$html .= "<td>$uniMicSer</td>";

		};

		$html .= "</tr>
				<tr class='border-dotted'>
				<td>Unidades pequeña comerciales</td>";

		foreach ($resultados as $resultado) {
			$uniPeqCom = $resultado->uniPeqCom;

			if ($uniPeqCom == 0) {
	        	$uniPeqCom = "N.D";
	        }

			$html .= "<td>$uniPeqCom</td>";

		};

		$html .= "</tr>
				<tr class='border-dotted'>
				<td>Unidades pequeña industria</td>";

		foreach ($resultados as $resultado) {
			$uniPeqInd = $resultado->uniPeqInd;

			if ($uniPeqInd == 0) {
	        	$uniPeqInd = "N.D";
	        }

			$html .= "<td>$uniPeqInd</td>";

		};

		$html .= "</tr>
				<tr class='border-dotted'>
				<td>Unidades pequeña Servicios</td>";

		foreach ($resultados as $resultado) {
			$uniPeqSer = $resultado->uniPeqSer;

			if ($uniPeqSer == 0) {
	        	$uniPeqSer = "N.D";
	        }

			$html .= "<td>$uniPeqSer</td>";

		};

		$html .= "</tr>
				</tbody>
				</table>

				</div>";

		$html .= "<div class='col-sm-6 col-md-6 col-lg-6'>

				<table class='table table-bordered table-hover'>
				<thead class='thead-s'>
				<tr>
				<th>Índice de pobreza multidimensional por componentes</th>
				<th>Valores</th>
				</tr>
				</thead>
				<tbody>
				<tr class='border-dotted'>
				<td>Alta tasa de dependencia económica</td>";

		foreach ($resultados as $resultado) {
			$altTasDepEco = $resultado->altTasDepEco;

			if ($altTasDepEco == 0) {
	        	$altTasDepEco = "N.D";
	        }

			$html .= "<td>$altTasDepEco</td>";

		};

		$html .= "</tr>
				<tr class='border-dotted'>
				<td>Analfabetismo</td>";

		foreach ($resultados as $resultado) {
			$ana = $resultado->ana;

			if ($ana == 0) {
	        	$ana = "N.D";
	        }

			$html .= "<td>$ana</td>";
		};

		$html .= "</tr>
				<tr class='border-dotted'>
				<td>Bajo logro educativo</td>";

		foreach ($resultados as $resultado) {
			$bajLogEdu = $resultado->bajLogEdu;

			if ($bajLogEdu == 0) {
	        	$bajLogEdu = "N.D";
	        }

			$html .= "<td>$bajLogEdu</td>";
		};

		$html .= "</tr>
				<tr class='border-dotted'>
				<td>Barreras de acceso a servicio de salud</td>";

		foreach ($resultados as $resultado) {
			$barAccSerSal = $resultado->barAccSerSal;

			if ($barAccSerSal == 0) {
	        	$barAccSerSal = "N.D";
	        }

			$html .= "<td>$barAccSerSal</td>";
		};

		$html .= "</tr>
				<tr class='border-dotted'>
				<td>Barreras de acceso a servicios para cuidado de la primera infancia</td>";

		foreach ($resultados as $resultado) {
			$barAccSerCiu = $resultado->barAccSerCiu;

			if ($barAccSerCiu == 0) {
	        	$barAccSerCiu = "N.D";
	        }

			$html .= "<td>$barAccSerCiu</td>";
		};

		$html .= "</tr>
				<tr class='border-dotted'>
				<td>Empleo informal</td>";

		foreach ($resultados as $resultado) {
			$empInf = $resultado->empInf;

			if ($empInf == 0) {
	        	$empInf = "N.D";
	        }

			$html .= "<td>$empInf</td>";
		};

		$html .= "</tr>
				<tr class='border-dotted'>
				<td>Hacinamiento</td>";

		foreach ($resultados as $resultado) {
			$hac = $resultado->hac;

			if ($hac == 0) {
	        	$hac = "N.D";
	        }

			$html .= "<td>$hac</td>";
		};

		$html .= "</tr>
				<tr class='border-dotted'>
				<td>Inadecuada eliminación de excretas</td>";

		foreach ($resultados as $resultado) {
			$inaEliExc = $resultado->inaEliExc;

			if ($inaEliExc == 0) {
	        	$inaEliExc = "N.D";
	        }

			$html .= "<td>$inaEliExc</td>";
		};

		$html .= "</tr>
				<tr class='border-dotted'>
				<td>Inasistencia escolar</td>";

		foreach ($resultados as $resultado) {
			$inaEsc = $resultado->inaEsc;

			if ($inaEsc == 0) {
	        	$inaEsc = "N.D";
	        }

			$html .= "<td>$inaEsc</td>";
		};

		$html .= "</tr>
				<tr class='border-dotted'>
				<td>Paredes inadecuadas</td>";

		foreach ($resultados as $resultado) {
			$parIna = $resultado->parIna;

			if ($parIna == 0) {
	        	$parIna = "N.D";
	        }

			$html .= "<td>$parIna</td>";
		};

		$html .= "</tr>
				<tr class='border-dotted'>
				<td>Pisos inadecuados</td>";

		foreach ($resultados as $resultado) {
			$pisIna = $resultado->pisIna;

			if ($pisIna == 0) {
	        	$pisIna = "N.D";
	        }

			$html .= "<td>$pisIna</td>";
		};

		$html .= "</tr>
				<tr class='border-dotted'>
				<td>Rezago escolar</td>";

		foreach ($resultados as $resultado) {
			$rezEsc = $resultado->rezEsc;

			if ($rezEsc == 0) {
	        	$rezEsc = "N.D";
	        }

			$html .= "<td>$rezEsc</td>";
		};

		$html .= "</tr>
				<tr class='border-dotted'>
				<td>Sin acceso a fuente de agua mejorada</td>";

		foreach ($resultados as $resultado) {
			$sinAccFueAgMej = $resultado->sinAccFueAgMej;

			if ($sinAccFueAgMej == 0) {
	        	$sinAccFueAgMej = "N.D";
	        }

			$html .= "<td>$sinAccFueAgMej</td>";
		};

		$html .= "</tr>
				<tr class='border-dotted'>
				<td>Sin aseguramiento en salud</td>";

		foreach ($resultados as $resultado) {
			$sinAseSal = $resultado->sinAseSal;

			if ($sinAseSal == 0) {
	        	$sinAseSal = "N.D";
	        }

			$html .= "<td>$sinAseSal</td>";
		};

		$html .= "</tr>
				<tr class='border-dotted'>
				<td>Trabajo infantil</td>";

		foreach ($resultados as $resultado) {
			$traInf = $resultado->traInf;

			if ($traInf == 0) {
	        	$traInf = "N.D";
	        }

			$html .= "<td>$traInf</td>";
		};

		$html .= "</tr>
				</tbody>
				</table>

				</div>";

		$html .= "<div class='col-sm-12 col-md-12 col-lg-12'></div>
				<div class='col-sm-6 col-md-6 col-lg-6'>

				<table class='table table-bordered table-hover'>
				<thead class='thead-s'>
				<tr>
				<th>Economico-social</th>
				<th>Valores</th>
				</tr>
				</thead>
				<tbody>
				<tr class='border-dotted'>
				<td>Número de hectáreas sembradas con bosques por municipio área en bosques total</td>";

		foreach ($resultados as $resultado) {
			$numHecSemBos = $resultado->numHecSemBos;

			if ($numHecSemBos == 0) {
	        	$numHecSemBos = "N.D";
	        }

			$html .= "<td>$numHecSemBos</td>";

		};

		$html .= "</tr>
				<tr class='border-dotted'>
				<td>Área agrícola cosechada total</td>";

		foreach ($resultados as $resultado) {
			$areAgrCosTot = $resultado->areAgrCosTot;

			if ($areAgrCosTot == 0) {
	        	$areAgrCosTot = "N.D";
	        }

			$html .= "<td>$areAgrCosTot</td>";
		}

		$html .= "</tr>
				<tr class='border-dotted'>
				<td>Producción agrícola total</td>";

		foreach ($resultados as $resultado) {
			$proAgrTot = $resultado->proAgrTot;

			if ($proAgrTot == 0) {
	        	$proAgrTot = "N.D";
	        }

			$html .= "<td>$proAgrTot</td>";
		}

		$html .= "</tr>
				<tr class='border-dotted'>
				<td>Producción de carbón</td>";

		foreach ($resultados as $resultado) {
			$proCar = $resultado->proCar;

			if ($traInf == 0) {
	        	$traInf = "N.D";
	        }

			$html .= "<td>$proCar</td>";
		}

		$html .= "</tr>
				<tr class='border-dotted'>
				<td>Inventario bovinos total machos</td>";

		foreach ($resultados as $resultado) {
			$invBovTotMac = $resultado->invBovTotMac;

			if ($invBovTotMac == 0) {
	        	$invBovTotMac = "N.D";
	        }

			$html .= "<td>$invBovTotMac</td>";
		}

		$html .= "</tr>
				<tr class='border-dotted'>
				<td>Inventario bovinos total hembras</td>";

		foreach ($resultados as $resultado) {
			$invBovTotHem = $resultado->invBovTotHem;

			if ($invBovTotHem == 0) {
	        	$invBovTotHem = "N.D";
	        }

			$html .= "<td>$invBovTotHem</td>";
		}

		$html .= "</tr>
				<tr class='border-dotted'>
				<td>Inventario bovinos total</td>";

		foreach ($resultados as $resultado) {
			$invBovTot = $resultado->invBovTot;

			if ($invBovTot == 0) {
	        	$invBovTot = "N.D";
	        }

			$html .= "<td>$invBovTot</td>";
		}

		$html .= "</tr>
				<tr class='border-dotted'>
				<td>Incidencia IPM total</td>";

		foreach ($resultados as $resultado) {
			$incIpmTot = $resultado->incIpmTot;

			if ($incIpmTot == 0) {
	        	$incIpmTot = "N.D";
	        }

			$html .= "<td>$incIpmTot</td>";
		}

		$html .= "</tr>
				<tr class='border-dotted'>
				<td>Incidencia IPM urbano</td>";

		foreach ($resultados as $resultado) {
			$incIpmUrb = $resultado->incIpmUrb;

			if ($incIpmUrb == 0) {
	        	$incIpmUrb = "N.D";
	        }

			$html .= "<td>$incIpmUrb</td>";
		}

		$html .= "</tr>
				<tr class='border-dotted'>
				<td>Incidencia IPM urbano</td>";

		foreach ($resultados as $resultado) {
			$incIpmRur = $resultado->incIpmRur;

			if ($incIpmRur == 0) {
	        	$incIpmRur = "N.D";
	        }

			$html .= "<td>$incIpmRur</td>";
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
				<th>Área agrícola cosechada total</th>
				<th>Producción agrícola total</th>
				<th>Producción de carbón</th>
				<th>Funciones</th>
				</tr>
				</thead>
				<tbody>";

		$resultados = Economicosocial::join('unidadcomercial', 'economicosocial.id', 'unidadcomercial.economicosocial_id')
			->join('indicepobrezamultidimensional', 'economicosocial.id', 'indicepobrezamultidimensional.economicosocial_id')
			->select('economicosocial.id',
					DB::raw('YEAR(anioES) as YEARanioES'),
					'economicosocial.numHecSemBos',
			        'economicosocial.areAgrCosTot',
			        'economicosocial.proAgrTot',
			        'economicosocial.proCar',
			        'economicosocial.invBovTotMac',
			        'economicosocial.invBovTotHem',
			        'economicosocial.invBovTot',
			        'economicosocial.incIpmTot',
			        'economicosocial.incIpmRur',
			        'economicosocial.incIpmUrb',
					'unidadcomercial.*',
					'indicepobrezamultidimensional.*')
            ->where('economicosocial.municipio_id', $idMunicipio)
						->orderBy('anioES')
						->get();
		foreach ($resultados as $resultado) {
			$id = $resultado->id;
			$anio = $resultado->YEARanioES;
			$areAgrCosTot = $resultado->areAgrCosTot;
			$proAgrTot = $resultado->proAgrTot;
			$proCar = $resultado->proCar;

			$html .= "<tr>
					<td>$anio</td>
					<td>$areAgrCosTot</td>
					<td>$proAgrTot</td>
					<td>$proCar</td>
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
      Storage::disk('form')->put($name,  File::get($file));

      $request->session()->put('nameArchivoEconomicoSocial', $name);

      return redirect('/admin/subiendoArchivoEconomicoSocial');
    }

    public function subirRespuestaEconomicoSocial(Request $request)
    {     
      try { 

      $nameArchivo = null;
      $html = "";

      if ($request->session()->get("nameArchivoEconomicoSocial")) {
          $nameArchivo = $request->session()->get("nameArchivoEconomicoSocial");
      }   

      Excel::load('public/excel/'.$nameArchivo, function($reader)
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
          	->where('municipio_id', $id)
          				->limit(1)
						->get();
		    foreach ($resultados as $resultado) {
		      $booleanAño = True;
		    }

		    if ($booleanAño == False) {
		    	
		    	$invBovTot = $result->inventario_bovinos_total_machos_double + $result->inventario_bovinos_total_hembras;
		    	$incIpmTot = $result->incidencia_ipm_rural_double + $result->incidencia_ipm_urbano_double;
	            $data1[] = array('anioES' => $result->anio.'/01/01 00:00:00',
	                           'numHecSemBos' => $result->numero_de_hectareas_sembradas_con_bosques_por_municipio_area_en_bosques_total_double,
							'areAgrCosTot' => $result->area_agricola_cosechada_total_double,		
							'proAgrTot' => $result->produccion_agricola_total_double,				
							'proCar' => $result->produccion_de_carbon_double,						
							'invBovTotMac' => $result->inventario_bovinos_total_machos_double,	
							'invBovTotHem' => $result->inventario_bovinos_total_hembras_double,
							'invBovTot' => $invBovTot,			
							'incIpmTot' => $incIpmTot,				
							'incIpmRur' => $result->incidencia_ipm_rural_double,
							'incIpmUrb' => $result->incidencia_ipm_urbano_double,						
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

			    $data2[] = array('uniCom' => $result->unidades_comerciales_integer,			
					'uniSer' => $result->unidades_de_servicios_integer,				
					'uniGraCom' => $result->unidades_grande_comerciales_integer,					
					'uniGraInd' => $result->unidades_grande_industria_integer,					
					'uniGraSer' => $result->unidades_grande_servicios_integer,					
					'uniInd' => $result->unidades_industriales_integer,		
					'uniMedCom' => $result->unidades_mediana_comerciales_integer,				
					'uniMedInd' => $result->unidades_mediana_industria_integer,					
					'uniMedSer' => $result->unidades_mediana_servicios_integer,					
					'uniMicCom' => $result->unidades_micro_comerciales_integer,				
					'uniMicInd' => $result->unidades_micro_industria_integer,						
					'uniMicSer' => $result->unidades_micro_servicios_integer,						
					'uniPeqCom' => $result->unidades_pequenia_comerciales_integer,				
					'uniPeqInd' => $result->unidades_pequenia_industria_integer,					
					'uniPeqSer' => $result->unidades_pequenia_servicios_integer,	
	                           'economicosocial_id' => $economicosocial_id,
	                           'created_at' => $time,
	                           'updated_at' => $time);


			    $data3[] = array('altTasDepEco' => $result->alta_tasa_de_dependencia_economica_double,
					'ana' => $result->analfabetismo_double,	
					'bajLogEdu' => $result->bajo_logro_educativo_double,	
					'barAccSerSal' => $result->barreras_de_acceso_a_servicio_de_salud_double,	
					'barAccSerCiu' => $result->barreras_de_acceso_a_servicios_para_cuidado_de_la_primera_infancia_double,	
					'empInf' => $result->empleo_informal_double,		
					'hac' => $result->hacinamiento_double,	
					'inaEliExc' => $result->inadecuada_eliminacion_de_excretas_double,	
					'inaEsc' => $result->inasistencia_escolar_double,					
					'parIna' => $result->paredes_inadecuadas_double,					
					'pisIna' => $result->pisos_inadecuados_double,					
					'rezEsc' => $result->rezago_escolar_double,					
					'sinAccFueAgMej' => $result->sin_acceso_a_fuente_de_agua_mejorada_double,
					'sinAseSal' => $result->sin_aseguramiento_en_salud_double,				
					'traInf' => $result->trabajo_infantil_double,
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

		$booleanAño = False;

        }
      });

      } catch (Exception $e) {

        // $html .= "<h1 class='text-center' style='margin-top: 0px;''>currio un error.$e</h1>";

      }

      // return Response::json(array('html' => $html, 'boolean' => $booleanMunicipio));
    }

    public function descargarEconomicoSocial(Request $request)
    {
      $data = array();

      Excel::create('EconomicoSocial', function($excel) {
 
          $excel->sheet('Importar', function($sheet) {

              $data[] = array('anio' => "", 
                     		'municipio' => "",           				 
					'unidades_comerciales_integer' => "",		
					'unidades_de_servicios_integer' => "",			
					'unidades_grande_comerciales_integer' => "",				
					'unidades_grande_industria_integer' => "",				
					'unidades_grande_servicios_integer' => "",				
					'unidades_industriales_integer' => "",	
					'unidades_mediana_comerciales_integer' => "",				
					'unidades_mediana_industria_integer' => "",							
					'unidades_mediana_servicios_integer' => "",								
					'unidades_micro_comerciales_integer' => "",								
					'unidades_micro_industria_integer' => "",								
					'unidades_micro_servicios_integer' => "",								
					'unidades_pequenia_comerciales_integer' => "",							
					'unidades_pequenia_industria_integer' => "",								
					'unidades_pequenia_servicios_integer' => "",				
					'alta_tasa_de_dependencia_economica_double' => "",						
					'analfabetismo_double' => "",				
					'bajo_logro_educativo_double' => "",				
					'barreras_de_acceso_a_servicio_de_salud_double' => "",				
					'barreras_de_acceso_a_servicios_para_cuidado_de_la_primera_infancia_double' => "",				
					'empleo_informal_double' => "",					
					'hacinamiento_double' => "",				
					'inadecuada_eliminacion_de_excretas_double' => "",						
					'inasistencia_escolar_double' => "",								
					'paredes_inadecuadas_double' => "",								
					'pisos_inadecuados_double' => "",								
					'rezago_escolar_double' => "",								
					'sin_acceso_a_fuente_de_agua_mejorada_double' => "",				
					'sin_aseguramiento_en_salud_double' => "",							
					'trabajo_infantil_double' => "",				
					'numero_de_hectareas_sembradas_con_bosques_por_municipio_area_en_bosques_total_double' => "",	
					'area_agricola_cosechada_total_double' => "",								
					'produccion_agricola_total_double' => "",								
					'produccion_de_carbon_double' => "",								
					'inventario_bovinos_total_machos_double' => "",					
					'inventario_bovinos_total_hembras_double' => "",									
					'incidencia_ipm_urbano_double' => "",								
					'incidencia_ipm_rural_double' => "",
					);

              $sheet->fromArray($data);

          });
      })->export('xls');
    }

    // nuevo
    public function pdf(Request $request)
	{

		$año1 = $request->input('date1');
		$id = $request->input('municipio');

		$resultados = Economicosocial::join('unidadcomercial', 'economicosocial.id', 'unidadcomercial.economicosocial_id')
			->join('indicepobrezamultidimensional', 'economicosocial.id', 'indicepobrezamultidimensional.economicosocial_id')
			->select('economicosocial.id',
					DB::raw('YEAR(anioES) as YEARanioES'),
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
						->where('municipio_id', $id)
						->where(DB::raw('YEAR(anioES)'), $año1)
						->get();
		foreach ($resultados as $resultado) {
			$id = $resultado->id;
			$anio = $resultado->YEARanioES;
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

			if ($numHecSemBos == 0) {
				$numHecSemBos = "N.D";
			}
	        if ($areAgrCosTot == 0) {
	        	$areAgrCosTot = "N.D";
	        }
	        if ($proAgrTot == 0) {
	        	$proAgrTot = "N.D";
	        }
	        if ($proCar == 0) {
	        	$proCar = "N.D";
	        }
	        if ($invBovTotMac == 0) {
	        	$invBovTotMac = "N.D";
	        }
	        if ($invBovTotHem == 0) {
	        	$invBovTotHem = "N.D";
	        }
	        if ($invBovTot == 0) {
	        	$invBovTot = "N.D";
	        }
	        if ($incIpmTot == 0) {
	        	$incIpmTot = "N.D";
	        }
	        if ($incIpmRur == 0) {
	        	$incIpmRur = "N.D";
	        }
	        if ($incIpmUrb == 0) {
	        	$incIpmUrb = "N.D";
	        }
	        if ($uniCom == 0) {
	        	$uniCom = "N.D";
	        }
	        if ($uniSer == 0) {
	        	$uniSer = "N.D";
	        }
	        if ($uniGraCom == 0) {
	        	$uniGraCom = "N.D";
	        }
	        if ($uniGraInd == 0) {
	        	$uniGraInd = "N.D";
	        }
	        if ($uniGraSer == 0) {
	        	$uniGraSer = "N.D";
	        }
	        if ($uniInd == 0) {
	        	$uniInd = "N.D";
	        }
	        if ($uniMedCom == 0) {
	        	$uniMedCom = "N.D";
	        }
	        if ($uniMedInd == 0) {
	        	$uniMedInd = "N.D";
	        }
	        if ($uniMedSer == 0) {
	        	$uniMedSer = "N.D";
	        }
	        if ($uniMicCom == 0) {
	        	$uniMicCom = "N.D";
	        }
	        if ($uniMicInd == 0) {
	        	$uniMicInd = "N.D";
	        }
	        if ($uniMicSer == 0) {
	        	$uniMicSer = "N.D";
	        }
	        if ($uniPeqCom == 0) {
	        	$uniPeqCom = "N.D";
	        }
	        if ($uniPeqInd == 0) {
	        	$uniPeqInd = "N.D";
	        }
	        if ($uniPeqSer == 0) {
	        	$uniPeqSer = "N.D";
	        }
	        if ($altTasDepEco == 0) {
	        	$altTasDepEco = "N.D";
	        }
	        if ($ana == 0) {
	        	$ana = "N.D";
	        }
	        if ($bajLogEdu == 0) {
	        	$bajLogEdu = "N.D";
	        }
	        if ($barAccSerSal == 0) {
	        	$barAccSerSal = "N.D";
	        }
	        if ($barAccSerCiu == 0) {
	        	$barAccSerCiu = "N.D";
	        }
	        if ($empInf == 0) {
	        	$empInf = "N.D";
	        }
	        if ($hac == 0) {
	        	$hac = "N.D";
	        }
	        if ($inaEliExc == 0) {
	        	$inaEliExc = "N.D";
	        }
	        if ($inaEsc == 0) {
	        	$inaEsc = "N.D";
	        }
	        if ($parIna == 0) {
	        	$parIna = "N.D";
	        }
	        if ($pisIna == 0) {
	        	$pisIna = "N.D";
	        }
	        if ($rezEsc == 0) {
	        	$rezEsc = "N.D";
	        }
	        if ($sinAccFueAgMej == 0) {
	        	$sinAccFueAgMej = "N.D";
	        }
	        if ($sinAseSal == 0) {
	        	$sinAseSal = "N.D";
	        }
	        if ($traInf == 0) {
	        	$traInf = "N.D";
	        }
		}

		$data =  [
            'id' => $id,
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
        ];

		$pdf = PDF::loadView('user.pdf.pdfES', compact('data'));
		return $pdf->stream('Economicosocial.pdf');
	}

}

