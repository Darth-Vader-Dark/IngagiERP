<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\RoomBooking;
use App\Models\Order;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function processRoomBookingPayment(Request $request, RoomBooking $roomBooking)
    {
        // In a real application, this would integrate with a payment gateway.
        // For now, we'll simulate a successful payment.
        $roomBooking->update([\"payment_status\" => \"paid\"]);

        Payment::create([
            \"payable_type\" => RoomBooking::class,
            \"payable_id\" => $roomBooking->id,
            \"amount\" => $roomBooking->room->price, // Assuming room price is the booking amount
            \"method\" => \"dummy_gateway\",
            \"status\" => \"completed\",
            \"transaction_id\" => \"dummy_tx_\" . uniqid(),
        ]);

        return redirect()->route(\"room_bookings.show_public\", $roomBooking->id)->with(\"success\", \"Payment successful for room booking.\");
    }

    public function processOrderPayment(Request $request, Order $order)
    {
        // In a real application, this would integrate with a payment gateway.
        // For now, we'll simulate a successful payment.
        $order->update([\"status\" => \"Paid\"]);

        Payment::create([
            \"payable_type\" => Order::class,
            \"payable_id\" => $order->id,
            \"amount\" => $order->total_amount,
            \"method\" => \"dummy_gateway\",
            \"status\" => \"completed\",
            \"transaction_id\" => \"dummy_tx_\" . uniqid(),
        ]);

        return redirect()->route(\"orders.show_public\", $order->id)->with(\"success\", \"Payment successful for order.\");
    }
}


