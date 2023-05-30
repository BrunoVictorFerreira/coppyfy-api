<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ImagesJogadores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class FileUploadController extends Controller
{
    public function upload(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'file' => 'required|mimes:png,jpg,jpeg,webp|max:2048',
        ]);

        if ($validator->fails()) {

            return response()->json(['error' => $validator->errors()], 401);
        }


        if ($file = $request->file('file')) {
            $path = $file->store('public/files/jogadores');
            $name = $file->getClientOriginalName();

            //store your file into directory and db
            $save = new ImagesJogadores();
            $save->jogador_id = $request['jogador_id'];
            $save->name = $file;
            $save->path = $path;
            $save->save();

            return response()->json([
                "success" => true,
                "message" => "File successfully uploaded",
                "file" => $file
            ]);
        }
    }
}
