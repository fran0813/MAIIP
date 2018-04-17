$( document ).ready(function() {
	mostrarDepartamentos();
});

function mostrarDepartamentos()
{
	$.ajax({
		headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
		method: "GET",
		url: "/mostrarDepartamentos",
		dataType: 'json',
		data: { }
	})

	.done(function(response) {
		$('#departamento').html(response.html).trigger("change");
	});
}

function establecerDepartamento() {

	var departamento = $("#departamento").val();

	$.ajax({
		headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
		method: "POST",
		url: "/establecerDepartamento",
		dataType: 'json',
		data: { idDepartamento: departamento }
	})

	.done(function(response) {

	});

}

function establecerMunicipio() {

	var municipio = $("#municipio").val();

	$.ajax({
		headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
		method: "POST",
		url: "/establecerMunicipio",
		dataType: 'json',
		data: { idMunicipio: municipio }
	})

	.done(function(response) {

	});

}

function mostrarMunicipios()
{
	var departamento = $("#departamento").val();

	$.ajax({
		headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
		method: "GET",
		url: "/mostrarMunicipios",
		dataType: 'json',
		data: { idDepartamento: departamento }
	})

	.done(function(response) {
		$('#municipio').html(response.html).trigger("change");
	});
}

function mostrarCodigo()
{

	var departamento = $("#departamento").val();
	var municipio = $("#municipio").val();

	$.ajax({
		headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
		method: "GET",
		url: "/mostrarCodigo",
		dataType: 'json',
		data: { idDepartamento: departamento,
				idMunicipio: municipio }
	})

	.done(function(response) {
		$('#codigo').html(response.html);
	});

}

function mostrarAñoGT() {

	var municipio = $("#municipio").val();

	$.ajax({
		headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
		method: "GET",
		url: "/mostrarAñoGT",
		dataType: 'json',
		data: { idMunicipio: municipio }
	})

	.done(function(response) {
		$('#añoGT').html(response.html);
	});
}

function mostrarAñoVSP()
{
	var municipio = $("#municipio").val();

	$.ajax({
		headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
		method: "GET",
		url: "/mostrarAñoVSP",
		dataType: 'json',
		data: { idMunicipio: municipio }
	})

	.done(function(response) {
		$('#añoVSP').html(response.html);
	});
}

function mostrarAñoS()
{
	var municipio = $("#municipio").val();

	$.ajax({
		headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
		method: "GET",
		url: "/mostrarAñoS",
		dataType: 'json',
		data: { idMunicipio: municipio }
	})

	.done(function(response) {
		$('#añoS').html(response.html);
	});
}