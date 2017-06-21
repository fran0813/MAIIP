$( document ).ready(function() {
    
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
	creado = $("#created_at")[0];
	creado.value = yyyy+'-'+mm+'-'+dd;
	actualizado = $("#updated_at")[0];
	actualizado.value = yyyy+'-'+mm+'-'+dd;

});

$("#formCrear").on("submit", function(){

	var anio = $("#anio").val();
	var comprobar = parseInt(anio.substr(0,4));

	var tasVacBCG = $("#tasVacBCG").val();
	var tasVacDPT = $("#tasVacDPT").val();
	var tasVacHepatitisB = $("#tasVacHepatitisB").val();
	var tasVacHIB = $("#tasVacHIB").val();
	var tasVacPolio= $("#tasVacPolio").val();
	var tasVacTripleViral = $("#tasVacTripleViral").val();

	var difBaMov = $("#difBaMov").val();
	var difEntApr= $("#difEntApr").val();
	var difMovCam = $("#difMovCam").val();
	var difSalirCalle = $("#difSalirCalle").val();
	var totalDis = $("#totalDis").val();

	var created_at = $("#created_at").val();
	var updated_at = $("#updated_at").val();
	var municipio = $("#municipio").val();
	
	$.ajax({
		method: "GET",
		url: "/salud/crearSalud",
		dataType: 'json',
		data: { anioS: anio, comprobar: comprobar, tasVacBCG: tasVacBCG, tasVacDPT: tasVacDPT, 
			tasVacHepatitisB: tasVacHepatitisB, tasVacHIB: tasVacHIB, tasVacPolio: tasVacPolio, 
			tasVacTripleViral: tasVacTripleViral, difBaMov: difBaMov, 
			difEntApr: difEntApr, difMovCam: difMovCam, difSalirCalle: difSalirCalle, totalDis: totalDis,
			municipio_id: municipio, created_at: created_at, updated_at: updated_at}
	})

	.done(function(response) {

		$('#respuesta').html(response.html);

		refrescar();
		
	});

	return false;

}); 

function refrescar(){

	var municipio = $("#municipio").val();

		$.ajax({
			method: "GET",
			url: "/salud/mostrarTablaSalud",
			dataType: 'json',
			data: { idMunicipio: municipio }
		})

		.done(function(response) {
			$('#tablasalud').html(response.html);
		});

}

function limpiarRespuesta(){

	$('#respuesta').html(" ");

}