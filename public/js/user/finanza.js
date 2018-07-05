function mostrarTablasF()
{
	mostrarTablaFinanza();
}

function mostrarTablaFinanza()
{
	var municipio = $("#municipio").val();
	var anio = $("#añoF").val();
	var departamento = $("#departamento").val();

	if (municipio != "Seleccione un municipio" && departamento != "Seleccione un departamento" && anio != "Año") {

		$.ajax({
			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
			method: "GET",
			url: "/finanza/mostrarFinanza",
			dataType: 'json',
			data: { idMunicipio: municipio,
					anioS: anio }
		})

		.done(function(response){
			$('#finanza').html(response.html);
			mostrarGrafica1F();
			mostrarGrafica2F();
			mostrarGrafica3F();
		});
	} else {
		$('#grafica1').hide();
		$('#finanza').html("<div class='col-sm-6 col-md-6 col-lg-6'>"+

						"<table class='table table-bordered table-hover'>"+
						"<thead class='thead-s'>"+
						"<tr>"+
						"<th>Tasa de Vacunación</th>"+
						"<th>Valores</th>"+
						"</tr>"+
						"</thead>"+
						"<tbody>"+
						"<tr class='border-dotted'>"+
						"<td>BCG</td>"+
						"<td></td>"+
						"</tr>"+
						"<tr class='border-dotted'>"+
						"<td>DPT</td>"+
						"<td></td>"+
						"</tr>"+
						"<tr class='border-dotted'>"+
						"<td>Hepatitis B</td>"+
						"<td></td>"+
						"</tr>"+
						"<tr class='border-dotted'>"+
						"<td>HIB</td>"+
						"<td></td>"+
						"</tr>"+
						"<tr class='border-dotted'>"+
						"<td>Polio</td>"+
						"<td></td>"+
						"</tr>"+
						"<tr>"+
						"<td>Triple viral</td>"+
						"<td></td>"+
						"</tr>"+
						"</tbody>"+
						"</table>"+

						"</div>"+

						"<div class='col-sm-6 col-md-6 col-lg-6'>"+

						"<table class='table table-bordered table-hover'>"+
						"<thead class='thead-s'>"+
						"<tr>"+
						"<th>Discapacidades</th>"+
						"<th>Valores</th>"+
						"</tr>"+
						"</thead>"+
						"<tbody>"+
						"<tr class='border-dotted'>"+
						"<td>Dificultad para bañarse o moverse</td>"+
						"<td></td>"+
						"</tr>"+
						"<tr class='border-dotted'>"+
						"<td>Dificultad para entender o aprender</td>"+
						"<td></td>"+
						"</tr>"+
						"<tr class='border-dotted'>"+
						"<td>Dificultad para moverse o para caminar por si</td>"+
						"<td></td>"+
						"</tr>"+
						"<tr class='border-dotted'>"+
						"<td>Dificultad para salir a la calle sin ayuda o compañía</td>"+
						"<td></td>"+
						"</tr>"+
						"<tr>"+
						"<td>Total de población con Discapacidad</td>"+
						"<td></td>"+
						"</tr>"+
						"</tbody>"+
						"</table>"+

						"</div>");
	}
}

function mostrarGrafica1F()
{
	var municipio = $("#municipio").val();
	var anioS = $("#añoF").val();

	if (municipio != "Seleccione un municipio") {
		$.ajax({
			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
			method: "GET",
			url: "/finanza/grafica1Finanza",
			dataType: 'json',
			data: { idMunicipio: municipio,
					anioS: anioS }
		})

		.done(function(response){
			$('#grafica1').show();
			$('#grafica1').html(response.html);
		});
	} else {
		$('#grafica1').hide();
	}
}

function mostrarGrafica2F()
{
	var municipio = $("#municipio").val();
	var anioS = $("#añoF").val();

	if (municipio != "Seleccione un municipio") {
		$.ajax({
			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
			method: "GET",
			url: "/finanza/grafica2Finanza",
			dataType: 'json',
			data: { idMunicipio: municipio,
					anioS: anioS }
		})

		.done(function(response){
			$('#grafica1').show();
			$('#grafica1').html(response.html);
		});
	} else {
		$('#grafica1').hide();
	}
}


function mostrarGrafica3F()
{
	var municipio = $("#municipio").val();
	var anioS = $("#añoF").val();

	if (municipio != "Seleccione un municipio") {
		$.ajax({
			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
			method: "GET",
			url: "/finanza/grafica3Finanza",
			dataType: 'json',
			data: { idMunicipio: municipio,
					anioS: anioS }
		})

		.done(function(response){
			$('#grafica1').show();
			$('#grafica1').html(response.html);
		});
	} else {
		$('#grafica1').hide();
	}
}

