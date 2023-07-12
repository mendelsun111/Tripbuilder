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
    $tripInfo = $request -> validate([
        "id"=>['required'],
        "name"=>['required']
    ]);

    $trips[]=$tripInfo;
    
    return Response::json($trips);
    //return view("showTrips", ["trips"=>$trips]);
});

//Add a flight to a trip
Route::post('/trip/{id}/flights', function(Request $request, $id) use(&$flights) {
    $flightInfo = [
        'id' => "3",
        'tripId' => $id,
        "departureAirportCode" => $request -> input("departureAirportCode"),
        "destinationAirportCode" => $request -> input("destinationAirportCode"),
        "departureDate" => $request -> input("departureDate")
    ];
    
    $flights[] = $flightInfo;

    //return Response::json($flightInfo);
    return view("showFlights", ["flights"=>$flights]);
});

//Delete a flight from a trip
Route::delete('/trip/{id}/flight/{flightId}', function($id, $flightId) use (&$flights) {

});