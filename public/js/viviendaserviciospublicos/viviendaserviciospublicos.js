function mostrarTablasVSP(){
	mostrarTablaViviendaserviciospublicos();
	mostrarGrafica1VSP();
	mostrarGrafica2VSP();
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

function mostrarGrafica1VSP(){

	var municipio = $("#municipio").val();
	var anioVSP = $("#añoVSP").val();

	$.ajax({
		method: "POST",
		url: "/js/viviendaserviciospublicos/grafica1Viviendaserviciospublicos.php",
		dataType: 'json',
		data: { idMunicipio: municipio, anioVSP: anioVSP }
	})

	.done(function(response) {
		$('#grafica1').html(response);
	});

}

function mostrarGrafica2VSP(){

	var municipio = $("#municipio").val();
	var anioVSP = $("#añoVSP").val();

	$.ajax({
		method: "POST",
		url: "/js/viviendaserviciospublicos/grafica2Viviendaserviciospublicos.php",
		dataType: 'json',
		data: { idMunicipio: municipio, anioVSP: anioVSP }
	})

	.done(function(response) {
		$('#grafica2').html(response);
	});

}