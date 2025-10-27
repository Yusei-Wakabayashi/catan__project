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
        Schema::create('playerinformations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->integer('boards_id');//boardsのid
            $table->integer('settlement');//開拓地
            $table->integer('city');//都市の数
            $table->integer('max_road');//つながっている道の数(最大)
            $table->integer('knight');//騎士を使った枚数
            $table->integer('gamecard');//発展カードを持っている枚数
            $table->integer('lumber');//木材の数
            $table->integer('brick');//レンガの数
            $table->integer('wheat');//小麦の数
            $table->integer('wool');//羊毛の数
            $table->integer('iron');//鉄の数
            $table->integer('resource');//素材すべての数
            $table->integer('score');//得点
            $table->integer('turn');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('playerinformations');
    }
};
