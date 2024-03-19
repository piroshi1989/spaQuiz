<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Requests\Auth\LoginRequest;

class ApiTokenLoginController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\Response
     * @var \App\Models\User
     */
    public function __invoke(LoginRequest $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            $user = User::where('email', $request->email)->firstORFail();
            $user->tokens()->delete();
            $token = $user->createToken("access_token")->plainTextToken;

            return response()->json([
                    'access_token' => $token,
                    'token_type' => 'Bearer',
            ], 201);
        }

        return response()->json(['error' => '認証に失敗しました。'], 401);
    }
}