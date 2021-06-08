<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenoMeterTable extends Migration
{
    protected $table = 'reno_meter';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Totalizadores del medidor producción de las fuentes renovables
        Schema::create('reno_meter', function (Blueprint $table) {
            $table->increments('id');
            $table->float('rst_e')->nullable();; // Energía renovable generada (Totalizador trifásico) [kWh]
            $table->float('r_e')->nullable();; // Energía renovable generada (Fase R) [kWh]
            $table->float('s_e')->nullable();; // Energía renovable generada (Fase S) [kWh]
            $table->float('t_e')->nullable(); // Energía renovable generada (Fase T) [kWh]
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
        Schema::dropIfExists('reno_meter');
    }
}
