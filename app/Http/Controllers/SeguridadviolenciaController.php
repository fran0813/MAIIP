<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \Response;
use App\Seguridadviolencia;
use App\Delito;
use App\Lesion;
use App\Violencia;

class SeguridadviolenciaController extends Controller
{
    public function actualizarSeguridadviolencia(Request $request)
	{
		$idSV = $_POST['idSV'];
		$tasDesEscTot = $_POST['tasDesEscTot'];
		$tasHom = $_POST['tasHom'];
		$tasIncDen = $_POST['tasIncDen'];
		$tasLesPer = $_POST['tasLesPer'];
		$tasMueAcc = $_POST['tasMueAcc'];
		$tasSui = $_POST['tasSui'];
		$vioInt = $_POST['vioInt'];
		$casTot = $_POST['casTot'];
		$casTasHom = $_POST['casTasHom'];
		$tot = $_POST['tot'];
		$hom = $_POST['hom'];
		$muj = $_POST['muj'];
		$fatTot = $_POST['fatTot'];
		$fatHom = $_POST['fatHom'];
		$fatMuj = $_POST['fatMuj'];
		$noFatTot = $_POST['noFatTot'];
		$noFatHom = $_POST['noFatHom'];
		$noFatMuj = $_POST['noFatMuj'];
		$may = $_POST['may'];
		$otrFam = $_POST['otrFam'];
		$inf = $_POST['inf'];

		$seguridadviolencia_update = Seguridadviolencia::find($idSV);
        $seguridadviolencia_update->$tasDesEscTot = $tasDesEscTot;
		$seguridadviolencia_update->$tasHom = $tasHom;
		$seguridadviolencia_update->$tasIncDen = $tasIncDen;
		$seguridadviolencia_update->$tasLesPer = $tasLesPer;
		$seguridadviolencia_update->$tasMueAcc = $tasMueAcc;
		$seguridadviolencia_update->$tasSui = $tasSui;
		$seguridadviolencia_update->$vioInt = $vioInt;
		$seguridadviolencia_update->$casTot = $casTot;
		$seguridadviolencia_update->$casTasHom = $casTasHom;
        $seguridadviolencia_update->save();

		$delito_update = Delito::find($idSV);
        $delito_update->tot = $tot;
        $delito_update->hom = $hom;
        $delito_update->muj = $muj;
        $delito_update->save();

        $lesion_update = Lesion::find($idSV);
        $lesion_update->fatTot = $fatTot;
        $lesion_update->fatHom = $fatHom;
        $lesion_update->fatMuj = $fatMuj;
        $lesion_update->noFatTot = $noFatTot;
        $lesion_update->noFatHom = $noFatHom;
        $lesion_update->noFatMuj = $noFatMuj;
        $lesion_update->save();

        $violencia_update = Violencia::find($idSV);
        $violencia_update->may = $may;
        $violencia_update->otrFam = $otrFam;
        $violencia_update->inf = $inf;
        $violencia_update->save();

		$html = "Se actualizaron los datos correctamente";

		return Response::json(array('html' => $html));
	}

	public function borrarSeguridadviolencia(Request $request)
	{
		$idSV = $_GET['idSV'];

		$lesion_delete = Lesion::find($idSV);
        $lesion_delete->delete();

		$delito_delete = Delito::find($idSV);
        $delito_delete->delete();

        $violencia_delete = Violencia::find($idSV);
        $violencia_delete->delete();

		$seguridadviolencia_delete = Seguridadviolencia::find($idSV);
        $seguridadviolencia_delete->delete();

		$html = "Se eliminaron los datos correctamente";

		return Response::json(array('html' => $html));
	}

	public function crearSeguridadviolencia(Request $request)
	{
		$anioSV = $_POST['anioSV'];
		$comprobar = $_POST['comprobar'];
		$tasDesEscTot = $_POST['tasDesEscTot'];
		$tasHom = $_POST['tasHom'];
		$tasIncDen = $_POST['tasIncDen'];
		$tasLesPer = $_POST['tasLesPer'];
		$tasMueAcc = $_POST['tasMueAcc'];
		$tasSui = $_POST['tasSui'];
		$vioInt = $_POST['vioInt'];
		$casTot = $_POST['casTot'];
		$casTasHom = $_POST['casTasHom'];
		$tot = $_POST['tot'];
		$hom = $_POST['hom'];
		$muj = $_POST['muj'];
		$fatTot = $_POST['fatTot'];
		$fatHom = $_POST['fatHom'];
		$fatMuj = $_POST['fatMuj'];
		$noFatTot = $_POST['noFatTot'];
		$noFatHom = $_POST['noFatHom'];
		$noFatMuj = $_POST['noFatMuj'];
		$may = $_POST['may'];
		$otrFam = $_POST['otrFam'];
		$inf = $_POST['inf'];
		$municipio_id = $_POST['municipio_id'];
		$ban = False;

		$resultados = Seguridadviolencia::where(DB::raw('YEAR(anioSV)'), $comprobar)
						->get();
		foreach ($resultados as $resultado) {
			$ban = True;
		}

		if($ban == False){

			$seguridadviolencia_create = new Seguridadviolencia;
		    $seguridadviolencia_create->anioSV = $anioSV;
		    $seguridadviolencia_create->$tasDesEscTot = $tasDesEscTot;
			$seguridadviolencia_create->$tasHom = $tasHom;
			$seguridadviolencia_create->$tasIncDen = $tasIncDen;
			$seguridadviolencia_create->$tasLesPer = $tasLesPer;
			$seguridadviolencia_create->$tasMueAcc = $tasMueAcc;
			$seguridadviolencia_create->$tasSui = $tasSui;
			$seguridadviolencia_create->$vioInt = $vioInt;
			$seguridadviolencia_create->$casTot = $casTot;
			$seguridadviolencia_create->$casTasHom = $casTasHom;
	        $seguridadviolencia_create->municipio_id = $municipio_id;
		    $seguridadviolencia_create->save();

			$resultados = Seguridadviolencia::orderBy('id', 'desc')
						->limit(1)
						->get();
			foreach ($resultados as $resultado) {
				$seguridadviolencia_id = $resultado->id;
			}

			$delito_create = new Delito;
	        $delito_create->tot = $tot;
	        $delito_create->hom = $hom;
	        $delito_create->muj = $muj;
	        $delito_create->seguridadviolencia_id = $seguridadviolencia_id;
	        $delito_create->save();

			$lesion_create = new Lesion;
		    $lesion_create->fatTot = $fatTot;
	        $lesion_create->fatHom = $fatHom;
	        $lesion_create->fatMuj = $fatMuj;
	        $lesion_create->noFatTot = $noFatTot;
	        $lesion_create->noFatHom = $noFatHom;
	        $lesion_create->noFatMuj = $noFatMuj;
		    $lesion_create->salud_id = $salud_id;
		    $lesion_create->save();

		    $violencia_create = new Violencia;
	        $violencia_create->may = $may;
	        $violencia_create->otrFam = $otrFam;
	        $violencia_create->inf = $inf;
	        $violencia_create->seguridadviolencia_id = $seguridadviolencia_id;
	        $violencia_create->save();

			$html = "Se registrarón los datos correctamente";
		} else {
			$html = "Ya se encuentra registrado ese año";
		}

		return Response::json(array('html' => $html));
	}

	public function grafica1Seguridadviolencia(Request $request)
	{
		$idMunicipio = $_GET['idMunicipio'];
		$anioSV = $_GET['anioSV'];
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

		$resultados = Seguridadviolencia::join('delito', 'seguridadviolencia.id', 'delito.seguridadviolencia_id')
						->select(DB::raw('YEAR(anioSV) as YEARanioSV'),
							'seguridadviolencia.tasHom',
								'seguridadviolencia.tasLesPer',
								'seguridadviolencia.tasDesEscTot',
								'seguridadviolencia.tasIncDen',
								'seguridadviolencia.tasMueAcc',
								'delito.*')
						->where('salud.municipio_id', $idMunicipio)
						->where(DB::raw('YEAR(anioSV)'), $anioSV)
						->get();
		foreach ($resultados as $resultado) {
			$anio = $resultado->YEARanioSV;
			$tot = $resultado->tot;
			$tasHom = $resultado->tasHom;
			$tasLesPer = $resultado->tasLesPer;
			$tasDesEscTot = $resultado->tasDesEscTot;
			$tasIncDen = $resultado->tasIncDen;
			$tasMueAcc = $resultado->tasMueAcc;

			$html .= "['$anio', $tot, $tasHom, $tasLesPer, $tasDesEscTot, $tasIncDen, $tasMueAcc],";
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

	public function mostrarActualizarSeguridadviolencia(Request $request)
	{
		$idSV = $_POST['idSV'];
		$html = "";

		$resultados = Seguridadviolencia::join('delito', 'seguridadviolencia.id', 'delito.seguridadviolencia_id')
						->join('lesion', 'seguridadviolencia.id', 'lesion.seguridadviolencia_id')
						->join('violencia', 'seguridadviolencia.id', 'violencia.seguridadviolencia_id')
						->select(DB::raw('DATE(anioSV) as DATEanioSV'),
								'delito.*',
								'lesion.*',
								'violencia.*')
						->where('seguridadviolencia.id', $idSV)
						->get();
		foreach ($resultados as $resultado) {
            $id = $resultado->id;
            $anio = $resultado->DATEanioSV;
           	$tasDesEscTot = $resultado->tasDesEscTot;
			$tasHom = $resultado->tasHom;
			$tasIncDen = $resultado->tasIncDen;
			$tasLesPer = $resultado->tasLesPer;
			$tasMueAcc = $resultado->tasMueAcc;
			$tasSui = $resultado->tasSui;
			$vioInt = $resultado->vioInt;
			$casTot = $resultado->casTot;
			$casTasHom = $resultado->casTasHom;
			$tot = $resultado->tot;
			$hom = $resultado->hom;
			$muj = $resultado->muj;
			$fatTot = $resultado->fatTot;
			$fatHom = $resultado->fatHom;
			$fatMuj = $resultado->fatMuj;
			$noFatTot = $resultado->noFatTot;
			$noFatHom = $resultado->noFatHom;
			$noFatMuj = $resultado->noFatMuj;
			$may = $resultado->may;
			$otrFam = $resultado->otrFam;
			$inf = $resultado->inf;
		}

		return Response::json(array('id' => $id,
									'anio' => $anio,
									'tasDesEscTot' => $tasDesEscTot,
									'tasHom' => $tasHom,
									'tasIncDen' => $tasIncDen,
									'tasLesPer' => $tasLesPer,
									'tasMueAcc' => $tasMueAcc,
									'tasSui' => $tasSui,
									'vioInt' => $vioInt,
									'casTot' => $casTot,
									'casTasHom' => $casTasHom,
									'tot' => $tot,
									'hom' => $hom,
									'muj' => $muj,
									'fatTot' => $fatTot,
									'fatHom' => $fatHom,
									'fatMuj' => $fatMuj,
									'noFatTot' => $noFatTot,
									'noFatHom' => $noFatHom,
									'noFatMuj' => $noFatMuj,
									'may' => $may,
									'otrFam' => $otrFam,
									'inf' => $inf
								));

	}

	public function mostrarSeguridadviolencia(Request $request)
	{
		$idMunicipio = $_GET['idMunicipio'];
		$anioSV = $_GET['anioSV'];
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

		$resultados = Seguridadviolencia::join('delito', 'seguridadviolencia.id', 'delito.seguridadviolencia_id')
						->join('lesion', 'seguridadviolencia.id', 'lesion.seguridadviolencia_id')
						->join('violencia', 'seguridadviolencia.id', 'violencia.seguridadviolencia_id')
						->select(DB::raw('YEAR(anioSV) as YEARanioSV'),
								'discapacidades.*',
								'vacunaciones.*')
						->where('seguridadviolencia.municipio_id', $idMunicipio)
						->where(DB::raw('YEAR(anioSV)'), $anioSV)
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

	public function mostrarTablaSeguridadviolencia(Request $request)
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

		$resultados = Seguridadviolencia::join('vacunaciones', 'salud.id', 'vacunaciones.salud_id')
            ->select('salud.anioS', 'vacunaciones.*')
            ->select('salud.id',
            		 DB::raw('YEAR(anioS) as YEARanioS'),
            		 'vacunaciones.*')
            ->where('salud.municipio_id', $idMunicipio)
            ->orderBy('anioSV')
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

	public function subiendoArchivoSeguridadViolencia()
    {
        return view('admin.seguridadviolencia.subiendoArchivoSeguridadViolencia');
    }

    public function guardarArchivoSeguridadViolencia(Request $request)
    {
      $file = $request->file('file');
      $name = $file->getClientOriginalName();
      Storage::disk('public')->put($name,  File::get($file));

      $request->session()->put('nameArchivoSeguridadViolencia', $name);

      return redirect('/admin/subiendoArchivoSeguridadViolencia');
    }

    public function subirRespuestaSeguridadViolencia(Request $request)
    {     
      try { 

      $nameArchivo = null;
      $html = "";

      if ($request->session()->get("nameArchivoSeguridadViolencia")) {
          $nameArchivo = $request->session()->get("nameArchivoSeguridadViolencia");
      }   

      Excel::load('Storage/app/public/'.$nameArchivo, function($reader)
      {
        $booleanMunicipio = False;
        $booleanAño = False;
        $data1 = array();
        $data2 = array();
        $data3 = array();
        $data4 = array();
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

          	$resultados = Seguridadviolencia::where(DB::raw('YEAR(anioSV)'), $result->anio)
          				->limit(1)
						->get();
		    foreach ($resultados as $resultado) {
		      $booleanAño = True;
		    }

		    if ($booleanAño = False) {
		    	
	            $data1[] = array('anioSV' => $result->anio.'/01/01 00:00:00',
	                           'municipio_id' => $id,
	                           'tasDesEscTot' => $result->tasa_desercion_escolar_total,
									'tasHom' => $result->tasa_homicidios,
									'tasIncDen' => $result->tasa_incidencia_dengue,
									'tasLesPer' => $result->tasa_lesiones_personales,
									'tasMueAcc' => $result->tasa_muertes_por_accidentes,
									'tasSui' => $result->tasa_suicidios,
									'vioInt' => $result->violencia_interpersonal,
									'casTot' => $result->casos_totales,
									'casTasHom' => $result->casos_tasa_homicidio,
	                           'created_at' => $time,
	                           'updated_at' => $time);

	           	Seguridadviolencia::insert($data1);

	           	$resultados = Seguridadviolencia::orderBy('id', 'desc')
							->limit(1)
							->get();
				foreach ($resultados as $resultado) {
					$seguridadviolencia_id = $resultado->id;
				}

				$delito_total = $result->delitos_sexuales_hombre + $result->delitos_sexuales_mujer;
				$lesiones_fatales_total = $result->lesiones_fatales_hombre + $result->lesiones_fatales_mujer;
				$lesiones_no_fatales_total = $result->lesiones_no_fatales_hombre + $result->lesiones_no_fatales_mujer;

			    $data2[] = array('tot' => $delito_total,
									'hom' => $result->delitos_sexuales_hombre,
									'muj' => $result->delitos_sexuales_mujer,
	                           'seguridadviolencia_id' => $seguridadviolencia_id,
	                           'created_at' => $time,
	                           'updated_at' => $time);

			    $data3[] = array('fatTot' => $lesiones_fatales_total,
									'fatHom' => $result->lesiones_fatales_hombre,
									'fatMuj' => $result->lesiones_fatales_mujer,
									'noFatTot' => $lesiones_no_fatales_total,
									'noFatHom' => $result->lesiones_no_fatales_hombre,
									'noFatMuj' => $result->lesiones_no_fatales_mujer,
	                           'seguridadviolencia_id' => $seguridadviolencia_id,
	                           'created_at' => $time,
	                           'updated_at' => $time);

			    $data4[] = array('may' => $result->violencia_a_personas_mayores,
									'otrFam' => $result->violencia_entre_otros_familiares,
									'inf' => $result->violencia_infantil,
	                           'seguridadviolencia_id' => $seguridadviolencia_id,
	                           'created_at' => $time,
	                           'updated_at' => $time);

			    Delito::insert($data2);
			    Lesion::insert($data3);
			    Violencia::insert($data4);

			    $data1 = array();
			    $data2 = array();
			    $data3 = array();
			    $data4 = array();

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

    public function descargarSeguridadviolencia(Request $request)
    {
      $data = array();

      Excel::create('SeguridadViolencia', function($excel) {
 
          $excel->sheet('Importar', function($sheet) {

              $data[] = array('año' => "",
              				'municipio' => "",
              				 'tasa_desercion_escolar_total' => "",
									'tasa_homicidios' => "",
									'tasa_incidencia_dengue' => "",
									'tasa_lesiones_personales' => "",
									'tasa_muertes_por_accidentes' => "",
									'tasa_suicidios' => "",
									'violencia_interpersonal' => "",
									'casos_totales' => "",
									'casos_tasa_homicidio' => "",
									'delitos_sexuales_hombre' => "",
									'delitos_sexuales_mujer' => "",
									'lesiones_fatales_hombre' => "",
									'lesiones_fatales_mujer' => "",
									'lesiones_no_fatales_hombre' => "",
									'lesiones_no_fatales_mujer' => "",
									'violencia_a_personas_mayores' => "",
									'violencia_entre_otros_familiares' => "",
									'violencia_infantil' => "");

              $sheet->fromArray($data);

          });
      })->export('xls');
    }

}
