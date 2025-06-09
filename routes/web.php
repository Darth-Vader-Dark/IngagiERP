<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\RoleMiddleware;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get(
    '/',
    function () {
        return view('public.landing');
    }
);

Route::get(
    '/dashboard',
    function () {
        return view('dashboard');
    }
)->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'role:admin'])->group(
    function () {
        Route::get(
            '/admin/dashboard',
            function () {
                return view('admin.dashboard');
            }
        )->name('admin.dashboard');
    }
);

Route::middleware('auth')->group(
    function () {
        Route::get(
            '/profile',
            [ProfileController::class, 'edit']
        )->name('profile.edit');
        Route::patch(
            '/profile',
            [ProfileController::class, 'update']
        )->name('profile.update');
        Route::delete(
            '/profile',
            [ProfileController::class, 'destroy']
        )->name('profile.destroy');
    }
);

require __DIR__ . '/auth.php';




Route::middleware(['auth', 'role:waiter'])->group(
    function () {
        Route::get(
            '/waiter/dashboard',
            function () {
                return view('waiter.dashboard');
            }
        )->name('waiter.dashboard');
    }
);

Route::middleware(['auth', 'role:chef'])->group(
    function () {
        Route::get(
            '/chef/dashboard',
            function () {
                return view('chef.dashboard');
            }
        )->name('chef.dashboard');
    }
);

Route::middleware(['auth', 'role:inventory_manager'])->group(
    function () {
        Route::get(
            '/inventory-manager/dashboard',
            function () {
                return view('inventory_manager.dashboard');
            }
        )->name('inventory_manager.dashboard');
    }
);

Route::middleware(['auth', 'role:receptionist'])->group(
    function () {
        Route::get(
            '/receptionist/dashboard',
            function () {
                return view('receptionist.dashboard');
            }
        )->name('receptionist.dashboard');
    }
);




Route::middleware(["auth", "role:admin"])->group(function () {
    Route::resource("admin/employees", App\Http\Controllers\EmployeeController::class)->names("admin.employees");
});




Route::middleware(["auth", "role:admin"])->group(function () {
    Route::resource("admin/inventory", App\Http\Controllers\InventoryController::class)->names("admin.inventory");
});




Route::middleware(["auth", "role:admin"])->group(function () {
    Route::resource("admin/room-bookings", App\Http\Controllers\RoomBookingController::class)->names("admin.room_bookings");
});




Route::middleware(["auth", "role:admin"])->group(function () {
    Route::resource("admin/menu-items", App\Http\Controllers\MenuItemController::class)->names("admin.menu_items");
});




Route::middleware(["auth", "role:admin"])->group(function () {
    Route::resource("admin/orders", App\Http\Controllers\OrderController::class)->names("admin.orders");
});




Route::middleware(['auth', 'role:waiter'])->group(function () {
    Route::get('/waiter/dashboard', [App\Http\Controllers\WaiterController::class, 'dashboard'])->name('waiter.dashboard');
    Route::put('/waiter/orders/{order}/update-status', [App\Http\Controllers\WaiterController::class, 'updateOrderStatus'])->name('waiter.orders.updateStatus');
    Route::put('/waiter/rooms/{room}/update-status', [App\Http\Controllers\WaiterController::class, 'updateRoomStatus'])->name('waiter.rooms.updateStatus');
});

Route::middleware(['auth', 'role:chef'])->group(function () {
    Route::get('/chef/dashboard', [App\Http\Controllers\ChefController::class, 'dashboard'])->name('chef.dashboard');
    Route::put('/chef/orders/{order}/update-status', [App\Http\Controllers\ChefController::class, 'updateOrderStatus'])->name('chef.orders.updateStatus');
});

Route::middleware(['auth', 'role:inventory_manager'])->group(function () {
    Route::get('/inventory-manager/dashboard', [App\Http\Controllers\InventoryManagerController::class, 'dashboard'])->name('inventory_manager.dashboard');
});

Route::middleware(['auth', 'role:receptionist'])->group(function () {
    Route::get('/receptionist/dashboard', [App\Http\Controllers\ReceptionistController::class, 'dashboard'])->name('receptionist.dashboard');
    Route::put('/receptionist/room-bookings/{roomBooking}/update-status', [App\Http\Controllers\ReceptionistController::class, 'updateRoomBookingStatus'])->name('receptionist.room_bookings.updateStatus');
});




Route::get("room-bookings/{roomBooking}", [App\Http\Controllers\RoomBookingController::class, "showPublic"])->name("room_bookings.show_public");
Route::get("orders/{order}", [App\Http\Controllers\OrderController::class, "showPublic"])->name("orders.show_public");




Route::get("/payment/room-booking/{roomBooking}/process", [App\Http\Controllers\PaymentController::class, "processRoomBookingPayment"])->name("process_room_booking_payment");
Route::get("/payment/order/{order}/process", [App\Http\Controllers\PaymentController::class, "processOrderPayment"])->name("process_order_payment");



// Public pages
Route::get('/hotels', function () {
    $rooms = \App\Models\Room::all();
    return view('public.hotels', compact('rooms'));
})->name('hotels');

Route::get('/menu', function () {
    $menuItems = \App\Models\MenuItem::where('is_available', true)->get()->groupBy('category');
    return view('public.menu', compact('menuItems'));
})->name('menu');

Route::get('/contact', [App\Http\Controllers\ContactController::class, 'show'])->name('contact');
Route::post('/contact', [App\Http\Controllers\ContactController::class, 'store'])->name('contact.store');

