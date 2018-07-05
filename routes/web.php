<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('user.index');
});

Auth::routes();

Route::group(['prefix' => 'superAdmin'], function()
{
	Route::get('/', 'SuperAdminController@index')->middleware('auth');
	Route::get('/activarUsuario', 'SuperAdminController@activarUsuario')->middleware('auth');

	Route::post('/ActualizarActivarUsuario', 'SuperAdminController@ActualizarActivarUsuario')->middleware('auth');

	Route::post('/mostrarTablaActivarUsuario', 'SuperAdminController@mostrarTablaActivarUsuario')->middleware('auth');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin'], function()
{
	Route::get('/', 'AdminController@index')->middleware('auth');
	Route::get('generalidadesterritorio', 'AdminController@tableGeneralidadesterritorio')->middleware('auth');
	Route::get('demografia', 'AdminController@tableDemografia')->middleware('auth');
	Route::get('viviendaserviciospublicos', 'AdminController@tableViviendasserviciospublicosa')->middleware('auth');
	Route::get('salud', 'AdminController@tableSalud')->middleware('auth');
	Route::get('educacion', 'AdminController@tableEducacion')->middleware('auth');
	Route::get('seguridadviolencia', 'AdminController@tableSeguridadviolencia')->middleware('auth');
	Route::get('economicosocial', 'AdminController@tableeconomicosocial')->middleware('auth');
	Route::get('finanza', 'AdminController@tablefinanza')->middleware('auth');

	Route::get('municipio', 'AdminController@tablemunicipio')->middleware('auth');
	Route::get('/mostrarMunicipio', 'AdminController@mostrarTablaMunicipio')->middleware('auth');
	Route::post('/actualizarMunicipio', 'AdminController@actualizarMunicipio')->middleware('auth');
	Route::post('/borrarMunicipio', 'AdminController@borrarMunicipio')->middleware('auth');
	Route::post('/crearMunicipio', 'AdminController@crearMunicipio')->middleware('auth');
	Route::post('/mostrarActualizarMunicipio', 'AdminController@mostrarActualizarMunicipio')->middleware('auth');

	Route::get('/mostrarDepartamentos', 'AdminController@mostrarDepartamentos')->middleware('auth');
	Route::get('/mostrarMunicipios', 'AdminController@mostrarMunicipios')->middleware('auth');

	Route::post('/establecerDepartamento', 'AdminController@establecerDepartamento')->middleware('auth');
	Route::post('/establecerMunicipio', 'AdminController@establecerMunicipio')->middleware('auth');

	Route::get('/subiendoArchivoMunicipio', 'AdminController@subiendoArchivoMunicipio')->middleware('auth');
	Route::post('/guardarArchivoMunicipio', 'AdminController@guardarArchivoMunicipio')->middleware('auth');
	Route::post('/subirRespuestaMunicipio', 'AdminController@subirRespuestaMunicipio')->middleware('auth');
	Route::get('/descargarMunicipio', 'AdminController@descargarMunicipio')->middleware('auth');

	Route::get('/subiendoArchivoGeneralidadesTerritorio', 'AdminController@subiendoArchivoGeneralidadesTerritorio')->middleware('auth');
	Route::post('/guardarArchivoGeneralidadesTerritorio', 'AdminController@guardarArchivoGeneralidadesTerritorio')->middleware('auth');
	Route::post('/subirRespuestaGeneralidadesTerritorio', 'AdminController@subirRespuestaGeneralidadesTerritorio')->middleware('auth');
	Route::get('/descargarGeneralidadesTerritorio', 'AdminController@descargarGeneralidadesTerritorio')->middleware('auth');

	Route::get('/subiendoArchivoDemografia', 'AdminController@subiendoArchivoDemografia')->middleware('auth');
	Route::post('/guardarArchivoDemografia', 'AdminController@guardarArchivoDemografia')->middleware('auth');
	Route::post('/subirRespuestaDemografia', 'AdminController@subirRespuestaDemografia')->middleware('auth');
	Route::get('/descargarDemografia', 'AdminController@descargarDemografia')->middleware('auth');

	Route::get('/subiendoArchivoEducacion', 'AdminController@subiendoArchivoEducacion')->middleware('auth');
	Route::post('/guardarArchivoEducacion', 'AdminController@guardarArchivoEducacion')->middleware('auth');
	Route::post('/subirRespuestaEducacion', 'AdminController@subirRespuestaEducacion')->middleware('auth');
	Route::get('/descargarEducacion', 'AdminController@descargarEducacion')->middleware('auth');

	Route::get('/subiendoArchivoSalud', 'AdminController@subiendoArchivoSalud')->middleware('auth');
	Route::post('/guardarArchivoSalud', 'AdminController@guardarArchivoSalud')->middleware('auth');
	Route::post('/subirRespuestaSalud', 'AdminController@subirRespuestaSalud')->middleware('auth');
	Route::get('/descargarSalud', 'AdminController@descargarSalud')->middleware('auth');

	Route::get('/subiendoArchivoViviendaServiciosPublicos', 'AdminController@subiendoArchivoViviendaServiciosPublicos')->middleware('auth');
	Route::post('/guardarArchivoViviendaServiciosPublicos', 'AdminController@guardarArchivoViviendaServiciosPublicos')->middleware('auth');
	Route::post('/subirRespuestaViviendaServiciosPublicos', 'AdminController@subirRespuestaViviendaServiciosPublicos')->middleware('auth');
	Route::get('/descargarViviendaServiciosPublicos', 'AdminController@descargarViviendaServiciosPublicos')->middleware('auth');

	Route::get('/subiendoArchivoSeguridadViolencia', 'AdminController@subiendoArchivoSeguridadViolencia')->middleware('auth');
	Route::post('/guardarArchivoSeguridadViolencia', 'AdminController@guardarArchivoSeguridadViolencia')->middleware('auth');
	Route::post('/subirRespuestaSeguridadViolencia', 'AdminController@subirRespuestaSeguridadViolencia')->middleware('auth');
	Route::get('/descargarSeguridadViolencia', 'AdminController@descargarSeguridadViolencia')->middleware('auth');

	Route::get('/subiendoArchivoEconomicoSocial', 'AdminController@subiendoArchivoEconomicoSocial')->middleware('auth');
	Route::post('/guardarArchivoEconomicoSocial', 'AdminController@guardarArchivoEconomicoSocial')->middleware('auth');
	Route::post('/subirRespuestaEconomicoSocial', 'AdminController@subirRespuestaEconomicoSocial')->middleware('auth');
	Route::get('/descargarEconomicoSocial', 'AdminController@descargarEconomicoSocial')->middleware('auth');

	Route::get('/subiendoArchivoFinanza', 'AdminController@subiendoArchivoFinanza')->middleware('auth');
	Route::post('/guardarArchivoFinanza', 'AdminController@guardarArchivoFinanza')->middleware('auth');
	Route::post('/subirRespuestaFinanza', 'AdminController@subirRespuestaFinanza')->middleware('auth');
	Route::get('/descargarFinanza', 'AdminController@descargarFinanza')->middleware('auth');
});

Route::group(['prefix' => '/'], function()
{
	Route::get('informacion', 'UserController@index');

	Route::get('/mostrarCodigo', 'UserController@mostrarCodigo');
	Route::get('/mostrarAñoGT', 'UserController@mostrarAñoGT');
	Route::get('/mostrarAñoVSP', 'UserController@mostrarAñoVSP');
	Route::get('/mostrarAñoS', 'UserController@mostrarAñoS');
	Route::get('/mostrarAñoSV', 'UserController@mostrarAñoSV');
	Route::get('/mostrarAñoES', 'UserController@mostrarAñoES');
	Route::get('/mostrarAñoF', 'UserController@mostrarAñoF');

	Route::get('/mostrarDepartamentos', 'UserController@mostrarDepartamentos');
	Route::get('/mostrarMunicipios', 'UserController@mostrarMunicipios');

	Route::post('/establecerDepartamento', 'UserController@establecerDepartamento');
	Route::post('/establecerMunicipio', 'UserController@establecerMunicipio');
});

Route::group(['prefix' => 'generalidadesterritorio'], function(){
	Route::get('/mostrarTablaGeneralidadesterritorio', 'GeneralidadesterritorioController@mostrarTablaGeneralidadesterritorio')->middleware('auth');
	Route::post('/actualizarGeneralidadesterritorio', 'GeneralidadesterritorioController@actualizarGeneralidadesterritorio')->middleware('auth');
	Route::post('/borrarGeneralidadesterritorio', 'GeneralidadesterritorioController@borrarGeneralidadesterritorio')->middleware('auth');
	Route::post('/crearGeneralidadesterritorio', 'GeneralidadesterritorioController@crearGeneralidadesterritorio')->middleware('auth');
	Route::post('/mostrarActualizarGeneralidadesterritorio', 'GeneralidadesterritorioController@mostrarActualizarGeneralidadesterritorio')->middleware('auth');
	Route::get('/mostrarGeneralidadesterritorio', 'GeneralidadesterritorioController@mostrarGeneralidadesterritorio');
});

Route::group(['prefix' => 'demografia'], function(){
	Route::post('/calcularCrecPob', 'DemografiaController@calcularCrecPob')->middleware('auth');
	Route::post('/calcularCrecPob2', 'DemografiaController@calcularCrecPob2')->middleware('auth');
	Route::get('/mostrarTablaDemografia', 'DemografiaController@mostrarTablaDemografia')->middleware('auth');
	Route::post('/actualizarDemografia', 'DemografiaController@actualizarDemografia')->middleware('auth');
	Route::post('/borrarDemografia', 'DemografiaController@borrarDemografia')->middleware('auth');
	Route::post('/crearDemografia', 'DemografiaController@crearDemografia')->middleware('auth');
	Route::get('/grafica1Demografia', 'DemografiaController@grafica1Demografia');
	Route::get('/grafica2Demografia', 'DemografiaController@grafica2Demografia');
	Route::post('/mostrarActualizarDemografia', 'DemografiaController@mostrarActualizarDemografia')->middleware('auth');
	Route::get('/mostrarDemografia', 'DemografiaController@mostrarDemografia');
});

Route::group(['prefix' => 'viviendaserviciospublicos'], function(){
	Route::get('/mostrarTablaViviendaserviciospublicos', 'ViviendaserviciospublicosController@mostrarTablaViviendaserviciospublicos')->middleware('auth');
	Route::post('/actualizarViviendaserviciospublicos', 'ViviendaserviciospublicosController@actualizarViviendaserviciospublicos')->middleware('auth');
	Route::post('/borrarViviendaserviciospublicos', 'ViviendaserviciospublicosController@borrarViviendaserviciospublicos')->middleware('auth');
	Route::post('/crearViviendaserviciospublicos', 'ViviendaserviciospublicosController@crearViviendaserviciospublicos')->middleware('auth');
	Route::get('/grafica1Viviendaserviciospublicos', 'ViviendaserviciospublicosController@grafica1Viviendaserviciospublicos');
	Route::get('/grafica2Viviendaserviciospublicos', 'ViviendaserviciospublicosController@grafica2Viviendaserviciospublicos');
	Route::post('/mostrarActualizarViviendaserviciospublicos', 'ViviendaserviciospublicosController@mostrarActualizarViviendaserviciospublicos')->middleware('auth');
	Route::get('/mostrarViviendaserviciospublicos', 'ViviendaserviciospublicosController@mostrarViviendaserviciospublicos');
});

Route::group(['prefix' => 'salud'], function(){
	Route::get('/mostrarTablaSalud', 'SaludController@mostrarTablaSalud')->middleware('auth');
	Route::post('/actualizarSalud', 'SaludController@actualizarSalud')->middleware('auth');
	Route::post('/borrarSalud', 'SaludController@borrarSalud')->middleware('auth');
	Route::post('/crearSalud', 'SaludController@crearSalud')->middleware('auth');
	Route::get('/grafica1Salud', 'SaludController@grafica1Salud');
	Route::get('/grafica2Salud', 'SaludController@grafica2Salud');
	Route::post('/mostrarActualizarSalud', 'SaludController@mostrarActualizarSalud')->middleware('auth');
	Route::get('/mostrarSalud', 'SaludController@mostrarSalud');
});

Route::group(['prefix' => 'educacion'], function(){
	Route::get('/mostrarTablaEducacion', 'EducacionController@mostrarTablaEducacion')->middleware('auth');
	Route::post('/actualizarEducacion', 'EducacionController@actualizarEducacion')->middleware('auth');
	Route::post('/borrarEducacion', 'EducacionController@borrarEducacion')->middleware('auth');
	Route::post('/crearEducacion', 'EducacionController@crearEducacion')->middleware('auth');
	Route::get('/grafica1Educacion', 'EducacionController@grafica1Educacion');
	Route::get('/grafica2Educacion', 'EducacionController@grafica2Educacion');
	Route::post('/mostrarActualizarEducacion', 'EducacionController@mostrarActualizarEducacion')->middleware('auth');
	Route::get('/mostrarEducacion', 'EducacionController@mostrarEducacion');
});

Route::group(['prefix' => 'seguridadviolencia'], function(){
	Route::get('/mostrarTablaSeguridadviolencia', 'SeguridadvolenciaController@mostrarTablaSeguridadviolencia')->middleware('auth');
	Route::post('/actualizarSeguridadviolencia', 'SeguridadvolenciaController@actualizarSeguridadviolencia')->middleware('auth');
	Route::post('/borrarSeguridadviolencia', 'SeguridadvolenciaController@borrarSeguridadviolencia')->middleware('auth');
	Route::post('/crearSeguridadviolencia', 'SeguridadvolenciaController@crearSeguridadviolencia')->middleware('auth');
	Route::get('/grafica1Seguridadviolencia', 'SeguridadvolenciaController@grafica1Seguridadviolencia');
	Route::post('/mostrarActualizarSeguridadviolencia', 'SeguridadvolenciaController@mostrarActualizarSeguridadviolencia')->middleware('auth');
	Route::get('/mostrarSeguridadviolencia', 'SeguridadvolenciaController@mostrarSeguridadviolencia');
});

Route::group(['prefix' => 'economicosocial'], function(){
	Route::get('/mostrarTablaEconomicosocial', 'EconomicosocialController@mostrarTablaEconomicosocial')->middleware('auth');
	Route::post('/actualizarEconomicosocial', 'EconomicosocialController@actualizarEconomicosocial')->middleware('auth');
	Route::post('/borrarEconomicosocial', 'EconomicosocialController@borrarEconomicosocial')->middleware('auth');
	Route::post('/crearEconomicosocial', 'EconomicosocialController@crearEconomicosocial')->middleware('auth');
	Route::get('/grafica1Economicosocial', 'EconomicosocialController@grafica1Economicosocial');
	Route::get('/grafica2Economicosocial', 'EconomicosocialController@grafica2Economicosocial');
	Route::post('/mostrarActualizarEconomicosocial', 'EconomicosocialController@mostrarActualizarEconomicosocial')->middleware('auth');
	Route::get('/mostrarEconomicosocial', 'EconomicosocialController@mostrarEconomicosocial');
});

Route::group(['prefix' => 'finanza'], function(){
	Route::get('/mostrarTablaFinanza', 'FinanzaController@mostrarTablaFinanza')->middleware('auth');
	Route::post('/actualizarFinanza', 'FinanzaController@actualizarFinanza')->middleware('auth');
	Route::post('/borrarFinanza', 'FinanzaController@borrarFinanza')->middleware('auth');
	Route::post('/crearFinanza', 'FinanzaController@crearFinanza')->middleware('auth');
	Route::get('/grafica1Finanza', 'FinanzaController@grafica1Finanza')
	Route::get('/grafica2Finanza', 'FinanzaController@grafica2Finanza')
	Route::get('/grafica3Finanza', 'FinanzaController@grafica3Finanza')
	Route::post('/mostrarActualizarFinanza', 'FinanzaController@mostrarActualizarFinanza')->middleware('auth');
	Route::get('/mostrarFinanza', 'FinanzaController@mostrarFinanza');
});

Route::group(['prefix' => 'tabla'], function(){
	Route::get('generalidadesterritorio', 'TableController@generalidadesterritorio');
	Route::get('demografia', 'TableController@demografia');
	Route::get('viviendaserviciospublicos', 'TableController@viviendasserviciospublicos');
	Route::get('salud', 'TableController@salud');
	Route::get('educacion', 'TableController@educacion');
	Route::get('seguridadviolencia', 'TableController@seguridadviolencia');
	Route::get('economicosocial', 'TableController@economicosocial');
	Route::get('finanza', 'TableController@finanza');
});
