function mostrarMunicipios(){

	var dep = $("#dep").val();

	$.ajax({
		method: "POST",
		url: "/js/mostrarMunicipios.php",
		dataType: 'json',
		data: { iddep: dep }
	})

	.done(function(response) {
		$('#mun').html(response);
	});

}

function mostrarCodigo(){

	var dep = $("#dep").val();
	var mun = $("#mun").val();

	$.ajax({
		method: "POST",
		url: "/js/mostrarCodigo.php",
		dataType: 'json',
		data: { iddep: dep, idmun: mun }
	})

	.done(function(response) {
		$('#cod').html(response);
	});

}