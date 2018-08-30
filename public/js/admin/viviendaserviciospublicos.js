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
			url: "/viviendaserviciospublicos/mostrarTablaViviendaserviciospublicos",
			dataType: 'json',
			data: { idMunicipio: municipio }
		})

		.done(function(response) {
			$('#tablaviviendaserviciospublicos').html(response.html);
		});
	} else {
		$('#tablaviviendaserviciospublicos').html("<center><h3>Porfavor seleccione un <strong>Departamento</strong> y un <strong>Municipio</strong></h3></center>");
	}
}

function mostrarCrear()
{
	$("#crear").show();
	$("#importar").show();
}

$("#tablaviviendaserviciospublicos").on("click", "a", function()
{
	var value = $(this).attr("value");
	var id = $(this).attr("id");

	if (value == "editar") {
		mostrarActualizarViviendaserviciospublicos(id);
	} else if(value == "eliminar") {
		// $.ajax({
		// 	headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
		// 	method: "GET",
		// 	url: "/viviendaserviciospublicos/borrarViviendaserviciospublicos",
		// 	dataType: 'json',
		// 	data: { idVSP: id }
		// })

		// .done(function(response) {			
		// 	mostrarDatos();
		// });
	}
});	

function mostrarActualizarViviendaserviciospublicos(id)
{
	$('#respuesta2').hide();

	$.ajax({
		headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
		method: "POST",
		url: "/viviendaserviciospublicos/mostrarActualizarViviendaserviciospublicos",
		dataType: 'json',
		data: { idVSP: id }
	})

	.done(function(response) {
		$("#idVSP").val(response.id);
		$("#anio2").val(response.anio);

		$("#cabViv2").val(response.cabViv);
		$("#cabHog2").val(response.cabHog);
		$("#cabHogViv2").val(response.cabHogViv);
		$("#cabPerHog2").val(response.cabPerHog);
		$("#cabPerViv2").val(response.cabPerViv);
		$("#rurViv2").val(response.rurViv);
		$("#rurHog2").val(response.rurHog);
		$("#rurHogViv2").val(response.rurHogViv);
		$("#rurPerHog2").val(response.rurPerHog);
		$("#rurPerViv2").val(response.rurPerViv);
		$("#totalViv2").val(response.totalViv);
		$("#totalHog2").val(response.totalHog);
		$("#totalHogViv2").val(response.totalHogViv);
		$("#totalPerHog2").val(response.totalPerHog);
		$("#totalPerViv2").val(response.totalPerViv);

		$("#cabCA2").val(response.cabCA);
		$("#centPobCA2").val(response.centPobCA);
		$("#rurDispCA2").val(response.rurDispCA);

		$("#cabCAs2").val(response.cabCAs);
		$("#centPobCAs2").val(response.centPobCAs);
		$("#rurDispCAs2").val(response.rurDispCAs);

		$("#cabCG2").val(response.cabCG);
		$("#centPobCG2").val(response.centPobCG);
		$("#rurDispCG2").val(response.rurDispCG);

		$("#cabCT2").val(response.cabCT);
		$("#centPobCT2").val(response.centPobCT);
		$("#rurDispCT2").val(response.rurDispCT);
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

function calcularTotalCabViv()
{
	var cabViv = $("#cabViv").val();
	var rurViv = $("#rurViv").val();
	var totalViv= (parseInt(cabViv) + parseInt(rurViv));
	if (cabViv != "" && rurViv != "") {
		$('#totalViv').val(totalViv);
	}
}

function calcularTotalCabHog()
{
	var cabHog = $("#cabHog").val();
	var rurHog = $("#rurHog").val();
	var totalHog= (parseInt(cabHog) + parseInt(rurHog));
	if (cabHog != "" && rurHog != "") {
		$('#totalHog').val(totalHog);
	}	
}

function calcularTotalCabHogViv()
{
	var cabHogViv = $("#cabHogViv").val();
	var rurHogViv = $("#rurHogViv").val();
	var totalHogViv= (parseFloat(cabHogViv) + parseFloat(rurHogViv));
	if (cabHogViv != "" && rurHogViv != "") {
		$('#totalHogViv').val(totalHogViv);
	}	
}

function calcularTotalCabPerHog()
{
	var cabPerHog = $("#cabPerHog").val();
	var rurPerHog = $("#rurPerHog").val();
	var totalPerHog= (parseFloat(cabPerHog) + parseFloat(rurPerHog));
	if (cabPerHog != "" && rurPerHog != "") {
		$('#totalPerHog').val(totalPerHog);
	}	
}

function calcularTotalCabPerViv()
{
	var cabPerViv = $("#cabPerViv").val();
	var rurPerViv = $("#rurPerViv").val();
	var totalPerViv= (parseFloat(cabPerViv) + parseFloat(rurPerViv));
	if (cabPerViv != "" && rurPerViv != "") {
		$('#totalPerViv').val(totalPerViv);
	}	
}

$("#formCrear").on("submit", function()
{
	var anio = $("#anio").val();
	var comprobar = parseInt(anio.substr(0,4));

	var cabViv = $("#cabViv").val();
	var cabHog = $("#cabHog").val();
	var cabHogViv = $("#cabHogViv").val();
	var cabPerHog = $("#cabPerHog").val();
	var cabPerViv= $("#cabPerViv").val();
	var rurViv = $("#rurViv").val();
	var rurHog = $("#rurHog").val();
	var rurHogViv= $("#rurHogViv").val();
	var rurPerHog = $("#rurPerHog").val();
	var rurPerViv = $("#rurPerViv").val();
	var totalViv = $("#totalViv").val();
	var totalHog = $("#totalHog").val();
	var totalHogViv = $("#totalHogViv").val();
	var totalPerHog = $("#totalPerHog").val();
	var totalPerViv = $("#totalPerViv").val();

	var cabCA = $("#cabCA").val();
	var centPobCA = $("#centPobCA").val();
	var rurDispCA = $("#rurDispCA").val();

	var cabCAs = $("#cabCAs").val();
	var centPobCAs = $("#centPobCAs").val();
	var rurDispCAs = $("#rurDispCAs").val();

	var cabCG = $("#cabCG").val();
	var centPobCG = $("#centPobCG").val();
	var rurDispCG = $("#rurDispCG").val();

	var cabCT = $("#cabCT").val();
	var centPobCT = $("#centPobCT").val();
	var rurDispCT = $("#rurDispCT").val();
	var municipio = $("#municipio").val();

	$.ajax({
		headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
		method: "POST",
		url: "/viviendaserviciospublicos/crearViviendaserviciospublicos",
		dataType: 'json',
		data: { anioVSP: anio,
			comprobar: comprobar,
			cabViv: cabViv,
			cabHog: cabHog,
			municipio_id: municipio,			
			cabHogViv: cabHogViv,
			cabPerHog: cabPerHog,
			cabPerViv: cabPerViv,
			rurViv: rurViv,
			rurHog: rurHog,
			rurHogViv: rurHogViv,
			rurPerHog: rurPerHog,
			rurPerViv: rurPerViv,
			totalViv: totalViv,
			totalHog: totalHog,
			totalHogViv: totalHogViv,
			totalPerHog: totalPerHog,
			totalPerViv: totalPerViv,
			cabCA: cabCA,
			centPobCA: centPobCA,
			rurDispCA: rurDispCA,
			cabCAs: cabCAs,
			centPobCAs: centPobCAs,
			rurDispCAs: rurDispCAs,
			cabCG: cabCG,
			centPobCG: centPobCG,
			rurDispCG: rurDispCG,
			cabCT: cabCT,
			centPobCT: centPobCT,
			rurDispCT: rurDispCT }
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
function calcularTotalCabViv2()
{
	var cabViv = $("#cabViv2").val();
	var rurViv = $("#rurViv2").val();
	var totalViv= (parseInt(cabViv) + parseInt(rurViv));
	if (cabViv != "" && rurViv != "") {
		$('#totalViv2').val(totalViv);
	}
}

function calcularTotalCabHog2()
{
	var cabHog = $("#cabHog2").val();
	var rurHog = $("#rurHog2").val();
	var totalHog= (parseInt(cabHog) + parseInt(rurHog));
	if (cabHog != "" && rurHog != "") {
		$('#totalHog2').val(totalHog);
	}	
}

function calcularTotalCabHogViv2()
{
	var cabHogViv = $("#cabHogViv2").val();
	var rurHogViv = $("#rurHogViv2").val();
	var totalHogViv= (parseFloat(cabHogViv) + parseFloat(rurHogViv));
	if (cabHogViv != "" && rurHogViv != "") {
		$('#totalHogViv2').val(totalHogViv);
	}	
}

function calcularTotalCabPerHog2()
{
	var cabPerHog = $("#cabPerHog2").val();
	var rurPerHog = $("#rurPerHog2").val();
	var totalPerHog= (parseFloat(cabPerHog) + parseFloat(rurPerHog));
	if (cabPerHog != "" && rurPerHog != "") {
		$('#totalPerHog2').val(totalPerHog);
	}	
}

function calcularTotalCabPerViv2()
{
	var cabPerViv = $("#cabPerViv2").val();
	var rurPerViv = $("#rurPerViv2").val();
	var totalPerViv= (parseFloat(cabPerViv) + parseFloat(rurPerViv));
	if (cabPerViv != "" && rurPerViv != "") {
		$('#totalPerViv2').val(totalPerViv);
	}	
}

$("#formActualizar").on("submit", function()
{
	var idVSP = $("#idVSP").val();

	var cabViv = $("#cabViv2").val();
	var cabHog = $("#cabHog2").val();
	var cabHogViv = $("#cabHogViv2").val();
	var cabPerHog = $("#cabPerHog2").val();
	var cabPerViv= $("#cabPerViv2").val();
	var rurViv = $("#rurViv2").val();
	var rurHog = $("#rurHog2").val();
	var rurHogViv= $("#rurHogViv2").val();
	var rurPerHog = $("#rurPerHog2").val();
	var rurPerViv = $("#rurPerViv2").val();
	var totalViv = $("#totalViv2").val();
	var totalHog = $("#totalHog2").val();
	var totalHogViv = $("#totalHogViv2").val();
	var totalPerHog = $("#totalPerHog2").val();
	var totalPerViv = $("#totalPerViv2").val();

	var cabCA = $("#cabCA2").val();
	var centPobCA = $("#centPobCA2").val();
	var rurDispCA = $("#rurDispCA2").val();

	var cabCAs = $("#cabCAs2").val();
	var centPobCAs = $("#centPobCAs2").val();
	var rurDispCAs = $("#rurDispCAs2").val();

	var cabCG = $("#cabCG2").val();
	var centPobCG = $("#centPobCG2").val();
	var rurDispCG = $("#rurDispCG2").val();

	var cabCT = $("#cabCT2").val();
	var centPobCT = $("#centPobCT2").val();
	var rurDispCT = $("#rurDispCT2").val();

	$.ajax({
		headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
		method: "POST",
		url: "/viviendaserviciospublicos/actualizarViviendaserviciospublicos",
		dataType: 'json',
		data: { idVSP: idVSP,
				cabViv: cabViv,
				cabHog: cabHog,				
				cabHogViv: cabHogViv,
				cabPerHog: cabPerHog,
				cabPerViv: cabPerViv,
				rurViv: rurViv,
				rurHog: rurHog,
				rurHogViv: rurHogViv,
				rurPerHog: rurPerHog,
				rurPerViv: rurPerViv,
				totalViv: totalViv,
				totalHog: totalHog,
				totalHogViv: totalHogViv,
				totalPerHog: totalPerHog,
				totalPerViv: totalPerViv,
				cabCA: cabCA,
				centPobCA: centPobCA,
				rurDispCA: rurDispCA,
				cabCAs: cabCAs,
				centPobCAs: centPobCAs,
				rurDispCAs: rurDispCAs,
				cabCG: cabCG,
				centPobCG: centPobCG,
				rurDispCG: rurDispCG,
				cabCT: cabCT,
				centPobCT: centPobCT,
				rurDispCT: rurDispCT }
	})

	.done(function(response) {
		$('#respuesta2').show();
		$('#respuesta2').html(response.html);	
		mostrarDatos();	
	});

	return false;
}); 