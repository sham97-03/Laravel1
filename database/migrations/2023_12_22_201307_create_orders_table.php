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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pharmacist_id');
            $table->enum('status', ['pending', 'sent', 'received'])->nullable()->default('pending');
            $table->enum('payment', ['unpaid', 'paid'])->nullable()->default('unpaid');
            $table->foreign('pharmacist_id')->references('id')->on('users');
            $table->timestamp('order_date')->nullable()->default(now());
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
