function mostrarDatos() {

	var municipio = $("#municipio").val();

	$("#crear").show();

	$.ajax({
		method: "GET",
		url: "/educacion/mostrarTablaEducacion",
		dataType: 'json',
		data: { idMunicipio: municipio }
	})

	.done(function(response) {
		$('#tablaeducacion').html(response.html);
	});

}

$("#tablaeducacion").on("click", "a", function(){

	var clase = $(this).attr("class");

	if(clase == "btn btn-success"){

		var id = $(this).attr("id");

		$.ajax({
			method: "GET",
			url: "/educacion/mostrarActualizarEducacion",
			dataType: 'json',
			data: { idE: id }
		})

		.done(function(response) {

			$('#modalE').html(response.html);
		});

	}else if(clase == "btn btn-danger"){

		var id = $(this).attr("id");

		$.ajax({
			method: "GET",
			url: "/educacion/borrarEducacion",
			dataType: 'json',
			data: { idE: id }
		})

		.done(function(response) {
			mostrarDatos();
		});
	}

});	