<?php

	$idS = $_POST['idS'];

	try{

		$conn = new PDO('mysql:host=localhost; dbname=maiip', "root", "12345");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = $conn->prepare('SELECT salud.id,DATE(anioS),tasVacBCG,tasVacDPT,tasVacHepatitisB,tasVacHIB,tasVacPolio,tasVacTripleViral,difBaMov,difEntApr,difMovCam,difSalirCalle,totalDis FROM salud,vacunaciones,discapacidades WHERE salud.id = :idS AND vacunaciones.salud_id = salud.id AND discapacidades.salud_id = salud.id');
		$sql->execute(array('idS' => $idS));
		$resultados = $sql->fetchAll();
		$html = "";

		foreach ($resultados as $resultado) {
            $id = $resultado['id'];               
            $anio = $resultado['DATE(anioS)'];

            $tasVacBCG = $resultado['tasVacBCG'];
            $tasVacDPT = $resultado['tasVacDPT'];
            $tasVacHepatitisB = $resultado['tasVacHepatitisB'];
            $tasVacHIB = $resultado['tasVacHIB'];
            $tasVacPolio = $resultado['tasVacPolio'];
            $tasVacTripleViral = $resultado['tasVacTripleViral'];

            $difBaMov = $resultado['difBaMov'];
            $difEntApr = $resultado['difEntApr'];
            $difMovCam = $resultado['difMovCam'];
            $difSalirCalle = $resultado['difSalirCalle'];
            $totalDis = $resultado['totalDis'];

			$html .="
                    <div class='col-lg-12 col-md-12 col-sm-12'>
                    <div class='col-lg-4 col-md-4 col-sm-4'>
                        <label for='anio2' class='text-label'>Año</label>       
                        <input id='anio2' type='date' class='form-control' value='$anio' disabled=''>
                    </div>
                </div>

                <div class='col-lg-12 col-md-12 col-sm-12'><br></div>

                <div class='col-lg-12 col-md-12 col-sm-12'>
                    <div class='col-lg-12 col-md-12 col-sm-12' style='font-size: 18px'>
                        <label for='tasVacBCG2' class='text-label'><strong>Vacunación</strong></label>
                    </div>
                    <div class='col-lg-4 col-md-4 col-sm-4'>              
                        <label for='tasVacBCG2' class='text-label'>BCG</label>       
                        <input id='tasVacBCG2' type='text' placeholder='Tasa de BCG' class='form-control' value='$tasVacBCG'>
                    </div>
                    <div class='col-lg-4 col-md-4 col-sm-4'>
                        <label for='tasVacDPT2' class='text-label'>DPT</label>     
                        <input id='tasVacDPT2' type='text' placeholder='Tasa de DPT' class='form-control' value='$tasVacDPT'>
                    </div>
                    <div class='col-lg-4 col-md-4 col-sm-4'>
                        <label for='tasVacHepatitisB2' class='text-label'>Hepatitis B</label>       
                        <input id='tasVacHepatitisB2' type='text' placeholder='Tasa de Hepatitis B' class='form-control' value='$tasVacHepatitisB'>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class='col-lg-4 col-md-4 col-sm-4'>
                        <label for='tasVacHIB2' class='text-label'>HIB</label>       
                        <input id='tasVacHIB2' type='text' placeholder='Tasa de HIB' class='form-control' value='$tasVacHIB'>
                    </div>
                    <div class='col-lg-4 col-md-4 col-sm-4'>
                        <label for='tasVacPolio2' class='text-label'>Polio</label>       
                        <input id='tasVacPolio2' type='text' placeholder='Tasa de Polio' class='form-control' value='$tasVacPolio'>
                    </div>
                    <div class='col-lg-4 col-md-4 col-sm-4'>
                        <label for='tasVacTripleViral2' class='text-label'>Triple viral</label>       
                        <input id='tasVacTripleViral2' type='text' placeholder='Tasa de Triple viral' class='form-control' value='$tasVacTripleViral'>
                    </div>
                </div>

               <div class='col-lg-12 col-md-12 col-sm-12'><br></div>

                <div class='col-lg-12 col-md-12 col-sm-12'>
                    <div class='col-lg-12 col-md-12 col-sm-12' style='font-size: 18px'>
                        <label for='difBaMov2' class='text-label'><strong>Discapacidades</strong></label>
                    </div>
                    <div class='col-lg-4 col-md-4 col-sm-4'>              
                        <label for='difBaMov2' class='text-label'>Dificultad para bañarse o moverse</label>       
                        <input id='difBaMov2' type='text' placeholder='Total' class='form-control' value='$difBaMov'>
                    </div>
                    <div class='col-lg-4 col-md-4 col-sm-4'>
                        <label for='difEntApr2' class='text-label'>Dificultad para entender o aprender</label>     
                        <input id='difEntApr2' type='text' placeholder='Total' class='form-control' value='$difEntApr'>
                    </div>
                    <div class='col-lg-4 col-md-4 col-sm-4'>
                        <label for='totalDis2' class='text-label'>Total de población con Discapacidad</label>       
                        <input id='totalDis2' type='text' placeholder='Total' class='form-control' value='$totalDis'>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                     <div class='col-lg-4 col-md-4 col-sm-4'>
                        <label for='difSalirCalle2' class='text-label'>Dificultad para salir a la calle sin ayuda o compañia</label>     
                        <input id='difSalirCalle2' type='text' placeholder='Total' class='form-control' value='$difSalirCalle'>
                    </div>                    
                     <div class='col-lg-4 col-md-4 col-sm-4'>
                        <label for='difMovCam2' class='text-label'>Dificultad para moverse o para caminar por si</label>       
                        <input id='difMovCam2' type='text' placeholder='Total' class='form-control' value='$difMovCam'>
                    </div>
                </div>

                <div class='col-lg-12 col-md-12 col-sm-12'><br></div> 
               ";

			$html .="<input id='idS' type='text' value='$id' style='display: none;'>";
		};

		echo json_encode($html);

	}catch(PDOException $e){

		$e->getMessage();
		echo json_encode($e);

	}

?>