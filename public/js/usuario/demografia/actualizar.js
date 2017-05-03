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

	actualizado = $("#updated_at2")[0];
	actualizado.value = yyyy+'-'+mm+'-'+dd;

});

function calcularIndRuralidad2(){

	var pobZonRes = $("#pobZonRes2").val();
	var pobTotal = $("#pobTotal2").val();
	var indRuralidad = (parseInt(pobZonRes) / parseInt(pobTotal) * 100);

	$('#indRuralidad2').val((Math.round(indRuralidad))+"%");

}

function calcularCrecPob2(){

	var anio2 = $("#anio2").val();
	var anio = parseInt(anio2.substr(0,4));
	var pobEdadTrabajar = $("#pobEdadTrabajar2").val();

	$.ajax({
		method: "POST",
		url: "/js/usuario/demografia/calcularCrecPob2.php",
		dataType: 'json',
		data: { anioD: anio, pobEdadTrabajar: pobEdadTrabajar}
	})

	.done(function(response) {

		$('#recibirCrecPob2').html(response);
		
	});

}

$("#formActualizar").on("submit", function(){

	var idD = $("#idD").val();
	var pobEdadTrabajar = $("#pobEdadTrabajar2").val();
	var pobPotActiva = $("#pobPotActiva2").val();
	var pobPotInactiva = $("#pobPotInactiva2").val();
	var numPerMen = $("#numPerMen2").val();
	var numPerMay= $("#numPerMay2").val();
	var numPerInd = $("#numPerInd2").val();
	var numPerDep = $("#numPerDep2").val();
	var pobHom = $("#pobHom2").val();
	var pobMuj = $("#pobMuj2").val();
	var pobZonCab = $("#pobZonCab2").val();
	var pobZonRes = $("#pobZonRes2").val();
	var indRuralidad = $("#indRuralidad2").val();
	var pobTotal = $("#pobTotal2").val();
	var crecPob = $("#crecPob2").val();
	var updated_at = $("#updated_at2").val();

	$.ajax({
		method: "POST",
		url: "/js/demografia/actualizarDemografia.php",
		dataType: 'json',
		data: { idD: idD, pobEdadTrabajar: pobEdadTrabajar, pobPotActiva: pobPotActiva, 
			pobPotInactiva: pobPotInactiva, numPerMen: numPerMen, numPerMay: numPerMay, numPerInd: numPerInd,
			numPerDep: numPerDep, pobHom: pobHom, pobMuj: pobMuj, pobZonCab: pobZonCab, 
			pobZonRes: pobZonRes, indRuralidad: indRuralidad, pobTotal: pobTotal, crecPob: crecPob, 
			updated_at: updated_at}
	})

	.done(function(response) {

		$('#respuesta2').html(response);
		
	});

	return false;

}); 