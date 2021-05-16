<?php

namespace App\Providers;

use App\Charts\SolarCharts;
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

        $charts->register([
            SolarCharts::class
        ]);
    }
}
