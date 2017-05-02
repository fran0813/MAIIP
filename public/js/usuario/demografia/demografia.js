function mostrarDatos() {

	var municipio = $("#municipio").val();

	$("#crear").show();

	$.ajax({
		method: "POST",
		url: "/js/usuario/demografia/mostrarTablaDemografia.php",
		dataType: 'json',
		data: { idMunicipio: municipio }
	})

	.done(function(response) {
		$('#tablaDemografia').html(response);
	});

}

$("#tablaDemografia").on("click", "a", function(){

	var clase = $(this).attr("class");

	if(clase == "btn btn-success"){

		var id = $(this).attr("id");

		$.ajax({
			method: "POST",
			url: "/js/demografia/mostrarActualizarDemografia.php",
			dataType: 'json',
			data: { idD: id }
		})

		.done(function(response) {
			$('#modalD').html(response);
		});

	}else if(clase == "btn btn-danger"){

		var id = $(this).attr("id");

		$.ajax({
			method: "POST",
			url: "/js/demografia/borrarDemografia.php",
			dataType: 'json',
			data: { idD: id }
		})

		.done(function(response) {

			mostrarDatos();

		});
	}

});	