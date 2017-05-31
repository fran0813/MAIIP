<?php

	// Variables de entorno
	$db_connection = getenv('DB_CONNECTION');	
	$db_host = getenv('DB_HOST');
	$db_database = getenv('DB_DATABASE');
	$db_username = getenv('DB_USERNAME');
	$db_password = getenv('DB_PASSWORD');

	$idVSP = $_POST['idVSP'];

	try{

		$conn = new PDO("$db_connection:host=$db_host; dbname=$db_database", "$db_username", "$db_password");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = $conn->prepare('DELETE FROM coberturaalcantarillado WHERE viviendaserviciopublico_id = :idVSP');
		$sql->bindParam("idVSP", $idVSP, PDO::PARAM_STR);
		$sql->execute();

		$sql = $conn->prepare('DELETE FROM coberturaaseo WHERE viviendaserviciopublico_id = :idVSP');
		$sql->bindParam("idVSP", $idVSP, PDO::PARAM_STR);
		$sql->execute();

		$sql = $conn->prepare('DELETE FROM coberturagas WHERE viviendaserviciopublico_id = :idVSP');
		$sql->bindParam("idVSP", $idVSP, PDO::PARAM_STR);
		$sql->execute();

		$sql = $conn->prepare('DELETE FROM coberturatelefono WHERE viviendaserviciopublico_id = :idVSP');
		$sql->bindParam("idVSP", $idVSP, PDO::PARAM_STR);
		$sql->execute();

		$sql = $conn->prepare('DELETE FROM viviendasserviciospublicos WHERE id = :idVSP');
		$sql->bindParam("idVSP", $idVSP, PDO::PARAM_STR);
		$sql->execute();

		echo json_encode("borrado");

	}catch(PDOException $e){

		$e->getMessage();
		echo json_encode($e);

	}

?>