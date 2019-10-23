<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlantillaElementoConfiguracion extends Model
{
    protected $table = 'plantilla_elemento_configuracion';
    public $timestamps = false;


    public static function Agregar(PlantillaElementoConfiguracion $ObjPlantillaElementoConfiguracion){
        if($ObjPlantillaElementoConfiguracion->save()){
            return $ObjPlantillaElementoConfiguracion->id;
        }
        return 0 ;

    }

    public static function Listar(){
        return Proyecto::get();
    }

    public static function ObtenerPorId($PlantillaElementoConfiguracionId){
        return PlantillaElementoConfiguracion::findOrFail($PlantillaElementoConfiguracionId);
    }
}
