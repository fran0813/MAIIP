<?php

	$idGT = $_POST['idGT'];
	$temperatura = $_POST['temperatura'];
	$alturaNivMar = $_POST['alturaNivMar'];

	$ruralG = $_POST['ruralG'];
	$urbanoG = $_POST['urbanoG'];
	$totalG = $_POST['totalG'];

	$constRural = $_POST['constRural'];
	$constUrbano = $_POST['constUrbano'];
	$constTotal = $_POST['constTotal'];
	$terrRural = $_POST['terrRural'];
	$terrUrbano = $_POST['terrUrbano'];
	$terrTotal = $_POST['terrTotal'];

	$ruralP = $_POST['ruralP'];
	$urbanoP = $_POST['urbanoP'];
	$totalP = $_POST['totalP'];

	$updated_at = $_POST['updated_at'];


	try{

		$conn = new PDO('mysql:host=localhost; dbname=maiip', "root", "12345");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = $conn->prepare('UPDATE generalidadesterritorios SET temperatura = :temperatura, alturaNivMar = :alturaNivMar, updated_at =:updated_at WHERE id = :idGT');
		$sql->bindParam("idGT", $idGT, PDO::PARAM_STR);
		$sql->bindParam("temperatura", $temperatura, PDO::PARAM_STR);
		$sql->bindParam("alturaNivMar", $alturaNivMar, PDO::PARAM_STR);
		$sql->bindParam("updated_at", $updated_at, PDO::PARAM_STR);
		$sql->execute();

		$sql = $conn->prepare('UPDATE generalidades SET ruralG = :ruralG, urbanoG = :urbanoG, totalG = :totalG, updated_at = :updated_at WHERE generalidadterritorio_id = :idGT');
		$sql->bindParam("idGT", $idGT, PDO::PARAM_STR);
		$sql->bindParam("ruralG", $ruralG, PDO::PARAM_STR);
		$sql->bindParam("urbanoG", $urbanoG, PDO::PARAM_STR);
		$sql->bindParam("totalG", $totalG, PDO::PARAM_STR);
		$sql->bindParam("updated_at", $updated_at, PDO::PARAM_STR);
		$sql->execute();

		$sql = $conn->prepare('UPDATE territorios SET constRural = :constRural, constUrbano = :constUrbano, constTotal = :constTotal, terrRural = :terrRural, terrUrbano = :terrUrbano, terrTotal = :terrTotal, updated_at = :updated_at WHERE generalidadterritorio_id = :idGT');
		$sql->bindParam("idGT", $idGT, PDO::PARAM_STR);
		$sql->bindParam("constRural", $constRural, PDO::PARAM_STR);
		$sql->bindParam("constUrbano", $constUrbano, PDO::PARAM_STR);
		$sql->bindParam("constTotal", $constTotal, PDO::PARAM_STR);
		$sql->bindParam("terrRural", $terrRural, PDO::PARAM_STR);
		$sql->bindParam("terrUrbano", $terrUrbano, PDO::PARAM_STR);
		$sql->bindParam("terrTotal", $terrTotal, PDO::PARAM_STR);
		$sql->bindParam("updated_at", $updated_at, PDO::PARAM_STR);
		$sql->execute();

		$sql = $conn->prepare('UPDATE predios SET ruralP = :ruralP, urbanoP = :urbanoP, totalP = :totalP, updated_at = :updated_at WHERE generalidadterritorio_id = :idGT');
		$sql->bindParam("idGT", $idGT, PDO::PARAM_STR);
		$sql->bindParam("ruralP", $ruralP, PDO::PARAM_STR);
		$sql->bindParam("urbanoP", $urbanoP, PDO::PARAM_STR);
		$sql->bindParam("totalP", $totalP, PDO::PARAM_STR);
		$sql->bindParam("updated_at", $updated_at, PDO::PARAM_STR);
		$sql->execute();

		$html = "Se actualizaron los datos";

		echo json_encode($html);

	}catch(PDOException $e){

		$e->getMessage();
		echo json_encode($e);

	}

?>