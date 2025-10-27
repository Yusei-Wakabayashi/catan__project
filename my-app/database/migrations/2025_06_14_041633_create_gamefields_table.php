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
        Schema::create('gamefields', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('position');
            $table->integer('fieldnumber');
            $table->integer('thief');
            $table->integer('boards_id');
            $table->integer('m_tiles_id');
        });
    }

    /*
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gamefields');
    }
};
