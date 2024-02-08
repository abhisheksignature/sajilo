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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('package_name');
            $table->string('package_place');
            $table->string('image_path')->nullable();
            $table->string('package_price');
            $table->string('package_duration');
            $table->unsignedBigInteger('package_category_id'); // Foreign key column
            $table->timestamps();
        
            // Foreign key constraint
            $table->foreign('package_category_id')->references('id')->on('package_categories');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
