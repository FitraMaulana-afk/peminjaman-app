<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function register(RegisterRequest $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }

        $user = User::create([$validator]);

        return response()->json(['message' => 'Registration successful'], 201);
    }

    public function login(LoginRequest $request)
    {
        // \dd($request);

        $credentials = $request->validated();

        if (auth()->attempt($credentials)) {
            $token = auth()->user()->createToken('peminjaman')->accessToken;
            return \responder()
                ->success(['token' => $token]);
        } else {
            return \responder()
                ->error(401, "Unauthorized");
        }
    }
}
