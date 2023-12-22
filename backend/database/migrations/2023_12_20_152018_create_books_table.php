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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('destinations_id');
            $table->date('booking_date');
            $table->date('check_in_date');
            $table->date('check_out_date');
            $table->integer('number_of_adults');
            $table->integer('number_of_children');
            $table->double('total_price');
            $table->boolean('payment_status');
            $table->boolean('booking_status');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
