<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $table = 'proyecto';
    public $timestamps = false;

    public function Guardar(){
        if($this->save()){
            //dd($this);
            return $this->id;
        }
        return 0 ;
        
    }

    public static function ObtenerPorId($ProyectoId){
        return Proyecto::findOrFail($ProyectoId);
    }

    public static function ListarPorUsuarioId($UsuarioId){
        return Proyecto::where('usuariojefeid',$UsuarioId)->get();
    }


    public function ListarMetodologiaFase($MetodologiaId){
        return MetodologiaFase::where('MetodologiaId',$MetodologiaId)->get();
    }

    
}
