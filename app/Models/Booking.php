<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Bike;

class Booking extends Model
{
    protected $fillable = [
        'user_id',
        'bike_id',
        'start_time',
        'end_time',
        'status',
        'total_cost',
    ];

    protected $casts = [
        'start_time' => 'datetime',
        'end_time' => 'datetime',
    ];

    public function bike()
    {
        return $this->belongsTo(Bike::class);
    }
}