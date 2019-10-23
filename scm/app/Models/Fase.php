<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fase extends Model
{
    protected $table = 'metodologia_fase';
    public $timestamps = false;

    public function Agregar()
    {
        if($this->save())
        {
            return $this->id;
        }
        return 0;
    }
}
