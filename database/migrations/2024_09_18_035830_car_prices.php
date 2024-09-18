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
        Schema::create('car_prices', function (Blueprint $table) {
            $table->Car_price_id(); // لإنشاء عمود الـ ID تلقائياً
            $table->string('Car_model'); // عمود نصي
            $table->float('Price');  // عمود رقمي
            $table->time('Last_updated'); // لإنشاء حقول created_at و updated_at
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
