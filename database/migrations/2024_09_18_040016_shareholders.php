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
        Schema::create('Shareholders', function (Blueprint $table) {
            $table->Shareholder_id(); // لإنشاء عمود الـ ID تلقائياً
            $table->string('name'); // عمود نصي
            $table->float('Share_precentage');  // عمود رقمي
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
