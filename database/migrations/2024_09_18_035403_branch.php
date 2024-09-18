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
        Schema::create('brach', function (Blueprint $table) {
            $table->Branch_ID(); // لإنشاء عمود الـ ID تلقائياً
            $table->string('Branch_name'); // عمود نصي
            $table->string('City'); // عمود نصي
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
