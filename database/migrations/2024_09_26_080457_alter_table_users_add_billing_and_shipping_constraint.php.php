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
        //
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('billing_id')->after('remember_token')->index()->nullable()->constrained('addresses')->nullOnDelete();
            $table->foreignId('shipping_id')->after('billing_id')->index()->nullable()->constrained('addresses')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::table('users', function (Blueprint $table){
            $table->dropColumn([
                'billing_id',
                'shipping_id'
            ]);

            $table->dropIndex([
                'billing_id',
                'shipping_id'
            ]);
        });
    }
};
