<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Metodologia as Metodologia;
use App\Models\Fase as Fase;
use App\Models\ElementoConfiguracion as ElementoConfiguracion;

class MetodologiaController extends Controller
{
    public function Listar(){
        $ObjMetodologia = Metodologia::all();
        return view('Metodologia.Listar', ['ListaMetodologia' => $ObjMetodologia]);
    }

    public function Agregar(){
        return view('Metodologia.Agregar');
    }

    public function Detalle($MetodologiaId)
    {
        $ObjMetodologia = Metodologia::find($MetodologiaId);
//        dd($ObjMetodologia);
        $ObjFase = Fase::where('MetodologiaId', $ObjMetodologia->Id)->get();
        return view('Metodologia.Detalle', ['Metodologia' => $ObjMetodologia, 'ListaFase' => $ObjFase]);
    }

    public function ActAgregar(Request $request)
    {
        $ObjMetodologia = new Metodologia();
        $ObjMetodologia->codigo = $request->input('TxtCodigo');
        $ObjMetodologia->nombre = $request->input('TxtNombre');
        $ObjMetodologia->Agregar();
        if($ObjMetodologia->id > 0){
            return redirect()->action('MetodologiaController@Listar');
        }
    }
}

?>