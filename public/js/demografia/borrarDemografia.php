<?php

	// $iddep = $_POST['iddep'];

	try{

		$conn = new PDO('mysql:host=localhost; dbname=maiip', "root", "12345");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = $conn->prepare('DELETE FROM demografias WHERE id = :idDemografia');
		$sql->bindParam("idDemografia", $idDemografia, PDO::PARAM_STR);
		$sql->execute();

		// $html = "";
		// echo json_encode($html);

	}catch(PDOException $e){

		$e->getMessage();
		echo json_encode($e);

	}

?>