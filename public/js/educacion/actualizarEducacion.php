<?php

	// Variables de entorno
	$db_connection = getenv('DB_CONNECTION');	
	$db_host = getenv('DB_HOST');
	$db_database = getenv('DB_DATABASE');
	$db_username = getenv('DB_USERNAME');
	$db_password = getenv('DB_PASSWORD');

	$idE = $_POST['idE'];

	$rurJardin = $_POST['rurJardin'];
	$urbJardin = $_POST['urbJardin'];
	$rurTrans = $_POST['rurTrans'];
	$urbTrans = $_POST['urbTrans'];
	$rurPrim = $_POST['rurPrim'];
	$urbPrim = $_POST['urbPrim'];
	$rurSecu = $_POST['rurSecu'];
	$urbSecu = $_POST['urbSecu'];
	$rurMedia = $_POST['rurMedia'];
	$urbMedia = $_POST['urbMedia'];

	$jardin = $_POST['jardin'];
	$trans = $_POST['trans'];
	$prim = $_POST['prim'];
	$secu = $_POST['secu'];
	$media = $_POST['media'];

	$femenino = $_POST['femenino'];
	$masculino = $_POST['masculino'];

	$updated_at = $_POST['updated_at'];

	try{

		$conn = new PDO("$db_connection:host=$db_host; dbname=$db_database", "$db_username", "$db_password");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = $conn->prepare('UPDATE educacion SET rurJardin = :rurJardin, urbJardin = :urbJardin, rurTrans = :rurTrans, urbTrans = :urbTrans, rurPrim = :rurPrim, urbPrim = :urbPrim, rurSecu = :rurSecu, urbSecu = :urbSecu, rurMedia = :rurMedia, urbMedia = :urbMedia, updated_at = :updated_at WHERE id = :idE');
		$sql->bindParam("idE", $idE, PDO::PARAM_STR);

		$sql->bindParam("rurJardin", $rurJardin, PDO::PARAM_STR);
		$sql->bindParam("urbJardin", $urbJardin, PDO::PARAM_STR);
		$sql->bindParam("rurTrans", $rurTrans, PDO::PARAM_STR);
		$sql->bindParam("urbTrans", $urbTrans , PDO::PARAM_STR);
		$sql->bindParam("rurPrim", $rurPrim, PDO::PARAM_STR);
		$sql->bindParam("urbPrim", $urbPrim, PDO::PARAM_STR);
		$sql->bindParam("rurSecu", $rurSecu, PDO::PARAM_STR);
		$sql->bindParam("urbSecu", $urbSecu , PDO::PARAM_STR);
		$sql->bindParam("rurMedia", $rurMedia, PDO::PARAM_STR);
		$sql->bindParam("urbMedia", $urbMedia, PDO::PARAM_STR);

		$sql->bindParam("updated_at", $updated_at, PDO::PARAM_STR);
		$sql->execute();

		$sql = $conn->prepare('UPDATE matriculapornivel SET jardin = :jardin, trans = :trans, prim = :prim, secu = :secu, media = :media, updated_at = :updated_at WHERE educacion_id = :idE');
		$sql->bindParam("idE", $idE, PDO::PARAM_STR);

		$sql->bindParam("jardin", $jardin, PDO::PARAM_STR);
		$sql->bindParam("trans", $trans, PDO::PARAM_STR);
		$sql->bindParam("prim", $prim, PDO::PARAM_STR);
		$sql->bindParam("secu", $secu, PDO::PARAM_STR);
		$sql->bindParam("media", $media, PDO::PARAM_STR);

		$sql->bindParam("updated_at", $updated_at, PDO::PARAM_STR);
		$sql->execute();

		$sql = $conn->prepare('UPDATE matriculapormunicipiogenero SET femenino = :femenino, masculino = :masculino, updated_at = :updated_at WHERE educacion_id = :idE');
		$sql->bindParam("idE", $idE, PDO::PARAM_STR);

		$sql->bindParam("femenino", $femenino, PDO::PARAM_STR);
		$sql->bindParam("masculino", $masculino, PDO::PARAM_STR);

		$sql->bindParam("updated_at", $updated_at, PDO::PARAM_STR);
		$sql->execute();

		$html = "Se actualizaron los datos";

		echo json_encode($html);

	}catch(PDOException $e){

		$e->getMessage();
		echo json_encode($e);

	}

?>