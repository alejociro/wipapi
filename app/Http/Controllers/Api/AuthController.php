<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Response;

class AuthController extends Controller
{
    public function register(RegisterRequest $request): JsonResponse
    {
        $data = $request->validated();

        $request = array_merge($data, [
            'password' => Hash::make($data['password']),
            'remember_token' => Str::random(10),
        ]);

        $user = User::create($request);

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'user' => $user->toArray(),
            'access_token' => $token,
            'token_type' => 'Bearer',
        ]);
    }

    public function login(LoginRequest $request): JsonResponse
    {
        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json(['message' => 'Invalid login details'], Response::HTTP_UNAUTHORIZED);
        }

        $user = User::where('email', $request->get('email'))->firstOrFail();

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'user' => $user->toArray(),
            'access_token' => $token,
            'token_type' => 'Bearer',
        ]);
    }

    public function logout(Request $request): JsonResponse
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json(['message' => 'You have been successfully logged out!']);
    }

    public function me(Request $request)
    {
        return $request->user();
    }
}
