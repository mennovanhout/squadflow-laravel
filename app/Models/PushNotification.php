<?php

namespace App\Models;

use App\Observers\PushNotificationObserver;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[ObservedBy(PushNotificationObserver::class)]
#[Fillable(['user_id', 'unikey', 'title', 'body', 'large_icon', 'payload'])]
class PushNotification extends Model
{
    protected $with = ['user'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
