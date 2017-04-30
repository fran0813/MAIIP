<?php

	// $iddep = $_POST['iddep'];

	try{

		$conn = new PDO('mysql:host=localhost; dbname=maiip', "root", "12345");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = $conn->prepare('UPDATE demografias SET anioD = :anioD, pobEdadTrabajar = :pobEdadTrabajar, pobPotActiva = :pobPotActiva, pobPotInactiva = :pobPotInactiva, numPerMen = :numPerMen, numPerMay = :numPerMay, numPerInd = :numPerInd, numPerDep = :numPerDep, pobHom = :pobHom, pobMuj = :pobMuj, pobZonCab = :pobZonCab, pobZonRes= :pobZonRes, indRuralidad = :indRuralidad, pobTotal = :pobTotal, crecPob = :crecPob, municipio_id = :municipio_id, created_at = :created_at, updated_at = :updated_at WHERE id = idDemografia');
		$sql->bindParam("anioD", $anioD, PDO::PARAM_STR);
		$sql->bindParam("pobEdadTrabajar", $pobEdadTrabajar, PDO::PARAM_STR);
		$sql->bindParam("pobPotActiva", $pobPotActiva, PDO::PARAM_STR);
		$sql->bindParam("pobPotInactiva", $pobPotInactiva, PDO::PARAM_STR);
		$sql->bindParam("numPerMen", $numPerMen, PDO::PARAM_STR);
		$sql->bindParam("numPerMay", $numPerMay, PDO::PARAM_STR);
		$sql->bindParam("numPerInd", $numPerInd, PDO::PARAM_STR);
		$sql->bindParam("numPerDep", $numPerDep, PDO::PARAM_STR);
		$sql->bindParam("pobHom", $pobHom, PDO::PARAM_STR);
		$sql->bindParam("pobMuj", $pobMuj, PDO::PARAM_STR);
		$sql->bindParam("pobZonCab", $pobZonCab, PDO::PARAM_STR);
		$sql->bindParam("pobZonRes", $pobZonRes, PDO::PARAM_STR);
		$sql->bindParam("indRuralidad", $indRuralidad, PDO::PARAM_STR);
		$sql->bindParam("pobTotal", $pobTotal, PDO::PARAM_STR);
		$sql->bindParam("crecPob", $crecPob, PDO::PARAM_STR);
		$sql->bindParam("municipio_id", $municipio_id, PDO::PARAM_STR);
		$sql->bindParam("created_at", $created_at, PDO::PARAM_STR);
		$sql->bindParam("updated_at", $updated_at, PDO::PARAM_STR);
		$sql->execute();

		// $html = "";
		// echo json_encode($html);

	}catch(PDOException $e){

		$e->getMessage();
		echo json_encode($e);

	}

?>