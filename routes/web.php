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

});