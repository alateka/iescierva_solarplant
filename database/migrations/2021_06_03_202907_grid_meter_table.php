<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class GridMeterTable extends Migration
{
    protected $table = 'grid_meter';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * The table associated with the model.
         *
         * @var string
         */

        // Totalizadores del medidor de intercambio con la red
        Schema::create('grid_meter', function (Blueprint $table) {
            $table->increments('id');
            $table->float('rst_eimp')->nullable();; // Energía importada (consumida) de la red eléctrica [kWh]
            $table->float('r_eimp')->nullable();; // Energía consumida (Fase R) de la red eléctrica [kWh]
            $table->float('s_eimp')->nullable();; // Energía consumida (Fase S) de la red eléctrica [kWh]
            $table->float('t_eimp')->nullable();; // Energía consumida (Fase T) de la red eléctrica [kWh]
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
        Schema::dropIfExists('grid_meter');
    }
}
