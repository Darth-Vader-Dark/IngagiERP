<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\RoomBooking;
use App\Models\Inventory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function salesReport(Request $request)
    {
        $startDate = $request->input("start_date");
        $endDate = $request->input("end_date");

        $sales = Order::query()
            ->when($startDate, function ($query) use ($startDate) {
                $query->whereDate("created_at", ">=", $startDate);
            })
            ->when($endDate, function ($query) use ($endDate) {
                $query->whereDate("created_at", "<=", $endDate);
            })
            ->where("status", "Paid")
            ->select(DB::raw("DATE(created_at) as date"), DB::raw("SUM(total_amount) as total_sales"))
            ->groupBy("date")
            ->orderBy("date")
            ->get();

        return view("admin.reports.sales", compact("sales", "startDate", "endDate"));
    }

    public function bookingStatistics(Request $request)
    {
        $startDate = $request->input("start_date");
        $endDate = $request->input("end_date");

        $bookings = RoomBooking::query()
            ->when($startDate, function ($query) use ($startDate) {
                $query->whereDate("check_in", ">=", $startDate);
            })
            ->when($endDate, function ($query) use ($endDate) {
                $query->whereDate("check_out", "<=", $endDate);
            })
            ->select(DB::raw("COUNT(*) as total_bookings"), DB::raw("SUM(CASE WHEN payment_status = \"paid\" THEN 1 ELSE 0 END) as paid_bookings"), DB::raw("SUM(CASE WHEN payment_status = \"pending\" THEN 1 ELSE 0 END) as pending_bookings"))
            ->first();

        return view("admin.reports.booking_statistics", compact("bookings", "startDate", "endDate"));
    }

    public function inventoryTrends(Request $request)
    {
        $inventory = Inventory::all();
        return view("admin.reports.inventory_trends", compact("inventory"));
    }

    public function paidUnpaidOrders(Request $request)
    {
        $paidOrders = Order::where("status", "Paid")->get();
        $unpaidOrders = Order::where("status", "Pending")->get();

        return view("admin.reports.paid_unpaid_orders", compact("paidOrders", "unpaidOrders"));
    }
}


