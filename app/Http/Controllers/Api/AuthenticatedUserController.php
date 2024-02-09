<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\Auth\AuthenticatedUserResource;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AuthenticatedUserController extends Controller
{
    public function __invoke(Request $request): JsonResponse
    {
        return response()->json(
            data: new AuthenticatedUserResource($request->user()),
            status: 200,
        );
    }
}
