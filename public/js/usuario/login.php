<?php

	$username = $_POST['username'];
	$password = $_POST['password'];

	try{

		$conn = new PDO('mysql:host=localhost; dbname=maiip', "root", "12345");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = $conn->prepare('SELECT * FROM usuarios WHERE (usuario = :username AND contrasenia = :password) OR (email = :username AND contrasenia = :password)');
		$sql->execute(array('username' => $username, 'password' => $password));
		$resultados = $sql->fetchAll();
		$html = "";
		$comprobar = "false";

		foreach ($resultados as $resultado) {		
			$comprobar = "true";
		};

		echo json_encode($comprobar);

	}catch(PDOException $e){

		$e->getMessage();
		echo json_encode($e);

	}

?>