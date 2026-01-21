<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up()
{
    Schema::create('articles', function (Blueprint $table) {
        $table->id();
        $table->string('titre');   // Title of the article [cite: 48]
        $table->text('contenu');   // Content of the article [cite: 49]
        $table->text('image');     // Image URL [cite: 52]
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
