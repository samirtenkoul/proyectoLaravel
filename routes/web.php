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

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\Controller;

Route::get('/daw1', 'AlumnoController@daw1');

Route::get('/daw2', 'AlumnoController@daw2');

Route::get('/todos', 'AlumnoController@todos');

Route::get('/alta', 'AlumnoController@alta');


Route::get('/main','CursoController@index');


Route::resource('Curso', 'CursoController');
Route::resource('Alumno', 'AlumnoController');

Route::delete('/elim{id}', 'AlumnoController@destroy')->name('alumno.destroy');
Route::get('/edit/{id}','AlumnoController@edit')->name('alumno.edit');
Route::get('/mod/{id}', 'AlumnoController@update')->name('alumno.update');
Route::get('/altaAlu', 'AlumnoController@store')->name('alumno.store');





Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
