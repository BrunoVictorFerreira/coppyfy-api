<?php

namespace App\GraphQL\Queries;

use App\Models\Team;
use App\Models\Group;
use App\Models\MatchsDay;
use App\Models\User;
use GraphQL\Type\Definition\ResolveInfo;
use Illuminate\Support\Facades\Log;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;

class MatchDaysQuery
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

    public function matchDaysForGroup($root, array $args, $context, $info)
    {

           $first_team = MatchsDay::join("teams", 'teams.id', 'matchs_days.first_team')
           ->join('groups', 'groups.id', 'teams.group_id')
           ->where('teams.group_id', $args['group_id'])
           ->select("teams.*")
           ->get();
           $first_team = MatchsDay::join("teams", 'teams.id', 'matchs_days.first_team')
           ->join('groups', 'groups.id', 'teams.group_id')
           ->where('teams.group_id', $args['group_id'])
           ->select("teams.*")
           ->get();
           Log::info("merge". json_encode($first_team));
        
    }
    
}
