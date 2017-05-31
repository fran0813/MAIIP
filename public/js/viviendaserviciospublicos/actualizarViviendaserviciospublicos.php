<?php

	// Variables de entorno
	$db_connection = getenv('DB_CONNECTION');	
	$db_host = getenv('DB_HOST');
	$db_database = getenv('DB_DATABASE');
	$db_username = getenv('DB_USERNAME');
	$db_password = getenv('DB_PASSWORD');

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

		$conn = new PDO("$db_connection:host=$db_host; dbname=$db_database", "$db_username", "$db_password");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = $conn->prepare('UPDATE viviendasserviciospublicos SET cabViv = :cabViv, cabHog = :cabHog, cabHogViv = :cabHogViv, cabPerHog = :cabPerHog, cabPerViv = :cabPerViv, rurViv = :rurViv, rurHog = :rurHog, rurHogViv = :rurHogViv, rurPerHog = :rurPerHog, rurPerViv = :rurPerViv, totalViv = :totalViv, totalHog = :totalHog, totalHogViv= :totalHogViv, totalPerHog = :totalPerHog, totalPerViv = :totalPerViv, updated_at =:updated_at WHERE id = :idVSP');
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

		$sql = $conn->prepare('UPDATE coberturaalcantarillado SET cabCA = :cabCA, centPobCA = :centPobCA, rurDispCA = :rurDispCA, updated_at = :updated_at WHERE viviendaserviciopublico_id = :idVSP');
		$sql->bindParam("idVSP", $idVSP, PDO::PARAM_STR);
		$sql->bindParam("cabCA", $cabCA, PDO::PARAM_STR);
		$sql->bindParam("centPobCA", $centPobCA, PDO::PARAM_STR);
		$sql->bindParam("rurDispCA", $rurDispCA, PDO::PARAM_STR);
		$sql->bindParam("updated_at", $updated_at, PDO::PARAM_STR);
		$sql->execute();

		$sql = $conn->prepare('UPDATE coberturaaseo SET cabCAs = :cabCAs, centPobCAs = :centPobCAs, rurDispCAs = :rurDispCAs, updated_at = :updated_at WHERE viviendaserviciopublico_id = :idVSP');
		$sql->bindParam("idVSP", $idVSP, PDO::PARAM_STR);
		$sql->bindParam("cabCAs", $cabCAs, PDO::PARAM_STR);
		$sql->bindParam("centPobCAs", $centPobCAs, PDO::PARAM_STR);
		$sql->bindParam("rurDispCAs", $rurDispCAs, PDO::PARAM_STR);
		$sql->bindParam("updated_at", $updated_at, PDO::PARAM_STR);
		$sql->execute();

		$sql = $conn->prepare('UPDATE coberturagas SET cabCG = :cabCG, centPobCG = :centPobCG, rurDispCG = :rurDispCG, updated_at = :updated_at WHERE viviendaserviciopublico_id = :idVSP');
		$sql->bindParam("idVSP", $idVSP, PDO::PARAM_STR);
		$sql->bindParam("cabCG", $cabCG, PDO::PARAM_STR);
		$sql->bindParam("centPobCG", $centPobCG, PDO::PARAM_STR);
		$sql->bindParam("rurDispCG", $rurDispCG, PDO::PARAM_STR);
		$sql->bindParam("updated_at", $updated_at, PDO::PARAM_STR);
		$sql->execute();

		$sql = $conn->prepare('UPDATE coberturatelefono SET cabCT = :cabCT, centPobCT = :centPobCT, rurDispCT = :rurDispCT, updated_at = :updated_at WHERE viviendaserviciopublico_id = :idVSP');
		$sql->bindParam("idVSP", $idVSP, PDO::PARAM_STR);
		$sql->bindParam("cabCT", $cabCT, PDO::PARAM_STR);
		$sql->bindParam("centPobCT", $centPobCT, PDO::PARAM_STR);
		$sql->bindParam("rurDispCT", $rurDispCT, PDO::PARAM_STR);
		$sql->bindParam("updated_at", $updated_at, PDO::PARAM_STR);
		$sql->execute();

		$html = "Se actualizaron los datos";

		echo json_encode($html);

	}catch(PDOException $e){

		$e->getMessage();
		echo json_encode($e);

	}

?>