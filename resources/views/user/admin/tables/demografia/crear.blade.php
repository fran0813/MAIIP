{{-- Modal Crear --}}
<!-- Modal -->
<div class="modal fade" id="modalCrear" role="dialog">

    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">

            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title"> Crear Generalidades y territorios</h4>
            </div>
            
            <div id="modalCrear" class="modal-body">

            <form id="formCrear">

                <label for="anio">Año</label>       
                <input id="anio" type="date" oninput="calcularCrecPob()">

                <br>
                <br>

                <label for="pobEdadTrabajar">Población en edad de trabajar</label>        
                <input id="pobEdadTrabajar" type="text" placeholder="Población en edad de trabajar" oninput="calcularCrecPob()">

                <br>
                <br>

                <label for="pobPotActiva">Población activa</label>     
                <input id="pobPotActiva" type="text" placeholder="Población activa">

                <br>
                <br>

                <label for="pobPotInactiva">Población inactiva</label>     
                <input id="pobPotInactiva" type="text" placeholder="Población inactiva">

                <br>
                <br>

                <label for="numPerMen">Numero de personas menores</label>     
                <input id="numPerMen" type="text" placeholder="Numero de personas menores">

                <br>
                <br>

                <label for="numPerMay">Numero de personas mayores</label>     
                <input id="numPerMay" type="text" placeholder="Numero de personas mayores">

                <br>
                <br>

                <label for="numPerInd">Numero de personas independientes</label>     
                <input id="numPerInd" type="text" placeholder="Numero de personas independientes">

                <br>
                <br>

                <label for="numPerDep">Numero de personas dependientes</label>     
                <input id="numPerDep" type="text" placeholder="Numero de personas dependientes">

                <br>
                <br>

                <label for="pobHom">Población de hombres</label>     
                <input id="pobHom" type="text" placeholder="Población de hombres">

                <br>
                <br>

                <label for="pobMuj">Población de mujeres</label>     
                <input id="pobMuj" type="text" placeholder="Población de mujeres">

                <br>
                <br>

                <label for="pobZonCab">Población zona cabecera</label>     
                <input id="pobZonCab" type="text" placeholder="Población zona cabecera">

                <br>
                <br>

                <label for="pobZonRes">Población zona resto</label>     
                <input id="pobZonRes" type="text" placeholder="Población zona resto" oninput="calcularIndRuralidad()">

                <br>
                <br>

                <label for="indRuralidad">Indice de ruralidad</label>     
                <input id="indRuralidad" type="text" placeholder="Indice de ruralidad" disabled="">

                <br>
                <br>

                <label for="pobTotal">Población total</label>     
                <input id="pobTotal" type="text" placeholder="Población total" oninput="calcularIndRuralidad()">

                <br>
                <br>
                    
                <div id="recibirCrecPob">
                <label for="crecPob">Crecimiento poblacional</label>     
                <input id="crecPob" type="text" placeholder="Crecimiento poblacional" disabled="">
                </div>

                <br>
                <br>
              
                <div style="display: none;">
                    <input id="created_at" type="date">
                    <input id="updated_at" type="date">
                </div>
                            
                <input type="submit" value="submit">

            </form>

            <p id="respuesta"></p>
        
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>

        </div>

    </div>

</div>