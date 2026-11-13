<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bike extends Model
{
    use HasFactory;

    protected $fillable = [
        'price_per_hour',
        'model',
        'serial_number',
        'status',
    ];

    public function bookings(){
        return $this->hasMany(Booking::class);
    }
}
