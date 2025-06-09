<?php

namespace App\Http\Controllers;

use App\Models\RoomBooking;
use Illuminate\Http\Request;

class ReceptionistController extends Controller
{
    public function dashboard()
    {
        $upcomingBookings = RoomBooking::where(\"check_in\", \">=\", now())->orderBy(\"check_in\")->get();
        return view(\"receptionist.dashboard\", compact(\"upcomingBookings\"));
    }

    public function updateRoomBookingStatus(Request $request, RoomBooking $roomBooking)
    {
        $roomBooking->update([\"payment_status\" => $request->status]);
        return redirect()->back()->with(\"success\", \"Room booking status updated.\");
    }
}


