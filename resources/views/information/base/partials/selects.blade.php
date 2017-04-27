{{-- codigo --}}
<div id="cod" class="col-sm-2 col-md-2 col-lg-2">
	<input class="form-control" type="text" value="">
</div>

{{-- departamento --}}
<div class="col-sm-5 col-md-5 col-lg-5">
	<select id="dep" class="form-control" onchange="mostrarMunicipios()">
		<option>Seleccione un departamento</option>
	</select>
</div>

{{-- municipio --}}
<div class="col-sm-5 col-md-5 col-lg-5">
	<select id="mun" class="form-control" onchange="mostrarCodigo()">
		<option>Seleccione un municipio</option>			
	</select>
</div>