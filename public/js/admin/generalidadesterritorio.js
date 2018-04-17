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
			url: "/generalidadesterritorio/mostrarTablaGeneralidadesterritorio",
			dataType: 'json',
			data: { idMunicipio: municipio }
		})

		.done(function(response) {
			$('#tablaGeneralidadesterritorio').html(response.html);
		});
	} else {
		$('#tablaGeneralidadesterritorio').html("<center><h3>Porfavor seleccione un <strong>Departamento</strong> y un <strong>Municipio</strong></h3></center>");
	}
}

function mostrarCrear()
{
	$("#crear").show();
}

$("#tablaGeneralidadesterritorio").on("click", "a", function()
{
	var value = $(this).attr("value");
	var id = $(this).attr("id");

	if(value == "editar"){
		mostrarActualizarGeneralidadesterritorio(id);
	}else if(value == "eliminar"){
		// $.ajax({
		// 	headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
		// 	method: "POST",
		// 	url: "/generalidadesterritorio/borrarGeneralidadesterritorio",
		// 	dataType: 'json',
		// 	data: { idGT: id }
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
		url: "/generalidadesterritorio/mostrarActualizarGeneralidadesterritorio",
		dataType: 'json',
		data: { idGT: id }
	})

	.done(function(response) {
		$("#idGT").val(response.id);
		$("#anio2").val(response.anio);
		$("#temperatura2").val(response.temperatura);
		$("#alturaNivMar2").val(response.alturaNivMar);
		$("#ruralG2").val(response.ruralG);
		$("#urbanoG2").val(response.urbanoG);
		$("#totalG2").val(response.totalG);
		$("#constRural2").val(response.constRural);
		$("#constUrbano2").val(response.constUrbano);
		$("#constTotal2").val(response.constTotal);
		$("#terrRural2").val(response.terrRural);
		$("#terrUrbano2").val(response.terrUrbano);
		$("#terrTotal2").val(response.terrTotal);
		$("#ruralP2").val(response.ruralP);
		$("#urbanoP2").val(response.urbanoP);
		$("#totalP2").val(response.totalP);
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

function calcularTotalG()
{
	var ruralG = $("#ruralG").val();
	var urbanoG = $("#urbanoG").val();
	var totalG= (parseFloat(ruralG) + parseFloat(urbanoG));
	if (ruralG != "" && urbanoG != "") {
		$('#totalG').val(totalG);
	}
}

function calcularConstTotal()
{
	var constRural = $("#constRural").val();
	var constUrbano = $("#constUrbano").val();
	var constTotal= (parseInt(constRural) + parseInt(constUrbano));
	if (constRural != "" && constUrbano != "") {
		$('#constTotal').val(constTotal);
	}
}

function calcularTerrTotal()
{
	var terrRural = $("#terrRural").val();
	var terrUrbano = $("#terrUrbano").val();
	var terrTotal = (parseFloat(terrRural) + parseFloat(terrUrbano));
	if (terrRural != "" && terrUrbano != "") {
		$('#terrTotal').val(terrTotal);
	}
}

function calcularTotalP()
{
	var ruralP = $("#ruralP").val();
	var urbanoP = $("#urbanoP").val();
	var totalP = (parseInt(ruralP) + parseInt(urbanoP));
	if (ruralP != "" && urbanoP != "") {
		$('#totalP').val(totalP);
	}
}

$("#formCrear").on("submit", function()
{
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
	var municipio = $("#municipio").val();

	$.ajax({
		headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
		method: "POST",
		url: "/generalidadesterritorio/crearGeneralidadesterritorio",
		dataType: 'json',
		data: { anioGT: anio,
				comprobar: comprobar,
				temperatura: temperatura,
				alturaNivMar: alturaNivMar,
				municipio_id: municipio,
				ruralG: ruralG,
				urbanoG: urbanoG,
				totalG: totalG,
				constRural: constRural,
				constUrbano: constUrbano,
				constTotal: constTotal,
				terrRural: terrRural,
				terrUrbano: terrUrbano,
				terrTotal: terrTotal,
				ruralP: ruralP,
				urbanoP: urbanoP,
				totalP: totalP }
	})

	.done(function(response) {
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

// Actualizar
function calcularTotalG2()
{
	var ruralG = $("#ruralG2").val();
	var urbanoG = $("#urbanoG2").val();
	var totalG= (parseFloat(ruralG) + parseFloat(urbanoG));
	if (ruralG != "" && urbanoG != "") {
		$('#totalG2').val(totalG);
	}
}

function calcularConstTotal2()
{
	var constRural = $("#constRural2").val();
	var constUrbano = $("#constUrbano2").val();
	var constTotal= (parseInt(constRural) + parseInt(constUrbano));
	if (constRural != "" && constUrbano != "") {
		$('#constTotal2').val(constTotal);
	}
}

function calcularTerrTotal2()
{
	var terrRural = $("#terrRural2").val();
	var terrUrbano = $("#terrUrbano2").val();
	var terrTotal = (parseFloat(terrRural) + parseFloat(terrUrbano));
	if (terrRural != "" && terrUrbano != "") {
		$('#terrTotal2').val(terrTotal);
	}
}

function calcularTotalP2()
{
	var ruralP = $("#ruralP2").val();
	var urbanoP = $("#urbanoP2").val();
	var totalP = (parseInt(ruralP) + parseInt(urbanoP));
	if (ruralP != "" && urbanoP != "") {
		$('#totalP2').val(totalP);
	}
}

$("#formActualizar").on("submit", function()
{
	var idGT = $("#idGT").val();
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

	$.ajax({
		headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
		method: "POST",
		url: "/generalidadesterritorio/actualizarGeneralidadesterritorio",
		dataType: 'json',
		data: { idGT: idGT,
				temperatura: temperatura,
				alturaNivMar: alturaNivMar,
				ruralG: ruralG,
				urbanoG: urbanoG,
				totalG: totalG,
				constRural: constRural,
				constUrbano: constUrbano,
				constTotal: constTotal,
				terrRural: terrRural,
				terrUrbano: terrUrbano,
				terrTotal: terrTotal,
				ruralP: ruralP,
				urbanoP: urbanoP,
				totalP: totalP }
	})

	.done(function(response) {		
		$('#respuesta2').show();
		$('#respuesta2').html(response.html);	
		mostrarDatos();	
	});

	return false;
});