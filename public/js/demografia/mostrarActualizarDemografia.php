<?php

     // Variables de entorno
     $db_connection = getenv('DB_CONNECTION');    
     $db_host = getenv('DB_HOST');
     $db_database = getenv('DB_DATABASE');
     $db_username = getenv('DB_USERNAME');
     $db_password = getenv('DB_PASSWORD');

	$idD = $_POST['idD'];

	try{

		$conn = new PDO("$db_connection:host=$db_host; dbname=$db_database", "$db_username", "$db_password");
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = $conn->prepare('SELECT id,DATE(anioD),pobEdadTrabajar,pobPotActiva,pobPotInactiva,numPerMen,numPerMay,numPerInd,numPerDep,pobHom,pobMuj,pobZonCab,pobZonRes,indRuralidad,pobTotal,crecPob FROM demografias WHERE id = :idD');
		$sql->execute(array('idD' => $idD));
		$resultados = $sql->fetchAll();
		$html = "";

		foreach ($resultados as $resultado) {
			$id = $resultado['id'];
			$anio = $resultado['DATE(anioD)'];
			$pobEdadTrabajar = $resultado['pobEdadTrabajar'];
			$pobPotActiva = $resultado['pobPotActiva'];
			$pobPotInactiva = $resultado['pobPotInactiva'];
			$numPerMen = $resultado['numPerMen'];
			$numPerMay = $resultado['numPerMay'];
			$numPerInd = $resultado['numPerInd'];
			$numPerDep = $resultado['numPerDep'];
			$pobHom = $resultado['pobHom'];
			$pobMuj = $resultado['pobMuj'];
			$pobZonCab = $resultado['pobZonCab'];
			$pobZonRes = $resultado['pobZonRes'];
			$indRuralidad = $resultado['indRuralidad'];
			$pobTotal = $resultado['pobTotal'];
			$crecPob = $resultado['crecPob'];

			$html .="
                    <div class='col-lg-12 col-md-12 col-sm-12'>
                         <div class='col-lg-5 col-md-5 col-sm-5'>
                              <label for='anio2' class='text-label'>Año</label>       
                              <input id='anio2' type='date' value='$anio' disabled='' class='form-control'>
                         </div>
                         <div class='col-lg-7 col-md-7 col-sm-7'>
                              <label for='pobEdadTrabajar2' class='text-label'>Población en edad de trabajar</label>        
                              <input id='pobEdadTrabajar2' type='text' value='$pobEdadTrabajar' oninput='calcularCrecPob2()' class='form-control'>
                         </div>
                     </div>

                    <div class='col-lg-12 col-md-12 col-sm-12'><br></div> 

                    <div class='col-lg-12 col-md-12 col-sm-12'>
                         <div class='col-lg-6 col-md-6 col-sm-6'>
                              <label for='pobPotActiva2' class='text-label'>Población activa</label>     
                              <input id='pobPotActiva2' type='text' value='$pobPotActiva' class='form-control'>
                         </div>
                         <div class='col-lg-6 col-md-6 col-sm-6'>
                              <label for='pobPotInactiva2' class='text-label'>Población inactiva</label>     
                              <input id='pobPotInactiva2' type='text' value='$pobPotInactiva' class='form-control'>
                         </div>
                     </div>

                    <div class='col-lg-12 col-md-12 col-sm-12'><br></div> 

                    <div class='col-lg-12 col-md-12 col-sm-12'>
                         <div class='col-lg-6 col-md-6 col-sm-6'>
                              <label for='numPerMen2' class='text-label'>Numero de personas menores</label>     
                              <input id='numPerMen2' type='text' value='$numPerMen' class='form-control'>
                         </div>
                         <div class='col-lg-6 col-md-6 col-sm-6'>
                              <label for='numPerMay2' class='text-label'>Numero de personas mayores</label>     
                              <input id='numPerMay2' type='text' value='$numPerMay' class='form-control'>
                         </div>
                     </div>

                    <div class='col-lg-12 col-md-12 col-sm-12'><br></div> 

                    <div class='col-lg-12 col-md-12 col-sm-12'>
                         <div class='col-lg-6 col-md-6 col-sm-6'>
                              <label for='numPerInd2' class='text-label'>Numero de personas independientes</label>     
                              <input id='numPerInd2' type='text' value='$numPerInd' class='form-control'>
                         </div>
                         <div class='col-lg-6 col-md-6 col-sm-6'>
                              <label for='numPerDep2' class='text-label'>Numero de personas dependientes</label>     
                              <input id='numPerDep2' type='text' value='$numPerDep' class='form-control'>
                         </div>
                     </div>

                    <div class='col-lg-12 col-md-12 col-sm-12'><br></div> 

                    <div class='col-lg-12 col-md-12 col-sm-12'>
                         <div class='col-lg-6 col-md-6 col-sm-6'>
                              <label for='pobHom2' class='text-label'>Población de hombres</label>     
                              <input id='pobHom2' type='text' value='$pobHom' class='form-control'> 
                         </div>
                         <div class='col-lg-6 col-md-6 col-sm-6'>
                              <label for='pobMuj2' class='text-label'>Población de mujeres</label>     
                              <input id='pobMuj2' type='text' value='$pobMuj' class='form-control'>
                         </div>
                     </div>

                    <div class='col-lg-12 col-md-12 col-sm-12'><br></div> 

                    <div class='col-lg-12 col-md-12 col-sm-12'>
                         <div class='col-lg-4 col-md-4 col-sm-4'>
                              <label for='pobZonCab2' class='text-label'>Población zona cabecera</label>     
                              <input id='pobZonCab2' type='text' value='$pobZonCab' class='form-control'>
                         </div>
                         <div class='col-lg-4 col-md-4 col-sm-4'>
                              <label for='pobZonRes2' class='text-label'>Población zona resto</label>     
                              <input id='pobZonRes2' type='text' value='$pobZonRes' oninput='calcularIndRuralidad2()' class='form-control'>
                         </div>
                         <div class='col-lg-4 col-md-4 col-sm-4'>
                              <label for='indRuralidad2' class='text-label'>Indice de ruralidad</label>     
                              <input id='indRuralidad2' type='text' value='$indRuralidad' disabled='' class='form-control'>
                         </div>
                     </div>

                    <div class='col-lg-12 col-md-12 col-sm-12'><br></div> 

                    <div class='col-lg-12 col-md-12 col-sm-12'>
                         <div class='col-lg-6 col-md-6 col-sm-6'>
                              <label for='pobTotal2' class='text-label'>Población total</label>     
                              <input id='pobTotal2' type='text' value='$pobTotal' oninput='calcularIndRuralidad2()' class='form-control'>
                         </div>
                         <div id='recibirCrecPob2' class='col-lg-6 col-md-6 col-sm-6'>
                             
                              <label for='crecPob2' class='text-label'>Crecimiento poblacional</label>     
                              <input id='crecPob2' type='text' value='$crecPob' disabled='' class='form-control'>
                              
                         </div>
                     </div>";

			$html .="<input id='idD' type='text' value='$id' style='display: none;'>";
		};

		echo json_encode($html);

	}catch(PDOException $e){

		$e->getMessage();
		echo json_encode("h");

	}

?>