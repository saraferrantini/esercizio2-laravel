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
        //paramteti nullabile, sono opzionali
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title',100)->unique();
            $table->integer('price')->nullabile();
            $table->string('author', 30);
            $table->string('img', 300)->nullabile();
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
