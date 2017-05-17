<?php

	$idVSP = $_POST['idVSP'];

	$cabViv = $_POST['cabViv'];
	$cabHog = $_POST['cabHog'];
	$cabHogViv = $_POST['cabHogViv'];
	$cabPerHog = $_POST['cabPerHog'];
	$cabPerViv = $_POST['cabPerViv'];

	$rurViv = $_POST['rurViv'];
	$rurHog = $_POST['rurHog'];
	$rurHogViv = $_POST['rurHogViv'];
	$rurPerHog = $_POST['rurPerHog'];
	$rurPerViv = $_POST['rurPerViv'];

	$totalViv = $_POST['totalViv'];
	$totalHog = $_POST['totalHog'];
	$totalHogViv = $_POST['totalHogViv'];
	$totalPerHog = $_POST['totalPerHog'];
	$totalPerViv = $_POST['totalPerViv'];

	$cabCA = $_POST['cabCA'];
	$centPobCA = $_POST['centPobCA'];
	$rurDispCA = $_POST['rurDispCA'];

	$cabCAs = $_POST['cabCAs'];
	$centPobCAs = $_POST['centPobCAs'];
	$rurDispCAs = $_POST['rurDispCAs'];

	$cabCG = $_POST['cabCG'];
	$centPobCG = $_POST['centPobCG'];
	$rurDispCG = $_POST['rurDispCG'];

	$cabCT = $_POST['cabCT'];
	$centPobCT = $_POST['centPobCT'];
	$rurDispCT = $_POST['rurDispCT'];

	$updated_at = $_POST['updated_at'];

	try{

		$conn = new PDO('mysql:host=localhost; dbname=maiip', "root", "12345");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = $conn->prepare('UPDATE viviendasserviciospublicos SET cabViv = :cabViv, cabHog = :cabHog, cabHogViv = :cabHogViv, cabPerHog = :cabPerHog, cabPerViv = :cabPerViv updated_at =:updated_at WHERE id = :idVSP');
		$sql->bindParam("idVSP", $idVSP, PDO::PARAM_STR);

		$sql->bindParam("cabViv", $cabViv, PDO::PARAM_STR);
		$sql->bindParam("cabHog", $cabHog, PDO::PARAM_STR);
		$sql->bindParam("cabHogViv", $cabHogViv, PDO::PARAM_STR);
		$sql->bindParam("cabPerHog", $cabPerHog, PDO::PARAM_STR);
		$sql->bindParam("cabPerViv", $cabPerViv, PDO::PARAM_STR);

		$sql->bindParam("rurViv", $rurViv, PDO::PARAM_STR);
		$sql->bindParam("rurHog", $rurHog, PDO::PARAM_STR);
		$sql->bindParam("rurHogViv", $rurHogViv, PDO::PARAM_STR);
		$sql->bindParam("rurPerHog", $rurPerHog, PDO::PARAM_STR);
		$sql->bindParam("rurPerViv", $rurPerViv, PDO::PARAM_STR);

		$sql->bindParam("totalViv", $totalViv, PDO::PARAM_STR);
		$sql->bindParam("totalHog", $totalHog, PDO::PARAM_STR);
		$sql->bindParam("totalHogViv", $totalHogViv, PDO::PARAM_STR);
		$sql->bindParam("totalPerHog", $totalPerHog, PDO::PARAM_STR);
		$sql->bindParam("totalPerViv", $totalPerViv, PDO::PARAM_STR);

		$sql->bindParam("updated_at", $updated_at, PDO::PARAM_STR);
		$sql->execute();

		$sql = $conn->prepare('UPDATE generalidades SET ruralG = :ruralG, urbanoG = :urbanoG, totalG = :totalG, updated_at = :updated_at WHERE generalidadterritorio_id = :idVSP');
		$sql->bindParam("idVSP", $idVSP, PDO::PARAM_STR);
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