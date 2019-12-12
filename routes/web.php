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


Route::get('/', 'HomeController@index');
Auth::routes();

Route::get('/register', 'HomeController@register')->name('register');
Route::get('/thanks', 'HomeController@gracias')->name('personalInfoAlumnos.thanks');
Route::resource('personalInfoAlumnos', 'personal_info_alumnoController');

//Route::post('/save_alumno_ext', 'HomeController@store')->name('personalInfoExt.store');
Route::group(['middleware' => 'auth'], function () {

	Route::get('/admin', 'HomeController@inicio')->name('home');
	Route::get('/home', 'HomeController@inicio')->name('home');
	Route::resource('alumnos', 'AlumnosController');
	//Route::resource('personalInfoAlumnos', 'personal_info_alumnoController');
	Route::resource('contactos', 'ContactosController');
	Route::resource('documentacions', 'documentacionController');
	Route::resource('catalogos', 'catalogosController');
	Route::resource('materias', 'MateriasController');
	Route::get('reportes', 'ReportesController@index')->name('reportes.index');
});

Route::group(['middleware' => 'auth','prefix'=>'api/v1/'], function () {
	Route::get('/alumnos', 'personal_info_alumnoController@alumnos');
	Route::get('/guarda_catalogo', 'catalogosController@store');
	Route::get('/elimina_catalogo', 'catalogosController@elimina');	
	Route::post('/documentos', 'alumnos_documentosController@store');
	Route::post('/delete_document', 'alumnos_documentosController@destroy');

	

});

Route::get('/valida_curp', 'HomeController@valida_curp');


Route::resource('alumnosDocumentos', 'alumnos_documentosController');