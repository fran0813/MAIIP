function mostrarTablasES()
{
	mostrarTablaEconomicosocial();
}

function mostrarTablaEconomicosocial()
{
	var municipio = $("#municipio").val();
	var departamento = $("#departamento").val();

	if (municipio != "Seleccione un municipio" && departamento != "Seleccione un departamento") {
		$.ajax({
			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
			method: "GET",
			url: "/economicosocial/mostrarEconomicosocial",
			dataType: 'json',
			data: { idMunicipio: municipio }
		})

		.done(function(response){
			$('#economicosocial').html(response.html);
			mostrarGrafica1ES();
			mostrarGrafica2ES();
		});
	} else {
		$('#grafica1').hide();
		$('#grafica2').hide();
		$('#economicosocial').html("<div  class='col-sm-6 col-md-6 col-lg-6'>"+

									"<table class='table table-bordered table-hover'>"+
									"<thead class='thead-s'>"+
									"<tr>"+
									"<th>Unidades comerciales</th>"+
									"<th>Valores</th>"+
									"</tr>"+
									"</thead>"+
									"<tbody>"+
									"<tr class='border-dotted'>"+
									"<td>Unidades comerciales</td>"+
									"<td></td>"+
									"</tr>"+
									"<tr class='border-dotted'>"+
									"<td>Unidades de servicios</td>"+
									"<td></td>"+
									"</tr>"+
									"<tr class='border-dotted'>"+
									"<td>Unidades grande comerciales</td>"+
									"<td></td>"+
									"</tr>"+
									"<tr class='border-dotted'>"+
									"<td>Unidades grande industria</td>"+
									"<td></td>"+
									"</tr>"+
									"<tr class='border-dotted'>"+
									"<td>Unidades grande servicios</td>"+
									"<td></td>"+
									"</tr>"+
									"<tr class='border-dotted'>"+
									"<td>Unidades industriales</td>"+
									"<td></td>"+
									"</tr>"+
									"<tr class='border-dotted'>"+
									"<td>Unidades mediana comerciales</td>"+
									"<td></td>"+
									"</tr>"+
									"<tr class='border-dotted'>"+
									"<td>Unidades mediana industria</td>"+
									"<td></td>"+
									"</tr>"+
									"<tr class='border-dotted'>"+
									"<td>Unidades mediana servicios</td>"+
									"<td></td>"+
									"</tr>"+
									"<tr class='border-dotted'>"+
									"<td>Unidades micro comerciales</td>"+
									"<td></td>"+
									"</tr>"+
									"<tr class='border-dotted'>"+
									"<td>Unidades micro industria</td>"+
									"<td></td>"+
									"</tr>"+
									"<tr class='border-dotted'>"+
									"<td>Unidades micro servicios</td>"+
									"<td></td>"+
									"</tr>"+
									"<tr class='border-dotted'>"+
									"<td>Unidades pequeña industria</td>"+
									"<td></td>"+
									"</tr>"+
									"<tr class='border-dotted'>"+
									"<td>Unidades pequeña Servicios</td>"+
									"<td></td>"+
									"</tr>"+
									"<tr class='border-dotted'>"+
									"<td>Unidades pequeña comerciales</td>"+
									"<td></td>"+
									"</tr>"+
									"</tbody>"+
									"</table>"+

									"</div>"+

									"<div  class='col-sm-6 col-md-6 col-lg-6'>"+

									"<table class='table table-bordered table-hover'>"+
									"<thead class='thead-s'>"+
									"<tr>"+
									"<th>Índice de pobreza multidimensional por componentes</th>"+
									"<th>Valores</th>"+
									"</tr>"+
									"</thead>"+
									"<tbody>"+
									"<tr class='border-dotted'>"+
									"<td>Alta tasa de dependencia económica</td>"+
									"<td></td>"+
									"</tr>"+
									"<tr class='border-dotted'>"+
									"<td>Analfabetismo</td>"+
									"<td></td>"+
									"</tr>"+
									"<tr class='border-dotted'>"+
									"<td>Bajo logro educativo</td>"+
									"<td></td>"+
									"</tr>"+
									"<tr class='border-dotted'>"+
									"<td>Barreras de acceso a servicio de salud</td>"+
									"<td></td>"+
									"</tr>"+
									"<tr class='border-dotted'>"+
									"<td>Barreras de acceso a servicios para cuidado de la primera infancia</td>"+
									"<td></td>"+
									"</tr>"+
									"<tr class='border-dotted'>"+
									"<td>Empleo informal</td>"+
									"<td></td>"+
									"</tr>"+
									"<tr class='border-dotted'>"+
									"<td>Hacinamiento</td>"+
									"<td></td>"+
									"</tr>"+
									"<tr class='border-dotted'>"+
									"<td>Inadecuada eliminación de excretas</td>"+
									"<td></td>"+
									"</tr>"+
									"<tr class='border-dotted'>"+
									"<td>Inasistencia escolar</td>"+
									"<td></td>"+
									"</tr>"+
									"<tr class='border-dotted'>"+
									"<td>Paredes inadecuadas</td>"+
									"<td></td>"+
									"</tr>"+
									"<tr class='border-dotted'>"+
									"<td>Pisos inadecuados</td>"+
									"<td></td>"+
									"</tr>"+
									"<tr class='border-dotted'>"+
									"<td>Rezago escolar</td>"+
									"<td></td>"+
									"</tr>"+
									"<tr class='border-dotted'>"+
									"<td>Sin acceso a fuente de agua mejorada</td>"+
									"<td></td>"+
									"</tr>"+
									"<tr class='border-dotted'>"+
									"<td>Sin aseguramiento en salud</td>"+
									"<td></td>"+
									"</tr>"+
									"<tr class='border-dotted'>"+
									"<td>Trabajo infantil</td>"+
									"<td></td>"+
									"</tr>"+
									"</tbody>"+
									"</table>"+

									"</div>"+

									"<div class='col-sm-12 col-md-12 col-lg-12'></div>"+

									"<div  class='col-sm-6 col-md-6 col-lg-6'>"+

									"<table class='table table-bordered table-hover'>"+
									"<thead class='thead-s'>"+
									"<tr>"+
									"<th>Economico-social</th>"+
									"<th>Valores</th>"+
									"</tr>"+
									"</thead>"+
									"<tbody>"+
									"<tr class='border-dotted'>"+
									"<td>Número de hectáreas sembradas con bosques por municipio área en bosques total</td>"+
									"<td></td>"+
									"</tr>"+
									"<tr class='border-dotted'>"+
									"<td>Área agrícola cosechada total</td>"+
									"<td></td>"+
									"</tr>"+
									"<tr class='border-dotted'>"+
									"<td>Producción agrícola total</td>"+
									"<td></td>"+
									"</tr>"+
									"<tr class='border-dotted'>"+
									"<td>Producción de carbón</td>"+
									"<td></td>"+
									"</tr>"+
									"<tr class='border-dotted'>"+
									"<td>Inventario bovinos total machos</td>"+
									"<td></td>"+
									"</tr>"+
									"<tr class='border-dotted'>"+
									"<td>Inventario bovinos total hembras</td>"+
									"<td></td>"+
									"</tr>"+
									"<tr class='border-dotted'>"+
									"<td>Inventario bovinos total</td>"+
									"<td></td>"+
									"</tr>"+
									"<tr class='border-dotted'>"+
									"<td>Incidencia IPM total</td>"+
									"<td></td>"+
									"</tr>"+
									"<tr class='border-dotted'>"+
									"<td>Incidencia IPM urbano</td>"+
									"<td></td>"+
									"</tr>"+
									"<tr class='border-dotted'>"+
									"<td>Incidencia IPM rural</td>"+
									"<td></td>"+
									"</tr>"+
									"</tbody>"+
									"</table>"+

									"</div>");
	}
}

function mostrarGrafica1ES()
{
	var municipio = $("#municipio").val();

	if (municipio != "Seleccione un municipio") {
		$.ajax({
			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
			method: "GET",
			url: "/economicosocial/grafica1Economicosocial",
			dataType: 'json',
			data: { idMunicipio: municipio }
		})

		.done(function(response){
			$('#grafica1').show();
			$('#grafica1').html(response.html);
		});
	} else {
		$('#grafica1').hide();
	}
}

function mostrarGrafica2ES()
{
	var municipio = $("#municipio").val();

	if (municipio != "Seleccione un municipio") {
		$.ajax({
			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
			method: "GET",
			url: "/economicosocial/grafica2Economicosocial",
			dataType: 'json',
			data: { idMunicipio: municipio }
		})

		.done(function(response){
			$('#grafica2').show();
			$('#grafica2').html(response.html);
		});
	} else {
		$('#grafica2').hide();
	}
}