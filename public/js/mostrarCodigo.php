<?php

	$iddep = $_POST['iddep'];
	$idmun = $_POST['idmun'];

	try{

		$conn = new PDO('mysql:host=localhost; dbname=maiip', "root", "12345");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = $conn->prepare('SELECT * FROM departamentos,municipios WHERE departamentos.id = :iddep and municipios.id = :idmun');
		$sql->execute(array('iddep' => $iddep, 'idmun' => $idmun));
		$resultados = $sql->fetchAll();
		$html = "";

		foreach ($resultados as $resultado) {
			$coddep = $resultado['codigoD'];
			$codmun = $resultado['codigoM'];
			
			$html = "<input class='form-control' type='text' value='$coddep$codmun'>";
		};

		echo json_encode($html);

	}catch(PDOException $e){

		$e->getMessage();
		echo json_encode($e);

	}

?>