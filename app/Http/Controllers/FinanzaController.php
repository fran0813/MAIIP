<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use Storage;
use File;
use \Response;
use App\Finanza;
use App\Planfinanciero;
use App\Ejecucionpresupuesto;
use App\Indicedesempeniointegral;
use App\Indicedesempeniofiscal;
use App\Municipio;

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

		$indicedesempeñointegral_update = Indicedesempeniointegral::find($idF);
        $indicedesempeñointegral_update->desIntCapAdm = $desIntCapAdm;
		$indicedesempeñointegral_update->desIntEfiTot = $desIntEfiTot;
		$indicedesempeñointegral_update->desIntGes = $desIntGes;
		$indicedesempeñointegral_update->desIntIndInt = $desIntIndInt;
		$indicedesempeñointegral_update->desIntReqLeg = $desIntReqLeg;
		$indicedesempeñointegral_update->desIntIndDesFis = $desIntIndDesFis;
        $indicedesempeñointegral_update->save();

        $indicedesempeñofiscal_update = Indicedesempeniofiscal::find($idF);
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

        $indicedesempeñointegral_delete = Indicedesempeniointegral::find($idF);
        $indicedesempeñointegral_delete->delete();

        $indicedesempeñofiscal_delete = Indicedesempeniofiscal::find($idF);
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
		    $finanza_create->anioF = $comprobar.'/01/01 00:00';
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

	        $indicedesempeñointegral_create = new Indicedesempeniointegral;
	        $indicedesempeñointegral_create->desIntCapAdm = $desIntCapAdm;
			$indicedesempeñointegral_create->desIntEfiTot = $desIntEfiTot;
			$indicedesempeñointegral_create->desIntGes = $desIntGes;
			$indicedesempeñointegral_create->desIntIndInt = $desIntIndInt;
			$indicedesempeñointegral_create->desIntReqLeg = $desIntReqLeg;
			$indicedesempeñointegral_create->desIntIndDesFis = $desIntIndDesFis;
	        $indicedesempeñointegral_create->finanza_id = $finanza_id;
	        $indicedesempeñointegral_create->save();

	        $indicedesempeñofiscal_create = new Indicedesempeniofiscal;
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
		$anioF = $_GET['anioF'];
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
				['Año', 'INGRESOS TOTALES', 'INGRESOS CORRIENTES', 'GASTOS TOTALES', '2. GASTOS CORRIENTES'],";

		$resultados = Finanza::join('planfinanciero', 'finanza.id', 'planfinanciero.finanza_id')
			->join('ejecucionpresupuesto', 'finanza.id', 'ejecucionpresupuesto.finanza_id')
			->join('indicedesempeñointegral', 'finanza.id', 'indicedesempeñointegral.finanza_id')
			->join('indicedesempeñofiscal', 'finanza.id', 'indicedesempeñofiscal.finanza_id')
			->select('finanza.id',
					DB::raw('YEAR(anioF) as YEARanioF'),
					'planfinanciero.*',
					'ejecucionpresupuesto.*',
					'indicedesempeñointegral.*',
					'indicedesempeñofiscal.*')
						->where('finanza.municipio_id', $idMunicipio)
						->where(DB::raw('YEAR(anioF)'), $anioF)
						->get();
		foreach ($resultados as $resultado) {
			$anio = $resultado->YEARanioE;
			$ingTot = $resultado->ingTot;
			$ingCor = $resultado->ingCor;
			$gasTot = $resultado->gasTot;
			$gasCor = $resultado->gasCor;

			$html .= "['$anio', $ingTot, $ingCor, $gasTot, $gasCor],";
		}

		$html .= "]);";

		$html .= "// Set chart options
		        	var options = {	title: 'Ingresos vs Gastos',
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
		$anioF = $_GET['anioF'];
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
				['Año', 'Desempeño Integral  Capacidad Administrativa', 'Desempeño Integral  Eficacia Total', 'Desempeño Integral  Gestión', 'Desempeño Integral Indice Integral', 'Desempeño Integral Requisitos Legales', 'Desempeño Integral  Indicador de desempeño Fiscal'],";

		$resultados = Finanza::join('planfinanciero', 'finanza.id', 'planfinanciero.finanza_id')
			->join('ejecucionpresupuesto', 'finanza.id', 'ejecucionpresupuesto.finanza_id')
			->join('indicedesempeñointegral', 'finanza.id', 'indicedesempeñointegral.finanza_id')
			->join('indicedesempeñofiscal', 'finanza.id', 'indicedesempeñofiscal.finanza_id')
			->select('finanza.id',
					DB::raw('YEAR(anioF) as YEARanioF'),
					'planfinanciero.*',
					'ejecucionpresupuesto.*',
					'indicedesempeñointegral.*',
					'indicedesempeñofiscal.*')
						->where('finanza.municipio_id', $idMunicipio)
						->where(DB::raw('YEAR(anioF)'), $anioF)
						->get();
		foreach ($resultados as $resultado) {
			$anio = $resultado->YEARanioF;
			$desIntCapAdm = $resultado->desIntCapAdm;
			$desIntEfiTot = $resultado->desIntEfiTot;
			$desIntGes = $resultado->desIntGes;
			$desIntIndInt = $resultado->desIntIndInt;
			$desIntReqLeg = $resultado->desIntReqLeg;
			$desIntIndDesFis = $resultado->desIntIndDesFis;

			$html .= "['$anio', $desIntCapAdm, $desIntEfiTot, $desIntGes, $desIntIndInt, $desIntReqLeg, $desIntIndDesFis],";
		}

		$html .= "]);";

		$html .= "// Set chart options
		        	var options = {	title: 'Índice de desempeño integral',
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
		$anioF = $_GET['anioF'];
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
				['Año', 'Indice de desempeño fiscal', 'Posición a nivel departamento'],";

		$resultados = Finanza::join('planfinanciero', 'finanza.id', 'planfinanciero.finanza_id')
			->join('ejecucionpresupuesto', 'finanza.id', 'ejecucionpresupuesto.finanza_id')
			->join('indicedesempeñointegral', 'finanza.id', 'indicedesempeñointegral.finanza_id')
			->join('indicedesempeñofiscal', 'finanza.id', 'indicedesempeñofiscal.finanza_id')
			->select('finanza.id',
					DB::raw('YEAR(anioF) as YEARanioF'),
					'planfinanciero.*',
					'ejecucionpresupuesto.*',
					'indicedesempeñointegral.*',
					'indicedesempeñofiscal.*')
						->where('finanza.municipio_id', $idMunicipio)
						->where(DB::raw('YEAR(anioF)'), $anioF)
						->get();
		foreach ($resultados as $resultado) {
			$anio = $resultado->YEARanioE;
			$indDesFis = $resultado->indDesFis;
			$posNivDep = $resultado->posNivDep;

			$html .= "['$anio', $indDesFis, $posNivDep],";
		}

		$html .= "]);";

		$html .= "// Set chart options
		        	var options = {	title: 'Índice de desempeño fiscal',
		        					curveType: 'function',
			        				legend: { position: 'rigth' },
			        				colors: ['#e9473f', '#131FBD']};";	

		$html .= "// Instantiate and draw our chart, passing in some options.
		        var chart = new google.visualization.ColumnChart(document.getElementById('curve_chart2'));
		        chart.draw(data, options);";

		$html .= "}";

		$html .= "</script>";

		$html .= "<div id='curve_chart2' style='width: 900px; height: 500px'></div>";

		return Response::json(array('html' => $html));
	}

	public function mostrarActualizarFinanza(Request $request)
	{
		$idF = $_POST['idF'];
		$html = "";

		$resultados = Finanza::join('planfinanciero', 'finanza.id', 'planfinanciero.finanza_id')
			->join('ejecucionpresupuesto', 'finanza.id', 'ejecucionpresupuesto.finanza_id')
			->join('indicedesempeñointegral', 'finanza.id', 'indicedesempeñointegral.finanza_id')
			->join('indicedesempeñofiscal', 'finanza.id', 'indicedesempeñofiscal.finanza_id')
			->select('finanza.id',
					DB::raw('DATE(anioF) as DATEanioF'),
					'planfinanciero.*',
					'ejecucionpresupuesto.*',
					'indicedesempeñointegral.*',
					'indicedesempeñofiscal.*')
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
									'ingTot' => $ingTot,
									'ingCor' => $ingCor,
									'ingTri' => $ingTri,
									'ingPre' => $ingPre,
									'ingIndCom' => $ingIndCom,
									'ingSobGas' => $ingSobGas,
									'ingOtr' => $ingOtr,
									'ingNoTri' => $ingNoTri,
									'ingTra' => $ingTra,
									'ingNivNac' => $ingNivNac,
									'ingNoTriOtr' => $ingNoTriOtr,
									'gasTot' => $gasTot,
									'gasCor' => $gasCor,
									'fun' => $fun,
									'serFun' => $serFun,
									'gasGen' => $gasGen,
									'traPag' => $traPag,
									'intDeuPub' => $intDeuPub,
									'defAhoCor' => $defAhoCor,
									'ingCap' => $ingCap,
									'reg' => $reg,
									'traNac' => $traNac,
									'cof' => $cof,
									'ingCapOtr' => $ingCapOtr,
									'gasCap' => $gasCap,
									'forBruCapFij' => $forBruCapFij,
									'gasCapOtr' => $gasCapOtr,
									'defSupTot' => $defSupTot,
									'fin' => $fin,
									'creNet' => $creNet,
									'des' => $des,
									'amo' => $amo,
									'recBalVarDepOtr' => $recBalVarDepOtr,
									'ejeIngTot' => $ejeIngTot,
									'ejeIngCor' => $ejeIngCor,
									'ejeIngTri' => $ejeIngTri,
									'ejeIngPre' => $ejeIngPre,
									'ejeIngIndCom' => $ejeIngIndCom,
									'ejeIngSobGas' => $ejeIngSobGas,
									'ejeIngOtr' => $ejeIngOtr,
									'ejeIngNoTri' => $ejeIngNoTri,
									'ejeIngTra' => $ejeIngTra,
									'ejeIngNivNac' => $ejeIngNivNac,
									'ejeIngNoTriOtr' => $ejeIngNoTriOtr,
									'ejeGasTot' => $ejeGasTot,
									'ejeGasCor' => $ejeGasCor,
									'ejeFun' => $ejeFun,
									'ejeSerFun' => $ejeSerFun,
									'ejeGasGen' => $ejeGasGen,
									'ejeTraPag' => $ejeTraPag,
									'ejeIntDeuPub' => $ejeIntDeuPub,
									'ejeDefAhoCor' => $ejeDefAhoCor,
									'ejeIngCap' => $ejeIngCap,
									'ejeReg' => $ejeReg,
									'ejeTraNac' => $ejeTraNac,
									'ejeCof' => $ejeCof,
									'ejeIngCapOtr' => $ejeIngCapOtr,
									'ejeGasCap' => $ejeGasCap,
									'ejeForBruCapFij' => $ejeForBruCapFij,
									'ejeGasCapOtr' => $ejeGasCapOtr,
									'ejeDefSupTot' => $ejeDefSupTot,
									'ejeFin' => $ejeFin,
									'ejeCreNet' => $ejeCreNet,
									'ejeDes' => $ejeDes,
									'ejeAmo' => $ejeAmo,
									'ejeRecBalVarDepOtr' => $ejeRecBalVarDepOtr,
									'desIntCapAdm' => $desIntCapAdm,
									'desIntEfiTot' => $desIntEfiTot,
									'desIntGes' => $desIntGes,
									'desIntIndInt' => $desIntIndInt,
									'desIntReqLeg' => $desIntReqLeg,
									'desIntIndDesFis' => $desIntIndDesFis,
									'autGasFun' => $autGasFun,
									'respSerDeu' => $respSerDeu,
									'depTraNacReg' => $depTraNacReg,
									'genRecPro' => $genRecPro,
									'magInv' => $magInv,
									'capAho' => $capAho,
									'indDesFis' => $indDesFis,
									'posNivNac' => $posNivNac,
									'posNivDep' => $posNivDep,
								));
	}

	public function mostrarFinanza(Request $request)
	{
		$idMunicipio = $_GET['idMunicipio'];
		$anioF = $_GET['anioF'];
		$html = "";

		$html .= "<div class='col-sm-6 col-md-6 col-lg-6'>

				<table class='table table-bordered table-hover'>
				<thead class='thead-s'>
				<tr>
				<th>Plan financiero</th>
				<th>Valores</th>
				</tr>
				</thead>
				<tbody>
				<tr class='border-dotted'>
				<td>plan financiero municipios ingresos totales</td>";

		$resultados = Finanza::join('planfinanciero', 'finanza.id', 'planfinanciero.finanza_id')
			->join('ejecucionpresupuesto', 'finanza.id', 'ejecucionpresupuesto.finanza_id')
			->join('indicedesempeñointegral', 'finanza.id', 'indicedesempeñointegral.finanza_id')
			->join('indicedesempeñofiscal', 'finanza.id', 'indicedesempeñofiscal.finanza_id')
			->select('finanza.id',
					DB::raw('YEAR(anioF) as YEARanioF'),
					'planfinanciero.*',
					'ejecucionpresupuesto.*',
					'indicedesempeñointegral.*',
					'indicedesempeñofiscal.*')
            ->where('finanza.municipio_id', $idMunicipio)
            ->where(DB::raw('YEAR(anioF)'), $anioF)
            ->get();
		foreach ($resultados as $resultado) {
			$ingTot = $resultado->ingTot;

			$html .= "<td>$ingTot</td>";

		};		
            $html .= "</tr>
				<tr class='border-dotted'>
					<td>Plan financiero municipios 1. ingresos corrientes</td>";
		foreach ($resultados as $resultado) {
			$ingCor = $resultado->ingCor;

			$html .= "<td>$ingCor</td>";

		};
            $html .= "</tr>
				<tr class='border-dotted'>
					<td>Plan financiero municipios 1.1. ingresos tributarios</td>";
		foreach ($resultados as $resultado) {
			$ingTri = $resultado->ingTri;

			$html .= "<td>$ingTri</td>";

		};
            $html .= "</tr>
				<tr class='border-dotted'>
					<td>Plan financiero municipios 1.1.1. predial</td>";
		foreach ($resultados as $resultado) {
			$ingPre = $resultado->ingPre;

			$html .= "<td>$ingPre</td>";

		};
            $html .= "</tr>
				<tr class='border-dotted'>
					<td>Plan financiero municipios 1.1.2. industria y comercio</td>";
		foreach ($resultados as $resultado) {
			$ingIndCom = $resultado->ingIndCom;

			$html .= "<td>$ingIndCom</td>";

		};
            $html .= "</tr>
				<tr class='border-dotted'>
					<td>Plan financiero municipios  1.1.3. sobretasas a la gasolina</td>";
		foreach ($resultados as $resultado) {
			$ingSobGas = $resultado->ingSobGas;

			$html .= "<td>$ingSobGas</td>";

		};
            $html .= "</tr>
				<tr class='border-dotted'>
					<td>Plan financiero municipios 1.1.4. otros</td>";
		foreach ($resultados as $resultado) {
			$ingOtr = $resultado->ingOtr;

			$html .= "<td>$ingOtr</td>";

		};
            $html .= "</tr>
				<tr class='border-dotted'>
					<td>Plan financiero municipios 1.2. ingresos no tributarios</td>";
		foreach ($resultados as $resultado) {
			$ingNoTri = $resultado->ingNoTri;

			$html .= "<td>$ingNoTri</td>";

		};
            $html .= "</tr>
				<tr class='border-dotted'>
					<td>Plan financiero municipios 1.3. transferencias</td>";
		foreach ($resultados as $resultado) {
			$ingTra = $resultado->ingTra;

			$html .= "<td>$ingTra</td>";

		};
            $html .= "</tr>
				<tr class='border-dotted'>
					<td>Plan financiero municipios 1.3.1. del nivel nacional</td>";
		foreach ($resultados as $resultado) {
			$ingNivNac = $resultado->ingNivNac;

			$html .= "<td>$ingNivNac</td>";

		};
            $html .= "</tr>
				<tr class='border-dotted'>
					<td>Plan financiero municipios 1.3.2. otras</td>";
		foreach ($resultados as $resultado) {
			$ingNoTriOtr = $resultado->ingNoTriOtr;

			$html .= "<td>$ingNoTriOtr</td>";

		};
            $html .= "</tr>
				<tr class='border-dotted'>
					<td>Plan financiero municipios gastos totales</td>";
		foreach ($resultados as $resultado) {
			$gasTot = $resultado->gasTot;

			$html .= "<td>$gasTot</td>";

		};
            $html .= "</tr>
				<tr class='border-dotted'>
					<td>Plan financiero municipios 2. gastos corrientes</td>";
		foreach ($resultados as $resultado) {
			$gasCor = $resultado->gasCor;

			$html .= "<td>$gasCor</td>";

		};
            $html .= "</tr>
				<tr class='border-dotted'>
					<td>Plan financiero municipios 2.1. funcionamiento</td>";
		foreach ($resultados as $resultado) {
			$fun = $resultado->fun;

			$html .= "<td>$fun</td>";

		};
            $html .= "</tr>
				<tr class='border-dotted'>
					<td>Plan financiero municipios 2.1.1. servicios personales</td>";
		foreach ($resultados as $resultado) {
			$serFun = $resultado->serFun;

			$html .= "<td>$serFun</td>";

		};
            $html .= "</tr>
				<tr class='border-dotted'>
					<td>Plan financiero municipios 2.1.2. gastos generales</td>";
		foreach ($resultados as $resultado) {
			$serFun = $resultado->serFun;

			$html .= "<td>$serFun</td>";

		};
            $html .= "</tr>
				<tr class='border-dotted'>
					<td>Plan financiero municipios 2.1.3. transferencias pagadas</td>";
		foreach ($resultados as $resultado) {
			$traPag = $resultado->traPag;

			$html .= "<td>$traPag</td>";

		};
            $html .= "</tr>
				<tr class='border-dotted'>
					<td>Plan financiero municipios 2.2. intereses deuda publica</td>";
		foreach ($resultados as $resultado) {
			$intDeuPub = $resultado->intDeuPub;

			$html .= "<td>$intDeuPub</td>";

		};
            $html .= "</tr>
				<tr class='border-dotted'>
					<td>Plan financiero municipios 3. deficit o ahorro corriente (1-2)</td>";
		foreach ($resultados as $resultado) {
			$defAhoCor = $resultado->defAhoCor;

			$html .= "<td>$defAhoCor</td>";

		};
            $html .= "</tr>
				<tr class='border-dotted'>
					<td>Plan financiero municipios 4. ingresos de capital</td>";
		foreach ($resultados as $resultado) {
			$ingCap = $resultado->ingCap;

			$html .= "<td>$ingCap</td>";

		};
            $html .= "</tr>
				<tr class='border-dotted'>
					<td>Plan financiero municipios 4.1. regalías</td>";
		foreach ($resultados as $resultado) {
			$reg = $resultado->reg;

			$html .= "<td>$reg</td>";

		};
            $html .= "</tr>
				<tr class='border-dotted'>
					<td>Plan financiero municipios 4.2. transferencias nacionales (sgp, etc.)</td>";
		foreach ($resultados as $resultado) {
			$traNac = $resultado->traNac;

			$html .= "<td>$traNac</td>";

		};
            $html .= "</tr>
				<tr class='border-dotted'>
					<td>Plan financiero municipios 4.3. cofinanciacion</td>";
		foreach ($resultados as $resultado) {
			$cof = $resultado->cof;

			$html .= "<td>$cof</td>";

		};
            $html .= "</tr>
				<tr class='border-dotted'>
					<td>Plan financiero municipios 4.4. otros</td>";
		foreach ($resultados as $resultado) {
			$ingCapOtr = $resultado->ingCapOtr;

			$html .= "<td>$ingCapOtr</td>";

		};
            $html .= "</tr>
				<tr class='border-dotted'>
					<td>Plan financiero municipios 5. gastos de capital (inversion)</td>";
		foreach ($resultados as $resultado) {
			$gasCap = $resultado->gasCap;

			$html .= "<td>$gasCap</td>";

		};
            $html .= "</tr>
				<tr class='border-dotted'>
					<td>Plan financiero municipios 5.1.1.1. formacion brutal de capital fijo</td>";
		foreach ($resultados as $resultado) {
			$forBruCapFij = $resultado->forBruCapFij;

			$html .= "<td>$forBruCapFij</td>";

		};
            $html .= "</tr>
				<tr class='border-dotted'>
					<td>Plan financiero municipios 5.1.1.2. otros</td>";
		foreach ($resultados as $resultado) {
			$gasCapOtr = $resultado->gasCapOtr;

			$html .= "<td>$gasCapOtr</td>";

		};
            $html .= "</tr>
				<tr class='border-dotted'>
					<td>Plan financiero municipios 6. deficit o superavit total (3+4-5)</td>";
		foreach ($resultados as $resultado) {
			$defSupTot = $resultado->defSupTot;

			$html .= "<td>$defSupTot</td>";

		};
            $html .= "</tr>
				<tr class='border-dotted'>
					<td>Plan financiero municipios 7. financiamiento</td>";
		foreach ($resultados as $resultado) {
			$fin = $resultado->fin;

			$html .= "<td>$fin</td>";

		};
            $html .= "</tr>
				<tr class='border-dotted'>
					<td>Plan financiero municipios 7.1. credito neto</td>";
		foreach ($resultados as $resultado) {
			$creNet = $resultado->creNet;

			$html .= "<td>$creNet</td>";

		};
            $html .= "</tr>
				<tr class='border-dotted'>
					<td>Plan financiero municipios 7.1.1. desembolsos (+)</td>";
		foreach ($resultados as $resultado) {
			$des = $resultado->des;

			$html .= "<td>$des</td>";

		};
            $html .= "</tr>
				<tr class='border-dotted'>
					<td>Plan financiero municipios 7.1.2. amortizaciones (-)</td>";
		foreach ($resultados as $resultado) {
			$amo = $resultado->amo;

			$html .= "<td>$amo</td>";

		};
            $html .= "</tr>
				<tr class='border-dotted'>
					<td>Plan financiero municipios 7.3. recursos del balance, variacion de depositos y otros</td>";
		foreach ($resultados as $resultado) {
			$recBalVarDepOtr = $resultado->recBalVarDepOtr;

			$html .= "<td>$recBalVarDepOtr</td>";

		};

	        $html .= "</tr>
			</tbody>
			</table>

			</div>";

	$html .= "<div class='col-sm-6 col-md-6 col-lg-6'>

				<table class='table table-bordered table-hover'>
				<thead class='thead-s'>
				<tr>
					<th>Ejecucion presupuesto</th>
					<th>Valores</th>
				</tr>
				</thead>
				<tbody>
				<tr class='border-dotted'>
                	<td>ingresos totales</td>";
		foreach ($resultados as $resultado) {
			$ejeIngTot = $resultado->ejeIngTot;

			$html .= "<td>$ejeIngTot</td>";

		};
            $html .= "</tr>
				<tr class='border-dotted'>
					<td>1. ingresos corrientes</td>";
		foreach ($resultados as $resultado) {
			$ejeIngCor = $resultado->ejeIngCor;

			$html .= "<td>$ejeIngCor</td>";

		};
            $html .= "</tr>
				<tr class='border-dotted'>
					<td>1.1 ingresos tributarios</td>";
		foreach ($resultados as $resultado) {
			$ejeIngTri = $resultado->ejeIngTri;

			$html .= "<td>$ejeIngTri</td>";

		};
            $html .= "</tr>
				<tr class='border-dotted'>
					<td>1.1.1. predial</td>";
		foreach ($resultados as $resultado) {
			$ejeIngPre = $resultado->ejeIngPre;

			$html .= "<td>$ejeIngPre</td>";

		};
            $html .= "</tr>
				<tr class='border-dotted'>
					<td>1.1.2. industria y comercio</td>";
		foreach ($resultados as $resultado) {
			$ejeIngIndCom = $resultado->ejeIngIndCom;

			$html .= "<td>$ejeIngIndCom</td>";

		};
            $html .= "</tr>
				<tr class='border-dotted'>
					<td>1.1.3. sobretasa a la gasolina</td>";
		foreach ($resultados as $resultado) {
			$ejeIngSobGas = $resultado->ejeIngSobGas;

			$html .= "<td>$ejeIngSobGas</td>";

		};
            $html .= "</tr>
				<tr class='border-dotted'>
					<td>1.1.4. otros</td>";
		foreach ($resultados as $resultado) {
			$ejeIngOtr = $resultado->ejeIngOtr;

			$html .= "<td>$ejeIngOtr</td>";

		};
            $html .= "</tr>
				<tr class='border-dotted'>
					<td>1.2. ingresos no tributarios</td>";
		foreach ($resultados as $resultado) {
			$ejeIngNoTri = $resultado->ejeIngNoTri;

			$html .= "<td>$ejeIngNoTri</td>";

		};
            $html .= "</tr>
				<tr class='border-dotted'>
					<td>1.3. transferencias</td>";
		foreach ($resultados as $resultado) {
			$ejeIngTra = $resultado->ejeIngTra;

			$html .= "<td>$ejeIngTra</td>";

		};
            $html .= "</tr>
				<tr class='border-dotted'>
					<td>1.3.1. del nivel nacional</td>";
		foreach ($resultados as $resultado) {
			$ejeIngNivNac = $resultado->ejeIngNivNac;

			$html .= "<td>$ejeIngNivNac</td>";

		};
            $html .= "</tr>
				<tr class='border-dotted'>
					<td>1.3.2. otras</td>";
		foreach ($resultados as $resultado) {
			$ejeIngNoTriOtr = $resultado->ejeIngNoTriOtr;

			$html .= "<td>$ejeIngNoTriOtr</td>";

		};
            $html .= "</tr>
				<tr class='border-dotted'>
				     <td>Gastos totales</td>";
		foreach ($resultados as $resultado) {
			$ejeGasTot = $resultado->ejeGasTot;

			$html .= "<td>$ejeGasTot</td>";

		};
            $html .= "</tr>
				<tr class='border-dotted'>
					<td>2. Gastos corrientes</td>";
		foreach ($resultados as $resultado) {
			$ejeGasCor = $resultado->ejeGasCor;

			$html .= "<td>$ejeGasCor</td>";

		};
            $html .= "</tr>
				<tr class='border-dotted'>
					<td>2.1. funcionamiento</td>";
		foreach ($resultados as $resultado) {
			$ejeFun = $resultado->ejeFun;

			$html .= "<td>$ejeFun</td>";

		};
            $html .= "</tr>
				<tr class='border-dotted'>
					<td>2.1.1. servicios personales</td>";
		foreach ($resultados as $resultado) {
			$ejeSerFun = $resultado->ejeSerFun;

			$html .= "<td>$ejeSerFun</td>";

		};
            $html .= "</tr>
				<tr class='border-dotted'>
					<td>2.1.2. gastos generales</td>";
		foreach ($resultados as $resultado) {
			$ejeGasGen = $resultado->ejeGasGen;

			$html .= "<td>$ejeGasGen</td>";

		};
            $html .= "</tr>
				<tr class='border-dotted'>
					<td>2.1.3. transferencias pagadas (nomina y a entidades)</td>";
		foreach ($resultados as $resultado) {
			$ejeTraPag = $resultado->ejeTraPag;

			$html .= "<td>$ejeTraPag</td>";

		};
            $html .= "</tr>
				<tr class='border-dotted'>
					<td>2.2. intereses deuda publica</td>";
		foreach ($resultados as $resultado) {
			$ejeIntDeuPub = $resultado->ejeIntDeuPub;

			$html .= "<td>$ejeIntDeuPub</td>";

		};
            $html .= "</tr>
				<tr class='border-dotted'>
					<td>3. deficit o ahorro corriente (1-2)</td>";
		foreach ($resultados as $resultado) {
			$ejeDefAhoCor = $resultado->ejeDefAhoCor;

			$html .= "<td>$ejeDefAhoCor</td>";

		};
            $html .= "</tr>
				<tr class='border-dotted'>
					<td>4. ingresos de capital</td>";
		foreach ($resultados as $resultado) {
			$ejeIngCap = $resultado->ejeIngCap;

			$html .= "<td>$ejeIngCap</td>";

		};
            $html .= "</tr>
				<tr class='border-dotted'>
					<td>4.1. regalias</td>";
		foreach ($resultados as $resultado) {
			$ejeReg = $resultado->ejeReg;

			$html .= "<td>$ejeReg</td>";

		};
            $html .= "</tr>
				<tr class='border-dotted'>
					<td>4.2. transferencias nacionales (sgp, etc.)</td>";
		foreach ($resultados as $resultado) {
			$ejeTraNac = $resultado->ejeTraNac;

			$html .= "<td>$ejeTraNac</td>";

		};
            $html .= "</tr>
				<tr class='border-dotted'>
					<td>4.3. cofinanciacion</td>";
		foreach ($resultados as $resultado) {
			$ejeCof = $resultado->ejeCof;

			$html .= "<td>$ejeCof</td>";

		};
            $html .= "</tr>
				<tr class='border-dotted'>
					<td>4.4. otros</td>";
		foreach ($resultados as $resultado) {
			$ejeIngCapOtr = $resultado->ejeIngCapOtr;

			$html .= "<td>$ejeIngCapOtr</td>";

		};
            $html .= "</tr>
				<tr class='border-dotted'>
					<td>5. gastos de capital (inversion)</td>";
		foreach ($resultados as $resultado) {
			$ejeGasCap = $resultado->ejeGasCap;

			$html .= "<td>$ejeGasCap</td>";

		};
            $html .= "</tr>
				<tr class='border-dotted'>
					<td>5.1. formacion brutal de capital fijo</td>";
		foreach ($resultados as $resultado) {
			$ejeForBruCapFij = $resultado->ejeForBruCapFij;

			$html .= "<td>$ejeForBruCapFij</td>";

		};
            $html .= "</tr>
				<tr class='border-dotted'>
					<td>5.2. resto inversiones</td>";
		foreach ($resultados as $resultado) {
			$ejeGasCapOtr = $resultado->ejeGasCapOtr;

			$html .= "<td>$ejeGasCapOtr</td>";

		};
            $html .= "</tr>
				<tr class='border-dotted'>
					<td>6. deficit o superavit total (3+4-5)</td>";
		foreach ($resultados as $resultado) {
			$ejeDefSupTot = $resultado->ejeDefSupTot;

			$html .= "<td>$ejeDefSupTot</td>";

		};
            $html .= "</tr>
				<tr class='border-dotted'>
					<td>7. financiamiento (7.1 + 7.2)</td>";
		foreach ($resultados as $resultado) {
			$ejeFin = $resultado->ejeFin;

			$html .= "<td>$ejeFin</td>";

		};
            $html .= "</tr>
				<tr class='border-dotted'>
					<td>7.1. credito interno y externo (7.1.1 - 7.1.2.)</td>";
		foreach ($resultados as $resultado) {
			$ejeCreNet = $resultado->ejeCreNet;

			$html .= "<td>$ejeCreNet</td>";

		};
            $html .= "</tr>
				<tr class='border-dotted'>
					<td>7.1.1. desembolsos (+)</td>";
		foreach ($resultados as $resultado) {
			$ejeDes = $resultado->ejeDes;

			$html .= "<td>$ejeDes</td>";

		};
            $html .= "</tr>
				<tr class='border-dotted'>
					<td>7.1.2. amortizaciones (-)</td>";
		foreach ($resultados as $resultado) {
			$ejeAmo = $resultado->ejeAmo;

			$html .= "<td>$ejeAmo</td>";

		};
            $html .= "</tr>
				<tr class='border-dotted'>
					<td>7.2. recursos balance, var. depositos, otros</td>";
		foreach ($resultados as $resultado) {
			$ejeRecBalVarDepOtr = $resultado->ejeRecBalVarDepOtr;

			$html .= "<td>$ejeRecBalVarDepOtr</td>";

		};

            $html .= "</tr>
			</tbody>
			</table>

			</div>
			<div class='col-sm-12 col-md-12 col-lg-12'></div>";

	$html .= "<div class='col-sm-6 col-md-6 col-lg-6'>

				<table class='table table-bordered table-hover'>
				<thead class='thead-s'>
				<tr>
					<th>Indice de desempeño integral</th>
					<th>Valores</th>
				<th>Valores</th>
				</tr>
				</thead>
				<tbody>
				<tr class='border-dotted'>
	            	<td>Desempeño integral  capacidad administrativa</td>";
		foreach ($resultados as $resultado) {
			$desIntCapAdm = $resultado->desIntCapAdm;

			$html .= "<td>$desIntCapAdm</td>";

		};
           $html .= "</tr>
				<tr class='border-dotted'>
					<td>Desempeño integral  eficacia total</td>";
		foreach ($resultados as $resultado) {
			$desIntEfiTot = $resultado->desIntEfiTot;

			$html .= "<td>$desIntEfiTot</td>";

		};
           $html .= "</tr>
				<tr class='border-dotted'>
					<td>Desempeño integral  gestión</td>";
		foreach ($resultados as $resultado) {
			$desIntGes = $resultado->desIntGes;

			$html .= "<td>$desIntGes</td>";

		};
           $html .= "</tr>
				<tr class='border-dotted'>
					<td>Desempeño integral indice integral</td>";
		foreach ($resultados as $resultado) {
			$desIntIndInt = $resultado->desIntIndInt;

			$html .= "<td>$desIntIndInt</td>";

		};
            $html .= "</tr>
				<tr class='border-dotted'>
					<td>Desempeño integral requisitos legales</td>";
		foreach ($resultados as $resultado) {
			$desIntReqLeg = $resultado->desIntReqLeg;

			$html .= "<td>$desIntReqLeg</td>";

		};
           $html .= "</tr>
				<tr class='border-dotted'>
					<td>Desempeño integral  indicador de desempeño fiscal</td>";
		foreach ($resultados as $resultado) {
			$desIntIndDesFis = $resultado->desIntIndDesFis;

			$html .= "<td>$desIntIndDesFis</td>";

		};

            $html .= "</tr>
			</tbody>
			</table>

			</div>";

	$html .= "<div class='col-sm-6 col-md-6 col-lg-6'>

				<table class='table table-bordered table-hover'>
				<thead class='thead-s'>
				<tr>
					<th>Indice de desempeño fiscal</th>
					<th>Valores</th>
				<</tr>
				</thead>
				<tbody>
				<tr class='border-dotted'>
					<td>Autofinanciación de los gastos de funcionamiento</td>";
		foreach ($resultados as $resultado) {
			$autGasFun = $resultado->autGasFun;

			$html .= "<td>$autGasFun</td>";

		};
	            $html .= "</tr>
				<tr class='border-dotted'>
				 	<td>Respaldo del servicio de la deuda</td>";
		foreach ($resultados as $resultado) {
			$respSerDeu = $resultado->respSerDeu;

			$html .= "<td>$respSerDeu</td>";

		};
	            $html .= "</tr>
				<tr class='border-dotted'>
					<td>Dependencia de las transferencias de la Nación y las Regalías</td>";
		foreach ($resultados as $resultado) {
			$depTraNacReg = $resultado->depTraNacReg;

			$html .= "<td>$depTraNacReg</td>";

		};
	            $html .= "</tr>
				<tr class='border-dotted'>
					<td>Generación de recursos propios</td>";
		foreach ($resultados as $resultado) {
			$genRecPro = $resultado->genRecPro;

			$html .= "<td>$genRecPro</td>";

		};
	            $html .= "</tr>
				<tr class='border-dotted'>
					<td>Magnitud de la inversión</td>";
		foreach ($resultados as $resultado) {
			$magInv = $resultado->magInv;

			$html .= "<td>$magInv</td>";

		};
	            $html .= "</tr>
				<tr class='border-dotted'>
					<td>Capacidad de ahorro</td>";
		foreach ($resultados as $resultado) {
			$capAho = $resultado->capAho;

			$html .= "<td>$capAho</td>";

		};
	            $html .= "</tr>
				<tr class='border-dotted'>
					<td>Indicador de desempeño Fiscal</td>";
		foreach ($resultados as $resultado) {
			$indDesFis = $resultado->indDesFis;

			$html .= "<td>$indDesFis</td>";

		};
	            $html .= "</tr>
				<tr class='border-dotted'>
					<td>Posición a nivel nacional</td>";
		foreach ($resultados as $resultado) {
			$posNivNac = $resultado->posNivNac;

			$html .= "<td>$posNivNac</td>";

		};
	            $html .= "</tr>
				<tr class='border-dotted'>
					<td>Posición a nivel departamento</td>";
		foreach ($resultados as $resultado) {
			$posNivDep = $resultado->posNivDep;

			$html .= "<td>$posNivDep</td>";

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
				<th>Desempeño Integral  Eficacia Total</th>
				<th>Desempeño Integral  Gestión</th>
				<th>Desempeño Integral Indice Integral</th>
				<th>Funciones</th>
				</tr>
				</thead>
				<tbody>";

		$resultados = Finanza::join('planfinanciero', 'finanza.id', 'planfinanciero.finanza_id')
			->join('ejecucionpresupuesto', 'finanza.id', 'ejecucionpresupuesto.finanza_id')
			->join('indicedesempeñointegral', 'finanza.id', 'indicedesempeñointegral.finanza_id')
			->join('indicedesempeñofiscal', 'finanza.id', 'indicedesempeñofiscal.finanza_id')
			->select('finanza.id',
					DB::raw('YEAR(anioF) as YEARanioF'),
					'planfinanciero.*',
					'ejecucionpresupuesto.*',
					'indicedesempeñointegral.*',
					'indicedesempeñofiscal.*')
						->where('finanza.municipio_id', $idMunicipio)
						->orderBy('finanza.anioF')
						->get();
		foreach ($resultados as $resultado) {
			$id = $resultado->id;
			$anio = $resultado->YEARanioF;
			$desIntEfiTot = $resultado->desIntEfiTot;
			$desIntGes = $resultado->desIntGes;
			$desIntIndInt = $resultado->desIntIndInt;

			$html .= "<tr>
					<td>$anio</td>
					<td>$desIntEfiTot</td>
					<td>$desIntGes</td>
					<td>$desIntIndInt</td>
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
      Storage::disk('form')->put($name,  File::get($file));

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

      Excel::load('public/excel/'.$nameArchivo, function($reader)
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

          	$resultados = Finanza::where(DB::raw('YEAR(anioF)'), $result->anio)
          	->where('municipio_id', $id)
          				->limit(1)
						->get();
		    foreach ($resultados as $resultado) {
		      $booleanAño = True;
		    }

		    if ($booleanAño == False) {
		    	
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

				$defAhoCor = $result->plan_financiero_ingresos_contables_double - $result->plan_financiero_gastos_corrientes_double;
				$defSupTot = ($defAhoCor + $result->plan_financiero_ingreso_de_capital_double) - $result->plan_financiero_gastos_de_capital_inversion_double;

			    $data2[] = array('ingTot' =>  $result->plan_financiero_ingreso_total_double,
								'ingCor' =>  $result->plan_financiero_ingresos_contables_double,
								'ingTri' =>  $result->plan_financiero_ingresos_tributarios_double,
								'ingPre' =>  $result->plan_financiero_predial_double,
								'ingIndCom' =>  $result->plan_financiero_industria_y_comercio_double,
								'ingSobGas' =>  $result->plan_financiero_sobretasas_a_la_gasolina_double,
								'ingOtr' =>  $result->plan_financiero_otros_double,
								'ingNoTri' =>  $result->plan_financiero_ingresos_no_tributarios_double,
								'ingTra' =>  $result->plan_financiero_transferencias_double,
								'ingNivNac' =>  $result->plan_financiero_de_nivel_nacional_double,
								'ingNoTriOtr' =>  $result->plan_financiero_ingresos_no_tributarios_otros_double,
								'gasTot' =>  $result->plan_financiero_gastos_totales_double,
								'gasCor' =>  $result->plan_financiero_gastos_corrientes_double,
								'fun' =>  $result->plan_financiero_gastos_funcionamiento_double,
								'serFun' =>  $result->plan_financiero_servicios_personales_double,
								'gasGen' =>  $result->plan_financiero_gastos_generales_double,
								'traPag' =>  $result->plan_financiero_transferencias_pagadas_double,
								'intDeuPub' =>  $result->plan_financiero_deuda_publica_double,
								'defAhoCor' =>  $defAhoCor,
								'ingCap' =>  $result->plan_financiero_ingreso_de_capital_double,
								'reg' =>  $result->plan_financiero_regalias_double,
								'traNac' =>  $result->plan_financiero_transferencias_nacional_double,
								'cof' =>  $result->plan_financiero_cofinanciacion_double,
								'ingCapOtr' =>  $result->plan_financiero_ingreso_de_capital_otros_double,
								'gasCap' =>  $result->plan_financiero_gastos_de_capital_inversion_double,
								'forBruCapFij' =>  $result->plan_financiero_formacion_brutal_de_capital_fijo_double,
								'gasCapOtr' =>  $result->plan_financiero_gastos_de_capital_otros_double,
								'defSupTot' =>  $defSupTot,
								'fin' =>  $result->plan_financiero_financiamiento_double,
								'creNet' =>  $result->plan_financiero_credito_neto_double,
								'des' =>  $result->plan_financiero_desembolsos_double,
								'amo' =>  $result->plan_financiero_amortizaciones_double,
								'recBalVarDepOtr' =>  $result->plan_financiero_recursos_del_balance_variacion_de_depositos_otros_double,
	                           'finanza_id' => $finanza_id,
	                           'created_at' => $time,
	                           'updated_at' => $time);

			    $ejeDefAhoCor = $result->ejecuciones_presupuestales_ingresos_contables_double - $result->ejecuciones_presupuestales_gastos_corrientes_double;
				$ejeDefSupTot = ($defAhoCor + $result->ejecuciones_presupuestales_ingreso_de_capital) - $result->ejecuciones_presupuestales_gastos_de_capital_inversion_double;
				$ejeCreNet = $result->ejecuciones_presupuestales_desembolsos_double - $result->ejecuciones_presupuestales_amortizaciones_double;
				$ejeFin = $ejeCreNet + $result->ejeRecBalVarDepOtr;

			   $data3[] = array('ejeIngTot' =>  $result->ejecuciones_presupuestales_ingreso_total_double,
								'ejeIngCor' =>  $result->ejecuciones_presupuestales_ingresos_contables_double,
								'ejeIngTri' =>  $result->ejecuciones_presupuestales_ingresos_tributarios_double,
								'ejeIngPre' =>  $result->ejecuciones_presupuestales_predial_double,
								'ejeIngIndCom' =>  $result->ejecuciones_presupuestales_industria_y_comercio_double,
								'ejeIngSobGas' =>  $result->ejecuciones_presupuestales_sobretasas_a_la_gasolina_double,
								'ejeIngOtr' =>  $result->ejecuciones_presupuestales_otros_double,
								'ejeIngNoTri' =>  $result->ejecuciones_presupuestales_ingresos_no_tributarios_double,
								'ejeIngTra' =>  $result->ejecuciones_presupuestales_transferencias_double,
								'ejeIngNivNac' =>  $result->ejecuciones_presupuestales_de_nivel_nacional_double,
								'ejeIngNoTriOtr' =>  $result->ejecuciones_presupuestales_ingresos_no_tributarios_otros_double,
								'ejeGasTot' =>  $result->ejecuciones_presupuestales_gastos_totales_double,
								'ejeGasCor' =>  $result->ejecuciones_presupuestales_gastos_corrientes_double,
								'ejeFun' =>  $result->ejecuciones_presupuestales_gastos_funcionamiento_double,
								'ejeSerFun' =>  $result->ejecuciones_presupuestales_servicios_personales_double,
								'ejeGasGen' =>  $result->ejecuciones_presupuestales_gastos_generales_double,
								'ejeTraPag' =>  $result->ejecuciones_presupuestales_transferencias_pagadas_double,
								'ejeIntDeuPub' =>  $result->ejecuciones_presupuestales_transferencias_deuda_publica_double,
								'ejeDefAhoCor' =>  $ejeDefAhoCor,
								'ejeIngCap' =>  $result->ejecuciones_presupuestales_ingreso_de_capital_double,
								'ejeReg' =>  $result->ejecuciones_presupuestales_regalias_double,
								'ejeTraNac' =>  $result->ejecuciones_presupuestales_transferencias_nacional_double,
								'ejeCof' =>  $result->ejecuciones_presupuestales_cofinanciacion_double,
								'ejeIngCapOtr' =>  $result->ejecuciones_presupuestales_ingreso_de_capital_otros_double,
								'ejeGasCap' =>  $result->ejecuciones_presupuestales_gastos_de_capital_inversion_double,
								'ejeForBruCapFij' =>  $result->ejecuciones_presupuestales_formacion_brutal_de_capital_fijo_double,
								'ejeGasCapOtr' =>  $result->ejecuciones_presupuestales_gastos_de_capital_otros_double,
								'ejeDefSupTot' =>  $ejeDefSupTot,
								'ejeFin' =>  $ejeFin,
								'ejeCreNet' =>  $ejeCreNet,
								'ejeDes' =>  $result->ejecuciones_presupuestales_desembolsos_double,
								'ejeAmo' =>  $result->ejecuciones_presupuestales_amortizaciones_double,
								'ejeRecBalVarDepOtr' =>  $result->ejecuciones_presupuestales_recursos_del_balance_variacion_de_depositos_otros_double,
	                           'finanza_id' => $finanza_id,
	                           'created_at' => $time,
	                           'updated_at' => $time);

			   $data4[] = array('desIntCapAdm' => $result->desempenio_integral_capacidad_administrativa_double,
								'desIntEfiTot' => $result->desempenio_integral_eficacia_total_double,
								'desIntGes' => $result->desempenio_integral_gestion_double,
								'desIntIndInt' => $result->desempenio_integral_indice_integral_double,
								'desIntReqLeg' => $result->desempenio_integral_requisitos_legales_double,
								'desIntIndDesFis' => $result->desempenio_integral_indicador_de_desempenio_fiscal_double,
	                           'finanza_id' => $finanza_id,
	                           'created_at' => $time,
	                           'updated_at' => $time);

			   $data5[] = array('autGasFun' => $result->autofinanciacion_de_los_gastos_de_funcionamiento_double,
								'respSerDeu' => $result->respaldo_del_servicio_de_la_deuda_double,
								'depTraNacReg' => $result->dependencia_de_la_transferencia_de_la_nacion_y_las_regalias_double,
								'genRecPro' => $result->generacion_de_recursos_propios_double,
								'magInv' => $result->magnitud_de_la_inversion_double,
								'capAho' => $result->capacidad_de_ahorro_double,
								'indDesFis' => $result->indicador_de_desempenio_fiscal_double,
								'posNivNac' => $result->posicion_a_nivel_nacional_integer,
								'posNivDep' => $result->posicion_a_nivel_departamento_integer,
	                           'finanza_id' => $finanza_id,
	                           'created_at' => $time,
	                           'updated_at' => $time);

			    Planfinanciero::insert($data2);
			    Ejecucionpresupuesto::insert($data3);
			    Indicedesempeniointegral::insert($data4);
			    Indicedesempeniofiscal::insert($data5);

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

          $booleanAño = False;
		    
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

              $data[] = array('anio' => "",
              				'municipio' => "",
              				 'plan_financiero_ingreso_total_double' => "",
              				 'plan_financiero_ingresos_contables_double' => "",
              				 'plan_financiero_ingresos_tributarios_double' => "",
              				 'plan_financiero_predial_double' => "",
              				 'plan_financiero_industria_y_comercio_double' => "",
              				 'plan_financiero_sobretasas_a_la_gasolina_double' => "",
              				 'plan_financiero_otros_double' => "",
              				 'plan_financiero_ingresos_no_tributarios_double' => "",
              				 'plan_financiero_transferencias_double' => "",
              				 'plan_financiero_de_nivel_nacional_double' => "",
              				 'plan_financiero_ingresos_no_tributarios_otros_double' => "",
              				 'plan_financiero_gastos_totales_double' => "",
              				 'plan_financiero_gastos_corrientes_double' => "",
              				 'plan_financiero_gastos_funcionamiento_double' => "",
              				 'plan_financiero_servicios_personales_double' => "",
              				 'plan_financiero_gastos_generales_double' => "",
              				 'plan_financiero_transferencias_pagadas_double' => "",
              				 'plan_financiero_deuda_publica_double' => "",
              				 'plan_financiero_ingreso_de_capital_double' => "",
              				 'plan_financiero_regalias_double' => "",
              				 'plan_financiero_transferencias_nacional_double' => "",
              				 'plan_financiero_cofinanciacion_double' => "",
              				 'plan_financiero_ingreso_de_capital_otros_double' => "",
              				 'plan_financiero_gastos_de_capital_inversion_double' => "",
              				 'plan_financiero_formacion_brutal_de_capital_fijo_double' => "",
              				 'plan_financiero_gastos_de_capital_otros_double' => "",
              				 'plan_financiero_financiamiento_double' => "",
              				 'plan_financiero_credito_neto_double' => "",
              				 'plan_financiero_desembolsos_double' => "",
              				 'plan_financiero_amortizaciones_double' => "",
              				 'plan_financiero_recursos_del_balance_variacion_de_depositos_otros_double' => "",

              				 'ejecuciones_presupuestales_ingreso_total_double' => "",
              				 'ejecuciones_presupuestales_ingresos_contables_double' => "",
              				 'ejecuciones_presupuestales_ingresos_tributarios_double' => "",
              				 'ejecuciones_presupuestales_predial_double' => "",
              				 'ejecuciones_presupuestales_industria_y_comercio_double' => "",
              				 'ejecuciones_presupuestales_sobretasas_a_la_gasolina_double' => "",
              				 'ejecuciones_presupuestales_otros_double' => "",
              				 'ejecuciones_presupuestales_ingresos_no_tributarios_double' => "",
              				 'ejecuciones_presupuestales_transferencias_double' => "",
              				 'ejecuciones_presupuestales_de_nivel_nacional_double' => "",
              				 'ejecuciones_presupuestales_ingresos_no_tributarios_otros_double' => "",
              				 'ejecuciones_presupuestales_gastos_totales_double' => "",
              				 'ejecuciones_presupuestales_gastos_corrientes_double' => "",
              				 'ejecuciones_presupuestales_gastos_funcionamiento_double' => "",
              				 'ejecuciones_presupuestales_servicios_personales_double' => "",
              				 'ejecuciones_presupuestales_gastos_generales_double' => "",
              				 'ejecuciones_presupuestales_transferencias_pagadas_double' => "",
              				 'ejecuciones_presupuestales_transferencias_deuda_publica_double' => "",
              				 'ejecuciones_presupuestales_ingreso_de_capital_double' => "",
              				 'ejecuciones_presupuestales_regalias_double' => "",
              				 'ejecuciones_presupuestales_transferencias_nacional_double' => "",
              				 'ejecuciones_presupuestales_cofinanciacion_double' => "",
              				 'ejecuciones_presupuestales_ingreso_de_capital_otros_double' => "",
              				 'ejecuciones_presupuestales_gastos_de_capital_inversion_double' => "",
              				 'ejecuciones_presupuestales_formacion_brutal_de_capital_fijo_double' => "",
              				 'ejecuciones_presupuestales_gastos_de_capital_otros_double' => "",
              				 'ejecuciones_presupuestales_desembolsos_double' => "",
              				 'ejecuciones_presupuestales_amortizaciones_double' => "",
              				 'ejecuciones_presupuestales_recursos_del_balance_variacion_de_depositos_otros_double' => "",

              				 'desempenio_integral_capacidad_administrativa_double' => "",
              				 'desempenio_integral_eficacia_total_double' => "",
              				 'desempenio_integral_gestion_double' => "",
              				 'desempenio_integral_indice_integral_double' => "",
              				 'desempenio_integral_requisitos_legales_double' => "",
              				 'desempenio_integral_indicador_de_desempenio_fiscal_double' => "",

              				 'autofinanciacion_de_los_gastos_de_funcionamiento_double' => "",
              				 'respaldo_del_servicio_de_la_deuda_double' => "",
              				 'dependencia_de_la_transferencia_de_la_nacion_y_las_regalias_double' => "",
              				 'generacion_de_recursos_propios_double' => "",
              				 'magnitud_de_la_inversion_double' => "",
              				 'capacidad_de_ahorro_double' => "",
              				 'indicador_de_desempenio_fiscal_double' => "",
              				 'posicion_a_nivel_nacional_integer' => "",
              				 'posicion_a_nivel_departamento_integer' => "",
	                       );

              $sheet->fromArray($data);

          });
      })->export('xls');
    }

}
