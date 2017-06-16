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

// ruta para login
Route::get('login', 'MainsController@login');

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

	Route::get('principal', 'AdminsController@index');
	Route::get('generalidadesterritorio', 'AdminsController@tableGeneralidadesterritorio');
	Route::get('demografia', 'AdminsController@tableDemografia');
	Route::get('viviendaserviciospublicos', 'AdminsController@tableViviendasserviciospublicosa');
	Route::get('salud', 'AdminsController@tableSalud');
	Route::get('educacion', 'AdminsController@tableEducacion');

});