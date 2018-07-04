$( document ).ready(function()
{    
    año();
});

// Mostrar 
function mostrarDatos()
{
	var municipio = $("#municipio").val();

	if (municipio != "Seleccione un municipio") {

		mostrarCrear();

		$.ajax({
			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
			method: "GET",
			url: "/economicosocial/mostrarTablaEconomicosocial",
			dataType: 'json',
			data: { idMunicipio: municipio }
		})

		.done(function(response) {
			$('#tablaEconomicosocial').html(response.html);
		});

	} else {
		$('#tablaEconomicosocial').html("<center><h3>Porfavor seleccione un <strong>Departamento</strong> y un <strong>Municipio</strong></h3></center>");
	}
}

function mostrarCrear()
{
	$("#crear").show();
}

$("#tablaEconomicosocial").on("click", "a", function()
{
	var value = $(this).attr("value");
	var id = $(this).attr("id");

	if (value == "editar") {
		mostrarActualizarEconomicosocial(id);
	} else if(value == "eliminar") {
		// $.ajax({
		// 	headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
		// 	method: "GET",
		// 	url: "/demografia/borrarDemografia",
		// 	dataType: 'json',
		// 	data: { idD: id }
		// })

		// .done(function(response) {
		// 	mostrarDatos();
		// });
	}
});	

function mostrarActualizarEconomicosocial(id)
{
	$('#respuesta2').hide();

	$.ajax({
		headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
		method: "POST",
		url: "/economicosocial/mostrarActualizarEconomicosocial",
		dataType: 'json',
		data: { idD: id }
	})

	.done(function(response) {
		$("#idD").val(response.id);
		$("#anio2").val(response.anio);
		$('numHecSemBos').val(response.numHecSemBos);
        $('areAgrCosTot').val(response.areAgrCosTot);
        $('proAgrTot').val(response.proAgrTot);
        $('proCar').val(response.proCar);
        $('invBovTotMac').val(response.invBovTotMac);
        $('invBovTotHem').val(response.invBovTotHem);
        $('invBovTot').val(response.invBovTot);
        $('incIpmTot').val(response.incIpmTot);
        $('incIpmRur').val(response.incIpmRur);
        $('incIpmUrb').val(response.incIpmUrb);
        $('uniCom').val(response.uniCom);
        $('uniSer').val(response.uniSer);
        $('uniGraCom').val(response.uniGraCom);
        $('uniGraInd').val(response.uniGraInd);
        $('uniGraSer').val(response.uniGraSer);
        $('uniInd').val(response.uniInd);
        $('uniMedCom').val(response.uniMedCom);
        $('uniMedInd').val(response.uniMedInd);
        $('uniMedSer').val(response.uniMedSer);
        $('uniMicCom').val(response.uniMicCom);
        $('uniMicInd').val(response.uniMicInd);
        $('uniMicSer').val(response.uniMicSer);
        $('uniPeqCom').val(response.uniPeqCom);
        $('uniPeqInd').val(response.uniPeqInd);
        $('uniPeqSer').val(response.uniPeqSer);
        $('altTasDepEco').val(response.altTasDepEco);
        $('ana').val(response.ana);
        $('bajLogEdu').val(response.bajLogEdu);
        $('barAccSerSal').val(response.barAccSerSal);
        $('barAccSerCiu').val(response.barAccSerCiu);
        $('empInf').val(response.empInf);
        $('hac').val(response.hac);
        $('inaEliExc').val(response.inaEliExc);
        $('inaEsc').val(response.inaEsc);
        $('parIna').val(response.parIna);
        $('pisIna').val(response.pisIna);
        $('rezEsc').val(response.rezEsc);
        $('sinAccFueAgMej').val(response.sinAccFueAgMej);
        $('sinAseSal').val(response.sinAseSal);
        $('traInf').val(response.traInf);
	});
}

// Crear
function año()
{
	var hoy = new Date();
	var dd = hoy.getDate();
	var mm = hoy.getMonth()+1; //hoy es 0!
	var yyyy = hoy.getFullYear();

	if(dd < 10) {
	    dd='0'+dd;
	} 

	if(mm < 10) {
	    mm='0'+mm;
	} 

	anio = $("#anio")[0];
	anio.value = yyyy+'-'+mm+'-'+dd;
}

$("#formCrear").on("submit", function()
{
	var anio = $("#anio").val();
	var comprobar = parseInt(anio.substr(0,4));
	var numHecSemBos = $("numHecSemBos").val();
    var areAgrCosTot = $("areAgrCosTot").val();
    var proAgrTot = $("proAgrTot").val();
    var proCar = $("proCar").val();
    var invBovTotMac = $("invBovTotMac").val();
    var invBovTotHem = $("invBovTotHem").val();
    var invBovTot = $("invBovTot").val();
    var incIpmTot = $("incIpmTot").val();
    var incIpmRur = $("incIpmRur").val();
    var incIpmUrb = $("incIpmUrb").val();
    var uniCom = $("uniCom").val();
    var uniSer = $("uniSer").val();
    var uniGraCom = $("uniGraCom").val();
    var uniGraInd = $("uniGraInd").val();
    var uniGraSer = $("uniGraSer").val();
    var uniInd = $("uniInd").val();
    var uniMedCom = $("uniMedCom").val();
    var uniMedInd = $("uniMedInd").val();
    var uniMedSer = $("uniMedSer").val();
    var uniMicCom = $("uniMicCom").val();
    var uniMicInd = $("uniMicInd").val();
    var uniMicSer = $("uniMicSer").val();
    var uniPeqCom = $("uniPeqCom").val();
    var uniPeqInd = $("uniPeqInd").val();
    var uniPeqSer = $("uniPeqSer").val();
    var altTasDepEco = $("altTasDepEco").val();
    var ana = $("ana").val();
    var bajLogEdu = $("bajLogEdu").val();
    var barAccSerSal = $("barAccSerSal").val();
    var barAccSerCiu = $("barAccSerCiu").val();
    var empInf = $("empInf").val();
    var hac = $("hac").val();
    var inaEliExc = $("inaEliExc").val();
    var inaEsc = $("inaEsc").val();
    var parIna = $("parIna").val();
    var pisIna = $("pisIna").val();
    var rezEsc = $("rezEsc").val();
    var sinAccFueAgMej = $("sinAccFueAgMej").val();
    var sinAseSal = $("sinAseSal").val();
    var traInf = $("traInf").val();

	$.ajax({
		headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
		method: "POST",
		url: "/economicosocial/crearEconomicosocial",
		dataType: 'json',
		data: { anioD: anio,
				comprobar: comprobar,
				numHecSemBos: numHecSemBos,
			    areAgrCosTot: areAgrCosTot,
			    proAgrTot: proAgrTot,
			    proCar: proCar,
			    invBovTotMac: invBovTotMac,
			    invBovTotHem: invBovTotHem,
			    invBovTot: invBovTot,
			    incIpmTot: incIpmTot,
			    incIpmRur: incIpmRur,
			    incIpmUrb: incIpmUrb,
			    uniCom: uniCom,
			    uniSer: uniSer,
			    uniGraCom: uniGraCom,
			    uniGraInd: uniGraInd,
			    uniGraSer: uniGraSer,
			    uniInd: uniInd,
			    uniMedCom: uniMedCom,
			    uniMedInd: uniMedInd,
			    uniMedSer: uniMedSer,
			    uniMicCom: uniMicCom,
			    uniMicInd: uniMicInd,
			    uniMicSer: uniMicSer,
			    uniPeqCom: uniPeqCom,
			    uniPeqInd: uniPeqInd,
			    uniPeqSer: uniPeqSer,
			    altTasDepEco: altTasDepEco,
			    ana: ana,
			    bajLogEdu: bajLogEdu,
			    barAccSerSal: barAccSerSal,
			    barAccSerCiu: barAccSerCiu,
			    empInf: empInf,
			    hac: hac,
			    inaEliExc: inaEliExc,
			    inaEsc: inaEsc,
			    parIna: parIna,
			    pisIna: pisIna,
			    rezEsc: rezEsc,
			    sinAccFueAgMej: sinAccFueAgMej,
			    sinAseSal: sinAseSal,
			    traInf: traInf }
	})

	.done(function(response){
		$('#respuesta').show();
		$('#respuesta').html(response.html);
		mostrarDatos();		
	});

	return false;
}); 

function limpiarRespuesta()
{
	$('#respuesta').hide();
}

$("#formActualizar").on("submit", function()
{
	var idD = $("#idD").val();
	var numHecSemBos = $("numHecSemBos").val();
    var areAgrCosTot = $("areAgrCosTot").val();
    var proAgrTot = $("proAgrTot").val();
    var proCar = $("proCar").val();
    var invBovTotMac = $("invBovTotMac").val();
    var invBovTotHem = $("invBovTotHem").val();
    var invBovTot = $("invBovTot").val();
    var incIpmTot = $("incIpmTot").val();
    var incIpmRur = $("incIpmRur").val();
    var incIpmUrb = $("incIpmUrb").val();
    var uniCom = $("uniCom").val();
    var uniSer = $("uniSer").val();
    var uniGraCom = $("uniGraCom").val();
    var uniGraInd = $("uniGraInd").val();
    var uniGraSer = $("uniGraSer").val();
    var uniInd = $("uniInd").val();
    var uniMedCom = $("uniMedCom").val();
    var uniMedInd = $("uniMedInd").val();
    var uniMedSer = $("uniMedSer").val();
    var uniMicCom = $("uniMicCom").val();
    var uniMicInd = $("uniMicInd").val();
    var uniMicSer = $("uniMicSer").val();
    var uniPeqCom = $("uniPeqCom").val();
    var uniPeqInd = $("uniPeqInd").val();
    var uniPeqSer = $("uniPeqSer").val();
    var altTasDepEco = $("altTasDepEco").val();
    var ana = $("ana").val();
    var bajLogEdu = $("bajLogEdu").val();
    var barAccSerSal = $("barAccSerSal").val();
    var barAccSerCiu = $("barAccSerCiu").val();
    var empInf = $("empInf").val();
    var hac = $("hac").val();
    var inaEliExc = $("inaEliExc").val();
    var inaEsc = $("inaEsc").val();
    var parIna = $("parIna").val();
    var pisIna = $("pisIna").val();
    var rezEsc = $("rezEsc").val();
    var sinAccFueAgMej = $("sinAccFueAgMej").val();
    var sinAseSal = $("sinAseSal").val();
    var traInf = $("traInf").val();

	$.ajax({
		headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
		method: "POST",
		url: "/economicosocial/actualizarEconocimosocial",
		dataType: 'json',
		data: { idD: idD,
				comprobar: comprobar,
				numHecSemBos: numHecSemBos,
			    areAgrCosTot: areAgrCosTot,
			    proAgrTot: proAgrTot,
			    proCar: proCar,
			    invBovTotMac: invBovTotMac,
			    invBovTotHem: invBovTotHem,
			    invBovTot: invBovTot,
			    incIpmTot: incIpmTot,
			    incIpmRur: incIpmRur,
			    incIpmUrb: incIpmUrb,
			    uniCom: uniCom,
			    uniSer: uniSer,
			    uniGraCom: uniGraCom,
			    uniGraInd: uniGraInd,
			    uniGraSer: uniGraSer,
			    uniInd: uniInd,
			    uniMedCom: uniMedCom,
			    uniMedInd: uniMedInd,
			    uniMedSer: uniMedSer,
			    uniMicCom: uniMicCom,
			    uniMicInd: uniMicInd,
			    uniMicSer: uniMicSer,
			    uniPeqCom: uniPeqCom,
			    uniPeqInd: uniPeqInd,
			    uniPeqSer: uniPeqSer,
			    altTasDepEco: altTasDepEco,
			    ana: ana,
			    bajLogEdu: bajLogEdu,
			    barAccSerSal: barAccSerSal,
			    barAccSerCiu: barAccSerCiu,
			    empInf: empInf,
			    hac: hac,
			    inaEliExc: inaEliExc,
			    inaEsc: inaEsc,
			    parIna: parIna,
			    pisIna: pisIna,
			    rezEsc: rezEsc,
			    sinAccFueAgMej: sinAccFueAgMej,
			    sinAseSal: sinAseSal,
			    traInf: traInf }
	})

	.done(function(response) {
		$('#respuesta2').show();
		$('#respuesta2').html(response.html);	
		mostrarDatos();	
	});

	return false;
}); 