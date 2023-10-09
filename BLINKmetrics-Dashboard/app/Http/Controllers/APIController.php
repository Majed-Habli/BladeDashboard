<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\CharType;
use App\Models\CharColor;


class APIController extends Controller
{
    public function index()

    {
        $types = CharType::all();

        if($types){
            $typesResponse = $types;
        }else{
            $typesResponse = 'failed';
        }

        $colors = CharColor::all();

        if($colors){
            $colorsResponse = $colors;
        }else{
            $colorsResponse = 'failed';
        }

        $response = Http::withoutVerifying()->get('https://weather.visualcrossing.com/VisualCrossingWebServices/rest/services/timeline/united%20states?unitGroup=metric&key=ZPGVNX7GEUHT3SY5RXRPQCJUB&contentType=json');

        if ($response->successful()) {
            $data = $response->json();
        }else{
            $data = 'failed';
        }

        $combinedData = [
            'data' => $data,
            'types' => $types,
            'colors' => $colors,
        ];
        return view('dashboard', ['combinedData' => $combinedData]);

    }
}
