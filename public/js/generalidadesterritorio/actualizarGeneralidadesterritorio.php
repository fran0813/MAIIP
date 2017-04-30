<?php

	// $iddep = $_POST['iddep'];

	try{

		$conn = new PDO('mysql:host=localhost; dbname=maiip', "root", "12345");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = $conn->prepare('UPDATE generalidadesterritorios SET anioGT = :anioGT, temperatura = :temperatura, alturaNivMar = :alturaNivMar, municipio_id = :municipio_id, created_at = :created_at, updated_at =:updated_at WHERE id = :idGeneralidadesterritorio');
		$sql->bindParam("anioGT", $anioGT, PDO::PARAM_STR);
		$sql->bindParam("temperatura", $temperatura, PDO::PARAM_STR);
		$sql->bindParam("alturaNivMar", $alturaNivMar, PDO::PARAM_STR);
		$sql->bindParam("municipio_id", $municipio_id, PDO::PARAM_STR);
		$sql->bindParam("created_at", $created_at, PDO::PARAM_STR);
		$sql->bindParam("updated_at", $updated_at, PDO::PARAM_STR);
		$sql->execute();

		$sql = $conn->prepare('UPDATE generalidades SET ruralG = :ruralG, urbanoG = :urbanoG, totalG = :totalG, generalidadterritorio_id = :generalidadterritorio_id, created_at = :created_at, updated_at = :updated_at WHERE generalidadterritorio_id = :idGeneralidadesterritorio');
		$sql->bindParam("ruralG", $ruralG, PDO::PARAM_STR);
		$sql->bindParam("urbanoG", $urbanoG, PDO::PARAM_STR);
		$sql->bindParam("totalG", $totalG, PDO::PARAM_STR);
		$sql->bindParam("generalidadterritorio_id", $generalidadterritorio_id, PDO::PARAM_STR);
		$sql->bindParam("created_at", $created_at, PDO::PARAM_STR);
		$sql->bindParam("updated_at", $updated_at, PDO::PARAM_STR);
		$sql->execute();

		$sql = $conn->prepare('UPDATE territorios SET constRural = :constRural, constUrbano = :constUrbano, constTotal = :constTotal, terrRural = :terrRural, terrUrbano = :terrUrbano, terrTotal = :terrTotal, generalidadterritorio_id = :generalidadterritorio_id, created_at = :created_at, updated_at = :updated_at WHERE generalidadterritorio_id = :idGeneralidadesterritorio');
		$sql->bindParam("constRural", $constRural, PDO::PARAM_STR);
		$sql->bindParam("constUrbano", $constUrbano, PDO::PARAM_STR);
		$sql->bindParam("constTotal", $constTotal, PDO::PARAM_STR);
		$sql->bindParam("terrRural", $terrRural, PDO::PARAM_STR);
		$sql->bindParam("terrUrbano", $terrUrbano, PDO::PARAM_STR);
		$sql->bindParam("terrTotal", $terrTotal, PDO::PARAM_STR);
		$sql->bindParam("generalidadterritorio_id", $generalidadterritorio_id, PDO::PARAM_STR);
		$sql->bindParam("created_at", $created_at, PDO::PARAM_STR);
		$sql->bindParam("updated_at", $updated_at, PDO::PARAM_STR);
		$sql->execute();

		$sql = $conn->prepare('UPDATE predios SET ruralP = :ruralP, urbanoP = :urbanoP, totalP = :totalP, generalidadterritorio_id = :generalidadterritorio_id, created_at = :created_at, updated_at = :updated_at WHERE generalidadterritorio_id = :idGeneralidadesterritorio');
		$sql->bindParam("ruralP", $ruralP, PDO::PARAM_STR);
		$sql->bindParam("urbanoP", $urbanoP, PDO::PARAM_STR);
		$sql->bindParam("totalP", $totalP, PDO::PARAM_STR);
		$sql->bindParam("generalidadterritorio_id", $generalidadterritorio_id, PDO::PARAM_STR);
		$sql->bindParam("created_at", $created_at, PDO::PARAM_STR);
		$sql->bindParam("updated_at", $updated_at, PDO::PARAM_STR);
		$sql->execute();

		// $html = "";
		// echo json_encode($html);

	}catch(PDOException $e){

		$e->getMessage();
		echo json_encode($e);

	}

?>