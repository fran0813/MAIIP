{{-- Modal Crear --}}
<div class="modal fade bd-example-modal-lg" id="modalCrear" role="dialog">

    <div class="modal-dialog modal-lg">

         {{-- Modal content --}}
        <div class="modal-content">

            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title"> Crear demografias</h4>
            </div>
            
            <div id="modalCrear" class="modal-body">

            <form id="formCrear">

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-5 col-md-5 col-sm-5">
                        <label for="anio" class="text-label">Año</label>       
                        <input id="anio" type="date" oninput="calcularCrecPob()" class="form-control">
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-7">
                        <label for="pobEdadTrabajar" class="text-label">Población en edad de trabajar</label>        
                        <input id="pobEdadTrabajar" type="text" placeholder="Población en edad de trabajar" oninput="calcularCrecPob()" class="form-control">
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12"><br></div> 

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <label for="pobPotActiva" class="text-label">Población activa</label>     
                        <input id="pobPotActiva" type="text" placeholder="Población activa" class="form-control">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <label for="pobPotInactiva" class="text-label">Población inactiva</label>     
                        <input id="pobPotInactiva" type="text" placeholder="Población inactiva" class="form-control">
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12"><br></div> 

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <label for="numPerMen" class="text-label">Numero de personas menores</label>     
                        <input id="numPerMen" type="text" placeholder="Numero de personas menores" class="form-control">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <label for="numPerMay" class="text-label">Numero de personas mayores</label>     
                        <input id="numPerMay" type="text" placeholder="Numero de personas mayores" class="form-control">
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12"><br></div> 

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <label for="numPerInd" class="text-label">Numero de personas independientes</label>     
                        <input id="numPerInd" type="text" placeholder="Numero de personas independientes" class="form-control">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <label for="numPerDep" class="text-label">Numero de personas dependientes</label>     
                        <input id="numPerDep" type="text" placeholder="Numero de personas dependientes" class="form-control">
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12"><br></div> 

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <label for="pobHom" class="text-label">Población de hombres</label>     
                        <input id="pobHom" type="text" placeholder="Población de hombres" class="form-control">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <label for="pobMuj" class="text-label">Población de mujeres</label>     
                        <input id="pobMuj" type="text" placeholder="Población de mujeres" class="form-control">
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12"><br></div> 

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="pobZonCab" class="text-label">Población zona cabecera</label>     
                        <input id="pobZonCab" type="text" placeholder="Población zona cabecera" class="form-control">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="pobZonRes" class="text-label">Población zona resto</label>     
                        <input id="pobZonRes" type="text" placeholder="Población zona resto" oninput="calcularIndRuralidad()" class="form-control">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="indRuralidad" class="text-label">Indice de ruralidad</label>     
                        <input id="indRuralidad" type="text" placeholder="Indice de ruralidad" disabled="" class="form-control">
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12"><br></div> 

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <label for="pobTotal" class="text-label">Población total</label>     
                        <input id="pobTotal" type="text" placeholder="Población total" oninput="calcularIndRuralidad()" class="form-control">
                    </div>
                    <div id="recibirCrecPob" class="col-lg-6 col-md-6 col-sm-6">                    
                        <label for="crecPob" class="text-label">Crecimiento poblacional</label>     
                        <input id="crecPob" type="text" placeholder="Crecimiento poblacional" disabled="" class="form-control">               
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12"><br></div> 

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div style="display: none;">
                        <input id="created_at" type="date">
                        <input id="updated_at" type="date">
                    </div>
                    
                    &nbsp;&nbsp;<button type="button" class="btn btn-default pull-right" data-dismiss="modal">Cerrar</button> &nbsp;&nbsp;        
                    <input type="submit" value="Guardar Datos Nuevos" class="btn btn-primary pull-right">&nbsp;&nbsp;

                </div>

            </form>

            <div class="col-lg-12 col-md-12 col-sm-12">
                <p id="respuesta"></p>
            
                </div>
            </div>

            <div class="modal-footer">
              
            </div>

        </div>

    </div>

</div>