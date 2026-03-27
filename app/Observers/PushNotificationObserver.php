<?php

namespace App\Observers;

use App\Models\PushNotification;
use Carbon\Carbon;
use Kreait\Firebase\Messaging\ApnsConfig;
use Kreait\Firebase\Messaging\CloudMessage;
use Kreait\Laravel\Firebase\Facades\Firebase;

class PushNotificationObserver
{
    public function creating(PushNotification $notification): bool
    {
        // Check if same notification doesn't already exist in the last 3 days
        return !PushNotification::whereUnikey($notification->unikey)
            ->where('created_at', '>=', Carbon::now()->subDays(3))
            ->exists();
    }

    public function created(PushNotification $notification): void
    {
        $fcmToken = $notification->user->firebase_token;

        if ($fcmToken == null || $fcmToken == '') {
            return;
        }

        $data = [
            'content.id' => '' .mt_rand(1000, 9999),
            'content.channelKey' => 'general',
            'content.displayOnForeground' => 'true',
            'content.showWhen' => 'true',
            'content.autoDismissible' => 'true',
            'content.privacy' => 'Private',
        ];

        if ($notification->large_icon != null) {
            $data['content.largeIcon'] = $notification->large_icon;
        }

        if ($notification->payload != null) {
            $data['content.payload.secret'] = $notification->payload;
        }

        // Send notification to the user
        $messaging = Firebase::messaging();
        $message = CloudMessage::new()->withToken($fcmToken)
            ->withNotification([
                'title' => $notification->title,
                'body' => $notification->body,
            ])
            ->withData($data)
            ->withApnsConfig(ApnsConfig::fromArray([
                'headers' => [
                    'apns-priority' => '5',
                ],
                'payload' => [
                    'aps' => [
                        'mutable-content' => 1,
                    ],
                ],
            ]));

        $messaging->send($message);
    }
}
