@extends('layouts.informacion')

@section('breadcrumbs')
<ol class="breadcrumb">
	<li class="color-breadcrumbs"><a href="{{ url('/informacion') }}"><b>Información</b></a></li>
	<li class="active"><b>Finanza</b></li>
</ol>
@endsection

@section('selects')
	@include('user.section.selectsF')
@endsection

@section('tables')

<div class="col-sm-12 col-md-12 col-lg-12">

	<div class="col-sm-2 col-md-2 col-lg-2 pull-right">

		<select id="añoF" class="form-control" onchange="mostrarTablasF()">
			<option>Año</option>
		</select>

		<br>
		<br>

	</div>

</div>

<div id="finanza" class="col-sm-12 col-md-12 col-lg-12">

	<div  class="col-sm-6 col-md-6 col-lg-6">

		<table class="table table-bordered table-hover">
			<thead class="thead-s">
				<tr>
					<th>Plan financiero</th>
					<th>Valores</th>
				</tr>
			</thead>
			<tbody>
	            <tr class="border-dotted">
	            	<td>Plan financiero municipios ingresos totales</td>
					<td></td>
	            </tr>
	            <tr class="border-dotted">
					<td>Plan financiero municipios 1. ingresos corrientes</td>
					<td></td>
	            </tr>
	            <tr class="border-dotted">
					<td>Plan financiero municipios 1.1. ingresos tributarios</td>
					<td></td>
	            </tr>
	            <tr class="border-dotted">
					<td>Plan financiero municipios 1.1.1. predial</td>
					<td></td>
	            </tr>
	            <tr class="border-dotted">
					<td>Plan financiero municipios 1.1.2. industria y comercio</td>
					<td></td>
	            </tr>
	            <tr class="border-dotted">
					<td>Plan financiero municipios  1.1.3. sobretasas a la gasolina</td>
					<td></td>
	            </tr>
	            <tr class="border-dotted">
					<td>Plan financiero municipios 1.1.4. otros</td>
					<td></td>
	            </tr>
	            <tr class="border-dotted">
					<td>Plan financiero municipios 1.2. ingresos no tributarios</td>
					<td></td>
	            </tr>
	            <tr class="border-dotted">
					<td>Plan financiero municipios 1.3. transferencias</td>
					<td></td>
	            </tr>
	            <tr class="border-dotted">
					<td>Plan financiero municipios 1.3.1. del nivel nacional</td>
					<td></td>
	            </tr>
	            <tr class="border-dotted">
					<td>Plan financiero municipios 1.3.2. otras</td>
					<td></td>
	            </tr>
	            <tr class="border-dotted">
					<td>Plan financiero municipios gastos totales</td>
					<td></td>
	            </tr>
	            <tr class="border-dotted">
					<td>Plan financiero municipios 2. gastos corrientes</td>
					<td></td>
	            </tr>
	            <tr class="border-dotted">
					<td>Plan financiero municipios 2.1. funcionamiento</td>
					<td></td>
	            </tr>
	            <tr class="border-dotted">
					<td>Plan financiero municipios 2.1.1. servicios personales</td>
					<td></td>
	            </tr>
	            <tr class="border-dotted">
					<td>Plan financiero municipios 2.1.2. gastos generales</td>
					<td></td>
	            </tr>
	            <tr class="border-dotted">
					<td>Plan financiero municipios 2.1.3. transferencias pagadas</td>
					<td></td>
	            </tr>
	            <tr class="border-dotted">
					<td>Plan financiero municipios 2.2. intereses deuda publica</td>
					<td></td>
	            </tr>
	            <tr class="border-dotted">
					<td>Plan financiero municipios 3. déficit o ahorro corriente (1-2)</td>
					<td></td>
	            </tr>
	            <tr class="border-dotted">
					<td>Plan financiero municipios 4. ingresos de capital</td>
					<td></td>
	            </tr>
	            <tr class="border-dotted">
					<td>Plan financiero municipios 4.1. regalías</td>
					<td></td>
	            </tr>
	            <tr class="border-dotted">
					<td>Plan financiero municipios 4.2. transferencias nacionales (sgp, etc.)</td>
					<td></td>
	            </tr>
	            <tr class="border-dotted">
					<td>Plan financiero municipios 4.3. cofinanciacion</td>
					<td></td>
	            </tr>
	            <tr class="border-dotted">
					<td>Plan financiero municipios 4.4. otros</td>
					<td></td>
	            </tr>
	            <tr class="border-dotted">
					<td>Plan financiero municipios 5. gastos de capital (inversión)</td>
					<td></td>
	            </tr>
	            <tr class="border-dotted">
					<td>Plan financiero municipios 5.1.1.1. formación brutal de capital fijo</td>
					<td></td>
	            </tr>
	            <tr class="border-dotted">
					<td>Plan financiero municipios 5.1.1.2. otros</td>
					<td></td>
	            </tr>
	            <tr class="border-dotted">
					<td>Plan financiero municipios 6. déficit o superávit total (3+4-5)</td>
					<td></td>
	            </tr>
	            <tr class="border-dotted">
					<td>Plan financiero municipios 7. financiamiento</td>
					<td></td>
	            </tr>
	            <tr class="border-dotted">
					<td>Plan financiero municipios 7.1. crédito neto</td>
					<td></td>
	            </tr>
	            <tr class="border-dotted">
					<td>Plan financiero municipios 7.1.1. desembolsos (+)</td>
					<td></td>
	            </tr>
	            <tr class="border-dotted">
					<td>Plan financiero municipios 7.1.2. amortizaciones (-)</td>
					<td></td>
	            </tr>
	            <tr class="border-dotted">
					<td>Plan financiero municipios 7.3. recursos del balance, variación de depósitos y otros</td>
					<td></td>
	            </tr>	
			</tbody>
		</table>

	</div>

	<div  class="col-sm-6 col-md-6 col-lg-6">

		<table class="table table-bordered table-hover">
			<thead class="thead-s">
				<tr>
					<th>Ejecución presupuesto</th>
					<th>Valores</th>
				</tr>
			</thead>
			<tbody>
                <tr class="border-dotted">
                	<td>Ingresos totales</td>
	            	<td></td>
	            </tr>	
            	<tr class="border-dotted">
					<td>1. ingresos corrientes</td>
	            	<td></td>
	            </tr>	
            	<tr class="border-dotted">
					<td>1.1 ingresos tributarios</td>
	            	<td></td>
	            </tr>	
            	<tr class="border-dotted">
					<td>1.1.1. predial</td>
	            	<td></td>
	            </tr>	
            	<tr class="border-dotted">
					<td>1.1.2. industria y comercio</td>
	            	<td></td>
	            </tr>	
            	<tr class="border-dotted">
					<td>1.1.3. sobretasa a la gasolina</td>
	            	<td></td>
	            </tr>	
            	<tr class="border-dotted">
					<td>1.1.4. otros</td>
	            	<td></td>
	            </tr>	
            	<tr class="border-dotted">
					<td>1.2. ingresos no tributarios</td>
	            	<td></td>
	            </tr>	
            	<tr class="border-dotted">
					<td>1.3. transferencias</td>
	            	<td></td>
	            </tr>	
            	<tr class="border-dotted">
					<td>1.3.1. del nivel nacional</td>
	            	<td></td>
	            </tr>	
            	<tr class="border-dotted">
					<td>1.3.2. otras</td>
	            	<td></td>
	            </tr>	
            	<tr class="border-dotted">
				     <td>Gastos totales</td>
	            	<td></td>
	            </tr>	
            	<tr class="border-dotted">
					<td>2. gastos corrientes</td>
	            	<td></td>
	            </tr>	
            	<tr class="border-dotted">
					<td>2.1. funcionamiento</td>
	            	<td></td>
	            </tr>	
            	<tr class="border-dotted">
					<td>2.1.1. servicios personales</td>
	            	<td></td>
	            </tr>	
            	<tr class="border-dotted">
					<td>2.1.2. gastos generales</td>
	            	<td></td>
	            </tr>	
            	<tr class="border-dotted">
					<td>2.1.3. transferencias pagadas (nomina y a entidades)</td>
	            	<td></td>
	            </tr>	
            	<tr class="border-dotted">
					<td>2.2. intereses deuda publica</td>
	            	<td></td>
	            </tr>	
            	<tr class="border-dotted">
					<td>3. déficit o ahorro corriente (1-2)</td>
	            	<td></td>
	            </tr>	
            	<tr class="border-dotted">
					<td>4. ingresos de capital</td>
	            	<td></td>
	            </tr>	
            	<tr class="border-dotted">
					<td>4.1. regalías</td>
	            	<td></td>
	            </tr>	
            	<tr class="border-dotted">
					<td>4.2. transferencias nacionales (sgp, etc.)</td>
	            	<td></td>
	            </tr>	
            	<tr class="border-dotted">
					<td>4.3. cofinanciacion</td>
	            	<td></td>
	            </tr>	
            	<tr class="border-dotted">
					<td>4.4. otros</td>
	            	<td></td>
	            </tr>	
            	<tr class="border-dotted">
					<td>5. gastos de capital (inversión)</td>
	            	<td></td>
	            </tr>	
            	<tr class="border-dotted">
					<td>5.1. formación brutal de capital fijo</td>
	            	<td></td>
	            </tr>	
            	<tr class="border-dotted">
					<td>5.2. resto inversiones</td>
	            	<td></td>
	            </tr>	
            	<tr class="border-dotted">
					<td>6. déficit o superávit total (3+4-5)</td>
	            	<td></td>
	            </tr>	
            	<tr class="border-dotted">
					<td>7. financiamiento (7.1 + 7.2)</td>
	            	<td></td>
	            </tr>	
            	<tr class="border-dotted">
					<td>7.1. crédito interno y externo (7.1.1 - 7.1.2.)</td>
	            	<td></td>
	            </tr>	
            	<tr class="border-dotted">
					<td>7.1.1. desembolsos (+)</td>
	            	<td></td>
	            </tr>	
            	<tr class="border-dotted">
					<td>7.1.2. amortizaciones (-)</td>
	            	<td></td>
	            </tr>	
            	<tr class="border-dotted">
					<td>7.2. recursos balance, var. depósitos, otros</td>
	            	<td></td>
	            </tr>	
	        </tbody>
		</table>

	</div>

	<div class="col-sm-12 col-md-12 col-lg-12"></div>

	<div  class="col-sm-6 col-md-6 col-lg-6">

		<table class="table table-bordered table-hover">
			<thead class="thead-s">
				<tr>
					<th>Indice de desempeño integral</th>
					<th>Valores</th>
				</tr>
			</thead>
			<tbody>
	            <tr class="border-dotted">
	            	<td>Desempeño integral capacidad administrativa</td>
	            	<td></td>
	            </tr>	
				<tr class="border-dotted">
					<td>Desempeño integral eficacia total</td>
	            	<td></td>
	            </tr>	
				<tr class="border-dotted">
					<td>Desempeño integral gestión</td>
	            	<td></td>
	            </tr>	
				<tr class="border-dotted">
					<td>Desempeño integral indice integral</td>
	            	<td></td>
	            </tr>	 
				<tr class="border-dotted">
					<td>Desempeño integral requisitos legales</td>
	            	<td></td>
	            </tr>	 
				<tr class="border-dotted">
					<td>Desempeño integral indicador de desempeño fiscal</td>
	            	<td></td>
	            </tr>	 	
	        </tbody>
		</table>

	</div>

	<div  class="col-sm-6 col-md-6 col-lg-6">

		<table class="table table-bordered table-hover">
			<thead class="thead-s">
				<tr>
					<th>Indice de desempeño fiscal</th>
					<th>Valores</th>
				</tr>
			</thead>
			<tbody>
	            <tr class="border-dotted">	
					<td>Auto financiación de los gastos de funcionamiento</td>
	            	<td></td>
	            </tr>		
				<tr class="border-dotted">
				 	<td>Respaldo del servicio de la deuda</td>
	            	<td></td>
	            </tr>		
				<tr class="border-dotted">
					<td>Dependencia de las transferencias de la nación y las regalías</td>
	            	<td></td>
	            </tr>		
				<tr class="border-dotted">
					<td>Generación de recursos propios</td>
	            	<td></td>
	            </tr>		
				<tr class="border-dotted">
					<td>Magnitud de la inversión</td>
	            	<td></td>
	            </tr>		
				<tr class="border-dotted">
					<td>Capacidad de ahorro</td>
	            	<td></td>
	            </tr>		
				<tr class="border-dotted">
					<td>Indicador de desempeño fiscal</td>
	            	<td></td>
	            </tr>		
				<tr class="border-dotted">
					<td>Posición a nivel nacional</td>
	            	<td></td>
	            </tr>		
				<tr class="border-dotted">
					<td>Posición a nivel departamento</td>
	            	<td></td>
	            </tr>			 	
	        </tbody>
		</table>

	</div>

</div>

<center>
	<div id="grafica1" class="col-sm-12 col-md-12 col-lg-12"  style="display: none;">

	</div>
</center>

<center>
	<div id="grafica2" class="col-sm-12 col-md-12 col-lg-12"  style="display: none;">

	</div>
</center>

<center>
	<div id="grafica3" class="col-sm-12 col-md-12 col-lg-12"  style="display: none;">

	</div>
</center>

@endsection

@section('javascripttable')
	<script type="text/javascript" src="{{ url('https://www.gstatic.com/charts/loader.js') }}"></script>
	<script src="{{ asset('js/user/finanza.js') }}"></script>
@endsection
