<?php

	$anioE = $_POST['anioE'];
	$comprobar = $_POST['comprobar'];

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

	$municipio_id = $_POST['municipio_id'];
	$created_at = $_POST['created_at'];
	$updated_at = $_POST['updated_at'];

	try{

		$conn = new PDO('mysql:host=localhost; dbname=maiip', "root", "12345");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = $conn->prepare('SELECT * FROM educacion WHERE YEAR(anioE) = :comprobar');
		$sql->execute(array('comprobar' => $comprobar));
		$resultados = $sql->fetchAll();
		$ban = False;

		foreach ($resultados as $resultado) {
			$ban = True;
		};

		if($ban == False){

		$sql = $conn->prepare('INSERT INTO educacion VALUES (null, :anioE, :rurJardin, :urbJardin, :rurTrans, :urbTrans, :rurPrim, :urbPrim, :rurSecu, :urbSecu, :rurMedia, :urbMedia, :municipio_id, :created_at, :updated_at)');

		$sql->bindParam("anioE", $anioE, PDO::PARAM_STR);

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

		$sql->bindParam("municipio_id", $municipio_id, PDO::PARAM_STR);
		$sql->bindParam("created_at", $created_at, PDO::PARAM_STR);
		$sql->bindParam("updated_at", $updated_at, PDO::PARAM_STR);
		$sql->execute();

		$sql = $conn->prepare('SELECT * FROM educacion ORDER BY id DESC LIMIT 1');
		$sql->execute();
		$resultados = $sql->fetchAll();

		foreach ($resultados as $resultado) {
			$educacion_id = $resultado['id'];
		};

		$sql = $conn->prepare('INSERT INTO matriculapornivel VALUES (null, :jardin, :trans, :prim, :secu, :media, :educacion_id, :created_at, :updated_at)');

		$sql->bindParam("jardin", $jardin, PDO::PARAM_STR);
		$sql->bindParam("trans", $trans, PDO::PARAM_STR);
		$sql->bindParam("prim", $prim, PDO::PARAM_STR);
		$sql->bindParam("secu", $secu, PDO::PARAM_STR);
		$sql->bindParam("media", $media, PDO::PARAM_STR);

		$sql->bindParam("educacion_id", $educacion_id, PDO::PARAM_STR);

		$sql->bindParam("created_at", $created_at, PDO::PARAM_STR);
		$sql->bindParam("updated_at", $updated_at, PDO::PARAM_STR);

		$sql->execute();

		$sql = $conn->prepare('INSERT INTO matriculapormunicipiogenero VALUES (null, :femenino, :masculino, :educacion_id, :created_at, :updated_at)');

		$sql->bindParam("femenino", $femenino, PDO::PARAM_STR);
		$sql->bindParam("masculino", $masculino, PDO::PARAM_STR);

		$sql->bindParam("educacion_id", $educacion_id, PDO::PARAM_STR);

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