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
            $table->string('key')->unique();

            $table->string('name');
            $table->mediumText('description');
            $table->unsignedBigInteger('cost');
            $table->unsignedBigInteger('retail');

            $table->boolean('active')->default(true);
            /**
             * @todo Move default to config/env variable
             */
            $table->boolean('vat')->default(config('shop.vat'));

            // json columns


            // relationships
            $table->foreignId('category_id')->nullable()->index()->references('id')->on('categories')->nullOnDelete();
            $table->foreignId('range_id')->nullable()->index()->references('id')->on('ranges')->nullOnDelete();
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
