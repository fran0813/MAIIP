<?php

	$iddep = $_POST['iddep'];

	try{

		$conn = new PDO('mysql:host=localhost; dbname=maiip', "root", "12345");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = $conn->prepare('SELECT * FROM municipios WHERE departamento_id = :iddep ORDER BY municipios.nombre');
		$sql->execute(array('iddep' => $iddep));
		$resultados = $sql->fetchAll();
		$html = "";

		$html .= "<option>Seleccione un municipio</option>";
		foreach ($resultados as $resultado) {
			$id = $resultado['id'];
			$nombre = $resultado['nombre'];
			$html .= "<option value='$id'>$nombre</option>";
		};

		echo json_encode($html);

	}catch(PDOException $e){

		$a = "ERROR:".$e->getMessage();
		echo json_encode($a);

	}

?>