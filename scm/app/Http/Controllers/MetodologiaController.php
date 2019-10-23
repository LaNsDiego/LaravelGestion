<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Metodologia as Metodologia;

class MetodologiaController extends Controller
{
    public function Listar(){
        $obj = new Metodologia();
        $obj->id = 1;
        $obj->nombre = "RUP";
        $Lista = array();
        array_push($Lista, $obj);
        return view('Metodologia.Listar',['Lista' => $Lista]);
    }

    public function Agregar(){
        return view('Metodologia.Agregar');
    }

    public function Detalle()
    {
        return view('Metodologia.Detalle');
    }
}

?>