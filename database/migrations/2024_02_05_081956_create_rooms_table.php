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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('hotel_id');
            $table->unsignedBigInteger('category_id');
            $table->string('name');
            $table->decimal('price', 8, 2);
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->unsignedBigInteger('inclusion_id');
            $table->unsignedBigInteger('amenity_id');
            $table->timestamps();

            // Foreign Key Constraints
            $table->foreign('hotel_id')->references('id')->on('hotels')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('room_categories');

            // Pivot Table for Room Amenities
            $table->foreign('amenity_id')->references('id')->on('room_amenities');
            $table->foreign('inclusion_id')->references('id')->on('room_inclusions');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
