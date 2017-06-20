function mostrarDatos() {

	var municipio = $("#municipio").val();

	$("#crear").show();

	$.ajax({
		method: "GET",
		url: "/generalidadesterritorio/mostrarTablaGeneralidadesterritorio",
		dataType: 'json',
		data: { idMunicipio: municipio }
	})

	.done(function(response) {
		$('#tablaGeneralidadesterritorio').html(response.html);
	});

}

$("#tablaGeneralidadesterritorio").on("click", "a", function(){

	var clase = $(this).attr("class");

	if(clase == "btn btn-success"){

		var id = $(this).attr("id");

		$.ajax({
			method: "GET",
			url: "/generalidadesterritorio/mostrarActualizarGeneralidadesterritorio",
			dataType: 'json',
			data: { idGT: id }
		})

		.done(function(response) {
			$('#modalGT').html(response.html);
		});

	}else if(clase == "btn btn-danger"){

		var id = $(this).attr("id");

		$.ajax({
			method: "GET",
			url: "/generalidadesterritorio/borrarGeneralidadesterritorio",
			dataType: 'json',
			data: { idGT: id }
		})

		.done(function(response) {
			mostrarDatos();
		});
	}

});	