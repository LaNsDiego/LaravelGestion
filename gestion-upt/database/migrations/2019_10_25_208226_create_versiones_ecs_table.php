<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVersionesECSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('version_ecs', function (Blueprint $table) {
            $table->increments('Id');
            $table->integer('ElementoConfiguracionId')->unsigned();
            $table->string('Version', 200);
            $table->date('FechaInicio');
            $table->date('FechaTermino');
            $table->integer('UsuarioResponsableId')->unsigned();

            
            $table->foreign('ElementoConfiguracionId')->references('Id')->on('cronograma_Elemento_configuracion');            
            $table->foreign('UsuarioResponsableId')->references('Id')->on('usuario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('version_ecs');
    }
}
