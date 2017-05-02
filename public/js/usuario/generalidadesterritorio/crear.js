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

function calcularTotalG(){

	var ruralG = $("#ruralG").val();
	var urbanoG = $("#urbanoG").val();
	var totalG= (parseFloat(ruralG) + parseFloat(urbanoG));

	$('#totalG').val(totalG);
}

function calcularConstTotal(){

	var constRural = $("#constRural").val();
	var constUrbano = $("#constUrbano").val();
	var constTotal= (parseInt(constRural) + parseInt(constUrbano));

	$('#constTotal').val(constTotal);
}

function calcularTerrTotal(){

	var terrRural = $("#terrRural").val();
	var terrUrbano = $("#terrUrbano").val();
	var terrTotal = (parseFloat(terrRural) + parseFloat(terrUrbano));

	$('#terrTotal').val(terrTotal);
}

function calcularTotalP(){

	var ruralP = $("#ruralP").val();
	var urbanoP = $("#urbanoP").val();
	var totalP = (parseInt(ruralP) + parseInt(urbanoP));

	$('#totalP').val(totalP);
}

$("#formCrear").on("submit", function(){

	var anio = $("#anio").val();
	var comprobar = parseInt(anio.substr(0,4));
	var temperatura = $("#temperatura").val();
	var alturaNivMar = $("#alturaNivMar").val();
	var ruralG = $("#ruralG").val();
	var urbanoG = $("#urbanoG").val();
	var totalG= $("#totalG").val();
	var constRural = $("#constRural").val();
	var constUrbano = $("#constUrbano").val();
	var constTotal= $("#constTotal").val();
	var terrRural = $("#terrRural").val();
	var terrUrbano = $("#terrUrbano").val();
	var terrTotal = $("#terrTotal").val();
	var ruralP = $("#ruralP").val();
	var urbanoP = $("#urbanoP").val();
	var totalP = $("#totalP").val();
	var created_at = $("#created_at").val();
	var updated_at = $("#updated_at").val();
	var municipio = $("#municipio").val();

	// if(anio == "0001-01-01" || anio < "1900-01-01") {

 //  		$('#respuesta').html("Año no valido");
 //  		return false;

 //  	}else if(isNaN(temperatura)) {

 //  		alert("n");
 // 		return false;

	// }else{

	$.ajax({
		method: "POST",
		url: "/js/generalidadesterritorio/crearGeneralidadesterritorio.php",
		dataType: 'json',
		data: { anioGT: anio, comprobar: comprobar, temperatura: temperatura, alturaNivMar: alturaNivMar, municipio_id: municipio, ruralG: ruralG, 
			urbanoG: urbanoG, totalG: totalG, constRural: constRural, constUrbano: constUrbano, 
			constTotal: constTotal, terrRural: terrRural, terrUrbano: terrUrbano, 
			terrTotal: terrTotal, ruralP: ruralP, urbanoP: urbanoP, totalP: totalP, 
			created_at: created_at, updated_at: updated_at}
	})

	.done(function(response) {

		$('#respuesta').html(response);

		refrescar();
		
	});

	return false;

	// }

}); 

function refrescar(){

	var municipio = $("#municipio").val();

		$.ajax({
			method: "POST",
			url: "/js/usuario/generalidadesterritorio/mostrarTablaGeneralidadesterritorio.php",
			dataType: 'json',
			data: { idMunicipio: municipio }
		})

		.done(function(response) {
			$('#tablaGeneralidadesterritorio').html(response);
		});

}