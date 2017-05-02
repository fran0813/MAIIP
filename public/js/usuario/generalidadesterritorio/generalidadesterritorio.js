function mostrarDatos() {

	var municipio = $("#municipio").val();

	$("#crear").show();

	$.ajax({
		method: "POST",
		url: "/js/usuario/generalidadesterritorio/mostrarTablaGeneralidadesterritorio.php",
		dataType: 'json',
		data: { idMunicipio: municipio }
	})

	.done(function(response) {
		$('#tablaGeneralidadesterritorio').html(response);
	});

}

$("#tablaGeneralidadesterritorio").on("click", "a", function(){

	var clase = $(this).attr("class");

	if(clase == "btn btn-success"){

		var id = $(this).attr("id");

		$.ajax({
			method: "POST",
			url: "/js/generalidadesterritorio/mostrarActualizarGeneralidadesterritorio.php",
			dataType: 'json',
			data: { idGT: id }
		})

		.done(function(response) {
			$('#modalGT').html(response);
		});

	}else if(clase == "btn btn-danger"){

		var id = $(this).attr("id");

		$.ajax({
			method: "POST",
			url: "/js/generalidadesterritorio/borrarGeneralidadesterritorio.php",
			dataType: 'json',
			data: { idGT: id }
		})

		.done(function(response) {

			var municipio = $("#municipio").val();

			$.ajax({
				method: "POST",
				url: "/js/usuario/generalidadesterritorio/mostrarTablaGeneralidadesterritorio.php",
				dataType: 'json',
				data: { idMunicipio: municipio }
			})

			.done(function(response) {
				$('#tablaGeneralidadesterritorio').html(response);
			});

		});
	}

});	