<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Room;
use Illuminate\Http\Request;

class WaiterController extends Controller
{
    public function dashboard()
    {
        $pendingOrders = Order::where(\"status\", \"Pending\")->get();
        $dirtyRooms = Room::where(\"status\", \"dirty\")->get();
        return view(\"waiter.dashboard\", compact(\"pendingOrders\", \"dirtyRooms\"));
    }

    public function updateOrderStatus(Request $request, Order $order)
    {
        $order->update([\"status\" => $request->status]);
        return redirect()->back()->with(\"success\", \"Order status updated.\");
    }

    public function updateRoomStatus(Request $request, Room $room)
    {
        $room->update([\"status\" => $request->status]);
        return redirect()->back()->with(\"success\", \"Room status updated.\");
    }
}


