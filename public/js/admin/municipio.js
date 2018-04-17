function mostrarMunicipios()
{
	var departamento = $("#departamento").val();

	if (departamento != "Seleccione un departamento") {

		mostrarCrear();

		$.ajax({
			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
			method: "GET",
			url: "/admin/mostrarMunicipio",
			dataType: 'json',
			data: { idDepartamento: departamento }
		})

		.done(function(response) {
			$('#tablaMunicipio').html(response.html);
		});

	} else {
		$('#tablaMunicipio').html("<center><h3>Porfavor seleccione un <strong>Departamento</strong> y un <strong>Municipio</strong></h3></center>");
	}
}

function mostrarCrear()
{
	$("#crear").show();
}

$("#tablaMunicipio").on("click", "a", function()
{
	var value = $(this).attr("value");
	var id = $(this).attr("id");

	if (value == "editar") {
		mostrarActualizarMunicipio(id);
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

function mostrarActualizarMunicipio(id)
{
	$('#respuesta2').hide();

	$.ajax({
		headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
		method: "POST",
		url: "/admin/mostrarActualizarMunicipio",
		dataType: 'json',
		data: { id: id }
	})

	.done(function(response) {
		$("#id").val(response.id);
		$("#codigoM2").val(response.codigoM);
		$("#nombre2").val(response.nombre);
		$("#catMun2").val(response.catMun);
	});
}


// Crear
$("#formCrear").on("submit", function()
{
	var codigoM = $("#codigoM").val();
	var nombre = $("#nombre").val();
	var catMun = $("#catMun").val();
	var departamento = $("#departamento").val();

	$.ajax({
		headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
		method: "POST",
		url: "/admin/crearMunicipio",
		dataType: 'json',
		data: { codigoM: codigoM,
				nombre: nombre,
				catMun: catMun,
				departamento_id: departamento }
	})

	.done(function(response){
		$('#respuesta').show();
		$('#respuesta').html(response.html);
		mostrarMunicipios();		
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
	var codigoM = $("#codigoM2").val();
	var nombre = $("#nombre2").val();
	var catMun = $("#catMun2").val();

	$.ajax({
		headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
		method: "POST",
		url: "/admin/actualizarMunicipio",
		dataType: 'json',
		data: { id: id,
				codigoM: codigoM,
				nombre: nombre,
				catMun: catMun, }
	})

	.done(function(response) {
		$('#respuesta2').show();
		$('#respuesta2').html(response.html);	
		mostrarMunicipios();	
	});

	return false;
}); 