<?php

class HomeController extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = $this->model('SolarPlant');
    }

    public function index()
    {
        $dbData = $this->model->getAllData();
        $data = [
            'titulo' => 'Planta Solar',
            'db_data' => $dbData
        ];
        $this->view('home', $data);
    }
}
