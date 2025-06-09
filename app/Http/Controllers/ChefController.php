<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class ChefController extends Controller
{
    public function dashboard()
    {
        $pendingOrders = Order::whereIn(\"status\", [\"Pending\", \"Prepared\"])->with(\"orderItems.menuItem\")->get();
        return view(\"chef.dashboard\", compact(\"pendingOrders\"));
    }

    public function updateOrderStatus(Request $request, Order $order)
    {
        $order->update([\"status\" => $request->status]);
        return redirect()->back()->with(\"success\", \"Order status updated.\");
    }
}


