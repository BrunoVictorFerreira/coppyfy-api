<?php

namespace App\Http\Controllers;

use App\Models\ForgotPassword;
use App\Models\User;
use Illuminate\Http\Request;

class ForgotPasswordController extends Controller
{
    public function validateEmail(Request $request){
        $request->validate([
            'email' => 'required|email'
        ]);
        $user = User::where('email', $request->email)->first();
        if(!is_null($user)){
            $code = rand(111111,999999);
            $forgot = ForgotPassword::where('user_id', $user->id)->first();
            ForgotPassword::create([
                'user_id' => $user->id,
                'code' => $code
            ]);
            return response()->json([
                'message' => 'Por favor olhe seu email! enviamos um código.'
            ], 200);
        }else{
            return response()->json([
                'message' => 'O usuário não está cadastrado.'
            ], 400);
        }
    }

    public function forgotPassword(Request $request)
    {
        $request->validate([
            'code' => 'required|string',
            'password' => 'required|string|confirmed'
        ]);

        $code = ForgotPassword::where('code', $request->code)->first();

        if(is_null($code)){
            return response()->json([
                'message' => 'Código inválido'
            ], 400);
        }

        $user = User::findOrFail($code->user_id);
        $user->update([
            'password' => bcrypt($request->password)
        ]);
        ForgotPassword::destroy($code->id);
        return response()->json([
            'message' => 'Senha alterada com sucesso'
        ], 200);
    }
}
