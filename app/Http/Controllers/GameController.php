<?php

namespace App\Http\Controllers;

use App\Http\Resources\GameResource;
use App\Models\Game;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Http\Request;

#[Fillable(['name', 'image', 'subtitle'])]
class GameController extends Controller
{
    public function index()
    {
        $games = Game::all();

        return GameResource::collection($games);
    }
}
