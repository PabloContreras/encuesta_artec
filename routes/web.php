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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'EncuestasController@create');
Route::post('/', 'EncuestasController@store')->name('store.encuesta');
Route::get('/resultados', 'EncuestasController@index');

Route::get('/grafica', 'EncuestasController@googleLineChart');