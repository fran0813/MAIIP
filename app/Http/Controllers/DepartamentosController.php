<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\departamento;
use \Response;

class DepartamentosController extends Controller
{
	public function __construct(){
	}
	public function mostrarDepartamentos(){

		$departamentos = departamento::all();

		$default_departamento = 2;

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
}
