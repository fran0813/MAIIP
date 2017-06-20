function mostrarDatos() {

	var municipio = $("#municipio").val();

	$("#crear").show();

	$.ajax({
		method: "GET",
		url: "/demografia/mostrarTablaDemografia",
		dataType: 'json',
		data: { idMunicipio: municipio }
	})

	.done(function(response) {
		$('#tablaDemografia').html(response.html);
	});

}

$("#tablaDemografia").on("click", "a", function(){

	var clase = $(this).attr("class");

	if(clase == "btn btn-success"){

		var id = $(this).attr("id");

		$('#respuesta2').html(" ");

		$.ajax({
			method: "GET",
			url: "/demografia/mostrarActualizarDemografia",
			dataType: 'json',
			data: { idD: id }
		})

		.done(function(response) {
			$('#modalD').html(response.html);
		});

	}else if(clase == "btn btn-danger"){

		var id = $(this).attr("id");

		$.ajax({
			method: "GET",
			url: "/demografia/borrarDemografia",
			dataType: 'json',
			data: { idD: id }
		})

		.done(function(response) {
			mostrarDatos();
		});
	}

});	