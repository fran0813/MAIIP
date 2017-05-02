<?php

	$idGT = $_POST['idGT'];

	try{

		$conn = new PDO('mysql:host=localhost; dbname=maiip', "root", "12345");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = $conn->prepare('SELECT generalidadesterritorios.id,DATE(anioGT),temperatura,alturaNivMar,ruralG,urbanoG,totalG,constRural,constUrbano,constTotal,terrRural,terrUrbano,terrTotal,ruralP,urbanoP,totalP FROM generalidadesterritorios,generalidades,territorios,predios WHERE generalidadesterritorios.id = :idGT AND generalidades.generalidadterritorio_id = generalidadesterritorios.id AND territorios.generalidadterritorio_id = generalidadesterritorios.id AND predios.generalidadterritorio_id = generalidadesterritorios.id');
		$sql->execute(array('idGT' => $idGT));
		$resultados = $sql->fetchAll();
		$html = "";

		foreach ($resultados as $resultado) {
			$id = $resultado['id'];
			$anio = $resultado['DATE(anioGT)'];
			$temperatura = $resultado['temperatura'];
			$alturaNivMar = $resultado['alturaNivMar'];
			$ruralG = $resultado['ruralG'];
			$urbanoG = $resultado['urbanoG'];
			$totalG = $resultado['totalG'];
			$constRural = $resultado['constRural'];
			$constUrbano = $resultado['constUrbano'];
			$constTotal = $resultado['constTotal'];
			$terrRural = $resultado['terrRural'];
			$terrUrbano = $resultado['terrUrbano'];
			$terrTotal = $resultado['terrTotal'];
			$ruralP = $resultado['ruralP'];
			$urbanoP = $resultado['urbanoP'];
			$totalP = $resultado['totalP'];

			$html .="<label for='anio'>Año</label>       
              		<input id='anio2' type='date'value='$anio'>";

            $html .="<br>
                	<br>

	                <label for='temperatura'>Temperatura</label>        
	                <input id='temperatura2' type='text' value='$temperatura'>";

	        $html .="<br>
	                <br>

	                <label for='alturaNivMar'>Altura sobre el nivel del mar</label>     
	                <input id='alturaNivMar2' type='text' value='$alturaNivMar'>";

	        $html .="<div>

                    <label for='ruralG'>Generalidades</label>

                    <label for='ruralG'>Rural</label>       
                    <input id='ruralG2' type='text' value='$ruralG' oninput='calcularTotalG2()'>

                    <br>
                    <br>

                    <label for='urbanoG'>Urbano</label>     
                    <input id='urbanoG2' type='text' value='$urbanoG' oninput='calcularTotalG2()'>

                    <br>
                    <br>

                    <label for='totalG'>Total</label>       
                    <input id='totalG2' type='text' value='$totalG' disabled=''>

                	</div>

                	<br>
	                <br>";

            $html .="<div>

                    <div>

                    <label for='constRural'>Territorio</label>

                    <br>

                    <label for='constRural'>Construida</label>
                    
                    <label for='constRural'>Rural</label>       
                    <input id='constRural2' type='text' value='$constRural' oninput='calcularConstTotal2()'>

                    <br>
                    <br>

                    <label for='constUrbano'>Urbano</label>     
                    <input id='constUrbano2' type='text' value='$constUrbano' oninput='calcularConstTotal2()'>

                    <br>
                    <br>

                    <label for='constTotal'>Total</label>       
                    <input id='constTotal2' type='text' value='$constTotal' disabled=''>

                    </div>

                    <br>
                    <br>

                    <div>

                    <label for='terrRural'>terreno</label>

                    <label for='terrRural'>Rural</label>        
                    <input id='terrRural2' type='text' value='$terrRural' oninput='calcularTerrTotal2()'>

                    <br>
                    <br>

                    <label for='terrUrbano'>Urbano</label>      
                    <input id='terrUrbano2' type='text' value='$terrUrbano' oninput='calcularTerrTotal2()'>

                    <br>
                    <br>

                    <label for='terrTotal'>Total</label>        
                    <input id='terrTotal2' type='text' value='$terrTotal' disabled=''>

                    </div>

	                </div>

	                <br>
	                <br>";

	        $html .="<div>

                    <label for='ruralP'>Predios</label>

                    <label for='ruralP'>Rural</label>       
                    <input id='ruralP2' type='text' value='$ruralP' oninput='calcularTotalP2()'>

                    <br>
                    <br>

                    <label for='urbanoP'>Urbano</label>     
                    <input id='urbanoP2' type='text' value='$urbanoP' oninput='calcularTotalP2()'>

                    <br>
                    <br>

                    <label for='totalP'>Total</label>       
                    <input id='totalP2' type='text' value='$totalP' disabled=''>
                </div>";

			$html .="<input id='idGT' type='text' value='$id' style='display: none;'>";
		};

		echo json_encode($html);

	}catch(PDOException $e){

		$e->getMessage();
		echo json_encode("h");

	}

?>