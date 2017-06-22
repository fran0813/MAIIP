$("#form").on("submit", function(){

	var username = $("#username").val();
	var password = $("#password").val();
		
	$.ajax({
		method: "GET",
		url: "/admin",
		dataType: 'json',
		data: { username: username, password: password }
	})

	.done(function(response) {

		if(response.html == "true"){

			location.href="/admin/principal";

		}else{

			$('#respuesta').html("Usuario o contraseña incorrecta");

		}
	});

	return false;

}); 