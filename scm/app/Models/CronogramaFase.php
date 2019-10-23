<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CronogramaFase extends Model
{
    protected $table = "cronograma_fase";
    public $timestamps = false;

    public static function Agregar(CronogramaFase $CronogramaFase){
        if($CronogramaFase->save()){
            return $CronogramaFase->id;
        }
        return 0 ;
        
    }
}

?>