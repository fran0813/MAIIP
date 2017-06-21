<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \Response;

class DepartamentosController extends Controller
{
	public function __construct(){
	}

	// Establece un departamento cuando es seleccionado
	public function establecerDepartamento(Request $request){

		$idDepartamento = $_POST['idDepartamento'];
		$request->session()->put("departamento_select",$idDepartamento);
		return Response::json(array('msg' => "ok",));

	}

	// Muestra los departamentos
	public function mostrarDepartamentos(Request $request){

		// $departamentos = departamento::all();
		$departamentos = DB::table('departamentos')
							->select('departamentos.*')
							->orderBy('departamentos.nombre', 'desc')
							->get();

		$departamento_select = null;

		if($request->session()->get("departamento_select") ){			

			$departamento_select = $request->session()->get("departamento_select");
			
		}

		$html = "";
		$html .= "<option>Seleccione un departamento</option>";

		foreach ($departamentos as $departamento) {
			$id = $departamento->id;
			$nombre = $departamento->nombre;

			if($id == $departamento_select){

				$html .= "<option selected value='$id'>$nombre</option>";

			}else{

				$html .= "<option value='$id'>$nombre</option>";

			}
		};

		return Response::json(array('html' => $html, 'departamentos' => $departamentos->toArray()));

	}

	// Establece un municipio cuando es seleccionado
	public function establecerMunicipio(Request $request){

		$idMunicipio = $_POST['idMunicipio'];
		$request->session()->put("municipio_select",$idMunicipio);
		return Response::json(array('msg' => "ok",));

	}
	
	// Muestra los municipios
	public function mostrarMunicipios(Request $request){

		$idDepartamento = $_GET['idDepartamento'];

		// $municipios = municipio::where("departamento_id",$idDepartamento)->get();
		$municipios = DB::table('municipios')
						->select('municipios.*')
						->where('departamento_id', '=', $idDepartamento)
						->orderBy('municipios.nombre', 'desc')
						->get();

		$municipio_select = null;

		if ($request->session()->get("municipio_select")){			
			$municipio_select = $request->session()->get("municipio_select");
		}

		$html = "";
		$html .= "<option>Seleccione un municipio</option>";
		
		foreach ($municipios as $municipio) {
			$id = $municipio->id;
			$nombre = $municipio->nombre;

			if($id == $municipio_select){

				$html .= "<option selected value='$id'>$nombre</option>";

			}else{

				$html .= "<option value='$id'>$nombre</option>";

			}

		};

		return Response::json(array('html' => $html, 'municipio' => $municipios->toArray()));

	}

	// Muestra el codigo
	public function mostrarCodigo(Request $request){

		$idDepartamento = $_GET['idDepartamento'];
		$idMunicipio = $_GET['idMunicipio'];

		$resultados = DB::table('departamentos')
						->join('municipios', 'departamentos.id', '=', 'municipios.departamento_id')
						->select('departamentos.codigoD', 'municipios.codigoM')
						->where('departamentos.id', '=', $idDepartamento)
						->where('municipios.id', '=', $idMunicipio)
						->get();

		$html = "";

		foreach ($resultados as $resultado) {
			$coddep = $resultado->codigoD;
			$codmun = $resultado->codigoM;
			
			$html .= "<input class='form-control' type='text' disabled='true' value='$coddep$codmun'>";

		};

		if($idMunicipio == "Seleccione un municipio"){

			$html .= "<input class='form-control' type='text' value='' disabled=''>";

		}

		return Response::json(array('html' => $html,));

	}

	// Muestra el año de las generalidades y territorio
	public function mostrarAñoGT(Request $request){

		$idMunicipio = $_GET['idMunicipio'];

		$resultados = DB::table('generalidadesterritorios')
						->select('generalidadesterritorios.anioGT')
						->where('generalidadesterritorios.municipio_id', '=', $idMunicipio)
						->get();

		$html = "";
		$html .= "<option>Año</option>";

		foreach ($resultados as $resultado) {
			$anio = $resultado->anioGT;
			
			$html .= "<option value='$anio'>$anio</option>";

		};

		return Response::json(array('html' => $html,));

	}

	// Muestra el año de las vivienda y servicios publicos
	public function mostrarAñoVSP(Request $request){

		$idMunicipio = $_GET['idMunicipio'];

		$resultados = DB::table('viviendasserviciospublicos')
						->select('viviendasserviciospublicos.anioVSP')
						->where('viviendasserviciospublicos.municipio_id', '=', $idMunicipio)
						->get();

		$html = "";
		$html .= "<option>Año</option>";

		foreach ($resultados as $resultado) {
			$anio = $resultado->anioVSP;
			
			$html .= "<option value='$anio'>$anio</option>";

		};

		return Response::json(array('html' => $html,));

	}

	// Muestra el año de las vivienda y servicios publicos
	public function mostrarAñoS(Request $request){

		$idMunicipio = $_GET['idMunicipio'];

		$resultados = DB::table('salud')
						->select('salud.anioS')
						->where('salud.municipio_id', '=', $idMunicipio)
						->get();

		$html = "";
		$html .= "<option>Año</option>";

		foreach ($resultados as $resultado) {
			$anio = $resultado->anioS;
			
			$html .= "<option value='$anio'>$anio</option>";

		};

		return Response::json(array('html' => $html,));

	}
	
}
