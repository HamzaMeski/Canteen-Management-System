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
        Schema::create('meal_menus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('meal_category_id')->constrained('meal_categories', 'id');
            $table->string('menu_name');
            $table->decimal('price', 8, 2)->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meal_menus');
    }
};