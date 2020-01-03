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

Route::get('/registro', 'HomeController@register')->name('register');
Route::get('/thanks', 'HomeController@gracias')->name('personalInfoAlumnos.thanks');
Route::resource('personalInfoAlumnos', 'personal_info_alumnoController');

//Route::post('/save_alumno_ext', 'HomeController@store')->name('personalInfoExt.store');
Route::group(['middleware' => 'auth'], function () {

	Route::get('/admin', 'HomeController@inicio')->name('home');
	Route::get('/home', 'HomeController@inicio')->name('home');
	Route::resource('alumnos', 'AlumnosController');
	Route::resource('asistencias', 'asistenciasController');
	//Route::resource('personalInfoAlumnos', 'personal_info_alumnoController');
	Route::resource('contactos', 'ContactosController');
	Route::resource('documentacions', 'documentacionController');
	Route::resource('catalogos', 'catalogosController');
	Route::resource('materias', 'MateriasController');
    Route::resource('alumnosDocumentos', 'alumnos_documentosController');
    Route::resource('tblMatAlumnos', 'tbl_mat_alumnosController');
	Route::get('reportes', 'ReportesController@index')->name('reportes.index');
	Route::resource('notas', 'notasController');
	Route::get('descarga_credencial', 'personal_info_alumnoController@descarga_credencial')->name('personalInfoAlumnos.calif');
	Route::get('guarda_credencial', 'personal_info_alumnoController@guarda_credencial');
	Route::get('imprime_boleta', 'personal_info_alumnoController@imprime_boleta')->name('download.boleta');
	

});

Route::group(['middleware' => 'auth','prefix'=>'api/v1/'], function () {
	Route::get('/alumnos', 'personal_info_alumnoController@alumnos');
	Route::get('/guarda_catalogo', 'catalogosController@store');
	Route::get('/elimina_catalogo', 'catalogosController@elimina');	
	Route::post('/documentos', 'alumnos_documentosController@store');
	Route::post('/delete_document', 'alumnos_documentosController@destroy');
   	Route::get('/save_subjects', 'tbl_mat_alumnosController@store');	
   	Route::get('/add_note', 'notasController@store');	
    Route::get('/upd_note', 'notasController@update');	
    Route::get('/delete_note', 'notasController@destroy');	
    Route::get('/baja_pdf', 'personal_info_alumnoController@baja_pdf');	
    Route::get('/upd_mat', 'tbl_mat_alumnosController@update');	
    Route::get('/deletmat', 'tbl_mat_alumnosController@destroy');	
    Route::get('/kardex', 'tbl_mat_alumnosController@kardex');	
    Route::get('/asistencia', 'personal_info_alumnoController@asistencia');	
    Route::get('/toma_asistencia', 'asistenciasController@store');
    Route::get('lista_asisencia', 'asistenciasController@index');
    Route::get('baja_asistencia', 'personal_info_alumnoController@baja_asistencia');



});

Route::get('/valida_curp', 'HomeController@valida_curp');






