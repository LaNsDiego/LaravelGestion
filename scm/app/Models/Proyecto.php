<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $table = 'proyecto';
    public $timestamps = false;

    public function Guardar(){
        $this->save();
        return $this->$id;
    }

    public static function ObtenerPorId($ProyectoId){
        return Proyecto::findOrFail($ProyectoId);
    }

    public static function ListarPorUsuarioId($UsuarioId){
        return Proyecto::where('usuariojefeid',$UsuarioId)->get();
    }

    
}
