<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;

class RegisteredUserController extends Controller
{
    public function store(RegisterRequest $request): JsonResponse
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make(value: $request->password),
        ]);

        event(new Registered($user));

        return response()->json(data: [
            'message' => 'Register Successfully',
            'user' => $user,
        ], status: 201);
    }
}
