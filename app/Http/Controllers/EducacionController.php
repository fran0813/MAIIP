<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \Response;
use App\Educacion;
use App\Matriculaporgenero;
use App\Matriculapornivel;

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
		    $educacion_create->anioE = $anioE;
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

		$html .= "<div class='col-sm-12 col-md-12 col-lg-12'>

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

			$html .= "<td>$rurJardin</td>";

		};

		$html .= "</tr>
					<tr class='border-dotted'>
						<td>Prejardin y jardin (urbano)</td>";

		foreach ($resultados as $resultado) {
			$urbJardin = $resultado->urbJardin;

			$html .= "<td>$urbJardin</td>";

		};

		$html .= "</tr>
					<tr class='border-dotted'>
						<td>Transición (rural)</td>";

		foreach ($resultados as $resultado) {
			$rurTrans = $resultado->rurTrans;

			$html .= "<td>$rurTrans</td>";

		};

		$html .= "</tr>
					<tr class='border-dotted'>
						<td>Transición (urbano)</td>";

		foreach ($resultados as $resultado) {
			$urbTrans = $resultado->urbTrans;

			$html .= "<td>$urbTrans</td>";

		};

		$html .= "</tr>
					<tr class='border-dotted'>
						<td>Primaria (rural)</td>";

		foreach ($resultados as $resultado) {
			$rurPrim = $resultado->rurPrim;

			$html .= "<td>$rurPrim</td>";
		};

		$html .= "</tr>
					<tr class='border-dotted'>
						<td>Primaria (urbano)</td>";

		foreach ($resultados as $resultado) {
			$urbPrim = $resultado->urbPrim;

			$html .= "<td>$urbPrim</td>";

		};

		$html .= "</tr>
					<tr class='border-dotted'>
						<td>Secundaria (rural)</td>";

		foreach ($resultados as $resultado) {
			$rurSecu = $resultado->rurSecu;

			$html .= "<td>$rurSecu</td>";

		};

		$html .= "</tr>
					<tr class='border-dotted'>
						<td>Secundaria (urbano)</td>";

		foreach ($resultados as $resultado) {
			$urbSecu = $resultado->urbSecu;

			$html .= "<td>$urbSecu</td>";

		};

		$html .= "</tr>
					<tr class='border-dotted'>
						<td>Media (rural)</td>";

		foreach ($resultados as $resultado) {
			$rurMedia = $resultado->rurMedia;

			$html .= "<td>$rurMedia</td>";

		};

		$html .= "</tr>
					<tr>
						<td>Media (urbano)</td>";

		foreach ($resultados as $resultado) {
			$urbMedia = $resultado->urbMedia;

			$html .= "<td>$urbMedia</td>";

		};

		$html .= "</tr>
				</tbody>
			</table>

			</div>";

		$html .= "<div class='col-sm-12 col-md-12 col-lg-12'>

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

			$html .= "<td>$jardin</td>";

		};

		$html .= "</tr>
					<tr class='border-dotted'>
						<td>Transición</td>";

		foreach ($resultados as $resultado) {
			$trans = $resultado->trans;

			$html .= "<td>$trans</td>";

		};

		$html .= "</tr>
					<tr class='border-dotted'>
						<td>Primaria (rural)</td>";

		foreach ($resultados as $resultado) {
			$rurPrim = $resultado->rurPrim;

			$html .= "<td>$rurPrim</td>";
		};

		$html .= "</tr>
					<tr class='border-dotted'>
						<td>Primaria</td>";

		foreach ($resultados as $resultado) {
			$prim = $resultado->prim;

			$html .= "<td>$prim</td>";

		};

		$html .= "</tr>
					<tr class='border-dotted'>
						<td>Secundaria</td>";

		foreach ($resultados as $resultado) {
			$secu = $resultado->secu;

			$html .= "<td>$secu</td>";

		};

		$html .= "</tr>
					<tr>
						<td>Media</td>";

		foreach ($resultados as $resultado) {
			$media = $resultado->media;

			$html .= "<td>$media</td>";

		};

		$html .= "</tr>
				</tbody>
			</table>

			</div>";

		$html .= "<div class='col-sm-12 col-md-12 col-lg-12'>

			<table class='table table-bordered table-hover'>
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

			$html .= "<td>$femenino</td>";

		};

		$html .= "</tr>
					<tr class='border-dotted'>
						<td>Masculino</td>";

		foreach ($resultados as $resultado) {
			$masculino = $resultado->masculino;

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
      Storage::disk('public')->put($name,  File::get($file));

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

          	$resultados = Educacion::where(DB::raw('YEAR(anioE)'), $result->anio)
          				->limit(1)
						->get();
		    foreach ($resultados as $resultado) {
		      $booleanAño = True;
		    }

		    if ($booleanAño = False) {
		    	
	            $data1[] = array('anioE' => $result->anio.'/01/01 00:00:00',
	                           'rurJardin' => $result->rural_jardin,
	                           'urbJardin' => $result->urbano_jardin,
	                           'rurTrans' => $result->rural_transicion,
	                           'urbTrans' => $result->urbano_transicion,
	                           'rurPrim' => $result->rural_primaria,
	                           'urbPrim' => $result->urbano_primaria,
	                           'rurSecu' => $result->rural_secundaria,
	                           'urbSecu' => $result->urbano_secundaria,
	                           'rurMedia' => $result->rural_media,
	                           'urbMedia' => $result->urbano_media,
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

				$sumaJardin = $result->rural_jardin + $result->urbano_jardin;
				$sumaTransicion = $result->rural_transicion + $result->urbano_transicion;
				$sumaPrimaria = $result->rural_primaria + $result->urbano_primaria;
				$sumaSecundaria = $result->rural_secundaria + $result->urbano_secundaria;
				$sumaMedia = $result->rural_media + $result->urbano_media;

			    $data2[] = array('jardin' => $sumaJardin,
	                           'trans' => $sumaTransicion,
	                           'prim' => $sumaPrimaria,
	                           'secu' => $sumaSecundaria,
	                           'media' => $sumaMedia,
	                           'educacion_id' => $educacion_id,
	                           'created_at' => $time,
	                           'updated_at' => $time);

			    $data3[] = array('femenino' => $result->femenino,
	                           'masculino' => $result->masculino,
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

              $data[] = array('año' => "",
              				'municipio' => "",
              				 'rural_jardin' => "",
	                           'urbano_jardin' => "",
	                           'rural_transicion' => "",
	                           'urbano_transicion' => "",
	                           'rural_primaria' => "",
	                           'urbano_primaria' => "",
	                           'rural_secundaria' => "",
	                           'urbano_secundaria' => "",
	                           'rural_media' => "",
	                           'urbano_media' => "",
	                           'femenino' => "",
	                           'masculino' => "");

              $sheet->fromArray($data);

          });
      })->export('xls');
    }

}
