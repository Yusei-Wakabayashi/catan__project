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
        Schema::create('p_gamecards', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('cardfield');
            $table->integer('m_gamecards_id');
            $table->integer('playerinformations_id');
            $table->integer('boards_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('p_gamecards');
    }
};
