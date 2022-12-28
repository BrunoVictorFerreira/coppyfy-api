<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function updateUser(Request $request)
    {
        return Auth::user();
        // return response()->json([
        //     'message' => 'Logout efetuado com sucesso e exclusão dos tokens'
        // ], 200);
    }
    public function getUserData(Request $request)
    {
        return Auth::user();
        // return response()->json([
        //     'message' => 'Logout efetuado com sucesso e exclusão dos tokens'
        // ], 200);
    }
}
