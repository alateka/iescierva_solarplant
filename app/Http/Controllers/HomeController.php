<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function __invoke()
    {

        $data = [
            'title' => '🌞 Planta Solar IEScierva',
        ];
        return view("home", ['data' => $data]);
    }
}
