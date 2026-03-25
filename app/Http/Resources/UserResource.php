<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\User */
class UserResource extends JsonResource
{
    /**
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $this->loadMissing('games');

        return [
            'id'                => $this->id,
            'username'          => $this->username,
            'email'             => $this->email,
            'country_code'      => $this->country_code,
            'email_verified_at' => $this->email_verified_at,
            'games' => GameResource::collection($this->whenLoaded('games')),
            'created_at'        => $this->created_at,
            'updated_at'        => $this->updated_at,
        ];
    }
}

