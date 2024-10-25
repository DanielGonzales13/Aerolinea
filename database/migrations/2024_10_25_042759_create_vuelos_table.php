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
        Schema::create('vuelos', function (Blueprint $table) {
            $table->id('id');
            $table->biginteger('idaerolinea')->unsigned();
            $table->biginteger('idaeropuerto_origen')->unsigned();
            $table->biginteger('idaeropuerto_destino')->unsigned();
            $table->date('fecha_salida');
            $table->date('fecha_llegada');
            $table->integer('maximo_pasajeros');
            $table->timestamps();
            $table->foreign('idaerolinea')->references('id')->on('aerolineas');
            $table->foreign('idaeropuerto_origen')->references('id')->on('aeropuertos');
            $table->foreign('idaeropuerto_destino')->references('id')->on('aeropuertos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('vuelos');
    }
};
