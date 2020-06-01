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
Route::get('/', 'entrenadorController@index')->name('welcome');

Route::resource('entrenador', 'entrenadorController');
Route::get('/medallas', 'medallasController@index');

Route::get('/lider/{id}', 'liderController@index')->name('lider');
Route::get('solodia', function(){
	return view('middleware');
})->middleware('solodia');