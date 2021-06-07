<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class CRON_API_TO_DB extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'task:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'It will insert data from API to DB';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // $dataInverter = $this->loadData('inverter');

        // La función loadData, me recogerá los datos obtenidos desde la API y me los guardará en un array asociativo.
        $dataMeter = $this->loadData('meter');

        DB::table('grid_meter')->insert([
            'rst_eimp' => $dataMeter[0]['GRID_meter']['RST']['Eimp'],
            'r_eimp' => $dataMeter[0]['GRID_meter']['R']['Eimp'],
            's_eimp' => $dataMeter[0]['GRID_meter']['S']['Eimp'],
            't_eimp' => $dataMeter[0]['GRID_meter']['T']['Eimp'],
            'date' => $dataMeter[0]['date'],
        ]);
        DB::table('load_meter')->insert([
            'rst_e' => $dataMeter[0]['LOAD_meter']['RST']['E'],
            'r_e' => $dataMeter[0]['LOAD_meter']['R']['E'],
            's_e' => $dataMeter[0]['LOAD_meter']['S']['E'],
            't_e' => $dataMeter[0]['LOAD_meter']['T']['E'],
            'date' => $dataMeter[0]['date'],
        ]);
        DB::table('reno_meter')->insert([
            'rst_e' => $dataMeter[0]['RENO_meter']['RST']['E'],
            'r_e' => $dataMeter[0]['RENO_meter']['R']['E'],
            's_e' => $dataMeter[0]['RENO_meter']['S']['E'],
            't_e' => $dataMeter[0]['RENO_meter']['T']['E'],
            'date' => $dataMeter[0]['date'],
        ]);
        // Este return esrá la salida de la función. La cual será enviada por email.
        return print_r('Respuesta desde el sitio web de la planta solar >>> '
        .'OK -- Se han importado nuevos datos procedientes de la API a la base de datos.');
    }

    public function loadData($value)
    {
        // Extraigo el valor de la variable de entorno definida en el fichero .env
        $inversorID = env('INVERSOR_ID');

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
        return $decoded; // Devuelve el array asicuativo generado a partir de los datos de la API
    }
}
