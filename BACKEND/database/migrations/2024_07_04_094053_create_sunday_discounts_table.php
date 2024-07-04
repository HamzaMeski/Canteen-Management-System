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
        Schema::create('sunday_discounts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('meal_id')->constrained('sunday_daily_meal')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('category_id')->constrained('user_category')->cascadeOnUpdate()->cascadeOnDelete();
            $table->unsignedFloat('discount');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sunday_discounts');
    }
};
