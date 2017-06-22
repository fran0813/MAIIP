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

// Funcion para establecer un departamento
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

// Funcion para establecer un municipio
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

// Muestra los municipios
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

// Muestra el codigo
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

// Muestra los años de generalidades y territorio
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

// Muestra los años de vivienda y servicios publicos
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

// Muestra los años de salud
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