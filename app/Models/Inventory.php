<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $table = 'inventory';

    protected $fillable = [
        'item_name',
        'name',
        'description',
        'stock_qty',
        'unit',
        'cost_price',
        'selling_price',
        'supplier',
        'category',
        'qr_code_value',
        'added_by',
    ];

    public function addedBy()
    {
        return $this->belongsTo(User::class, 'added_by');
    }

    public function inventoryLogs()
    {
        return $this->hasMany(InventoryLog::class);
    }
}

