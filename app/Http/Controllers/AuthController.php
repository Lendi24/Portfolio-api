<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use app\Models\User;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function register(Request $request) {
        $fields = $request->validate([
            'name' => "required|string",
            'email' => "required|string|unique:users,email",
            'password' => "required|string|confirmed",
        ]);

        $user = User::create([
            'name' => $fields['name'],
            'email' => $fields['email'],
            'password' => bcrypt($fields['password']),
        ]);

        $token = $user->createToken('HXSE3i8bdJmq2&6cx*Y4dzypT&Q!a#')->plainTextToken;
        $response = [
            'user' => $user,
            'token' => $token,
        ];

        return response($response,201)
    }
}
