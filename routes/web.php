<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

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