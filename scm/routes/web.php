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

use Illuminate\Http\Request; 

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/proyecto/listar/{UsuarioId}', 'ProyectoController@listar');
Route::get('/proyecto/agregar/{UsuarioId}', 'ProyectoController@agregar');
Route::post('/proyecto/guardar', 'ProyectoController@guardar');

Route::get('/SolicitudCambio/listar/{UsuarioId}', 'SolicitudCambio@listar');
Route::get('/SolicitudCambio/agregar/{UsuarioId}', 'SolicitudCambio@agregar');
Route::get('/SolicitudCambio/atender/{UsuarioId}', 'SolicitudCambio@atender');
Route::post('/SolicitudCambio/guardar', 'SolicitudCambio@guardar');
// Route::post('/proyecto/agregar', function(Request $request){
//     return response()->json(['res'=>$request->all()]);
// });