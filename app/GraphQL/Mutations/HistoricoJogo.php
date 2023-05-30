<?php

namespace App\GraphQL\Mutations;

use App\Models\GameResult as ModelsGameResult;
use GraphQL\Type\Definition\ResolveInfo;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;
use App\Models\MatchsDay;
use App\Models\GameResult;
use App\Models\Team;
use App\Models\TeamInformation;
use Illuminate\Support\Facades\Log;
use App\Models\HistoricoJogo as ModelsHistoricoJogo;
use Illuminate\Support\Facades\DB;

class HistoricoJogo
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
        $match_id = $args["match_id"];
        $descricao = $args["descricao"];
        
        $historico_jogo = ModelsHistoricoJogo::create([
            "match_id" => $match_id,
            "descricao" => $descricao
        ]);

        return $historico_jogo;
     }
    
}
