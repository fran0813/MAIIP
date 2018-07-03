$( document ).ready(function()
{    
    año();
});

// Mostrar 
function mostrarDatos()
{
	var municipio = $("#municipio").val();

	if (municipio != "Seleccione un municipio") {

		mostrarCrear();

		$.ajax({
			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
			method: "GET",
			url: "/demografia/mostrarTablaSeguridadviolencia",
			dataType: 'json',
			data: { idMunicipio: municipio }
		})

		.done(function(response) {
			$('#tablaSeguridadViolencia').html(response.html);
		});

	} else {
		$('#tablaSeguridadViolencia').html("<center><h3>Porfavor seleccione un <strong>Departamento</strong> y un <strong>Municipio</strong></h3></center>");
	}
}

function mostrarCrear()
{
	$("#crear").show();
}

$("#tablaSeguridadViolencia").on("click", "a", function()
{
	var value = $(this).attr("value");
	var id = $(this).attr("id");

	if (value == "editar") {
		mostrarActualizarGeneralidadesterritorio(id);
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

function mostrarActualizarGeneralidadesterritorio(id)
{
	$('#respuesta2').hide();

	$.ajax({
		headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
		method: "POST",
		url: "/seguridadviolencia/mostrarActualizarSeguridadViolencia",
		dataType: 'json',
		data: { idSV: id }
	})

	.done(function(response) {
		$("#idD").val(response.id);
		$("#anio2").val(response.anio);
		$("#pobEdadTrabajar2").val(response.pobEdadTrabajar);
		$("#pobPotActiva2").val(response.pobPotActiva);
		$("#pobPotInactiva2").val(response.pobPotInactiva);
		$("#numPerMen2").val(response.numPerMen);
		$("#numPerMay2").val(response.numPerMay);
		$("#numPerInd2").val(response.numPerInd);
		$("#numPerDep2").val(response.numPerDep);
		$("#pobHom2").val(response.pobHom);
		$("#pobMuj2").val(response.pobMuj);
		$("#pobZonCab2").val(response.pobZonCab);
		$("#pobZonRes2").val(response.pobZonRes);
		$("#indRuralidad2").val(response.indRuralidad);
		$("#pobTotal2").val(response.pobTotal);
		$("#crecPob2").val(response.crecPob);
	});
}

// Crear
function año()
{
	var hoy = new Date();
	var dd = hoy.getDate();
	var mm = hoy.getMonth()+1; //hoy es 0!
	var yyyy = hoy.getFullYear();

	if(dd < 10) {
	    dd='0'+dd;
	} 

	if(mm < 10) {
	    mm='0'+mm;
	} 

	anio = $("#anio")[0];
	anio.value = yyyy+'-'+mm+'-'+dd;
}

$("#formCrear").on("submit", function()
{
	var anio = $("#anio").val();
	var comprobar = parseInt(anio.substr(0,4));
	var pobEdadTrabajar = $("#pobEdadTrabajar").val();
	var pobPotActiva = $("#pobPotActiva").val();
	var pobPotInactiva = $("#pobPotInactiva").val();
	var numPerMen = $("#numPerMen").val();
	var numPerMay= $("#numPerMay").val();
	var numPerInd = $("#numPerInd").val();
	var numPerDep = $("#numPerDep").val();
	var pobHom= $("#pobHom").val();
	var pobMuj = $("#pobMuj").val();
	var pobZonCab = $("#pobZonCab").val();
	var pobZonRes = $("#pobZonRes").val();
	var indRuralidad = $("#indRuralidad").val();
	var pobTotal = $("#pobTotal").val();
	var crecPob = $("#crecPob").val();
	var municipio = $("#municipio").val();

	$.ajax({
		headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
		method: "POST",
		url: "/seguridadviolencia/crearSeguridadviolencia",
		dataType: 'json',
		data: { anioD: anio,
				comprobar: comprobar,
				pobEdadTrabajar: pobEdadTrabajar,
				pobPotActiva: pobPotActiva,
				municipio_id: municipio,
				pobPotInactiva: pobPotInactiva,
				numPerMen: numPerMen,
				numPerMay: numPerMay,
				numPerInd: numPerInd,
				numPerDep: numPerDep,
				pobHom: pobHom,
				pobMuj: pobMuj,
				pobZonCab: pobZonCab,
				pobZonRes: pobZonRes,
				indRuralidad: indRuralidad,
				pobTotal: pobTotal,
				crecPob: crecPob }
	})

	.done(function(response){
		$('#respuesta').show();
		$('#respuesta').html(response.html);
		mostrarDatos();		
	});

	return false;
}); 

function limpiarRespuesta()
{
	$('#respuesta').hide();
}

$("#formActualizar").on("submit", function()
{
	var idD = $("#idD").val();
	var pobEdadTrabajar = $("#pobEdadTrabajar2").val();
	var pobPotActiva = $("#pobPotActiva2").val();
	var pobPotInactiva = $("#pobPotInactiva2").val();
	var numPerMen = $("#numPerMen2").val();
	var numPerMay= $("#numPerMay2").val();
	var numPerInd = $("#numPerInd2").val();
	var numPerDep = $("#numPerDep2").val();
	var pobHom = $("#pobHom2").val();
	var pobMuj = $("#pobMuj2").val();
	var pobZonCab = $("#pobZonCab2").val();
	var pobZonRes = $("#pobZonRes2").val();
	var indRuralidad = $("#indRuralidad2").val();
	var pobTotal = $("#pobTotal2").val();
	var crecPob = $("#crecPob2").val();

	$.ajax({
		headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
		method: "POST",
		url: "/seguridadviolencia/actualizarSeguridadviolencia",
		dataType: 'json',
		data: { idD: idD,
				pobEdadTrabajar: pobEdadTrabajar,
				pobPotActiva: pobPotActiva,
				pobPotInactiva: pobPotInactiva,
				numPerMen: numPerMen,
				numPerMay: numPerMay,
				numPerInd: numPerInd,
				numPerDep: numPerDep,
				pobHom: pobHom,
				pobMuj: pobMuj,
				pobZonCab: pobZonCab,
				pobZonRes: pobZonRes,
				indRuralidad: indRuralidad,
				pobTotal: pobTotal,
				crecPob: crecPob }
	})

	.done(function(response) {
		$('#respuesta2').show();
		$('#respuesta2').html(response.html);	
		mostrarDatos();	
	});

	return false;
}); 