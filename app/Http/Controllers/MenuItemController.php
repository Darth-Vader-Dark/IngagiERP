<?php

namespace App\Http\Controllers;

use App\Models\MenuItem;
use Illuminate\Http\Request;

class MenuItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menuItems = MenuItem::all();
        return view(\"admin.menu_items.index\", compact(\"menuItems\"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(\"admin.menu_items.create\");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            \"name\" => \"required|string|max:255\",
            \"description\" => \"nullable|string\",
            \"price\" => \"required|numeric|min:0\",
            \"stock_qty\" => \"required|integer|min:0\",
        ]);

        MenuItem::create($request->all());

        return redirect()->route(\"admin.menu_items.index\")->with(\"success\", \"Menu item created successfully.\");
    }

    /**
     * Display the specified resource.
     */
    public function show(MenuItem $menuItem)
    {
        return view(\"admin.menu_items.show\", compact(\"menuItem\"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MenuItem $menuItem)
    {
        return view(\"admin.menu_items.edit\", compact(\"menuItem\"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MenuItem $menuItem)
    {
        $request->validate([
            \"name\" => \"required|string|max:255\",
            \"description\" => \"nullable|string\",
            \"price\" => \"required|numeric|min:0\",
            \"stock_qty\" => \"required|integer|min:0\",
        ]);

        $menuItem->update($request->all());

        return redirect()->route(\"admin.menu_items.index\")->with(\"success\", \"Menu item updated successfully.\");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MenuItem $menuItem)
    {
        $menuItem->delete();
        return redirect()->route(\"admin.menu_items.index\")->with(\"success\", \"Menu item deleted successfully.\");
    }
}


