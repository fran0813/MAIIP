<div class="col-sm-1 col-md-1 col-lg-1" style="padding-top: 1%;">
	<b id="codigo2"></b>
</div>

<div id="codigo" class="col-sm-2 col-md-2 col-lg-2">
	<input class="form-control" type="text" disabled="true">
</div>

<div class="col-sm-5 col-md-5 col-lg-5">
	<select id="departamento" class="form-control" onchange="mostrarMunicipios();establecerDepartamento();mostrarTablasF();">
		<option>Seleccione un departamento</option>
	</select>
</div>

<div class="col-sm-4 col-md-4 col-lg-4">
	<select id="municipio" class="form-control" onchange="mostrarCodigo();mostrarAñoF();establecerMunicipio();mostrarTablasF();">
		<option>Seleccione un municipio</option>			
	</select>
</div>