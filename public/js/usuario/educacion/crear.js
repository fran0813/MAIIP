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

function calcularJardin(){

	var rurJardin = $("#rurJardin").val();
	var urbJardin = $("#urbJardin").val();
	var jardin = (parseInt(rurJardin) + parseInt(urbJardin));

	$('#jardin').val(jardin);

}

function calcularTransicion(){

	var rurTrans = $("#rurTrans").val();
	var urbTrans = $("#urbTrans").val();
	var trans = (parseInt(rurTrans) + parseInt(urbTrans));

	$('#trans').val(trans);

}

function calcularPrimaria(){

	var rurPrim = $("#rurPrim").val();
	var urbPrim = $("#urbPrim").val();
	var prim = (parseInt(rurPrim) + parseInt(urbPrim));

	$('#prim').val(prim);

}

function calcularSecundaria(){

	var rurSecu = $("#rurSecu").val();
	var urbSecu = $("#urbSecu").val();
	var secu = (parseInt(rurSecu) + parseInt(urbSecu));

	$('#secu').val(secu);

}

function calcularMedia(){

	var rurMedia = $("#rurMedia").val();
	var urbMedia = $("#urbMedia").val();
	var media = (parseInt(rurMedia) + parseInt(urbMedia));

	$('#media').val(media);

}

function validarGenero(){

	var jardin = $("#jardin").val();
	var trans = $("#trans").val();
	var prim = $("#prim").val();
	var secu = $("#secu").val();
	var media = $("#media").val();
	var validar = (parseInt(jardin) + parseInt(trans) + parseInt(prim) + parseInt(secu) + parseInt(media));

	var femenino = $("#femenino").val();
	var masculino = $("#masculino").val();
	var total = (parseInt(femenino) + parseInt(masculino));

	if(total > validar || total < validar){

		$('#respuesta').html("<p>El numero de matriculas no coinciden con el numero de matriculados por genero</p>");

	}else{

		$('#respuesta').html(" ");

	}

}

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

	var validar = (parseInt(jardin) + parseInt(trans) + parseInt(prim) + parseInt(secu) + parseInt(media));

	var total = (parseInt(femenino) + parseInt(masculino));

	if(total > validar || total < validar){

		$('#respuesta').html("<p>El numero de matriculas no coinciden con el numero de matriculados por genero</p>");
		return false;

	}else{

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

	}

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