<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ApiTokenRegisterController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  App\Http\Requests\Auth\RegisterRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(RegisterRequest $request)
    {
        /*
        Database Insert
        */
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        if($user){
            Auth::login($user);
            $token = $user->createToken("access_token")->plainTextToken;

        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
            ], 201)->header('Content-Type', 'application/json');;
        }

        return response()->json(['error' => '登録に失敗しました。'], 401)
        ->header('Content-Type', 'application/json');;
    }
}
