<?php

declare(strict_types = 1);

namespace App\Charts;

use App\Models\GridMeter;
use Carbon\Carbon;
use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;

class GridMeterChart extends BaseChart
{
    // Defino el nombre del gráfico
    public ?string $name = 'grid_meter_chart';

    // Defino el nombre de la ruta que llevará al gráfico
    public ?string $routeName = 'grid_meter_chart';

    public function handler(Request $request): Chartisan
    {
        $chartData = GridMeter::all()->last();

        $RST = $chartData->rst_eimp;
        $R = $chartData->r_eimp;
        $S = $chartData->s_eimp;
        $T = $chartData->t_eimp;

        /* Uso una libreria llamada Carbon para la manipulación de las fechas y horas que se visualizan en las vistas
         Configuro el formato de presentación de las fechas */

        $date = Carbon::createFromFormat('Y-m-d H:i',
            \Str::substr($chartData->date, 0, 16))->format('d/m/Y H:i');

        return Chartisan::build()
            ->labels(["$date - Total: $RST kWh"])
            ->dataset('Fase R', [(float)$R])
            ->dataset('Fase S', [(float)$S])
            ->dataset('Fase T', [(float)$T]);
    }
}
