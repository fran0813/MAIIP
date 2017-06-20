function mostrarTablasD(){
	mostrarTablaDememografia();
	mostrarGrafica1Dem();
	mostrarGrafica2Dem();
}

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