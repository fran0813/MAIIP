function mostrarTablasE(){
	mostrarTablaEducacion();
	mostrarGrafica1E();
	mostrarGrafica2E();
}

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