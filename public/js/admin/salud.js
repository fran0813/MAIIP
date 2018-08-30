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
			url: "/salud/mostrarTablaSalud",
			dataType: 'json',
			data: { idMunicipio: municipio }
		})

		.done(function(response) {
			$('#tablasalud').html(response.html);
		});
	} else {
		$('#tablasalud').html("<center><h3>Porfavor seleccione un <strong>Departamento</strong> y un <strong>Municipio</strong></h3></center>");
	}
}

function mostrarCrear()
{
	$("#crear").show();
	$("#importar").show();
}

$("#tablasalud").on("click", "a", function(){

	var value = $(this).attr("value");
	var id = $(this).attr("id");

	if (value == "editar") {
		mostrarActualizarSalud(id);
	} else if(value == "eliminar") {
		$.ajax({
			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
			method: "GET",
			url: "/salud/borrarSalud",
			dataType: 'json',
			data: { idS: id }
		})

		.done(function(response) {
			mostrarDatos();
		});
	}
});	

function mostrarActualizarSalud(id)
{
	$('#respuesta2').hide();

	$.ajax({
		headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
		method: "POST",
		url: "/salud/mostrarActualizarSalud",
		dataType: 'json',
		data: { idS: id }
	})

	.done(function(response) {console.info(response)
		$("#idS").val(response.id);
		$("#anio2").val(response.anio);

		$("#tasVacBCG2").val(response.tasVacBCG);
		$("#tasVacDPT2").val(response.tasVacDPT);
		$("#tasVacHepatitisB2").val(response.tasVacHepatitisB);
		$("#tasVacHIB2").val(response.tasVacHIB);
		$("#tasVacPolio2").val(response.tasVacPolio);
		$("#tasVacTripleViral2").val(response.tasVacTripleViral);

		$("#difBaMov2").val(response.difBaMov);
		$("#difEntApr2").val(response.difEntApr);
		$("#difMovCam2").val(response.difMovCam);
		$("#difSalirCalle2").val(response.difSalirCalle);
		$("#totalDis2").val(response.totalDis);
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
	var municipio = $("#municipio").val();
	
	$.ajax({
		headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
		method: "POST",
		url: "/salud/crearSalud",
		dataType: 'json',
		data: { anioS: anio,
				comprobar: comprobar,
				tasVacBCG: tasVacBCG,
				tasVacDPT: tasVacDPT,
				tasVacHepatitisB: tasVacHepatitisB,
				tasVacHIB: tasVacHIB,
				tasVacPolio: tasVacPolio,
				tasVacTripleViral: tasVacTripleViral,
				difBaMov: difBaMov,
				difEntApr: difEntApr,
				difMovCam: difMovCam,
				difSalirCalle: difSalirCalle,
				totalDis: totalDis,
				municipio_id: municipio }
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
$("#formActualizar").on("submit", function()
{
	var idS = $("#idS").val();

	var tasVacBCG = $("#tasVacBCG2").val();
	var tasVacDPT = $("#tasVacDPT2").val();
	var tasVacHepatitisB = $("#tasVacHepatitisB2").val();
	var tasVacHIB = $("#tasVacHIB2").val();
	var tasVacPolio= $("#tasVacPolio2").val();
	var tasVacTripleViral = $("#tasVacTripleViral2").val();

	var difBaMov = $("#difBaMov2").val();
	var difEntApr= $("#difEntApr2").val();
	var difMovCam = $("#difMovCam2").val();
	var difSalirCalle = $("#difSalirCalle2").val();
	var totalDis = $("#totalDis2").val();

	$.ajax({
		headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
		method: "POST",
		url: "/salud/actualizarSalud",
		dataType: 'json',
		data: { idS: idS,
				tasVacBCG: tasVacBCG,
				tasVacDPT: tasVacDPT,
				tasVacHepatitisB: tasVacHepatitisB,
				tasVacHIB: tasVacHIB,
				tasVacPolio: tasVacPolio,
				tasVacTripleViral: tasVacTripleViral,
				difBaMov: difBaMov,
				difEntApr: difEntApr,
				difMovCam: difMovCam,
				difSalirCalle: difSalirCalle,
				totalDis: totalDis }
	})

	.done(function(response) {
		$('#respuesta2').show();
		$('#respuesta2').html(response.html);	
		mostrarDatos();			
	});

	return false;
}); 