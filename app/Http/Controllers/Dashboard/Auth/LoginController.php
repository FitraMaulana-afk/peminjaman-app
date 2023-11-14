<?php

namespace App\Http\Controllers\Dashboard\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public string $showLogin = 'dashboard.auth.';

    public function showLoginForm()
    {
        $showLogin = $this->showLogin;
        return \view($showLogin . 'login');
    }

    public function login(LoginRequest $request)
    {
        // \dd($request);
        $credentials = $request->validated();

        if (auth()->attempt($credentials)) {
            return \redirect()->route('dashboard.index');
        }
    }
}
