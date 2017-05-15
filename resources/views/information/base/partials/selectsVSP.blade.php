{{-- Codigo --}}
<div id="codigo" class="col-sm-2 col-md-2 col-lg-2">
	<input class="form-control" type="text" disabled="true">
</div>

{{-- Departamento --}}
<div class="col-sm-5 col-md-5 col-lg-5">
	<select id="departamento" class="form-control" onchange="mostrarMunicipios()">
		<option>Seleccione un departamento</option>
	</select>
</div>

{{-- Municipio --}}
<div class="col-sm-5 col-md-5 col-lg-5">
	<select id="municipio" class="form-control" onchange="mostrarCodigo();mostrarAñoVSP()">
		<option>Seleccione un municipio</option>			
	</select>
</div>