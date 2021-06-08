<?php

namespace App\Http\Controllers;

use App\Models\RenoMeter;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function __invoke()
    {

        $data = [
            'title' => 'Planta Solar IEScierva',
            'sumRST' => 547,
        ];
        return view("home", ['data' => $data]);
    }
}
