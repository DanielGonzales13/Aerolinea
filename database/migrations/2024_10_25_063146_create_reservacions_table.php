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
        Schema::create('reservacions', function (Blueprint $table) {
            $table->id('id');
            $table->biginteger('idpasajero')->unsigned();
            $table->string('asiento');
            $table->biginteger('idclase')->unsigned();
            $table->string('estado');
            $table->biginteger('idpaquete')->unsigned();
            $table->date('fecha_reserva');
            $table->timestamps();
            $table->foreign('idpasajero')->references('id')->on('pasajeros');
            $table->foreign('idclase')->references('id')->on('clases');
            $table->foreign('idpaquete')->references('id')->on('paquetes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('reservacions');
    }
};
