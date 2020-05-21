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

// Route::get('petición', 'proceso/acción');

Route::get('/mandarina', function() {
    return 'Hola mundo desde laravel: (pediste una mandarina!)';
});

Route::get('/test', function() {
    return view('prueba');
});

Route::get( '/inicio', function (){
    return view('inicio');
});
Route::get( '/procesar', function(){

    $nombre = 'marcos';
    $numero = 7;

    ## pasar datos a la vista
    return view('procesar',
                [
                    'nombre' => $nombre,
                    'numero' => $numero
                ]
            );
} );
