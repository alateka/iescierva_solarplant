<?php

declare(strict_types = 1);

namespace App\Charts;

use App\Models\RenoMeter;
use Carbon\Carbon;
use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;

class RenoMeterChart extends BaseChart
{
    // Defino el nombre del gráfico
    public ?string $name = 'reno_meter_chart';

    // Defino el nombre de la ruta que llevará al gráfico
    public ?string $routeName = 'reno_meter_chart';

    public function handler(Request $request): Chartisan
    {
        $chartData = RenoMeter::all()->last();

        $RST = $chartData->rst_e;
        $R = $chartData->r_e;
        $S = $chartData->s_e;
        $T = $chartData->t_e;
        $date = Carbon::createFromFormat('Y-m-d H:i',
            \Str::substr($chartData->date, 0, 16))->format('d/m/Y H:i');

        return Chartisan::build()
            ->labels(["$date - Total: $RST kWh"])
            ->dataset('Fase R', [(float)$R])
            ->dataset('Fase S', [(float)$S])
            ->dataset('Fase T', [(float)$T]);
    }
}
