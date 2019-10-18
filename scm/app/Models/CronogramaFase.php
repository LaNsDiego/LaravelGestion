<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CronogramaFase extends Model
{
    protected $table = "cronograma_fase";
    public $timestamps = false;

    public function Guardar(){
        if($this->save()){
            //dd($this);
            return $this->id;
        }
        return 0 ;
        
    }
}
