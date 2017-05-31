<?php

	// Variables de entorno
	$db_connection = getenv('DB_CONNECTION');	
	$db_host = getenv('DB_HOST');
	$db_database = getenv('DB_DATABASE');
	$db_username = getenv('DB_USERNAME');
	$db_password = getenv('DB_PASSWORD');

	$idDepartamento = $_POST['idDepartamento'];
	$idMunicipio = $_POST['idMunicipio'];

	try{

		$conn = new PDO("$db_connection:host=$db_host; dbname=$db_database", "$db_username", "$db_password");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = $conn->prepare('SELECT * FROM departamentos,municipios WHERE departamentos.id = :idDepartamento AND municipios.id = :idMunicipio');
		$sql->execute(array('idDepartamento' => $idDepartamento, 'idMunicipio' => $idMunicipio));
		$resultados = $sql->fetchAll();
		$html = "";

		foreach ($resultados as $resultado) {
			$coddep = $resultado['codigoD'];
			$codmun = $resultado['codigoM'];
			
			$html .= "<input class='form-control' type='text' disabled='true' value='$coddep$codmun'>";
		};

		if($idMunicipio == "Seleccione un municipio"){
			$html .= "<input class='form-control' type='text' value=''>";
		}

		echo json_encode($html);

	}catch(PDOException $e){

		$e->getMessage();
		echo json_encode($e);

	}

?>