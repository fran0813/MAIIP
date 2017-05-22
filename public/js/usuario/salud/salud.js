function mostrarDatos() {

	var municipio = $("#municipio").val();

	$("#crear").show();

	$.ajax({
		method: "POST",
		url: "/js/usuario/salud/mostrarTablaSalud.php",
		dataType: 'json',
		data: { idMunicipio: municipio }
	})

	.done(function(response) {
		$('#tablasalud').html(response);
	});

}

$("#tablasalud").on("click", "a", function(){

	var clase = $(this).attr("class");

	if(clase == "btn btn-success"){

		var id = $(this).attr("id");

		$.ajax({
			method: "POST",
			url: "/js/salud/mostrarActualizarSalud.php",
			dataType: 'json',
			data: { idS: id }
		})

		.done(function(response) {
			$('#modalS').html(response);
		});

	}else if(clase == "btn btn-danger"){

		var id = $(this).attr("id");

		$.ajax({
			method: "POST",
			url: "/js/salud/borrarSalud.php",
			dataType: 'json',
			data: { idS: id }
		})

		.done(function(response) {
			mostrarDatos();

		});
	}

});	