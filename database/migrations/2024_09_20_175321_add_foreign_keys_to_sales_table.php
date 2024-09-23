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
        Schema::table('sales', function (Blueprint $table) {
            $table->foreign(['branch_id'])->references(['id'])->on('branches')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign(['car_id'])->references(['id'])->on('cars')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign(['client_id'])->references(['id'])->on('clients')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign(['coupon_id'])->references(['id'])->on('coupons')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign(['salesperson_id'])->references(['id'])->on('salespeople')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sales', function (Blueprint $table) {
            $table->dropForeign('sales_branch_id_foreign');
            $table->dropForeign('sales_car_id_foreign');
            $table->dropForeign('sales_client_id_foreign');
            $table->dropForeign('sales_coupon_id_foreign');
            $table->dropForeign('sales_salesperson_id_foreign');
        });
    }
};
