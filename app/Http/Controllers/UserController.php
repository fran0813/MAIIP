<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use \Response;
use App\Departamento;
use App\Municipio;
use App\Generalidadterritorio;
use App\Viviendaserviciopublico;
use App\Salud;
use App\Seguridadviolencia;
use App\Economicosocial;
use App\Finanza;

class UserController extends Controller
{
    public function index()
	{
		return view('user.informacion');
	}

	public function establecerDepartamento(Request $request)
	{
		$idDepartamento = $_POST['idDepartamento'];
		$request->session()->put("departamento_select",$idDepartamento);
		return Response::json(array('msg' => "ok",));
	}

	public function mostrarDepartamentos(Request $request)
    {
		$html = "";
		$departamento_select = null;

	    if ($request->session()->get("departamento_select")) {
	        $departamento_select = $request->session()->get("departamento_select");
	    }

    	$html .= "<option>Seleccione un departamento</option>";

     	$departamentos = Departamento::orderBy('departamentos.nombre', 'desc')
     								->get();
      	foreach ($departamentos as $departamento) {
	        $id = $departamento->id;
	        $nombre = $departamento->nombre;

	        if ($id == $departamento_select) {
	          $html .= "<option selected value='$id'>$nombre</option>";
	        } else {
	          $html .= "<option value='$id'>$nombre</option>";
	      	}
    	}

    	return Response::json(array('html' => $html));
    }

	public function establecerMunicipio(Request $request)
	{
		$idMunicipio = $_POST['idMunicipio'];
		$request->session()->put("municipio_select",$idMunicipio);
		return Response::json(array('msg' => "ok",));
	}

	public function mostrarMunicipios(Request $request)
	{
		$html = "";
		$municipio_select = null;
		$idDepartamento = $_GET['idDepartamento'];

		if ($request->session()->get("municipio_select")){
			$municipio_select = $request->session()->get("municipio_select");
		}

		$html .= "<option>Seleccione un municipio</option>";

		$municipios = Municipio::where('departamento_id', $idDepartamento)
						->orderBy('municipios.nombre', 'desc')
						->get();
		foreach ($municipios as $municipio) {
			$id = $municipio->id;
			$nombre = $municipio->nombre;

			if ($id == $municipio_select) {
				$html .= "<option selected value='$id'>$nombre</option>";
			} else {
				$html .= "<option value='$id'>$nombre</option>";
			}
		};

		return Response::json(array('html' => $html));
	}

	public function mostrarCodigo(Request $request)
	{
		$html = "";
		$idDepartamento = $_GET['idDepartamento'];
		$idMunicipio = $_GET['idMunicipio'];

		$resultados = Departamento::join('municipios', 'departamentos.id', 'municipios.departamento_id')
						->select('departamentos.codigoD', 'municipios.codigoM')
						->where('departamentos.id', $idDepartamento)
						->where('municipios.id', $idMunicipio)
						->get();
		foreach ($resultados as $resultado) {
			$coddep = $resultado->codigoD;
			$codmun = $resultado->codigoM;
			$html .= "<input class='form-control' type='text' disabled='true' value='$coddep$codmun'>";

		};

		if ($idMunicipio == "Seleccione un municipio") {
			$html .= "<input class='form-control' type='text' value='' disabled=''>";
		}

		return Response::json(array('html' => $html));
	}

	public function mostrarAñoGT(Request $request)
	{
		$html = "";
		$idMunicipio = $_GET['idMunicipio'];

		$html .= "<option>Año</option>";

		$resultados = Generalidadterritorio::select(DB::raw('YEAR(anioGT) as YEARanioGT'))
						->where('generalidadesterritorios.municipio_id', $idMunicipio)
						->get();
		foreach ($resultados as $resultado) {
			$anio = $resultado->YEARanioGT;
			$html .= "<option value='$anio'>$anio</option>";
		};

		return Response::json(array('html' => $html));
	}

	public function mostrarAñoVSP(Request $request)
	{
		$html = "";
		$idMunicipio = $_GET['idMunicipio'];

		$html .= "<option>Año</option>";

		$resultados = Viviendaserviciopublico::select(DB::raw('YEAR(anioVSP) as YEARanioVSP'))
						->where('viviendasserviciospublicos.municipio_id', $idMunicipio)
						->get();
		foreach ($resultados as $resultado) {
			$anio = $resultado->YEARanioVSP;
			$html .= "<option value='$anio'>$anio</option>";
		};

		return Response::json(array('html' => $html));
	}

	public function mostrarAñoS(Request $request)
	{
		$html = "";
		$idMunicipio = $_GET['idMunicipio'];

		$html .= "<option>Año</option>";

		$resultados = Salud::select(DB::raw('YEAR(anioS) as YEARanioS'))
						->where('salud.municipio_id', $idMunicipio)
						->get();
		foreach ($resultados as $resultado) {
			$anio = $resultado->YEARanioS;
			$html .= "<option value='$anio'>$anio</option>";
		};

		return Response::json(array('html' => $html));
	}

	public function mostrarAñoSV(Request $request)
	{
		$html = "";
		$idMunicipio = $_GET['idMunicipio'];

		$html .= "<option>Año</option>";

		$resultados = Seguridadviolencia::select(DB::raw('YEAR(anioSV) as YEARanioSV'))
						->where('seguridadviolencia.municipio_id', $idMunicipio)
						->get();
		foreach ($resultados as $resultado) {
			$anio = $resultado->YEARanioSV;
			$html .= "<option value='$anio'>$anio</option>";
		};

		return Response::json(array('html' => $html));
	}

	public function mostrarAñoES(Request $request)
	{
		$html = "";
		$idMunicipio = $_GET['idMunicipio'];

		$html .= "<option>Año</option>";

		$resultados = Economicosocial::select(DB::raw('YEAR(anioES) as YEARanioES'))
						->where('economicosocial.municipio_id', $idMunicipio)
						->get();
		foreach ($resultados as $resultado) {
			$anio = $resultado->YEARanioES;
			$html .= "<option value='$anio'>$anio</option>";
		};

		return Response::json(array('html' => $html));
	}

	public function mostrarAñoF(Request $request)
	{
		$html = "";
		$idMunicipio = $_GET['idMunicipio'];

		$html .= "<option>Año</option>";

		$resultados = Finanza::select(DB::raw('YEAR(anioF) as YEARanioF'))
						->where('finanza.municipio_id', $idMunicipio)
						->get();
		foreach ($resultados as $resultado) {
			$anio = $resultado->YEARanioF;
			$html .= "<option value='$anio'>$anio</option>";
		};

		return Response::json(array('html' => $html));
	}
}
