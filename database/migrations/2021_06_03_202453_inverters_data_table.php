<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InvertersDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inverters_data', function (Blueprint $table) {
            $table->increments('id');
            $table->float('inverter_Esum')->nullable();; // Suma de la energía producida por los inversores [kWh]
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
        Schema::dropIfExists('inverters_data');
    }
}
