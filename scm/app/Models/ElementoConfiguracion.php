<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ElementoConfiguracion extends Model
{
    protected $table = 'elemento_configuracion';
    public $timestamps = false;

<<<<<<< HEAD
    public static function Agregar(ElementoConfiguracion $ObjElementoConfiguracion){
        if($ObjElementoConfiguracion->save()){
            return $ObjElementoConfiguracion->id;
=======
    public function Guardar()
    {
        if($this->save())
        {
            return $this->id;
>>>>>>> 60bf1d7fa735e9ddcb77ccd82cac7a61e989044e
        }
        return 0;
    }
}
