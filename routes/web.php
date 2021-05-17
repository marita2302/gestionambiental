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

/* Ruta para acceder a las vistas 
Route::view('/url', 'enlazar archivo vista');
*/
/*Route::view('/listaejemplo', 'ejemplo/lista');
Route::view('/formulario', 'ejemplo/formulario');*/
Route::resource('empresa','EmpresasController');





Route::get('/', function () {
    return view('principal');
});

Route::get('/listaejemplo', function () {
    return view('ejemplo/lista');
});

Route::get('/formulario', function () {
    return view('ejemplo/formulario');
});

