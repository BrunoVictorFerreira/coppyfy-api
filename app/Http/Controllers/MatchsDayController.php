<?php

namespace App\Http\Controllers;

use App\Models\MatchsDay;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class MatchsDayController extends Controller
{
    public function register(Request $request)
    {

        $request->validate([
            'first_team' => 'required|integer',
            'second_team' => 'required|integer'
        ]);

        $first_team = Team::where("id", $request->first_team)->first();
        $second_team = Team::where("id", $request->second_team)->first();

        MatchsDay::create([
            'first_team' => $first_team->id,
            'second_team' => $second_team->id,
            'important' => $request->important ?? false
        ]);

        return response()->json([
            'message' => 'Partida adicionada com sucesso'
        ]);
    }
    public function index(Request $request)
    {
        $array = [];
        $turn = $request->turn;
        $matchs = MatchsDay::all();
        for ($i = 0; $i < count($matchs); $i++) {
            $first_team = MatchsDay::join('teams', 'teams.id', 'matchs_days.first_team')
                ->join('groups', 'groups.id', 'teams.group_id')
                ->where(['matchs_days.id' => $matchs[$i]->id, 'matchs_days.' . $turn => true])
                ->select('teams.id', 'teams.name', 'groups.name as group')
                ->first();
            $second_team = MatchsDay::join('teams', 'teams.id', 'matchs_days.second_team')
                ->join('groups', 'groups.id', 'teams.group_id')
                ->where(['matchs_days.id' => $matchs[$i]->id, 'matchs_days.' . $turn => true])
                ->select('teams.id', 'teams.name', 'groups.name as group')
                ->first();
            if (!is_null($first_team) && !is_null($second_team)) {
                array_push($array, [
                    $first_team,
                    $second_team
                ]);
            }
        }

        return response()->json(
            $array
        );
    }
}
