function mostrarTablas(){
	mostrarTablaGT();
	mostrarTablaP();
	mostrarTablaG();
	mostrarTablaT();
}

function mostrarTablaGT(){

	var mun = $("#mun").val();

	$.ajax({
		method: "POST",
		url: "/js/mostrarTablaGT.php",
		dataType: 'json',
		data: { idmun: mun }
	})

	.done(function(response) {
		$('#datos').html(response);
	});

}

function mostrarTablaP(){

	var mun = $("#mun").val();

	$.ajax({
		method: "POST",
		url: "/js/mostrarTablaPredio.php",
		dataType: 'json',
		data: { idmun: mun }
	})

	.done(function(response) {
		$('#predios').html(response);
	});

}

function mostrarTablaG(){

	var mun = $("#mun").val();

	$.ajax({
		method: "POST",
		url: "/js/mostrarTablaGeneralidad.php",
		dataType: 'json',
		data: { idmun: mun }
	})

	.done(function(response) {
		$('#generalidades').html(response);
	});

}

function mostrarTablaT(){

	var mun = $("#mun").val();

	$.ajax({
		method: "POST",
		url: "/js/mostrarTablaTerritorio.php",
		dataType: 'json',
		data: { idmun: mun }
	})

	.done(function(response) {
		$('#territorios').html(response);
	});

}