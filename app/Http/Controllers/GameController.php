<?php

namespace App\Http\Controllers;

use App\Http\Resources\AchievementResource;
use App\Http\Resources\GameResource;
use App\Models\Game;

class GameController extends Controller
{
    public function index()
    {
        $games = Game::all();

        return GameResource::collection($games);
    }

    public function achievementsPresets(Game $game)
    {
        return AchievementResource::collection($game->achievementPresets);
    }

    public function achievements(Game $game)
    {
        return AchievementResource::collection($game->achievements);
    }
}
