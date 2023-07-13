<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TripController extends Controller
{
    private $trips;
    private $flights;

    public function __construct(){
        $this->trips = [];
        $this->flights = [];
    }

    public function createTrip(Request $request){
        $tripInfo = [
            "id" => uniqid(),
            "name" => $request->input("name")
        ];

        $this->trips[]=$tripInfo;
        
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
    
        return response()->json($flightInfo);
    }

    public function deleteFlight($id, $flightId){
        $flightIndex = array_search($flightId, array_column($this->flights, 'id'));
    
        if ($flightIndex !== false){
            $flight = $this->$flights[$flightIndex];
    
            if ($flight['tripId']===$id){
                unset($this->flights[$flightIndex]);
                return response()->json(['message'=>"Flight {$flightId} removed from the trip {$id}", 'status'=>"success"]);
            }
        }
        return response()->json(['message'=>"Flight {$flightId} not found from the trip {$id}", 'status'=>"error"]);
    }
 }
