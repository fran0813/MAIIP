$( document ).ready(function() {
	mostrarDepartamentos();
});

function mostrarDepartamentos()
{
	$.ajax({
		headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
		method: "GET",
		url: "/admin/mostrarDepartamentos",
		dataType: 'json',
	})

	.done(function(response) {
		$('#departamento').html(response.html).trigger("change");
	});
}

function establecerDepartamento()
{
	var departamento = $("#departamento").val();

	$.ajax({
		headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
		method: "POST",
		url: "/admin/establecerDepartamento",
		dataType: 'json',
		data: { idDepartamento: departamento }
	})

	.done(function(response) {

	});

}

function establecerMunicipio()
{
	var municipio = $("#municipio").val();

	$.ajax({
		headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
		method: "POST",
		url: "/admin/establecerMunicipio",
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
		url: "/admin/mostrarMunicipios",
		dataType: 'json',
		data: { idDepartamento: departamento }
	})

	.done(function(response) {
		$('#municipio').html(response.html).trigger("change");
	});

}