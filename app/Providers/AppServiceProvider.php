<?php

namespace App\Providers;

use ConsoleTVs\Charts\Registrar as Charts;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Charts $charts)
    {
        // TODO Decir que has hecho aquí y explica que si no los registras, los gráficos directamente aparezen pero en blanco
        date_default_timezone_set('Europe/Madrid');

        $charts->register([
            \App\Charts\GridMeterChart::class,
            \App\Charts\LoadMeterChart::class,
            \App\Charts\RenoMeterChart::class,
        ]);
    }
}
