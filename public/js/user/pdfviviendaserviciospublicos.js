function años()
{
	var municipio = $("#municipio").val();

	$.ajax({
		headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
		method: "GET",
		url: "/mostrarAñoPdfVSP",
		dataType: 'json',
		data: { idMunicipio: municipio}
	})

	.done(function(response) {
		$('#date1').html(response.html);
	});
}