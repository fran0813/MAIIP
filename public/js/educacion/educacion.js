function mostrarTablasE(){
	mostrarTablaEducacion();
	mostrarGrafica1E();
	mostrarGrafica2E();
}

function mostrarTablaEducacion(){

	var municipio = $("#municipio").val();

	$.ajax({
		method: "POST",
		url: "/js/educacion/mostrarEducacion.php",
		dataType: 'json',
		data: { idMunicipio: municipio }
	})

	.done(function(response) {
		$('#educacion').html(response);
	});

}

function mostrarGrafica1E(){

	var municipio = $("#municipio").val();

	$.ajax({
		method: "POST",
		url: "/js/educacion/grafica1Educacion.php",
		dataType: 'json',
		data: { idMunicipio: municipio }
	})

	.done(function(response) {
		$('#grafica1').html(response);
	});

}

function mostrarGrafica2E(){

	var municipio = $("#municipio").val();

	$.ajax({
		method: "POST",
		url: "/js/educacion/grafica2Educacion.php",
		dataType: 'json',
		data: { idMunicipio: municipio }
	})

	.done(function(response) {
		$('#grafica2').html(response);
	});

}