<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function index()
    {
        $apiKey = '18e8d1a70909126d04c1551778680241';
        $city = 'Bihac';
        $url = "https://api.openweathermap.org/data/2.5/weather?q={$city}&appid={$apiKey}&units=metric";

        $response = Http::get($url);

        $temperature = $response;

        return view('weather.index', compact('temperature'));
    }
}