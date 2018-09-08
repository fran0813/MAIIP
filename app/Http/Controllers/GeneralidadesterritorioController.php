<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use Storage;
use File;
use \Response;
use App\Generalidadterritorio;
use App\Generalidad;
use App\Territorio;
use App\Predio;
use App\Municipio;
use Barryvdh\DomPDF\Facade as PDF;

class GeneralidadesterritorioController extends Controller
{
	public function actualizarGeneralidadesterritorio(Request $request)
	{
		$idGT = $_POST['idGT'];
		$temperatura = $_POST['temperatura'];
		$alturaNivMar = $_POST['alturaNivMar'];
		$ruralG = $_POST['ruralG'];
		$urbanoG = $_POST['urbanoG'];
		$totalG = $_POST['totalG'];
		$constRural = $_POST['constRural'];
		$constUrbano = $_POST['constUrbano'];
		$constTotal = $_POST['constTotal'];
		$terrRural = $_POST['terrRural'];
		$terrUrbano = $_POST['terrUrbano'];
		$terrTotal = $_POST['terrTotal'];
		$ruralP = $_POST['ruralP'];
		$urbanoP = $_POST['urbanoP'];
		$totalP = $_POST['totalP'];

		$generalidad_territorio_update = Generalidadterritorio::find($idGT);
        $generalidad_territorio_update->temperatura = $temperatura;
        $generalidad_territorio_update->alturaNivMar = $alturaNivMar;
        $generalidad_territorio_update->save();

		$generalidad_update = Generalidad::find($idGT);
        $generalidad_update->ruralG = $ruralG;
        $generalidad_update->urbanoG = $urbanoG;
        $generalidad_update->totalG = $totalG;
        $generalidad_update->save();

		$territorio_update = Territorio::find($idGT);
        $territorio_update->constRural = $constRural;
        $territorio_update->constUrbano = $constUrbano;
        $territorio_update->constTotal = $constTotal;
        $territorio_update->terrRural = $terrRural;
        $territorio_update->terrUrbano = $terrUrbano;
        $territorio_update->terrTotal = $terrTotal;
        $territorio_update->save();

		$predio_update = Predio::find($idGT);
        $predio_update->ruralP = $ruralP;
        $predio_update->urbanoP = $urbanoP;
        $predio_update->totalP = $totalP;
        $predio_update->save();

		$html = "Se actualizaron los datos correctamente";

		return Response::json(array('html' => $html));
	}

	public function borrarGeneralidadesterritorio(Request $request)
	{
		$idGT = $_GET['idGT'];

		$generalidad_territorio_delete = Generalidad::find($idGT);
        $generalidad_territorio_delete->delete();

        $generalidad_delete = Territorio::find($idGT);
        $generalidad_delete->delete();

        $territorio_delete = Predio::find($idGT);
        $territorio_delete->delete();

        $predio_delete = Generalidadterritorio::find($idGT);
        $predio_delete->delete();

		$html = "Se eliminaron los datos correctamente";

		return Response::json(array('html' => $html));
	}

	public function crearGeneralidadesterritorio(Request $request)
	{
		$anioGT = $_POST['anioGT'];
		$comprobar = $_POST['comprobar'];
		$temperatura = $_POST['temperatura'];
		$alturaNivMar = $_POST['alturaNivMar'];
		$municipio_id = $_POST['municipio_id'];
		$ruralG = $_POST['ruralG'];
		$urbanoG = $_POST['urbanoG'];
		$totalG = $_POST['totalG'];
		$constRural = $_POST['constRural'];
		$constUrbano = $_POST['constUrbano'];
		$constTotal = $_POST['constTotal'];
		$terrRural = $_POST['terrRural'];
		$terrUrbano = $_POST['terrUrbano'];
		$terrTotal = $_POST['terrTotal'];
		$ruralP = $_POST['ruralP'];
		$urbanoP = $_POST['urbanoP'];
		$totalP = $_POST['totalP'];
		$ban = False;

		$resultados = Generalidadterritorio::where(DB::raw('YEAR(anioGT)'), $comprobar)
						->get();
		foreach ($resultados as $resultado) {
			$ban = True;
		}

		if ($ban == False) {

			$generalidad_territorio_create = new Generalidadterritorio;
		    $generalidad_territorio_create->anioGT = $comprobar.'/01/01 00:00';
		    $generalidad_territorio_create->temperatura = $temperatura;
		    $generalidad_territorio_create->alturaNivMar = $alturaNivMar;
		    $generalidad_territorio_create->municipio_id = $municipio_id;
		    $generalidad_territorio_create->save();

			$resultados = Generalidadterritorio::orderBy('id', 'desc')
						->limit(1)
						->get();
			foreach ($resultados as $resultado) {
				$generalidadterritorio_id = $resultado->id;

			}

			$generalidad_create = new Generalidad;
		    $generalidad_create->ruralG = $ruralG;
		    $generalidad_create->urbanoG = $urbanoG;
		    $generalidad_create->totalG = $totalG;
		    $generalidad_create->generalidadterritorio_id = $generalidadterritorio_id;
		    $generalidad_create->save();

			$territorios_create = new Territorio;
		    $territorios_create->constRural = $constRural;
		    $territorios_create->constUrbano = $constUrbano;
		    $territorios_create->constTotal = $constTotal;
		    $territorios_create->terrRural = $terrRural;
		    $territorios_create->terrUrbano = $terrUrbano;
		    $territorios_create->terrTotal = $terrTotal;
		    $territorios_create->generalidadterritorio_id = $generalidadterritorio_id;
		    $territorios_create->save();

			$predio_create = new Predio;
		    $predio_create->ruralP = $ruralP;
		    $predio_create->urbanoP = $urbanoP;
		    $predio_create->totalP = $totalP;
		    $predio_create->generalidadterritorio_id = $generalidadterritorio_id;
		    $predio_create->save();

			$html = "Se registrarón los datos correctamente";
		} else {
			$html = "Ya se encuentra registrado ese año";
		}

		return Response::json(array('html' => $html));
	}

	public function mostrarActualizarGeneralidadesterritorio(Request $request)
	{
		$idGT = $_POST['idGT'];

		$resultados = Generalidadterritorio::join('generalidades', 'generalidadesterritorios.id', 'generalidades.generalidadterritorio_id')
						->join('territorios', 'generalidadesterritorios.id', 'territorios.generalidadterritorio_id')
						->join('predios', 'generalidadesterritorios.id', 'predios.generalidadterritorio_id')
						->select('generalidadesterritorios.id',
						DB::raw('DATE(anioGT) as DATEanioGT'),
								'generalidadesterritorios.temperatura',
								'generalidadesterritorios.alturaNivMar',
								'generalidades.*',
								'territorios.*',
								'predios.*')
						->where('generalidadesterritorios.id', $idGT)
						->get();
		foreach ($resultados as $resultado) {
			$id = $resultado->id;
			$anio = $resultado->DATEanioGT;
			$temperatura = $resultado->temperatura;
			$alturaNivMar = $resultado->alturaNivMar;
			$ruralG = $resultado->ruralG;
			$urbanoG = $resultado->urbanoG;
			$totalG = $resultado->totalG;
			$constRural = $resultado->constRural;
			$constUrbano = $resultado->constUrbano;
			$constTotal = $resultado->constTotal;
			$terrRural = $resultado->terrRural;
			$terrUrbano = $resultado->terrUrbano;
			$terrTotal = $resultado->terrTotal;
			$ruralP = $resultado->ruralP;
			$urbanoP = $resultado->urbanoP;
			$totalP = $resultado->totalP;
		}

		return Response::json(array('id' => $id,
									'anio' => $anio,
									'temperatura' => $temperatura,
									'alturaNivMar' => $alturaNivMar,
									'ruralG' => $ruralG,
									'urbanoG' => $urbanoG,
									'totalG' => $totalG,
									'constRural' => $constRural,
									'constUrbano' => $constUrbano,
									'constTotal' => $constTotal,
									'terrRural' => $terrRural,
									'terrUrbano' => $terrUrbano,
									'terrTotal' => $terrTotal,
									'ruralP' => $ruralP,
									'urbanoP' => $urbanoP,
									'totalP' => $totalP,
								));
	}

	public function mostrarGeneralidadesterritorio(Request $request)
	{
		$idMunicipio = $_GET['idMunicipio'];
		$anioGT = $_GET['anioGT'];
		$html = "";

		$html .= "<div class='col-sm-6 col-md-6 col-lg-6'>

				<table class='table table-bordered'>
				<thead class='thead-s'>
				<tr>
				<th>Datos</th>
				<th>Valores</th>
				</tr>
				</thead>
				<tbody>
				<tr class='border-dotted'>
				<td>Temperatura Media(°C)</td>";

		$resultados = Generalidadterritorio::join('generalidades', 'generalidadesterritorios.id', 'generalidades.generalidadterritorio_id')
						->join('territorios', 'generalidadesterritorios.id', 'territorios.generalidadterritorio_id')
						->join('predios', 'generalidadesterritorios.id', 'predios.generalidadterritorio_id')
						->select('generalidadesterritorios.*',
								'generalidades.*',
								'territorios.*',
								'predios.*')
						->where(DB::raw('YEAR(anioGT)'), $anioGT)
						->where('municipio_id', $idMunicipio)
						->get();
		foreach ($resultados as $resultado) {
			$temperatura = $resultado->temperatura;

			if ($temperatura == 0) {
				$temperatura = "N.D.";
			}

			$html .= "<td>$temperatura</td>";

		}

		$html .= "</tr>
				<tr'>
				<td>Altura sobre el nivel del mal</td>";

		foreach ($resultados as $resultado) {
			$alturaNivMar = $resultado->alturaNivMar;

			if ($alturaNivMar == 0) {
				$alturaNivMar= "N.D.";
			}

			$html .= "<td>$alturaNivMar</td>";

		}

		$html .= "</tr>
				</tbody>
				</table>

				</div>";

		$html .= "<div class='col-sm-6 col-md-6 col-lg-6'>

				<table class='table table-bordered'>
				<thead class='thead-s'>
				<tr>
				<th>Predios</th>
				<th>Valores</th>
				</tr>
				</thead>
				<tbody>
				<tr class='border-dotted'>
				<td>Zona rural</td>";

		foreach ($resultados as $resultado) {
			$ruralP = $resultado->ruralP;

			if ($ruralP == 0) {
				$ruralP = "N.D.";
			}

			$html .= "<td>$ruralP</td>";

		}

		$html .= "</tr>
				<tr class='border-dotted'>
				<td>Zona urbana</td>";

		foreach ($resultados as $resultado) {
			$urbanoP = $resultado->urbanoP;

			if ($urbanoP == 0) {
				$urbanoP = "N.D.";
			}

			$html .= "<td>$urbanoP</td>";
		}

		$html .= "</tr>
				<tr>
				<td>Total por municipio</td>";

		foreach ($resultados as $resultado) {
			$totalP = $resultado->totalP;

			if ($totalP == 0) {
				$totalP = "N.D.";
			}

			$html .= "<td>$totalP</td>";

		}

		$html .= "</tr>
				</tbody>
				</table>

				</div>";

		// Tabla de generalidad
		$html .= "<div class='col-sm-6 col-md-6 col-lg-6'>

				<table class='table table-bordered'>
				<thead class='thead-s'>
				<tr>
				<th>Generalidad</th>
				<th>Valores (km2)</th>
				</tr>
				</thead>
				<tbody>
				<tr class='border-dotted'>
				<td>Rural</td>";

		foreach ($resultados as $resultado) {
			$ruralG = $resultado->ruralG;

			if ($ruralG == 0) {
				$ruralG = "N.D.";
			}

			$html .= "<td>$ruralG</td>";

		}

		$html .= "</tr>
				<tr class='border-dotted'>
				<td>Urbana</td>";

		foreach ($resultados as $resultado) {
			$urbanoG = $resultado->urbanoG;

			if ($urbanoG == 0) {
				$urbanoG = "N.D.";
			}

			$html .= "<td>$urbanoG</td>";
		}

		$html .= "</tr>
				<tr>
				<td>Extensión total</td>";

		foreach ($resultados as $resultado) {
			$totalG = $resultado->totalG;

			if ($totalG == 0) {
				$totalG = "N.D.";
			}

			$html .= "<td>$totalG</td>";
		}

		$html .= "</tr>
				</tbody>
				</table>

				</div>";

		$html .= "<div class='col-sm-6 col-md-6 col-lg-6'>
				<table class='table table-bordered'>
				<thead class='thead-s'>
				<tr>
				<th>Territorio</th>
				<th>A. construida</th>
				<th>A. terreno</th>
				</tr>
				</thead>
				<tbody>
				<tr class='border-dotted'>
				<td>Zona rural</td>";

		foreach ($resultados as $resultado) {
			$constRural = $resultado->constRural;
			$terrRural = $resultado->terrRural;

			if ($constRural == 0) {
				$constRural = "N.D.";
			}
			if ($terrRural == 0) {
				$terrRural = "N.D.";
			}
			$html .= "<td>$constRural</td>
						<td>$terrRural</td>";

		}

		$html .= "</tr>
				<tr class='border-dotted'>
				<td>Zona urbana</td>";

		foreach ($resultados as $resultado) {
			$constUrbano = $resultado->constUrbano;
			$terrUrbano = $resultado->terrUrbano;

			if ($constUrbano == 0) {
				$constUrbano = "N.D.";
			}
			if ($terrUrbano == 0) {
				$terrUrbano = "N.D.";
			}

			$html .= "<td>$constUrbano</td>
						<td>$terrUrbano</td>";
		}

		$html .= "</tr>
				<tr>
				<td>Total por municipio</td>";

		foreach ($resultados as $resultado) {
			$constTotal = $resultado->constTotal;
			$terrTotal = $resultado->terrTotal;

			if ($constTotal == 0) {
				$constTotal = "N.D.";
			}
			if ($terrTotal == 0) {
				$terrTotal = "N.D.";
			}

			$html .= "<td>$constTotal</td>
						<td>$terrTotal</td>";

		}

		$html .= "</tr>
				</tbody>
				</table>

				</div>";

		return Response::json(array('html' => $html));

	}

	public function mostrarTablaGeneralidadesterritorio(Request $request)
	{
		$idMunicipio = $_GET['idMunicipio'];
		$html = "";

		$resultados = Generalidadterritorio::select('generalidadesterritorios.id',
								DB::raw('YEAR(anioGT) as YEARanioGT'),
								'generalidadesterritorios.temperatura',
								'generalidadesterritorios.alturaNivMar')
						->where('generalidadesterritorios.municipio_id', $idMunicipio)
						->orderBy('anioGT')
						->get();

		$html .= "<table class='table table-striped table-bordered table-hover'>
				<thead>
				<tr>
				<th>Año</th>
				<th>Temperatura</th>
				<th>Altura sobre el nivel del mar</th>
				<th>Funciones</th>
				</tr>
				</thead>
				<tbody>";

		foreach ($resultados as $resultado) {

			$id = $resultado->id;
			$anio = $resultado->YEARanioGT;
			$temperatura = $resultado->temperatura;
			$alturaNivMar = $resultado->alturaNivMar;

			if($temperatura == 0){
				$temperatura = "N.D.";
			}

			if($alturaNivMar == 0){
				$alturaNivMar= "N.D.";
			}

			$html .= "<tr>
					<td>$anio</td>
					<td>$temperatura</td>
					<td>$alturaNivMar</td>
					<td><a id='$id' href='#' class='btn btn-success' data-toggle='modal' data-target='#modalMostrarActualizar' value='editar'>Editar</a></td>
					</tr>";
		}

		$html .= "</tbody>
				</table>";

		// <a id='$id' href='#' class='btn btn-danger'>Borrar</a>

		return Response::json(array('html' => $html));
	}

	public function subiendoArchivoGeneralidadesTerritorio()
    {
        return view('admin.generalidadesterritorios.subiendoArchivoGeneralidadesTerritorio');
    }

    public function guardarArchivoGeneralidadesTerritorio(Request $request)
    {
      $file = $request->file('file');
      $name = $file->getClientOriginalName();
      Storage::disk('form')->put($name,  File::get($file));

      $request->session()->put('nameArchivoGeneralidadesTerritorio', $name);

      return redirect('/admin/subiendoArchivoGeneralidadesTerritorio');
    }

    public function subirRespuestaGeneralidadesTerritorio(Request $request)
    {     
      try { 

      $nameArchivo = null;
      $html = "";

      if ($request->session()->get("nameArchivoGeneralidadesTerritorio")) {
          $nameArchivo = $request->session()->get("nameArchivoGeneralidadesTerritorio");
      }   

      Excel::load('public/excel/'.$nameArchivo, function($reader)
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

	          	$resultados2 = Generalidadterritorio::where(DB::raw('YEAR(anioGT)'), $result->anio)
	          				->where('municipio_id', $id)
	          				->limit(1)
							->get();
			    foreach ($resultados2 as $resultado2) {
			      $booleanAño = True;
			    }

			    if ($booleanAño == False) {
			    	
		            $data1[] = array('anioGT' => $result->anio.'/01/01 00:00', 'temperatura' => $result->temperatura_double, 'alturaNivMar' => $result->altura_sobre_el_nivel_del_mar_integer, 'municipio_id' => $id, 'created_at' => $time, 'updated_at' => $time);

		            Generalidadterritorio::insert($data1);

		            $resultados = Generalidadterritorio::orderBy('id', 'desc')
							->limit(1)
							->get();
					foreach ($resultados as $resultado) {
						$generalidadterritorio_id = $resultado->id;
					}

					$totalG = $result->rural_generalidades_double + $result->urbano_generalidades_double;
					$constTotal = $result->construccion_rural_integer + $result->construccion_urbana_integer;
					$terrTotal = $result->territorio_rural_double + $result->territorio_urbana_double;
					$totalP = $result->rural_predio_integer + $result->urbano_predio_integer;

		            $data2[] = array('ruralG' => $result->rural_generalidades_double, 'urbanoG' => $result->urbano_generalidades_double, 'totalG' => $totalG, 'generalidadterritorio_id' => $generalidadterritorio_id, 'created_at' => $time, 'updated_at' => $time);

		            $data3[] = array('constRural' => $result->construccion_rural_integer, 'constUrbano' => $result->construccion_urbana_integer, 'constTotal' => $constTotal, 'terrRural' => $result->territorio_rural_double, 'terrUrbano' => $result->territorio_urbana_double, 'terrTotal' => $terrTotal, 'generalidadterritorio_id' => $generalidadterritorio_id, 'created_at' => $time, 'updated_at' => $time);

		            $data4[] = array('ruralP' => $result->rural_predio_integer, 'urbanoP' => $result->urbano_predio_integer, 'totalP' => $totalP, 'generalidadterritorio_id' => $generalidadterritorio_id, 'created_at' => $time, 'updated_at' => $time);

		            Generalidad::insert($data2);
		            Territorio::insert($data3);
		            Predio::insert($data4);

					$data1 = array();
					$data2 = array();
					$data3 = array();
					$data4 = array();

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

      // return redirect('/admin/generalidadesterritorio');
      // return Response::json(array('html' => $html, 'boolean' => $booleanMunicipio));
    }

    public function descargarGeneralidadesTerritorio(Request $request)
    {
      $data = array();

      Excel::create('GeneralidadesTerritorio', function($excel) {
 
          $excel->sheet('Importar', function($sheet) {

              $data[] = array('anio' => "",
              				 'municipio' => "",
              				 'temperatura_double' => "",
              				 'altura_sobre_el_nivel_del_mar_integer' => "",
              				 'rural_generalidades_double' => "",
              				 'urbano_generalidades_double' => "",
              				 'construccion_rural_integer' => "",
              				 'construccion_urbana_integer' => "",
              				 'territorio_rural_double' => "",
              				 'territorio_urbana_double' => "",
              				 'rural_predio_integer' => "",
              				 'urbano_predio_integer' => "");

              $sheet->fromArray($data);

          });
      })->export('xls');
    }

 	// nuevo
    public function pdf(Request $request)
	{

		$año1 = $request->input('date1');
		$id = $request->input('municipio');

		$resultados = Generalidadterritorio::join('generalidades', 'generalidadesterritorios.id', 'generalidades.generalidadterritorio_id')
						->join('territorios', 'generalidadesterritorios.id', 'territorios.generalidadterritorio_id')
						->join('predios', 'generalidadesterritorios.id', 'predios.generalidadterritorio_id')
						->select('generalidadesterritorios.id',
						DB::raw('YEAR(anioGT) as YEARanioGT'),
								'generalidadesterritorios.temperatura',
								'generalidadesterritorios.alturaNivMar',
								'generalidades.*',
								'territorios.*',
								'predios.*')
						->where('municipio_id', $id)
						->where(DB::raw('YEAR(anioGT)'), $año1)
						->get();
		foreach ($resultados as $resultado) {
			$id = $resultado->id;
			$anio = $resultado->YEARanioGT;
			$temperatura = $resultado->temperatura;
			$alturaNivMar = $resultado->alturaNivMar;
			$ruralG = $resultado->ruralG;
			$urbanoG = $resultado->urbanoG;
			$totalG = $resultado->totalG;
			$constRural = $resultado->constRural;
			$constUrbano = $resultado->constUrbano;
			$constTotal = $resultado->constTotal;
			$terrRural = $resultado->terrRural;
			$terrUrbano = $resultado->terrUrbano;
			$terrTotal = $resultado->terrTotal;
			$ruralP = $resultado->ruralP;
			$urbanoP = $resultado->urbanoP;
			$totalP = $resultado->totalP;

			if ($temperatura == 0) {
				$temperatura = "N.D.";
			}
			if ($temperatura == 0) {
				$temperatura = "N.D";
			}
			if ($alturaNivMar == 0) {
				$alturaNivMar = "N.D";
			}
			if ($ruralG == 0) {
				$ruralG = "N.D";
			}
			if ($urbanoG == 0) {
				$urbanoG = "N.D";
			}
			if ($totalG == 0) {
				$totalG = "N.D";
			}
			if ($constRural == 0) {
				$constRural = "N.D";
			}
			if ($constUrbano == 0) {
				$constUrbano = "N.D";
			}
			if ($constTotal == 0) {
				$constTotal = "N.D";
			}
			if ($terrRural == 0) {
				$terrRural = "N.D";
			}
			if ($terrUrbano == 0) {
				$terrUrbano = "N.D";
			}
			if ($terrTotal == 0) {
				$terrTotal = "N.D";
			}
			if ($ruralP == 0) {
				$ruralP = "N.D";
			}
			if ($urbanoP == 0) {
				$urbanoP = "N.D";
			}
			if ($totalP == 0) {
				$totalP = "N.D";
			}
		}

		$data =  [
            'id' => $id,
			'anio' => $anio,
			'temperatura' => $temperatura,
			'alturaNivMar' => $alturaNivMar,
			'ruralG' => $ruralG,
			'urbanoG' => $urbanoG,
			'totalG' => $totalG,
			'constRural' => $constRural,
			'constUrbano' => $constUrbano,
			'constTotal' => $constTotal,
			'terrRural' => $terrRural,
			'terrUrbano' => $terrUrbano,
			'terrTotal' => $terrTotal,
			'ruralP' => $ruralP,
			'urbanoP' => $urbanoP,
			'totalP' => $totalP,
        ];

		$pdf = PDF::loadView('user.pdf.pdfGT', compact('data'));
		return $pdf->stream('Generalidadesterritorios.pdf');
	}

}
