<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_number',
        'type',
        'price',
        'status',
    ];

    public function roomBookings()
    {
        return $this->hasMany(RoomBooking::class);
    }
}


