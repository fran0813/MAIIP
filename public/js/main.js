function mostrarMunicipios(){

	var dep = $("#dep").val();

	$.ajax({
		method: "POST",
		url: "/js/prueba.php",
		data: { iddep: dep }
	})

	.done(function(response) {
		$('#mun').html(response);
	});

}