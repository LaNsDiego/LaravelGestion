<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Metodologia extends Model
{
    protected $table = 'metodologia';
    public $timestamps = false;

    public static  function Listar(){
        return Metodologia::get();
    }
}

?>