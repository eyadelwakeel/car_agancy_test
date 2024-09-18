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
        Schema::create('coupon', function (Blueprint $table) {
            $table->Coupon_id(); // لإنشاء عمود الـ ID تلقائياً
            $table->integer('Coupon_code');  // عمود رقمي
            $table->integer('Discount_precentage');  // عمود رقمي
            $table->boolean('is_used'); // لإنشاء حقول created_at و updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
