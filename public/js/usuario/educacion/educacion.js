function mostrarDatos() {

	var municipio = $("#municipio").val();

	$("#crear").show();

	$.ajax({
		method: "POST",
		url: "/js/usuario/educacion/mostrarTablaEducacion.php",
		dataType: 'json',
		data: { idMunicipio: municipio }
	})

	.done(function(response) {
		$('#tablaeducacion').html(response);
	});

}

$("#tablaeducacion").on("click", "a", function(){

	var clase = $(this).attr("class");

	if(clase == "btn btn-success"){

		var id = $(this).attr("id");

		$.ajax({
			method: "POST",
			url: "/js/educacion/mostrarActualizarEducacion.php",
			dataType: 'json',
			data: { idE: id }
		})

		.done(function(response) {

			$('#modalE').html(response);
		});

	}else if(clase == "btn btn-danger"){

		var id = $(this).attr("id");

		$.ajax({
			method: "POST",
			url: "/js/educacion/borrarEducacion.php",
			dataType: 'json',
			data: { idE: id }
		})

		.done(function(response) {

			mostrarDatos();

		});
	}

});	