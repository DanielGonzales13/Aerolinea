<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aeropuertos', function (Blueprint $table) {
            $table->id('id');
            $table->string('descripcion');
            $table->string('coordenada');
            $table->string('nomenclatura');
            $table->biginteger('iddepto')->unsigned();
            $table->biginteger('idmupio')->unsigned();
            $table->timestamps();
            $table->foreign('iddepto')->references('id')->on('departamentos');
            $table->foreign('idmupio')->references('id')->on('municipios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('aeropuertos');
    }
};
