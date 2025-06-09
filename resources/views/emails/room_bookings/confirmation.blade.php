<x-mail::message>
# Room Booking Confirmation

Dear {{ $roomBooking->customer_name }},

Your room booking has been confirmed!

**Booking Details:**
- **Room Number:** {{ $roomBooking->room->room_number ?? 'N/A' }}
- **Check-in Date:** {{ $roomBooking->check_in }}
- **Check-out Date:** {{ $roomBooking->check_out }}
- **Payment Status:** {{ ucfirst($roomBooking->payment_status) }}

@if($qrCodeUrl)
Scan the QR code below for quick access to your booking details:

<img src="{{ $qrCodeUrl }}" alt="QR Code" style="width: 150px; height: 150px;">
@endif

@if($paymentLink && $roomBooking->payment_status == 'pending')
To complete your payment, please click the link below:

<x-mail::button :url="$paymentLink">
Make Payment
</x-mail::button>
@endif

Thanks,
{{ config('app.name') }}
</x-mail::message>


