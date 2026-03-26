<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['title', 'type', 'game_id', 'description', 'achieved_at'])]
class AchievementPreset extends Model
{
    use HasUuids;
}
