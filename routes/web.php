<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

$trips = [];
$flights = [];

Route::get('/', function () {
    return view('homepage');
});

//Lists all available airports
Route::get('/airports', function(){
    $airports = [
        "Montreal" => "YUL",
        "Toronto" => "YYZ",
        "Vancouver" => "YVR",
        "Ottawa" => "YOW",
        "NewYork" => "NYC"
    ];

    return Response::json($airports);

    //directly display airports on webapp
    //return view("showAirports", ["airports"=>$airports]);
});

//Create a trip with id and name
Route::post('/trip', function(Request $request) use(&$trips) {
    $tripInfo = $request->validate([
        "id"=>['required'],
        "name"=>['required']
    ]);

    $trips[]=$tripInfo;
    
    //return Response::json($trips);
    return view("showTrips", ["trips"=>$trips]);
});