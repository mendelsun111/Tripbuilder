<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AirportController extends Controller
{
    public function getAirportLists(){
        $airports = [
            "Montreal" => "YUL",
            "Toronto" => "YYZ",
            "Vancouver" => "YVR",
            "Ottawa" => "YOW",
            "NewYork" => "NYC"
        ];

        return response()->json($airports);
    }
}
