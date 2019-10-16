<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $table = 'proyecto';

    public function Guardar(){
        $this->save();
        return $this->$id;
    }

    public static function ObtenerPorId(int $ProyectoId){
        return Proyecto::findOrFail($ProyectoId);
    }

    public static function ListarPorUsuarioId(int $UsuarioId){
        return Proyecto::where('userid',$UsuarioId)->get();
    }

    
}
