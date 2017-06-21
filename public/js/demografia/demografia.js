// Muestra los datos y las graficas de las demografias
function mostrarTablasD(){

	mostrarTablaDememografia();
	mostrarGrafica1Dem();
	mostrarGrafica2Dem();

}

// Muestra los datos de demografia en la vista de información
function mostrarTablaDememografia(){

	var municipio = $("#municipio").val();

	$.ajax({
		method: "GET",
		url: "/demografia/mostrarDemografia",
		dataType: 'json',
		data: { idMunicipio: municipio }
	})

	.done(function(response) {
		$('#demografias').html(response.html);
	});

}

// Muestra la grafica de índice de ruralidad v.s crecimiento demografico
function mostrarGrafica1Dem(){

	var municipio = $("#municipio").val();

	$.ajax({
		method: "GET",
		url: "/demografia/grafica1Demografia",
		dataType: 'json',
		data: { idMunicipio: municipio }
	})

	.done(function(response) {
		$('#grafica1').html(response.html);
	});

}

// Muestra la grafica de población total
function mostrarGrafica2Dem(){

	var municipio = $("#municipio").val();

	$.ajax({
		method: "GET",
		url: "/demografia/grafica2Demografia",
		dataType: 'json',
		data: { idMunicipio: municipio }
	})

	.done(function(response) {
		$('#grafica2').html(response.html);
	});

}