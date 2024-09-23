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
        Schema::table('cars', function (Blueprint $table) {
            $table->foreign(['branch_id'])->references(['id'])->on('branches')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign(['manufacturer_id'])->references(['id'])->on('manufacturers')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cars', function (Blueprint $table) {
            $table->dropForeign('cars_branch_id_foreign');
            $table->dropForeign('cars_manufacturer_id_foreign');
        });
    }
};
