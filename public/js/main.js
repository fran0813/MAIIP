function mostrarDepartamentos(){

	$.ajax({
		method: "POST",
		url: "/js/ajaxMostrarDepartamentos.php",
		dataType: 'json',
		data: data
	})

	.done(function(response) {
		$('#dep').html(response);
	});

}

function mostrarMunicipios(){

	var dep = $("#dep").val();

	$.ajax({
		method: "POST",
		url: "/js/ajaxMostrarMunicipios.php",
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
		url: "/js/ajaxMostrarCodigo.php",
		dataType: 'json',
		data: { iddep: dep, idmun: mun }
	})

	.done(function(response) {
		$('#cod').html(response);
	});

}