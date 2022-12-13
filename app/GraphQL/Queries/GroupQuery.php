<?php

namespace App\GraphQL\Queries;

use App\Models\Team;
use App\Models\Group;
use App\Models\User;
use GraphQL\Type\Definition\ResolveInfo;
use Illuminate\Support\Facades\Log;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;

class GroupQuery
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

    public function teamsForGroup($root, array $args, $context, $info)
    {

        return Team::where('group_id', $args['group_id'])
            ->get();
    }
    public function allTeamsForGroup($root, array $args, $context, $info)
    {

        $grupos = Group::orderBy('id', 'ASC')->get();
        Log::info(json_encode($grupos));
        $array = [];
        for ($i = 0; $i < count($grupos); $i++) {
            $groups = Team::join('team_information', 'team_information.teams_id', 'teams.id')
            ->join('flags', 'flags.id', 'teams.brasao_id')
            ->where('teams.group_id', $grupos[$i]->id)
            ->orderBy('team_information.pts', 'DESC')
            ->orderBy('team_information.sg', 'DESC')
            ->orderBy('team_information.gols', 'DESC')
            ->get();
            array_push($array, [
                "id" => $grupos[$i]->id,
                "grupo" => $grupos[$i]->name,
                "teams" => $groups
            ]);
        }
        
        Log::info(json_encode($array));
        return $array;
    }
}
