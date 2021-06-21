<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserLoginRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginShow()
    {
        return view('auth.login');
    }

    public function handleLogin(UserLoginRequest $request)
    {
        $credentials = $request->except('_token');
        
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('tasks.index');
        }

        return back()->withErrors('messages.login.fail');
    }
}
