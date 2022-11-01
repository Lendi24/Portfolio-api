<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\User;
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

        return response($response,201);
    }

    public function login(Request $request) {
        $fields = $request->validate([
            'email' => "required|string|",
            'password' => "required|string|",
        ]);

        //Check e-mail
        $user = User::where('email', $fields['email']);

        //Check p-word
        if (!$user || !Hash::check($fields['password'], $user->password)) {
            return response(['message' => 'Bad credentials'], 401);
        } else {
            $token = $user->createToken('HXSE3i8bdJmq2&6cx*Y4dzypT&Q!a#')->plainTextToken;
            $response = [
                'user' => $user,
                'token' => $token,
            ];
    
            return response($response,201);    
        }
    }


    public function logout(Request $request) {  
        $request->user()->tokens()->delete();

        return [
            'message' => 'Token destroyed',
        ];
    }
}
