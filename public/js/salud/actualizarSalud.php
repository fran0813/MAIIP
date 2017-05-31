<?php

	// Variables de entorno
	$db_connection = getenv('DB_CONNECTION');	
	$db_host = getenv('DB_HOST');
	$db_database = getenv('DB_DATABASE');
	$db_username = getenv('DB_USERNAME');
	$db_password = getenv('DB_PASSWORD');

	$idS = $_POST['idS'];

	$tasVacBCG = $_POST['tasVacBCG'];
	$tasVacDPT = $_POST['tasVacDPT'];
	$tasVacHepatitisB = $_POST['tasVacHepatitisB'];
	$tasVacHIB = $_POST['tasVacHIB'];
	$tasVacPolio = $_POST['tasVacPolio'];
	$tasVacTripleViral = $_POST['tasVacTripleViral'];

	$difBaMov = $_POST['difBaMov'];
	$difEntApr = $_POST['difEntApr'];
	$difMovCam = $_POST['difMovCam'];
	$difSalirCalle = $_POST['difSalirCalle'];
	$totalDis = $_POST['totalDis'];

	$updated_at = $_POST['updated_at'];

	try{

		$conn = new PDO("$db_connection:host=$db_host; dbname=$db_database", "$db_username", "$db_password");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = $conn->prepare('UPDATE vacunaciones SET tasVacBCG = :tasVacBCG, tasVacDPT = :tasVacDPT, tasVacHepatitisB = :tasVacHepatitisB, tasVacHIB= :tasVacHIB, tasVacPolio = :tasVacPolio, tasVacTripleViral = :tasVacTripleViral, updated_at =:updated_at WHERE salud_id = :idS');
		$sql->bindParam("idS", $idS, PDO::PARAM_STR);

		$sql->bindParam("tasVacBCG", $tasVacBCG, PDO::PARAM_STR);
		$sql->bindParam("tasVacDPT", $tasVacDPT, PDO::PARAM_STR);
		$sql->bindParam("tasVacHepatitisB", $tasVacHepatitisB, PDO::PARAM_STR);
		$sql->bindParam("tasVacHIB", $tasVacHIB, PDO::PARAM_STR);
		$sql->bindParam("tasVacPolio", $tasVacPolio, PDO::PARAM_STR);
		$sql->bindParam("tasVacTripleViral", $tasVacTripleViral, PDO::PARAM_STR);

		$sql->bindParam("updated_at", $updated_at, PDO::PARAM_STR);
		$sql->execute();

		$sql = $conn->prepare('UPDATE discapacidades SET difBaMov = :difBaMov, difEntApr = :difEntApr, difMovCam = :difMovCam, difSalirCalle = :difSalirCalle, totalDis = :totalDis, updated_at = :updated_at WHERE salud_id = :idS');
		$sql->bindParam("idS", $idS, PDO::PARAM_STR);

		$sql->bindParam("difBaMov", $difBaMov, PDO::PARAM_STR);
		$sql->bindParam("difEntApr", $difEntApr, PDO::PARAM_STR);
		$sql->bindParam("difMovCam", $difMovCam, PDO::PARAM_STR);
		$sql->bindParam("difSalirCalle", $difSalirCalle, PDO::PARAM_STR);
		$sql->bindParam("totalDis", $totalDis, PDO::PARAM_STR);

		$sql->bindParam("updated_at", $updated_at, PDO::PARAM_STR);
		$sql->execute();

		$html = "Se actualizaron los datos";

		echo json_encode($html);

	}catch(PDOException $e){

		$e->getMessage();
		echo json_encode($e);

	}

?>