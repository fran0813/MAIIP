function mostrarTablas(){
	mostrarTablaGeneralidadesterritorio();
}

function mostrarTablaGeneralidadesterritorio(){

	var municipio = $("#municipio").val();

	$.ajax({
		method: "POST",
		url: "/js/generalidadesterritorio/mostrarGeneralidadesterritorio.php",
		dataType: 'json',
		data: { idMunicipio: municipio }
	})

	.done(function(response) {
		$('#generalidadesterritorio').html(response);
	});

}