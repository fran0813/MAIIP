<?php

	$anioS = $_POST['anioS'];
	$comprobar = $_POST['comprobar'];

	$tasVacBCG = $_POST['tasVacBCG'];
	$tasVacDPT = $_POST['tasVacDPT'];
	$tasVacHepatitisB = $_POST['tasVacHepatitisB'];
	$tasVacHIB = $_POST['tasVacHIB'];
	$tasVacPolio = $_POST['tasVacPolio'];
	$tasVacTripleViral = $_POST['tasVacTripleViral'];

	$difBaMov = $_POST['difBaMov'];
	$difEntApr = $_POST['difEntApr'];
	$difMovCam = $_POST['difMovCam'];
	$difSalirCalle = $_POST['difSalirCalle'];
	$totalDis = $_POST['totalDis'];

	$municipio_id = $_POST['municipio_id'];
	$created_at = $_POST['created_at'];
	$updated_at = $_POST['updated_at'];

	try{

		$conn = new PDO('mysql:host=localhost; dbname=maiip', "root", "12345");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = $conn->prepare('SELECT * FROM salud WHERE YEAR(anioS) = :comprobar');
		$sql->execute(array('comprobar' => $comprobar));
		$resultados = $sql->fetchAll();
		$ban = False;

		foreach ($resultados as $resultado) {
			$ban = True;
		};

		if($ban == False){

		$sql = $conn->prepare('INSERT INTO salud VALUES (null, :anioS, :municipio_id, :created_at, :updated_at)');

		$sql->bindParam("anioS", $anioS, PDO::PARAM_STR);

		$sql->bindParam("municipio_id", $municipio_id, PDO::PARAM_STR);
		$sql->bindParam("created_at", $created_at, PDO::PARAM_STR);
		$sql->bindParam("updated_at", $updated_at, PDO::PARAM_STR);
		$sql->execute();

		$sql = $conn->prepare('SELECT * FROM salud ORDER BY id DESC LIMIT 1');
		$sql->execute();
		$resultados = $sql->fetchAll();

		foreach ($resultados as $resultado) {
			$salud_id = $resultado['id'];
		};

		$sql = $conn->prepare('INSERT INTO vacunaciones VALUES (null, :tasVacBCG, :tasVacDPT, :tasVacHepatitisB, :tasVacHIB, :tasVacPolio, :tasVacTripleViral, :salud_id, :created_at, :updated_at)');
		$sql->bindParam("tasVacBCG", $tasVacBCG, PDO::PARAM_STR);
		$sql->bindParam("tasVacDPT", $tasVacDPT, PDO::PARAM_STR);
		$sql->bindParam("tasVacHepatitisB", $tasVacHepatitisB, PDO::PARAM_STR);
		$sql->bindParam("tasVacHIB", $tasVacHIB, PDO::PARAM_STR);
		$sql->bindParam("tasVacPolio", $tasVacPolio, PDO::PARAM_STR);
		$sql->bindParam("tasVacTripleViral", $tasVacTripleViral, PDO::PARAM_STR);
		$sql->bindParam("salud_id", $salud_id, PDO::PARAM_STR);
		$sql->bindParam("created_at", $created_at, PDO::PARAM_STR);
		$sql->bindParam("updated_at", $updated_at, PDO::PARAM_STR);
		$sql->execute();

		$sql = $conn->prepare('INSERT INTO discapacidades VALUES (null, :difBaMov, :difEntApr, :difMovCam, :difSalirCalle, :totalDis, :salud_id, :created_at, :updated_at)');
		$sql->bindParam("difBaMov", $difBaMov, PDO::PARAM_STR);
		$sql->bindParam("difEntApr", $difEntApr, PDO::PARAM_STR);
		$sql->bindParam("difMovCam", $difMovCam, PDO::PARAM_STR);
		$sql->bindParam("difSalirCalle", $difSalirCalle, PDO::PARAM_STR);
		$sql->bindParam("totalDis", $totalDis, PDO::PARAM_STR);
		$sql->bindParam("salud_id", $salud_id, PDO::PARAM_STR);
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