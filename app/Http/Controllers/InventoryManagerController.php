<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;

class InventoryManagerController extends Controller
{
    public function dashboard()
    {
        $lowStockItems = Inventory::where(\"stock_qty\", \"<=\", 10)->get(); // Example: items with 10 or less stock
        return view(\"inventory_manager.dashboard\", compact(\"lowStockItems\"));
    }
}


