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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('brand');
            $table->text('description')->nullable();
            $table->integer('price');
            $table->boolean('sold');
            $table->boolean('status');
            $table->boolean('type');

            $table->foreignId('processor_id')->constrained();
            $table->foreignId('ram_id')->constrained();
            $table->foreignId('size_id')->constrained();
            $table->foreignId('storage_id')->constrained();
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
