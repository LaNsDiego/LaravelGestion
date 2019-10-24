<?php

namespace App\Http\Controllers;

use App\Models\MetodologiaFase;
use Illuminate\Http\Request;

class MetodologiaFaseController extends Controller
{
    public function ListarPorMetodologiaId($MetodologiaId){

        return view('MetodologiaFase.componente_listar_por_metodologia',[
            'ListadoMetodologiaFase' => MetodologiaFase::ListarPorMetodologiaId($MetodologiaId)
        ]);
    }


}

?>