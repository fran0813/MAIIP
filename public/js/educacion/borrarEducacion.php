<?php

	$idE = $_POST['idE'];

	try{

		$conn = new PDO('mysql:host=localhost; dbname=maiip', "root", "12345");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = $conn->prepare('DELETE FROM matriculapornivel WHERE educacion_id = :idE');
		$sql->bindParam("idE", $idE, PDO::PARAM_STR);
		$sql->execute();

		$sql = $conn->prepare('DELETE FROM matriculapormunicipiogenero WHERE educacion_id = :idE');
		$sql->bindParam("idE", $idE, PDO::PARAM_STR);
		$sql->execute();

		$sql = $conn->prepare('DELETE FROM educacion WHERE municipio_id = :idE');
		$sql->bindParam("idE", $idE, PDO::PARAM_STR);
		$sql->execute();

		echo json_encode("borrado");

	}catch(PDOException $e){

		$e->getMessage();
		echo json_encode($e);

	}

?>