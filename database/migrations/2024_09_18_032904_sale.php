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


    Schema::create('sale', function (Blueprint $table) {
        $table->Coupon_ID(); // لإنشاء عمود الـ ID تلقائياً
        $table->Branch_ID(); // لإنشاء عمود الـ ID تلقائياً
        $table->Client_ID(); // لإنشاء عمود الـ ID تلقائياً
        $table->Car_ID(); // لإنشاء عمود الـ ID تلقائياً
        $table->sale_id(); // لإنشاء عمود الـ ID تلقائياً
        $table->Salepersons_ID(); // لإنشاء عمود الـ ID تلقائياً
        $table->string('payment_method'); // عمود نص
        column: $table->Date_Of_Contract(); // لإنشاء حقول created_at و updated_at
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





