<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use Storage;
use File;
use \Response;
use App\Educacion;
use App\Matriculaporgenero;
use App\Matriculapornivel;
use App\Municipio;
use Barryvdh\DomPDF\Facade as PDF;

class EducacionController extends Controller
{
    public function actualizarEducacion(Request $request)
    {
		$idE = $_POST['idE'];
		$rurJardin = $_POST['rurJardin'];
		$urbJardin = $_POST['urbJardin'];
		$rurTrans = $_POST['rurTrans'];
		$urbTrans = $_POST['urbTrans'];
		$rurPrim = $_POST['rurPrim'];
		$urbPrim = $_POST['urbPrim'];
		$rurSecu = $_POST['rurSecu'];
		$urbSecu = $_POST['urbSecu'];
		$rurMedia = $_POST['rurMedia'];
		$urbMedia = $_POST['urbMedia'];
		$jardin = $_POST['jardin'];
		$trans = $_POST['trans'];
		$prim = $_POST['prim'];
		$secu = $_POST['secu'];
		$media = $_POST['media'];
		$femenino = $_POST['femenino'];
		$masculino = $_POST['masculino'];

		$educacion_update = Educacion::find($idE);
        $educacion_update->rurJardin = $rurJardin;
        $educacion_update->urbJardin = $urbJardin;
        $educacion_update->rurTrans = $rurTrans;
        $educacion_update->urbTrans = $urbTrans;
        $educacion_update->rurPrim = $rurPrim;
        $educacion_update->urbPrim = $urbPrim;
        $educacion_update->rurSecu = $rurSecu;
        $educacion_update->urbSecu = $urbSecu;
        $educacion_update->rurMedia = $rurMedia;
        $educacion_update->urbMedia = $urbMedia;
        $educacion_update->save();

		$matricula_por_nivel_update = Matriculapornivel::find($idE);
        $matricula_por_nivel_update->jardin = $jardin;
        $matricula_por_nivel_update->trans = $trans;
        $matricula_por_nivel_update->prim = $prim;
        $matricula_por_nivel_update->secu = $secu;
        $matricula_por_nivel_update->media = $media;
        $matricula_por_nivel_update->save();

		$matricula_por_genero_update = Matriculaporgenero::find($idE);
        $matricula_por_genero_update->femenino = $jardin;
        $matricula_por_genero_update->masculino = $masculino;
        $matricula_por_genero_update->save();

		$html = "Se actualizaron los datos correctamente";

		return Response::json(array('html' => $html));
	}

	public function borrarEducacion(Request $request)
	{
		$idE = $_GET['idE'];

		$matricula_por_nivel_delete = Matriculapornivel::find($idE);
        $matricula_por_nivel_delete->delete();

		$matricula_por_genero_delete = Matriculaporgenero::find($idE);
        $matricula_por_genero_delete->delete();

		$educacion_delete = Educacion::find($idE);
        $educacion_delete->delete();

		$html = "Se eliminaron los datos correctamente";

		return Response::json(array('html' => $html));
	}

	public function crearEducacion(Request $request)
	{
		$anioE = $_POST['anioE'];
		$comprobar = $_POST['comprobar'];
		$rurJardin = $_POST['rurJardin'];
		$urbJardin = $_POST['urbJardin'];
		$rurTrans = $_POST['rurTrans'];
		$urbTrans = $_POST['urbTrans'];
		$rurPrim = $_POST['rurPrim'];
		$urbPrim = $_POST['urbPrim'];
		$rurSecu = $_POST['rurSecu'];
		$urbSecu = $_POST['urbSecu'];
		$rurMedia = $_POST['rurMedia'];
		$urbMedia = $_POST['urbMedia'];
		$jardin = $_POST['jardin'];
		$trans = $_POST['trans'];
		$prim = $_POST['prim'];
		$secu = $_POST['secu'];
		$media = $_POST['media'];
		$femenino = $_POST['femenino'];
		$masculino = $_POST['masculino'];
		$municipio_id = $_POST['municipio_id'];
		$ban = False;

		$resultados = Educacion::where(DB::raw('YEAR(anioE)'), $comprobar)
						->get();
		foreach ($resultados as $resultado) {
			$ban = True;
		}

		if($ban == False){

			$educacion_create = new Educacion;
		    $educacion_create->anioE = $comprobar.'/01/01 00:00';
	        $educacion_create->rurJardin = $rurJardin;
	        $educacion_create->urbJardin = $urbJardin;
	        $educacion_create->rurTrans = $rurTrans;
	        $educacion_create->urbTrans = $urbTrans;
	        $educacion_create->rurPrim = $rurPrim;
	        $educacion_create->urbPrim = $urbPrim;
	        $educacion_create->rurSecu = $rurSecu;
	        $educacion_create->urbSecu = $urbSecu;
	        $educacion_create->rurMedia = $rurMedia;
	        $educacion_create->urbMedia = $urbMedia;
	       	$educacion_create->municipio_id = $municipio_id;
		    $educacion_create->save();

			$resultados = Educacion::orderBy('id', 'desc')
						->limit(1)
						->get();
			foreach ($resultados as $resultado) {
				$educacion_id = $resultado->id;
			}

			$matricula_por_nivel_create = new Matriculapornivel;
	        $matricula_por_nivel_create->jardin = $jardin;
	        $matricula_por_nivel_create->trans = $trans;
	        $matricula_por_nivel_create->prim = $prim;
	        $matricula_por_nivel_create->secu = $secu;
	        $matricula_por_nivel_create->media = $media;
	        $matricula_por_nivel_create->educacion_id = $educacion_id;
	        $matricula_por_nivel_create->save();

			$matricula_por_genero_create = new Matriculaporgenero;
	        $matricula_por_genero_create->femenino = $femenino;
	        $matricula_por_genero_create->masculino = $masculino;
	        $matricula_por_genero_create->educacion_id = $educacion_id;
	        $matricula_por_genero_create->save();

			$html = "Se registrarón los datos correctamente";
		} else {
			$html = "Ya se encuentra registrado ese año";
		}

		return Response::json(array('html' => $html));
	}

	public function grafica1Educacion(Request $request)
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
				['Año', 'Femenino', 'Masculino'],";

		$resultados = Educacion::join('matriculaporgenero', 'educacion.id', 'matriculaporgenero.educacion_id')
						->select(DB::raw('YEAR(anioE) as YEARanioE'),
								'matriculaporgenero.femenino',
								'matriculaporgenero.masculino')
						->where('educacion.municipio_id', $idMunicipio)
						->orderBy('educacion.anioE', 'asc')
						->get();
		foreach ($resultados as $resultado) {
			$anio = $resultado->YEARanioE;
			$femenino = $resultado->femenino;
			$masculino = $resultado->masculino;

			$html .= "['$anio', $femenino, $masculino],";
		}

		$html .= "]);";

		$html .= "// Set chart options
		        	var options = {	title: 'Matriculas por genero',
		        					curveType: 'function',
			        				legend: { position: 'rigth' },
			        				colors: ['#e9473f', '#131FBD']};";	

		$html .= "// Instantiate and draw our chart, passing in some options.
		        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
		        chart.draw(data, options);";

		$html .= "}";

		$html .= "</script>";

		$html .= "<div id='curve_chart' style='width: 900px; height: 500px'></div>";

		return Response::json(array('html' => $html));
	}

	public function grafica2Educacion(Request $request)
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
				['Año', 'Jardin', 'Transición', 'Primaria', 'Secundaria', 'Media'],";

		$resultados = Educacion::join('matriculapornivel', 'educacion.id', 'matriculapornivel.educacion_id')
						->select(DB::raw('YEAR(anioE) as YEARanioE'),
								'matriculapornivel.jardin',
								'matriculapornivel.trans',
								'matriculapornivel.prim',
								'matriculapornivel.secu',
								'matriculapornivel.media')
						->where('educacion.municipio_id', $idMunicipio)
						->orderBy('educacion.anioE', 'asc')
						->get();
		foreach ($resultados as $resultado) {
			$anio = $resultado->YEARanioE;
			$jardin = $resultado->jardin;
			$trans = $resultado->trans;
			$prim = $resultado->prim;
			$secu = $resultado->secu;
			$media = $resultado->media;

			$html .= "['$anio', $jardin, $trans, $prim, $secu, $media],";
		}

		$html .= "]);";

		$html .= "// Set chart options
		        	var options = {	title: 'Matriculas por nivel',
		        					curveType: 'function',
			        				legend: { position: 'rigth' },
			        				colors: ['#e9473f', '#397ACB', '#F8EF01']};";	

		$html .= "// Instantiate and draw our chart, passing in some options.
		        var chart = new google.visualization.ColumnChart(document.getElementById('columnchart_values'));
		        chart.draw(data, options);";

		$html .= "}";

		$html .= "</script>";

		$html .= "<div id='columnchart_values' style='width: 900px; height: 300px;'></div>";

		return Response::json(array('html' => $html));
	}

	public function mostrarActualizarEducacion(Request $request)
	{
		$idE = $_POST['idE'];
		$html = "";

		$resultados = Educacion::join('matriculaporgenero', 'educacion.id', 'matriculaporgenero.educacion_id')
						->join('matriculapornivel', 'educacion.id', 'matriculapornivel.educacion_id')
						->select(DB::raw('DATE(anioE) as DATEanioE'),
								'educacion.rurJardin',
								'educacion.urbJardin',
								'educacion.rurTrans',
								'educacion.urbTrans',
								'educacion.rurPrim',
								'educacion.urbPrim',
								'educacion.rurSecu',
								'educacion.urbSecu',
								'educacion.rurMedia',
								'educacion.urbMedia',
								'matriculaporgenero.*',
								'matriculapornivel.*')
						->where('educacion.id', $idE)
						->get();
		foreach ($resultados as $resultado) {

			$id = $resultado->id;
			$anio = $resultado->DATEanioE;

			$rurJardin = $resultado->rurJardin;
			$urbJardin = $resultado->urbJardin;
			$rurTrans = $resultado->rurTrans;
			$urbTrans = $resultado->urbTrans;
			$rurPrim = $resultado->rurPrim;
			$urbPrim = $resultado->urbPrim;
			$rurSecu = $resultado->rurSecu;
			$urbSecu = $resultado->urbSecu;
			$rurMedia = $resultado->rurMedia;
			$urbMedia = $resultado->urbMedia;

			$jardin = $resultado->jardin;
			$trans = $resultado->trans;
			$prim = $resultado->prim;
			$secu = $resultado->secu;
			$media = $resultado->media;

			$femenino = $resultado->femenino;
			$masculino = $resultado->masculino;
		}

		return Response::json(array('id' => $id,
									'anio' => $anio,
									'rurJardin' => $rurJardin,
									'urbJardin' => $urbJardin,
									'rurTrans' => $rurTrans,
									'urbTrans' => $urbTrans,
									'rurPrim' => $rurPrim,
									'urbPrim' => $urbPrim,
									'rurSecu' => $rurSecu,
									'urbSecu' => $urbSecu,
									'rurMedia' => $rurMedia,
									'urbMedia' => $urbMedia,
									'jardin' => $jardin,
									'trans' => $trans,
									'prim' => $prim,
									'secu' => $secu,
									'media' => $media,
									'femenino' => $femenino,
									'masculino' => $masculino,
								));
	}

	public function mostrarEducacion(Request $request)
	{
		$idMunicipio = $_GET['idMunicipio'];
		$html = "";


$html .= "<div class='col-sm-12 col-md-12 col-lg-12 table-wrapper-scroll-x' style='overflow-x: scroll; margin-bottom: 20px;'>";

		$html .= "<table class='table table-bordered table-striped'>

				<table class='table table-bordered table-hover'>
				<thead class='thead-s'>
				<tr>
				<th>Datos</th>";

		$resultados = Educacion::join('matriculaporgenero', 'educacion.id', 'matriculaporgenero.educacion_id')
						->join('matriculapornivel', 'educacion.id', 'matriculapornivel.educacion_id')
						->select(DB::raw('YEAR(anioE) as YEARanioE'),
								'educacion.rurJardin',
								'educacion.urbJardin',
								'educacion.rurTrans',
								'educacion.urbTrans',
								'educacion.rurPrim',
								'educacion.urbPrim',
								'educacion.rurSecu',
								'educacion.urbSecu',
								'educacion.rurMedia',
								'educacion.urbMedia',
								'matriculaporgenero.*',
								'matriculapornivel.*')
						->where('educacion.municipio_id', $idMunicipio)
						->orderBy('educacion.anioE', 'asc')
						->get();
		foreach ($resultados as $resultado) {
			$anio = $resultado->YEARanioE;

			$html .= "<th>$anio</th>";
		}

		$html .= "</tr>
				</thead>
				<tbody>
				<tr class='border-dotted'>
				<td>Prejardin y jardin (rural)</td>";

		foreach ($resultados as $resultado) {
			$rurJardin = $resultado->rurJardin;

			if ($rurJardin == 0) {
				$rurJardin = "N.D";
			}

			$html .= "<td>$rurJardin</td>";

		};

		$html .= "</tr>
					<tr class='border-dotted'>
						<td>Prejardin y jardin (urbano)</td>";

		foreach ($resultados as $resultado) {
			$urbJardin = $resultado->urbJardin;

			if ($urbJardin == 0) {
				$urbJardin = "N.D";
			}

			$html .= "<td>$urbJardin</td>";

		};

		$html .= "</tr>
					<tr class='border-dotted'>
						<td>Transición (rural)</td>";

		foreach ($resultados as $resultado) {
			$rurTrans = $resultado->rurTrans;

			if ($rurTrans == 0) {
				$rurTrans = "N.D";
			}

			$html .= "<td>$rurTrans</td>";

		};

		$html .= "</tr>
					<tr class='border-dotted'>
						<td>Transición (urbano)</td>";

		foreach ($resultados as $resultado) {
			$urbTrans = $resultado->urbTrans;

			if ($urbTrans == 0) {
				$urbTrans = "N.D";
			}

			$html .= "<td>$urbTrans</td>";

		};

		$html .= "</tr>
					<tr class='border-dotted'>
						<td>Primaria (rural)</td>";

		foreach ($resultados as $resultado) {
			$rurPrim = $resultado->rurPrim;

			if ($rurPrim == 0) {
				$rurPrim = "N.D";
			}

			$html .= "<td>$rurPrim</td>";
		};

		$html .= "</tr>
					<tr class='border-dotted'>
						<td>Primaria (urbano)</td>";

		foreach ($resultados as $resultado) {
			$urbPrim = $resultado->urbPrim;

			if ($urbPrim == 0) {
				$urbPrim = "N.D";
			}

			$html .= "<td>$urbPrim</td>";

		};

		$html .= "</tr>
					<tr class='border-dotted'>
						<td>Secundaria (rural)</td>";

		foreach ($resultados as $resultado) {
			$rurSecu = $resultado->rurSecu;

			if ($rurSecu == 0) {
				$rurSecu = "N.D";
			}

			$html .= "<td>$rurSecu</td>";

		};

		$html .= "</tr>
					<tr class='border-dotted'>
						<td>Secundaria (urbano)</td>";

		foreach ($resultados as $resultado) {
			$urbSecu = $resultado->urbSecu;

			if ($urbSecu == 0) {
				$urbSecu = "N.D";
			}

			$html .= "<td>$urbSecu</td>";

		};

		$html .= "</tr>
					<tr class='border-dotted'>
						<td>Media (rural)</td>";

		foreach ($resultados as $resultado) {
			$rurMedia = $resultado->rurMedia;

			if ($rurMedia == 0) {
				$rurMedia = "N.D";
			}

			$html .= "<td>$rurMedia</td>";

		};

		$html .= "</tr>
					<tr>
						<td>Media (urbano)</td>";

		foreach ($resultados as $resultado) {
			$urbMedia = $resultado->urbMedia;

			if ($urbMedia == 0) {
				$urbMedia = "N.D";
			}

			$html .= "<td>$urbMedia</td>";

		};

		$html .= "</tr>
				</tbody>
			</table>

			</div>";


$html .="</div>";
		$html .= "<div class='col-sm-12 col-md-12 col-lg-12 table-wrapper-scroll-x' style='overflow-x: scroll; margin-bottom: 20px;'>

			<table class='table table-bordered table-hover'>
				<thead class='thead-s'>
					<tr>
						<th>Matricula por nivel</th>";

		foreach ($resultados as $resultado) {
			$anio = $resultado->YEARanioE;

			$html .= "<th>$anio</th>";

		};

		$html .= "</tr>
				</thead>
				<tbody>
					<tr class='border-dotted'>
						<td>Prejardin y jardin</td>";

		foreach ($resultados as $resultado) {
			$jardin = $resultado->jardin;

			if ($jardin == 0) {
				$jardin = "N.D";
			}

			$html .= "<td>$jardin</td>";

		};

		$html .= "</tr>
					<tr class='border-dotted'>
						<td>Transición</td>";

		foreach ($resultados as $resultado) {
			$trans = $resultado->trans;

			if ($trans == 0) {
				$trans = "N.D";
			}

			$html .= "<td>$trans</td>";

		};


		$html .= "</tr>
					<tr class='border-dotted'>
						<td>Primaria</td>";

		foreach ($resultados as $resultado) {
			$prim = $resultado->prim;

			if ($prim == 0) {
				$prim = "N.D";
			}

			$html .= "<td>$prim</td>";

		};

		$html .= "</tr>
					<tr class='border-dotted'>
						<td>Secundaria</td>";

		foreach ($resultados as $resultado) {
			$secu = $resultado->secu;

			if ($secu == 0) {
				$secu = "N.D";
			}

			$html .= "<td>$secu</td>";

		};

		$html .= "</tr>
					<tr>
						<td>Media</td>";

		foreach ($resultados as $resultado) {
			$media = $resultado->media;

			if ($media == 0) {
				$media = "N.D";
			}

			$html .= "<td>$media</td>";

		};

		$html .= "</tr>
				</tbody>
			</table>

			</div>";


		$html .= "<div class='col-sm-12 col-md-12 col-lg-12 table-wrapper-scroll-x' style='overflow-x: scroll; margin-bottom: 20px;'>

			<table class='table table-bordered table-striped'>
				<thead class='thead-s'>
					<tr>
						<th>Matricula por genero</th>";

		foreach ($resultados as $resultado) {
			$anio = $resultado->YEARanioE;

			$html .= "<th>$anio</th>";

		};

		$html .= "</tr>
				</thead>
				<tbody>
					<tr class='border-dotted'>
						<td>Femenino</td>";

		foreach ($resultados as $resultado) {
			$femenino = $resultado->femenino;

			if ($femenino == 0) {
				$femenino = "N.D";
			}

			$html .= "<td>$femenino</td>";

		};

		$html .= "</tr>
					<tr class='border-dotted'>
						<td>Masculino</td>";

		foreach ($resultados as $resultado) {
			$masculino = $resultado->masculino;

			if ($masculino == 0) {
				$masculino = "N.D";
			}

			$html .= "<td>$masculino</td>";

		};

		$html .= "</tr>
				</tbody>
			</table>

			</div>";

		return Response::json(array('html' => $html));
	}

	public function mostrarTablaEducacion(Request $request)
	{
		$idMunicipio = $_GET['idMunicipio'];
		$html = "";

		$html .= "<table class='table table-striped table-bordered table-hover'>
				<thead>
				<tr>
				<th>Año</th>
				<th>Jardin</th>
				<th>Transición</th>
				<th>Primaria</th>
				<th>Secundaria</th>
				<th>Educación media</th>
				<th>Funciones</th>
				</tr>
				</thead>
				<tbody>";

		$resultados = Educacion::join('matriculaporgenero', 'educacion.id', 'matriculaporgenero.educacion_id')
						->join('matriculapornivel', 'educacion.id', 'matriculapornivel.educacion_id')
						->select(DB::raw('YEAR(anioE) as YEARanioE'),
								'educacion.rurJardin',
								'educacion.urbJardin',
								'educacion.rurTrans',
								'educacion.urbTrans',
								'educacion.rurPrim',
								'educacion.urbPrim',
								'educacion.rurSecu',
								'educacion.urbSecu',
								'educacion.rurMedia',
								'educacion.urbMedia',
								'matriculaporgenero.*',
								'matriculapornivel.*')
						->where('educacion.municipio_id', $idMunicipio)
						->orderBy('educacion.anioE')
						->get();
		foreach ($resultados as $resultado) {
			$id = $resultado->id;
			$anio = $resultado->YEARanioE;
			$jardin = $resultado->jardin;
			$trans = $resultado->trans;
			$prim = $resultado->prim;
			$secu = $resultado->secu;
			$media = $resultado->media;

			$html .= "<tr>
					<td>$anio</td>
					<td>$jardin</td>
					<td>$trans</td>
					<td>$prim</td>
					<td>$secu</td>
					<td>$media</td>
					<td><a id='$id' href='#' class='btn btn-success' data-toggle='modal' data-target='#modalMostrarActualizar' value='editar'>Editar</a></td>
					</tr>";

		}

		$html .= "</tbody>
				</table>";

		// <a id='$id' href='#' class='btn btn-danger'>Borrar</a>

		return Response::json(array('html' => $html));
	}

	public function subiendoArchivoEducacion()
    {
        return view('admin.educacion.subiendoArchivoEducacion');
    }

    public function guardarArchivoEducacion(Request $request)
    {
      $file = $request->file('file');
      $name = $file->getClientOriginalName();
      Storage::disk('form')->put($name,  File::get($file));

      $request->session()->put('nameArchivoEducacion', $name);

      return redirect('/admin/subiendoArchivoEducacion');
    }

    public function subirRespuestaEducacion(Request $request)
    {     
      try { 

      $nameArchivo = null;
      $html = "";

      if ($request->session()->get("nameArchivoEducacion")) {
          $nameArchivo = $request->session()->get("nameArchivoEducacion");
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

          	$resultados = Educacion::where(DB::raw('YEAR(anioE)'), $result->anio)
          			->where('municipio_id', $id)
          				->limit(1)
						->get();
		    foreach ($resultados as $resultado) {
		      $booleanAño = True;
		    }

		    $sumaJardin = $result->rural_jardin_integer + $result->urbano_jardin_integer;
			$sumaTransicion = $result->rural_transicion_integer + $result->urbano_transicion_integer;
			$sumaPrimaria = $result->rural_primaria_integer + $result->urbano_primaria_integer;
			$sumaSecundaria = $result->rural_secundaria_integer + $result->urbano_secundaria_integer;
			$sumaMedia = $result->rural_media_integer + $result->urbano_media_integer;

			$generos = $result->femenino_integer + $result->masculino_integer;

		    $validar = $sumaJardin + $sumaTransicion + $sumaPrimaria + $sumaSecundaria + $sumaMedia;

		    if($generos != $validar){
				$booleanAño = True;
			}else{
				$booleanAño = False;
			}

		    if ($booleanAño == False) {
		    	
	            $data1[] = array('anioE' => $result->anio.'/01/01 00:00:00',
	                           'rurJardin' => $result->rural_jardin_integer,
	                           'urbJardin' => $result->urbano_jardin_integer,
	                           'rurTrans' => $result->rural_transicion_integer,
	                           'urbTrans' => $result->urbano_transicion_integer,
	                           'rurPrim' => $result->rural_primaria_integer,
	                           'urbPrim' => $result->urbano_primaria_integer,
	                           'rurSecu' => $result->rural_secundaria_integer,
	                           'urbSecu' => $result->urbano_secundaria_integer,
	                           'rurMedia' => $result->rural_media_integer,
	                           'urbMedia' => $result->urbano_media_integer,
	                           'municipio_id' => $id,
	                           'created_at' => $time,
	                           'updated_at' => $time);

	           	Educacion::insert($data1);

	           	$resultados = Educacion::orderBy('id', 'desc')
							->limit(1)
							->get();
				foreach ($resultados as $resultado) {
					$educacion_id = $resultado->id;
				}

			    $data2[] = array('jardin' => $sumaJardin,
	                           'trans' => $sumaTransicion,
	                           'prim' => $sumaPrimaria,
	                           'secu' => $sumaSecundaria,
	                           'media' => $sumaMedia,
	                           'educacion_id' => $educacion_id,
	                           'created_at' => $time,
	                           'updated_at' => $time);

			    $data3[] = array('femenino' => $result->femenino_integer,
	                           'masculino' => $result->masculino_integer,
	                           'educacion_id' => $educacion_id,
	                           'created_at' => $time,
	                           'updated_at' => $time);

			    Matriculapornivel::insert($data2);
			    Matriculaporgenero::insert($data3);

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

    public function descargarEducacion(Request $request)
    {
      $data = array();

      Excel::create('Educacion', function($excel) {
 
          $excel->sheet('Importar', function($sheet) {

              $data[] = array('anio' => "",
              				'municipio' => "",
              				 'rural_jardin_integer' => "",
	                           'urbano_jardin_integer' => "",
	                           'rural_transicion_integer' => "",
	                           'urbano_transicion_integer' => "",
	                           'rural_primaria_integer' => "",
	                           'urbano_primaria_integer' => "",
	                           'rural_secundaria_integer' => "",
	                           'urbano_secundaria_integer' => "",
	                           'rural_media_integer' => "",
	                           'urbano_media_integer' => "",
	                           'femenino_integer' => "",
	                           'masculino_integer' => "");

              $sheet->fromArray($data);

          });
      })->export('xls');
    }

    // nuevo
    public function pdf(Request $request)
	{

		$año1 = $request->input('date1');
		$id = $request->input('municipio');

		$resultados = Educacion::join('matriculaporgenero', 'educacion.id', 'matriculaporgenero.educacion_id')
						->join('matriculapornivel', 'educacion.id', 'matriculapornivel.educacion_id')
						->select(DB::raw('YEAR(anioE) as YEARanioE'),
								'educacion.rurJardin',
								'educacion.urbJardin',
								'educacion.rurTrans',
								'educacion.urbTrans',
								'educacion.rurPrim',
								'educacion.urbPrim',
								'educacion.rurSecu',
								'educacion.urbSecu',
								'educacion.rurMedia',
								'educacion.urbMedia',
								'matriculaporgenero.*',
								'matriculapornivel.*')
						->where('municipio_id', $id)
						->where(DB::raw('YEAR(anioE)'), $año1)
						->get();
		foreach ($resultados as $resultado) {
			$id = $resultado->id;
			$anio = $resultado->YEARanioE;
			$rurJardin = $resultado->rurJardin;
			$urbJardin = $resultado->urbJardin;
			$rurTrans = $resultado->rurTrans;
			$urbTrans = $resultado->urbTrans;
			$rurPrim = $resultado->rurPrim;
			$urbPrim = $resultado->urbPrim;
			$rurSecu = $resultado->rurSecu;
			$urbSecu = $resultado->urbSecu;
			$rurMedia = $resultado->rurMedia;
			$urbMedia = $resultado->urbMedia;
			$jardin = $resultado->jardin;
			$trans = $resultado->trans;
			$prim = $resultado->prim;
			$secu = $resultado->secu;
			$media = $resultado->media;
			$femenino = $resultado->femenino;
			$masculino = $resultado->masculino;

			if ($rurJardin == 0) {
				$rurJardin = "N.D";
			}
			if ($urbJardin == 0) {
				$urbJardin = "N.D";
			}
			if ($rurTrans == 0) {
				$rurTrans = "N.D";
			}
			if ($urbTrans == 0) {
				$urbTrans = "N.D";
			}
			if ($rurPrim == 0) {
				$rurPrim = "N.D";
			}
			if ($urbPrim == 0) {
				$urbPrim = "N.D";
			}
			if ($rurSecu == 0) {
				$rurSecu = "N.D";
			}
			if ($urbSecu == 0) {
				$urbSecu = "N.D";
			}
			if ($rurMedia == 0) {
				$rurMedia = "N.D";
			}
			if ($urbMedia == 0) {
				$urbMedia = "N.D";
			}
			if ($jardin == 0) {
				$jardin = "N.D";
			}
			if ($trans == 0) {
				$trans = "N.D";
			}
			if ($prim == 0) {
				$prim = "N.D";
			}
			if ($secu == 0) {
				$secu = "N.D";
			}
			if ($media == 0) {
				$media = "N.D";
			}
			if ($femenino == 0) {
				$femenino = "N.D";
			}
			if ($masculino == 0) {
				$masculino = "N.D";
			}
		}

		$data =  [
            'id' => $id,
			'anio' => $anio,
			'rurJardin' =>  $rurJardin,
			'urbJardin' =>  $urbJardin,
			'rurTrans' =>  $rurTrans,
			'urbTrans' =>  $urbTrans,
			'rurPrim' =>  $rurPrim,
			'urbPrim' =>  $urbPrim,
			'rurSecu' =>  $rurSecu,
			'urbSecu' =>  $urbSecu,
			'rurMedia' =>  $rurMedia,
			'urbMedia' =>  $urbMedia,
			'jardin' =>  $jardin,
			'trans' =>  $trans,
			'prim' =>  $prim,
			'secu' =>  $secu,
			'media' =>  $media,
			'femenino' =>  $femenino,
			'masculino' =>  $masculino,
        ];

		$pdf = PDF::loadView('user.pdf.pdfE', compact('data'));
		return $pdf->stream('Educacion.pdf');
	}

}
