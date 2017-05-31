<?php

	// Variables de entorno
	$db_connection = getenv('DB_CONNECTION');	
	$db_host = getenv('DB_HOST');
	$db_database = getenv('DB_DATABASE');
	$db_username = getenv('DB_USERNAME');
	$db_password = getenv('DB_PASSWORD');

	$anioD = $_POST['anioD'];
	$pobEdadTrabajarActual = $_POST['pobEdadTrabajar'];

	try{

		$conn = new PDO("$db_connection:host=$db_host; dbname=$db_database", "$db_username", "$db_password");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = $conn->prepare('SELECT pobEdadTrabajar FROM demografias WHERE YEAR(anioD) < :anioD ORDER BY anioD DESC LIMIT 1');
		$sql->execute(array('anioD' => $anioD));
		$resultados = $sql->fetchAll();
		$html = "";
		$ban = False;

		foreach ($resultados as $resultado) {
			$pobEdadTrabajarAnterior = $resultado['pobEdadTrabajar'];
			$ban = True;					
		};

		if($ban == True){

		$pobEdadTrabajarTotal = number_format((float)(log(($pobEdadTrabajarActual / $pobEdadTrabajarAnterior))*100), 2, '.', '')."%";

		$html = "<label for='crecPob'>Crecimiento poblacional</label>     
                <input id='crecPob' type='text' placeholder='Crecimiento poblacional' value='$pobEdadTrabajarTotal' disabled=''>";

		}else{

		$html = "<label for='crecPob'>Crecimiento poblacional</label>     
                <input id='crecPob' type='text' placeholder='Crecimiento poblacional' value='N/A' disabled=''>";

		}

		echo json_encode($html);

	}catch(PDOException $e){

		$e->getMessage();
		echo json_encode($e);

	}

?>