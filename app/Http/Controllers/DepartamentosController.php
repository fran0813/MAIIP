<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\departamento;
use App\municipio;
use \Response;

class DepartamentosController extends Controller
{
	public function __construct(){
	}

	public function establecerDepartamento(Request $request){

		$idDepartamento = $_POST['idDepartamento'];
		$request->session()->put("departamento_select",$idDepartamento);
		return Response::json(array('msg' => "ok",));

	}

	// public function mostrarDepartamentos(Request $request){

	// 	$departamentos = departamento::all();

	// 	// $default_departamento = 1;

	// 	$departamento_select = null;

	// 	if($request->session()->get("departamento_select") ){
			
	// 		$departamento_select = $request->session()->get("departamento_select");
	// 	}

	// 	$html = "";
	// 	$html .= "<option>Seleccione un departamento</option>";

	// 	foreach ($departamentos as $departamento) {
	// 		$id = $departamento->id;
	// 		$nombre = $departamento->nombre;

	// 		if($id == $departamento_select){
	// 			$html .= "<option selected value='$id'>$nombre</option>";
	// 		}else{
	// 			$html .= "<option value='$id'>$nombre</option>";
	// 		}
	// 	};

	// 	return Response::json(array('html' => $html, 'departamentos' => $departamentos->toArray()));


	// }

	public function mostrarDepartamentos(){

		$departamentos = departamento::all();

		$default_departamento = 1;

		$html = "";
		$html .= "<option>Seleccione un departamento</option>";

		foreach ($departamentos as $departamento) {
			$id = $departamento->id;
			$nombre = $departamento->nombre;
			if ( $id == $default_departamento ){
				$html .= "<option selected value='$id'>$nombre</option>";
			}else{
				$html .= "<option value='$id'>$nombre</option>";
			}
		};

		return Response::json(array('html' => $html, 'departamentos' => $departamentos->toArray()));


	}

	public function establecerMunicipio(Request $request){

		$idMunicipio = $_POST['idMunicipio'];
		$request->session()->put("municipio_select",$idMunicipio);
		return Response::json(array('msg' => "ok",));

	}
	
	public function mostrarMunicipios(Request $request){

		$idDepartamento = $_GET['idDepartamento'];
		$municipios = municipio::where("departamento_id",$idDepartamento)->get();

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
}
