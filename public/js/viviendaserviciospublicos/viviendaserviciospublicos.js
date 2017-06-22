// Muestra los datos y las graficas de las vivienda y servicios publicos
function mostrarTablasVSP(){

	mostrarTablaViviendaserviciospublicos();
	mostrarGrafica1VSP();
	mostrarGrafica2VSP();

}

// Muestra los datos de vivienda y servicios publicos en la vista de información
function mostrarTablaViviendaserviciospublicos(){

	var municipio = $("#municipio").val();
	var anio = $("#añoVSP").val();

	$.ajax({
		method: "GET",
		url: "/viviendaserviciospublicos/mostrarViviendaserviciospublicos",
		dataType: 'json',
		data: { idMunicipio: municipio,
				anioVSP: anio }
	})

	.done(function(response){
		$('#viviendaserviciospublicos').html(response.html);
	});

}

// Muestra la grafica de viviendas
function mostrarGrafica1VSP(){

	var municipio = $("#municipio").val();
	var anioVSP = $("#añoVSP").val();

	$.ajax({
		method: "GET",
		url: "/viviendaserviciospublicos/grafica1Viviendaserviciospublicos",
		dataType: 'json',
		data: { idMunicipio: municipio,
				anioVSP: anioVSP }
	})

	.done(function(response){
		$('#grafica1').html(response.html);
	});

}

// Muestra la grafica de coberturas
function mostrarGrafica2VSP(){

	var municipio = $("#municipio").val();
	var anioVSP = $("#añoVSP").val();

	$.ajax({
		method: "GET",
		url: "/viviendaserviciospublicos/grafica2Viviendaserviciospublicos",
		dataType: 'json',
		data: { idMunicipio: municipio,
				anioVSP: anioVSP }
	})

	.done(function(response){
		$('#grafica2').html(response.html);
	});

}