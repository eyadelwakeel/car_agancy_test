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
        Schema::create('sales', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('car_id')->index('sales_car_id_foreign');
            $table->unsignedBigInteger('client_id')->index('sales_client_id_foreign');
            $table->unsignedBigInteger('salesperson_id')->index('sales_salesperson_id_foreign');
            $table->unsignedBigInteger('branch_id')->index('sales_branch_id_foreign');
            $table->unsignedBigInteger('coupon_id')->nullable()->index('sales_coupon_id_foreign');
            $table->date('date');
            $table->text('contract_details');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
