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

############################
##  CRUD de Categorías
Route::get('/adminCategorias', 'CategoriaController@index');
Route::get('/agregarCategoria', 'CategoriaController@create');
Route::post('/agregarCategoria', 'CategoriaController@store');

############################
##  CRUD de Marcas
Route::get('/adminMarcas', 'MarcaController@index');

############################
##  CRUD de Productos
Route::get('/adminProductos', 'ProductoController@index');
