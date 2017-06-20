$( document ).ready(function() {
    
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

	actualizado = $("#updated_at2")[0];
	actualizado.value = yyyy+'-'+mm+'-'+dd;

});

function calcularTotalCabViv2(){

	var cabViv = $("#cabViv2").val();
	var rurViv = $("#rurViv2").val();
	var totalViv= (parseInt(cabViv) + parseInt(rurViv));

	$('#totalViv2').val(totalViv);
}

function calcularTotalCabHog2(){

	var cabHog = $("#cabHog2").val();
	var rurHog = $("#rurHog2").val();
	var totalHog= (parseInt(cabHog) + parseInt(rurHog));

	$('#totalHog2').val(totalHog);
}

function calcularTotalCabHogViv2(){

	var cabHogViv = $("#cabHogViv2").val();
	var rurHogViv = $("#rurHogViv2").val();
	var totalHogViv= (parseFloat(cabHogViv) + parseFloat(rurHogViv));

	$('#totalHogViv2').val(totalHogViv);
}

function calcularTotalCabPerHog2(){

	var cabPerHog = $("#cabPerHog2").val();
	var rurPerHog = $("#rurPerHog2").val();
	var totalPerHog= (parseFloat(cabPerHog) + parseFloat(rurPerHog));

	$('#totalPerHog2').val(totalPerHog);
}

function calcularTotalCabPerViv2(){

	var cabPerViv = $("#cabPerViv2").val();
	var rurPerViv = $("#rurPerViv2").val();
	var totalPerViv= (parseFloat(cabPerViv) + parseFloat(rurPerViv));

	$('#totalPerViv2').val(totalPerViv);
}

$("#formActualizar").on("submit", function(){

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

	var updated_at = $("#updated_at2").val();

	$.ajax({
		method: "GET",
		url: "/viviendaserviciospublicos/actualizarViviendaserviciospublicos",
		dataType: 'json',
		data: { idVSP: idVSP, cabViv: cabViv, cabHog: cabHog, 
			cabHogViv: cabHogViv, cabPerHog: cabPerHog, cabPerViv: cabPerViv, rurViv: rurViv, rurHog: rurHog, 
			rurHogViv: rurHogViv, rurPerHog: rurPerHog, rurPerViv: rurPerViv, totalViv: totalViv,
			totalHog: totalHog, totalHogViv: totalHogViv, totalPerHog: totalPerHog, totalPerViv: totalPerViv, 
			cabCA: cabCA, centPobCA: centPobCA, rurDispCA: rurDispCA,
			cabCAs: cabCAs, centPobCAs: centPobCAs, rurDispCAs: rurDispCAs,
			cabCG: cabCG, centPobCG: centPobCG, rurDispCG: rurDispCG,
			cabCT: cabCT, centPobCT: centPobCT, rurDispCT: rurDispCT,
			updated_at: updated_at}
	})

	.done(function(response) {

		$('#respuesta2').html(response.html);
		
	});

	return false;

}); 