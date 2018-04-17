function mostrarTablasVSP()
{
	mostrarTablaViviendaserviciospublicos();	
}

function mostrarTablaViviendaserviciospublicos(){

	var municipio = $("#municipio").val();
	var anio = $("#añoVSP").val();
	var departamento = $("#departamento").val();

	if (municipio != "Seleccione un municipio" && departamento != "Seleccione un departamento" && anio != "Año") {
		$.ajax({
			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
			method: "GET",
			url: "/viviendaserviciospublicos/mostrarViviendaserviciospublicos",
			dataType: 'json',
			data: { idMunicipio: municipio,
					anioVSP: anio }
		})

		.done(function(response){
			$('#viviendaserviciospublicos').html(response.html);
			mostrarGrafica1VSP();
			mostrarGrafica2VSP();
		});
	} else {
		$('#grafica1').hide();
		$('#grafica2').hide();
		$('#viviendaserviciospublicos').html("<div class='col-sm-12 col-md-12 col-lg-12'>"+

											"<table class='table table-bordered table-hover'>"+
											"<thead class='thead-s'>"+
											"<tr>"+
											"<th>Datos</th>"+
											"<th>Cabecera</th>"+
											"<th>Rural</th>"+
											"<th>Total</th>"+
											"</tr>"+
											"</thead>"+
											"<tbody>"+
											"<tr class='border-dotted'>"+
											"<td>Viviendas</td>"+
											"<td></td>"+
											"<td></td>"+
											"<td></td>"+
											"</tr>"+
											"<tr class='border-dotted'>"+
											"<td>Hogares</td>"+
											"<td></td>"+
											"<td></td>"+
											"<td></td>"+
											"</tr>"+
											"<tr class='border-dotted'>"+
											"<td>Hogares por vivienda</td>"+
											"<td></td>"+
											"<td></td>"+
											"<td></td>"+
											"</tr>"+
											"<tr class='border-dotted'>"+
											"<td>Personas por hogar</td>"+
											"<td></td>"+
											"<td></td>"+
											"<td></td>"+
											"</tr>"+
											"<tr>"+
											"<td>Personas por vivienda</td>"+
											"<td></td>"+
											"<td></td>"+
											"<td></td>"+
											"</tr>"+
											"</tbody>"+
											"</table>"+

											"</div>"+

											"<div class='col-sm-6 col-md-6 col-lg-6'>"+

											"<table class='table table-bordered table-hover'>"+
											"<thead class='thead-s'>"+
											"<tr>"+
											"<th>Cobertura Alcantarillado</th>"+
											"<th>Valores</th>"+
											"</tr>"+
											"</thead>"+
											"<tbody>"+
											"<tr class='border-dotted'>"+
											"<td>Cabecera</td>"+
											"<td></td>"+
											"</tr>"+
											"<tr class='border-dotted'>"+
											"<td>Centro poblados</td>"+
											"<td></td>"+
											"</tr>"+
											"<tr>"+
											"<td>Rural disperso</td>"+
											"<td></td>"+
											"</tr>"+
											"</tbody>"+
											"</table>"+

											"</div>"+

											"<div class='col-sm-6 col-md-6 col-lg-6'>"+

											"<table class='table table-bordered table-hover'>"+
											"<thead class='thead-s'>"+
											"<tr>"+
											"<th>Cobertura aseo</th>"+
											"<th>Valores</th>"+
											"</tr>"+
											"</thead>"+
											"<tbody>"+
											"<tr class='border-dotted'>"+
											"<td>Cabecera</td>"+
											"<td></td>"+
											"</tr>"+
											"<tr class='border-dotted'>"+
											"<td>Centro poblados</td>"+
											"<td></td>"+
											"</tr>"+
											"<tr>"+
											"<td>Rural disperso</td>"+
											"<td></td>"+
											"</tr>"+
											"</tbody>"+
											"</table>"+

											"</div>"+

											"<div class='col-sm-6 col-md-6 col-lg-6'>"+

											"<table class='table table-bordered table-hover'>"+
											"<thead class='thead-s'>"+
											"<tr>"+
											"<th>Cobertura gas</th>"+
											"<th>Valores</th>"+
											"</tr>"+
											"</thead>"+
											"<tbody>"+
											"<tr class='border-dotted'>"+
											"<td>Cabecera</td>"+
											"<td></td>"+
											"</tr>"+
											"<tr class='border-dotted'>"+
											"<td>Centro poblados</td>"+
											"<td></td>"+
											"</tr>"+
											"<tr>"+
											"<td>Rural disperso</td>"+
											"<td></td>"+
											"</tr>"+
											"</tbody>"+
											"</table>"+

											"</div>"+

											"<div class='col-sm-6 col-md-6 col-lg-6'>"+

											"<table class='table table-bordered table-hover'>"+
											"<thead class='thead-s'>"+
											"<tr>"+
											"<th>Cobertura telefono</th>"+
											"<th>Valores</th>"+
											"</tr>"+
											"</thead>"+
											"<tbody>"+
											"<tr class='border-dotted'>"+
											"<td>Cabecera</td>"+
											"<td></td>"+
											"</tr>"+
											"<tr class='border-dotted'>"+
											"<td>Centro poblados</td>"+
											"<td></td>"+
											"</tr>"+
											"<tr>"+
											"<td>Rural disperso</td>"+
											"<td></td>"+
											"</tr>"+
											"</tbody>"+
											"</table>"+

											"</div>");
	}
}

function mostrarGrafica1VSP()
{
	var municipio = $("#municipio").val();
	var anioVSP = $("#añoVSP").val();

	if (municipio != "Seleccione un municipio") {
		$.ajax({
			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
			method: "GET",
			url: "/viviendaserviciospublicos/grafica1Viviendaserviciospublicos",
			dataType: 'json',
			data: { idMunicipio: municipio,
					anioVSP: anioVSP }
		})

		.done(function(response){
			$('#grafica1').show();
			$('#grafica1').html(response.html);
		});
	} else {
		$('#grafica1').hide();
	}
}

function mostrarGrafica2VSP()
{

	var municipio = $("#municipio").val();
	var anioVSP = $("#añoVSP").val();

	if (municipio != "Seleccione un municipio") {
		$.ajax({
			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
			method: "GET",
			url: "/viviendaserviciospublicos/grafica2Viviendaserviciospublicos",
			dataType: 'json',
			data: { idMunicipio: municipio,
					anioVSP: anioVSP }
		})

		.done(function(response){
			$('#grafica2').show();
			$('#grafica2').html(response.html);
		});
	} else {
		$('#grafica2').hide();
	}
}