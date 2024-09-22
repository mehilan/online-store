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
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');

            $table->string('house');
            $table->string('street');
            $table->string('parish')->nullable(); //some vilalge/town
            $table->string('ward')->nullable(); //town
            $table->string('district')->nullable(); //grater area
            $table->string('country');
            $table->string('postcode');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('locations');
    }
};
