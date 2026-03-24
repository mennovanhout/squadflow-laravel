<?php

namespace Database\Seeders;

use App\Models\Game;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    public function run(): void
    {
        Game::updateOrCreate(
            ['name' => 'Valorant'],
            [
                'image' => 'https://squadflow.gg/images/games/valorant.jpg',
                'subtitle' => 'MARCH 2026',
            ]
        );

        Game::updateOrCreate(
            ['name' => 'Rocket League'],
            [
                'image' => 'https://squadflow.gg/images/games/rocketleague.jpg',
                'subtitle' => 'MARCH 2026',
            ]
        );

        Game::updateOrCreate(
            ['name' => 'CS: GO'],
            [
                'image' => 'https://squadflow.gg/images/games/counterstrike.jpg',
                'subtitle' => 'MARCH 2026',
            ]
        );
    }
}
