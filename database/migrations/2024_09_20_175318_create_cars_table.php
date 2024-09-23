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
        Schema::create('cars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('model');
            $table->string('available_color');
            $table->string('capacity');
            $table->text('additional_features')->nullable();
            $table->integer('quantity');
            $table->unsignedBigInteger('branch_id')->index('cars_branch_id_foreign');
            $table->unsignedBigInteger('manufacturer_id')->index('cars_manufacturer_id_foreign');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
