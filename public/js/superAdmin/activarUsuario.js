$(document).ready(function()
{
    mostrarTablaActivarUsuario();
});

function mostrarTablaActivarUsuario()
{
    $.ajax({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        method: "POST",
        url: "/superAdmin/mostrarTablaActivarUsuario",
        dataType: 'json',
        data: { }
    })

    .done(function(response){
        $('#mostrarTablaActivarUsuario').html(response.html);
    });
}

$("#mostrarTablaActivarUsuario").on("click", "a", function()
{
    var id = $(this).attr("id");
    var value = $(this).attr("value");

    activar(id, value)

});

function activar(id, estado)
{
    $.ajax({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        method: "POST",
        url: "/superAdmin/ActualizarActivarUsuario",
        dataType: 'json',
        data: { id: id,
                estado: estado,
                }
    })

    .done(function(response) {
        mostrarTablaActivarUsuario();
    });
}