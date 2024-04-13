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
        Schema::create('medicine', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('commercial_name')->nullable();
            $table->string('scientific_name')->nullable();
            $table->text('description')->nullable();
            $table->string('men_dosage')->nullable();
            $table->string('women_dosage')->nullable();
            $table->string('kids_dosage')->nullable();
            $table->foreignId('category_id')->constrained('medicine_categories');
            $table->foreignId('country_id')->constrained('origin_countries');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicine');
    }
};
