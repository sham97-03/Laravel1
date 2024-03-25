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
        Schema::create('medicines', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Scientific_name');
            $table->string('Trade_name');
            $table->forignId('category_id')->index()->references('id')->on('categories')->onDelete('cascade');;;
            $table->string('category');
            $table->string('Manufacturer');
            $table->integer('Available_Quantity');
            $table->date('Expiration_date');
            $table->decimal('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicines');
    }
};
