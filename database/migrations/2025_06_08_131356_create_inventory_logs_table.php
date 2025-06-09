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
        Schema::create("inventory_logs", function (Blueprint $table) {
            $table->id();
            $table->foreignId("inventory_id")->constrained("inventory")->onDelete("cascade");
            $table->string("change_type");
            $table->integer("qty_changed");
            $table->timestamp("timestamp")->useCurrent();
            $table->foreignId("user_id")->constrained("users")->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("inventory_logs");
    }
};


