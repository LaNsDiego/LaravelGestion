<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Metodologia extends Model
{
    protected $table = 'metodologia';
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
