// Muestra los datos y las graficas de las educación
function mostrarTablasE(){

	mostrarTablaEducacion();
	mostrarGrafica1E();
	mostrarGrafica2E();
	
}

// Muestra los datos de educación en la vista de información
function mostrarTablaEducacion(){

	var municipio = $("#municipio").val();

	$.ajax({
		method: "GET",
		url: "/educacion/mostrarEducacion",
		dataType: 'json',
		data: { idMunicipio: municipio }
	})

	.done(function(response) {
		$('#educacion').html(response.html);
	});

}

// Muestra la grafica de matriculas por genero
function mostrarGrafica1E(){

	var municipio = $("#municipio").val();

	$.ajax({
		method: "GET",
		url: "/educacion/grafica1Educacion",
		dataType: 'json',
		data: { idMunicipio: municipio }
	})

	.done(function(response) {
		$('#grafica1').html(response.html);
	});

}

// Muestra la grafica de matriculas por nivel
function mostrarGrafica2E(){

	var municipio = $("#municipio").val();

	$.ajax({
		method: "GET",
		url: "/educacion/grafica2Educacion",
		dataType: 'json',
		data: { idMunicipio: municipio }
	})

	.done(function(response) {
		$('#grafica2').html(response.html);
	});

}