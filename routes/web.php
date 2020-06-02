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

// -------[--Rutas cobrador--]------------
Route::get('/cobrador',     'cobrador\CobradorController@index')->middleware('auth');;


// -------[--Rutas cobrador--]------------
Route::get('/suscriptor', 'suscriptor\SuscriptorController@index')->middleware('auth');;


Route::get('/about', function () {
    return view('about');
});

Route::post('/validar','EntradaController@validar');
