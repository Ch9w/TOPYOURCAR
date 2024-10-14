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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('year');
            $table->string('color');
            $table->integer('mileage');
            $table->string('transmission');
            $table->string('drive');
            $table->string('body_type');
            $table->string('steering');
            $table->string('engine');
            $table->integer('power');
            $table->integer('generation');
            $table->string('equipment');
            $table->integer('max_speed');
            $table->integer('weight');
            $table->integer('number_seats');
            $table->integer('cost');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
