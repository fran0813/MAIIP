<?php
     
      // Variables de entorno
     $db_connection = getenv('DB_CONNECTION');    
     $db_host = getenv('DB_HOST');
     $db_database = getenv('DB_DATABASE');
     $db_username = getenv('DB_USERNAME');
     $db_password = getenv('DB_PASSWORD');

	$idGT = $_POST['idGT'];

	try{

		$conn = new PDO("$db_connection:host=$db_host; dbname=$db_database", "$db_username", "$db_password");
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = $conn->prepare('SELECT generalidadesterritorios.id,DATE(anioGT),temperatura,alturaNivMar,ruralG,urbanoG,totalG,constRural,constUrbano,constTotal,terrRural,terrUrbano,terrTotal,ruralP,urbanoP,totalP FROM generalidadesterritorios,generalidades,territorios,predios WHERE generalidadesterritorios.id = :idGT AND generalidades.generalidadterritorio_id = generalidadesterritorios.id AND territorios.generalidadterritorio_id = generalidadesterritorios.id AND predios.generalidadterritorio_id = generalidadesterritorios.id');
		$sql->execute(array('idGT' => $idGT));
		$resultados = $sql->fetchAll();
		$html = "";

		foreach ($resultados as $resultado) {
			$id = $resultado['id'];
			$anio = $resultado['DATE(anioGT)'];
			$temperatura = $resultado['temperatura'];
			$alturaNivMar = $resultado['alturaNivMar'];
			$ruralG = $resultado['ruralG'];
			$urbanoG = $resultado['urbanoG'];
			$totalG = $resultado['totalG'];
			$constRural = $resultado['constRural'];
			$constUrbano = $resultado['constUrbano'];
			$constTotal = $resultado['constTotal'];
			$terrRural = $resultado['terrRural'];
			$terrUrbano = $resultado['terrUrbano'];
			$terrTotal = $resultado['terrTotal'];
			$ruralP = $resultado['ruralP'];
			$urbanoP = $resultado['urbanoP'];
			$totalP = $resultado['totalP'];

			$html .="
                    <div class='col-lg-12 col-md-12 col-sm-12'>
                         <div class='col-lg-4 col-md-4 col-sm-4'>
                              <label for='anio2' class='text-label'>Año</label>       
                        		<input id='anio2' type='date'value='$anio' disabled='' class='form-control'>
                         </div>
                         <div class='col-lg-4 col-md-4 col-sm-4'>
          	               <label for='temperatura' class='text-label'>Temperatura</label>        
          	               <input id='temperatura2' type='text' value='$temperatura' class='form-control'>
                         </div>
                         <div class='col-lg-4 col-md-4 col-sm-4'>                    
          	                <label for='alturaNivMar' class='text-label'>Altura sobre el nivel del mar</label>     
          	                <input id='alturaNivMar2' type='text' value='$alturaNivMar' class='form-control'>
                         </div>
                    </div>

                    <div class='col-lg-12 col-md-12 col-sm-12'><br></div>

                    <div class='col-lg-12 col-md-12 col-sm-12'>
                         <div class='col-lg-12 col-md-12 col-sm-12' style='font-size: 18px'>

                              <label for='ruralG' class='text-label'>Generalidades</label>
                         </div>
                         <div class='col-lg-4 col-md-4 col-sm-4'>              
                              <label for='ruralG' class='text-label'>Rural</label>       
                              <input id='ruralG2' type='text' value='$ruralG' oninput='calcularTotalG2()' class='form-control'>
                         </div>
                         <div class='col-lg-4 col-md-4 col-sm-4' >
                              <label for='urbanoG' class='text-label'>Urbano</label>     
                              <input id='urbanoG2' type='text' value='$urbanoG' oninput='calcularTotalG2()' class='form-control'>
                         </div>
                         <div class='col-lg-4 col-md-4 col-sm-4'>
                              <label for='totalG' class='text-label'>Total</label>       
                              <input id='totalG2' type='text' value='$totalG' disabled='' class='form-control'>
                         </div>
                    </div>

                	<div class='col-lg-12 col-md-12 col-sm-12'><br></div>

                    <div class='col-lg-12 col-md-12 col-sm-12'>
                         <div class='col-lg-12 col-md-12 col-sm-12' style='font-size: 18px'>
                              <label for='constRural'>Territorio</label>
                         </div>
                         <div class='col-lg-6 col-md-6 col-sm-6'>
                              <div class='col-lg-12 col-md-12 col-sm-12' style='font-size: 16px; padding-left: 0px; padding-right: 0px'>
                                   <label for='constRural' class='text-label'><i class='fa fa-chevron-right' aria-hidden='true'></i> Construida</label>
                              </div>
                              <div class='col-lg-6 col-md-6 col-sm-6' style='padding-left: 0px;'>
                                   <label for='constRural' class='text-label'>Rural</label>                          
                                   <input id='constRural2' type='text' value='$constRural' oninput='calcularConstTotal2()' class='form-control'>
                              </div>
                              <div class='col-lg-6 col-md-6 col-sm-6' style='padding-right: 0px'>
                                   <label for='constUrbano' class='text-label'>Urbano</label>     
                                   <input id='constUrbano2' type='text' value='$constUrbano' oninput='calcularConstTotal2()' class='form-control'>
                              </div>
                              <div class='col-lg-12 col-md-12 col-sm-12' style='padding-left: 0px; padding-right: 0px'><br>
                                   <label for='constTotal' class='text-label'>Total</label>       
                                   <input id='constTotal2' type='text' value='$constTotal' disabled='' class='form-control'>
                              </div>
                        </div>

                         <div class='col-lg-6 col-md-6 col-sm-6'>
                              <div class='col-lg-12 col-md-12 col-sm-12' style='font-size: 16px; padding-left: 0px; padding-right: 0px'>
                                   <label for='terrRural' class='text-label'><i class='fa fa-chevron-right' aria-hidden='true'></i> Terreno</label>
                              </div>
                              <div class='col-lg-6 col-md-6 col-sm-6' style='padding-left: 0px;'>
                                   <label for='terrRural' class='text-label' >Rural</label>         
                                   <input id='terrRural2' type='text' value='$terrRural' oninput='calcularTerrTotal2()' class='form-control'>
                              </div>
                              <div class='col-lg-6 col-md-6 col-sm-6' style='padding-right: 0px'>
                                   <label for='terrUrbano' class='text-label' >Urbano</label>     
                                   <input id='terrUrbano2' type='text' value='$terrUrbano' oninput='calcularTerrTotal2()' class='form-control'>
                              </div>
                              <div class='col-lg-12 col-md-12 col-sm-12' style='padding-left: 0px; padding-right: 0px'><br>
                                   <label for='terrTotal' class='text-label' >Total</label>     
                                   <input id='terrTotal2' type='text' value='$terrTotal' disabled='' class='form-control'>
                              </div>
                        </div>
                    </div>

	               <div class='col-lg-12 col-md-12 col-sm-12'><br></div>

                    <div class='col-lg-12 col-md-12 col-sm-12'>
                         <div class='col-lg-12 col-md-12 col-sm-12' style='font-size: 18px'>
                              <label for='ruralP' class='text-label'>Predios</label>
                         </div>
                         <div class='col-lg-4 col-md-4 col-sm-4'>
                              <label for='ruralP' class='text-label'>Rural</label>       
                              <input id='ruralP2' type='text' value='$ruralP' oninput='calcularTotalP2()' class='form-control'>
                         </div>
                         <div class='col-lg-4 col-md-4 col-sm-4'>
                              <label for='urbanoP' class='text-label'>Urbano</label>    
                              <input id='urbanoP2' type='text' value='$urbanoP' oninput='calcularTotalP2()' class='form-control'>
                         </div>
                         <div class='col-lg-4 col-md-4 col-sm-4'>
                              <label for='totalP' class='text-label'>Total</label>      
                              <input id='totalP2' type='text' value='$totalP' disabled='' class='form-control'>
                         </div>
                    </div>

                    <div class='col-lg-12 col-md-12 col-sm-12'><br></div>
               ";

			$html .="<input id='idGT' type='text' value='$id' style='display: none;'>";
		};

		echo json_encode($html);

	}catch(PDOException $e){

		$e->getMessage();
		echo json_encode("h");

	}

?>