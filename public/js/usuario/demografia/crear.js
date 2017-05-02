$( document ).ready(function() {
    
    var hoy = new Date();
	var dd = hoy.getDate();
	var mm = hoy.getMonth()+1; //hoy es 0!
	var yyyy = hoy.getFullYear();

	if(dd < 10) {
	    dd='0'+dd
	} 

	if(mm < 10) {
	    mm='0'+mm
	} 

	anio = $("#anio")[0];
	anio.value = yyyy+'-'+mm+'-'+dd;
	creado = $("#created_at")[0];
	creado.value = yyyy+'-'+mm+'-'+dd;
	actualizado = $("#updated_at")[0];
	actualizado.value = yyyy+'-'+mm+'-'+dd;

});

$("#formCrear").on("submit", function(){

	var anio = $("#anio").val();
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
	var created_at = $("#created_at").val();
	var updated_at = $("#updated_at").val();
	var municipio = $("#municipio").val();

	$.ajax({
		method: "POST",
		url: "/js/demografia/crearDemografia.php",
		dataType: 'json',
		data: { anioD: anio, pobEdadTrabajar: pobEdadTrabajar, pobPotActiva: pobPotActiva, municipio_id: municipio, 
			pobPotInactiva: pobPotInactiva, numPerMen: numPerMen, numPerMay: numPerMay, numPerInd: numPerInd,
			numPerDep: numPerDep, pobHom: pobHom, pobMuj: pobMuj, pobZonCab: pobZonCab, 
			pobZonRes: pobZonRes, indRuralidad: indRuralidad, pobTotal: pobTotal, crecPob: crecPob, 
			created_at: created_at, updated_at: updated_at}
	})

	.done(function(response) {

		$('#respuesta').html(response);
		refrescar();
		
	});

	return false;

}); 

function refrescar(){

	var municipio = $("#municipio").val();

		$.ajax({
			method: "POST",
			url: "/js/usuario/demografia/mostrarTablaDemografia.php",
			dataType: 'json',
			data: { idMunicipio: municipio }
		})

		.done(function(response) {
			$('#tablaDemografia').html(response);
		});

}