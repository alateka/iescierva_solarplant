<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LoadMeterTable extends Migration
{
    protected $table = 'load_meter';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Tabla de los otalizadores del medidor de consumo de las cargas
        Schema::create('load_meter', function (Blueprint $table) {
            $table->increments('id');
            $table->float('rst_e')->nullable();; // Energia consumida por las cargas (Totalizador trifásico)
            $table->float('r_e')->nullable();; // Energía consumida por las cargas (Fase R) [kWh]
            $table->float('s_e')->nullable();; // Energía consumida por las cargas (Fase S) [kWh]
            $table->float('t_e')->nullable();; // Energía consumida por las cargas (Fase T) [kWh]
            $table->string('date'); //Fecha y hora en texto del inicio del periodo de integración
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('load_meter');
    }
}
