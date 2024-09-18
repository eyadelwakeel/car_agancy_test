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
        Schema::create('car', function (Blueprint $table) {
            $table->Car_ID(); // لإنشاء عمود الـ ID تلقائياً
            $table->string('Car_Model'); // عمود نصي
            $table->string('Available_Colors'); // عمود نصي
            $table->string('Additional_Features'); // عمود نصي
            $table->float('Capacity'); // عمود نصي
            $table->integer('Quantity_in _Stock');  // عمود رقمي
            $table->integer('Branch_ID');  // عمود رقمي
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
