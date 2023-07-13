<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class TripController extends Controller
{
    private $trips;
    private $flights;

    public function __construct(){
        $this->trips = Cache::get('trips',[]);
        $this->flights = Cache::get('flights',[]);
    }

    public function getAllFlights(){
        return response()->json($this->flights);
    }

    public function createTrip(Request $request){
        $tripInfo = [
            "id" => uniqid(),
            "name" => $request->input("name")
        ];

        $this->trips[]=$tripInfo;

        Cache::put('trips', $this->trips);
        Cache::put('flights', $this->flights);

        return response()->json($tripInfo);
    }

    public function addFlight(Request $request, $id){
        $flightInfo = [
            'id' => uniqid(),
            'tripId' => $id,
            "departureAirportCode" => $request -> input("departureAirportCode"),
            "destinationAirportCode" => $request -> input("destinationAirportCode"),
            "departureDate" => $request -> input("departureDate")
        ];
        
        $this->flights[] = $flightInfo;
        Cache::put('trips', $this->trips);
        Cache::put('flights', $this->flights);
    
        return response()->json($flightInfo);
    }

    public function deleteFlight($id, $flightId){
        $flightIndex = array_search($flightId, array_column($this->flights, 'id'));
    
        if ($flightIndex !== false){
            $flight = $this->flights[$flightIndex];
    
            if ($flight['tripId']===$id){
                unset($this->flights[$flightIndex]);

                Cache::put('trips', $this->trips);
                Cache::put('flights', $this->flights);

                return response()->json(['message'=>"Flight {$flightId} removed from the trip {$id}", 'status'=>"success"]);
            }
        }
        return response()->json(['message'=>"Flight {$flightId} not found from the trip {$id}", 'status'=>"error"]);
    }
 }
