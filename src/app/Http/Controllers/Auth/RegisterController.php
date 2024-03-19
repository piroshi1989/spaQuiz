<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param RegisterRequest  $request
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

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
