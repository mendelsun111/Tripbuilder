<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;

    protected $fillable = ['departureAirportCode', 'destinationAirportCode', 'departureDate'];

    public function trip(){
        return $this->belongsTo(Trip::class);
    }
}
