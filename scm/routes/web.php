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


///SOLICITUD DE CAMBIO
Route::get('SolicitudCambio/listar', 'SolicitudCambioController@listar')->name('SolicitudCambio.listar');
//NUEVO
Route::get('SolicitudCambio/create', 'SolicitudCambioController@create')->name('SolicitudCambio.create');
Route::post('SolicitudCambio/store', 'SolicitudCambioController@store')->name('SolicitudCambio.store');
//EDITAR
Route::get('SolicitudCambio/editar/{SolicitudId}', 'SolicitudCambioController@edit')->name('SolicitudCambio.edit');
Route::post('SolicitudCambio/update', 'SolicitudCambioController@update')->name('SolicitudCambio.update');
//VER
Route::get('SolicitudCambio/atender/{SolicitudId}', 'SolicitudCambioController@atender')->name('SolicitudCambio.atender');
//ELIMINAR
Route::get('SolicitudCambio/{SolicitudId}', 'SolicitudCambioController@delete')->name('SolicitudCambio.delete');


