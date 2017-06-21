<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \Response;

class EducacionController extends Controller
{
    public function actualizarEducacion(){

	$idE = $_GET['idE'];

	$rurJardin = $_GET['rurJardin'];
	$urbJardin = $_GET['urbJardin'];
	$rurTrans = $_GET['rurTrans'];
	$urbTrans = $_GET['urbTrans'];
	$rurPrim = $_GET['rurPrim'];
	$urbPrim = $_GET['urbPrim'];
	$rurSecu = $_GET['rurSecu'];
	$urbSecu = $_GET['urbSecu'];
	$rurMedia = $_GET['rurMedia'];
	$urbMedia = $_GET['urbMedia'];

	$jardin = $_GET['jardin'];
	$trans = $_GET['trans'];
	$prim = $_GET['prim'];
	$secu = $_GET['secu'];
	$media = $_GET['media'];

	$femenino = $_GET['femenino'];
	$masculino = $_GET['masculino'];

	$updated_at = $_GET['updated_at'];

		$sql = $conn->prepare('UPDATE educacion SET rurJardin = :rurJardin, urbJardin = :urbJardin, rurTrans = :rurTrans, urbTrans = :urbTrans, rurPrim = :rurPrim, urbPrim = :urbPrim, rurSecu = :rurSecu, urbSecu = :urbSecu, rurMedia = :rurMedia, urbMedia = :urbMedia, updated_at = :updated_at WHERE id = :idE');
		$sql->bindParam("idE", $idE, PDO::PARAM_STR);

		$sql->bindParam("rurJardin", $rurJardin, PDO::PARAM_STR);
		$sql->bindParam("urbJardin", $urbJardin, PDO::PARAM_STR);
		$sql->bindParam("rurTrans", $rurTrans, PDO::PARAM_STR);
		$sql->bindParam("urbTrans", $urbTrans , PDO::PARAM_STR);
		$sql->bindParam("rurPrim", $rurPrim, PDO::PARAM_STR);
		$sql->bindParam("urbPrim", $urbPrim, PDO::PARAM_STR);
		$sql->bindParam("rurSecu", $rurSecu, PDO::PARAM_STR);
		$sql->bindParam("urbSecu", $urbSecu , PDO::PARAM_STR);
		$sql->bindParam("rurMedia", $rurMedia, PDO::PARAM_STR);
		$sql->bindParam("urbMedia", $urbMedia, PDO::PARAM_STR);

		$sql->bindParam("updated_at", $updated_at, PDO::PARAM_STR);
		$sql->execute();

		$sql = $conn->prepare('UPDATE matriculapornivel SET jardin = :jardin, trans = :trans, prim = :prim, secu = :secu, media = :media, updated_at = :updated_at WHERE educacion_id = :idE');
		$sql->bindParam("idE", $idE, PDO::PARAM_STR);

		$sql->bindParam("jardin", $jardin, PDO::PARAM_STR);
		$sql->bindParam("trans", $trans, PDO::PARAM_STR);
		$sql->bindParam("prim", $prim, PDO::PARAM_STR);
		$sql->bindParam("secu", $secu, PDO::PARAM_STR);
		$sql->bindParam("media", $media, PDO::PARAM_STR);

		$sql->bindParam("updated_at", $updated_at, PDO::PARAM_STR);
		$sql->execute();

		$sql = $conn->prepare('UPDATE matriculaporgenero SET femenino = :femenino, masculino = :masculino, updated_at = :updated_at WHERE educacion_id = :idE');
		$sql->bindParam("idE", $idE, PDO::PARAM_STR);

		$sql->bindParam("femenino", $femenino, PDO::PARAM_STR);
		$sql->bindParam("masculino", $masculino, PDO::PARAM_STR);

		$sql->bindParam("updated_at", $updated_at, PDO::PARAM_STR);
		$sql->execute();

		$html = "Se actualizaron los datos";

		return Response::json(array('html' => $html,));

	}


	public function borrarEducacion(){

	$idE = $_GET['idE'];

		$sql = $conn->prepare('DELETE FROM matriculapornivel WHERE educacion_id = :idE');
		$sql->bindParam("idE", $idE, PDO::PARAM_STR);
		$sql->execute();

		$sql = $conn->prepare('DELETE FROM matriculaporgenero WHERE educacion_id = :idE');
		$sql->bindParam("idE", $idE, PDO::PARAM_STR);
		$sql->execute();

		$sql = $conn->prepare('DELETE FROM educacion WHERE id = :idE');
		$sql->bindParam("idE", $idE, PDO::PARAM_STR);
		$sql->execute();

		$html = "borrado";

		return Response::json(array('html' => $html,));

	}


	public function crearEducacion(){

	$anioE = $_GET['anioE'];
	$comprobar = $_GET['comprobar'];

	$rurJardin = $_GET['rurJardin'];
	$urbJardin = $_GET['urbJardin'];
	$rurTrans = $_GET['rurTrans'];
	$urbTrans = $_GET['urbTrans'];
	$rurPrim = $_GET['rurPrim'];
	$urbPrim = $_GET['urbPrim'];
	$rurSecu = $_GET['rurSecu'];
	$urbSecu = $_GET['urbSecu'];
	$rurMedia = $_GET['rurMedia'];
	$urbMedia = $_GET['urbMedia'];

	$jardin = $_GET['jardin'];
	$trans = $_GET['trans'];
	$prim = $_GET['prim'];
	$secu = $_GET['secu'];
	$media = $_GET['media'];

	$femenino = $_GET['femenino'];
	$masculino = $_GET['masculino'];

	$municipio_id = $_GET['municipio_id'];
	$created_at = $_GET['created_at'];
	$updated_at = $_GET['updated_at'];

		$sql = $conn->prepare('SELECT * FROM educacion WHERE YEAR(anioE) = :comprobar');

		$ban = False;

		foreach ($resultados as $resultado) {
			$ban = True;
		};

		if($ban == False){

		$sql = $conn->prepare('INSERT INTO educacion VALUES (null, :anioE, :rurJardin, :urbJardin, :rurTrans, :urbTrans, :rurPrim, :urbPrim, :rurSecu, :urbSecu, :rurMedia, :urbMedia, :municipio_id, :created_at, :updated_at)');

		$sql->bindParam("anioE", $anioE, PDO::PARAM_STR);

		$sql->bindParam("rurJardin", $rurJardin, PDO::PARAM_STR);
		$sql->bindParam("urbJardin", $urbJardin, PDO::PARAM_STR);
		$sql->bindParam("rurTrans", $rurTrans, PDO::PARAM_STR);
		$sql->bindParam("urbTrans", $urbTrans , PDO::PARAM_STR);
		$sql->bindParam("rurPrim", $rurPrim, PDO::PARAM_STR);
		$sql->bindParam("urbPrim", $urbPrim, PDO::PARAM_STR);
		$sql->bindParam("rurSecu", $rurSecu, PDO::PARAM_STR);
		$sql->bindParam("urbSecu", $urbSecu , PDO::PARAM_STR);
		$sql->bindParam("rurMedia", $rurMedia, PDO::PARAM_STR);
		$sql->bindParam("urbMedia", $urbMedia, PDO::PARAM_STR);

		$sql->bindParam("municipio_id", $municipio_id, PDO::PARAM_STR);
		$sql->bindParam("created_at", $created_at, PDO::PARAM_STR);
		$sql->bindParam("updated_at", $updated_at, PDO::PARAM_STR);
		$sql->execute();

		$sql = $conn->prepare('SELECT * FROM educacion ORDER BY id DESC LIMIT 1');
		$sql->execute();
		$resultados = $sql->fetchAll();

		foreach ($resultados as $resultado) {
			$educacion_id = $resultado['id'];
		};

		$sql = $conn->prepare('INSERT INTO matriculapornivel VALUES (null, :jardin, :trans, :prim, :secu, :media, :educacion_id, :created_at, :updated_at)');

		$sql->bindParam("jardin", $jardin, PDO::PARAM_STR);
		$sql->bindParam("trans", $trans, PDO::PARAM_STR);
		$sql->bindParam("prim", $prim, PDO::PARAM_STR);
		$sql->bindParam("secu", $secu, PDO::PARAM_STR);
		$sql->bindParam("media", $media, PDO::PARAM_STR);

		$sql->bindParam("educacion_id", $educacion_id, PDO::PARAM_STR);

		$sql->bindParam("created_at", $created_at, PDO::PARAM_STR);
		$sql->bindParam("updated_at", $updated_at, PDO::PARAM_STR);

		$sql->execute();

		$sql = $conn->prepare('INSERT INTO matriculaporgenero VALUES (null, :femenino, :masculino, :educacion_id, :created_at, :updated_at)');

		$sql->bindParam("femenino", $femenino, PDO::PARAM_STR);
		$sql->bindParam("masculino", $masculino, PDO::PARAM_STR);

		$sql->bindParam("educacion_id", $educacion_id, PDO::PARAM_STR);

		$sql->bindParam("created_at", $created_at, PDO::PARAM_STR);
		$sql->bindParam("updated_at", $updated_at, PDO::PARAM_STR);

		$sql->execute();

		$html = "Se registrarón los datos correctamente";

		}else{

		$html = "Ya se encuentra registrado ese año";

		}

		return Response::json(array('html' => $html,));

	}


	public function grafica1Educacion(){

		$idMunicipio = $_GET['idMunicipio'];

		$resultados = DB::table('educacion')
            ->join('matriculaporgenero', 'educacion.id', '=', 'matriculaporgenero.educacion_id')
            ->select('educacion.anioE', 'matriculaporgenero.femenino', 'matriculaporgenero.masculino')
            ->where('educacion.municipio_id', '=', $idMunicipio)
            ->orderBy('educacion.anioE', 'asc')
            ->get();
		
		$html = "";
		$html .="<script type='text/javascript'>
				google.charts.load('current', {'packages':['corechart']});
	      		google.charts.setOnLoadCallback(drawChart);

	      		function drawChart() {
		        var data = google.visualization.arrayToDataTable([
		        ['Año', 'Femenino', 'Masculino'],";
		
		foreach ($resultados as $resultado) {
			$anio = $resultado->anioE;
			$femenino = $resultado->femenino;
			$masculino = $resultado->masculino;

			$html .= "['$anio', $femenino, $masculino],";
		};

		$html .="]);

	        	var options = {
		        title: 'Matriculas por genero',
		        curveType: 'function',
		        legend: { position: 'rigth' },
		        colors: ['#e9473f', '#131FBD']
	        	};

	        	var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

	        	chart.draw(data, options);
	     		}
				</script>

				<div id='curve_chart' style='width: 900px; height: 500px'></div>";

		return Response::json(array('html' => $html,));

	}


	public function grafica2Educacion(){

		$idMunicipio = $_GET['idMunicipio'];

		$resultados = DB::table('educacion')
            ->join('matriculapornivel', 'educacion.id', '=', 'matriculapornivel.educacion_id')
            ->select('educacion.anioE', 'matriculapornivel.jardin', 'matriculapornivel.trans', 'matriculapornivel.prim', 'matriculapornivel.secu', 'matriculapornivel.media')
            ->where('educacion.municipio_id', '=', $idMunicipio)
            ->orderBy('educacion.anioE', 'asc')
            ->get();

		$html = "";
		$html .="<script type='text/javascript'>
				google.charts.load('current', {'packages':['corechart']});
	      		google.charts.setOnLoadCallback(drawChart);

	      		function drawChart() {
		        var data = google.visualization.arrayToDataTable([
		        ['Año', 'Jardin', 'Transición', 'Primaria', 'Secundaria', 'Media'],";
		
		foreach ($resultados as $resultado) {
			$anio = $resultado->anioE;
			$jardin = $resultado->jardin;
			$trans = $resultado->trans;
			$prim = $resultado->prim;
			$secu = $resultado->secu;
			$media = $resultado->media;

			$html .= "['$anio', $jardin, $trans, $prim, $secu, $media],";
		};

		$html .="]);

	        	var options = {
		        title: 'Matriculas por nivel',
		        bar: {groupWidth: '20%'},
		        legend: { position: 'rigth' },
		        colors: ['#e9473f', '#397ACB', '#F8EF01']
	        	};

	        	var chart = new google.visualization.ColumnChart(document.getElementById('columnchart_values'));

	        	chart.draw(data, options);
	     		}
				</script>

				<div id='columnchart_values' style='width: 900px; height: 300px;'></div>";

		return Response::json(array('html' => $html,));

	}

	public function mostrarActualizarEducacion(){

		$idE = $_GET['idE'];

		$resultados = DB::table('educacion')
            ->join('matriculaporgenero', 'educacion.id', '=', 'matriculaporgenero.educacion_id')
            ->join('matriculapornivel', 'educacion.id', '=', 'matriculapornivel.educacion_id')
            ->select('educacion.anioE', 'educacion.rurJardin', 'educacion.urbJardin', 'educacion.rurTrans', 'educacion.urbTrans', 'educacion.rurPrim', 'educacion.urbPrim', 'educacion.rurSecu', 'educacion.urbSecu', 'educacion.rurMedia', 'educacion.urbMedia', 'matriculaporgenero.*', 'matriculapornivel.*')
            ->where('educacion.id', '=', $idE)
            ->get();
		
		$html = "";

		foreach ($resultados as $resultado) {
            
            $id = $resultado->id;               
            $anio = $resultado->anioE;

            $rurJardin = $resultado->rurJardin;
            $urbJardin = $resultado->urbJardin;
            $rurTrans = $resultado->rurTrans;
            $urbTrans = $resultado->urbTrans;
            $rurPrim = $resultado->rurPrim;
            $urbPrim = $resultado->urbPrim;
            $rurSecu = $resultado->rurSecu;
            $urbSecu = $resultado->urbSecu;
            $rurMedia = $resultado->rurMedia;
            $urbMedia = $resultado->urbMedia;

            $jardin = $resultado->jardin;
            $trans = $resultado->trans;
            $prim = $resultado->prim;
            $secu = $resultado->secu;
            $media = $resultado->media;

            $femenino = $resultado->femenino;
            $masculino = $resultado->masculino;

			$html .="
                 <div class='col-lg-12 col-md-12 col-sm-12'>
                    <div class='col-lg-5 col-md-5 col-sm-5'>
                        <label for='anio2' class='text-label'>Año</label>       
                        <input id='anio2' type='date' class='form-control' value='$anio' disabled=''>
                    </div>
                </div>

                <div class='col-lg-12 col-md-12 col-sm-12'><br></div> 

                 <div class='col-lg-12 col-md-12 col-sm-12'>
                    <div class='col-lg-12 col-md-12 col-sm-12' style='font-size: 18px'>
                        <label for='rurJardin2' class='text-label'><strong>Educacion</strong></label>
                    </div>
                        <div class='col-lg-6 col-md-6 col-sm-6'>
                            <div class='col-lg-12 col-md-12 col-sm-12' style='font-size: 16px; padding-left: 0px; padding-right: 0px'>
                                <label for='rurJardin2' class='text-label'><i class='fa fa-chevron-right' aria-hidden='true'></i> Rural</label>
                            </div>
                            <div class='col-lg-6 col-md-6 col-sm-6' style='padding-left: 0px;'>
                                <label for='rurJardin2' class='text-label'>Prejardin y jardin</label>       
                                <input id='rurJardin2' type='text' placeholder='Prejardin y jardin' class='form-control' value='$rurJardin' oninput='calcularJardin2()'>
                            </div>
                            <div class='col-lg-6 col-md-6 col-sm-6' style='padding-right: 0px'>
                                <label for='rurTrans2' class='text-label'>Transición</label>     
                                <input id='rurTrans2' type='text' placeholder='Transición' class='form-control' value='$rurTrans' oninput='calcularTransicion2()'>
                            </div>
                            <br>
                            <br>
                            <div class='col-lg-6 col-md-6 col-sm-6' style='padding-left: 0px'>
                                <label for='rurPrim2' class='text-label'>Primaria</label>       
                                <input id='rurPrim2' type='text' placeholder='Primaria' class='form-control' value='$rurPrim' oninput='calcularPrimaria2()'>
                            </div>
                            <div class='col-lg-6 col-md-6 col-sm-6' style='padding-right: 0px;'>
                                <label for='rurSecu2' class='text-label'>Secundaria</label>       
                                <input id='rurSecu2' type='text' placeholder='Secundaria' class='form-control' value='$rurSecu' oninput='calcularSecundaria2()'>
                            </div>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <div class='col-lg-6 col-md-6 col-sm-6' style='padding-left: 0px;'>
                                <label for='rurMedia2' class='text-label'>Media</label>       
                                <input id='rurMedia2' type='text' placeholder='Media' class='form-control' value='$rurMedia' oninput='calcularMedia2()'>
                            </div>
                        </div>

                       <div class='col-lg-6 col-md-6 col-sm-6'>
                            <div class='col-lg-12 col-md-12 col-sm-12' style='font-size: 16px; padding-left: 0px; padding-right: 0px'>
                                <label for='urbJardin2' class='text-label'><i class='fa fa-chevron-right' aria-hidden='true'></i> Rural</label>
                            </div>
                            <div class='col-lg-6 col-md-6 col-sm-6' style='padding-left: 0px;'>
                                <label for='urbJardin2' class='text-label'>Prejardin y jardin</label>       
                                <input id='urbJardin2' type='text' placeholder='Prejardin y jardin' class='form-control' value='$urbJardin' oninput='calcularJardin2()'>
                            </div>
                            <div class='col-lg-6 col-md-6 col-sm-6' style='padding-right: 0px'>
                                <label for='urbTrans2' class='text-label'>Transición</label>     
                                <input id='urbTrans2' type='text' placeholder='Transición' class='form-control' value='$urbTrans' oninput='calcularTransicion2()'>
                            </div>
                            <br>
                            <br>
                            <div class='col-lg-6 col-md-6 col-sm-6' style='padding-left: 0px'>
                                <label for='urbPrim2' class='text-label'>Primaria</label>       
                                <input id='urbPrim2' type='text' placeholder='Primaria' class='form-control' value='$urbPrim' oninput='calcularPrimaria2()'>
                            </div>
                            <div class='col-lg-6 col-md-6 col-sm-6' style='padding-right: 0px;'>
                                <label for='urbSecu2' class='text-label'>Secundaria</label>       
                                <input id='urbSecu2' type='text' placeholder='Secundaria' class='form-control'value='$urbSecu' oninput='calcularSecundaria2()'>
                            </div>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <div class='col-lg-6 col-md-6 col-sm-6' style='padding-left: 0px;'>
                                <label for='urbMedia2' class='text-label'>Media</label>       
                                <input id='urbMedia2' type='text' placeholder='Media' class='form-control' value='$urbMedia' oninput='calcularMedia2()'>
                            </div>
                        </div>
                </div>
                <div class='col-lg-12 col-md-12 col-sm-12'><br></div> 

                <div class='col-lg-12 col-md-12 col-sm-12'>
                    <div class='col-lg-12 col-md-12 col-sm-12' style='font-size: 18px'>
                        <label for='jardin2' class='text-label'><strong>Matriculas por nivel</strong></label>
                    </div>
                    <div class='col-lg-4 col-md-4 col-sm-4'>              
                        <label for='jardin2' class='text-label'>Prejardin y jardin</label>       
                        <input id='jardin2' type='text' placeholder='Prejardin y jardin' class='form-control' value='$jardin' disabled=''>
                    </div>
                    <div class='col-lg-4 col-md-4 col-sm-4'>
                        <label for='trans2' class='text-label'>Transición</label>     
                        <input id='trans2' type='text' placeholder='Transición' class='form-control' value='$trans' disabled=''>
                    </div>
                    <div class='col-lg-4 col-md-4 col-sm-4'>
                        <label for='prim2' class='text-label'>Primaria</label>       
                        <input id='prim2' type='text' placeholder='Primaria' class='form-control' value='$prim' disabled=''>
                    </div>
                    <div class='col-lg-4 col-md-4 col-sm-4'>
                        <label for='secu2' class='text-label'>Secundaria</label>       
                        <input id='secu2' type='text' placeholder='Secundaria' class='form-control' value='$secu' disabled=''>
                    </div>
                    <div class='col-lg-4 col-md-4 col-sm-4'>
                        <label for='media2' class='text-label'>Media</label>       
                        <input id='media2' type='text' placeholder='Media' class='form-control' value='$media' disabled=''>
                    </div>
                </div>

                <div class='col-lg-12 col-md-12 col-sm-12'><br></div> 

                <div class='col-lg-12 col-md-12 col-sm-12'>
                    <div class='col-lg-12 col-md-12 col-sm-12' style='font-size: 18px'>
                        <label for='femenino2' class='text-label'><strong>Matriculas por genero</strong></label>
                    </div>
                    <div class='col-lg-6 col-md-6 col-sm-6'>              
                        <label for='femenino2' class='text-label'>Femenino</label>       
                        <input id='femenino2' type='text' placeholder='Femenino' class='form-control' value='$femenino' oninput='validarGenero2()'>
                    </div>
                    <div class='col-lg-6 col-md-6 col-sm-6'>
                        <label for='masculino2' class='text-label'>Masculino</label>     
                        <input id='masculino2' type='text' placeholder='Masculino' class='form-control' value='$masculino' oninput='validarGenero2()'>
                    </div>
                </div>

                <div class='col-lg-12 col-md-12 col-sm-12'><br></div> 
               ";

			$html .="<input id='idE' type='text' value='$id' style='display: none;'>";
		};

		return Response::json(array('html' => $html,));

	}
	

	public function mostrarEducacion(){

		$idMunicipio = $_GET['idMunicipio'];

		$resultados = DB::table('educacion')
            ->join('matriculaporgenero', 'educacion.id', '=', 'matriculaporgenero.educacion_id')
            ->join('matriculapornivel', 'educacion.id', '=', 'matriculapornivel.educacion_id')
            ->select('educacion.anioE', 'educacion.rurJardin', 'educacion.urbJardin', 'educacion.rurTrans', 'educacion.urbTrans', 'educacion.rurPrim', 'educacion.urbPrim', 'educacion.rurSecu', 'educacion.urbSecu', 'educacion.rurMedia', 'educacion.urbMedia', 'matriculaporgenero.*', 'matriculapornivel.*')
            ->where('educacion.municipio_id', '=', $idMunicipio)
            ->orderBy('educacion.anioE', 'asc')
            ->get();

		$html = "";
		$html .="<div class='col-sm-12 col-md-12 col-lg-12'>

				<table class='table table-bordered table-hover'>
				<thead class='thead-s'>
				<tr>
				<th>Datos</th>";

		foreach ($resultados as $resultado) {
			$anio = $resultado->anioE;
			
			$html .= "<th>$anio</th>";
		};

		$html .="</tr>
				</thead>
				<tbody>
				<tr class='border-dotted'>
				<td>Prejardin y jardin (rural)</td>";

		foreach ($resultados as $resultado) {
			$rurJardin = $resultado->rurJardin;
			
			$html .= "<td>$rurJardin</td>";
		};

		$html .="</tr>
					<tr class='border-dotted'>
						<td>Prejardin y jardin (urbano)</td>";

		foreach ($resultados as $resultado) {
			$urbJardin = $resultado->urbJardin;
			
			$html .= "<td>$urbJardin</td>";
		};

		$html .="</tr>
					<tr class='border-dotted'>
						<td>Transición (rural)</td>";

		foreach ($resultados as $resultado) {
			$rurTrans = $resultado->rurTrans;
			
			$html .= "<td>$rurTrans</td>";
		};

		$html .="</tr>
					<tr class='border-dotted'>
						<td>Transición (urbano)</td>";

		foreach ($resultados as $resultado) {
			$urbTrans = $resultado->urbTrans;
			
			$html .= "<td>$urbTrans</td>";
		};

		$html .="</tr>
					<tr class='border-dotted'>
						<td>Primaria (rural)</td>";

		foreach ($resultados as $resultado) {
			$rurPrim = $resultado->rurPrim;
			
			$html .= "<td>$rurPrim</td>"; 
		};

		$html .="</tr>
					<tr class='border-dotted'>
						<td>Primaria (urbano)</td>";

		foreach ($resultados as $resultado) {
			$urbPrim = $resultado->urbPrim;
			
			$html .= "<td>$urbPrim</td>";
		};

		$html .="</tr>
					<tr class='border-dotted'>
						<td>Secundaria (rural)</td>";

		foreach ($resultados as $resultado) {
			$rurSecu = $resultado->rurSecu;
			
			$html .= "<td>$rurSecu</td>";
		};

		$html .="</tr>
					<tr class='border-dotted'>
						<td>Secundaria (urbano)</td>";

		foreach ($resultados as $resultado) {
			$urbSecu = $resultado->urbSecu;
			
			$html .= "<td>$urbSecu</td>";
		};

		$html .="</tr>
					<tr class='border-dotted'>
						<td>Media (rural)</td>";

		foreach ($resultados as $resultado) {
			$rurMedia = $resultado->rurMedia;
			
			$html .= "<td>$rurMedia</td>";
		};

		$html .="</tr>
					<tr>
						<td>Media (urbano)</td>";

		foreach ($resultados as $resultado) {
			$urbMedia = $resultado->urbMedia;
			
			$html .= "<td>$urbMedia</td>";
		};

		$html .="</tr>
				</tbody>
			</table>

			</div>";

		// Tabla de matriculas por nivel
		$html .="<div class='col-sm-12 col-md-12 col-lg-12'>

			<table class='table table-bordered table-hover'>
				<thead class='thead-s'>
					<tr>
						<th>Matricula por nivel</th>";

		foreach ($resultados as $resultado) {
			$anio = $resultado->anioE;
			
			$html .= "<th>$anio</th>";
		};

		$html .="</tr>
				</thead>
				<tbody>
					<tr class='border-dotted'>
						<td>Prejardin y jardin</td>";

		foreach ($resultados as $resultado) {
			$jardin = $resultado->jardin;
			
			$html .= "<td>$jardin</td>";
		};

		$html .="</tr>
					<tr class='border-dotted'>
						<td>Transición</td>";

		foreach ($resultados as $resultado) {
			$trans = $resultado->trans;
			
			$html .= "<td>$trans</td>";
		};

		$html .="</tr>
					<tr class='border-dotted'>
						<td>Primaria (rural)</td>";

		foreach ($resultados as $resultado) {
			$rurPrim = $resultado->rurPrim;
			
			$html .= "<td>$rurPrim</td>"; 
		};

		$html .="</tr>
					<tr class='border-dotted'>
						<td>Primaria</td>";

		foreach ($resultados as $resultado) {
			$prim = $resultado->prim;
			
			$html .= "<td>$prim</td>";
		};

		$html .="</tr>
					<tr class='border-dotted'>
						<td>Secundaria</td>";

		foreach ($resultados as $resultado) {
			$secu = $resultado->secu;
			
			$html .= "<td>$secu</td>";
		};

		$html .="</tr>
					<tr>
						<td>Media</td>";

		foreach ($resultados as $resultado) {
			$media = $resultado->media;
			
			$html .= "<td>$media</td>";
		};

		$html .="</tr>
				</tbody>
			</table>

			</div>";	

		// Tabla de matriculas por genero
		$html .="<div class='col-sm-12 col-md-12 col-lg-12'>

			<table class='table table-bordered table-hover'>
				<thead class='thead-s'>
					<tr>
						<th>Matricula por genero</th>";

		foreach ($resultados as $resultado) {
			$anio = $resultado->anioE;
			
			$html .= "<th>$anio</th>";
		};

		$html .="</tr>
				</thead>
				<tbody>
					<tr class='border-dotted'>
						<td>Femenino</td>";

		foreach ($resultados as $resultado) {
			$femenino = $resultado->femenino;
			
			$html .= "<td>$femenino</td>";
		};

		$html .="</tr>
					<tr class='border-dotted'>
						<td>Masculino</td>";

		foreach ($resultados as $resultado) {
			$masculino = $resultado->masculino;
			
			$html .= "<td>$masculino</td>";
		};

		$html .="</tr>
				</tbody>
			</table>

			</div>";	

		return Response::json(array('html' => $html,));

	}


	public function mostrarTablaEducacion(){

		$idMunicipio = $_GET['idMunicipio'];

		$resultados = DB::table('educacion')
            ->select('educacion.id', 'educacion.anioE', 'educacion.rurJardin', 'educacion.urbJardin', 'educacion.rurTrans', 'educacion.urbTrans', 'educacion.rurPrim', 'educacion.urbPrim', 'educacion.rurSecu', 'educacion.urbSecu', 'educacion.rurMedia', 'educacion.urbMedia')
            ->where('educacion.municipio_id', '=', $idMunicipio)
            ->orderBy('anioE')
            ->get();
		

		$html = "";
		$html .="<table class='table table-striped table-bordered table-hover'>
				<thead>
				<tr>
				<th>Año</th>
				<th>Jardin en zona rural</th>
				<th>Jardin en zona urbana</th>
				<th>Transición en zona rural</th>
				<th>Transición en zona urbana</th>
				<th>Funciones</th>
				</tr>
				</thead>
				<tbody>";

		foreach ($resultados as $resultado) {

			$id = $resultado->id;
			$anio = $resultado->anioE;
			$rurJardin = $resultado->rurJardin;
			$urbJardin = $resultado->urbJardin;
			$rurTrans = $resultado->rurTrans;
			$urbTrans = $resultado->urbTrans;
			
			$html .="<tr>
					<td>$anio</td>
					<td>$rurJardin</td>
					<td>$urbJardin</td>
					<td>$rurTrans</td>
					<td>$urbTrans</td>
					<td><a id='$id' href='#' class='btn btn-success' data-toggle='modal' data-target='#modalMostrarActualizar'>Editar</a></td>
					</tr>";
		};

		$html .="</tbody>
				</table>";

		// <a id='$id' href='#' class='btn btn-danger'>Borrar</a>	

		return Response::json(array('html' => $html,));

	}

}