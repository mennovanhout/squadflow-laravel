<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable(['username', 'email', 'password', 'country_code'])]
class Game extends Model
{
    use HasUuids;

    public function achievements(): HasMany|Game
    {
        return $this->hasMany(Achievement::class);
    }

    public function achievementPresets(): HasMany|Game
    {
        return $this->hasMany(AchievementPreset::class);
    }
}
