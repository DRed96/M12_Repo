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


Route::get('/testLayout', function () {
    return view('layouts.masterLayout');
});

Route::get('/main', function () {
    // Posar controlador
    return view('layouts.masterLayout');
});

Route::get('/crearEsdeveniment', function () {
    return view('crearEsdeveniment');
});

//Crear esdeveniment
Route::get('/crearEsdeveniment', 'crearEsdeveniment_Controller@getEsdeveniment');

Route::post('/crearEsdeveniment', 'crearEsdeveniment_Controller@postEsdeveniment');

//Crear Grup
Route::get('/crearGrups', 'crearGrup_Controller@getGrup');

Route::post('/crearGrups', 'crearGrup_Controller@postGrup');

// Registrarse
Route::get('/registrarse','UsersController@getRegistrar');

Route::post('/registrarse','UsersController@postRegistrar');

Route::post('/processLogin','UsersController@postLogin');
