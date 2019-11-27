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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('alumnos', 'AlumnosController');

Route::resource('contactos', 'ContactosController');

Route::resource('documentacions', 'documentacionController');


Route::group(['middleware' => 'auth','prefix'=>'api/v1/'], function () {

Route::get('municipios', 'AlumnosController@municipios');


});


Route::resource('catalogos', 'catalogosController');

Route::group(['middleware' => 'auth','prefix'=>'api/v1/'], function () {
	Route::get('/guarda_catalogo', 'catalogosController@store');
	Route::get('/elimina_catalogo', 'catalogosController@elimina');

	});