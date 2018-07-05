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
		$('#economicosocial').html("<table class='table table-bordered table-hover'>"+
								"<thead class='thead-s'>"+
								"<tr>"+
								"<th>Datos</th>"+
								"<th>Año</th>"+
								"<th>Año</th>"+
								"</tr>"+
								"</thead>"+
								"<tbody>"+
								"<tr class='border-dotted'>"+
								"<td>Población en edad de trabajar</td>"+
								"<td></td>"+
								"<td></td>"+
								"</tr>"+
								"<tr class='border-dotted'>"+
								"<td>Póblacion potencialmente activa</td>"+
								"<td></td>"+
								"<td></td>"+
								"</tr>"+
								"<tr class='border-dotted'>"+
								"<td>Póblacion potencialmente inactiva</td>"+
								"<td></td>"+
								"<td></td>"+
								"</tr>"+
								"<tr class='border-dotted'>"+
								"<td>Numero de personas menores a 15 años</td>"+
								"<td></td>"+
								"<td></td>"+
								"</tr>"+
								"<tr class='border-dotted'>"+
								"<td>Numero de personas mayores a 64 años</td>"+
								"<td></td>"+
								"<td></td>"+
								"</tr>"+
								"<tr class='border-dotted'>"+
								"<td>Numero de personas independientes</td>"+
								"<td></td>"+
								"<td></td>"+
								"</tr>"+
								"<tr class='border-dotted'>"+
								"<td>Numero de personas dependientes</td>"+
								"<td></td>"+
								"<td></td>"+
								"</tr>"+
								"<tr class='border-dotted'>"+
								"<td>Población por género -Hombres</td>"+
								"<td></td>"+
								"<td></td>"+
								"</tr>"+
								"<tr class='border-dotted'>"+
								"<td>Población por género -Mujeres</td>"+
								"<td></td>"+
								"<td></td>"+
								"</tr>"+
								"<tr class='border-dotted'>"+
								"<td>Población por zona -Cabecera</td>"+
								"<td></td>"+
								"<td></td>"+
								"</tr>"+
								"<tr class='border-dotted'>"+
								"<td>Población por zona -Resto</td>"+
								"<td></td>"+
								"<td></td>"+
								"</tr>"+
								"<tr class='border-dotted'>"+
								"<td>Índice de ruralidad</td>"+
								"<td></td>"+
								"<td></td>"+
								"</tr>"+
								"<tr class='border-dotted'>"+
								"<td>Población total</td>"+
								"<td></td>"+
								"<td></td>"+
								"</tr>"+
								"<tr>"+
								"<td>Crecimiento poblacional</td>"+
								"<td></td>"+
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