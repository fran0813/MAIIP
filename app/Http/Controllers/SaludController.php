<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use Storage;
use File;
use \Response;
use App\Salud;
use App\Vacunaciones;
use App\Discapacidades;

class SaludController extends Controller
{
	public function actualizarSalud(Request $request)
	{
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

		$vacunacion_update = Vacunaciones::find($idS);
        $vacunacion_update->tasVacBCG = $tasVacBCG;
        $vacunacion_update->tasVacDPT = $tasVacDPT;
        $vacunacion_update->tasVacHepatitisB = $tasVacHepatitisB;
        $vacunacion_update->tasVacHIB = $tasVacHIB;
        $vacunacion_update->tasVacPolio = $tasVacPolio;
        $vacunacion_update->tasVacTripleViral = $tasVacTripleViral;
        $vacunacion_update->save();

		$discapacidad_update = Discapacidades::find($idS);
        $discapacidad_update->difBaMov = $difBaMov;
        $discapacidad_update->difEntApr = $difEntApr;
        $discapacidad_update->difMovCam = $difMovCam;
        $discapacidad_update->difSalirCalle = $difSalirCalle;
        $discapacidad_update->totalDis = $totalDis;
        $discapacidad_update->save();

		$html = "Se actualizaron los datos correctamente";

		return Response::json(array('html' => $html));
	}

	public function borrarSalud(Request $request)
	{
		$idS = $_GET['idS'];

		$vacunacion_delete = Vacunaciones::find($idS);
        $vacunacion_delete->delete();

		$discapacidad_delete = Discapacidades::find($idS);
        $discapacidad_delete->delete();

		$salud_delete = Salud::find($idS);
        $salud_delete->delete();

		$html = "Se eliminaron los datos correctamente";

		return Response::json(array('html' => $html));
	}

	public function crearSalud(Request $request)
	{
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
		$ban = False;

		$resultados = Salud::where(DB::raw('YEAR(anioS)'), $comprobar)
						->get();
		foreach ($resultados as $resultado) {
			$ban = True;
		}

		if($ban == False){

			$salud_create = new Salud;
		    $salud_create->anioS = $anioS;
	        $salud_create->municipio_id = $municipio_id;
		    $salud_create->save();

			$resultados = Salud::orderBy('id', 'desc')
						->limit(1)
						->get();
			foreach ($resultados as $resultado) {
				$salud_id = $resultado->id;
			}

			$vacunacion_create = new Vacunaciones;
	        $vacunacion_create->tasVacBCG = $tasVacBCG;
	        $vacunacion_create->tasVacDPT = $tasVacDPT;
	        $vacunacion_create->tasVacHepatitisB = $tasVacHepatitisB;
	        $vacunacion_create->tasVacHIB = $tasVacHIB;
	        $vacunacion_create->tasVacPolio = $tasVacPolio;
	        $vacunacion_create->tasVacTripleViral = $tasVacTripleViral;
	        $vacunacion_create->salud_id = $salud_id;
	        $vacunacion_create->save();

			$discapacidad_create = new Discapacidades;
		    $discapacidad_create->difBaMov = $difBaMov;
		    $discapacidad_create->difEntApr = $difEntApr;
		    $discapacidad_create->difMovCam = $difMovCam;
		    $discapacidad_create->difSalirCalle = $difSalirCalle;
		    $discapacidad_create->totalDis = $totalDis;
		    $discapacidad_create->salud_id = $salud_id;
		    $discapacidad_create->save();

			$html = "Se registrarón los datos correctamente";
		} else {
			$html = "Ya se encuentra registrado ese año";
		}

		return Response::json(array('html' => $html));
	}

	public function grafica1Salud(Request $request)
	{
		$idMunicipio = $_GET['idMunicipio'];
		$anioS = $_GET['anioS'];
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
				['Año', 'Tasa BCG', 'Tasa DPT', 'Tasa Hepatitis B', 'Tasa  HIB', 'Tasa  Polio', 'Tasa  Triple viral'],";

		$resultados = Salud::join('vacunaciones', 'salud.id', 'vacunaciones.salud_id')
						->select(DB::raw('YEAR(anioS) as YEARanioS'),
								'vacunaciones.*')
						->where('salud.municipio_id', $idMunicipio)
						->where(DB::raw('YEAR(anioS)'), $anioS)
						->get();
		foreach ($resultados as $resultado) {
			$anio = $resultado->YEARanioS;
			$tasVacBCG = $resultado->tasVacBCG;
			$tasVacDPT = $resultado->tasVacDPT;
			$tasVacHepatitisB = $resultado->tasVacHepatitisB;
			$tasVacHIB = $resultado->tasVacHIB;
			$tasVacPolio = $resultado->tasVacPolio;
			$tasVacTripleViral = $resultado->tasVacTripleViral;

			$html .= "['$anio', $tasVacBCG, $tasVacDPT, $tasVacHepatitisB, $tasVacHIB, $tasVacPolio, $tasVacTripleViral],";
		}

		$html .= "]);";

		$html .= "// Set chart options
		        	var options = {	title: 'Vacunaciones',
		        					bar: {groupWidth: '20%'},
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

	public function grafica2Salud(Request $request)
	{
		$idMunicipio = $_GET['idMunicipio'];
		$anioS = $_GET['anioS'];
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
		        ['Año', 'Dificultad para bañarse o moverse',
		         'Dificultad para entender o aprender',
		         'Dificultad para moverse o para caminar por si',
		         'Dificultad para salir a la calle sin ayuda o compañía',
		         'Total de población con Discapacidad'],";

		$resultados = Salud::join('discapacidades', 'salud.id', 'discapacidades.salud_id')
						->select(DB::raw('YEAR(anioS) as YEARanioS'),
								'discapacidades.*')
						->where('salud.municipio_id', $idMunicipio)
						->where(DB::raw('YEAR(anioS)'), $anioS)
						->get();
		foreach ($resultados as $resultado) {
			$anio = $resultado->YEARanioS;
			$difBaMov = $resultado->difBaMov;
			$difEntApr = $resultado->difEntApr;
			$difMovCam = $resultado->difMovCam;
			$difSalirCalle = $resultado->difSalirCalle;
			$totalDis = $resultado->totalDis;

			$html .= "['$anio', $difBaMov, $difEntApr, $difMovCam, $difSalirCalle, $totalDis],";
		}

		$html .= "]);";

		$html .= "// Set chart options
		        	var options = {	title: 'Discapacidades',
		        					bar: {groupWidth: '20%'},
			        				legend: { position: 'rigth' },
			        				colors: ['#e9473f', '#397ACB', '#F8EF01']};";	

		$html .= "// Instantiate and draw our chart, passing in some options.
		        var chart = new google.visualization.ColumnChart(document.getElementById('columnchart_values2'));
		        chart.draw(data, options);";

		$html .= "}";

		$html .= "</script>";

		$html .= "<div id='columnchart_values2' style='width: 900px; height: 300px;'></div>";

		return Response::json(array('html' => $html));
	}

	public function mostrarActualizarSalud(Request $request)
	{
		$idS = $_POST['idS'];
		$html = "";

		$resultados = Salud::join('vacunaciones', 'salud.id', 'vacunaciones.salud_id')
						->join('discapacidades', 'salud.id', 'discapacidades.salud_id')
						->select(DB::raw('DATE(anioS) as DATEanioS'),
								'discapacidades.*',
								'vacunaciones.*')
						->where('salud.id', $idS)
						->get();
		foreach ($resultados as $resultado) {
            $id = $resultado->id;
            $anio = $resultado->DATEanioS;
            $tasVacBCG = $resultado->tasVacBCG;
            $tasVacDPT = $resultado->tasVacDPT;
            $tasVacHepatitisB = $resultado->tasVacHepatitisB;
            $tasVacHIB = $resultado->tasVacHIB;
            $tasVacPolio = $resultado->tasVacPolio;
            $tasVacTripleViral = $resultado->tasVacTripleViral;
            $difBaMov = $resultado->difBaMov;
            $difEntApr = $resultado->difEntApr;
            $difMovCam = $resultado->difMovCam;
            $difSalirCalle = $resultado->difSalirCalle;
            $totalDis = $resultado->totalDis;
		}

		return Response::json(array('id' => $id,
									'anio' => $anio,
									'tasVacBCG' => $tasVacBCG,
									'tasVacDPT' => $tasVacDPT,
									'tasVacHepatitisB' => $tasVacHepatitisB,
									'tasVacHIB' => $tasVacHIB,
									'tasVacPolio' => $tasVacPolio,
									'tasVacTripleViral' => $tasVacTripleViral,
									'difBaMov' => $difBaMov,
									'difEntApr' => $difEntApr,
									'difMovCam' => $difMovCam,
									'difSalirCalle' => $difSalirCalle,
									'totalDis' => $totalDis,
								));

	}

	public function mostrarSalud(Request $request)
	{
		$idMunicipio = $_GET['idMunicipio'];
		$anioS = $_GET['anioS'];
		$html = "";

		$html .= "<div class='col-sm-6 col-md-6 col-lg-6'>

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

		$resultados = Salud::join('vacunaciones', 'salud.id', 'vacunaciones.salud_id')
						->join('discapacidades', 'salud.id', 'discapacidades.salud_id')
						->select(DB::raw('YEAR(anioS) as YEARanioS'),
								'discapacidades.*',
								'vacunaciones.*')
						->where('salud.municipio_id', $idMunicipio)
						->where(DB::raw('YEAR(anioS)'), $anioS)
						->get();
		foreach ($resultados as $resultado) {
			$tasVacBCG = $resultado->tasVacBCG;

			$html .= "<td>$tasVacBCG</td>";

		};

		$html .= "</tr>
				<tr class='border-dotted'>
				<td>DPT</td>";

		foreach ($resultados as $resultado) {
			$tasVacDPT = $resultado->tasVacDPT;

			$html .= "<td>$tasVacDPT</td>";

		};

		$html .= "</tr>
				<tr class='border-dotted'>
				<td>Hepatitis B</td>";

		foreach ($resultados as $resultado) {
			$tasVacHepatitisB = $resultado->tasVacHepatitisB;

			$html .= "<td>$tasVacHepatitisB</td>";

		};

		$html .= "</tr>
				<tr class='border-dotted'>
				<td>HIB</td>";

		foreach ($resultados as $resultado) {
			$tasVacHIB = $resultado->tasVacHIB;

			$html .= "<td>$tasVacHIB</td>";

		};

		$html .= "</tr>
				<tr class='border-dotted'>
				<td>Polio</td>";

		foreach ($resultados as $resultado) {
			$tasVacPolio = $resultado->tasVacPolio;

			$html .= "<td>$tasVacPolio</td>";

		};

		$html .= "</tr>
				<tr>
				<td>Triple viral</td>";

		foreach ($resultados as $resultado) {
			$tasVacTripleViral = $resultado->tasVacTripleViral;

			$html .= "<td>$tasVacTripleViral</td>";

		};

		$html .= "</tr>
				</tbody>
				</table>

				</div>";

		$html .= "<div class='col-sm-6 col-md-6 col-lg-6'>

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
			$difBaMov = $resultado->difBaMov;

			$html .= "<td>$difBaMov</td>";
		};

		$html .= "</tr>
				<tr class='border-dotted'>
				<td>Dificultad para entender o aprender</td>";

		foreach ($resultados as $resultado) {
			$difEntApr = $resultado->difEntApr;

			$html .= "<td>$difEntApr</td>";
		};

		$html .= "</tr>
				<tr class='border-dotted'>
				<td>Dificultad para moverse o para caminar por si</td>";

		foreach ($resultados as $resultado) {
			$difMovCam = $resultado->difMovCam;

			$html .= "<td>$difMovCam</td>";
		};

		$html .= "</tr>
				<tr class='border-dotted'>
				<td>Dificultad para salir a la calle sin ayuda o compañía</td>";

		foreach ($resultados as $resultado) {
			$difSalirCalle = $resultado->difSalirCalle;

			$html .= "<td>$difSalirCalle</td>";
		};

		$html .= "</tr>
				<tr>
				<td>Total de población con Discapacidad</td>";

		foreach ($resultados as $resultado) {
			$totalDis = $resultado->totalDis;

			$html .= "<td>$totalDis</td>";
		};

		$html .= "</tr>
				</tbody>
				</table>

				</div>";

		return Response::json(array('html' => $html));
	}

	public function mostrarTablaSalud(Request $request)
	{
		$idMunicipio = $_GET['idMunicipio'];
		$html = "";

		$html .= "<table class='table table-striped table-bordered table-hover'>
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

		$resultados = Salud::join('vacunaciones', 'salud.id', 'vacunaciones.salud_id')
            ->select('salud.anioS', 'vacunaciones.*')
            ->select('salud.id',
            		 DB::raw('YEAR(anioS) as YEARanioS'),
            		 'vacunaciones.*')
            ->where('salud.municipio_id', $idMunicipio)
            ->orderBy('anioS')
            ->get();
		foreach ($resultados as $resultado) {
			$id = $resultado->id;
			$anio = $resultado->YEARanioS;
			$tasVacBCG = $resultado->tasVacBCG;
			$tasVacDPT = $resultado->tasVacDPT;
			$tasVacHepatitisB = $resultado->tasVacHepatitisB;

			$html .= "<tr>
					<td>$anio</td>
					<td>$tasVacBCG</td>
					<td>$tasVacDPT</td>
					<td>$tasVacHepatitisB</td>
					<td><a id='$id' href='#' class='btn btn-success' data-toggle='modal' data-target='#modalMostrarActualizar' value='editar'>Editar</a></td>
					</tr>";
		};

		$html .= "</tbody>
                </table>";

        // <a id='$id' href='#' class='btn btn-danger'>Borrar</a>

		return Response::json(array('html' => $html));
	}

	public function subiendoArchivoSalud()
    {
        return view('admin.salud.subiendoArchivoSalud');
    }

    public function guardarArchivoSalud(Request $request)
    {
      $file = $request->file('file');
      $name = $file->getClientOriginalName();
      Storage::disk('public')->put($name,  File::get($file));

      $request->session()->put('nameArchivoSalud', $name);

      return redirect('/admin/subiendoArchivoSalud');
    }

    public function subirRespuestaSalud(Request $request)
    {     
      try { 

      $nameArchivo = null;
      $html = "";

      if ($request->session()->get("nameArchivoSalud")) {
          $nameArchivo = $request->session()->get("nameArchivoSalud");
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

          	$resultados = Salud::where(DB::raw('YEAR(anioS)'), $result->anio)
          				->limit(1)
						->get();
		    foreach ($resultados as $resultado) {
		      $booleanAño = True;
		    }

		    if ($booleanAño = False) {
		    	
	            $data1[] = array('anioS' => $result->anio.'/01/01 00:00:00',
	                           'municipio_id' => $id,
	                           'created_at' => $time,
	                           'updated_at' => $time);

	           	Salud::insert($data1);

	           	$resultados = Salud::orderBy('id', 'desc')
							->limit(1)
							->get();
				foreach ($resultados as $resultado) {
					$salud_id = $resultado->id;
				}

			    $data2[] = array('difBaMov' => $result->dificultades_bañarse_moverse,
	                           'difEntApr' => $result->dificultades_aprender_entender,
	                           'difMovCam' => $result->dificultades_moverse_caminar,
	                           'difSalirCalle' => $result->dificultades_salir_calle,
	                           'totalDis' => $result->total_discapacitados,
	                           'salud_id' => $salud_id,
	                           'created_at' => $time,
	                           'updated_at' => $time);

			    $data3[] = array('tasVacBCG' => $result->tasa_vacunacion_bcg,
	                           'tasVacDPT' => $result->tasa_vacunacion_dpt,
	                           'tasVacHepatitisB' => $result->tasa_vacunacion_hepatitis_b,
	                           'tasVacHIB' => $result->tasa_vacunacion_hib,
	                           'tasVacPolio' => $result->tasa_vacunacion_polio,
	                           'tasVacTripleViral' => $result->tasa_vacunacion_triple_viral,
	                           'salud_id' => $salud_id,
	                           'created_at' => $time,
	                           'updated_at' => $time);

			    Discapacidades::insert($data2);
			    Vacunaciones::insert($data3);

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

    public function descargarSalud(Request $request)
    {
      $data = array();

      Excel::create('Salud', function($excel) {
 
          $excel->sheet('Importar', function($sheet) {

              $data[] = array('año' => "",
              				'municipio' => "",
              				 'dificultades_bañarse_moverse' => "",
	                           'dificultades_aprender_entender' => "",
	                           'dificultades_moverse_caminar' => "",
	                           'dificultades_salir_calle' => "",
	                           'total_discapacitados' => "",
	                           'tasa_vacunacion_bcg' => "",
	                           'tasa_vacunacion_dpt' => "",
	                           'tasa_vacunacion_hepatitis_b' => "",
	                           'tasa_vacunacion_hib' => "",
	                           'tasa_vacunacion_polio' => "",
	                           'tasa_vacunacion_triple_viral' => "");

              $sheet->fromArray($data);

          });
      })->export('xls');
    }

}
