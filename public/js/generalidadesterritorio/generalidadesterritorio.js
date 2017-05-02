function mostrarTablas(){
	mostrarTablaGeneralidadesterritorio();
}

function mostrarTablaGeneralidadesterritorio(){

	var municipio = $("#municipio").val();
	var anio = $("#añoGT").val();

	$.ajax({
		method: "POST",
		url: "/js/generalidadesterritorio/mostrarGeneralidadesterritorio.php",
		dataType: 'json',
		data: { idMunicipio: municipio, anioGT: anio }
	})

	.done(function(response) {
		$('#generalidadesterritorio').html(response);
	});

}