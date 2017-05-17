<?php

	$idVSP = $_POST['idVSP'];

	try{

		$conn = new PDO('mysql:host=localhost; dbname=maiip', "root", "12345");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = $conn->prepare('SELECT viviendasserviciospublicos.id,DATE(anioVSP),cabViv,cabHog,cabHogViv,cabPerHog,cabPerViv,rurViv,rurHog,rurHogViv,rurPerHog,rurPerViv,totalViv,totalHog,totalHogViv,totalPerHog,totalPerViv,cabCA,centPobCA,rurDispCA,cabCAs,centPobCAs,rurDispCAs,cabCG,centPobCG,rurDispCG,cabCT,centPobCT,rurDispCT FROM viviendasserviciospublicos,coberturaalcantarillado,coberturaaseo,coberturagas,coberturatelefono WHERE viviendasserviciospublicos.id = :idVSP AND coberturaalcantarillado.viviendaserviciopublico_id = viviendasserviciospublicos.id AND coberturaaseo.viviendaserviciopublico_id = viviendasserviciospublicos.id AND coberturagas.viviendaserviciopublico_id = viviendasserviciospublicos.id AND viviendasserviciospublicos.ID = coberturatelefono.viviendaserviciopublico_id');
		$sql->execute(array('idVSP' => $idVSP));
		$resultados = $sql->fetchAll();
		$html = "";

		foreach ($resultados as $resultado) {
			$id = $resultado['id'];               
			$anio = $resultado['DATE(anioVSP)'];

			$cabViv = $resultado['cabViv'];
			$cabHog = $resultado['cabHog'];
			$cabHogViv = $resultado['cabHogViv'];
			$cabPerHog = $resultado['cabPerHog'];
			$cabPerViv = $resultado['cabPerViv'];

               $rurViv = $resultado['rurViv'];
               $rurHog = $resultado['rurHog'];
               $rurHogViv = $resultado['rurHogViv'];
               $rurPerHog = $resultado['rurPerHog'];
               $rurPerViv = $resultado['rurPerViv'];

               $totalViv = $resultado['totalViv'];
               $totalHog = $resultado['totalHog'];
               $totalHogViv = $resultado['totalHogViv'];
               $totalPerHog = $resultado['totalPerHog'];
               $totalPerViv = $resultado['totalPerViv'];

               $cabCA = $resultado['cabCA'];
               $centPobCA = $resultado['centPobCA'];
               $rurDispCA = $resultado['rurDispCA'];

               $cabCAs = $resultado['cabCAs'];
               $centPobCAs = $resultado['centPobCAs'];
               $rurDispCAs = $resultado['rurDispCAs'];

               $cabCG = $resultado['cabCG'];
               $centPobCG = $resultado['centPobCG'];
               $rurDispCG = $resultado['rurDispCG'];

               $cabCT = $resultado['cabCT'];
               $centPobCT = $resultado['centPobCT'];
               $rurDispCT = $resultado['rurDispCT'];
		

			$html .="
                    <div class='col-lg-12 col-md-12 col-sm-12'>
                    <div class='col-lg-4 col-md-4 col-sm-4'>
                        <label for='anio' class='text-label'>Año</label>       
                        <input id='anio' type='date' class='form-control' value='$anio' disabled=''>
                    </div>
                </div>

                <div class='col-lg-12 col-md-12 col-sm-12'><br></div>

                <div class='col-lg-12 col-md-12 col-sm-12'>
                    <div class='col-lg-12 col-md-12 col-sm-12' style='font-size: 18px'>
                        <label for='cabViv2' class='text-label'><strong>Viviendas</strong></label>
                    </div>
                    <div class='col-lg-4 col-md-4 col-sm-4'>              
                        <label for='cabViv2' class='text-label'>Cabecera</label>       
                        <input id='cabViv2' type='text' placeholder='cabecera viviendas' oninput='calcularTotalCabViv2()' class='form-control' value='$cabViv'>
                    </div>
                    <div class='col-lg-4 col-md-4 col-sm-4'>
                        <label for='rurViv2' class='text-label'>Rural</label>     
                        <input id='rurViv2' type='text' placeholder='Rural viviendas' oninput='calcularTotalCabViv2()' class='form-control' value='$rurViv'>
                    </div>
                    <div class='col-lg-4 col-md-4 col-sm-4'>
                        <label for='totalViv2' class='text-label'>Total</label>       
                        <input id='totalViv2' type='text' placeholder='Total' disabled='' class='form-control' value='$totalViv'>
                    </div>
                </div>

               <div class='col-lg-12 col-md-12 col-sm-12'><br></div>

                <div class='col-lg-12 col-md-12 col-sm-12'>
                    <div class='col-lg-12 col-md-12 col-sm-12' style='font-size: 18px'>
                        <label for='cabHog2' class='text-label'><strong>Hogares</strong></label>
                    </div>
                    <div class='col-lg-4 col-md-4 col-sm-4'>              
                        <label for='cabHog2' class='text-label'>Cabecera</label>       
                        <input id='cabHog2' type='text' placeholder='cabecera hogares' oninput='calcularTotalCabHog2()' class='form-control' value='$cabHog'>
                    </div>
                    <div class='col-lg-4 col-md-4 col-sm-4'>
                        <label for='rurHog2' class='text-label'>Rural</label>     
                        <input id='rurHog2' type='text' placeholder='Rural hogares' oninput='calcularTotalCabHog2()' class='form-control' value='$rurHog'>
                    </div>
                    <div class='col-lg-4 col-md-4 col-sm-4'>
                        <label for='totalHog2' class='text-label'>Total</label>       
                        <input id='totalHog2' type='text' placeholder='Total' disabled='' class='form-control' value='$totalHog'>
                    </div>
                </div>

                <div class='col-lg-12 col-md-12 col-sm-12'><br></div>

                <div class='col-lg-12 col-md-12 col-sm-12'>
                    <div class='col-lg-12 col-md-12 col-sm-12' style='font-size: 18px'>
                        <label for='cabHogViv2' class='text-label'><strong>Hogares por vivienda</strong></label>
                    </div>
                    <div class='col-lg-4 col-md-4 col-sm-4'>              
                        <label for='cabHogViv2' class='text-label'>Cabecera</label>       
                        <input id='cabHogViv2' type='text' placeholder='cabecera hogares por vivienda' oninput='calcularTotalCabHogViv2()' class='form-control' value='$cabHogViv'>
                    </div>
                    <div class='col-lg-4 col-md-4 col-sm-4'>
                        <label for='rurHogViv2' class='text-label'>Rural</label>     
                        <input id='rurHogViv2' type='text' placeholder='Rural hogares por vivienda' oninput='calcularTotalCabHogViv2()' class='form-control' value='$rurHogViv'>
                    </div>
                    <div class='col-lg-4 col-md-4 col-sm-4'>
                        <label for='totalHogViv2' class='text-label'>Total</label>       
                        <input id='totalHogViv2' type='text' placeholder='Total' disabled='' class='form-control' value='$totalHogViv'>
                    </div>
                </div>

                <div class='col-lg-12 col-md-12 col-sm-12'><br></div>

                <div class='col-lg-12 col-md-12 col-sm-12'>
                    <div class='col-lg-12 col-md-12 col-sm-12' style='font-size: 18px'>
                        <label for='cabPerHog2' class='text-label'><strong>Personas por hogar</strong></label>
                    </div>
                    <div class='col-lg-4 col-md-4 col-sm-4'>              
                        <label for='cabPerHog2' class='text-label'>Cabecera</label>       
                        <input id='cabPerHog2' type='text' placeholder='cabecera personas por hogar' oninput='calcularTotalCabPerHog2()' class='form-control' value='$cabPerHog'>
                    </div>
                    <div class='col-lg-4 col-md-4 col-sm-4'>
                        <label for='rurPerHog2' class='text-label'>Rural</label>     
                        <input id='rurPerHog2' type='text' placeholder='Rural personas por hogar' oninput='calcularTotalCabPerHog2()' class='form-control' value='$rurPerHog'>
                    </div>
                    <div class='col-lg-4 col-md-4 col-sm-4'>
                        <label for='totalPerHog2' class='text-label'>Total</label>       
                        <input id='totalPerHog2' type='text' placeholder='Total' disabled='' class='form-control' value='$totalPerHog'>
                    </div>
                </div>

                <div class='col-lg-12 col-md-12 col-sm-12'><br></div>

                <div class='col-lg-12 col-md-12 col-sm-12'>
                    <div class='col-lg-12 col-md-12 col-sm-12' style='font-size: 18px'>
                        <label for='cabPerViv2' class='text-label'><strong>Personas por vivienda</strong></label>
                    </div>
                    <div class='col-lg-4 col-md-4 col-sm-4'>              
                        <label for='cabPerViv2' class='text-label'>Cabecera</label>       
                        <input id='cabPerViv2' type='text' placeholder='cabecera personas por vivienda' oninput='calcularTotalCabPerViv2()' class='form-control' value='$cabPerViv'>
                    </div>
                    <div class='col-lg-4 col-md-4 col-sm-4'>
                        <label for='rurPerViv2' class='text-label'>Rural</label>     
                        <input id='rurPerViv2' type='text' placeholder='Rural personas por vivienda' oninput='calcularTotalCabPerViv2()' class='form-control' value='$rurPerViv'>
                    </div>
                    <div class='col-lg-4 col-md-4 col-sm-4'>
                        <label for='totalPerViv2' class='text-label'>Total</label>       
                        <input id='totalPerViv2' type='text' placeholder='Total' disabled='' class='form-control' value='$totalPerViv'>
                    </div>
                </div>

                <div class='col-lg-12 col-md-12 col-sm-12'><br></div>

                <div class='col-lg-12 col-md-12 col-sm-12'>
                    <div class='col-lg-12 col-md-12 col-sm-12' style='font-size: 18px'>
                        <label for='cabCA2' class='text-label'><strong>Cobertura alcantarillado</strong></label>
                    </div>
                    <div class='col-lg-4 col-md-4 col-sm-4'>              
                        <label for='cabCA2' class='text-label'>Cabecera</label>       
                        <input id='cabCA2' type='text' placeholder='Cabecera' class='form-control' value='$cabCA'>
                    </div>
                    <div class='col-lg-4 col-md-4 col-sm-4'>
                        <label for='centPobCA2' class='text-label'>Centros poblados</label>     
                        <input id='centPobCA2' type='text' placeholder='Centros poblados' class='form-control' value='$centPobCA'>
                    </div>
                    <div class='col-lg-4 col-md-4 col-sm-4'>
                        <label for='rurDispCA2' class='text-label'>Rural dispersos</label>       
                        <input id='rurDispCA2' type='text' placeholder='Rural dispersos' class='form-control' value='$rurDispCA'>
                    </div>
                </div>

                <div class='col-lg-12 col-md-12 col-sm-12'><br></div>

                <div class='col-lg-12 col-md-12 col-sm-12'>
                    <div class='col-lg-12 col-md-12 col-sm-12' style='font-size: 18px'>
                        <label for='cabCAs2' class='text-label'><strong>Cobertura aseo</strong></label>
                    </div>
                    <div class='col-lg-4 col-md-4 col-sm-4'>              
                        <label for='cabCAs2' class='text-label'>Cabecera</label>       
                        <input id='cabCAs2' type='text' placeholder='Cabecera' class='form-control' value='$cabCAs'>
                    </div>
                    <div class='col-lg-4 col-md-4 col-sm-4'>
                        <label for='centPobCAs2' class='text-label'>Centros poblados</label>     
                        <input id='centPobCAs2' type='text' placeholder='Centros poblados' class='form-control' value='$centPobCAs'>
                    </div>
                    <div class='col-lg-4 col-md-4 col-sm-4'>
                        <label for='rurDispCAs2' class='text-label'>Rural dispersos</label>       
                        <input id='rurDispCAs2' type='text' placeholder='Rural dispersos' class='form-control' value='$rurDispCAs'>
                    </div>
                </div>

                <div class='col-lg-12 col-md-12 col-sm-12'><br></div>

                <div class='col-lg-12 col-md-12 col-sm-12'>
                    <div class='col-lg-12 col-md-12 col-sm-12' style='font-size: 18px'>
                        <label for='cabCG2' class='text-label'><strong>Cobertura gas</strong></label>
                    </div>
                    <div class='col-lg-4 col-md-4 col-sm-4'>              
                        <label for='cabCG2' class='text-label'>Cabecera</label>       
                        <input id='cabCG2' type='text' placeholder='Cabecera' class='form-control' value='$cabCG'>
                    </div>
                    <div class='col-lg-4 col-md-4 col-sm-4'>
                        <label for='centPobCG2' class='text-label'>Centros poblados</label>     
                        <input id='centPobCG2' type='text' placeholder='Centros poblados' class='form-control' value='$centPobCG'>
                    </div>
                    <div class='col-lg-4 col-md-4 col-sm-4'>
                        <label for='rurDispCG2' class='text-label'>Rural dispersos</label>       
                        <input id='rurDispCG2' type='text' placeholder='Rural dispersos' class='form-control' value='$rurDispCG'>
                    </div>
                </div>

                <div class='col-lg-12 col-md-12 col-sm-12'><br></div>

                <div class='col-lg-12 col-md-12 col-sm-12'>
                    <div class='col-lg-12 col-md-12 col-sm-12' style='font-size: 18px'>
                        <label for='cabCT2' class='text-label'><strong>Cobertura telefono</strong></label>
                    </div>
                    <div class='col-lg-4 col-md-4 col-sm-4'>              
                        <label for='cabCT2' class='text-label'>Cabecera</label>       
                        <input id='cabCT2' type='text' placeholder='Cabecera' class='form-control' value='$cabCT'>
                    </div>
                    <div class='col-lg-4 col-md-4 col-sm-4'>
                        <label for='centPobCT2' class='text-label'>Centros poblados</label>     
                        <input id='centPobCT2' type='text' placeholder='Centros poblados' class='form-control' value='$centPobCT'>
                    </div>
                    <div class='col-lg-4 col-md-4 col-sm-4'>
                        <label for='rurDispCT2' class='text-label'>Rural dispersos</label>       
                        <input id='rurDispCT2' type='text' placeholder='Rural dispersos' class='form-control' value='$rurDispCT'>
                    </div>
                </div>

                <div class='col-lg-12 col-md-12 col-sm-12'><br></div>
               ";

			$html .="<input id='idVSP' type='text' value='$id' style='display: none;'>";
		};

		echo json_encode($html);

	}catch(PDOException $e){

		$e->getMessage();
		echo json_encode($e);

	}

?>