<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \Response;

class GeneralidadesterritorioController extends Controller
{
	// Función para actualizar los datos de generalidades y territorio
	public function actualizarGeneralidadesterritorio(){

		$idGT = $_GET['idGT'];
		$temperatura = $_GET['temperatura'];
		$alturaNivMar = $_GET['alturaNivMar'];
		$ruralG = $_GET['ruralG'];
		$urbanoG = $_GET['urbanoG'];
		$totalG = $_GET['totalG'];
		$constRural = $_GET['constRural'];
		$constUrbano = $_GET['constUrbano'];
		$constTotal = $_GET['constTotal'];
		$terrRural = $_GET['terrRural'];
		$terrUrbano = $_GET['terrUrbano'];
		$terrTotal = $_GET['terrTotal'];
		$ruralP = $_GET['ruralP'];
		$urbanoP = $_GET['urbanoP'];
		$totalP = $_GET['totalP'];
		$updated_at = $_GET['updated_at'];

		$generalidadesterritorios = array('temperatura' => $temperatura,
										'alturaNivMar' => $alturaNivMar,
										'updated_at' => $updated_at, );

		DB::table('generalidadesterritorios')
			->where('id', $idGT)
			->update($generalidadesterritorios);

		$generalidades = array('ruralG' => $ruralG,
							'urbanoG' => $urbanoG,
							'urbanoG' => $urbanoG,
							'totalG' => $totalG,
							'updated_at' => $updated_at, );

		DB::table('generalidades')
			->where('generalidadterritorio_id', $idGT)
			->update($generalidades);

		$territorios = array('constRural' => $constRural,
							'constUrbano' => $constUrbano,
							'constTotal' => $constTotal,
							'terrRural' => $terrRural,
							'terrUrbano' => $terrUrbano,
							'terrTotal' => $terrTotal,
							'updated_at' => $updated_at, );

		DB::table('territorios')
			->where('generalidadterritorio_id', $idGT)
			->update($territorios);

		$predios = array('ruralP' => $ruralP,
						'urbanoP' => $urbanoP,
						'totalP' => $totalP,
						'updated_at' => $updated_at, );

		DB::table('predios')
			->where('generalidadterritorio_id', $idGT)
			->update($predios);

		$html = "Se actualizaron los datos correctamente";

		return Response::json(array('html' => $html, ));

	}

	// Función para eliminar los datos de generalidades y territorio
	public function borrarGeneralidadesterritorio(){

		$idGT = $_GET['idGT'];

		DB::table('generalidades')
			->where('generalidadterritorio_id', $idGT)
			->delete();

		DB::table('territorios')
			->where('generalidadterritorio_id', $idGT)
			->delete();

		DB::table('predios')
			->where('generalidadterritorio_id', $idGT)
			->delete();

		DB::table('generalidadesterritorios')
			->where('id', $idGT)
			->delete();

		$html = "Se eliminaron los datos correctamente";

		return Response::json(array('html' => $html, ));

	}

	// Función para crear los datos de generalidades y territorio
	public function crearGeneralidadesterritorio(){

		$anioGT = $_GET['anioGT'];
		$comprobar = $_GET['comprobar'];
		$temperatura = $_GET['temperatura'];
		$alturaNivMar = $_GET['alturaNivMar'];
		$municipio_id = $_GET['municipio_id'];
		$ruralG = $_GET['ruralG'];
		$urbanoG = $_GET['urbanoG'];
		$totalG = $_GET['totalG'];
		$constRural = $_GET['constRural'];
		$constUrbano = $_GET['constUrbano'];
		$constTotal = $_GET['constTotal'];
		$terrRural = $_GET['terrRural'];
		$terrUrbano = $_GET['terrUrbano'];
		$terrTotal = $_GET['terrTotal'];
		$ruralP = $_GET['ruralP'];
		$urbanoP = $_GET['urbanoP'];
		$totalP = $_GET['totalP'];
		$created_at = $_GET['created_at'];
		$updated_at = $_GET['updated_at'];

		$resultados = DB::table('generalidadesterritorios')
						->select('generalidadesterritorios.*')
						->where(DB::raw('YEAR(anioGT)'), $comprobar)
						->get();

		$ban = False;

		foreach ($resultados as $resultado) {
			$ban = True;
		
		};

		if($ban == False){
			
			$generalidadesterritorios = array('anioGT' => $anioGT,
											'temperatura' => $temperatura,
											'alturaNivMar' => $alturaNivMar,
											'municipio_id' => $municipio_id,
											'created_at' => $created_at,
											'updated_at' => $updated_at, );

			DB::table('generalidadesterritorios')
				->insert($generalidadesterritorios);

			$resultados = DB::table('generalidadesterritorios')
						->select('generalidadesterritorios.*')
						->orderBy('id', 'desc')
						->limit(1)
						->get();

			foreach ($resultados as $resultado) {
				$generalidadterritorio_id = $resultado->id;
			
			};

			$generalidades = array('ruralG' => $ruralG,
								'urbanoG' => $urbanoG,
								'totalG' => $totalG,
								'generalidadterritorio_id' => $generalidadterritorio_id,
								'created_at' => $created_at,
								'updated_at' => $updated_at, );

			DB::table('generalidades')
				->insert($generalidades);

			$territorios = array('constRural' => $constRural,
								'constUrbano' => $constUrbano,
								'constTotal' => $constTotal,
								'terrRural' => $terrRural,
								'terrUrbano' => $constUrbano,
								'terrTotal' => $terrTotal,
								'generalidadterritorio_id' => $generalidadterritorio_id,
								'created_at' => $created_at,
								'updated_at' => $updated_at, );

			DB::table('territorios')
				->insert($territorios);

			$predios = array('ruralP' => $ruralP,
							'urbanoP' => $urbanoP,
							'totalP' => $totalP,
							'generalidadterritorio_id' => $generalidadterritorio_id,
							'created_at' => $created_at,
							'updated_at' => $updated_at, );

			DB::table('predios')
				->insert($predios);

			$html = "Se registrarón los datos correctamente";

		}else{

			$html = "Ya se encuentra registrado ese año";

		}

		return Response::json(array('html' => $html, ));

	}

	// Muestra los datos que seran actualizados en generalidades y territorio 
	public function mostrarActualizarGeneralidadesterritorio(){

		$idGT = $_GET['idGT'];
		
		$resultados = DB::table('generalidadesterritorios')
						->join('generalidades', 'generalidadesterritorios.id', 'generalidades.generalidadterritorio_id')
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

		$html = "";

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

			$html .= "<div class='col-lg-12 col-md-12 col-sm-12'>
					<div class='col-lg-4 col-md-4 col-sm-4'>
					<label for='anio2' class='text-label'>Año</label>       
					<input id='anio2' type='date'value='$anio' disabled='' class='form-control'>
					</div>
					<div class='col-lg-4 col-md-4 col-sm-4'>
					<label for='temperatura' class='text-label'>Temperatura</label>        
					<input id='temperatura2' type='text' value='$temperatura' class='form-control'>
					</div>
					<div class='col-lg-4 col-md-4 col-sm-4'>                    
					<label for='alturaNivMar' class='text-label'>Altura sobre el nivel del mar</label>     
					<input id='alturaNivMar2' type='text' value='$alturaNivMar' class='form-control'>
					</div>
					</div>

					<div class='col-lg-12 col-md-12 col-sm-12'><br></div>

					<div class='col-lg-12 col-md-12 col-sm-12'>
					<div class='col-lg-12 col-md-12 col-sm-12' style='font-size: 18px'>

					<label for='ruralG' class='text-label'>Generalidades</label>
					</div>
					<div class='col-lg-4 col-md-4 col-sm-4'>              
					<label for='ruralG' class='text-label'>Rural</label>       
					<input id='ruralG2' type='text' value='$ruralG' oninput='calcularTotalG2()' class='form-control'>
					</div>
					<div class='col-lg-4 col-md-4 col-sm-4' >
					<label for='urbanoG' class='text-label'>Urbano</label>     
					<input id='urbanoG2' type='text' value='$urbanoG' oninput='calcularTotalG2()' class='form-control'>
					</div>
					<div class='col-lg-4 col-md-4 col-sm-4'>
					<label for='totalG' class='text-label'>Total</label>       
					<input id='totalG2' type='text' value='$totalG' disabled='' class='form-control'>
					</div>
					</div>

					<div class='col-lg-12 col-md-12 col-sm-12'><br></div>

					<div class='col-lg-12 col-md-12 col-sm-12'>
					<div class='col-lg-12 col-md-12 col-sm-12' style='font-size: 18px'>
					<label for='constRural'>Territorio</label>
					</div>
					<div class='col-lg-6 col-md-6 col-sm-6'>
					<div class='col-lg-12 col-md-12 col-sm-12' style='font-size: 16px; padding-left: 0px; padding-right: 0px'>
					<label for='constRural' class='text-label'><i class='fa fa-chevron-right' aria-hidden='true'></i> Construida</label>
					</div>
					<div class='col-lg-6 col-md-6 col-sm-6' style='padding-left: 0px;'>
					<label for='constRural' class='text-label'>Rural</label>                          
					<input id='constRural2' type='text' value='$constRural' oninput='calcularConstTotal2()' class='form-control'>
					</div>
					<div class='col-lg-6 col-md-6 col-sm-6' style='padding-right: 0px'>
					<label for='constUrbano' class='text-label'>Urbano</label>     
					<input id='constUrbano2' type='text' value='$constUrbano' oninput='calcularConstTotal2()' class='form-control'>
					</div>
					<div class='col-lg-12 col-md-12 col-sm-12' style='padding-left: 0px; padding-right: 0px'><br>
					<label for='constTotal' class='text-label'>Total</label>       
					<input id='constTotal2' type='text' value='$constTotal' disabled='' class='form-control'>
					</div>
					</div>

					<div class='col-lg-6 col-md-6 col-sm-6'>
					<div class='col-lg-12 col-md-12 col-sm-12' style='font-size: 16px; padding-left: 0px; padding-right: 0px'>
					<label for='terrRural' class='text-label'><i class='fa fa-chevron-right' aria-hidden='true'></i> Terreno</label>
					</div>
					<div class='col-lg-6 col-md-6 col-sm-6' style='padding-left: 0px;'>
					<label for='terrRural' class='text-label' >Rural</label>         
					<input id='terrRural2' type='text' value='$terrRural' oninput='calcularTerrTotal2()' class='form-control'>
					</div>
					<div class='col-lg-6 col-md-6 col-sm-6' style='padding-right: 0px'>
					<label for='terrUrbano' class='text-label' >Urbano</label>     
					<input id='terrUrbano2' type='text' value='$terrUrbano' oninput='calcularTerrTotal2()' class='form-control'>
					</div>
					<div class='col-lg-12 col-md-12 col-sm-12' style='padding-left: 0px; padding-right: 0px'><br>
					<label for='terrTotal' class='text-label' >Total</label>     
					<input id='terrTotal2' type='text' value='$terrTotal' disabled='' class='form-control'>
					</div>
					</div>
					</div>

					<div class='col-lg-12 col-md-12 col-sm-12'><br></div>

					<div class='col-lg-12 col-md-12 col-sm-12'>
					<div class='col-lg-12 col-md-12 col-sm-12' style='font-size: 18px'>
					<label for='ruralP' class='text-label'>Predios</label>
					</div>
					<div class='col-lg-4 col-md-4 col-sm-4'>
					<label for='ruralP' class='text-label'>Rural</label>       
					<input id='ruralP2' type='text' value='$ruralP' oninput='calcularTotalP2()' class='form-control'>
					</div>
					<div class='col-lg-4 col-md-4 col-sm-4'>
					<label for='urbanoP' class='text-label'>Urbano</label>    
					<input id='urbanoP2' type='text' value='$urbanoP' oninput='calcularTotalP2()' class='form-control'>
					</div>
					<div class='col-lg-4 col-md-4 col-sm-4'>
					<label for='totalP' class='text-label'>Total</label>      
					<input id='totalP2' type='text' value='$totalP' disabled='' class='form-control'>
					</div>
					</div>

					<div class='col-lg-12 col-md-12 col-sm-12'><br></div>";

			$html .= "<input id='idGT' type='text' value='$id' style='display: none;'>";
		
		};

		return Response::json(array('html' => $html, ));

	}

	// Muestra la tabla de generalidades y territorio en la vista de información
	public function mostrarGeneralidadesterritorio(){

		$idMunicipio = $_GET['idMunicipio'];
		$anioGT = $_GET['anioGT'];

		$resultados = DB::table('generalidadesterritorios')
						->join('generalidades', 'generalidadesterritorios.id', 'generalidades.generalidadterritorio_id')
						->join('territorios', 'generalidadesterritorios.id', 'territorios.generalidadterritorio_id')
						->join('predios', 'generalidadesterritorios.id', 'predios.generalidadterritorio_id')
						->select('generalidadesterritorios.*',
								'generalidades.*',
								'territorios.*',
								'predios.*')
						->where('anioGT', $anioGT)
						->get();

		$html = "";

		// Tabla de datos principales
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
							
		foreach ($resultados as $resultado) {
			$temperatura = $resultado->temperatura;

			if($temperatura == 0){
				$temperatura = "N.D.";
			}
			
			$html .= "<td>$temperatura</td>";
								
		};

		$html .= "</tr>
				<tr'>
				<td>Altura sobre el nivel del mal</td>";

		foreach ($resultados as $resultado) {
			$alturaNivMar = $resultado->alturaNivMar;

			if($alturaNivMar == 0){
				$alturaNivMar= "N.D.";
			}
			
			$html .= "<td>$alturaNivMar</td>";

		};

		$html .= "</tr>
				</tbody>
				</table>

				</div>";

		// Tabla de predios
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

			$html .= "<td>$ruralP</td>";
		
		};

		$html .= "</tr>
				<tr class='border-dotted'>
				<td>Zona urbana</td>";

		foreach ($resultados as $resultado) {
			$urbanoP = $resultado->urbanoP;

			$html .= "<td>$urbanoP</td>";							
		};

		$html .= "</tr>
				<tr>
				<td>Total por municipio</td>";

		foreach ($resultados as $resultado) {
			$totalP = $resultado->totalP;

			$html .= "<td>$totalP</td>";
		
		};

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
		
			$html .= "<td>$ruralG</td>";
								
		};

		$html .= "</tr>
				<tr class='border-dotted'>
				<td>Urbana</td>";

		foreach ($resultados as $resultado) {
			$urbanoG = $resultado->urbanoG;

			$html .= "<td>$urbanoG</td>";
		}

		$html .= "</tr>
				<tr>
				<td>Extensión total</td>";

		foreach ($resultados as $resultado) {
			$totalG = $resultado->totalG;

			$html .= "<td>$totalG</td>";
		}
		
		$html .= "</tr>
				</tbody>
				</table>

				</div>";

		// Tabla de territorio
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

			$html .= "<td>$constRural</td>
						<td>$terrRural</td>";
		
		};

		$html .= "</tr>
				<tr class='border-dotted'>
				<td>Zona urbana</td>";

		foreach ($resultados as $resultado) {
			$constUrbano = $resultado->constUrbano;
			$terrUrbano = $resultado->terrUrbano;

			$html .= "<td>$constUrbano</td>
						<td>$terrUrbano</td>";						
		};

		$html .= "</tr>
				<tr>
				<td>Total por municipio</td>";

		foreach ($resultados as $resultado) {
			$constTotal = $resultado->constTotal;
			$terrTotal = $resultado->terrTotal;

			$html .= "<td>$constTotal</td>
						<td>$terrTotal</td>";
		
		};

		$html .= "</tr>
				</tbody>
				</table>

				</div>";

		return Response::json(array('html' => $html, ));

	}

	// Muestra la tabla generalidades y territorio en la vista del administrador
	public function mostrarTablaGeneralidadesterritorio(){

		$idMunicipio = $_GET['idMunicipio'];

		$resultados = DB::table('generalidadesterritorios')
						->select('generalidadesterritorios.id',
								DB::raw('YEAR(anioGT) as YEARanioGT'),
								'generalidadesterritorios.temperatura',
								'generalidadesterritorios.alturaNivMar')
						->where('generalidadesterritorios.municipio_id', $idMunicipio)
						->orderBy('anioGT')
						->get();

		$html = "";
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
					<td><a id='$id' href='#' class='btn btn-success' data-toggle='modal' data-target='#modalMostrarActualizar'>Editar</a></td>
					</tr>";
		
		};

		$html .= "</tbody>
				</table>";

		// <a id='$id' href='#' class='btn btn-danger'>Borrar</a>

		return Response::json(array('html' => $html, ));

	}

}
