<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ElementoConfiguracion as ElementoConfiguracion;
use App\Models\Fase as Fase;
use App\Models\Metodologia as Metodologia;

class ElementoConfiguracionController extends Controller
{
    public function FrmEditar($ElementoConfiguracionId)
    {
        $ElementoConfiguracion = ElementoConfiguracion::ObtenerPorId($ElementoConfiguracionId);
        $Fase = Fase::ObtenerPorId($ElementoConfiguracion->FaseId);
        $Metodologia = Metodologia::ObtenerPorId($Fase->MetodologiaId);
        $ListadoFase = Fase::ListarPorMetodologia($Fase->MetodologiaId);
        return view('ElementoConfiguracion.Editar', [
            'ElementoConfiguracion' => $ElementoConfiguracion,
            'Fase' => $Fase,
            'Metodologia' => $Metodologia,
            'ListadoFase' => $ListadoFase
        ]);
    }

    public function ActAgregar(Request $request)
    {
        $ObjEcs = new ElementoConfiguracion();
        $ObjEcs->Codigo = $request->input('TxtCodigo');
        $ObjEcs->Nombre = $request->input('TxtNombre');
        $ObjEcs->FaseId = $request->input('TxtFase');
        $MetodologiaId = $request->input('TxtMetodologia');
        if(ElementoConfiguracion::Agregar($ObjEcs) > 0)
        {
            return redirect()->action('MetodologiaController@Ver', ['MetodologiaId' => $MetodologiaId]);
        }
    }

    public function ActEditar(Request $request)
    {
        $ObjEcs = ElementoConfiguracion::ObtenerPorId($request->TxtId);
        $ObjEcs->Codigo = $request->input('TxtCodigo');
        $ObjEcs->Nombre = $request->input('TxtNombre');
        $ObjEcs->FaseId = $request->input('TxtFase');
        $MetodologiaId = $request->input('TxtMetodologia');
        if(ElementoConfiguracion::Editar($ObjEcs) > 0)
        {
            return redirect()->action('MetodologiaController@Ver', ['MetodologiaId' => $MetodologiaId]);
        }
    }

    public function ActEliminar(Request $request)
    {
        $ObjEcs = ElementoConfiguracion::ObtenerPorId($request->ElementoConfiguracionId);
        $MetodologiaId = $request->Metodologia;
        if(ElementoConfiguracion::Eliminar($ObjEcs))
        {
            return redirect()->action('MetodologiaController@Ver', ['MetodologiaId' => $MetodologiaId]);
        }
    }
}

?>