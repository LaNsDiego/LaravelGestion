<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CronogramaElementoConfiguracion extends Model
{
    protected $table = 'cronograma_elemento_configuracion';
    public $timestamps = false;


    public static function Agregar(CronogramaElementoConfiguracion $ObjPlantillaElementoConfiguracion){
        if($ObjPlantillaElementoConfiguracion->save()){
            return $ObjPlantillaElementoConfiguracion->id;
        }
        return 0 ;

    }

    public static function Listar(){
        return Proyecto::get();
    }

    public static function ObtenerPorId($PlantillaElementoConfiguracionId){
        return CronogramaElementoConfiguracion::findOrFail($PlantillaElementoConfiguracionId);
    }
}
