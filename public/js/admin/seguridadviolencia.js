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
			url: "/seguridadviolencia/mostrarTablaSeguridadviolencia",
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
		mostrarActualizarSeguridadviolencia(id);
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

function mostrarActualizarSeguridadviolencia(id)
{
	$('#respuesta2').hide();

	$.ajax({
		headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
		method: "POST",
		url: "/seguridadviolencia/mostrarActualizarSeguridadviolencia",
		dataType: 'json',
		data: { idSV: id }
	})

	.done(function(response) {
		$("#idD").val(response.id);
		$("#anio2").val(response.anio);
		$("tasDesEscTot2").val(response.tasDesEscTot);
		$("tasHom2").val(response.tasHom);
		$("tasIncDen2").val(response.tasIncDen);
		$("tasLesPer2").val(response.tasLesPer);
		$("tasMueAcc2").val(response.tasMueAcc);
		$("tasSui2").val(response.tasSui);
		$("vioInt2").val(response.vioInt);
		$("casTot2").val(response.casTot);
		$("casTasHom2").val(response.casTasHom);
		$("tot2").val(response.tot);
		$("hom2").val(response.tot);
		$("muj2").val(response.muj);
		$("fatTot2").val(response.fatTot);
		$("fatHom2").val(response.fatHom);
		$("fatMuj2").val(response.fatMuj);
		$("noFatTot2").val(response.noFatTot);
		$("noFatHom2").val(response.noFatHom);
		$("noFatMuj2").val(response.noFatMuj);
		$("may2").val(response.may);
		$("otrFam2").val(response.otrFam);
		$("inf2").val(response.inf);
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
	var tasDesEscTot = $("tasDesEscTot").val();
	var tasHom = $("tasHom").val();
	var tasIncDen = $("tasIncDen").val();
	var tasLesPer = $("tasLesPer").val();
	var tasMueAcc = $("tasMueAcc").val();
	var tasSui = $("tasSui").val();
	var vioInt = $("vioInt").val();
	var casTot = $("casTot").val();
	var casTasHom = $("casTasHom").val();
	var tot = $("tot").val();
	var hom = $("hom").val();
	var muj = $("muj").val();
	var fatTot = $("fatTot").val();
	var fatHom = $("fatHom").val();
	var fatMuj = $("fatMuj").val();
	var noFatTot = $("noFatTot").val();
	var noFatHom = $("noFatHom").val();
	var noFatMuj = $("noFatMuj").val();
	var may = $("may").val();
	var otrFam = $("otrFam").val();
	var inf = $("inf").val();
	var municipio = $("#municipio").val();

	$.ajax({
		headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
		method: "POST",
		url: "/seguridadviolencia/crearSeguridadviolencia",
		dataType: 'json',
		data: { anioD: anio,
				comprobar: comprobar,
				municipio_id: municipio,
				tasDesEscTot: tasDesEscTot,
				tasHom: tasHom,
				tasIncDen: tasIncDen,
				tasLesPer: tasLesPer,
				tasMueAcc: tasMueAcc,
				tasSui: tasSui,
				vioInt: vioInt,
				casTot: casTot,
				casTasHom: casTasHom,
				tot: tot,
				hom: hom,
				muj: muj,
				fatTot: fatTot,
				fatHom: fatHom,
				fatMuj: fatMuj,
				noFatTot: noFatTot,
				noFatHom: noFatHom,
				noFatMuj: noFatMuj,
				may: may,
				otrFam: otrFam,
				inf: inf, }
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
	var tasDesEscTot = $("tasDesEscTot").val();
	var tasHom = $("tasHom").val();
	var tasIncDen = $("tasIncDen").val();
	var tasLesPer = $("tasLesPer").val();
	var tasMueAcc = $("tasMueAcc").val();
	var tasSui = $("tasSui").val();
	var vioInt = $("vioInt").val();
	var casTot = $("casTot").val();
	var casTasHom = $("casTasHom").val();
	var tot = $("tot").val();
	var hom = $("hom").val();
	var muj = $("muj").val();
	var fatTot = $("fatTot").val();
	var fatHom = $("fatHom").val();
	var fatMuj = $("fatMuj").val();
	var noFatTot = $("noFatTot").val();
	var noFatHom = $("noFatHom").val();
	var noFatMuj = $("noFatMuj").val();
	var may = $("may").val();
	var otrFam = $("otrFam").val();
	var inf = $("inf").val();

	$.ajax({
		headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
		method: "POST",
		url: "/seguridadviolencia/actualizarSeguridadviolencia",
		dataType: 'json',
		data: { idD: idD,
				tasDesEscTot: tasDesEscTot,
				tasHom: tasHom,
				tasIncDen: tasIncDen,
				tasLesPer: tasLesPer,
				tasMueAcc: tasMueAcc,
				tasSui: tasSui,
				vioInt: vioInt,
				casTot: casTot,
				casTasHom: casTasHom,
				tot: tot,
				hom: hom,
				muj: muj,
				fatTot: fatTot,
				fatHom: fatHom,
				fatMuj: fatMuj,
				noFatTot: noFatTot,
				noFatHom: noFatHom,
				noFatMuj: noFatMuj,
				may: may,
				otrFam: otrFam,
				inf: inf, }
	})

	.done(function(response) {
		$('#respuesta2').show();
		$('#respuesta2').html(response.html);	
		mostrarDatos();	
	});

	return false;
}); 