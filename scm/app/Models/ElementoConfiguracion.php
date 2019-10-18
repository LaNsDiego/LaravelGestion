<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ElementoConfiguracion extends Model
{
    protected $table = 'elemento_configuracion';
    public $timestamps = false;

    public function Guardar(){
        if($this->save()){
            //dd($this);
            return $this->id;
        }
        return 0 ;
        
    }
}
