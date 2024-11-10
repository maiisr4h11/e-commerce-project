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
        Schema::create('warehouses', function (Blueprint $table) {
            $table->id(); // Primary Key: int id
            $table->string('name'); // String name
            $table->foreignId('location_id')->constrained()->onDelete('cascade'); // Foreign Key: int location_id
            $table->float('capacity'); // Float capacity
            $table->json('specifications')->nullable(); // JSON specifications
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('warehouses');
    }
};
