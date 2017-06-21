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

$("#formActualizar").on("submit", function(){

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

	var updated_at = $("#updated_at2").val();

	$.ajax({
		method: "GET",
		url: "/salud/actualizarSalud",
		dataType: 'json',
		data: { idS: idS, tasVacBCG: tasVacBCG, tasVacDPT: tasVacDPT, 
			tasVacHepatitisB: tasVacHepatitisB, tasVacHIB: tasVacHIB, tasVacPolio: tasVacPolio, 
			tasVacTripleViral: tasVacTripleViral, difBaMov: difBaMov, 
			difEntApr: difEntApr, difMovCam: difMovCam, difSalirCalle: difSalirCalle, totalDis: totalDis,
			updated_at: updated_at}
	})

	.done(function(response) {
		$('#respuesta2').html(response.html);		
	});

	return false;

}); 