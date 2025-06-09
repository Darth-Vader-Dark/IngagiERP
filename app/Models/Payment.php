<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        \"payment_for_id\",
        \"payment_for_type\",
        \"payment_reference\",
        \"amount\",
        \"method\",
        \"payment_status\",
    ];

    public function paymentFor()
    {
        return $this->morphTo();
    }
}


