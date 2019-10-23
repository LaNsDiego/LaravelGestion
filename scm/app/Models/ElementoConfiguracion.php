<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ElementoConfiguracion extends Model
{
    protected $table = 'elemento_configuracion';
    public $timestamps = false;

    public static function Agregar(ElementoConfiguracion $ObjElementoConfiguracion)
    {
        if ($ObjElementoConfiguracion->save()) {
            return $ObjElementoConfiguracion->id;
        }
    }
//    public function Guardar()
//    {
//        if($this->save())
//        {
//            return $this->id;
//        }
//        return 0;
//    }
}
