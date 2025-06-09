<?php

namespace App\Http\Controllers;

use App\Models\RoomBooking;
use App\Models\Room;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Mail;
use App\Mail\RoomBookingConfirmation;

class RoomBookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roomBookings = RoomBooking::all();
        return view(\"admin.room_bookings.index\", compact(\"roomBookings\"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $rooms = Room::all();
        return view(\"admin.room_bookings.create\", compact(\"rooms\"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            \"customer_name\" => \"required|string|max:255\",
            \"email\" => \"nullable|string|email|max:255\",
            \"phone\" => \"nullable|string|max:255\",
            \"room_id\" => \"required|exists:rooms,id\",
            \"check_in\" => \"required|date\",
            \"check_out\" => \"required|date|after:check_in\",
            \"payment_status\" => \"required|in:pending,paid\",
        ]);

        $roomBooking = RoomBooking::create($request->all());

        // Generate QR code
        $qrCodeData = route(\"room_bookings.show_public\", $roomBooking->id); // Assuming a public route for booking details
        $qrCodePath = \"qrcodes/room_booking_\" . $roomBooking->id . \".svg\";
        QrCode::generate($qrCodeData, public_path($qrCodePath));

        $roomBooking->qr_code_path = $qrCodePath;

        // Generate dummy payment link
        $paymentLink = url(\"/payment/room-booking/\" . $roomBooking->id . \"/amount/\" . $roomBooking->room->price); // Dummy link
        $roomBooking->payment_link = $paymentLink;

        $roomBooking->save();

        // Send email confirmation
        if ($roomBooking->email) {
            Mail::to($roomBooking->email)->send(new RoomBookingConfirmation($roomBooking));
        }

        return redirect()->route(\"admin.room_bookings.index\")->with(\"success\", \"Room booking created successfully.\");
    }

    /**
     * Display the specified resource.
     */
    public function show(RoomBooking $roomBooking)
    {
        return view(\"admin.room_bookings.show\", compact(\"roomBooking\"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RoomBooking $roomBooking)
    {
        $rooms = Room::all();
        return view(\"admin.room_bookings.edit\", compact(\"roomBooking\", \"rooms\"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RoomBooking $roomBooking)
    {
        $request->validate([
            \"customer_name\" => \"required|string|max:255\",
            \"email\" => \"nullable|string|email|max:255\",
            \"phone\" => \"nullable|string|max:255\",
            \"room_id\" => \"required|exists:rooms,id\",
            \"check_in\" => \"required|date\",
            \"check_out\" => \"required|date|after:check_in\",
            \"payment_status\" => \"required|in:pending,paid\",
        ]);

        $roomBooking->update($request->all());

        // Regenerate QR code if necessary (e.g., if data changes that affects the QR code content)
        $qrCodeData = route(\"room_bookings.show_public\", $roomBooking->id); // Assuming a public route for booking details
        $qrCodePath = \"qrcodes/room_booking_\" . $roomBooking->id . \".svg\";
        QrCode::generate($qrCodeData, public_path($qrCodePath));

        $roomBooking->qr_code_path = $qrCodePath;

        // Regenerate dummy payment link
        $paymentLink = url(\"/payment/room-booking/\" . $roomBooking->id . \"/amount/\" . $roomBooking->room->price); // Dummy link
        $roomBooking->payment_link = $paymentLink;

        $roomBooking->save();

        return redirect()->route(\"admin.room_bookings.index\")->with(\"success\", \"Room booking updated successfully.\");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RoomBooking $roomBooking)
    {
        $roomBooking->delete();
        return redirect()->route(\"admin.room_bookings.index\")->with(\"success\", \"Room booking deleted successfully.\");
    }

    public function showPublic(RoomBooking $roomBooking)
    {
        return view(\"public.room_bookings.show\", compact(\"roomBooking\"));
    }
}


