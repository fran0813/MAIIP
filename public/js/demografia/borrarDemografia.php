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

		$sql = $conn->prepare('DELETE FROM demografias WHERE id = :idD');
		$sql->bindParam("idD", $idD, PDO::PARAM_STR);
		$sql->execute();

		echo json_encode("borrado");

	}catch(PDOException $e){

		$e->getMessage();
		echo json_encode($e);

	}

?>