<?php

namespace App\GraphQL\Mutations;

use App\Models\GameResult as ModelsGameResult;
use GraphQL\Type\Definition\ResolveInfo;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;
use App\Models\MatchsDay;
use App\Models\GameResult;
use App\Models\Team;
use App\Models\TeamInformation;

class GameResults
{
    /**
     * Return a value for the field.
     *
     * @param  null  $rootValue Usually contains the result returned from the parent field. In this case, it is always `null`.
     * @param  mixed[]  $args The arguments that were passed into the field.
     * @param  \Nuwave\Lighthouse\Support\Contracts\GraphQLContext  $context Arbitrary data that is shared between all fields of a single query.
     * @param  \GraphQL\Type\Definition\ResolveInfo  $resolveInfo Information about the query itself, such as the execution state, the field name, path to the field from the root, and more.
     * @return mixed
     */


    public function getPts($first_team, $second_team, $team_info){
        if($first_team > $second_team){
            return $team_info->pts + 3;
        }else if($first_team == $second_team){
            return $team_info->pts + 1;
        }else{
            return $team_info->pts;
        }
    }

    public function getSg($first_team, $second_team, $team_info){
        if($first_team > $second_team){
            return $team_info->sg + ($first_team - $second_team);
        }else if($first_team < $second_team){
            return $team_info->sg - ($second_team - $first_team);
        }else{
            return $team_info->sg;
        }
    }

    public function save($rootValue, array $args, GraphQLContext $context, ResolveInfo $resolveInfo)
    {
        $match_id = $args["match_id"];
        $first_team = $args["first_team"];
        $second_team = $args["second_team"];

        $match = MatchsDay::where('id', $match_id)->first();

        GameResult::create([
            "match_id" => $match_id,
            "first_team" => $first_team,
            "second_team" => $second_team
        ]);

        $team_info = TeamInformation::where('teams_id', $match->first_team)->first();
        $team_info->update([
            'pts' => $this->getPts($first_team, $second_team, $team_info),
            'vit' => $first_team > $second_team ? $team_info->vit + 1 : $team_info->vit,
            'emp' => $first_team == $second_team ? $team_info->emp + 1 : $team_info->emp,
            'der' => $first_team < $second_team ? $team_info->der + 1 : $team_info->der,
            'gols' => $team_info->gols + $first_team,
            'sg' => $this->getSg($first_team, $second_team, $team_info),
        ]);
        
        $team_info = TeamInformation::where('teams_id', $match->second_team)->first();
        $team_info->update([
            'pts' => $this->getPts($second_team, $first_team, $team_info),
            'vit' => $second_team > $first_team ? $team_info->vit + 1 : $team_info->vit,
            'emp' => $first_team == $second_team ? $team_info->emp + 1 : $team_info->emp,
            'der' => $second_team < $first_team ? $team_info->der + 1 : $team_info->der,
            'gols' => $team_info->gols + $second_team,
            'sg' => $this->getSg($second_team, $first_team, $team_info),
        ]);

        return response()->json([
            'message' => 'Jogo adicionado com sucesso'
        ]);


    }
    public function saveOut(array $args)
    {
        $match_id = $args["match_id"];
        $first_team = $args["first_team"];
        $second_team = $args["second_team"];

        $match = MatchsDay::where('id', $match_id)->first();

        GameResult::create([
            "match_id" => $match_id,
            "first_team" => $first_team,
            "second_team" => $second_team
        ]);

        $team_info = TeamInformation::where('teams_id', $match->first_team)->first();
        $team_info->update([
            'pts' => $this->getPts($first_team, $second_team, $team_info),
            'vit' => $first_team > $second_team ? $team_info->vit + 1 : $team_info->vit,
            'emp' => $first_team == $second_team ? $team_info->emp + 1 : $team_info->emp,
            'der' => $first_team < $second_team ? $team_info->der + 1 : $team_info->der,
            'gols' => $team_info->gols + $first_team,
            'sg' => $this->getSg($first_team, $second_team, $team_info),
        ]);
        
        $team_info = TeamInformation::where('teams_id', $match->second_team)->first();
        $team_info->update([
            'pts' => $this->getPts($second_team, $first_team, $team_info),
            'vit' => $second_team > $first_team ? $team_info->vit + 1 : $team_info->vit,
            'emp' => $first_team == $second_team ? $team_info->emp + 1 : $team_info->emp,
            'der' => $second_team < $first_team ? $team_info->der + 1 : $team_info->der,
            'gols' => $team_info->gols + $second_team,
            'sg' => $this->getSg($second_team, $first_team, $team_info),
        ]);

        return response()->json([
            'message' => 'Jogo adicionado com sucesso'
        ]);


    }
}
