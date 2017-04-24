<?php

	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	try{

		$conn = new PDO('mysql:host=localhost; dbname=maiip', "root", "12345");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = $conn->prepare('INSERT INTO users VALUES (null, :name, :email, :password, null, null, null)');
		$sql->bindParam("name", $name, PDO::PARAM_STR);
        $sql->bindParam("email", $email, PDO::PARAM_STR);
        $sql->bindParam("password", $password, PDO::PARAM_STR);
		$sql->execute();

	}catch(PDOException $e){

		$a = "ERROR:".$e->getMessage();
		echo json_encode($a);

	}

?>