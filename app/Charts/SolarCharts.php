<?php

declare(strict_types = 1);

namespace App\Charts;


use App\Models\Chart;
use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SolarCharts extends BaseChart
{
    // Defino el nombre del gráfico
    public ?string $name = 'solar_plant_charts';

    // Defino el nombre de la ruta que llevará al gráfico
    public ?string $routeName = 'solar_plant_charts';

    public function handler(Request $request): Chartisan
    {
        $chartData = Chart::latest()->first();

        return Chartisan::build()
            ->labels([$chartData->date])
            ->dataset('Consumo de red', [$chartData->consumo_red])
            ->dataset('Consumo total', [$chartData->consumo_total])
            ->dataset('Autoconsumo', [$chartData->autoconsumo]);
    }
}
