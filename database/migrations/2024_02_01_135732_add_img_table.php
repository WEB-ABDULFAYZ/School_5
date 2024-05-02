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
        Schema::table('smena2s', function (Blueprint $table) {
            $table->string('image');
            // Boshqa atributlarni ham qo'shishingiz mumkin
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::table('smena2s', function (Blueprint $table) {
            $table->dropColumn('image');
            // Boshqa o'zgarishlarni ham olib tashlashiz mumkin
        });
    }
};
