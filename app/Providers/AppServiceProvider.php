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
        date_default_timezone_set('Europe/Madrid');

        // Si no registramos los gráficos, directamente no se mostrarán en las vistas.
        $charts->register([
            \App\Charts\GridMeterChart::class,
            \App\Charts\LoadMeterChart::class,
            \App\Charts\RenoMeterChart::class,
        ]);
    }
}
