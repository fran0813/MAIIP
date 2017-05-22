<?php

	$idE = $_POST['idE'];

	try{

		$conn = new PDO('mysql:host=localhost; dbname=maiip', "root", "12345");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = $conn->prepare('SELECT educacion.id,DATE(anioE),rurJardin,urbJardin,rurTrans,urbTrans,rurPrim,urbPrim,rurSecu,urbSecu,rurMedia,urbMedia,jardin,trans,prim,secu,media,femenino,masculino FROM educacion,matriculapormunicipiogenero,matriculapornivel WHERE educacion.id = :idE AND matriculapormunicipiogenero.educacion_id = educacion.id AND matriculapornivel.educacion_id = educacion.id');
		$sql->execute(array('idE' => $idE));
		$resultados = $sql->fetchAll();
		$html = "";

		foreach ($resultados as $resultado) {
            
            $id = $resultado['id'];               
            $anio = $resultado['DATE(anioE)'];

            $rurJardin = $resultado['rurJardin'];
            $urbJardin = $resultado['urbJardin'];
            $rurTrans = $resultado['rurTrans'];
            $urbTrans = $resultado['urbTrans'];
            $rurPrim = $resultado['rurPrim'];
            $urbPrim = $resultado['urbPrim'];
            $rurSecu = $resultado['rurSecu'];
            $urbSecu = $resultado['urbSecu'];
            $rurMedia = $resultado['rurMedia'];
            $urbMedia = $resultado['urbMedia'];

            $jardin = $resultado['jardin'];
            $trans = $resultado['trans'];
            $prim = $resultado['prim'];
            $secu = $resultado['secu'];
            $media = $resultado['media'];

            $femenino = $resultado['femenino'];
            $masculino = $resultado['masculino'];

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
                                <input id='rurJardin2' type='text' placeholder='Prejardin y jardin' class='form-control' value='$rurJardin'>
                            </div>
                            <div class='col-lg-6 col-md-6 col-sm-6' style='padding-right: 0px'>
                                <label for='rurTrans2' class='text-label'>Transición</label>     
                                <input id='rurTrans2' type='text' placeholder='Transición' class='form-control' value='$rurTrans'>
                            </div>
                            <br>
                            <br>
                            <div class='col-lg-6 col-md-6 col-sm-6' style='padding-left: 0px'>
                                <label for='rurPrim2' class='text-label'>Primaria</label>       
                                <input id='rurPrim2' type='text' placeholder='Primaria' class='form-control' value='$rurPrim'>
                            </div>
                            <div class='col-lg-6 col-md-6 col-sm-6' style='padding-right: 0px;'>
                                <label for='rurSecu2' class='text-label'>Secundaria</label>       
                                <input id='rurSecu2' type='text' placeholder='Secundaria' class='form-control' value='$rurSecu'>
                            </div>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <div class='col-lg-6 col-md-6 col-sm-6' style='padding-left: 0px;'>
                                <label for='rurMedia2' class='text-label'>Media</label>       
                                <input id='rurMedia2' type='text' placeholder='Media' class='form-control' value='$rurMedia'>
                            </div>
                        </div>

                       <div class='col-lg-6 col-md-6 col-sm-6'>
                            <div class='col-lg-12 col-md-12 col-sm-12' style='font-size: 16px; padding-left: 0px; padding-right: 0px'>
                                <label for='urbJardin2' class='text-label'><i class='fa fa-chevron-right' aria-hidden='true'></i> Rural</label>
                            </div>
                            <div class='col-lg-6 col-md-6 col-sm-6' style='padding-left: 0px;'>
                                <label for='urbJardin2' class='text-label'>Prejardin y jardin</label>       
                                <input id='urbJardin2' type='text' placeholder='Prejardin y jardin' class='form-control' value='$urbJardin'>
                            </div>
                            <div class='col-lg-6 col-md-6 col-sm-6' style='padding-right: 0px'>
                                <label for='urbTrans2' class='text-label'>Transición</label>     
                                <input id='urbTrans2' type='text' placeholder='Transición' class='form-control' value='$urbTrans'>
                            </div>
                            <br>
                            <br>
                            <div class='col-lg-6 col-md-6 col-sm-6' style='padding-left: 0px'>
                                <label for='urbPrim2' class='text-label'>Primaria</label>       
                                <input id='urbPrim2' type='text' placeholder='Primaria' class='form-control' value='$urbPrim'>
                            </div>
                            <div class='col-lg-6 col-md-6 col-sm-6' style='padding-right: 0px;'>
                                <label for='urbSecu2' class='text-label'>Secundaria</label>       
                                <input id='urbSecu2' type='text' placeholder='Secundaria' class='form-control'value='$urbSecu'>
                            </div>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <div class='col-lg-6 col-md-6 col-sm-6' style='padding-left: 0px;'>
                                <label for='urbMedia2' class='text-label'>Media</label>       
                                <input id='urbMedia2' type='text' placeholder='Media' class='form-control' value='$urbMedia'>
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
                        <input id='jardin2' type='text' placeholder='Prejardin y jardin' class='form-control' value='$jardin'>
                    </div>
                    <div class='col-lg-4 col-md-4 col-sm-4'>
                        <label for='trans2' class='text-label'>Transición</label>     
                        <input id='trans2' type='text' placeholder='Transición' class='form-control' value='$trans'>
                    </div>
                    <div class='col-lg-4 col-md-4 col-sm-4'>
                        <label for='prim2' class='text-label'>Primaria</label>       
                        <input id='prim2' type='text' placeholder='Primaria' class='form-control' value='$prim'>
                    </div>
                    <div class='col-lg-4 col-md-4 col-sm-4'>
                        <label for='secu2' class='text-label'>Secundaria</label>       
                        <input id='secu2' type='text' placeholder='Secundaria' class='form-control' value='$secu'>
                    </div>
                    <div class='col-lg-4 col-md-4 col-sm-4'>
                        <label for='media2' class='text-label'>Media</label>       
                        <input id='media2' type='text' placeholder='Media' class='form-control' value='$media'>
                    </div>
                </div>

                <div class='col-lg-12 col-md-12 col-sm-12'><br></div> 

                <div class='col-lg-12 col-md-12 col-sm-12'>
                    <div class='col-lg-12 col-md-12 col-sm-12' style='font-size: 18px'>
                        <label for='femenino2' class='text-label'><strong>Matriculas por genero</strong></label>
                    </div>
                    <div class='col-lg-6 col-md-6 col-sm-6'>              
                        <label for='femenino2' class='text-label'>Femenino</label>       
                        <input id='femenino2' type='text' placeholder='Femenino' class='form-control' value='$femenino'>
                    </div>
                    <div class='col-lg-6 col-md-6 col-sm-6'>
                        <label for='masculino2' class='text-label'>Masculino</label>     
                        <input id='masculino2' type='text' placeholder='Masculino' class='form-control' value='$masculino'>
                    </div>
                </div>

                <div class='col-lg-12 col-md-12 col-sm-12'><br></div> 
               ";

			$html .="<input id='idE' type='text' value='$id' style='display: none;'>";
		};

		echo json_encode($html);

	}catch(PDOException $e){

		$e->getMessage();
		echo json_encode($e);

	}

?>