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
        Schema::create('booking', function (Blueprint $table) {
            $table->id('booking_id');
            $table->date('check_in_date');
            $table->date('check_out_date');
            $table->date('booking_date');
            $table->decimal('total_amount', 10, 2);
            $table->string('status'); // Confirmed, Checked_in, Checked_out, Cancelled
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking');
    }
};
