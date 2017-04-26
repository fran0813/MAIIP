<?php

	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	try{

		$conn = new PDO('mysql:host=localhost; dbname=maiip', "root", "12345");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = $conn->prepare('SELECT * FROM users');
		$sql->execute(array('name' => $name, 'email' => $email, 'password' => $password));
		$resultados = $sql->fetchAll();
		$html = "";
		$ban = False;
		
		foreach ($resultados as $resultado) {
			$comprobar = $resultado['name'];

			if($comprobar == $name) {
				$ban = True;
				break;
			}
			
		};

		if($ban == False){

		$sql = $conn->prepare('INSERT INTO users VALUES (null, :name, :email, :password, null, null, null)');
		$sql->bindParam("name", $name, PDO::PARAM_STR);
		$sql->bindParam("email", $email, PDO::PARAM_STR);
		$sql->bindParam("password", $password, PDO::PARAM_STR);
		$sql->execute();

		// $sql = $conn->prepare('DELETE FROM users WHERE id = :name');
		// $sql->bindParam("name", $name, PDO::PARAM_STR);
		// $sql->execute();

		// $sql = $conn->prepare('UPDATE users SET name = :name, email = :email, password = :password,  remember_token = null, created_at = null, updated_at = null WHERE id ="2"');
		// $sql->bindParam("name", $name, PDO::PARAM_STR);
		// $sql->bindParam("email", $email, PDO::PARAM_STR);
		// $sql->bindParam("password", $password, PDO::PARAM_STR);
		// $sql->execute();

		$html .= "<p>Ingreso</p>";

		}elseif($ban == True){
			$html .= "<p>Usuario ya esta en la bd</p>";
		}

		echo json_encode($html);



	}catch(PDOException $e){

		$a = "ERROR:".$e->getMessage();
		echo json_encode($a);

	}

?>