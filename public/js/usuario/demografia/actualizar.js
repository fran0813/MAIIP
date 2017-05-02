$( document ).ready(function() {
    
    var hoy = new Date();
	var dd = hoy.getDate();
	var mm = hoy.getMonth()+1; //hoy es 0!
	var yyyy = hoy.getFullYear();

	if(dd<10) {
	    dd='0'+dd
	} 

	if(mm<10) {
	    mm='0'+mm
	} 

	actualizado = $("#updated_at2")[0];
	actualizado.value = yyyy+'-'+mm+'-'+dd;

});

$("#formActualizar").on("submit", function(){

	var idGT = $("#idGT").val();
	var anio = $("#anio2").val();
	var temperatura = $("#temperatura2").val();
	var alturaNivMar = $("#alturaNivMar2").val();
	var ruralG = $("#ruralG2").val();
	var urbanoG = $("#urbanoG2").val();
	var totalG = $("#totalG2").val();
	var constRural = $("#constRural2").val();
	var constUrbano = $("#constUrbano2").val();
	var constTotal = $("#constTotal2").val();
	var terrRural = $("#terrRural2").val();
	var terrUrbano = $("#terrUrbano2").val();
	var terrTotal = $("#terrTotal2").val();
	var ruralP = $("#ruralP2").val();
	var urbanoP = $("#urbanoP2").val();
	var totalP = $("#totalP2").val();
	var updated_at = $("#updated_at2").val();

	$.ajax({
		method: "POST",
		url: "/js/generalidadesterritorio/actualizarGeneralidadesterritorio.php",
		dataType: 'json',
		data: { idGT: idGT, anioGT: anio, temperatura: temperatura, alturaNivMar: alturaNivMar, ruralG: ruralG, 
			urbanoG: urbanoG, totalG: totalG, constRural: constRural, constUrbano: constUrbano, 
			constTotal: constTotal, terrRural: terrRural, terrUrbano: terrUrbano, 
			terrTotal: terrTotal, ruralP: ruralP, urbanoP: urbanoP, totalP: totalP, updated_at: updated_at}
	})

	.done(function(response) {
		
		$('#respuesta2').html(response);
		
	});

	return false;

}); 