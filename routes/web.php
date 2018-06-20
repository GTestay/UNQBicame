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

Route::get('/aulas/agregar', 'Web\AulasController@create')->name('aulas.create');
Route::get('/aulas', 'Web\AulasController@index');
Route::post('/aulas/agregar','Web\AulasController@store');


Route::get('/materias', 'Web\MateriasController@index');

Route::get('/materias/agregar', 'Web\MateriasController@create')->name('materias.create');
Route::post('/materias','Web\MateriasController@store');

Route::get('/materias/{id}/editar', 'Web\MateriasController@edit');
Route::put('/materias/{id}/editar','Web\MateriasController@update');

