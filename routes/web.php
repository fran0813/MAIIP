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
Route::resource('informacion', 'MainsController');

// rutas para admin
Route::group(['prefix' => 'admin'], function(){

});