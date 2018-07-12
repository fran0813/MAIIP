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
		$('#finanza').html("<div  class='col-sm-6 col-md-6 col-lg-6'>"+
							"<table class='table table-bordered table-hover'>"+
							"<thead class='thead-s'>"+
							"<tr>"+
							"<th>Plan financiero</th>"+
							"<th>Valores</th>"+
							"</tr>"+
							"</thead>"+
							"<tbody>"+
							"<tr class='border-dotted'>"+
							"<td>Plan financiero Municipios INGRESOS TOTALES</td>"+
							"<td></td>"+
							"</tr>"+
							"<tr class='border-dotted'>"+
							"<td>Plan financiero Municipios 1. INGRESOS CORRIENTES</td>"+
							"<td></td>"+
							"</tr>"+
							"<tr class='border-dotted'>"+
							"<td>Plan financiero Municipios 1.1. INGRESOS TRIBUTARIOS</td>"+
							"<td></td>"+
							"</tr>"+
							"<tr class='border-dotted'>"+
							"<td>Plan financiero Municipios 1.1.1. PREDIAL</td>"+
							"<td></td>"+
							"</tr>"+
							"<tr class='border-dotted'>"+
							"<td>Plan financiero Municipios 1.1.2. INDUSTRIA Y COMERCIO</td>"+
							"<td></td>"+
							"</tr>"+
							"<tr class='border-dotted'>"+
							"<td>Plan financiero Municipios  1.1.3. SOBRETASAS A LA GASOLINA</td>"+
							"<td></td>"+
							"</tr>"+
							"<tr class='border-dotted'>"+
							"<td>Plan financiero Municipios 1.1.4. OTROS</td>"+
							"<td></td>"+
							"</tr>"+
							"<tr class='border-dotted'>"+
							"<td>Plan financiero Municipios 1.2. INGRESOS NO TRIBUTARIOS</td>"+
							"<td></td>"+
							"</tr>"+
							"<tr class='border-dotted'>"+
							"<td>Plan financiero Municipios 1.3. TRANSFERENCIAS</td>"+
							"<td></td>"+
							"</tr>"+
							"<tr class='border-dotted'>"+
							"<td>Plan financiero Municipios 1.3.1. DEL NIVEL NACIONAL</td>"+
							"<td></td>"+
							"</tr>"+
							"<tr class='border-dotted'>"+
							"<td>Plan financiero Municipios 1.3.2. OTRAS</td>"+
							"<td></td>"+
							"</tr>"+
							"<tr class='border-dotted'>"+
							"<td>Plan financiero Municipios GASTOS TOTALES</td>"+
							"<td></td>"+
							"</tr>"+
							"<tr class='border-dotted'>"+
							"<td>Plan financiero Municipios 2. GASTOS CORRIENTES</td>"+
							"<td></td>"+
							"</tr>"+
							"<tr class='border-dotted'>"+
							"<td>Plan financiero Municipios 2.1. FUNCIONAMIENTO</td>"+
							"<td></td>"+
							"</tr>"+
							"<tr class='border-dotted'>"+
							"<td>Plan financiero Municipios 2.1.1. SERVICIOS PERSONALES</td>"+
							"<td></td>"+
							"</tr>"+
							"<tr class='border-dotted'>"+
							"<td>Plan financiero Municipios 2.1.2. GASTOS GENERALES</td>"+
							"<td></td>"+
							"</tr>"+
							"<tr class='border-dotted'>"+
							"<td>Plan financiero Municipios 2.1.3. TRANSFERENCIAS PAGADAS</td>"+
							"<td></td>"+
							"</tr>"+
							"<tr class='border-dotted'>"+
							"<td>Plan financiero Municipios 2.2. INTERESES DEUDA PUBLICA</td>"+
							"<td></td>"+
							"</tr>"+
							"<tr class='border-dotted'>"+
							"<td>Plan financiero Municipios 3. DEFICIT O AHORRO CORRIENTE (1-2)</td>"+
							"<td></td>"+
							"</tr>"+
							"<tr class='border-dotted'>"+
							"<td>Plan financiero Municipios 4. INGRESOS DE CAPITAL</td>"+
							"<td></td>"+
							"</tr>"+
							"<tr class='border-dotted'>"+
							"<td>Plan financiero Municipios 4.1. REGALÍAS</td>"+
							"<td></td>"+
							"</tr>"+
							"<tr class='border-dotted'>"+
							"<td>Plan financiero Municipios 4.2. TRANSFERENCIAS NACIONALES (SGP, etc.)</td>"+
							"<td></td>"+
							"</tr>"+
							"<tr class='border-dotted'>"+
							"<td>Plan financiero Municipios 4.3. COFINANCIACION</td>"+
							"<td></td>"+
							"</tr>"+
							"<tr class='border-dotted'>"+
							"<td>Plan financiero Municipios 4.4. OTROS</td>"+
							"<td></td>"+
							"</tr>"+
							"<tr class='border-dotted'>"+
							"<td>Plan financiero Municipios 5. GASTOS DE CAPITAL (INVERSION)</td>"+
							"<td></td>"+
							"</tr>"+
							"<tr class='border-dotted'>"+
							"<td>Plan financiero Municipios 5.1.1.1. FORMACION BRUTAL DE CAPITAL FIJO</td>"+
							"<td></td>"+
							"</tr>"+
							"<tr class='border-dotted'>"+
							"<td>Plan financiero Municipios 5.1.1.2. OTROS</td>"+
							"<td></td>"+
							"</tr>"+
							"<tr class='border-dotted'>"+
							"<td>Plan financiero Municipios 6. DEFICIT O SUPERAVIT TOTAL (3+4-5)</td>"+
							"<td></td>"+
							"</tr>"+
							"<tr class='border-dotted'>"+
							"<td>Plan financiero Municipios 7. FINANCIAMIENTO</td>"+
							"<td></td>"+
							"</tr>"+
							"<tr class='border-dotted'>"+
							"<td>Plan financiero Municipios 7.1. CREDITO NETO</td>"+
							"<td></td>"+
							"</tr>"+
							"<tr class='border-dotted'>"+
							"<td>Plan financiero Municipios 7.1.1. DESEMBOLSOS (+)</td>"+
							"<td></td>"+
							"</tr>"+
							"<tr class='border-dotted'>"+
							"<td>Plan financiero Municipios 7.1.2. AMORTIZACIONES (-)</td>"+
							"<td></td>"+
							"</tr>"+
							"<tr class='border-dotted'>"+
							"<td>Plan financiero Municipios 7.3. RECURSOS DEL BALANCE, VARIACION DE DEPOSITOS Y OTROS</td>"+
							"<td></td>"+
							"</tr>"+	
							"</tbody>"+
							"</table>"+

							"</div>"+

							"<div  class='col-sm-6 col-md-6 col-lg-6'>"+

							"<table class='table table-bordered table-hover'>"+
							"<thead class='thead-s'>"+
							"<tr>"+
							"<th>Ejecucion presupuesto</th>"+
							"<th>Valores</th>"+
							"</tr>"+
							"</thead>"+
							"<tbody>"+
							"<tr class='border-dotted'>"+
							"<td>INGRESOS TOTALES</td>"+
							"<td></td>"+
							"</tr>"+	
							"<tr class='border-dotted'>"+
							"<td>1. INGRESOS CORRIENTES</td>"+
							"<td></td>"+
							"</tr>"+	
							"<tr class='border-dotted'>"+
							"<td>1.1 INGRESOS TRIBUTARIOS</td>"+
							"<td></td>"+
							"</tr>"+	
							"<tr class='border-dotted'>"+
							"<td>1.1.1. PREDIAL</td>"+
							"<td></td>"+
							"</tr>"+	
							"<tr class='border-dotted'>"+
							"<td>1.1.2. INDUSTRIA Y COMERCIO</td>"+
							"<td></td>"+
							"</tr>"+	
							"<tr class='border-dotted'>"+
							"<td>1.1.3. SOBRETASA A LA GASOLINA</td>"+
							"<td></td>"+
							"</tr>"+	
							"<tr class='border-dotted'>"+
							"<td>1.1.4. OTROS</td>"+
							"<td></td>"+
							"</tr>"+	
							"<tr class='border-dotted'>"+
							"<td>1.2. INGRESOS NO TRIBUTARIOS</td>"+
							"<td></td>"+
							"</tr>"+	
							"<tr class='border-dotted'>"+
							"<td>1.3. TRANSFERENCIAS</td>"+
							"<td></td>"+
							"</tr>"+	
							"<tr class='border-dotted'>"+
							"<td>1.3.1. DEL NIVEL NACIONAL</td>"+
							"<td></td>"+
							"</tr>"+	
							"<tr class='border-dotted'>"+
							"<td>1.3.2. OTRAS</td>"+
							"<td></td>"+
							"</tr>"+	
							"<tr class='border-dotted'>"+
							"<td>GASTOS TOTALES</td>"+
							"<td></td>"+
							"</tr>"+	
							"<tr class='border-dotted'>"+
							"<td>2. GASTOS CORRIENTES</td>"+
							"<td></td>"+
							"</tr>"+	
							"<tr class='border-dotted'>"+
							"<td>2.1. FUNCIONAMIENTO</td>"+
							"<td></td>"+
							"</tr>"+	
							"<tr class='border-dotted'>"+
							"<td>2.1.1. SERVICIOS PERSONALES</td>"+
							"<td></td>"+
							"</tr>"+	
							"<tr class='border-dotted'>"+
							"<td>2.1.2. GASTOS GENERALES</td>"+
							"<td></td>"+
							"</tr>"+	
							"<tr class='border-dotted'>"+
							"<td>2.1.3. TRANSFERENCIAS PAGADAS (NOMINA Y A ENTIDADES)</td>"+
							"<td></td>"+
							"</tr>"+	
							"<tr class='border-dotted'>"+
							"<td>2.2. INTERESES DEUDA PUBLICA</td>"+
							"<td></td>"+
							"</tr>"+	
							"<tr class='border-dotted'>"+
							"<td>3. DEFICIT O AHORRO CORRIENTE (1-2)</td>"+
							"<td></td>"+
							"</tr>"+	
							"<tr class='border-dotted'>"+
							"<td>4. INGRESOS DE CAPITAL</td>"+
							"<td></td>"+
							"</tr>"+	
							"<tr class='border-dotted'>"+
							"<td>4.1. REGALIAS</td>"+
							"<td></td>"+
							"</tr>"+	
							"<tr class='border-dotted'>"+
							"<td>4.2. TRANSFERENCIAS NACIONALES (SGP, etc.)</td>"+
							"<td></td>"+
							"</tr>"+	
							"<tr class='border-dotted'>"+
							"<td>4.3. COFINANCIACION</td>"+
							"<td></td>"+
							"</tr>"+	
							"<tr class='border-dotted'>"+
							"<td>4.4. OTROS</td>"+
							"<td></td>"+
							"</tr>"+	
							"<tr class='border-dotted'>"+
							"<td>5. GASTOS DE CAPITAL (INVERSION)</td>"+
							"<td></td>"+
							"</tr>"+	
							"<tr class='border-dotted'>"+
							"<td>5.1. FORMACION BRUTAL DE CAPITAL FIJO</td>"+
							"<td></td>"+
							"</tr>"+	
							"<tr class='border-dotted'>"+
							"<td>5.2. RESTO INVERSIONES</td>"+
							"<td></td>"+
							"</tr>"+	
							"<tr class='border-dotted'>"+
							"<td>6. DEFICIT O SUPERAVIT TOTAL (3+4-5)</td>"+
							"<td></td>"+
							"</tr>"+	
							"<tr class='border-dotted'>"+
							"<td>7. FINANCIAMIENTO (7.1 + 7.2)</td>"+
							"<td></td>"+
							"</tr>"+	
							"<tr class='border-dotted'>"+
							"<td>7.1. CREDITO INTERNO Y EXTERNO (7.1.1 - 7.1.2.)</td>"+
							"<td></td>"+
							"</tr>"+	
							"<tr class='border-dotted'>"+
							"<td>7.1.1. DESEMBOLSOS (+)</td>"+
							"<td></td>"+
							"</tr>"+	
							"<tr class='border-dotted'>"+
							"<td>7.1.2. AMORTIZACIONES (-)</td>"+
							"<td></td>"+
							"</tr>"+	
							"<tr class='border-dotted'>"+
							"<td>7.2. RECURSOS BALANCE, VAR. DEPOSITOS, OTROS</td>"+
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
							"<th>Indice de desempeño integral</th>"+
							"<th>Valores</th>"+
							"</tr>"+
							"</thead>"+
							"<tbody>"+
							"<tr class='border-dotted'>"+
							"<td>Desempeño Integral Capacidad Administrativa</td>"+
							"<td></td>"+
							"</tr>"+	
							"<tr class='border-dotted'>"+
							"<td>Desempeño Integral Eficacia Total</td>"+
							"<td></td>"+
							"</tr>"+	
							"<tr class='border-dotted'>"+
							"<td>Desempeño Integral Gestión</td>"+
							"<td></td>"+
							"</tr>"+	
							"<tr class='border-dotted'>"+
							"<td>Desempeño IntegralIndice Integral</td>"+
							"<td></td>"+
							"</tr>"+	 
							"<tr class='border-dotted'>"+
							"<td>Desempeño Integral Requisitos Legales</td>"+
							"<td></td>"+
							"</tr>"+	 
							"<tr class='border-dotted'>"+
							"<td>Desempeño Integral Indicador de desempeño Fiscal</td>"+
							"<td></td>"+
							"</tr>"+	 	
							"</tbody>"+
							"</table>"+

							"</div>"+

							"<div  class='col-sm-6 col-md-6 col-lg-6'>"+

							"<table class='table table-bordered table-hover'>"+
							"<thead class='thead-s'>"+
							"<tr>"+
							"<th>Indice de desempeño fiscal</th>"+
							"<th>Valores</th>"+
							"</tr>"+
							"</thead>"+
							"<tbody>"+
							"<tr class='border-dotted'>"+	
							"<td>Autofinanciación de los gastos de funcionamiento</td>"+
							"<td></td>"+
							"</tr>"+		
							"<tr class='border-dotted'>"+
							"<td>Respaldo del servicio de la deuda</td>"+
							"<td></td>"+
							"</tr>"+		
							"<tr class='border-dotted'>"+
							"<td>Dependencia de las transferencias de la Nación y las Regalías</td>"+
							"<td></td>"+
							"</tr>"+		
							"<tr class='border-dotted'>"+
							"<td>Generación de recursos propios</td>"+
							"<td></td>"+
							"</tr>"+		
							"<tr class='border-dotted'>"+
							"<td>Magnitud de la inversión</td>"+
							"<td></td>"+
							"</tr>"+		
							"<tr class='border-dotted'>"+
							"<td>Capacidad de ahorro</td>"+
							"<td></td>"+
							"</tr>"+		
							"<tr class='border-dotted'>"+
							"<td>Indicador de desempeño Fiscal</td>"+
							"<td></td>"+
							"</tr>"+		
							"<tr class='border-dotted'>"+
							"<td>Posición a nivel nacional</td>"+
							"<td></td>"+
							"</tr>"+		
							"<tr class='border-dotted'>"+
							"<td>Posición a nivel departamento</td>"+
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
			$('#grafica2').show();
			$('#grafica2').html(response.html);
		});
	} else {
		$('#grafica2').hide();
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
			$('#grafica3').show();
			$('#grafica3').html(response.html);
		});
	} else {
		$('#grafica1').hide();
	}
}

