function mostrarTablas(){
	mostrarTablaDem();
}

function mostrarTablaDem(){

	var mun = $("#mun").val();

	$.ajax({
		method: "POST",
		url: "/js/mostrarTablaDemografia.php",
		dataType: 'json',
		data: { idmun: mun }
	})

	.done(function(response) {
		$('#demografias').html(response);
	});

}