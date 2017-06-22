// Muestra los datos y las graficas de las salud
function mostrarTablasS(){

	mostrarTablaSalud();
	mostrarGrafica1S();
	mostrarGrafica2S();

}

// Muestra los datos de salud en la vista de información
function mostrarTablaSalud(){

	var municipio = $("#municipio").val();
	var anio = $("#añoS").val();

	$.ajax({
		method: "GET",
		url: "/salud/mostrarSalud",
		dataType: 'json',
		data: { idMunicipio: municipio,
				anioS: anio }
	})

	.done(function(response){
		$('#salud').html(response.html);
	});

}

// Muestra la grafica de vacunaciones
function mostrarGrafica1S(){

	var municipio = $("#municipio").val();
	var anioS = $("#añoS").val();

	$.ajax({
		method: "GET",
		url: "/salud/grafica1Salud",
		dataType: 'json',
		data: { idMunicipio: municipio,
				anioS: anioS }
	})

	.done(function(response){
		$('#grafica1').html(response.html);
	});

}

// Muestra la grafica de discapacidades
function mostrarGrafica2S(){

	var municipio = $("#municipio").val();
	var anioS = $("#añoS").val();

	$.ajax({
		method: "GET",
		url: "/salud/grafica2Salud",
		dataType: 'json',
		data: { idMunicipio: municipio,
				anioS: anioS }
	})

	.done(function(response){
		$('#grafica2').html(response.html);
	});

}