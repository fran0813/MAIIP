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

// ruta principal
Route::get('/', function(){
	return view('index');
});

// ruta para mostrar la información
Route::get('informacion', 'MainsController@index');

// rutas para tablas
Route::group(['prefix' => 'tabla'], function(){
	Route::get('generalidadesterritorio', 'TablesController@generalidadesterritorio');
	Route::get('demografia', 'TablesController@demografia');
	Route::get('viviendaserviciospublicos', 'TablesController@viviendasserviciospublicos');
	Route::get('salud', 'TablesController@salud');
	Route::get('educacion', 'TablesController@educacion');
});

// rutas para admin
Route::group(['prefix' => 'admin'], function(){
	// Route::get('principal', 'AdminsController@index');
	Route::get('generalidadesterritorio', 'AdminsController@tableGeneralidadesterritorio');
	Route::get('demografia', 'AdminsController@tableDemografia');
	Route::get('viviendaserviciospublicos', 'AdminsController@tableViviendasserviciospublicosa');
	Route::get('salud', 'AdminsController@tableSalud');
	Route::get('educacion', 'AdminsController@tableEducacion');
});

Route::group(['prefix' => 'departamentos'], function(){
	Route::get('/mostrarDepartamentos', 'DepartamentosController@mostrarDepartamentos');
	Route::post('/establecerDepartamento', 'DepartamentosController@establecerDepartamento');
	Route::get('/mostrarMunicipios', 'DepartamentosController@mostrarMunicipios');
	Route::post('/establecerMunicipio', 'DepartamentosController@establecerMunicipio');
	Route::get('/mostrarCodigo', 'DepartamentosController@mostrarCodigo');
	Route::get('/mostrarAñoGT', 'DepartamentosController@mostrarAñoGT');
	Route::get('/mostrarAñoVSP', 'DepartamentosController@mostrarAñoVSP');
	Route::get('/mostrarAñoS', 'DepartamentosController@mostrarAñoS');
});

Route::group(['prefix' => 'generalidadesterritorio'], function(){
	Route::get('/mostrarTablaGeneralidadesterritorio', 'GeneralidadesterritorioController@mostrarTablaGeneralidadesterritorio');
	Route::get('/actualizarGeneralidadesterritorio', 'GeneralidadesterritorioController@actualizarGeneralidadesterritorio');
	Route::get('/borrarGeneralidadesterritorio', 'GeneralidadesterritorioController@borrarGeneralidadesterritorio');
	Route::get('/crearGeneralidadesterritorio', 'GeneralidadesterritorioController@crearGeneralidadesterritorio');
	Route::get('/mostrarActualizarGeneralidadesterritorio', 'GeneralidadesterritorioController@mostrarActualizarGeneralidadesterritorio');
	Route::get('/mostrarGeneralidadesterritorio', 'GeneralidadesterritorioController@mostrarGeneralidadesterritorio');
});

Route::group(['prefix' => 'demografia'], function(){
	Route::get('/calcularCrecPob', 'DemografiaController@calcularCrecPob');
	Route::get('/calcularCrecPob2', 'DemografiaController@calcularCrecPob2');
	Route::get('/mostrarTablaDemografia', 'DemografiaController@mostrarTablaDemografia');
	Route::get('/actualizarDemografia', 'DemografiaController@actualizarDemografia');
	Route::get('/borrarDemografia', 'DemografiaController@borrarDemografia');
	Route::get('/crearDemografia', 'DemografiaController@crearDemografia');
	Route::get('/grafica1Demografia', 'DemografiaController@grafica1Demografia');
	Route::get('/grafica2Demografia', 'DemografiaController@grafica2Demografia');
	Route::get('/mostrarActualizarDemografia', 'DemografiaController@mostrarActualizarDemografia');
	Route::get('/mostrarDemografia', 'DemografiaController@mostrarDemografia');
});

Route::group(['prefix' => 'viviendaserviciospublicos'], function(){
	Route::get('/mostrarTablaViviendaserviciospublicos', 'ViviendaserviciospublicosController@mostrarTablaViviendaserviciospublicos');
	Route::get('/actualizarViviendaserviciospublicos', 'ViviendaserviciospublicosController@actualizarViviendaserviciospublicos');
	Route::get('/borrarViviendaserviciospublicos', 'ViviendaserviciospublicosController@borrarViviendaserviciospublicos');
	Route::get('/crearViviendaserviciospublicos', 'ViviendaserviciospublicosController@crearViviendaserviciospublicos');
	Route::get('/grafica1Viviendaserviciospublicos', 'ViviendaserviciospublicosController@grafica1Viviendaserviciospublicos');
	Route::get('/grafica2Viviendaserviciospublicos', 'ViviendaserviciospublicosController@grafica2Viviendaserviciospublicos');
	Route::get('/mostrarActualizarViviendaserviciospublicos', 'ViviendaserviciospublicosController@mostrarActualizarViviendaserviciospublicos');
	Route::get('/mostrarViviendaserviciospublicos', 'ViviendaserviciospublicosController@mostrarViviendaserviciospublicos');
});

Route::group(['prefix' => 'salud'], function(){
	Route::get('/mostrarTablaSalud', 'SaludController@mostrarTablaSalud');
	Route::get('/actualizarSalud', 'SaludController@actualizarSalud');
	Route::get('/borrarSalud', 'SaludController@borrarSalud');
	Route::get('/crearSalud', 'SaludController@crearSalud');
	Route::get('/grafica1Salud', 'SaludController@grafica1Salud');
	Route::get('/grafica2Salud', 'SaludController@grafica2Salud');
	Route::get('/mostrarActualizarSalud', 'SaludController@mostrarActualizarSalud');
	Route::get('/mostrarSalud', 'SaludController@mostrarSalud');
});

Route::group(['prefix' => 'educacion'], function(){
	Route::get('/mostrarTablaEducacion', 'EducacionController@mostrarTablaEducacion');
	Route::get('/actualizarEducacion', 'EducacionController@actualizarEducacion');
	Route::get('/borrarEducacion', 'EducacionController@borrarEducacion');
	Route::get('/crearEducacion', 'EducacionController@crearEducacion');
	Route::get('/grafica1Educacion', 'EducacionController@grafica1Educacion');
	Route::get('/grafica2Educacion', 'EducacionController@grafica2Educacion');
	Route::get('/mostrarActualizarEducacion', 'EducacionController@mostrarActualizarEducacion');
	Route::get('/mostrarEducacion', 'EducacionController@mostrarEducacion');
});


Auth::routes();

Route::get('/admin/principal', 'HomeController@index')->name('home');
