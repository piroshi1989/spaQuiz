<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class TokenLoginController extends Controller
{
    public function __invoke(Request $request)
    {
         /** @var \App\Models\User */
        $user = Auth::user();
        if ($user) {
            $token = $user->createToken('AccessToken')->plainTextToken;
            return response()->json(['token' => $token], 200);
        } else {
            return response()->json(['error' => '認証に失敗しました。'], 401);
        }
    }

    public function user(Request $request){
        return response()->json(
            [
                $request->user()->name,
                $request->user()->email,
            ]
        );
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return response()->json(['message' => 'ログアウトしました。'], 200);
    }
}
