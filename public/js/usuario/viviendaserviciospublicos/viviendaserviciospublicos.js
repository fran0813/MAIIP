function mostrarDatos() {

	var municipio = $("#municipio").val();

	$("#crear").show();

	$.ajax({
		method: "POST",
		url: "/js/usuario/viviendaserviciospublicos/mostrarTablaViviendaserviciospublicos.php",
		dataType: 'json',
		data: { idMunicipio: municipio }
	})

	.done(function(response) {
		$('#tablaviviendaserviciospublicos').html(response);
	});

}

$("#tablaviviendaserviciospublicos").on("click", "a", function(){

	var clase = $(this).attr("class");

	if(clase == "btn btn-success"){

		var id = $(this).attr("id");

		$.ajax({
			method: "POST",
			url: "/js/viviendaserviciospublicos/mostrarActualizarViviendaserviciospublicos.php",
			dataType: 'json',
			data: { idVSP: id }
		})

		.done(function(response) {
			$('#modalVSP').html(response);
		});

	}else if(clase == "btn btn-danger"){

		var id = $(this).attr("id");

		$.ajax({
			method: "POST",
			url: "/js/viviendaserviciospublicos/borrarViviendaserviciospublicos.php",
			dataType: 'json',
			data: { idVSP: id }
		})

		.done(function(response) {

			mostrarDatos();

		});
	}

});	