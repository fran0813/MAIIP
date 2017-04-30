$( document ).ready(function() {

	$.ajax({
		method: "POST",
		url: "/js/principal/mostrarDepartamentos.php",
		dataType: 'json',
	})

	.done(function(response) {
		$('#departamento').html(response);
	});

});

function mostrarMunicipios() {

	var departamento = $("#departamento").val();

	$.ajax({
		method: "POST",
		url: "/js/principal/mostrarMunicipios.php",
		dataType: 'json',
		data: { idDepartamento: departamento }
	})

	.done(function(response) {
		$('#municipio').html(response);
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