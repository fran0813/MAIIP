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
	var comprobar = parseInt(anio.substr(0,4));

	var rurJardin = $("#rurJardin").val();
	var urbJardin = $("#urbJardin").val();
	var rurTrans = $("#rurTrans").val();
	var urbTrans = $("#urbTrans").val();
	var rurPrim= $("#rurPrim").val();
	var urbPrim = $("#urbPrim").val();
	var rurSecu = $("#rurSecu").val();
	var urbSecu = $("#urbSecu").val();
	var rurMedia = $("#rurMedia").val();
	var urbMedia = $("#urbMedia").val();

	var jardin = $("#jardin").val();
	var trans = $("#trans").val();
	var prim = $("#prim").val();
	var secu = $("#secu").val();
	var media = $("#media").val();

	var femenino = $("#femenino").val();
	var masculino = $("#masculino").val();

	var created_at = $("#created_at").val();
	var updated_at = $("#updated_at").val();
	var municipio = $("#municipio").val();

	$.ajax({
		method: "POST",
		url: "/js/educacion/crearEducacion.php",
		dataType: 'json',
		data: { anioE: anio, comprobar: comprobar, rurJardin: rurJardin, urbJardin: urbJardin, 
			rurTrans: rurTrans, urbTrans: urbTrans, rurPrim: rurPrim, urbPrim: urbPrim,
			rurSecu: rurSecu, urbSecu: urbSecu, rurMedia: rurMedia, urbMedia: urbMedia, 
			jardin: jardin, trans: trans, prim: prim, secu: secu, media: media,
			femenino: femenino, masculino: masculino, municipio_id: municipio,
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
			url: "/js/usuario/educacion/mostrarTablaEducacion.php",
			dataType: 'json',
			data: { idMunicipio: municipio }
		})

		.done(function(response) {
			$('#tablaeducacion').html(response);
		});

}