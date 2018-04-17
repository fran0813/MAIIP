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
});

Route::group(['prefix' => '/'], function()
{
	Route::get('informacion', 'UserController@index');

	Route::get('/mostrarCodigo', 'UserController@mostrarCodigo');
	Route::get('/mostrarAñoGT', 'UserController@mostrarAñoGT');
	Route::get('/mostrarAñoVSP', 'UserController@mostrarAñoVSP');
	Route::get('/mostrarAñoS', 'UserController@mostrarAñoS');

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

Route::group(['prefix' => 'tabla'], function(){
	Route::get('generalidadesterritorio', 'TableController@generalidadesterritorio');
	Route::get('demografia', 'TableController@demografia');
	Route::get('viviendaserviciospublicos', 'TableController@viviendasserviciospublicos');
	Route::get('salud', 'TableController@salud');
	Route::get('educacion', 'TableController@educacion');
});
