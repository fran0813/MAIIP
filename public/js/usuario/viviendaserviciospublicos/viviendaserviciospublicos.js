function mostrarDatos() {

	var municipio = $("#municipio").val();

	$("#crear").show();

	$.ajax({
		method: "GET",
		url: "/viviendaserviciospublicos/mostrarTablaViviendaserviciospublicos",
		dataType: 'json',
		data: { idMunicipio: municipio }
	})

	.done(function(response) {
		$('#tablaviviendaserviciospublicos').html(response.html);
	});

}

$("#tablaviviendaserviciospublicos").on("click", "a", function(){

	var clase = $(this).attr("class");

	if(clase == "btn btn-success"){

		var id = $(this).attr("id");

		$.ajax({
			method: "GET",
			url: "/viviendaserviciospublicos/mostrarActualizarViviendaserviciospublicos",
			dataType: 'json',
			data: { idVSP: id }
		})

		.done(function(response) {
			$('#modalVSP').html(response.html);
		});

	}else if(clase == "btn btn-danger"){

		var id = $(this).attr("id");

		$.ajax({
			method: "GET",
			url: "/viviendaserviciospublicos/borrarViviendaserviciospublicos",
			dataType: 'json',
			data: { idVSP: id }
		})

		.done(function(response) {			
			mostrarDatos();
		});
	}

});	