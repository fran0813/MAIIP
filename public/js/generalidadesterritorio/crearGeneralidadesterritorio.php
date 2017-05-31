<?php

	// Variables de entorno
	$db_connection = getenv('DB_CONNECTION');	
	$db_host = getenv('DB_HOST');
	$db_database = getenv('DB_DATABASE');
	$db_username = getenv('DB_USERNAME');
	$db_password = getenv('DB_PASSWORD');

	$anioGT = $_POST['anioGT'];
	$comprobar = $_POST['comprobar'];
	$temperatura = $_POST['temperatura'];
	$alturaNivMar = $_POST['alturaNivMar'];
	$municipio_id = $_POST['municipio_id'];

	$ruralG = $_POST['ruralG'];
	$urbanoG = $_POST['urbanoG'];
	$totalG = $_POST['totalG'];

	$constRural = $_POST['constRural'];
	$constUrbano = $_POST['constUrbano'];
	$constTotal = $_POST['constTotal'];
	$terrRural = $_POST['terrRural'];
	$terrUrbano = $_POST['terrUrbano'];
	$terrTotal = $_POST['terrTotal'];

	$ruralP = $_POST['ruralP'];
	$urbanoP = $_POST['urbanoP'];
	$totalP = $_POST['totalP'];

	$created_at = $_POST['created_at'];
	$updated_at = $_POST['updated_at'];


	try{

		$conn = new PDO("$db_connection:host=$db_host; dbname=$db_database", "$db_username", "$db_password");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = $conn->prepare('SELECT * FROM generalidadesterritorios WHERE YEAR(anioGT) = :comprobar');
		$sql->execute(array('comprobar' => $comprobar));
		$resultados = $sql->fetchAll();
		$ban = False;

		foreach ($resultados as $resultado) {
			$ban = True;
		};

		if($ban == False){

		$sql = $conn->prepare('INSERT INTO generalidadesterritorios VALUES (null, :anioGT, :temperatura, :alturaNivMar, :municipio_id, :created_at, :updated_at)');
		$sql->bindParam("anioGT", $anioGT, PDO::PARAM_STR);
		$sql->bindParam("temperatura", $temperatura, PDO::PARAM_STR);
		$sql->bindParam("alturaNivMar", $alturaNivMar, PDO::PARAM_STR);
		$sql->bindParam("municipio_id", $municipio_id, PDO::PARAM_STR);
		$sql->bindParam("created_at", $created_at, PDO::PARAM_STR);
		$sql->bindParam("updated_at", $updated_at, PDO::PARAM_STR);
		$sql->execute();

		$sql = $conn->prepare('SELECT * FROM generalidadesterritorios ORDER BY id DESC LIMIT 1');
		$sql->execute();
		$resultados = $sql->fetchAll();

		foreach ($resultados as $resultado) {
			$generalidadterritorio_id = $resultado['id'];
		};

		$sql = $conn->prepare('INSERT INTO generalidades VALUES (null, :ruralG, :urbanoG, :totalG, :generalidadterritorio_id, :created_at, :updated_at)');
		$sql->bindParam("ruralG", $ruralG, PDO::PARAM_STR);
		$sql->bindParam("urbanoG", $urbanoG, PDO::PARAM_STR);
		$sql->bindParam("totalG", $totalG, PDO::PARAM_STR);
		$sql->bindParam("generalidadterritorio_id", $generalidadterritorio_id, PDO::PARAM_STR);
		$sql->bindParam("created_at", $created_at, PDO::PARAM_STR);
		$sql->bindParam("updated_at", $updated_at, PDO::PARAM_STR);
		$sql->execute();

		$sql = $conn->prepare('INSERT INTO territorios VALUES (null, :constRural, :constUrbano, :constTotal, :terrRural, :terrUrbano, :terrTotal, :generalidadterritorio_id, :created_at, :updated_at)');
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

		$sql = $conn->prepare('INSERT INTO predios VALUES (null, :ruralP, :urbanoP, :totalP, :generalidadterritorio_id, :created_at, :updated_at)');
		$sql->bindParam("ruralP", $ruralP, PDO::PARAM_STR);
		$sql->bindParam("urbanoP", $urbanoP, PDO::PARAM_STR);
		$sql->bindParam("totalP", $totalP, PDO::PARAM_STR);
		$sql->bindParam("generalidadterritorio_id", $generalidadterritorio_id, PDO::PARAM_STR);
		$sql->bindParam("created_at", $created_at, PDO::PARAM_STR);
		$sql->bindParam("updated_at", $updated_at, PDO::PARAM_STR);
		$sql->execute();

		$html = "Se registrarón los datos correctamente";

		}else{

		$html = "Ya se encuentra registrado ese año";

		}

		echo json_encode($html);

	}catch(PDOException $e){

		$e->getMessage();
		echo json_encode($e);

	}

?>