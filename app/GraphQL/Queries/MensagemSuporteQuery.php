<?php

namespace App\GraphQL\Queries;

use App\Models\Team;
use App\Models\Group;
use App\Models\MensagemSuporte;
use App\Models\Suporte;
use App\Models\User;
use GraphQL\Type\Definition\ResolveInfo;
use Illuminate\Support\Facades\Log;
use Laragraph\Utils\BadRequestGraphQLException;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;

class MensagemSuporteQuery
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

    public function allMessages($root, array $args, $context, $info)
    {
        $suporte = Suporte::where('usuario_id', '=', $args['usuario_id'])
            ->orderBy('created_at', 'DESC')
            ->first();

        if (is_null($suporte)) {
            throw new BadRequestGraphQLException(
                'Não há registros cadastrados ativos para este usuário!'
            );
        }
        Log::info("suporte");
        Log::info($suporte);
        return $suporte;
    }
    public function allMessagesOperator($root, array $args, $context, $info)
    {

        if (!isset($args['usuario_id']) && !isset($args['operador_id'])) {
            $suporte = Suporte::orderBy('created_at', 'DESC')
                ->get();
        } else {
            $suporte = Suporte::where('operador_id', '=', $args['operador_id'])
                ->where('usuario_id', '=', $args['usuario_id'])
                ->orderBy('created_at', 'DESC')
                ->get();
        }

        if (is_null($suporte)) {
            throw new BadRequestGraphQLException(
                'Não há registros cadastrados ativos para este usuário!'
            );
        }
        Log::info("suporte");
        Log::info($suporte);
        return $suporte;
    }
}
