<?php

namespace App\Http\Controllers;

use App\Http\Requests\InviteFriendRequest;
use App\Http\Resources\FriendResource;
use App\Models\User;
use App\Models\UserFriend;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class FriendController extends Controller
{
    public function index(Request $request): AnonymousResourceCollection
    {
        $friends = UserFriend::with('friend')
            ->where('user_id', $request->user()->id)
            ->get();

        return FriendResource::collection($friends);
    }

    public function invite(InviteFriendRequest $request): FriendResource
    {
        $friend = User::where('username', $request->username)->firstOrFail();

        $userFriend = UserFriend::create([
            'user_id'   => $request->user()->id,
            'friend_id' => $friend->id,
        ]);

        $userFriend->load('friend');

        return new FriendResource($userFriend);
    }
}
