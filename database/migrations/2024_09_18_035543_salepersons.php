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
        Schema::create('Salepersons', function (Blueprint $table) {
            $table->Salepersons_ID(); // لإنشاء عمود الـ ID تلقائياً
            $table->Branch_ID(); // لإنشاء عمود الـ ID تلقائياً
            $table->string('Salepersons_Name'); // عمود نصي
            $table->string('Salepersons_Contact _Information'); // عمود نصي
            $table->integer('Salepersons _Phone');  // عمود رقمي
            $table->time('Date_Of_Contract'); // لإنشاء حقول created_at و updated_at
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
