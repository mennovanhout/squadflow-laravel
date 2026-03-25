<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\UserFriend */
class FriendResource extends JsonResource
{
    /**
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'         => $this->id,
            'status'     => $this->status,
            'friend'     => new UserResource($this->buddy()),
            'is_sender'     => $this->user_id == auth()->id(),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}

