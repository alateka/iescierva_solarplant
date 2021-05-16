<?php

namespace App\Http\Controllers;

use App\Models\Chart;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function loadData($value)
    {
        // Extraigo el valor de la variable de entorno definida en el fichero .env
        $inversorID = $_ENV['inversor_id'];

        // Uso curl para obtener los datos de la API en formato JSON y lo decodifico para transformarlo en un array asociativo
        $call = curl_init();
        $url = "http://itr.lacecal.es/APIv1/$value.php?id=$inversorID&out=json";
        curl_setopt($call, CURLOPT_URL, $url);
        curl_setopt($call, CURLOPT_RETURNTRANSFER, true);
        $out = curl_exec($call);

        if ( $e = curl_error($call) ) {
            print_r($e);
        } else {
            $decoded = json_decode($out, true);
        }
        curl_close($call);

       // dd($decoded);
        return $decoded;
    }

    public function insertDataDB()
    {
        // $APIdata = loadData('inverter');

        // Uso una libreria llamada Carbon para la manipulación de las fechas y horas que se visualizan en las vistas
        // Configuro el formato de presentación de las fechas
        $dateToday = Carbon::now();
        $date = Carbon::createFromFormat('Y-m-d H:i:s', $dateToday->toDateTimeString())->format('d/m/Y H:i:s');

        $chart = new Chart();
        $chart->consumo_red = '478';
        $chart->consumo_total = '47';
        $chart->autoconsumo = '114';
        $chart->date = $dateToday;
        $chart->save();

        return view("home", ['title' => 'Planta Solar IEScierva']);
    }
}
