<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Fase as Fase;

class FaseController extends Controller
{
    
    public function ActAgregar(Request $request)
    {
        $ObjFase = new Fase();
        $ObjFase->nombre = $request->input('TxtNombre');
        $ObjFase->metodologia = $request->input('TxtMetodologia');
        $ObjFase->Agregar();
        if($ObjFase->id > 0){
            return redirect()->action('MetodologiaController@Detalle', ['MetodologiaId' => $ObjFase->metodologia]);
        }
    }
}

?>