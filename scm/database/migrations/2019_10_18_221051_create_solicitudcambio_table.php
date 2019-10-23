<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitudcambioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitud_cambio', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('proyectoid');
            $table->integer('miembrosolicitanteid');
            $table->date('fecha');
            $table->string('objetivo');
            $table->string('descripcion');
            $table->integer('estado');
            $table->integer('miembrojefeid');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicitud_cambio');
    }
}
