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
        Schema::create('vuelo_colaboradors', function (Blueprint $table) {
            $table->id('id');
            $table->biginteger('idvuelo')->unsigned();
            $table->biginteger('idcolaborador')->unsigned();
            $table->string('cargoAsignado');
            $table->string('estado');
            $table->timestamps();
            $table->foreign('idvuelo')->references('id')->on('vuelos');
            $table->foreign('idcolaborador')->references('id')->on('colaboradors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('vuelo_colaboradors');
    }
};
