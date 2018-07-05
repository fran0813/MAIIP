$(document).ready(function()
{
	subirRespuestas();
});

function subirRespuestas()
{
	$('#subiendo').html("");
	$('#loader').html("<label class='control-label'>Se esta subiendo los resultados</label><div class='center-block loader'></div>")
	$('#loader').fadeIn(1000);

	$.ajax({
		headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
		method: "POST",
		url: "/admin/subirRespuestaFinanza",
		dataType: 'json',
		data: {  }
	})

	.done(function(response){
		$('#loader').fadeOut(1000);
		$('#subiendo').hide();
// console.log(response);
		// $('#subiendo').html(response.html).fadeIn(2000);

		// if (response.boolean == "True") {
			
			setTimeout(function(){
				location.href ="/admin/finanza";
			}, 1000);

		// } else {
			
		// 	setTimeout(function(){
		// 		// location.href ="/admin/municipio";
		// 	}, 3000);
		// }
	});
}