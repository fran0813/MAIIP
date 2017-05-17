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

function calcularTotalCabViv(){

	var cabViv = $("#cabViv").val();
	var rurViv = $("#rurViv").val();
	var totalViv= (parseInt(cabViv) + parseInt(rurViv));

	$('#totalViv').val(totalViv);
}

function calcularTotalCabHog(){

	var cabHog = $("#cabHog").val();
	var rurHog = $("#rurHog").val();
	var totalHog= (parseInt(cabHog) + parseInt(rurHog));

	$('#totalHog').val(totalHog);
}

function calcularTotalCabHogViv(){

	var cabHogViv = $("#cabHogViv").val();
	var rurHogViv = $("#rurHogViv").val();
	var totalHogViv= (parseFloat(cabHogViv) + parseFloat(rurHogViv));

	$('#totalHogViv').val(totalHogViv);
}

function calcularTotalCabPerHog(){

	var cabPerHog = $("#cabPerHog").val();
	var rurPerHog = $("#rurPerHog").val();
	var totalPerHog= (parseFloat(cabPerHog) + parseFloat(rurPerHog));

	$('#totalPerHog').val(totalPerHog);
}

function calcularTotalCabPerViv(){

	var cabPerViv = $("#cabPerViv").val();
	var rurPerViv = $("#rurPerViv").val();
	var totalPerViv= (parseFloat(cabPerViv) + parseFloat(rurPerViv));

	$('#totalPerViv').val(totalPerViv);
}

$("#formCrear").on("submit", function(){

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

	var created_at = $("#created_at").val();
	var updated_at = $("#updated_at").val();
	var municipio = $("#municipio").val();

	$.ajax({
		method: "POST",
		url: "/js/viviendaserviciospublicos/crearViviendaserviciospublicos.php",
		dataType: 'json',
		data: { anioVSP: anio, comprobar: comprobar, cabViv: cabViv, cabHog: cabHog, municipio_id: municipio, 
			cabHogViv: cabHogViv, cabPerHog: cabPerHog, cabPerViv: cabPerViv, rurViv: rurViv, rurHog: rurHog, 
			rurHogViv: rurHogViv, rurPerHog: rurPerHog, rurPerViv: rurPerViv, totalViv: totalViv,
			totalHog: totalHog, totalHogViv: totalHogViv, totalPerHog: totalPerHog, totalPerViv: totalPerViv, 
			cabCA: cabCA, centPobCA: centPobCA, rurDispCA: rurDispCA,
			cabCAs: cabCAs, centPobCAs: centPobCAs, rurDispCAs: rurDispCAs,
			cabCG: cabCG, centPobCG: centPobCG, rurDispCG: rurDispCG,
			cabCT: cabCT, centPobCT: centPobCT, rurDispCT: rurDispCT,
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
			url: "/js/usuario/viviendaserviciospublicos/mostrarTablaViviendaserviciospublicos.php",
			dataType: 'json',
			data: { idMunicipio: municipio }
		})

		.done(function(response) {
			$('#tablaviviendaserviciospublicos').html(response);
		});

}