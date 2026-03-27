<?php

namespace App\Models;

use App\Observers\PushNotificationObserver;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

#[ObservedBy(PushNotificationObserver::class)]
#[Fillable(['user_id', 'unikey', 'title', 'body', 'large_icon', 'payload'])]
class PushNotification extends Model
{
    use HasUuids;
}
