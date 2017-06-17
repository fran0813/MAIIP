$( document ).ready(function() {

	$.ajax({
		method: "GET",
		url: "/departamentos/",
		dataType: 'json',
	})

	.done(function(response) {
		// response = JSON.parse(response)
		console.info(response)
		$('#departamento').html(response.html).trigger("change");
	});

});

function establecerDepartamento() {

	var departamento = $("#departamento").val();

	$.ajax({
		method: "POST",
		url: "/departamentos/establecerDepartamento",
		dataType: 'json',
		data: { 
			idDepartamento: departamento,
			_token: $("#_token").val()
		}
	})

	.done(function(response) {
		console.info(response)
	});

}

function establecerMunicipio() {

	var municipio = $("#municipio").val();

	$.ajax({
		method: "POST",
		url: "/departamentos/establecerMunicipio",
		dataType: 'json',
		data: { 
			idMunicipio: municipio,
			_token: $("#_token").val()
		}
	})

	.done(function(response) {
		console.info(response)
	});

}

function mostrarMunicipios() {

	var departamento = $("#departamento").val();

	$.ajax({
		method: "GET",
		url: "/departamentos/mostrarMunicipios",
		dataType: 'json',
		data: { idDepartamento: departamento }
	})

	.done(function(response) {
		$('#municipio').html(response.html).trigger("change");
	});

}

function mostrarCodigo() {

	var departamento = $("#departamento").val();
	var municipio = $("#municipio").val();

	$.ajax({
		method: "POST",
		url: "/js/principal/mostrarCodigo.php",
		dataType: 'json',
		data: { idDepartamento: departamento, idMunicipio: municipio }
	})

	.done(function(response) {
		$('#codigo').html(response);
	});

}

function mostrarAñoGT() {

	var municipio = $("#municipio").val();

	$.ajax({
		method: "POST",
		url: "/js/principal/mostrarAnioGT.php",
		dataType: 'json',
		data: { idMunicipio: municipio }
	})

	.done(function(response) {
		$('#añoGT').html(response);
	});

}

function mostrarAñoVSP() {

	var municipio = $("#municipio").val();

	$.ajax({
		method: "POST",
		url: "/js/principal/mostrarAnioVSP.php",
		dataType: 'json',
		data: { idMunicipio: municipio }
	})

	.done(function(response) {
		$('#añoVSP').html(response);
	});

}

function mostrarAñoS() {

	var municipio = $("#municipio").val();

	$.ajax({
		method: "POST",
		url: "/js/principal/mostrarAnioS.php",
		dataType: 'json',
		data: { idMunicipio: municipio }
	})

	.done(function(response) {
		$('#añoS').html(response);
	});

}