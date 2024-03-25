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
        Schema::create('category_medicine', function (Blueprint $table) {
            $table->unsignedBigInteger('category_id')->index()->references('id')->on('categories')->onDelete('cascade');
            $table->unsignedBigInteger('medicine_id')->index()->references('id')->on('medicines')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category_medicine');
    }
};
