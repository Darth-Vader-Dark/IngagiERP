<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create("room_bookings", function (Blueprint $table) {
            $table->id();
            $table->string("customer_name");
            $table->string("email")->nullable();
            $table->string("phone")->nullable();
            $table->foreignId("room_id")->constrained("rooms")->onDelete("cascade");
            $table->date("check_in");
            $table->date("check_out");
            $table->string("payment_status")->default("pending");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("room_bookings");
    }
};


