<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TripController;
use App\Http\Controllers\AirportController;

// $trips = [
//     [
//         "id" => "test",
//         "name" => "nametest"
//     ]
// ];

// $flights = [
//     [
//         'id' => "1234",
//         'tripId' => "1",
//         "departureAirportCode" =>"nyc",
//         "destinationAirportCode" => "yvr",
//         "departureDate" => "12 december 2023"
//     ],
//     [
//         'id' => "12234",
//         'tripId' => "2",
//         "departureAirportCode" =>"nyc",
//         "destinationAirportCode" => "yvr",
//         "departureDate" => "12 december 2023"
//     ],
// ];

Route::get('/', function () {
    return view('homepage');
});

//Lists all available airports
Route::get('/airports', [AirportController::class, 'getAirportLists']);

//Create a trip with id and name
Route::post('/trip', [TripController::class,'createTrip']);

//Add a flight to a trip
Route::post('/trip/{id}/flights', [TripController::class, "addFlight"]);

//Delete a flight from a trip
Route::delete('/trip/{id}/flight/{flightId}', [TripController::class, 'deleteFlight']);