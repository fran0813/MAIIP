<?php

	$idGT = $_POST['idGT'];

	try{

		$conn = new PDO('mysql:host=localhost; dbname=maiip', "root", "12345");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = $conn->prepare('DELETE FROM generalidades WHERE generalidadterritorio_id = :idGT');
		$sql->bindParam("idGT", $idGT, PDO::PARAM_STR);
		$sql->execute();

		$sql = $conn->prepare('DELETE FROM territorios WHERE generalidadterritorio_id = :idGT');
		$sql->bindParam("idGT", $idGT, PDO::PARAM_STR);
		$sql->execute();

		$sql = $conn->prepare('DELETE FROM predios WHERE generalidadterritorio_id = :idGT');
		$sql->bindParam("idGT", $idGT, PDO::PARAM_STR);
		$sql->execute();

		$sql = $conn->prepare('DELETE FROM generalidadesterritorios WHERE id = :idGT');
		$sql->bindParam("idGT", $idGT, PDO::PARAM_STR);
		$sql->execute();

		echo json_encode("borrado");

	}catch(PDOException $e){

		$e->getMessage();
		echo json_encode($e);

	}

?>