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
        Schema::create('food_interactions', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->integer('severity_meter')->nullable();
            $table->foreignId('medicine_id')->constrained('medicine');
            $table->foreignId('food_id')->constrained('foods');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('food_interactions');
    }
};
