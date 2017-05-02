<?php

	$idD = $_POST['idD'];
	$anioD = $_POST['anioD'];
	$pobEdadTrabajar = $_POST['pobEdadTrabajar'];
	$pobPotActiva = $_POST['pobPotActiva'];
	$pobPotInactiva = $_POST['pobPotInactiva'];
	$numPerMen = $_POST['numPerMen'];
	$numPerMay = $_POST['numPerMay'];
	$numPerInd = $_POST['numPerInd'];
	$numPerDep = $_POST['numPerDep'];
	$pobHom = $_POST['pobHom'];
	$pobMuj = $_POST['pobMuj'];
	$pobZonCab = $_POST['pobZonCab'];
	$pobZonRes = $_POST['pobZonRes'];
	$indRuralidad = $_POST['indRuralidad'];
	$pobTotal = $_POST['pobTotal'];
	$crecPob = $_POST['crecPob'];
	$updated_at = $_POST['updated_at'];

	try{

		$conn = new PDO('mysql:host=localhost; dbname=maiip', "root", "12345");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = $conn->prepare('UPDATE demografias SET anioD = :anioD, pobEdadTrabajar = :pobEdadTrabajar, pobPotActiva = :pobPotActiva, pobPotInactiva = :pobPotInactiva, numPerMen = :numPerMen, numPerMay = :numPerMay, numPerInd = :numPerInd, numPerDep = :numPerDep, pobHom = :pobHom, pobMuj = :pobMuj, pobZonCab = :pobZonCab, pobZonRes= :pobZonRes, indRuralidad = :indRuralidad, pobTotal = :pobTotal, crecPob = :crecPob, updated_at = :updated_at WHERE id = :idD');
		$sql->bindParam("idD", $idD, PDO::PARAM_STR);
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
		$sql->bindParam("updated_at", $updated_at, PDO::PARAM_STR);
		$sql->execute();

		$html = "Se actualizaron los datos";

		echo json_encode($html);

	}catch(PDOException $e){

		$e->getMessage();
		echo json_encode($e);

	}

?>