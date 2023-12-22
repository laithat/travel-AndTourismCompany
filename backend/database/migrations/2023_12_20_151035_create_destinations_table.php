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
        Schema::create('destinations', function (Blueprint $table) {
            $table->id();
            $table->string('destination_name');
            $table->string('desciption');
            $table->string('location');
            $table->binary('img');
            $table->double('avg_rating');
            $table->double('price');
            $table->string('number_of_booking');
            $table->integer('popularity_level');
            $table->boolean('special_travel');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('destinations');
    }
};
