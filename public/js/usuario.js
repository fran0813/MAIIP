$("#form").on("submit", function(){

	var username = $("#username").val();
	var password = $("#password").val();

	$.ajax({
		method: "POST",
		url: "/js/users/login.php",
		dataType: 'json',
		data: { username: username, password: password }
	})

	.done(function(response) {
		if(response == "true"){

			location.href="/admin/principal";

		}else{

			$('#respuesta').html("Usuario o contraseña incorrecta");

		}
	});

	return false;

}); 