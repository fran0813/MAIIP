function mostrarTablas(){
	mostrarTablaDememografia();
	mostrarGrafica1Dem();
	mostrarGrafica2Dem();
}

function mostrarTablaDememografia(){

	var municipio = $("#municipio").val();

	$.ajax({
		method: "POST",
		url: "/js/demografia/mostrarDemografia.php",
		dataType: 'json',
		data: { idMunicipio: municipio }
	})

	.done(function(response) {
		$('#demografias').html(response);
	});

}

function mostrarGrafica1Dem(){

	var municipio = $("#municipio").val();

	$.ajax({
		method: "POST",
		url: "/js/demografia/grafica1Demografia.php",
		dataType: 'json',
		data: { idMunicipio: municipio }
	})

	.done(function(response) {
		$('#grafica1').html(response);
	});

}

function mostrarGrafica2Dem(){

	var municipio = $("#municipio").val();

	$.ajax({
		method: "POST",
		url: "/js/demografia/mostrargrafica2Demografia.php",
		dataType: 'json',
		data: { idMunicipio: municipio }
	})

	.done(function(response) {
		$('#grafica2').html(response);
		// alert("llego");
	});

}