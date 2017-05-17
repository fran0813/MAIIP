<?php

	$anioVSP = $_POST['anioVSP'];
	$comprobar = $_POST['comprobar'];

	$cabViv = $_POST['cabViv'];
	$cabHog = $_POST['cabHog'];
	$cabHogViv = $_POST['cabHogViv'];
	$cabPerHog = $_POST['cabPerHog'];
	$cabPerViv = $_POST['cabPerViv'];

	$rurViv = $_POST['rurViv'];
	$rurHog = $_POST['rurHog'];
	$rurHogViv = $_POST['rurHogViv'];
	$rurPerHog = $_POST['rurPerHog'];
	$rurPerViv = $_POST['rurPerViv'];

	$totalViv = $_POST['totalViv'];
	$totalHog = $_POST['totalHog'];
	$totalHogViv = $_POST['totalHogViv'];
	$totalPerHog = $_POST['totalPerHog'];
	$totalPerViv = $_POST['totalPerViv'];

	$cabCA = $_POST['cabCA'];
	$centPobCA = $_POST['centPobCA'];
	$rurDispCA = $_POST['rurDispCA'];

	$cabCAs = $_POST['cabCAs'];
	$centPobCAs = $_POST['centPobCAs'];
	$rurDispCAs = $_POST['rurDispCAs'];

	$cabCG = $_POST['cabCG'];
	$centPobCG = $_POST['centPobCG'];
	$rurDispCG = $_POST['rurDispCG'];

	$cabCT = $_POST['cabCT'];
	$centPobCT = $_POST['centPobCT'];
	$rurDispCT = $_POST['rurDispCT'];

	$municipio_id = $_POST['municipio_id'];
	$created_at = $_POST['created_at'];
	$updated_at = $_POST['updated_at'];


	try{

		$conn = new PDO('mysql:host=localhost; dbname=maiip', "root", "12345");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = $conn->prepare('SELECT * FROM viviendasserviciospublicos WHERE YEAR(anioVSP) = :comprobar');
		$sql->execute(array('comprobar' => $comprobar));
		$resultados = $sql->fetchAll();
		$ban = False;

		foreach ($resultados as $resultado) {
			$ban = True;
		};

		if($ban == False){

		$sql = $conn->prepare('INSERT INTO viviendasserviciospublicos VALUES (null, :anioVSP, :cabViv, :cabHog, :cabHogViv, :cabPerHog, :cabPerViv, :rurViv, :rurHog, :rurHogViv, :rurPerHog, :rurPerViv, :totalViv, :totalHog, :totalHogViv, :totalPerHog, :totalPerViv, :municipio_id, :created_at, :updated_at)');

		$sql->bindParam("anioVSP", $anioVSP, PDO::PARAM_STR);

		$sql->bindParam("cabViv", $cabViv, PDO::PARAM_STR);
		$sql->bindParam("cabHog", $cabHog, PDO::PARAM_STR);
		$sql->bindParam("cabHogViv", $cabHogViv, PDO::PARAM_STR);
		$sql->bindParam("cabPerHog", $cabPerHog, PDO::PARAM_STR);
		$sql->bindParam("cabPerViv", $cabPerViv, PDO::PARAM_STR);

		$sql->bindParam("rurViv", $rurViv, PDO::PARAM_STR);
		$sql->bindParam("rurHog", $rurHog, PDO::PARAM_STR);
		$sql->bindParam("rurHogViv", $rurHogViv, PDO::PARAM_STR);
		$sql->bindParam("rurPerHog", $rurPerHog, PDO::PARAM_STR);
		$sql->bindParam("rurPerViv", $rurPerViv, PDO::PARAM_STR);

		$sql->bindParam("totalViv", $totalViv, PDO::PARAM_STR);
		$sql->bindParam("totalHog", $totalHog, PDO::PARAM_STR);
		$sql->bindParam("totalHogViv", $totalHogViv, PDO::PARAM_STR);
		$sql->bindParam("totalPerHog", $totalPerHog, PDO::PARAM_STR);
		$sql->bindParam("totalPerViv", $totalPerViv, PDO::PARAM_STR);

		$sql->bindParam("municipio_id", $municipio_id, PDO::PARAM_STR);
		$sql->bindParam("created_at", $created_at, PDO::PARAM_STR);
		$sql->bindParam("updated_at", $updated_at, PDO::PARAM_STR);
		$sql->execute();

		$sql = $conn->prepare('SELECT * FROM viviendasserviciospublicos ORDER BY id DESC LIMIT 1');
		$sql->execute();
		$resultados = $sql->fetchAll();

		foreach ($resultados as $resultado) {
			$viviendasserviciospublicos_id = $resultado['id'];
		};

		$sql = $conn->prepare('INSERT INTO coberturaalcantarillado VALUES (null, :cabCA, :centPobCA, :rurDispCA, :viviendasserviciospublicos_id, :created_at, :updated_at)');
		$sql->bindParam("cabCA", $cabCA, PDO::PARAM_STR);
		$sql->bindParam("centPobCA", $centPobCA, PDO::PARAM_STR);
		$sql->bindParam("rurDispCA", $rurDispCA, PDO::PARAM_STR);
		$sql->bindParam("viviendasserviciospublicos_id", $viviendasserviciospublicos_id, PDO::PARAM_STR);
		$sql->bindParam("created_at", $created_at, PDO::PARAM_STR);
		$sql->bindParam("updated_at", $updated_at, PDO::PARAM_STR);
		$sql->execute();

		$sql = $conn->prepare('INSERT INTO coberturaaseo VALUES (null, :cabCAs, :centPobCAs, :rurDispCAs, :viviendasserviciospublicos_id, :created_at, :updated_at)');
		$sql->bindParam("cabCAs", $cabCAs, PDO::PARAM_STR);
		$sql->bindParam("centPobCAs", $centPobCAs, PDO::PARAM_STR);
		$sql->bindParam("rurDispCAs", $rurDispCAs, PDO::PARAM_STR);
		$sql->bindParam("viviendasserviciospublicos_id", $viviendasserviciospublicos_id, PDO::PARAM_STR);
		$sql->bindParam("created_at", $created_at, PDO::PARAM_STR);
		$sql->bindParam("updated_at", $updated_at, PDO::PARAM_STR);
		$sql->execute();


		$sql = $conn->prepare('INSERT INTO coberturagas VALUES (null, :cabCG, :centPobCG, :rurDispCG, :viviendasserviciospublicos_id, :created_at, :updated_at)');
		$sql->bindParam("cabCG", $cabCG, PDO::PARAM_STR);
		$sql->bindParam("centPobCG", $centPobCG, PDO::PARAM_STR);
		$sql->bindParam("rurDispCG", $rurDispCG, PDO::PARAM_STR);
		$sql->bindParam("viviendasserviciospublicos_id", $viviendasserviciospublicos_id, PDO::PARAM_STR);
		$sql->bindParam("created_at", $created_at, PDO::PARAM_STR);
		$sql->bindParam("updated_at", $updated_at, PDO::PARAM_STR);
		$sql->execute();

		$sql = $conn->prepare('INSERT INTO coberturatelefono VALUES (null, :cabCT, :centPobCT, :rurDispCT, :viviendasserviciospublicos_id, :created_at, :updated_at)');
		$sql->bindParam("cabCT", $cabCT, PDO::PARAM_STR);
		$sql->bindParam("centPobCT", $centPobCA, PDO::PARAM_STR);
		$sql->bindParam("rurDispCT", $rurDispCA, PDO::PARAM_STR);
		$sql->bindParam("viviendasserviciospublicos_id", $viviendasserviciospublicos_id, PDO::PARAM_STR);
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