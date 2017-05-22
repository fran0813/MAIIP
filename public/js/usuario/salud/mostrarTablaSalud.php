<?php

	$idMunicipio = $_POST['idMunicipio'];

	try{

		$conn = new PDO('mysql:host=localhost; dbname=maiip', "root", "12345");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = $conn->prepare('SELECT id,YEAR(anioS) FROM salud WHERE salud.municipio_id = :idMunicipio ORDER BY anioS');
		$sql->execute(array('idMunicipio' => $idMunicipio));
		$resultados = $sql->fetchAll();
		$html = "";

		$html .="<table class='table table-striped table-bordered table-hover'>
                    <thead>
                        <tr>
                            <th>Año</th>
                            <th>Funciones</th>
                        </tr>
                    </thead>
                    <tbody>";

		foreach ($resultados as $resultado) {
			$id = $resultado['id'];
			$anio = $resultado['YEAR(anioS)'];
			
			$html .="<tr>
					<td>$anio</td>
					<td><a id='$id' href='#' class='btn btn-success' data-toggle='modal' data-target='#modalMostrarActualizar'>Editar</a><a id='$id' href='#' class='btn btn-danger'>Borrar</a></td>
					</tr>";
		};

		$html .="</tbody>
                </table>";

		echo json_encode($html);

	}catch(PDOException $e){

		$e->getMessage();
		echo json_encode($e);

	}

?>