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

//Metodologia OK
Route::prefix('metodologia')->group(function () {
    Route::get('/listar', 'MetodologiaController@Listar');
    Route::get('/ver/{MetodologiaId}', 'MetodologiaController@Ver');
    Route::get('/agregar', 'MetodologiaController@FrmAgregar');
    Route::get('/editar/{MetodologiaId}', 'MetodologiaController@FrmEditar');
    Route::get('/eliminar/{MetodologiaId}', 'MetodologiaController@ActEliminar');
    Route::post('/agregar', 'MetodologiaController@ActAgregar');
    Route::post('/editar', 'MetodologiaController@ActEditar');
});

//Fase OK
Route::prefix('fase')->group(function () {
    Route::get('/editar/{FaseId}', 'FaseController@FrmEditar');
    Route::get('/eliminar/{FaseId}', 'FaseController@ActEliminar');
    Route::post('/agregar', 'FaseController@ActAgregar');
    Route::post('/editar', 'FaseController@ActEditar');
});

//Elemento de Configuracion OK
Route::prefix('elemento-configuracion')->group(function () {
    Route::get('/editar/{ElementoConfiguracionId}', 'ElementoConfiguracionController@FrmEditar');
    Route::get('/eliminar/{ElementoConfiguracionId}', 'ElementoConfiguracionController@ActEliminar');
    Route::post('/agregar', 'ElementoConfiguracionController@ActAgregar');
    Route::post('/editar', 'ElementoConfiguracionController@ActEditar');
});


//Proyecto
Route::get('/proyecto/listar', 'ProyectoController@Listar')->name('proyecto.listar');
Route::get('/proyecto/p{ProyectoId}', 'ProyectoController@Ver')->name('proyecto.ver');
Route::get('/proyecto/agregar', 'ProyectoController@FrmAgregar');
Route::post('/proyecto/agregar', 'ProyectoController@ActAgregar');


//Plantilla Fase
Route::get('/metodologia-fase/listar/{MetodologiaId}', 'MetodologiaFaseController@ListarPorMetodologiaId')->name('metodologia_fase.listar');


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

Route::get('proyecto/doPost','ProyectoController@doPost');

?>