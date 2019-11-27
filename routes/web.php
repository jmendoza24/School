<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|{ route('login') }}
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Auth::routes();
Route::group(['middleware' => 'auth'], function () {

	Route::get('/', 'HomeController@index')->name('home');
	Route::resource('alumnos', 'AlumnosController');
	Route::resource('contactos', 'ContactosController');
	Route::resource('documentacions', 'documentacionController');
	Route::resource('catalogos', 'catalogosController');
	Route::resource('materias', 'materiasController');
	Route::get('reportes', 'ReportesController@index')->name('reportes.index');
});

Route::group(['middleware' => 'auth','prefix'=>'api/v1/'], function () {
	Route::get('/municipios', 'AlumnosController@municipios');
	Route::get('/alumnos', 'AlumnosController@alumnos');
	Route::get('/guarda_catalogo', 'catalogosController@store');
	Route::get('/elimina_catalogo', 'catalogosController@elimina');
});


