<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SolicitudCambio extends Controller
{
    public function listar($UsuarioId){
        return view('SolicitudCambio.listar');
    }
    public function agregar($UsuarioId){
        return view('SolicitudCambio.agregar');
    }
}
