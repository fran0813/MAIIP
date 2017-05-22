<?php

	$idS = $_POST['idS'];

	try{

		$conn = new PDO('mysql:host=localhost; dbname=maiip', "root", "12345");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = $conn->prepare('DELETE FROM vacunaciones WHERE salud_id = :idS');
		$sql->bindParam("idS", $idS, PDO::PARAM_STR);
		$sql->execute();

		$sql = $conn->prepare('DELETE FROM discapacidades WHERE salud_id = :idS');
		$sql->bindParam("idS", $idS, PDO::PARAM_STR);
		$sql->execute();

		$sql = $conn->prepare('DELETE FROM salud WHERE municipio_id = :idS');
		$sql->bindParam("idS", $idS, PDO::PARAM_STR);
		$sql->execute();

		echo json_encode("borrado");

	}catch(PDOException $e){

		$e->getMessage();
		echo json_encode($e);

	}

?>