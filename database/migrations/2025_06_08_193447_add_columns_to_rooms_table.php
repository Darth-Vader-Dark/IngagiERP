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
        Schema::table('rooms', function (Blueprint $table) {
            // Add new columns first
            $table->text('description')->nullable();
            $table->text('amenities')->nullable();
        });

        Schema::table('rooms', function (Blueprint $table) {
            // Rename column in a separate Schema::table call
            $table->renameColumn('type', 'room_type');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('rooms', function (Blueprint $table) {
            // Rename column back first
            $table->renameColumn('room_type', 'type');
        });

        Schema::table('rooms', function (Blueprint $table) {
            // Then drop columns
            $table->dropColumn(['description', 'amenities']);
        });
    }
};
