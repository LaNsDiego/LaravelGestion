<?php

namespace App\Models;

use App\CronogramaFase;
use Illuminate\Database\Eloquent\Model;

class Cronograma extends Model
{
    protected $table = 'cronograma';
    public $timestamps = false;

    public static function ListarCronogramaFasePorCronogramaId($CronogramaId){
        CronogramaFase::where('cronogramaid',$CronogramaId)->get();
    }

    public function Guardar(){
        $this->save();
        return $this->$id;
    }
}
