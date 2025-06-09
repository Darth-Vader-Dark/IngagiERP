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
        Schema::create("inventory", function (Blueprint $table) {
            $table->id();
            $table->string("item_name");
            $table->integer("stock_qty");
            $table->string("qr_code_value")->nullable();

            // FIXED: added nullable() to allow set null on delete
            $table->foreignId("added_by")->nullable()->constrained("users")->onDelete("set null");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("inventory");
    }
};
