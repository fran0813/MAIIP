function mostrarTablasGT(){
	mostrarTablaGeneralidadesterritorio();
}

function mostrarTablaGeneralidadesterritorio(){

	var municipio = $("#municipio").val();
	var anio = $("#añoGT").val();

	$.ajax({
		method: "GET",
		url: "/generalidadesterritorio/mostrarGeneralidadesterritorio",
		dataType: 'json',
		data: { idMunicipio: municipio, anioGT: anio }
	})

	.done(function(response) {
		$('#generalidadesterritorio').html(response.html);
	});

}