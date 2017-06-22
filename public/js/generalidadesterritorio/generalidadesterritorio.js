// Muestra los datos y las graficas de las generalidades y territorio
function mostrarTablasGT(){
	mostrarTablaGeneralidadesterritorio();
}

// Muestra los datos de generalidades y territorio en la vista de información
function mostrarTablaGeneralidadesterritorio(){

	var municipio = $("#municipio").val();
	var anio = $("#añoGT").val();

	$.ajax({
		method: "GET",
		url: "/generalidadesterritorio/mostrarGeneralidadesterritorio",
		dataType: 'json',
		data: { idMunicipio: municipio,
				anioGT: anio }
	})

	.done(function(response){
		$('#generalidadesterritorio').html(response.html);
	});

}