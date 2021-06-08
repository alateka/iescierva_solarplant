<?php

declare(strict_types = 1);

namespace App\Charts;

use App\Models\LoadMeter;
use Carbon\Carbon;
use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;

class LoadMeterChart extends BaseChart
{
    // Defino el nombre del gráfico
    public ?string $name = 'load_meter_chart';

    // Defino el nombre de la ruta que llevará al gráfico
    public ?string $routeName = 'load_meter_chart';

    public function handler(Request $request): Chartisan
    {
        $chartData = LoadMeter::all()->last();

        $RST = $chartData->rst_e;
        $R = $chartData->r_e;
        $S = $chartData->s_e;
        $T = $chartData->t_e;
        $date = Carbon::createFromFormat('Y-m-d H:i', // Transformo la fecha obtenida desde la API.
            \Str::substr($chartData->date, 0, 16))->format('d/m/Y H:i');

        return Chartisan::build()
            ->labels(["$date - Total: $RST kWh"])
            ->dataset('Fase R', [(float)$R])
            ->dataset('Fase S', [(float)$S])
            ->dataset('Fase T', [(float)$T]);
    }
}
