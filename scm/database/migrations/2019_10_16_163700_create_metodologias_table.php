<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMetodologiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('metodologia', function (Blueprint $table) {
<<<<<<< HEAD
            $table->increments('Id');
            $table->string('Nombre');
=======
            $table->increments('id');
            $table->string('codigo');
            $table->string('nombre');
>>>>>>> 60bf1d7fa735e9ddcb77ccd82cac7a61e989044e
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('metodologia');
    }
}
