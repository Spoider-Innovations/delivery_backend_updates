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
        Schema::table('orders', function (Blueprint $table) {
            $table->double('additional_charge',23, 3)->default(0);
            $table->double('partially_paid_amount',23, 3)->default(0);
            $table->string('order_proof')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn('additional_charge');
            $table->dropColumn('partially_paid_amount');
            $table->dropColumn('order_proof');

        });
    }
};
