<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \Response;
use App\Finanza;
use App\Planfinanciero;
use App\Ejecucionpresupuesto;
use App\Indicedesempeñointegral;
use App\Indicedesempeñofiscal;

class FinanzaController extends Controller
{
    public function actualizarFinanza(Request $request)
    {
		$idF = $_POST['idF'];
		$ingTot = $_POST['ingTot'];
		$ingCor = $_POST['ingCor'];
		$ingTri = $_POST['ingTri'];
		$ingPre = $_POST['ingPre'];
		$ingIndCom = $_POST['ingIndCom'];
		$ingSobGas = $_POST['ingSobGas'];
		$ingOtr = $_POST['ingOtr'];
		$ingNoTri = $_POST['ingNoTri'];
		$ingTra = $_POST['ingTra'];
		$ingNivNac = $_POST['ingNivNac'];
		$ingNoTriOtr = $_POST['ingNoTriOtr'];
		$gasTot = $_POST['gasTot'];
		$gasCor = $_POST['gasCor'];
		$fun = $_POST['fun'];
		$serFun = $_POST['serFun'];
		$gasGen = $_POST['gasGen'];
		$traPag = $_POST['traPag'];
		$intDeuPub = $_POST['intDeuPub'];
		$defAhoCor = $_POST['defAhoCor'];
		$ingCap = $_POST['ingCap'];
		$reg = $_POST['reg'];
		$traNac = $_POST['traNac'];
		$cof = $_POST['cof'];
		$ingCapOtr = $_POST['ingCapOtr'];
		$gasCap = $_POST['gasCap'];
		$forBruCapFij = $_POST['forBruCapFij'];
		$gasCapOtr = $_POST['gasCapOtr'];
		$defSupTot = $_POST['defSupTot'];
		$fin = $_POST['fin'];
		$creNet = $_POST['creNet'];
		$des = $_POST['des'];
		$amo = $_POST['amo'];
		$recBalVarDepOtr = $_POST['recBalVarDepOtr'];
		$ejeIngTot = $_POST['ejeIngTot'];
		$ejeIngCor = $_POST['ejeIngCor'];
		$ejeIngTri = $_POST['ejeIngTri'];
		$ejeIngPre = $_POST['ejeIngPre'];
		$ejeIngIndCom = $_POST['ejeIngIndCom'];
		$ejeIngSobGas = $_POST['ejeIngSobGas'];
		$ejeIngOtr = $_POST['ejeIngOtr'];
		$ejeIngNoTri = $_POST['ejeIngNoTri'];
		$ejeIngTra = $_POST['ejeIngTra'];
		$ejeIngNivNac = $_POST['ejeIngNivNac'];
		$ejeIngNoTriOtr = $_POST['ejeIngNoTriOtr'];
		$ejeGasTot = $_POST['ejeGasTot'];
		$ejeGasCor = $_POST['ejeGasCor'];
		$ejeFun = $_POST['ejeFun'];
		$ejeSerFun = $_POST['ejeSerFun'];
		$ejeGasGen = $_POST['ejeGasGen'];
		$ejeTraPag = $_POST['ejeTraPag'];
		$ejeIntDeuPub = $_POST['ejeIntDeuPub'];
		$ejeDefAhoCor = $_POST['ejeDefAhoCor'];
		$ejeIngCap = $_POST['ejeIngCap'];
		$ejeReg = $_POST['ejeReg'];
		$ejeTraNac = $_POST['ejeTraNac'];
		$ejeCof = $_POST['ejeCof'];
		$ejeIngCapOtr = $_POST['ejeIngCapOtr'];
		$ejeGasCap = $_POST['ejeGasCap'];
		$ejeForBruCapFij = $_POST['ejeForBruCapFij'];
		$ejeGasCapOtr = $_POST['ejeGasCapOtr'];
		$ejeDefSupTot = $_POST['ejeDefSupTot'];
		$ejeFin = $_POST['ejeFin'];
		$ejeCreNet = $_POST['ejeCreNet'];
		$ejeDes = $_POST['ejeDes'];
		$ejeAmo = $_POST['ejeAmo'];
		$ejeRecBalVarDepOtr = $_POST['ejeRecBalVarDepOtr'];
		$desIntCapAdm = $_POST['desIntCapAdm'];
		$desIntEfiTot = $_POST['desIntEfiTot'];
		$desIntGes = $_POST['desIntGes'];
		$desIntIndInt = $_POST['desIntIndInt'];
		$desIntReqLeg = $_POST['desIntReqLeg'];
		$desIntIndDesFis = $_POST['desIntIndDesFis'];
		$autGasFun = $_POST['autGasFun'];
		$respSerDeu = $_POST['respSerDeu'];
		$depTraNacReg = $_POST['depTraNacReg'];
		$genRecPro = $_POST['genRecPro'];
		$magInv = $_POST['magInv'];
		$capAho = $_POST['capAho'];
		$indDesFis = $_POST['indDesFis'];
		$posNivNac = $_POST['posNivNac'];
		$posNivDep = $_POST['posNivDep'];

		$planfinanciero_update = Planfinanciero::find($idF);
        $planfinanciero_update->ingTot = $ingTot;
		$planfinanciero_update->ingCor = $ingCor;
		$planfinanciero_update->ingTri = $ingTri;
		$planfinanciero_update->ingPre = $ingPre;
		$planfinanciero_update->ingIndCom = $ingIndCom;
		$planfinanciero_update->ingSobGas = $ingSobGas;
		$planfinanciero_update->ingOtr = $ingOtr;
		$planfinanciero_update->ingNoTri = $ingNoTri;
		$planfinanciero_update->ingTra = $ingTra;
		$planfinanciero_update->ingNivNac = $ingNivNac;
		$planfinanciero_update->ingNoTriOtr = $ingNoTriOtr;
		$planfinanciero_update->gasTot = $gasTot;
		$planfinanciero_update->gasCor = $gasCor;
		$planfinanciero_update->fun = $fun;
		$planfinanciero_update->serFun = $serFun;
		$planfinanciero_update->gasGen = $gasGen;
		$planfinanciero_update->traPag = $traPag;
		$planfinanciero_update->intDeuPub = $intDeuPub;
		$planfinanciero_update->defAhoCor = $defAhoCor;
		$planfinanciero_update->ingCap = $ingCap;
		$planfinanciero_update->reg = $reg;
		$planfinanciero_update->traNac = $traNac;
		$planfinanciero_update->cof = $cof;
		$planfinanciero_update->ingCapOtr = $ingCapOtr;
		$planfinanciero_update->gasCap = $gasCap;
		$planfinanciero_update->forBruCapFij = $forBruCapFij;
		$planfinanciero_update->gasCapOtr = $gasCapOtr;
		$planfinanciero_update->defSupTot = $defSupTot;
		$planfinanciero_update->fin = $fin;
		$planfinanciero_update->creNet = $creNet;
		$planfinanciero_update->des = $des;
		$planfinanciero_update->amo = $amo;
		$planfinanciero_update->recBalVarDepOtr = $recBalVarDepOtr;
        $planfinanciero_update->save();

		$ejecicionespresupuesto_update = Ejecucionpresupuesto::find($idF);
        $ejecicionespresupuesto_update->ejeIngTot = $ejeIngTot;
		$ejecicionespresupuesto_update->ejeIngCor = $ejeIngCor;
		$ejecicionespresupuesto_update->ejeIngTri = $ejeIngTri;
		$ejecicionespresupuesto_update->ejeIngPre = $ejeIngPre;
		$ejecicionespresupuesto_update->ejeIngIndCom = $ejeIngIndCom;
		$ejecicionespresupuesto_update->ejeIngSobGas = $ejeIngSobGas;
		$ejecicionespresupuesto_update->ejeIngOtr = $ejeIngOtr;
		$ejecicionespresupuesto_update->ejeIngNoTri = $ejeIngNoTri;
		$ejecicionespresupuesto_update->ejeIngTra = $ejeIngTra;
		$ejecicionespresupuesto_update->ejeIngNivNac = $ejeIngNivNac;
		$ejecicionespresupuesto_update->ejeIngNoTriOtr = $ejeIngNoTriOtr;
		$ejecicionespresupuesto_update->ejeGasTot = $ejeGasTot;
		$ejecicionespresupuesto_update->ejeGasCor = $ejeGasCor;
		$ejecicionespresupuesto_update->ejeFun = $ejeFun;
		$ejecicionespresupuesto_update->ejeSerFun = $ejeSerFun;
		$ejecicionespresupuesto_update->ejeGasGen = $ejeGasGen;
		$ejecicionespresupuesto_update->ejeTraPag = $ejeTraPag;
		$ejecicionespresupuesto_update->ejeIntDeuPub = $ejeIntDeuPub;
		$ejecicionespresupuesto_update->ejeDefAhoCor = $ejeDefAhoCor;
		$ejecicionespresupuesto_update->ejeIngCap = $ejeIngCap;
		$ejecicionespresupuesto_update->ejeReg = $ejeReg;
		$ejecicionespresupuesto_update->ejeTraNac = $ejeTraNac;
		$ejecicionespresupuesto_update->ejeCof = $ejeCof;
		$ejecicionespresupuesto_update->ejeIngCapOtr = $ejeIngCapOtr;
		$ejecicionespresupuesto_update->ejeGasCap = $ejeGasCap;
		$ejecicionespresupuesto_update->ejeForBruCapFij = $ejeForBruCapFij;
		$ejecicionespresupuesto_update->ejeGasCapOtr = $ejeGasCapOtr;
		$ejecicionespresupuesto_update->ejeDefSupTot = $ejeDefSupTot;
		$ejecicionespresupuesto_update->ejeFin = $ejeFin;
		$ejecicionespresupuesto_update->ejeCreNet = $ejeCreNet;
		$ejecicionespresupuesto_update->ejeDes = $ejeDes;
		$ejecicionespresupuesto_update->ejeAmo = $ejeAmo;
		$ejecicionespresupuesto_update->ejeRecBalVarDepOtr = $ejeRecBalVarDepOtr;
        $ejecicionespresupuesto_update->save();

		$indicedesempeñointegral_update = Indicedesempeñointegral::find($idF);
        $indicedesempeñointegral_update->desIntCapAdm = $desIntCapAdm;
		$indicedesempeñointegral_update->desIntEfiTot = $desIntEfiTot;
		$indicedesempeñointegral_update->desIntGes = $desIntGes;
		$indicedesempeñointegral_update->desIntIndInt = $desIntIndInt;
		$indicedesempeñointegral_update->desIntReqLeg = $desIntReqLeg;
		$indicedesempeñointegral_update->desIntIndDesFis = $desIntIndDesFis;
        $indicedesempeñointegral_update->save();

        $indicedesempeñofiscal_update = Indicedesempeñofiscal::find($idF);
        $indicedesempeñofiscal_update->autGasFun = $autGasFun;
		$indicedesempeñofiscal_update->respSerDeu = $respSerDeu;
		$indicedesempeñofiscal_update->depTraNacReg = $depTraNacReg;
		$indicedesempeñofiscal_update->genRecPro = $genRecPro;
		$indicedesempeñofiscal_update->magInv = $magInv;
		$indicedesempeñofiscal_update->capAho = $capAho;
		$indicedesempeñofiscal_update->indDesFis = $indDesFis;
		$indicedesempeñofiscal_update->posNivNac = $posNivNac;
		$indicedesempeñofiscal_update->posNivDep = $posNivDep;
        $indicedesempeñofiscal_update->save();

		$html = "Se actualizaron los datos correctamente";

		return Response::json(array('html' => $html));
	}

	public function borrarFinanza(Request $request)
	{
		$idF = $_GET['idF'];

		$planfinanciero_delete = Planfinanciero::find($idF);
        $planfinanciero_delete->delete();

		$ejecicionespresupuesto_delete = Ejecucionpresupuesto::find($idF);
        $ejecicionespresupuesto_delete->delete();

        $indicedesempeñointegral_delete = Indicedesempeñointegral::find($idF);
        $indicedesempeñointegral_delete->delete();

        $indicedesempeñofiscal_delete = Indicedesempeñofiscal::find($idF);
        $indicedesempeñofiscal_delete->delete();

		$finanza_delete = Finanza::find($idF);
        $finanza_delete->delete();

		$html = "Se eliminaron los datos correctamente";

		return Response::json(array('html' => $html));
	}

	public function crearFinanza(Request $request)
	{
		$anioF = $_POST['anioF'];
		$comprobar = $_POST['comprobar'];
		$ingTot = $_POST['ingTot'];
		$ingCor = $_POST['ingCor'];
		$ingTri = $_POST['ingTri'];
		$ingPre = $_POST['ingPre'];
		$ingIndCom = $_POST['ingIndCom'];
		$ingSobGas = $_POST['ingSobGas'];
		$ingOtr = $_POST['ingOtr'];
		$ingNoTri = $_POST['ingNoTri'];
		$ingTra = $_POST['ingTra'];
		$ingNivNac = $_POST['ingNivNac'];
		$ingNoTriOtr = $_POST['ingNoTriOtr'];
		$gasTot = $_POST['gasTot'];
		$gasCor = $_POST['gasCor'];
		$fun = $_POST['fun'];
		$serFun = $_POST['serFun'];
		$gasGen = $_POST['gasGen'];
		$traPag = $_POST['traPag'];
		$intDeuPub = $_POST['intDeuPub'];
		$defAhoCor = $_POST['defAhoCor'];
		$ingCap = $_POST['ingCap'];
		$reg = $_POST['reg'];
		$traNac = $_POST['traNac'];
		$cof = $_POST['cof'];
		$ingCapOtr = $_POST['ingCapOtr'];
		$gasCap = $_POST['gasCap'];
		$forBruCapFij = $_POST['forBruCapFij'];
		$gasCapOtr = $_POST['gasCapOtr'];
		$defSupTot = $_POST['defSupTot'];
		$fin = $_POST['fin'];
		$creNet = $_POST['creNet'];
		$des = $_POST['des'];
		$amo = $_POST['amo'];
		$recBalVarDepOtr = $_POST['recBalVarDepOtr'];
		$ejeIngTot = $_POST['ejeIngTot'];
		$ejeIngCor = $_POST['ejeIngCor'];
		$ejeIngTri = $_POST['ejeIngTri'];
		$ejeIngPre = $_POST['ejeIngPre'];
		$ejeIngIndCom = $_POST['ejeIngIndCom'];
		$ejeIngSobGas = $_POST['ejeIngSobGas'];
		$ejeIngOtr = $_POST['ejeIngOtr'];
		$ejeIngNoTri = $_POST['ejeIngNoTri'];
		$ejeIngTra = $_POST['ejeIngTra'];
		$ejeIngNivNac = $_POST['ejeIngNivNac'];
		$ejeIngNoTriOtr = $_POST['ejeIngNoTriOtr'];
		$ejeGasTot = $_POST['ejeGasTot'];
		$ejeGasCor = $_POST['ejeGasCor'];
		$ejeFun = $_POST['ejeFun'];
		$ejeSerFun = $_POST['ejeSerFun'];
		$ejeGasGen = $_POST['ejeGasGen'];
		$ejeTraPag = $_POST['ejeTraPag'];
		$ejeIntDeuPub = $_POST['ejeIntDeuPub'];
		$ejeDefAhoCor = $_POST['ejeDefAhoCor'];
		$ejeIngCap = $_POST['ejeIngCap'];
		$ejeReg = $_POST['ejeReg'];
		$ejeTraNac = $_POST['ejeTraNac'];
		$ejeCof = $_POST['ejeCof'];
		$ejeIngCapOtr = $_POST['ejeIngCapOtr'];
		$ejeGasCap = $_POST['ejeGasCap'];
		$ejeForBruCapFij = $_POST['ejeForBruCapFij'];
		$ejeGasCapOtr = $_POST['ejeGasCapOtr'];
		$ejeDefSupTot = $_POST['ejeDefSupTot'];
		$ejeFin = $_POST['ejeFin'];
		$ejeCreNet = $_POST['ejeCreNet'];
		$ejeDes = $_POST['ejeDes'];
		$ejeAmo = $_POST['ejeAmo'];
		$ejeRecBalVarDepOtr = $_POST['ejeRecBalVarDepOtr'];
		$desIntCapAdm = $_POST['desIntCapAdm'];
		$desIntEfiTot = $_POST['desIntEfiTot'];
		$desIntGes = $_POST['desIntGes'];
		$desIntIndInt = $_POST['desIntIndInt'];
		$desIntReqLeg = $_POST['desIntReqLeg'];
		$desIntIndDesFis = $_POST['desIntIndDesFis'];
		$autGasFun = $_POST['autGasFun'];
		$respSerDeu = $_POST['respSerDeu'];
		$depTraNacReg = $_POST['depTraNacReg'];
		$genRecPro = $_POST['genRecPro'];
		$magInv = $_POST['magInv'];
		$capAho = $_POST['capAho'];
		$indDesFis = $_POST['indDesFis'];
		$posNivNac = $_POST['posNivNac'];
		$posNivDep = $_POST['posNivDep'];
		$municipio_id = $_POST['municipio_id'];
		$ban = False;

		$resultados = Finanza::where(DB::raw('YEAR(anioF)'), $comprobar)
						->get();
		foreach ($resultados as $resultado) {
			$ban = True;
		}

		if($ban == False){

			$finanza_create = new Finanza;
		    $finanza_create->anioF = $anioF;
	        $finanza_create->municipio_id = $municipio_id;
		    $finanza_create->save();

			$resultados = Finanza::orderBy('id', 'desc')
						->limit(1)
						->get();
			foreach ($resultados as $resultado) {
				$finanza_id = $resultado->id;
			}

			$planfinanciero_create = new Planfinanciero;
	        $planfinanciero_create->ingTot = $ingTot;
			$planfinanciero_create->ingCor = $ingCor;
			$planfinanciero_create->ingTri = $ingTri;
			$planfinanciero_create->ingPre = $ingPre;
			$planfinanciero_create->ingIndCom = $ingIndCom;
			$planfinanciero_create->ingSobGas = $ingSobGas;
			$planfinanciero_create->ingOtr = $ingOtr;
			$planfinanciero_create->ingNoTri = $ingNoTri;
			$planfinanciero_create->ingTra = $ingTra;
			$planfinanciero_create->ingNivNac = $ingNivNac;
			$planfinanciero_create->ingNoTriOtr = $ingNoTriOtr;
			$planfinanciero_create->gasTot = $gasTot;
			$planfinanciero_create->gasCor = $gasCor;
			$planfinanciero_create->fun = $fun;
			$planfinanciero_create->serFun = $serFun;
			$planfinanciero_create->gasGen = $gasGen;
			$planfinanciero_create->traPag = $traPag;
			$planfinanciero_create->intDeuPub = $intDeuPub;
			$planfinanciero_create->defAhoCor = $defAhoCor;
			$planfinanciero_create->ingCap = $ingCap;
			$planfinanciero_create->reg = $reg;
			$planfinanciero_create->traNac = $traNac;
			$planfinanciero_create->cof = $cof;
			$planfinanciero_create->ingCapOtr = $ingCapOtr;
			$planfinanciero_create->gasCap = $gasCap;
			$planfinanciero_create->forBruCapFij = $forBruCapFij;
			$planfinanciero_create->gasCapOtr = $gasCapOtr;
			$planfinanciero_create->defSupTot = $defSupTot;
			$planfinanciero_create->fin = $fin;
			$planfinanciero_create->creNet = $creNet;
			$planfinanciero_create->des = $des;
			$planfinanciero_create->amo = $amo;
			$planfinanciero_create->recBalVarDepOtr = $recBalVarDepOtr;
	        $planfinanciero_create->finanza_id = $finanza_id;
	        $planfinanciero_create->save();

			$ejecicionespresupuesto_create = new Ejecucionpresupuesto;
	        $ejecicionespresupuesto_create->ejeIngTot = $ejeIngTot;
			$ejecicionespresupuesto_create->ejeIngCor = $ejeIngCor;
			$ejecicionespresupuesto_create->ejeIngTri = $ejeIngTri;
			$ejecicionespresupuesto_create->ejeIngPre = $ejeIngPre;
			$ejecicionespresupuesto_create->ejeIngIndCom = $ejeIngIndCom;
			$ejecicionespresupuesto_create->ejeIngSobGas = $ejeIngSobGas;
			$ejecicionespresupuesto_create->ejeIngOtr = $ejeIngOtr;
			$ejecicionespresupuesto_create->ejeIngNoTri = $ejeIngNoTri;
			$ejecicionespresupuesto_create->ejeIngTra = $ejeIngTra;
			$ejecicionespresupuesto_create->ejeIngNivNac = $ejeIngNivNac;
			$ejecicionespresupuesto_create->ejeIngNoTriOtr = $ejeIngNoTriOtr;
			$ejecicionespresupuesto_create->ejeGasTot = $ejeGasTot;
			$ejecicionespresupuesto_create->ejeGasCor = $ejeGasCor;
			$ejecicionespresupuesto_create->ejeFun = $ejeFun;
			$ejecicionespresupuesto_create->ejeSerFun = $ejeSerFun;
			$ejecicionespresupuesto_create->ejeGasGen = $ejeGasGen;
			$ejecicionespresupuesto_create->ejeTraPag = $ejeTraPag;
			$ejecicionespresupuesto_create->ejeIntDeuPub = $ejeIntDeuPub;
			$ejecicionespresupuesto_create->ejeDefAhoCor = $ejeDefAhoCor;
			$ejecicionespresupuesto_create->ejeIngCap = $ejeIngCap;
			$ejecicionespresupuesto_create->ejeReg = $ejeReg;
			$ejecicionespresupuesto_create->ejeTraNac = $ejeTraNac;
			$ejecicionespresupuesto_create->ejeCof = $ejeCof;
			$ejecicionespresupuesto_create->ejeIngCapOtr = $ejeIngCapOtr;
			$ejecicionespresupuesto_create->ejeGasCap = $ejeGasCap;
			$ejecicionespresupuesto_create->ejeForBruCapFij = $ejeForBruCapFij;
			$ejecicionespresupuesto_create->ejeGasCapOtr = $ejeGasCapOtr;
			$ejecicionespresupuesto_create->ejeDefSupTot = $ejeDefSupTot;
			$ejecicionespresupuesto_create->ejeFin = $ejeFin;
			$ejecicionespresupuesto_create->ejeCreNet = $ejeCreNet;
			$ejecicionespresupuesto_create->ejeDes = $ejeDes;
			$ejecicionespresupuesto_create->ejeAmo = $ejeAmo;
			$ejecicionespresupuesto_create->ejeRecBalVarDepOtr = $ejeRecBalVarDepOtr;
			$ejecicionespresupuesto_create->finanza_id = $finanza_id;
	        $ejecicionespresupuesto_create->save();

	        $indicedesempeñointegral_create = new Indicedesempeñointegral;
	        $indicedesempeñointegral_create->desIntCapAdm = $desIntCapAdm;
			$indicedesempeñointegral_create->desIntEfiTot = $desIntEfiTot;
			$indicedesempeñointegral_create->desIntGes = $desIntGes;
			$indicedesempeñointegral_create->desIntIndInt = $desIntIndInt;
			$indicedesempeñointegral_create->desIntReqLeg = $desIntReqLeg;
			$indicedesempeñointegral_create->desIntIndDesFis = $desIntIndDesFis;
	        $indicedesempeñointegral_create->finanza_id = $finanza_id;
	        $indicedesempeñointegral_create->save();

	        $indicedesempeñofiscal_create = new Indicedesempeñofiscal;
	        $indicedesempeñofiscal_create->autGasFun = $autGasFun;
			$indicedesempeñofiscal_create->respSerDeu = $respSerDeu;
			$indicedesempeñofiscal_create->depTraNacReg = $depTraNacReg;
			$indicedesempeñofiscal_create->genRecPro = $genRecPro;
			$indicedesempeñofiscal_create->magInv = $magInv;
			$indicedesempeñofiscal_create->capAho = $capAho;
			$indicedesempeñofiscal_create->indDesFis = $indDesFis;
			$indicedesempeñofiscal_create->posNivNac = $posNivNac;
			$indicedesempeñofiscal_create->posNivDep = $posNivDep;
			$indicedesempeñofiscal_create->finanza_id = $finanza_id;
	        $indicedesempeñofiscal_create->save();

			$html = "Se registrarón los datos correctamente";
		} else {
			$html = "Ya se encuentra registrado ese año";
		}

		return Response::json(array('html' => $html));
	}

	public function grafica1Finanza(Request $request)
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

	public function grafica2Finanza(Request $request)
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

	public function grafica3Finanza(Request $request)
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

	public function mostrarActualizarFinanza(Request $request)
	{
		$idF = $_POST['idF'];
		$html = "";

		$resultados = Finanza::join('planfinanciero', 'finanza.id', 'planfinanciero.finanza_id')
			->join('ejecucionpresupuesto', 'finanza.id', 'ejecucionpresupuesto.finanza_id')
			->join('indicedesempeñointegral', 'finanza.id', 'indicedesempeñointegral.finanza_id')
			->join('indicedesemepñofiscal', 'finanza.id', 'indicedesemepñofiscal.finanza_id')
			->select('finanza.id',
					DB::raw('DATE(anioF) as DATEanioF'),
					'planfinanciero.*',
					'ejecucionpresupuesto.*',
					'indicedesempeñointegral.*',
					'indicedesemepñofiscal.*')
            ->where('finanza.id', $idF)
            ->get();
		foreach ($resultados as $resultado) {

			$id = $resultado->id;
			$anio = $resultado->DATEanioF;

			$ingTot = $resultado->ingTot;
			$ingCor = $resultado->ingCor;
			$ingTri = $resultado->ingTri;
			$ingPre = $resultado->ingPre;
			$ingIndCom = $resultado->ingIndCom;
			$ingSobGas = $resultado->ingSobGas;
			$ingOtr = $resultado->ingOtr;
			$ingNoTri = $resultado->ingNoTri;
			$ingTra = $resultado->ingTra;
			$ingNivNac = $resultado->ingNivNac;
			$ingNoTriOtr = $resultado->ingNoTriOtr;
			$gasTot = $resultado->gasTot;
			$gasCor = $resultado->gasCor;
			$fun = $resultado->fun;
			$serFun = $resultado->serFun;
			$gasGen = $resultado->gasGen;
			$traPag = $resultado->traPag;
			$intDeuPub = $resultado->intDeuPub;
			$defAhoCor = $resultado->defAhoCor;
			$ingCap = $resultado->ingCap;
			$reg = $resultado->reg;
			$traNac = $resultado->traNac;
			$cof = $resultado->cof;
			$ingCapOtr = $resultado->ingCapOtr;
			$gasCap = $resultado->gasCap;
			$forBruCapFij = $resultado->forBruCapFij;
			$gasCapOtr = $resultado->gasCapOtr;
			$defSupTot = $resultado->defSupTot;
			$fin = $resultado->fin;
			$creNet = $resultado->creNet;
			$des = $resultado->des;
			$amo = $resultado->amo;
			$recBalVarDepOtr = $resultado->recBalVarDepOtr;
			$ejeIngTot = $resultado->ejeIngTot;
			$ejeIngCor = $resultado->ejeIngCor;
			$ejeIngTri = $resultado->ejeIngTri;
			$ejeIngPre = $resultado->ejeIngPre;
			$ejeIngIndCom = $resultado->ejeIngIndCom;
			$ejeIngSobGas = $resultado->ejeIngSobGas;
			$ejeIngOtr = $resultado->ejeIngOtr;
			$ejeIngNoTri = $resultado->ejeIngNoTri;
			$ejeIngTra = $resultado->ejeIngTra;
			$ejeIngNivNac = $resultado->ejeIngNivNac;
			$ejeIngNoTriOtr = $resultado->ejeIngNoTriOtr;
			$ejeGasTot = $resultado->ejeGasTot;
			$ejeGasCor = $resultado->ejeGasCor;
			$ejeFun = $resultado->ejeFun;
			$ejeSerFun = $resultado->ejeSerFun;
			$ejeGasGen = $resultado->ejeGasGen;
			$ejeTraPag = $resultado->ejeTraPag;
			$ejeIntDeuPub = $resultado->ejeIntDeuPub;
			$ejeDefAhoCor = $resultado->ejeDefAhoCor;
			$ejeIngCap = $resultado->ejeIngCap;
			$ejeReg = $resultado->ejeReg;
			$ejeTraNac = $resultado->ejeTraNac;
			$ejeCof = $resultado->ejeCof;
			$ejeIngCapOtr = $resultado->ejeIngCapOtr;
			$ejeGasCap = $resultado->ejeGasCap;
			$ejeForBruCapFij = $resultado->ejeForBruCapFij;
			$ejeGasCapOtr = $resultado->ejeGasCapOtr;
			$ejeDefSupTot = $resultado->ejeDefSupTot;
			$ejeFin = $resultado->ejeFin;
			$ejeCreNet = $resultado->ejeCreNet;
			$ejeDes = $resultado->ejeDes;
			$ejeAmo = $resultado->ejeAmo;
			$ejeRecBalVarDepOtr = $resultado->ejeRecBalVarDepOtr;
			$desIntCapAdm = $resultado->desIntCapAdm;
			$desIntEfiTot = $resultado->desIntEfiTot;
			$desIntGes = $resultado->desIntGes;
			$desIntIndInt = $resultado->desIntIndInt;
			$desIntReqLeg = $resultado->desIntReqLeg;
			$desIntIndDesFis = $resultado->desIntIndDesFis;
			$autGasFun = $resultado->autGasFun;
			$respSerDeu = $resultado->respSerDeu;
			$depTraNacReg = $resultado->depTraNacReg;
			$genRecPro = $resultado->genRecPro;
			$magInv = $resultado->magInv;
			$capAho = $resultado->capAho;
			$indDesFis = $resultado->indDesFis;
			$posNivNac = $resultado->posNivNac;
			$posNivDep = $resultado->posNivDep;
		}

		return Response::json(array('id' => $id,
									'anio' => $anio,
									'ingTot' = $ingTot,
									'ingCor' = $ingCor,
									'ingTri' = $ingTri,
									'ingPre' = $ingPre,
									'ingIndCom' = $ingIndCom,
									'ingSobGas' = $ingSobGas,
									'ingOtr' = $ingOtr,
									'ingNoTri' = $ingNoTri,
									'ingTra' = $ingTra,
									'ingNivNac' = $ingNivNac,
									'ingNoTriOtr' = $ingNoTriOtr,
									'gasTot' = $gasTot,
									'gasCor' = $gasCor,
									'fun' = $fun,
									'serFun' = $serFun,
									'gasGen' = $gasGen,
									'traPag' = $traPag,
									'intDeuPub' = $intDeuPub,
									'defAhoCor' = $defAhoCor,
									'ingCap' = $ingCap,
									'reg' = $reg,
									'traNac' = $traNac,
									'cof' = $cof,
									'ingCapOtr' = $ingCapOtr,
									'gasCap' = $gasCap,
									'forBruCapFij' = $forBruCapFij,
									'gasCapOtr' = $gasCapOtr,
									'defSupTot' = $defSupTot,
									'fin' = $fin,
									'creNet' = $creNet,
									'des' = $des,
									'amo' = $amo,
									'recBalVarDepOtr' = $recBalVarDepOtr,
									'ejeIngTot' = $ejeIngTot,
									'ejeIngCor' = $ejeIngCor,
									'ejeIngTri' = $ejeIngTri,
									'ejeIngPre' = $ejeIngPre,
									'ejeIngIndCom' = $ejeIngIndCom,
									'ejeIngSobGas' = $ejeIngSobGas,
									'ejeIngOtr' = $ejeIngOtr,
									'ejeIngNoTri' = $ejeIngNoTri,
									'ejeIngTra' = $ejeIngTra,
									'ejeIngNivNac' = $ejeIngNivNac,
									'ejeIngNoTriOtr' = $ejeIngNoTriOtr,
									'ejeGasTot' = $ejeGasTot,
									'ejeGasCor' = $ejeGasCor,
									'ejeFun' = $ejeFun,
									'ejeSerFun' = $ejeSerFun,
									'ejeGasGen' = $ejeGasGen,
									'ejeTraPag' = $ejeTraPag,
									'ejeIntDeuPub' = $ejeIntDeuPub,
									'ejeDefAhoCor' = $ejeDefAhoCor,
									'ejeIngCap' = $ejeIngCap,
									'ejeReg' = $ejeReg,
									'ejeTraNac' = $ejeTraNac,
									'ejeCof' = $ejeCof,
									'ejeIngCapOtr' = $ejeIngCapOtr,
									'ejeGasCap' = $ejeGasCap,
									'ejeForBruCapFij' = $ejeForBruCapFij,
									'ejeGasCapOtr' = $ejeGasCapOtr,
									'ejeDefSupTot' = $ejeDefSupTot,
									'ejeFin' = $ejeFin,
									'ejeCreNet' = $ejeCreNet,
									'ejeDes' = $ejeDes,
									'ejeAmo' = $ejeAmo,
									'ejeRecBalVarDepOtr' = $ejeRecBalVarDepOtr,
									'desIntCapAdm' = $desIntCapAdm,
									'desIntEfiTot' = $desIntEfiTot,
									'desIntGes' = $desIntGes,
									'desIntIndInt' = $desIntIndInt,
									'desIntReqLeg' = $desIntReqLeg,
									'desIntIndDesFis' = $desIntIndDesFis,
									'autGasFun' = $autGasFun,
									'respSerDeu' = $respSerDeu,
									'depTraNacReg' = $depTraNacReg,
									'genRecPro' = $genRecPro,
									'magInv' = $magInv,
									'capAho' = $capAho,
									'indDesFis' = $indDesFis,
									'posNivNac' = $posNivNac,
									'posNivDep' = $posNivDep,
								));
	}

	public function mostrarFinanza(Request $request)
	{
		$idMunicipio = $_GET['idMunicipio'];
		$html = "";

		$html .= "<div class='col-sm-12 col-md-12 col-lg-12'>

				<table class='table table-bordered table-hover'>
				<thead class='thead-s'>
				<tr>
				<th>Datos</th>";

		$resultados = Finanza::join('planfinanciero', 'finanza.id', 'planfinanciero.finanza_id')
			->join('ejecucionpresupuesto', 'finanza.id', 'ejecucionpresupuesto.finanza_id')
			->join('indicedesempeñointegral', 'finanza.id', 'indicedesempeñointegral.finanza_id')
			->join('indicedesemepñofiscal', 'finanza.id', 'indicedesemepñofiscal.finanza_id')
			->select('finanza.id',
					DB::raw('DATE(anioF) as DATEanioF'),
					'planfinanciero.*',
					'ejecucionpresupuesto.*',
					'indicedesempeñointegral.*',
					'indicedesemepñofiscal.*')
            ->where('finanza.municipio_id', $idMunicipio)
            ->where(DB::raw('YEAR(anioF)'), $anioF)
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

	public function mostrarTablaFinanza(Request $request)
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

		$resultados = Finanza::join('planfinanciero', 'finanza.id', 'planfinanciero.finanza_id')
			->join('ejecucionpresupuesto', 'finanza.id', 'ejecucionpresupuesto.finanza_id')
			->join('indicedesempeñointegral', 'finanza.id', 'indicedesempeñointegral.finanza_id')
			->join('indicedesemepñofiscal', 'finanza.id', 'indicedesemepñofiscal.finanza_id')
			->select('finanza.id',
					DB::raw('DATE(anioF) as DATEanioF'),
					'planfinanciero.*',
					'ejecucionpresupuesto.*',
					'indicedesempeñointegral.*',
					'indicedesemepñofiscal.*')
						->where('finanza.municipio_id', $idMunicipio)
						->orderBy('finanza.anioF')
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

	public function subiendoArchivoFinanza()
    {
        return view('admin.finanza.subiendoArchivoFinanza');
    }

    public function guardarArchivoFinanza(Request $request)
    {
      $file = $request->file('file');
      $name = $file->getClientOriginalName();
      Storage::disk('public')->put($name,  File::get($file));

      $request->session()->put('nameArchivoFinanza', $name);

      return redirect('/admin/subiendoArchivoFinanza');
    }

    public function subirRespuestaFinanza(Request $request)
    {     
      try { 

      $nameArchivo = null;
      $html = "";

      if ($request->session()->get("nameArchivoFinanza")) {
          $nameArchivo = $request->session()->get("nameArchivoFinanza");
      }   

      Excel::load('Storage/app/public/'.$nameArchivo, function($reader)
      {
        $booleanMunicipio = False;
        $booleanAño = False;
        $data1 = array();
        $data2 = array();
        $data3 = array();
        $data4 = array();
        $data5 = array();
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

          	$resultados = Finanza::where(DB::raw('YEAR(anioE)'), $result->anio)
          				->limit(1)
						->get();
		    foreach ($resultados as $resultado) {
		      $booleanAño = True;
		    }

		    if ($booleanAño = False) {
		    	
	            $data1[] = array('anioF' => $result->anio.'/01/01 00:00:00',
	                           'municipio_id' => $id,
	                           'created_at' => $time,
	                           'updated_at' => $time);

	           	Finanza::insert($data1);

	           	$resultados = Finanza::orderBy('id', 'desc')
							->limit(1)
							->get();
				foreach ($resultados as $resultado) {
					$finanza_id = $resultado->id;
				}

			    $data2[] = array('ingTot' =>  $result->plan_financiero_ingreso_total,
								'ingCor' =>  $result->plan_financiero_ingresos_contables,
								'ingTri' =>  $result->plan_financiero_ingresos_tributarios,
								'ingPre' =>  $result->plan_financiero_predial,
								'ingIndCom' =>  $result->plan_financiero_industria_y_comercio,
								'ingSobGas' =>  $result->plan_financiero_sobretasas_a_la_gasolina,
								'ingOtr' =>  $result->plan_financiero_otros,
								'ingNoTri' =>  $result->plan_financiero_ingresos_no_tributarios,
								'ingTra' =>  $result->plan_financiero_transferencias,
								'ingNivNac' =>  $result->plan_financiero_de_nivel_nacional,
								'ingNoTriOtr' =>  $result->plan_financiero_ingresos_no_tributarios_otros,
								'gasTot' =>  $result->plan_financiero_gastos_totales,
								'gasCor' =>  $result->plan_financiero_gastos_corrientes,
								'fun' =>  $result->plan_financiero_gastos_funcionamiento,
								'serFun' =>  $result->plan_financiero_servicios_personales,
								'gasGen' =>  $result->plan_financiero_gastos_generales,
								'traPag' =>  $result->plan_financiero_transferencias_pagadas,
								'intDeuPub' =>  $result->plan_financiero_transferencias_deuda_publica,
								'defAhoCor' =>  $result->plan_financiero_deficit_o_ahorro_corriente,
								'ingCap' =>  $result->plan_financiero_ingreso_de_capital,
								'reg' =>  $result->plan_financiero_regalias,
								'traNac' =>  $result->plan_financiero_transferencias_nacional,
								'cof' =>  $result->plan_financiero_cofinanciacion,
								'ingCapOtr' =>  $result->plan_financiero_ingreso_de_capital_otros,
								'gasCap' =>  $result->plan_financiero_gastos_de_capital_inversion,
								'forBruCapFij' =>  $result->plan_financiero_formacion_brutal_de_capital_fijo,
								'gasCapOtr' =>  $result->plan_financiero_gastos_de_capital_otros,
								'defSupTot' =>  $result->plan_financiero_deficit_o_superavit_total,
								'fin' =>  $result->plan_financiero_financiamiento,
								'creNet' =>  $result->plan_financiero_credito_neto,
								'des' =>  $result->plan_financiero_desembolsos,
								'amo' =>  $result->plan_financiero_amortizaciones,
								'recBalVarDepOtr' =>  $result->plan_financiero_recursos_del_balance_variacion_de_depositos_otros,
	                           'finanza_id' => $finanza_id,
	                           'created_at' => $time,
	                           'updated_at' => $time);

			   $data3[] = array('ejeIngTot' =>  $result->plan_financiero_ingreso_total,
								'ejeIngCor' =>  $result->plan_financiero_ingresos_contables,
								'ejeIngTri' =>  $result->plan_financiero_ingresos_tributarios,
								'ejeIngPre' =>  $result->plan_financiero_predial,
								'ejeIngIndCom' =>  $result->plan_financiero_industria_y_comercio,
								'ejeIngSobGas' =>  $result->plan_financiero_sobretasas_a_la_gasolina,
								'ejeIngOtr' =>  $result->plan_financiero_otros,
								'ejeIngNoTri' =>  $result->plan_financiero_ingresos_no_tributarios,
								'ejeIngTra' =>  $result->plan_financiero_transferencias,
								'ejeIngNivNac' =>  $result->plan_financiero_de_nivel_nacional,
								'ejeIngNoTriOtr' =>  $result->plan_financiero_ingresos_no_tributarios_otros,
								'ejeGasTot' =>  $result->plan_financiero_gastos_totales,
								'ejeGasCor' =>  $result->plan_financiero_gastos_corrientes,
								'ejeFun' =>  $result->plan_financiero_gastos_funcionamiento,
								'ejeSerFun' =>  $result->plan_financiero_servicios_personales,
								'ejeGasGen' =>  $result->plan_financiero_gastos_generales,
								'ejeTraPag' =>  $result->plan_financiero_transferencias_pagadas,
								'ejeIntDeuPub' =>  $result->plan_financiero_transferencias_deuda_publica,
								'ejeDefAhoCor' =>  $result->plan_financiero_deficit_o_ahorro_corriente,
								'ejeIngCap' =>  $result->plan_financiero_ingreso_de_capital,
								'ejeReg' =>  $result->plan_financiero_regalias,
								'ejeTraNac' =>  $result->plan_financiero_transferencias_nacional,
								'ejeCof' =>  $result->plan_financiero_cofinanciacion,
								'ejeIngCapOtr' =>  $result->plan_financiero_ingreso_de_capital_otros,
								'ejeGasCap' =>  $result->plan_financiero_gastos_de_capital_inversion,
								'ejeForBruCapFij' =>  $result->plan_financiero_formacion_brutal_de_capital_fijo,
								'ejeGasCapOtr' =>  $result->plan_financiero_gastos_de_capital_otros,
								'ejeDefSupTot' =>  $result->plan_financiero_deficit_o_superavit_total,
								'ejeFin' =>  $result->plan_financiero_financiamiento,
								'ejeCreNet' =>  $result->plan_financiero_credito_neto,
								'ejeDes' =>  $result->plan_financiero_desembolsos,
								'ejeAmo' =>  $result->plan_financiero_amortizaciones,
								'ejeRecBalVarDepOtr' =>  $result->plan_financiero_recursos_del_balance_variacion_de_depositos_otros,
	                           'finanza_id' => $finanza_id,
	                           'created_at' => $time,
	                           'updated_at' => $time);

			   $data4[] = array('desIntCapAdm' => $result->desempeño_integral_capacidad_administrativa,
								'desIntEfiTot' => $result->desempeño_integral_eficacia_total,
								'desIntGes' => $result->desempeño_integral_gestion,
								'desIntIndInt' => $result->desempeño_integral_indice_integral,
								'desIntReqLeg' => $result->desempeño_integral_requisitos_legales,
								'desIntIndDesFis' => $result->desempeño_integral_indicador_de_desempeño_fiscal,
	                           'finanza_id' => $finanza_id,
	                           'created_at' => $time,
	                           'updated_at' => $time);

			   $data5[] = array('autGasFun' => $result->autofinanciacion_de_los_gastos_de_funcionamiento,
								'respSerDeu' => $result->respaldo_del_servicio_de_la_deuda,
								'depTraNacReg' => $result->dependencia_de_la_transferencia_de_la_nacion_y_las_regalias,
								'genRecPro' => $result->generacion_de_recursos_propios,
								'magInv' => $result->magnitud_de_la_inversion,
								'capAho' => $result->capacidad_de_ahorro,
								'indDesFis' => $result->indicador_de_desempeño_fiscal,
								'posNivNac' => $result->posicion_a_nivel_nacional,
								'posNivDep' => $result->posicion_a_nivel_departamento,
	                           'finanza_id' => $finanza_id,
	                           'created_at' => $time,
	                           'updated_at' => $time);

			    Planfinanciero::insert($data2);
			    Ejecucionpresupuesto::insert($data3);
			    Indicedesempeñointegral::insert($data4);
			    Indicedesempeñofiscal::insert($data5);

			    $data1 = array();
			    $data2 = array();
			    $data3 = array();
			    $data4 = array();
			    $data5 = array();

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

    public function descargarFinanza(Request $request)
    {
      $data = array();

      Excel::create('Finanza', function($excel) {
 
          $excel->sheet('Importar', function($sheet) {

              $data[] = array('año' => "",
              				'municipio' => "",
              				 'plan_financiero_ingreso_total' => "",
              				 'plan_financiero_ingresos_contables' => "",
              				 'plan_financiero_ingresos_tributarios' => "",
              				 'plan_financiero_predial' => "",
              				 'plan_financiero_industria_y_comercio' => "",
              				 'plan_financiero_sobretasas_a_la_gasolina' => "",
              				 'plan_financiero_otros' => "",
              				 'plan_financiero_ingresos_no_tributarios' => "",
              				 'plan_financiero_transferencias' => "",
              				 'plan_financiero_de_nivel_nacional' => "",
              				 'plan_financiero_ingresos_no_tributarios_otros' => "",
              				 'plan_financiero_gastos_totales' => "",
              				 'plan_financiero_gastos_corrientes' => "",
              				 'plan_financiero_gastos_funcionamiento' => "",
              				 'plan_financiero_servicios_personales' => "",
              				 'plan_financiero_gastos_generales' => "",
              				 'plan_financiero_transferencias_pagadas' => "",
              				 'plan_financiero_transferencias_deuda_publica' => "",
              				 'plan_financiero_deficit_o_ahorro_corriente' => "",
              				 'plan_financiero_ingreso_de_capital' => "",
              				 'plan_financiero_regalias' => "",
              				 'plan_financiero_transferencias_nacional' => "",
              				 'plan_financiero_cofinanciacion' => "",
              				 'plan_financiero_ingreso_de_capital_otros' => "",
              				 'plan_financiero_gastos_de_capital_inversion' => "",
              				 'plan_financiero_formacion_brutal_de_capital_fijo' => "",
              				 'plan_financiero_gastos_de_capital_otros' => "",
              				 'plan_financiero_deficit_o_superavit_total' => "",
              				 'plan_financiero_financiamiento' => "",
              				 'plan_financiero_credito_neto' => "",
              				 'plan_financiero_desembolsos' => "",
              				 'plan_financiero_amortizaciones' => "",
              				 'plan_financiero_recursos_del_balance_variacion_de_depositos_otros' => "",

              				 'ejecuciones_presupuestales_ingreso_total' => "",
              				 'ejecuciones_presupuestales_ingresos_contables' => "",
              				 'ejecuciones_presupuestales_ingresos_tributarios' => "",
              				 'ejecuciones_presupuestales_predial' => "",
              				 'ejecuciones_presupuestales_industria_y_comercio' => "",
              				 'ejecuciones_presupuestales_sobretasas_a_la_gasolina' => "",
              				 'ejecuciones_presupuestales_otros' => "",
              				 'ejecuciones_presupuestales_ingresos_no_tributarios' => "",
              				 'ejecuciones_presupuestales_transferencias' => "",
              				 'ejecuciones_presupuestales_de_nivel_nacional' => "",
              				 'ejecuciones_presupuestales_ingresos_no_tributarios_otros' => "",
              				 'ejecuciones_presupuestales_gastos_totales' => "",
              				 'ejecuciones_presupuestales_gastos_corrientes' => "",
              				 'ejecuciones_presupuestales_gastos_funcionamiento' => "",
              				 'ejecuciones_presupuestales_servicios_personales' => "",
              				 'ejecuciones_presupuestales_gastos_generales' => "",
              				 'ejecuciones_presupuestales_transferencias_pagadas' => "",
              				 'ejecuciones_presupuestales_transferencias_deuda_publica' => "",
              				 'ejecuciones_presupuestales_deficit_o_ahorro_corriente' => "",
              				 'ejecuciones_presupuestales_ingreso_de_capital' => "",
              				 'ejecuciones_presupuestales_regalias' => "",
              				 'ejecuciones_presupuestales_transferencias_nacional' => "",
              				 'ejecuciones_presupuestales_cofinanciacion' => "",
              				 'ejecuciones_presupuestales_ingreso_de_capital_otros' => "",
              				 'ejecuciones_presupuestales_gastos_de_capital_inversion' => "",
              				 'ejecuciones_presupuestales_formacion_brutal_de_capital_fijo' => "",
              				 'ejecuciones_presupuestales_gastos_de_capital_otros' => "",
              				 'ejecuciones_presupuestales_deficit_o_superavit_total' => "",
              				 'ejecuciones_presupuestales_financiamiento' => "",
              				 'ejecuciones_presupuestales_credito_neto' => "",
              				 'ejecuciones_presupuestales_desembolsos' => "",
              				 'ejecuciones_presupuestales_amortizaciones' => "",
              				 'ejecuciones_presupuestales_recursos_del_balance_variacion_de_depositos_otros' => "",

              				 'desempeño_integral_capacidad_administrativa' => "",
              				 'desempeño_integral_eficacia_total' => "",
              				 'desempeño_integral_gestion' => "",
              				 'desempeño_integral_indice_integral' => "",
              				 'desempeño_integral_requisitos_legales' => "",
              				 'desempeño_integral_indicador_de_desempeño_fiscal' => "",

              				 'autofinanciacion_de_los_gastos_de_funcionamiento' => "",
              				 'respaldo_del_servicio_de_la_deuda' => "",
              				 'dependencia_de_la_transferencia_de_la_nacion_y_las_regalias' => "",
              				 'generacion_de_recursos_propios' => "",
              				 'magnitud_de_la_inversion' => "",
              				 'capacidad_de_ahorro' => "",
              				 'indicador_de_desempeño_fiscal' => "",
              				 'posicion_a_nivel_nacional' => "",
              				 'posicion_a_nivel_departamento' => "",
	                       );

              $sheet->fromArray($data);

          });
      })->export('xls');
    }

}
