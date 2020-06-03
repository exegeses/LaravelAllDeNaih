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

Route::get( '/form', function(){
    return view('formulario');
} );
Route::post('/proceso', function(){
   $nombre = $_POST['nombre'];
   return view('proceso', [ 'nombre'=>$nombre ] );
});

Route::get('/parametro/{id}', function($id){

    return view('parametro', ['id'=>$id]);
});

############ RAW SQL
Route::get('/regiones', function(){
    //listado de regiones
    $regiones = DB::select('SELECT regID, regNombre FROM regiones');
    return view('listaRegiones', [ 'regiones'=>$regiones ] );
});
############################
## CRUD REGIONES
Route::get('/adminRegiones', function() {
    $regiones = DB::select('SELECT regID, regNombre FROM regiones');
    return view('adminRegiones', [ 'regiones'=>$regiones ] );
});
Route::get('/formAgregarRegion', function() {
    return view('formAgregarRegion');
});
Route::post('/agregarRegion', function(){
    $regNombre = $_POST['regNombre'];
    DB::insert("INSERT INTO regiones
                            ( regNombre )
                        VALUE
                            ( ':regNombre' )",
                        [ $regNombre ]
                );
    return redirect('/adminRegiones')
                ->with('mensaje', 'Region '.$regNombre.' agregada correctamente');
});
Route::get('/adminDestinos', function (){

/*    $destinos = DB::select('
                            SELECT destID, destNombre, destPrecio,
                                    d.regID, regNombre
                                FROM destinos d, regiones r
                                WHERE d.regID = r.regID'
                            );
 */
    $destinos = DB::table('destinos as d')
                ->join( 'regiones as r', 'd.regID', '=', 'r.regID' )
                    ->get();

    return view('adminDestinos', [ 'destinos'=>$destinos]);
});
