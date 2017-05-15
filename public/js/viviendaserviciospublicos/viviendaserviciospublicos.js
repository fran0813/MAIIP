function mostrarTablasVSP(){
	mostrarTablaViviendaserviciospublicos();
}

function mostrarTablaViviendaserviciospublicos(){

	var municipio = $("#municipio").val();
	var anio = $("#añoVSP").val();

	$.ajax({
		method: "POST",
		url: "/js/viviendaserviciospublicos/mostrarViviendaserviciospublicos.php",
		dataType: 'json',
		data: { idMunicipio: municipio, anioVSP: anio }
	})

	.done(function(response) {
		$('#viviendaserviciospublicos').html(response);
	});

}