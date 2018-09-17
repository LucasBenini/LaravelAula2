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

Route::group(['middleware'=>'auth'], function(){
Route::get('/atividades/create', 'AtividadeController@create');
Route::post('/atividades', 'AtividadeController@store');
Route::get('/atividades/{id}', 'AtividadeController@show');
Route::get('/atividades/{id}/edit', 'AtividadeController@edit');
Route::put('/atividades/{id}', 'AtividadeController@update');
Route::get('/atividades/{id}/delete', 'AtividadeController@delete');
Route::delete('/atividades/{id}', 'AtividadeController@destroy');
Route::get('/mensagem/create', 'MensagemController@create');
Route::post('/mensagem', 'MensagemController@store');
Route::get('/mensagem/{id}', 'MensagemController@show');
Route::get('/mensagem/{id}/edit', 'MensagemController@edit');
Route::put('/mensagem/{id}', 'MensagemController@update');
Route::get('/mensagem/{id}/delete', 'MensagemController@delete');
Route::delete('/mensagem/{id}', 'MensagemController@destroy');
});







Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/atividades', 'AtividadeController@index');
Route::get('/mensagem', 'MensagemController@index');
