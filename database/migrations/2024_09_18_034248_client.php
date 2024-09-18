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
        Schema::create('client', function (Blueprint $table) {
            $table->Client_ID(); // لإنشاء عمود الـ ID تلقائياً
            $table->string('Client_Name'); // عمود نصي
            $table->string('Client_Contact _Information'); // عمود نصي
            $table->integer('Client_Phone');  // عمود رقمي
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
