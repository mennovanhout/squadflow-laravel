<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('user_games', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('user_id')->constrained()->cascadeOnDelete();
            $table->foreignUuid('game_id')->constrained('games')->cascadeOnDelete();
            $table->timestamps();

            $table->unique(['user_id', 'game_id']);
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('user_games');
    }
};
