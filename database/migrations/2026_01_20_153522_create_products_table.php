<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
public function up()
{
    Schema::create('products', function (Blueprint $table) {
        $table->id();
        $table->string('name');         
        $table->text('description');    // Product Details
        $table->decimal('price', 8, 2); // Price (e.g., 99.99)
        $table->text('image');          // Image URL
        $table->timestamps();
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
