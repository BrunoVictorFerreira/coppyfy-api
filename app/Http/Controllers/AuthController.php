<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string|confirmed'
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        Mail::send("mail.firstAccess", ["name" => $request->name], function ($m) use ($user) {
            $m->from("victorbruno221@gmail.com");
            $m->subject("Criação de conta | Coppyfy");
            $m->to("victorbruno221@gmail.com");
        });
        $token = $user->createToken('token')->plainTextToken;
        $response = [
            'user' => $user,
            'token' => $token
        ];
        return response($response, 201);
    }

    public function login(Request $request)
    {
        Log::info("testeeee");
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        $user = User::where("email", $request->email)->first();
        if (!$user || !Hash::check($request->password, $user->password)) {
            return response([
                'message' => 'Credenciais inválidas'
            ], 401);
        }
        $token = $user->createToken('token')->plainTextToken;
        $response = [
            'user' => $user,
            'token' => $token
        ];
        return response($response, 201);
    }

    public function logout(Request $request)
    {
        Log::info("caiu aqui abc123");

        $request->user()->currentAccessToken()->delete();
        return response()->json([
            'message' => 'Logout efetuado com sucesso e exclusão dos tokens'
        ], 200);
    }

    public function veryfyToken(Request $request)
    {
        $user = User::where([
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        
        if ($request->user('token')) {
            return "auth";
        } else {
            return "guest";
        }
    }
}
