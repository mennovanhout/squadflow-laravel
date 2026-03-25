<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Resources\UserResource;
use App\Models\Game;
use App\Models\GameRequest;
use App\Models\User;
use App\Models\UserGame;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(RegisterRequest $request): JsonResponse
    {
        $user = User::create([
            'username'     => $request->username,
            'email'        => $request->email,
            'password'     => $request->password,
            'country_code' => $request->country_code,
        ]);

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'user'  => new UserResource($user),
            'token' => $token,
        ], 201);
    }

    public function login(LoginRequest $request): JsonResponse
    {
        $user = User::where('email', $request->email)->first();

        if (! $user || ! Hash::check($request->password, $user->password)) {
            return response()->json([
                'message' => 'Invalid credentials.',
            ], 401);
        }

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'user'  => new UserResource($user),
            'token' => $token,
        ]);
    }

    public function user(Request $request): UserResource
    {
        return new UserResource($request->user());
    }

    public function logout(Request $request): JsonResponse
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'message' => 'Logged out successfully.',
        ]);
    }

    public function claimGame(Game $game): JsonResponse
    {
        UserGame::updateOrCreate(
            [
                'user_id' => auth()->id(),
                'game_id' => $game->id,
            ],
            [
                // Any additional fields like 'score' or 'status' go here
            ]
        );

        return response()->json([]);
    }

    public function unclaimGame(Game $game): JsonResponse
    {
        UserGame::where('user_id', auth()->id())->where('game_id', $game->id)->delete();

        return response()->json([]);
    }

    public function requestGame(Request $request): JsonResponse
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        GameRequest::updateOrCreate([
            'name' => $request->name,
            'user_id' => auth()->id(),
        ], []);

        return response()->json([]);
    }
}

