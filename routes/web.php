<?php

use App\Models\PushNotification;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/privacy', function () {
    return view('privacy');
})->name('privacy');

Route::get('/terms', function () {
    return view('terms');
})->name('terms');


Route::get('/test', function (){
    $friend = \App\Models\User::where('email', 'info@mennovanhout.nl')->first();
    $me = \App\Models\User::where('email', 'klaas@mennovanhout.nl')->first();

    PushNotification::create([
        'user_id' => $friend->id,
        'unikey' => "invite_{$me->id}_{$friend->id}",
        'title' => 'Friend Request',
        'body' => "You received a friend request of @{$friend->username}!",
        'payload' => 'friend_request',
    ]);
});
