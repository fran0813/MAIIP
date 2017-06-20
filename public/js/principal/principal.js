$( document ).ready(function() {

	$.ajax({
		method: "GET",
		url: "/departamentos/mostrarDepartamentos",
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
		method: "GET",
		url: "/departamentos/mostrarCodigo",
		dataType: 'json',
		data: { idDepartamento: departamento, idMunicipio: municipio }
	})

	.done(function(response) {
		$('#codigo').html(response.html);
	});

}

function mostrarAñoGT() {

	var municipio = $("#municipio").val();

	$.ajax({
		method: "GET",
		url: "/departamentos/mostrarAñoGT",
		dataType: 'json',
		data: { idMunicipio: municipio }
	})

	.done(function(response) {
		$('#añoGT').html(response.html);
	});

}

function mostrarAñoVSP() {

	var municipio = $("#municipio").val();

	$.ajax({
		method: "GET",
		url: "/departamentos/mostrarAñoVSP",
		dataType: 'json',
		data: { idMunicipio: municipio }
	})

	.done(function(response) {
		$('#añoVSP').html(response.html);
	});

}

function mostrarAñoS() {

	var municipio = $("#municipio").val();

	$.ajax({
		method: "GET",
		url: "/departamentos/mostrarAñoS",
		dataType: 'json',
		data: { idMunicipio: municipio }
	})

	.done(function(response) {
		$('#añoS').html(response.html);
	});

}