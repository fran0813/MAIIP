$( document ).ready(function()
{   
	mostrarDepartamentos();
});

function mostrarDepartamentos()
{
	// var departamento = $("#departamento").val();

	// if (departamento != "Seleccione un departamento") {

		mostrarCrear();

		$.ajax({
			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
			method: "GET",
			url: "/admin/mostrarDepartamento",
			dataType: 'json',
			data: { }
		})

		.done(function(response) {
			$('#tablaDepartamento').html(response.html);
		});

	// } else {
	// 	$('#tablaDepartamento').html("<center><h3>Porfavor seleccione un <strong>Departamento</strong> y un <strong>Municipio</strong></h3></center>");
	// }
}

function mostrarCrear()
{
	$("#crear").show();
	$("#importar").show();
}

$("#tablaDepartamento").on("click", "a", function()
{
	var value = $(this).attr("value");
	var id = $(this).attr("id");

	if (value == "editar") {
		mostrarActualizarDepartamento(id);
	} else if(value == "eliminar") {
		// $.ajax({
		// 	headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
		// 	method: "GET",
		// 	url: "/demografia/borrarDemografia",
		// 	dataType: 'json',
		// 	data: { idD: id }
		// })

		// .done(function(response) {
		// 	mostrarDatos();
		// });
	}
});	

function mostrarActualizarDepartamento(id)
{
	$('#respuesta2').hide();

	$.ajax({
		headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
		method: "POST",
		url: "/admin/mostrarActualizarDepartamento",
		dataType: 'json',
		data: { id: id }
	})

	.done(function(response) {
		$("#id").val(response.id);
		$("#codigoD2").val(response.codigoD);
		$("#nombre2").val(response.nombre);
	});
}


// Crear
$("#formCrear").on("submit", function()
{
	var codigoD = $("#codigoD").val();
	var nombre = $("#nombre").val();

	$.ajax({
		headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
		method: "POST",
		url: "/admin/crearDepartamento",
		dataType: 'json',
		data: { codigoD: codigoD,
				nombre: nombre, }
	})

	.done(function(response){
		$('#respuesta').show();
		$('#respuesta').html(response.html);
		mostrarDepartamentos();		
	});

	return false;
}); 

function limpiarRespuesta()
{
	$('#respuesta').hide();
}

// Actualizar
$("#formActualizar").on("submit", function()
{
	var id = $("#id").val();
	var codigoD = $("#codigoD2").val();
	var nombre = $("#nombre2").val();

	$.ajax({
		headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
		method: "POST",
		url: "/admin/actualizarMunicipio",
		dataType: 'json',
		data: { id: id,
				codigoD: codigoD,
				nombre: nombre, }
	})

	.done(function(response) {
		$('#respuesta2').show();
		$('#respuesta2').html(response.html);	
		mostrarDepartamentos();	
	});

	return false;
}); 