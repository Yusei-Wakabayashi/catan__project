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
        Schema::create('pl_gamefields_roads', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('playerinformations_id');
            $table->integer('boards_id');
            $table->integer('m_road');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pl_gamefields_roads');
    }
};
