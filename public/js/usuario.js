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
		$('#r').html(response);
	});

	return false;
});