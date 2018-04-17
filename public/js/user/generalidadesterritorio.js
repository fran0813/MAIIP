function mostrarTablasGT()
{
	mostrarTablaGeneralidadesterritorio();
}

function mostrarTablaGeneralidadesterritorio()
{
	var municipio = $("#municipio").val();
	var anio = $("#añoGT").val();

	if (municipio != "Seleccione un municipio") {
		$.ajax({
			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
			method: "GET",
			url: "/generalidadesterritorio/mostrarGeneralidadesterritorio",
			dataType: 'json',
			data: { idMunicipio: municipio,
					anioGT: anio }
		})

		.done(function(response){
			$('#generalidadesterritorio').html(response.html);
		});
	} else {
		$('#generalidadesterritorio').html("<div class='col-sm-6 col-md-6 col-lg-6'>"+

										"<table class='table table-bordered table-hover'>"+
										"<thead class='thead-s'>"+
										"<tr>"+
										"<th>Datos</th>"+
										"<th>Valores</th>"+
										"</tr>"+
										"</thead>"+
										"<tbody>"+
										"<tr class='border-dotted'>"+
										"<td>Temperatura Media(°C)</td>"+
										"<td></td>"+
										"</tr>"+
										"<tr>"+
										"<td>Altura sobre el nivel del mal</td>"+
										"<td></td>"+
										"</tr>"+
										"</tbody>"+
										"</table>"+

										"</div>"+

										"<div class='col-sm-6 col-md-6 col-lg-6'>"+

										"<table class='table table-bordered table-hover'>"+
										"<thead class='thead-s'>"+
										"<tr>"+
										"<th>Predios</th>"+
										"<th>Valores</th>"+
										"</tr>"+
										"</thead>"+
										"<tbody>"+
										"<tr class='border-dotted'>"+
										"<td>Zona rural</td>"+
										"<td></td>"+
										"</tr>"+
										"<tr class='border-dotted'>"+
										"<td>Zona urbana</td>"+
										"<td></td>"+
										"</tr>"+
										"<tr>"+
										"<td>Total por municipio</td>"+
										"<td></td>"+
										"</tr>"+
										"</tbody>"+
										"</table>"+

										"</div>"+

										"<div class='col-sm-6 col-md-6 col-lg-6'>"+

										"<table class='table table-bordered table-hover'>"+
										"<thead class='thead-s'>"+
										"<tr>"+
										"<th>Generalidad</th>"+
										"<th>Valores (km2)</th>"+
										"</tr>"+
										"</thead>"+
										"<tbody>"+
										"<tr class='border-dotted'>"+
										"<td>Rural</td>"+
										"<td></td>"+
										"</tr>"+
										"<tr class='border-dotted'>"+
										"<td>Urbana</td>"+
										"<td></td>"+
										"</tr>"+
										"<tr>"+
										"<td>Extensión total</td>"+
										"<td></td>"+
										"</tr>"+
										"</tbody>"+
										"</table>"+

										"</div>"+

										"<div class='col-sm-6 col-md-6 col-lg-6'>"+

										"<table class='table table-bordered table-hover'>"+
										"<thead class='thead-s'>"+
										"<tr>"+
										"<th>Territorio</th>"+
										"<th>A. construida</th>"+
										"<th>A. terreno</th>"+
										"</tr>"+
										"</thead>"+
										"<tbody>"+
										"<tr class='border-dotted'>"+
										"<td>Zona rural</td>"+
										"<td></td>"+
										"<td></td>"+
										"</tr>"+
										"<tr class='border-dotted'>"+
										"<td>Zona urbana</td>"+
										"<td></td>"+
										"<td></td>"+
										"</tr>"+
										"<tr>"+
										"<td>Total por municipio</td>"+
										"<td></td>"+
										"<td></td>"+
										"</tr>"+
										"</tbody>"+
										"</table>"+

										"</div>");
	}
}