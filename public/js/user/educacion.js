function mostrarTablasE()
{
	mostrarTablaEducacion();
}

// Muestra los datos de educación en la vista de información
function mostrarTablaEducacion(){

	var municipio = $("#municipio").val();
	var departamento = $("#departamento").val();

	if (municipio != "Seleccione un municipio" && departamento != "Seleccione un departamento") {
		$.ajax({
			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
			method: "GET",
			url: "/educacion/mostrarEducacion",
			dataType: 'json',
			data: { idMunicipio: municipio }
		})

		.done(function(response) {
			$('#educacion').html(response.html);
			mostrarGrafica1E();
			mostrarGrafica2E();	
		});
	} else {
		$('#grafica1').hide();
		$('#grafica2').hide();
		$('#educacion').html("<div class='col-sm-12 col-md-12 col-lg-12'>"+

							"<table class='table table-bordered table-hover'>"+
							"<thead class='thead-s'>"+
							"<tr>"+
							"<th>Datos</th>"+
							"<th>Año</th>"+
							"<th>Año</th>"+
							"</tr>"+
							"</thead>"+
							"<tbody>"+
							"<tr class='border-dotted'>"+
							"<td>Prejardin y jardín (rural)</td>"+
							"<td></td>"+
							"<td></td>"+
							"</tr>"+
							"<tr class='border-dotted'>"+
							"<td>Prejardin y jardín (urbano)</td>"+
							"<td></td>"+
							"<td></td>"+
							"</tr>"+
							"<tr class='border-dotted'>"+
							"<td>Transición (rural)</td>"+
							"<td></td>"+
							"<td></td>"+
							"</tr>"+
							"<tr class='border-dotted'>"+
							"<td>Transición (urbano)</td>"+
							"<td></td>"+
							"<td></td>"+
							"</tr>"+
							"<tr class='border-dotted'>"+
							"<td>Primaria (rural)</td>"+
							"<td></td>"+
							"<td></td>"+
							"</tr>"+
							"<tr class='border-dotted'>"+
							"<td>Primaria (urbano)</td>"+
							"<td></td>"+
							"<td></td>"+
							"</tr>"+
							"<tr class='border-dotted'>"+
							"<td>Secundaria (rural)</td>"+
							"<td></td>"+
							"<td></td>"+
							"</tr>"+
							"<tr class='border-dotted'>"+
							"<td>Secundaria (urbano)</td>"+
							"<td></td>"+
							"<td></td>"+
							"</tr>"+
							"<tr class='border-dotted'>"+
							"<td>Media (rural)</td>"+
							"<td></td>"+
							"<td></td>"+
							"</tr>"+
							"<tr>"+
							"<td>Media (urbano)</td>"+
							"<td></td>"+
							"<td></td>"+
							"</tr>"+
							"</tbody>"+
							"</table>"+

							"</div>"+

							"<div class='col-sm-12 col-md-12 col-lg-12'>"+

							"<table class='table table-bordered table-hover'>"+
							"<thead class='thead-s'>"+
							"<tr>"+
							"<th>Matricula por nivel</th>"+
							"<th>Año</th>"+
							"<th>Año</th>"+
							"</tr>"+
							"</thead>"+
							"<tbody>"+
							"<tr class='border-dotted'>"+
							"<td>Prejardin y jardín</td>"+
							"<td></td>"+
							"<td></td>"+
							"</tr>"+
							"<tr class='border-dotted'>"+
							"<td>Transición</td>"+
							"<td></td>"+
							"<td></td>"+
							"</tr>"+
							"<tr>"+
							"<td>Primaria</td>"+
							"<td></td>"+
							"<td></td>"+
							"</tr>"+
							"<tr>"+
							"<td>Secundaria</td>"+
							"<td></td>"+
							"<td></td>"+
							"</tr>"+
							"<tr>"+
							"<td>Media</td>"+
							"<td></td>"+
							"<td></td>"+
							"</tr>"+
							"</tbody>"+
							"</table>"+

							"</div>"+

							"<div class='col-sm-12 col-md-12 col-lg-12'>"+

							"<table class='table table-bordered table-hover'>"+
							"<thead class='thead-s'>"+
							"<tr>"+
							"<th>Matricula por genero</th>"+
							"<th>Año</th>"+
							"<th>Año</th>"+
							"</tr>"+
							"</thead>"+
							"<tbody>"+
							"<tr class='border-dotted'>"+
							"<td>Femenino</td>"+
							"<td></td>"+
							"<td></td>"+
							"</tr>"+
							"<tr class='border-dotted'>"+
							"<td>Masculino</td>"+
							"<td></td>"+
							"<td></td>"+
							"</tr>"+
							"</tbody>"+
							"</table>"+

							"</div>"+

							"</div>");
	}
}

function mostrarGrafica1E()
{
	var municipio = $("#municipio").val();

	if (municipio != "Seleccione un municipio") {
		$.ajax({
			method: "GET",
			url: "/educacion/grafica1Educacion",
			dataType: 'json',
			data: { idMunicipio: municipio }
		})

		.done(function(response) {
			$('#grafica1').show();
			$('#grafica1').html(response.html);
		});
	} else {
		$('#grafica1').hide();
	}
}

function mostrarGrafica2E()
{
	var municipio = $("#municipio").val();

	if (municipio != "Seleccione un municipio") {
		$.ajax({
			method: "GET",
			url: "/educacion/grafica2Educacion",
			dataType: 'json',
			data: { idMunicipio: municipio }
		})

		.done(function(response) {
			$('#grafica2').show();
			$('#grafica2').html(response.html);
		});
	} else {
		$('#grafica2').hide();
	}
}