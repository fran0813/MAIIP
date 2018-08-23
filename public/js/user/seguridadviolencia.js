function mostrarTablasSV()
{
	mostrarTablaSeguridadviolencia();
}

function mostrarTablaSeguridadviolencia()
{
	var municipio = $("#municipio").val();
	var anio = $("#añoSV").val();
	var departamento = $("#departamento").val();

	if (municipio != "Seleccione un municipio" && departamento != "Seleccione un departamento" && anio != "Año") {

		$.ajax({
			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
			method: "GET",
			url: "/seguridadviolencia/mostrarSeguridadviolencia",
			dataType: 'json',
			data: { idMunicipio: municipio,
					anioSV: anio }
		})

		.done(function(response){
			$('#seguridadviolencia').html(response.html);
			mostrarGrafica1SV();
		});
	} else {
		$('#grafica1').hide();
		$('#seguridadviolencia').html("<div class='col-sm-6 col-md-6 col-lg-6'>"+
									"<table class='table table-bordered table-hover'>"+
									"<thead class='thead-s'>"+
									"<tr>"+
									"<th>Seguridad y violencia</th>"+
									"<th>Valores</th>"+
									"</tr>"+
									"</thead>"+
									"<tbody>"+
									"<tr class='border-dotted'>"+
									"<td>Tasa de deserción escolar total</td>"+
									"<td></td>"+
									"</tr>"+
									"<tr class='border-dotted'>"+
									"<td>Tasa de homicidios</td>"+
									"<td></td>"+
									"</tr>"+
									"<tr class='border-dotted'>"+
									"<td>Tasa de incidencia dengue</td>"+
									"<td></td>"+
									"</tr>"+
									"<tr class='border-dotted'>"+
									"<td>Tasa de lesiones personales</td>"+
									"<td></td>"+
									"</tr>"+
									"<tr class='border-dotted'>"+
									"<td>Tasa de muertes por accidentes de tránsito</td>"+
									"<td></td>"+
									"</tr>"+
									"<tr class='border-dotted'>"+
									"<td>Tasa de suicidios</td>"+
									"<td></td>"+
									"</tr>"+
									"<tr class='border-dotted'>"+
									"<td>Violencia interpersonal</td>"+
									"<td></td>"+
									"</tr>"+
									"<tr class='border-dotted'>"+
									"<td>Casos totales</td>"+
									"<td></td>"+
									"</tr>"+
									"<tr class='border-dotted'>"+
									"<td>Casos y tasa homicidios</td>"+
									"<td></td>"+
									"</tr>"+
									"</tbody>"+
									"</table>"+

									"</div>"+

									"<div class='col-sm-6 col-md-6 col-lg-6'>"+

									"<table class='table table-bordered table-hover'>"+
									"<thead class='thead-s'>"+
									"<tr>"+
									"<th>lesiones</th>"+
									"<th>Valores</th>"+
									"</tr>"+
									"</thead>"+
									"<tbody>"+
									"<tr class='border-dotted'>"+
									"<td>Lesiones fatales total</td>"+
									"<td></td>"+
									"</tr>"+
									"<tr class='border-dotted'>"+
									"<td>Lesiones fatales hombre</td>"+
									"<td></td>"+
									"</tr>"+
									"<tr class='border-dotted'>"+
									"<td>Lesiones fatales mujer</td>"+
									"<td></td>"+
									"</tr>"+
									"<tr class='border-dotted'>"+
									"<td>Lesiones no fatales total</td>"+
									"<td></td>"+
									"</tr>"+
									"<tr class='border-dotted'>"+
									"<td>Lesiones no fatales hombre</td>"+
									"<td></td>"+
									"</tr>"+
									"<tr class='border-dotted'>"+
									"<td>Lesiones no fatales mujer</td>"+
									"<td></td>"+
									"</tr>"+
									"</tbody>"+
									"</table>"+

									"</div>"+

									"<div class='col-sm-12 col-md-12 col-lg-12'></div>"+

									"<div class='col-sm-6 col-md-6 col-lg-6'>"+

									"<table class='table table-bordered table-hover'>"+
									"<thead class='thead-s'>"+
									"<tr>"+
									"<th>Delitos sexuales</th>"+
									"<th>Valores</th>"+
									"</tr>"+
									"</thead>"+
									"<tbody>"+
									"<tr class='border-dotted'>"+
									"<td>Total</td>"+
									"<td></td>"+
									"</tr>"+
									"<tr class='border-dotted'>"+
									"<td>Hombre</td>"+
									"<td></td>"+
									"</tr>"+
									"<tr class='border-dotted'>"+
									"<td>Mujer</td>"+
									"<td></td>"+
									"</tr>"+
									"</tbody>"+
									"</table>"+

									"</div>"+

									"<div class='col-sm-6 col-md-6 col-lg-6'>"+

									"<table class='table table-bordered table-hover'>"+
									"<thead class='thead-s'>"+
									"<tr>"+
									"<th>Violencia</th>"+
									"<th>Valores</th>"+
									"</tr>"+
									"</thead>"+
									"<tbody>"+
									"<tr class='border-dotted'>"+
									"<td>Violencia a personas mayores</td>"+
									"<td></td>"+
									"</tr>"+
									"<tr class='border-dotted'>"+
									"<td>Violencia entre otros familiares</td>"+
									"<td></td>"+
									"</tr>"+
									"<tr class='border-dotted'>"+
									"<td>Violencia infantil</td>"+
									"<td></td>"+
									"</tr>"+
									"</tbody>"+
									"</table>"+

									"</div>");
	}
}

function mostrarGrafica1SV()
{
	var municipio = $("#municipio").val();
	var anioS = $("#añoSV").val();

	if (municipio != "Seleccione un municipio") {
		$.ajax({
			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
			method: "GET",
			url: "/seguridadviolencia/grafica1Seguridadviolencia",
			dataType: 'json',
			data: { idMunicipio: municipio,
					anioSV: anioS }
		})

		.done(function(response){
			$('#grafica1').show();
			$('#grafica1').html(response.html);
		});
	} else {
		$('#grafica1').hide();
	}
}
