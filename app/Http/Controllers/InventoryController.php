<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\InventoryLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inventoryItems = Inventory::all();
        return view(\"admin.inventory.index\", compact(\"inventoryItems\"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(\"admin.inventory.create\");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            \"item_name\" => \"required|string|max:255\",
            \"stock_qty\" => \"required|integer|min:0\",



            \"qr_code_value\" => \"nullable|string|unique:inventory\",
        ]);

        $inventory = Inventory::create([
            \"item_name\" => $request->item_name,
            \"stock_qty\" => $request->stock_qty,
            \"qr_code_value\" => $request->qr_code_value,
            \"added_by\" => Auth::id(),
        ]);

        InventoryLog::create([
            \"inventory_id\" => $inventory->id,
            \"change_type\" => \"add\",
            \"qty_changed\" => $request->stock_qty,
            \"user_id\" => Auth::id(),
        ]);

        return redirect()->route(\"admin.inventory.index\")->with(\"success\", \"Inventory item created successfully.\");
    }

    /**
     * Display the specified resource.
     */
    public function show(Inventory $inventory)
    {
        return view(\"admin.inventory.show\", compact(\"inventory\"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Inventory $inventory)
    {
        return view(\"admin.inventory.edit\", compact(\"inventory\"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Inventory $inventory)
    {
        $request->validate([
            \"item_name\" => \"required|string|max:255\",
            \"stock_qty\" => \"required|integer|min:0\",
            \"qr_code_value\" => \"nullable|string|unique:inventory,qr_code_value,\" . $inventory->id,
        ]);

        $old_qty = $inventory->stock_qty;
        $new_qty = $request->stock_qty;

        $inventory->update([
            \"item_name\" => $request->item_name,
            \"stock_qty\" => $new_qty,
            \"qr_code_value\" => $request->qr_code_value,
        ]);

        if ($old_qty !== $new_qty) {
            $change_type = ($new_qty > $old_qty) ? \"add\" : \"remove\";
            $qty_changed = abs($new_qty - $old_qty);

            InventoryLog::create([
                \"inventory_id\" => $inventory->id,
                \"change_type\" => $change_type,
                \"qty_changed\" => $qty_changed,
                \"user_id\" => Auth::id(),
            ]);
        }

        return redirect()->route(\"admin.inventory.index\")->with(\"success\", \"Inventory item updated successfully.\");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Inventory $inventory)
    {
        $inventory->delete();
        return redirect()->route(\"admin.inventory.index\")->with(\"success\", \"Inventory item deleted successfully.\");
    }
}


