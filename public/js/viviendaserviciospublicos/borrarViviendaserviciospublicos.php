<?php

	$idVSP = $_POST['idVSP'];

	try{

		$conn = new PDO('mysql:host=localhost; dbname=maiip', "root", "12345");
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