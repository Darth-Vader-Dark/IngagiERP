<x-mail::message>
# Order Confirmation

Dear Customer,

Your order #{{ $order->id }} has been confirmed!

**Order Details:**
- **Table Number:** {{ $order->table_number ?? 'N/A' }}
- **Total Amount:** {{ $order->total_amount }}
- **Status:** {{ $order->status }}

**Items:**
@foreach ($order->orderItems as $item)
- {{ $item->quantity }} x {{ $item->menuItem->name }} ({{ $item->price }} each)
@endforeach

@if($qrCodeUrl)
Scan the QR code below for quick access to your order details:

<img src="{{ $qrCodeUrl }}" alt="QR Code" style="width: 150px; height: 150px;">
@endif

@if($paymentLink && $order->status == 'Pending')
To complete your payment, please click the link below:

<x-mail::button :url="$paymentLink">
Make Payment
</x-mail::button>
@endif

Thanks,
{{ config('app.name') }}
</x-mail::message>


