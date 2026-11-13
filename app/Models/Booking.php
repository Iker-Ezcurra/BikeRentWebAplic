<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable =[
        'star_time',
        'end_time',
        'total_cost',
        'status',
        'user_ID',
        'bike_ID',
    ];

    protected function casts(): array{
        return[
            'star_time' => 'datetime',
            'end_time' => 'datetime',
            'total_cost' => 'decimal:2',
        ]
    }

    public function user(): BelongsTo{
        return $this->belongTo(User::class);
    }

    public function bike(): BelongsTo{
        return $this->belongTo(Bike::class);
    }
}
