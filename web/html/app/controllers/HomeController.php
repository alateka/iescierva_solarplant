<?php

class HomeController extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = $this->model('SolarPlant');
    }

    public function loadData()
    {
        $inversorID = $_ENV['inversor_id'];

        $call = curl_init();
        $url = "http://itr.lacecal.es/APIv1/inverter.php?id=$inversorID&out=json";
        curl_setopt($call, CURLOPT_URL, $url);
        curl_setopt($call, CURLOPT_RETURNTRANSFER, true);
        $out = curl_exec($call);

        if ( $e = curl_error($call) ) {
            print_r($e);
        } else {
            $decoded = json_decode($out, true);
        }
        curl_close($call);

        $this->model->addApiData($decoded[0]['date'], $decoded[0]['Esum']);
    }

    public function index()
    {
        $this->loadData();
        $dbData = $this->model->getAllData();
        $data = [
            'titulo' => 'Planta Solar',
            'db_data' => $dbData
        ];
        $this->view('home', $data);
    }
}
