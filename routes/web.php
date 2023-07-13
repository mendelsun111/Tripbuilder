<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TripController;
use App\Http\Controllers\AirportController;

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

//CSRF token for Postman API testing (EXTRA FOR POSTMAN)
Route::get('/token', function(){
    return csrf_token();
});

//Get all flights (EXTRA FOR POSTMAN)
Route::get('/flights', [TripController::class, 'getAllFlights']);