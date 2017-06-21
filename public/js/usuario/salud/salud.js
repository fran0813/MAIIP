function mostrarDatos() {

	var municipio = $("#municipio").val();

	$("#crear").show();

	$.ajax({
		method: "GET",
		url: "/salud/mostrarTablaSalud",
		dataType: 'json',
		data: { idMunicipio: municipio }
	})

	.done(function(response) {
		$('#tablasalud').html(response.html);
	});

}

$("#tablasalud").on("click", "a", function(){

	var clase = $(this).attr("class");

	if(clase == "btn btn-success"){

		var id = $(this).attr("id");

		$.ajax({
			method: "GET",
			url: "/salud/mostrarActualizarSalud",
			dataType: 'json',
			data: { idS: id }
		})

		.done(function(response) {
			$('#modalS').html(response.html);
		});

	}else if(clase == "btn btn-danger"){

		var id = $(this).attr("id");

		$.ajax({
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