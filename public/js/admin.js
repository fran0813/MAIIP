function main(){

		var username = $("#username").val();
		var email = $("#email").val();
		var password = $("#password").val();

		$.ajax({
		method: "POST",
		url: "/js/adminIngresarDatos.php",
		dataType: 'json',
		data: { name: username, email: email, password: password }
		})

		.done(function(response) {
			alert("bn")
		});

}