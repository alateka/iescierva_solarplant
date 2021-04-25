<?php

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'titulo' => 'Gráficos Solares',
            'total_consumption' => 542,
            'net_consumption' => 321,
            'auto_consumption' => 111
        ];
        $this->view('home', $data);
    }
}
