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

	actualizado = $("#updated_at2")[0];
	actualizado.value = yyyy+'-'+mm+'-'+dd;

});

$("#formActualizar").on("submit", function(){

	var idE = $("#idE").val();
	
	var rurJardin = $("#rurJardin2").val();
	var urbJardin = $("#urbJardin2").val();
	var rurTrans = $("#rurTrans2").val();
	var urbTrans = $("#urbTrans2").val();
	var rurPrim= $("#rurPrim2").val();
	var urbPrim = $("#urbPrim2").val();
	var rurSecu = $("#rurSecu2").val();
	var urbSecu = $("#urbSecu2").val();
	var rurMedia = $("#rurMedia2").val();
	var urbMedia = $("#urbMedia2").val();

	var jardin = $("#jardin2").val();
	var trans = $("#trans2").val();
	var prim = $("#prim2").val();
	var secu = $("#secu2").val();
	var media = $("#media2").val();

	var femenino = $("#femenino2").val();
	var masculino = $("#masculino2").val();

	var updated_at = $("#updated_at2").val();

	$.ajax({
		method: "POST",
		url: "/js/educacion/actualizarEducacion.php",
		dataType: 'json',
		data: { idE: idE, rurJardin: rurJardin, urbJardin: urbJardin, 
			rurTrans: rurTrans, urbTrans: urbTrans, rurPrim: rurPrim, urbPrim: urbPrim,
			rurSecu: rurSecu, urbSecu: urbSecu, rurMedia: rurMedia, urbMedia: urbMedia, 
			jardin: jardin, trans: trans, prim: prim, secu: secu, media: media,
			femenino: femenino, masculino: masculino, updated_at: updated_at}
	})

	.done(function(response) {

		$('#respuesta2').html(response);
		
	});

	return false;

}); 