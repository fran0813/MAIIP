<?php

	// $iddep = $_POST['iddep'];

	try{

		$conn = new PDO('mysql:host=localhost; dbname=maiip', "root", "12345");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = $conn->prepare('DELETE FROM generalidadesterritorios WHERE id = :idGeneralidadesterritorio');
		$sql->bindParam("idGeneralidadesterritorio", $idGeneralidadesterritorio, PDO::PARAM_STR);
		$sql->execute();

		$sql = $conn->prepare('DELETE FROM generalidades WHERE generalidadterritorio_id = :idGeneralidadesterritorio');
		$sql->bindParam("idGeneralidadesterritorio", $idGeneralidadesterritorio, PDO::PARAM_STR);
		$sql->execute();

		$sql = $conn->prepare('DELETE FROM territorios WHERE generalidadterritorio_id = :idGeneralidadesterritorio');
		$sql->bindParam("idGeneralidadesterritorio", $idGeneralidadesterritorio, PDO::PARAM_STR);
		$sql->execute();

		$sql = $conn->prepare('DELETE FROM predios WHERE generalidadterritorio_id = :idGeneralidadesterritorio');
		$sql->bindParam("idGeneralidadesterritorio", $idGeneralidadesterritorio, PDO::PARAM_STR);
		$sql->execute();

		// $html = "";
		// echo json_encode($html);

	}catch(PDOException $e){

		$e->getMessage();
		echo json_encode($e);

	}

?>