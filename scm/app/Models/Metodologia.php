<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Metodologia extends Model
{
    protected $table = 'metodologia';
    public $timestamps = false;

<<<<<<< HEAD
    public static  function Listar(){
        return Metodologia::get();
=======
    public function Agregar()
    {
        if($this->save())
        {
            return $this->id;
        }
        return 0;
>>>>>>> 60bf1d7fa735e9ddcb77ccd82cac7a61e989044e
    }
}
