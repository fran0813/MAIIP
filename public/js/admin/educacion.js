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
			url: "/educacion/mostrarTablaEducacion",
			dataType: 'json',
			data: { idMunicipio: municipio }
		})

		.done(function(response) {
			$('#tablaeducacion').html(response.html);
		});
	} else {
		$('#tablaeducacion').html("<center><h3>Porfavor seleccione un <strong>Departamento</strong> y un <strong>Municipio</strong></h3></center>");
	}
}

function mostrarCrear()
{
	$("#crear").show();
	$("#importar").show();
}

$("#tablaeducacion").on("click", "a", function()
{
	var value = $(this).attr("value");
	var id = $(this).attr("id");

	if (value == "editar") {
		mostrarActualizarEducacion(id);
	} else if(value == "eliminar") {
		// $.ajax({
		// 	headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
		// 	method: "GET",
		// 	url: "/educacion/borrarEducacion",
		// 	dataType: 'json',
		// 	data: { idE: id }
		// })

		// .done(function(response) {
		// 	mostrarDatos();
		// });
	}
});	

function mostrarActualizarEducacion(id)
{
	$('#respuesta2').hide();

	$.ajax({
		headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
		method: "POST",
		url: "/educacion/mostrarActualizarEducacion",
		dataType: 'json',
		data: { idE: id }
	})

	.done(function(response) {
		$("#idE").val(response.id);
		$("#anio2").val(response.anio);
		$("#rurJardin2").val(response.rurJardin);
		$("#urbJardin2").val(response.urbJardin);
		$("#rurTrans2").val(response.rurTrans);
		$("#urbTrans2").val(response.urbTrans);
		$("#rurPrim2").val(response.rurPrim);
		$("#urbPrim2").val(response.urbPrim);
		$("#rurSecu2").val(response.rurSecu);
		$("#urbSecu2").val(response.urbSecu);
		$("#rurMedia2").val(response.rurMedia);
		$("#urbMedia2").val(response.urbMedia);
		$("#jardin2").val(response.jardin);
		$("#trans2").val(response.trans);
		$("#prim2").val(response.prim);
		$("#secu2").val(response.secu);
		$("#media2").val(response.media);
		$("#femenino2").val(response.femenino);
		$("#masculino2").val(response.masculino);
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

function calcularJardin()
{
	var rurJardin = $("#rurJardin").val();
	var urbJardin = $("#urbJardin").val();
	var jardin = (parseInt(rurJardin) + parseInt(urbJardin));
	if (rurJardin != "" && urbJardin != "") {
		$('#jardin').val(jardin);
	}
}

function calcularTransicion()
{
	var rurTrans = $("#rurTrans").val();
	var urbTrans = $("#urbTrans").val();
	var trans = (parseInt(rurTrans) + parseInt(urbTrans));
	if (rurTrans != "" && urbTrans != "") {
		$('#trans').val(trans);
	}
}

function calcularPrimaria()
{
	var rurPrim = $("#rurPrim").val();
	var urbPrim = $("#urbPrim").val();
	var prim = (parseInt(rurPrim) + parseInt(urbPrim));
	if (rurPrim != "" && urbPrim != "") {
		$('#prim').val(prim);
	}
}

function calcularSecundaria()
{
	var rurSecu = $("#rurSecu").val();
	var urbSecu = $("#urbSecu").val();
	var secu = (parseInt(rurSecu) + parseInt(urbSecu));
	if (rurSecu != "" && urbSecu != "") {
		$('#secu').val(secu);
	}
}

function calcularMedia()
{
	var rurMedia = $("#rurMedia").val();
	var urbMedia = $("#urbMedia").val();
	var media = (parseInt(rurMedia) + parseInt(urbMedia));
	if (rurMedia != "" && urbMedia != "") {
		$('#media').val(media);
	}
}

function validarGenero()
{
	var jardin = $("#jardin").val();
	var trans = $("#trans").val();
	var prim = $("#prim").val();
	var secu = $("#secu").val();
	var media = $("#media").val();
	var validar = (parseInt(jardin) + parseInt(trans) + parseInt(prim) + parseInt(secu) + parseInt(media));

	var femenino = $("#femenino").val();
	var masculino = $("#masculino").val();
	var total = (parseInt(femenino) + parseInt(masculino));

	if (jardin != "" && trans != "" && prim != "" && secu != "" && media != "" && femenino != "" && masculino != "") {
		if(total > validar || total < validar){
			$('#respuesta').show();
			$('#respuesta').html("<p>El numero de matriculas no coinciden con el número de matriculados por genero</p>");
		}else{
			$('#respuesta').hide();
		}
	}	
}

$("#formCrear").on("submit", function()
{
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

	var municipio = $("#municipio").val();

	var validar = (parseInt(jardin) + parseInt(trans) + parseInt(prim) + parseInt(secu) + parseInt(media));

	var total = (parseInt(femenino) + parseInt(masculino));

	if (total > validar || total < validar) {
		$('#respuesta').show();
		$('#respuesta').html("<p>El numero de matriculas no coinciden con el numero de matriculados por genero</p>");		
	} else {
		$.ajax({
			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
			method: "POST",
			url: "/educacion/crearEducacion",
			dataType: 'json',
			data: { anioE: anio,
					comprobar: comprobar,
					rurJardin: rurJardin,
					urbJardin: urbJardin,
					rurTrans: rurTrans,
					urbTrans: urbTrans,
					rurPrim: rurPrim,
					urbPrim: urbPrim,
					rurSecu: rurSecu,
					urbSecu: urbSecu,
					rurMedia: rurMedia,
					urbMedia: urbMedia,
					jardin: jardin,
					trans: trans,
					prim: prim,
					secu: secu,
					media: media,
					femenino: femenino,
					masculino: masculino,
					municipio_id: municipio }
		})

		.done(function(response) {
			$('#respuesta').show();
			$('#respuesta').html(response.html);
			mostrarDatos();				
		});
	}

	return false;
}); 

function limpiarRespuesta()
{
	$('#respuesta').hide();
}

// Actualizar
function calcularJardin2()
{
	var rurJardin = $("#rurJardin2").val();
	var urbJardin = $("#urbJardin2").val();
	var jardin = (parseInt(rurJardin) + parseInt(urbJardin));
	if (rurJardin != "" && urbJardin != "") {
		$('#jardin2').val(jardin);
	}
}

function calcularTransicion2()
{
	var rurTrans = $("#rurTrans2").val();
	var urbTrans = $("#urbTrans2").val();
	var trans = (parseInt(rurTrans) + parseInt(urbTrans));
	if (rurTrans != "" && urbTrans != "") {
		$('#trans2').val(trans);
	}
}

function calcularPrimaria2()
{
	var rurPrim = $("#rurPrim2").val();
	var urbPrim = $("#urbPrim2").val();
	var prim = (parseInt(rurPrim) + parseInt(urbPrim));
	if (rurPrim != "" && urbPrim != "") {
		$('#prim2').val(prim);
	}
}

function calcularSecundaria2()
{
	var rurSecu = $("#rurSecu2").val();
	var urbSecu = $("#urbSecu2").val();
	var secu = (parseInt(rurSecu) + parseInt(urbSecu));
	if (rurSecu != "" && urbSecu != "") {
		$('#secu2').val(secu);
	}
}

function calcularMedia2()
{
	var rurMedia = $("#rurMedia2").val();
	var urbMedia = $("#urbMedia2").val();
	var media = (parseInt(rurMedia) + parseInt(urbMedia));
	if (rurMedia != "" && urbMedia != "") {
		$('#media2').val(media);
	}
}

function validarGenero2()
{
	var jardin = $("#jardin2").val();
	var trans = $("#trans2").val();
	var prim = $("#prim2").val();
	var secu = $("#secu2").val();
	var media = $("#media2").val();
	var validar = (parseInt(jardin) + parseInt(trans) + parseInt(prim) + parseInt(secu) + parseInt(media));

	var femenino = $("#femenino2").val();
	var masculino = $("#masculino2").val();
	var total = (parseInt(femenino) + parseInt(masculino));

	if (jardin != "" && trans != "" && prim != "" && secu != "" && media != "" && femenino != "" && masculino != "") {
		if(total > validar || total < validar){
			$('#respuesta2').show();
			$('#respuesta2').html("<p>El numero de matriculas no coinciden con el número de matriculados por genero</p>");
		}else{
			$('#respuesta2').hide();
		}
	}	
}

$("#formActualizar").on("submit", function()
{
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

	var validar = (parseInt(jardin) + parseInt(trans) + parseInt(prim) + parseInt(secu) + parseInt(media));

	var total = (parseInt(femenino) + parseInt(masculino));

	if(total > validar || total < validar){
		$('#respuesta').show();
		$('#respuesta').html("<p>El numero de matriculas no coinciden con el numero de matriculados por genero</p>");
	}else{
		$.ajax({
			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
			method: "POST",
			url: "/educacion/actualizarEducacion",
			dataType: 'json',
			data: { idE: idE,
					rurJardin: rurJardin,
					urbJardin: urbJardin,
					rurTrans: rurTrans,
					urbTrans: urbTrans,
					rurPrim: rurPrim,
					urbPrim: urbPrim,
					rurSecu: rurSecu,
					urbSecu: urbSecu,
					rurMedia: rurMedia,
					urbMedia: urbMedia,
					jardin: jardin,
					trans: trans,
					prim: prim,
					secu: secu,
					media: media,
					femenino: femenino,
					masculino: masculino }
		})

		.done(function(response) {
			console.info(response)
			$('#respuesta2').show();
			$('#respuesta2').html(response.html);	
			mostrarDatos();		
		});	
	}

	return false;
}); 