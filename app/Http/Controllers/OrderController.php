<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\MenuItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderConfirmation;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::with([\"orderItems.menuItem\", \"waiter\"])->get();
        return view(\"admin.orders.index\", compact(\"orders\"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $menuItems = MenuItem::all();
        return view(\"admin.orders.create\", compact(\"menuItems\"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            \"table_number\" => \"nullable|string|max:255\",
            \"items\" => \"required|array|min:1\",
            \"items.*.menu_item_id\" => \"required|exists:menu_items,id\",
            \"items.*.quantity\" => \"required|integer|min:1\",
        ]);

        $totalAmount = 0;
        foreach ($request->items as $item) {
            $menuItem = MenuItem::find($item[\"menu_item_id\"]);
            $totalAmount += $menuItem->price * $item[\"quantity\"];
        }

        $order = Order::create([
            \"table_number\" => $request->table_number,
            \"waiter_id\" => Auth::id(),
            \"total_amount\" => $totalAmount,
            \"status\" => \"Pending\",
        ]);

        foreach ($request->items as $item) {
            $menuItem = MenuItem::find($item[\"menu_item_id\"]);
            OrderItem::create([
                \"order_id\" => $order->id,
                \"menu_item_id\" => $item[\"menu_item_id\"],
                \"quantity\" => $item[\"quantity\"],
                \"price\" => $menuItem->price,
            ]);
        }

        // Generate QR code
        $qrCodeData = route(\"orders.show_public\", $order->id); // Assuming a public route for order details
        $qrCodePath = \"qrcodes/order_\" . $order->id . \".svg\";
        QrCode::generate($qrCodeData, public_path($qrCodePath));

        $order->qr_code_path = $qrCodePath;

        // Generate dummy payment link
        $paymentLink = url(\"/payment/order/\" . $order->id . \"/amount/\" . $order->total_amount); // Dummy link
        $order->payment_link = $paymentLink;

        $order->save();

        // Send email confirmation (assuming customer email is available, e.g., through a user associated with the order)
        // For simplicity, we'll assume the waiter is the user placing the order and has an email.
        // In a real scenario, you might have a customer email field in the Order model.
        if ($order->waiter && $order->waiter->email) {
            Mail::to($order->waiter->email)->send(new OrderConfirmation($order));
        }

        return redirect()->route(\"admin.orders.index\")->with(\"success\", \"Order created successfully.\");
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        $order->load([\"orderItems.menuItem\", \"waiter\"]);
        return view(\"admin.orders.show\", compact(\"order\"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        $menuItems = MenuItem::all();
        $order->load(\"orderItems\");
        return view(\"admin.orders.edit\", compact(\"order\", \"menuItems\"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        $request->validate([
            \"table_number\" => \"nullable|string|max:255\",
            \"status\" => \"required|in:Pending,Paid,Prepared,Served\",
            \"items\" => \"required|array|min:1\",
            \"items.*.menu_item_id\" => \"required|exists:menu_items,id\",
            \"items.*.quantity\" => \"required|integer|min:1\",
        ]);

        $totalAmount = 0;
        foreach ($request->items as $item) {
            $menuItem = MenuItem::find($item[\"menu_item_id\"]);
            $totalAmount += $menuItem->price * $item[\"quantity\"];
        }

        $order->update([
            \"table_number\" => $request->table_number,
            \"total_amount\" => $totalAmount,
            \"status\" => $request->status,
        ]);

        $order->orderItems()->delete();
        foreach ($request->items as $item) {
            $menuItem = MenuItem::find($item[\"menu_item_id\"]);
            OrderItem::create([
                \"order_id\" => $order->id,
                \"menu_item_id\" => $item[\"menu_item_id\"],
                \"quantity\" => $item[\"quantity\"],
                \"price\" => $menuItem->price,
            ]);
        }

        // Regenerate QR code if necessary (e.g., if data changes that affects the QR code content)
        $qrCodeData = route(\"orders.show_public\", $order->id); // Assuming a public route for order details
        $qrCodePath = \"qrcodes/order_\" . $order->id . \".svg\";
        QrCode::generate($qrCodeData, public_path($qrCodePath));

        $order->qr_code_path = $qrCodePath;

        // Regenerate dummy payment link
        $paymentLink = url(\"/payment/order/\" . $order->id . \"/amount/\" . $order->total_amount); // Dummy link
        $order->payment_link = $paymentLink;

        $order->save();

        return redirect()->route(\"admin.orders.index\")->with(\"success\", \"Order updated successfully.\");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route(\"admin.orders.index\")->with(\"success\", \"Order deleted successfully.\");
    }

    public function showPublic(Order $order)
    {
        $order->load([\"orderItems.menuItem\", \"waiter\"]);
        return view(\"public.orders.show\", compact(\"order\"));
    }
}


