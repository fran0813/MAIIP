<?php

	try{

		$conn = new PDO('mysql:host=localhost; dbname=maiip', "root", "12345");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = $conn->prepare('SELECT * FROM departamentos ORDER BY nombre');
		$sql->execute();
		$resultados = $sql->fetchAll();
		$html = "";

		$html .= "<option>Seleccione un departamento</option>";

		foreach ($resultados as $resultado) {
			$id = $resultado['id'];
			$nombre = $resultado['nombre'];

			$html .= "<option value='$id'>$nombre</option>";
		};

		echo json_encode($html);

	}catch(PDOException $e){

		$e->getMessage();
		echo json_encode($e);

	}

?>