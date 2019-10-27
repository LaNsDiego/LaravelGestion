<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fase extends Model
{
    protected $table = "fase";
    protected $primaryKey = 'Id';
    public $timestamps = false;

    public static function Agregar(Fase $ObjFase)
    {
        if($ObjFase->save())
        {
            return $ObjFase->Id;
        }
        return 0;
    }

    public static function Editar(Fase $ObjFase)
    {
        if($ObjFase->update())
        {
            return $ObjFase->Id;
        }
        return 0;
    }

    public static function Eliminar(Fase $ObjFase)
    {
        return $ObjFase->delete();
    }

    public static function ObtenerPorId($FaseId)
    {
        return Fase::find($FaseId);
    }

    public static function ListarPorMetodologia($MetodologiaId)
    {
        return Fase::where('MetodologiaId', $MetodologiaId)->get();
    }
}
