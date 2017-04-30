<?php

	$idDepartamento = $_POST['idDepartamento'];
	$idMunicipio = $_POST['idMunicipio'];

	try{

		$conn = new PDO('mysql:host=localhost; dbname=maiip', "root", "12345");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = $conn->prepare('SELECT * FROM departamentos,municipios WHERE departamentos.id = :idDepartamento AND municipios.id = :idMunicipio');
		$sql->execute(array('idDepartamento' => $idDepartamento, 'idMunicipio' => $idMunicipio));
		$resultados = $sql->fetchAll();
		$html = "";

		foreach ($resultados as $resultado) {
			$coddep = $resultado['codigoD'];
			$codmun = $resultado['codigoM'];
			
			$html = "<input class='form-control' type='text' disabled='true' value='$coddep$codmun'>";
		};

		// if($idMunicipio == "Seleccione un municipio"){
		// 	$html = "<input class='form-control' type='text' value=''>";
		// }

		echo json_encode($html);

	}catch(PDOException $e){

		$e->getMessage();
		echo json_encode($e);

	}

?>