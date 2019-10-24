<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class MetodologiaFase extends Model
{
    protected $table = 'metodologia_fase';
    public $timestamps = false;

    public static function ListarPorMetodologiaId($MetodologiaId)
    {
        $ListadoMetodologiaFase = MetodologiaFase::where('MetodologiaId',$MetodologiaId)->get();
        foreach ($ListadoMetodologiaFase as $ObjMetodologiaFase){
            $ObjMetodologiaFase->ListadoElementoConfiguracion = PlantillaElementoConfiguracion::where('FaseId',$ObjMetodologiaFase->Id)->get();
        }

        return $ListadoMetodologiaFase;
    }
}

?>