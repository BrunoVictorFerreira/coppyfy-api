<?php

namespace App\Http\Controllers;

use App\Models\Flag;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index(Request $request){
        return Team::join('flags', 'flags.id', 'teams.brasao_id')
        ->join('groups', 'groups.id', 'teams.group_id')
        ->select('teams.name', 'flags.url', 'groups.name as group')
        ->get();
    }
    public function register(Request $request){
        $request->validate([
            'name' => 'required|string',
            'brasao' => 'required|string'
        ]);

        $brasao = Flag::create([
            "url" => $request->brasao
        ]);

        Team::create([
            "name" => $request->name,
            "brasao_id" => $brasao->id
        ]);

        return response()->json([
            'message' => 'Time e brasão adicionado com sucesso'
        ], 201);

    }
}
