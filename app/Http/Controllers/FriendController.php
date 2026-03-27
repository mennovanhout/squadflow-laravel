<?php

namespace App\Http\Controllers;

use App\Enums\FriendshipStatus;
use App\Http\Requests\InviteFriendRequest;
use App\Http\Resources\FriendResource;
use App\Models\PushNotification;
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
            ->orwhere('friend_id', $request->user()->id)
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

        if ($friend->fcm_token != null) {
            PushNotification::create([
                'user_id' => $friend->id,
                'unikey' => "invite_{$request->user()->id}_{$friend->id}",
                'title' => 'Friend Request',
                'body' => "You received a friend request from @{$request->user()->username}!",
                'payload' => 'friend_request',
            ]);
        }

        return new FriendResource($userFriend);
    }

    public function accept(UserFriend $invite)
    {
        if ($invite->friend_id != request()->user()->id) {
            return response()->json([
                'message' => 'Unauthorized.',
            ], 403);
        }

        $invite->status = FriendshipStatus::Accepted;
        $invite->save();

        return response()->json([
            'message' => 'Friend request accepted.',
        ]);
    }

    public function decline(UserFriend $invite)
    {
        if ($invite->friend_id != request()->user()->id) {
            return response()->json([
                'message' => 'Unauthorized.',
            ], 403);
        }

        $invite->status = FriendshipStatus::Declined;
        $invite->save();

        return response()->json([
            'message' => 'Friend request declined.',
        ]);
    }

    public function remove(UserFriend $invite)
    {
        if ($invite->friend_id != request()->user()->id && $invite->user_id != request()->user()->id) {
            return response()->json([
                'message' => 'Unauthorized.',
            ], 403);
        }

        $invite->delete();

        return response()->json([
            'message' => 'Friend request deleted.',
        ]);
    }
}
