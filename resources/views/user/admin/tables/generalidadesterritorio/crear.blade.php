{{-- Modal Crear --}}
<div class="modal fade" id="modalCrear" role="dialog">

    <div class="modal-dialog">

         {{-- Modal content --}}
        <div class="modal-content">

            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title"> Crear Generalidades y territorios</h4>
            </div>
            
            <div id="modalCrear" class="modal-body">

            <form id="formCrear">

                <label for="anio">Año</label>       
                <input id="anio" type="date">

                <br>
                <br>

                <label for="temperatura">Temperatura</label>        
                <input id="temperatura" type="text" placeholder="Temperatura">

                <br>
                <br>

                <label for="alturaNivMar">Altura sobre el nivel del mar</label>     
                <input id="alturaNivMar" type="text" placeholder="Altura sobre el mar">

                <br>
                <br>

                <div>
                
                <label for="ruralG">Generalidades</label>

                    <label for="ruralG">Rural</label>       
                    <input id="ruralG" type="text" placeholder="Rural" oninput="calcularTotalG()">

                    <br>
                    <br>

                    <label for="urbanoG">Urbano</label>     
                    <input id="urbanoG" type="text" placeholder="Urbano" oninput="calcularTotalG()">

                    <br>
                    <br>

                    <label for="totalG">Total</label>       
                    <input id="totalG" type="text" placeholder="Total" disabled="">
                </div>

                <br>
                <br>

                <div>
                    <div>
                        
                        <label for="constRural">Territorio</label>

                        <br>

                        <label for="constRural">Construida</label>

                        <label for="constRural">Rural</label>       
                        <input id="constRural" type="text" placeholder="Rural" oninput="calcularConstTotal()">

                        <br>
                        <br>

                        <label for="constUrbano">Urbano</label>     
                        <input id="constUrbano" type="text" placeholder="Urbano" oninput="calcularConstTotal()">

                        <br>
                        <br>

                        <label for="constTotal">Total</label>       
                        <input id="constTotal" type="text" placeholder="Total" disabled="">

                    </div>

                    <br>
                    <br>

                    <div>

                        <label for="terrRural">terreno</label>

                        <label for="terrRural">Rural</label>        
                        <input id="terrRural" type="text" placeholder="Rural" oninput="calcularTerrTotal()">

                        <br>
                        <br>

                        <label for="terrUrbano">Urbano</label>      
                        <input id="terrUrbano" type="text" placeholder="Urbano" oninput="calcularTerrTotal()">

                        <br>
                        <br>

                        <label for="terrTotal">Total</label>        
                        <input id="terrTotal" type="text" placeholder="Total" disabled="">
                    </div>
                </div>

                <br>
                <br>

                <div>

                    <label for="ruralP">Predios</label>

                    <label for="ruralP">Rural</label>       
                    <input id="ruralP" type="text" placeholder="Rural" oninput="calcularTotalP()">

                    <br>
                    <br>

                    <label for="urbanoP">Urbano</label>     
                    <input id="urbanoP" type="text" placeholder="Urbano" oninput="calcularTotalP()">

                    <br>
                    <br>

                    <label for="totalP">Total</label>       
                    <input id="totalP" type="text" placeholder="Total" disabled="">
                </div>

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