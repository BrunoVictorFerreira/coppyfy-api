<?php

namespace App\GraphQL\Mutations;

use GraphQL\Type\Definition\ResolveInfo;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;
use App\Models\MatchsDay;
use App\Models\Team;

class MatchsDays
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
    public function __invoke($rootValue, array $args, GraphQLContext $context, ResolveInfo $resolveInfo)
    {

        $first_team = Team::where("id", $args["first_team"])->first();
        $second_team = Team::where("id", $args["second_team"])->first();

        if (!is_null($first_team) && !is_null($second_team)) {
            MatchsDay::create([
                'first_team' => $first_team["id"],
                'second_team' => $second_team["id"],
                'important' => $args["important"] ?? false
            ]);

            return true;
        }else{
            return false;
        }
    }
}
