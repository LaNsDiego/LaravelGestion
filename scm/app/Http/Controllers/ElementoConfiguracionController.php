<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ElementoConfiguracionController extends Controller
{
    public function Listar($ElementoConfiguracionId){
        return view('ElementoConfiguracion.Listar');
    }
}

?>