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
			url: "/finanza/mostrarTablaFinanza",
			dataType: 'json',
			data: { idMunicipio: municipio }
		})

		.done(function(response) {
			$('#tablaFinanza').html(response.html);
		});

	} else {
		$('#tablaFinanza').html("<center><h3>Porfavor seleccione un <strong>Departamento</strong> y un <strong>Municipio</strong></h3></center>");
	}
}

function mostrarCrear()
{
	$("#crear").show();
}

$("#tablaFinanza").on("click", "a", function()
{
	var value = $(this).attr("value");
	var id = $(this).attr("id");

	if (value == "editar") {
		mostrarActualizarFinanza(id);
	} else if(value == "eliminar") {
		// $.ajax({
		// 	headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
		// 	method: "GET",
		// 	url: "/demografia/borrarDemografia",
		// 	dataType: 'json',
		// 	data: { idF: id }
		// })

		// .done(function(response) {
		// 	mostrarDatos();
		// });
	}
});	

function mostrarActualizarFinanza(id)
{
	$('#respuesta2').hide();

	$.ajax({
		headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
		method: "POST",
		url: "/finanza/mostrarActualizarFinanza",
		dataType: 'json',
		data: { idSV: id }
	})

	.done(function(response) {
		$("#idF").val(response.id);
		$("#anio2").val(response.anio);
		$("ingTot2").val(response.ingTot);
		$("ingCor2").val(response.ingCor);
		$("ingTri2").val(response.ingTri);
		$("ingPre2").val(response.ingPre);
		$("ingIndCom2").val(response.ingIndCom);
		$("ingSobGas2").val(response.ingSobGas);
		$("ingOtr2").val(response.ingOtr);
		$("ingNoTri2").val(response.ingNoTri);
		$("ingTra2").val(response.ingTra);
		$("ingNivNac2").val(response.ingNivNac);
		$("ingNoTriOtr2").val(response.ingNoTriOtr);
		$("gasTot2").val(response.gasTot);
		$("gasCor2").val(response.gasCor);
		$("fun2").val(response.fun);
		$("serFun2").val(response.serFun);
		$("gasGen2").val(response.gasGen);
		$("traPag2").val(response.traPag);
		$("intDeuPub2").val(response.intDeuPub);
		$("defAhoCor2").val(response.defAhoCor);
		$("ingCap2").val(response.ingCap);
		$("reg2").val(response.reg);
		$("traNac2").val(response.traNac);
		$("cof2").val(response.cof);
		$("ingCapOtr2").val(response.ingCapOtr);
		$("gasCap2").val(response.gasCap);
		$("forBruCapFij2").val(response.forBruCapFij);
		$("gasCapOtr2").val(response.gasCapOtr);
		$("defSupTot2").val(response.defSupTot);
		$("fin2").val(response.fin);
		$("creNet2").val(response.creNet);
		$("des2").val(response.des);
		$("amo2").val(response.amo);
		$("recBalVarDepOtr2").val(response.recBalVarDepOtr);
		$("ejeIngTot2").val(response.ejeIngTot);
		$("ejeIngCor2").val(response.ejeIngCor);
		$("ejeIngTri2").val(response.ejeIngTri);
		$("ejeIngPre2").val(response.ejeIngPre);
		$("ejeIngIndCom2").val(response.ejeIngIndCom);
		$("ejeIngSobGas2").val(response.ejeIngSobGas);
		$("ejeIngOtr2").val(response.ejeIngOtr);
		$("ejeIngNoTri2").val(response.ejeIngNoTri);
		$("ejeIngTra2").val(response.ejeIngTra);
		$("ejeIngNivNac2").val(response.ejeIngNivNac);
		$("ejeIngNoTriOtr2").val(response.ejeIngNoTriOtr);
		$("ejeGasTot2").val(response.ejeGasTot);
		$("ejeGasCor2").val(response.ejeGasCor);
		$("ejeFun2").val(response.ejeFun);
		$("ejeSerFun2").val(response.ejeSerFun);
		$("ejeGasGen2").val(response.ejeGasGen);
		$("ejeTraPag2").val(response.ejeTraPag);
		$("ejeIntDeuPub2").val(response.ejeIntDeuPub);
		$("ejeDefAhoCor2").val(response.ejeDefAhoCor);
		$("ejeIngCap2").val(response.ejeIngCap);
		$("ejeReg2").val(response.ejeReg);
		$("ejeTraNac2").val(response.ejeTraNac);
		$("ejeCof2").val(response.ejeCof);
		$("ejeIngCapOtr2").val(response.ejeIngCapOtr);
		$("ejeGasCap2").val(response.ejeGasCap);
		$("ejeForBruCapFij2").val(response.ejeForBruCapFij);
		$("ejeGasCapOtr2").val(response.ejeGasCapOtr);
		$("ejeDefSupTot2").val(response.ejeDefSupTot);
		$("ejeFin2").val(response.ejeFin);
		$("ejeCreNet2").val(response.ejeCreNet);
		$("ejeDes2").val(response.ejeDes);
		$("ejeAmo2").val(response.ejeAmo);
		$("ejeRecBalVarDepOtr2").val(response.ejeRecBalVarDepOtr);
 		$("desIntCapAdm2").val(response.desIntCapAdm);
		$("desIntEfiTot2").val(response.desIntEfiTot);
		$("desIntGes2").val(response.desIntGes);
		$("desIntIndInt2").val(response.desIntIndInt);
		$("desIntReqLeg2").val(response.desIntReqLeg);
		$("desIntIndDesFis2").val(response.desIntIndDesFis);
 		$("autGasFun2").val(response.autGasFun);
		$("respSerDeu2").val(response.respSerDeu);
		$("depTraNacReg2").val(response.depTraNacReg);
		$("genRecPro2").val(response.genRecPro);
		$("magInv2").val(response.magInv);
		$("capAho2").val(response.capAho);
		$("indDesFis2").val(response.indDesFis);
		$("posNivNac2").val(response.posNivNac);
		$("posNivDep2").val(response.posNivDep);
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
	var ingTot = $("ingTot").val();
	var ingCor = $("ingCor").val();
	var ingTri = $("ingTri").val();
	var ingPre = $("ingPre").val();
	var ingIndCom = $("ingIndCom").val();
	var ingSobGas = $("ingSobGas").val();
	var ingOtr = $("ingOtr").val();
	var ingNoTri = $("ingNoTri").val();
	var ingTra = $("ingTra").val();
	var ingNivNac = $("ingNivNac").val();
	var ingNoTriOtr = $("ingNoTriOtr").val();
	var gasTot = $("gasTot").val();
	var gasCor = $("gasCor").val();
	var fun = $("fun").val();
	var serFun = $("serFun").val();
	var gasGen = $("gasGen").val();
	var traPag = $("traPag").val();
	var intDeuPub = $("intDeuPub").val();
	var defAhoCor = $("defAhoCor").val();
	var ingCap = $("ingCap").val();
	var reg = $("reg").val();
	var traNac = $("traNac").val();
	var cof = $("cof").val();
	var ingCapOtr = $("ingCapOtr").val();
	var gasCap = $("gasCap").val();
	var forBruCapFij = $("forBruCapFij").val();
	var gasCapOtr = $("gasCapOtr").val();
	var defSupTot = $("defSupTot").val();
	var fin = $("fin").val();
	var creNet = $("creNet").val();
	var des = $("des").val();
	var amo = $("amo").val();
	var recBalVarDepOtr = $("recBalVarDepOtr").val();
	var ejeIngTot = $("ejeIngTot").val();
	var ejeIngCor = $("ejeIngCor").val();
	var ejeIngTri = $("ejeIngTri").val();
	var ejeIngPre = $("ejeIngPre").val();
	var ejeIngIndCom = $("ejeIngIndCom").val();
	var ejeIngSobGas = $("ejeIngSobGas").val();
	var ejeIngOtr = $("ejeIngOtr").val();
	var ejeIngNoTri = $("ejeIngNoTri").val();
	var ejeIngTra = $("ejeIngTra").val();
	var ejeIngNivNac = $("ejeIngNivNac").val();
	var ejeIngNoTriOtr = $("ejeIngNoTriOtr").val();
	var ejeGasTot = $("ejeGasTot").val();
	var ejeGasCor = $("ejeGasCor").val();
	var ejeFun = $("ejeFun").val();
	var ejeSerFun = $("ejeSerFun").val();
	var ejeGasGen = $("ejeGasGen").val();
	var ejeTraPag = $("ejeTraPag").val();
	var ejeIntDeuPub = $("ejeIntDeuPub").val();
	var ejeDefAhoCor = $("ejeDefAhoCor").val();
	var ejeIngCap = $("ejeIngCap").val();
	var ejeReg = $("ejeReg").val();
	var ejeTraNac = $("ejeTraNac").val();
	var ejeCof = $("ejeCof").val();
	var ejeIngCapOtr = $("ejeIngCapOtr").val();
	var ejeGasCap = $("ejeGasCap").val();
	var ejeForBruCapFij = $("ejeForBruCapFij").val();
	var ejeGasCapOtr = $("ejeGasCapOtr").val();
	var ejeDefSupTot = $("ejeDefSupTot").val();
	var ejeFin = $("ejeFin").val();
	var ejeCreNet = $("ejeCreNet").val();
	var ejeDes = $("ejeDes").val();
	var ejeAmo = $("ejeAmo").val();
	var ejeRecBalVarDepOtr = $("ejeRecBalVarDepOtr").val();
	var desIntCapAdm = $("desIntCapAdm").val();
	var desIntEfiTot = $("desIntEfiTot").val();
	var desIntGes = $("desIntGes").val();
	var desIntIndInt = $("desIntIndInt").val();
	var desIntReqLeg = $("desIntReqLeg").val();
	var desIntIndDesFis = $("desIntIndDesFis").val();
	var autGasFun = $("autGasFun").val();
	var respSerDeu = $("respSerDeu").val();
	var depTraNacReg = $("depTraNacReg").val();
	var genRecPro = $("genRecPro").val();
	var magInv = $("magInv").val();
	var capAho = $("capAho").val();
	var indDesFis = $("indDesFis").val();
	var posNivNac = $("posNivNac").val();
	var posNivDep = $("posNivDep").val();
	var municipio = $("#municipio").val();

	$.ajax({
		headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
		method: "POST",
		url: "/finanza/crearFinanza",
		dataType: 'json',
		data: { anioD: anio,
				comprobar: comprobar,
				municipio_id: municipio,
				ingTot: ingTot,
				ingCor: ingCor,
				ingTri: ingTri,
				ingPre: ingPre,
				ingIndCom: ingIndCom,
				ingSobGas: ingSobGas,
				ingOtr: ingOtr,
				ingNoTri: ingNoTri,
				ingTra: ingTra,
				ingNivNac: ingNivNac,
				ingNoTriOtr: ingNoTriOtr,
				gasTot: gasTot,
				gasCor: gasCor,
				fun: fun,
				serFun: serFun,
				gasGen: gasGen,
				traPag: traPag,
				intDeuPub: intDeuPub,
				defAhoCor: defAhoCor,
				ingCap: ingCap,
				reg: reg,
				traNac: traNac,
				cof: cof,
				ingCapOtr: ingCapOtr,
				gasCap: gasCap,
				forBruCapFij: forBruCapFij,
				gasCapOtr: gasCapOtr,
				defSupTot: defSupTot,
				fin: fin,
				creNet: creNet,
				des: des,
				amo: amo,
				recBalVarDepOtr: recBalVarDepOtr,
				ejeIngTot: ejeIngTot,
				ejeIngCor: ejeIngCor,
				ejeIngTri: ejeIngTri,
				ejeIngPre: ejeIngPre,
				ejeIngIndCom: ejeIngIndCom,
				ejeIngSobGas: ejeIngSobGas,
				ejeIngOtr: ejeIngOtr,
				ejeIngNoTri: ejeIngNoTri,
				ejeIngTra: ejeIngTra,
				ejeIngNivNac: ejeIngNivNac,
				ejeIngNoTriOtr: ejeIngNoTriOtr,
				ejeGasTot: ejeGasTot,
				ejeGasCor: ejeGasCor,
				ejeFun: ejeFun,
				ejeSerFun: ejeSerFun,
				ejeGasGen: ejeGasGen,
				ejeTraPag: ejeTraPag,
				ejeIntDeuPub: ejeIntDeuPub,
				ejeDefAhoCor: ejeDefAhoCor,
				ejeIngCap: ejeIngCap,
				ejeReg: ejeReg,
				ejeTraNac: ejeTraNac,
				ejeCof: ejeCof,
				ejeIngCapOtr: ejeIngCapOtr,
				ejeGasCap: ejeGasCap,
				ejeForBruCapFij: ejeForBruCapFij,
				ejeGasCapOtr: ejeGasCapOtr,
				ejeDefSupTot: ejeDefSupTot,
				ejeFin: ejeFin,
				ejeCreNet: ejeCreNet,
				ejeDes: ejeDes,
				ejeAmo: ejeAmo,
				ejeRecBalVarDepOtr: ejeRecBalVarDepOtr,
				desIntCapAdm: desIntCapAdm,
				desIntEfiTot: desIntEfiTot,
				desIntGes: desIntGes,
				desIntIndInt: desIntIndInt,
				desIntReqLeg: desIntReqLeg,
				desIntIndDesFis: desIntIndDesFis,
				autGasFun: autGasFun,
				respSerDeu: respSerDeu,
				depTraNacReg: depTraNacReg,
				genRecPro: genRecPro,
				magInv: magInv,
				capAho: capAho,
				indDesFis: indDesFis,
				posNivNac: posNivNac,
				posNivDep: posNivDep,
	 }
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
	var idF = $("#idF").val();
	var ingTot = $("ingTot").val();
	var ingCor = $("ingCor").val();
	var ingTri = $("ingTri").val();
	var ingPre = $("ingPre").val();
	var ingIndCom = $("ingIndCom").val();
	var ingSobGas = $("ingSobGas").val();
	var ingOtr = $("ingOtr").val();
	var ingNoTri = $("ingNoTri").val();
	var ingTra = $("ingTra").val();
	var ingNivNac = $("ingNivNac").val();
	var ingNoTriOtr = $("ingNoTriOtr").val();
	var gasTot = $("gasTot").val();
	var gasCor = $("gasCor").val();
	var fun = $("fun").val();
	var serFun = $("serFun").val();
	var gasGen = $("gasGen").val();
	var traPag = $("traPag").val();
	var intDeuPub = $("intDeuPub").val();
	var defAhoCor = $("defAhoCor").val();
	var ingCap = $("ingCap").val();
	var reg = $("reg").val();
	var traNac = $("traNac").val();
	var cof = $("cof").val();
	var ingCapOtr = $("ingCapOtr").val();
	var gasCap = $("gasCap").val();
	var forBruCapFij = $("forBruCapFij").val();
	var gasCapOtr = $("gasCapOtr").val();
	var defSupTot = $("defSupTot").val();
	var fin = $("fin").val();
	var creNet = $("creNet").val();
	var des = $("des").val();
	var amo = $("amo").val();
	var recBalVarDepOtr = $("recBalVarDepOtr").val();
	var ejeIngTot = $("ejeIngTot").val();
	var ejeIngCor = $("ejeIngCor").val();
	var ejeIngTri = $("ejeIngTri").val();
	var ejeIngPre = $("ejeIngPre").val();
	var ejeIngIndCom = $("ejeIngIndCom").val();
	var ejeIngSobGas = $("ejeIngSobGas").val();
	var ejeIngOtr = $("ejeIngOtr").val();
	var ejeIngNoTri = $("ejeIngNoTri").val();
	var ejeIngTra = $("ejeIngTra").val();
	var ejeIngNivNac = $("ejeIngNivNac").val();
	var ejeIngNoTriOtr = $("ejeIngNoTriOtr").val();
	var ejeGasTot = $("ejeGasTot").val();
	var ejeGasCor = $("ejeGasCor").val();
	var ejeFun = $("ejeFun").val();
	var ejeSerFun = $("ejeSerFun").val();
	var ejeGasGen = $("ejeGasGen").val();
	var ejeTraPag = $("ejeTraPag").val();
	var ejeIntDeuPub = $("ejeIntDeuPub").val();
	var ejeDefAhoCor = $("ejeDefAhoCor").val();
	var ejeIngCap = $("ejeIngCap").val();
	var ejeReg = $("ejeReg").val();
	var ejeTraNac = $("ejeTraNac").val();
	var ejeCof = $("ejeCof").val();
	var ejeIngCapOtr = $("ejeIngCapOtr").val();
	var ejeGasCap = $("ejeGasCap").val();
	var ejeForBruCapFij = $("ejeForBruCapFij").val();
	var ejeGasCapOtr = $("ejeGasCapOtr").val();
	var ejeDefSupTot = $("ejeDefSupTot").val();
	var ejeFin = $("ejeFin").val();
	var ejeCreNet = $("ejeCreNet").val();
	var ejeDes = $("ejeDes").val();
	var ejeAmo = $("ejeAmo").val();
	var ejeRecBalVarDepOtr = $("ejeRecBalVarDepOtr").val();
	var desIntCapAdm = $("desIntCapAdm").val();
	var desIntEfiTot = $("desIntEfiTot").val();
	var desIntGes = $("desIntGes").val();
	var desIntIndInt = $("desIntIndInt").val();
	var desIntReqLeg = $("desIntReqLeg").val();
	var desIntIndDesFis = $("desIntIndDesFis").val();
	var autGasFun = $("autGasFun").val();
	var respSerDeu = $("respSerDeu").val();
	var depTraNacReg = $("depTraNacReg").val();
	var genRecPro = $("genRecPro").val();
	var magInv = $("magInv").val();
	var capAho = $("capAho").val();
	var indDesFis = $("indDesFis").val();
	var posNivNac = $("posNivNac").val();
	var posNivDep = $("posNivDep").val();
	var municipio = $("#municipio").val();

	$.ajax({
		headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
		method: "POST",
		url: "/finanza/actualizarFinanza",
		dataType: 'json',
		data: { idF: idF,
				ingTot: ingTot,
				ingCor: ingCor,
				ingTri: ingTri,
				ingPre: ingPre,
				ingIndCom: ingIndCom,
				ingSobGas: ingSobGas,
				ingOtr: ingOtr,
				ingNoTri: ingNoTri,
				ingTra: ingTra,
				ingNivNac: ingNivNac,
				ingNoTriOtr: ingNoTriOtr,
				gasTot: gasTot,
				gasCor: gasCor,
				fun: fun,
				serFun: serFun,
				gasGen: gasGen,
				traPag: traPag,
				intDeuPub: intDeuPub,
				defAhoCor: defAhoCor,
				ingCap: ingCap,
				reg: reg,
				traNac: traNac,
				cof: cof,
				ingCapOtr: ingCapOtr,
				gasCap: gasCap,
				forBruCapFij: forBruCapFij,
				gasCapOtr: gasCapOtr,
				defSupTot: defSupTot,
				fin: fin,
				creNet: creNet,
				des: des,
				amo: amo,
				recBalVarDepOtr: recBalVarDepOtr,
				ejeIngTot: ejeIngTot,
				ejeIngCor: ejeIngCor,
				ejeIngTri: ejeIngTri,
				ejeIngPre: ejeIngPre,
				ejeIngIndCom: ejeIngIndCom,
				ejeIngSobGas: ejeIngSobGas,
				ejeIngOtr: ejeIngOtr,
				ejeIngNoTri: ejeIngNoTri,
				ejeIngTra: ejeIngTra,
				ejeIngNivNac: ejeIngNivNac,
				ejeIngNoTriOtr: ejeIngNoTriOtr,
				ejeGasTot: ejeGasTot,
				ejeGasCor: ejeGasCor,
				ejeFun: ejeFun,
				ejeSerFun: ejeSerFun,
				ejeGasGen: ejeGasGen,
				ejeTraPag: ejeTraPag,
				ejeIntDeuPub: ejeIntDeuPub,
				ejeDefAhoCor: ejeDefAhoCor,
				ejeIngCap: ejeIngCap,
				ejeReg: ejeReg,
				ejeTraNac: ejeTraNac,
				ejeCof: ejeCof,
				ejeIngCapOtr: ejeIngCapOtr,
				ejeGasCap: ejeGasCap,
				ejeForBruCapFij: ejeForBruCapFij,
				ejeGasCapOtr: ejeGasCapOtr,
				ejeDefSupTot: ejeDefSupTot,
				ejeFin: ejeFin,
				ejeCreNet: ejeCreNet,
				ejeDes: ejeDes,
				ejeAmo: ejeAmo,
				ejeRecBalVarDepOtr: ejeRecBalVarDepOtr,
				desIntCapAdm: desIntCapAdm,
				desIntEfiTot: desIntEfiTot,
				desIntGes: desIntGes,
				desIntIndInt: desIntIndInt,
				desIntReqLeg: desIntReqLeg,
				desIntIndDesFis: desIntIndDesFis,
				autGasFun: autGasFun,
				respSerDeu: respSerDeu,
				depTraNacReg: depTraNacReg,
				genRecPro: genRecPro,
				magInv: magInv,
				capAho: capAho,
				indDesFis: indDesFis,
				posNivNac: posNivNac,
				posNivDep: posNivDep, }
	})

	.done(function(response) {
		$('#respuesta2').show();
		$('#respuesta2').html(response.html);	
		mostrarDatos();	
	});

	return false;
}); 