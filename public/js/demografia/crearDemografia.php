<?php

	$anioD = $_POST['anioD'];
	$pobEdadTrabajar = $_POST['pobEdadTrabajar'];
	$pobPotActiva = $_POST['pobPotActiva'];
	$pobPotInactiva = $_POST['pobPotInactiva'];
	$numPerMen = $_POST['numPerMen'];
	$numPerMay = $_POST['numPerMay'];
	$numPerInd = $_POST['numPerInd'];
	$numPerDep = $_POST['numPerDep'];
	$pobHom = $_POST['pobHom'];
	$pobMuj = $_POST['pobMuj'];
	$pobZonCab = $_POST['pobZonCab'];
	$pobZonRes = $_POST['pobZonRes'];
	$indRuralidad = $_POST['indRuralidad'];
	$pobTotal = $_POST['pobTotal'];
	$crecPob = $_POST['crecPob'];
	$created_at = $_POST['created_at'];
	$updated_at = $_POST['updated_at'];
	$municipio_id = $_POST['municipio_id'];

	try{

		$conn = new PDO('mysql:host=localhost; dbname=maiip', "root", "12345");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = $conn->prepare('SELECT YEAR(anioD) FROM demografias WHERE anioD = :anioD');
		$sql->execute(array('anioD' => $anioD));
		$resultados = $sql->fetchAll();
		$ban = False;

		foreach ($resultados as $resultado) {
			$anio = $resultado['YEAR(anioD)'];

			$ban = True;
		};

		if($ban == False){

		$sql = $conn->prepare('INSERT INTO demografias VALUES (null, :anioD, :pobEdadTrabajar, :pobPotActiva, :pobPotInactiva, :numPerMen, :numPerMay, :numPerInd, :numPerDep, :pobHom, :pobMuj, :pobZonCab, :pobZonRes, :indRuralidad, :pobTotal, :crecPob, :municipio_id, :created_at, :updated_at)');
		$sql->bindParam("anioD", $anioD, PDO::PARAM_STR);
		$sql->bindParam("pobEdadTrabajar", $pobEdadTrabajar, PDO::PARAM_STR);
		$sql->bindParam("pobPotActiva", $pobPotActiva, PDO::PARAM_STR);
		$sql->bindParam("pobPotInactiva", $pobPotInactiva, PDO::PARAM_STR);
		$sql->bindParam("numPerMen", $numPerMen, PDO::PARAM_STR);
		$sql->bindParam("numPerMay", $numPerMay, PDO::PARAM_STR);
		$sql->bindParam("numPerInd", $numPerInd, PDO::PARAM_STR);
		$sql->bindParam("numPerDep", $numPerDep, PDO::PARAM_STR);
		$sql->bindParam("pobHom", $pobHom, PDO::PARAM_STR);
		$sql->bindParam("pobMuj", $pobMuj, PDO::PARAM_STR);
		$sql->bindParam("pobZonCab", $pobZonCab, PDO::PARAM_STR);
		$sql->bindParam("pobZonRes", $pobZonRes, PDO::PARAM_STR);
		$sql->bindParam("indRuralidad", $indRuralidad, PDO::PARAM_STR);
		$sql->bindParam("pobTotal", $pobTotal, PDO::PARAM_STR);
		$sql->bindParam("crecPob", $crecPob, PDO::PARAM_STR);
		$sql->bindParam("municipio_id", $municipio_id, PDO::PARAM_STR);
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