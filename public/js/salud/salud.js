function mostrarTablasS(){
	mostrarTablaSalud();
	mostrarGrafica1S();
	mostrarGrafica2S();
}

function mostrarTablaSalud(){

	var municipio = $("#municipio").val();
	var anio = $("#añoS").val();

	$.ajax({
		method: "POST",
		url: "/js/salud/mostrarSalud.php",
		dataType: 'json',
		data: { idMunicipio: municipio, anioS: anio }
	})

	.done(function(response) {
		$('#salud').html(response);
	});

}

function mostrarGrafica1S(){

	var municipio = $("#municipio").val();
	var anioS = $("#añoS").val();

	$.ajax({
		method: "POST",
		url: "/js/salud/grafica1Salud.php",
		dataType: 'json',
		data: { idMunicipio: municipio, anioS: anioS }
	})

	.done(function(response) {
		$('#grafica1').html(response);
	});

}

function mostrarGrafica2S(){

	var municipio = $("#municipio").val();
	var anioS = $("#añoS").val();

	$.ajax({
		method: "POST",
		url: "/js/salud/grafica2Salud.php",
		dataType: 'json',
		data: { idMunicipio: municipio, anioS: anioS }
	})

	.done(function(response) {
		$('#grafica2').html(response);
	});

}