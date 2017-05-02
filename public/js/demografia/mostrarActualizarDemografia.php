<?php

	$idD = $_POST['idD'];

	try{

		$conn = new PDO('mysql:host=localhost; dbname=maiip', "root", "12345");
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

			$html .="<label for='anio2'>Año</label>       
                    <input id='anio2' type='date' value='$anio'>

                    <br>
                    <br>

                    <label for='pobEdadTrabajar2'>Población en edad de trabajar</label>        
                    <input id='pobEdadTrabajar2' type='text' value='$pobEdadTrabajar'>

                    <br>
                    <br>

                    <label for='pobPotActiva2'>Población activa</label>     
                    <input id='pobPotActiva2' type='text' value='$pobPotActiva'>

                    <br>
                    <br>

                    <label for='pobPotInactiva2'>Población inactiva</label>     
                    <input id='pobPotInactiva2' type='text' value='$pobPotInactiva'>

                    <br>
                    <br>

                    <label for='numPerMen2'>Numero de personas menores</label>     
                    <input id='numPerMen2' type='text' value='$numPerMen'>

                    <br>
                    <br>

                    <label for='numPerMay2'>Numero de personas mayores</label>     
                    <input id='numPerMay2' type='text' value='$numPerMay'>

                    <br>
                    <br>

                    <label for='numPerInd2'>Numero de personas independientes</label>     
                    <input id='numPerInd2' type='text' value='$numPerInd'>

                    <br>
                    <br>

                    <label for='numPerDep2'>Numero de personas dependientes</label>     
                    <input id='numPerDep2' type='text' value='$numPerDep'>

                    <br>
                    <br>

                    <label for='pobHom2'>Población de hombres</label>     
                    <input id='pobHom2' type='text' value='$pobHom'>

                    <br>
                    <br>

                    <label for='pobMuj2'>Población de mujeres</label>     
                    <input id='pobMuj2' type='text' value='$pobMuj'>

                    <br>
                    <br>

                    <label for='pobZonCab2'>Población zona cabecera</label>     
                    <input id='pobZonCab2' type='text' value='$pobZonCab'>

                    <br>
                    <br>

                    <label for='pobZonRes2'>Población zona resto</label>     
                    <input id='pobZonRes2' type='text' value='$pobZonRes'>

                    <br>
                    <br>

                    <label for='indRuralidad2'>Indice de ruralidad</label>     
                    <input id='indRuralidad2' type='text' value='$indRuralidad'>

                    <br>
                    <br>

                    <label for='pobTotal2'>Población total</label>     
                    <input id='pobTotal2' type='text' value='$pobTotal'>

                    <br>
                    <br>

                    <label for='crecPob2'>Crecimiento poblacional</label>     
                    <input id='crecPob2' type='text' value='$crecPob'>

                    <br>
                    <br>";

			$html .="<input id='idD' type='text' value='$id' style='display: none;'>";
		};

		echo json_encode($html);

	}catch(PDOException $e){

		$e->getMessage();
		echo json_encode("h");

	}

?>