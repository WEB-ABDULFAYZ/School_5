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
        Schema::table('leaders', function (Blueprint $table) {
            $table->string('role_ru');
            // Boshqa atributlarni ham qo'shishingiz mumkin
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::table('leaders', function (Blueprint $table) {
            $table->dropColumn('role_ru');
            // Boshqa o'zgarishlarni ham olib tashlashiz mumkin
        });
    }
};
