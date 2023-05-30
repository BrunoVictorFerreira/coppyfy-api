<?php

namespace App\GraphQL\Mutations;

use App\Models\Formacao as ModelsFormacao;
use App\Models\GameResult as ModelsGameResult;
use GraphQL\Type\Definition\ResolveInfo;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;
use App\Models\MatchsDay;
use App\Models\GameResult;
use App\Models\Team;
use App\Models\TeamInformation;
use Illuminate\Support\Facades\Log;
use App\Models\HistoricoJogo as ModelsHistoricoJogo;
use App\Models\jogadores;
use App\Models\Suporte as ModelSuporte;
use App\Models\MensagemSuporte;
use Illuminate\Support\Facades\DB;

class Suporte
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
        $usuario_id = $args["usuario_id"];
        $mensagem = $args["mensagem"];
        $suporte_id = $args["suporte_id"];

        if ($suporte_id == null) {
            $suporte = ModelSuporte::create([
                "usuario_id" => $usuario_id,
            ]);
            $mensagem_suporte = MensagemSuporte::create([
                "suporte_id" => $suporte['id'],
                "usuario_id" => $usuario_id,
                "mensagem" => $mensagem
            ]);
        } else {
            $suporte = ModelSuporte::where('id', $suporte_id)->where('usuario_id', $usuario_id)->first();
            $mensagem_suporte = MensagemSuporte::create([
                "suporte_id" => $suporte_id,
                "usuario_id" => $usuario_id,
                "mensagem" => $mensagem
            ]);
        }

        return $suporte;
    }

    public function createSuporteOperador($rootValue, array $args, GraphQLContext $context, ResolveInfo $resolveInfo)
    {
        $usuario_id = $args["usuario_id"];
        $mensagem = $args["mensagem"];
        $suporte_id = $args["suporte_id"];



        $suporte = ModelSuporte::where('id', $suporte_id)->first();
        $suporte->update([
            'operador_id' => $usuario_id
        ]);
        $mensagem_suporte = MensagemSuporte::create([
            "suporte_id" => $suporte_id,
            "usuario_id" => $usuario_id,
            "mensagem" => $mensagem
        ]);


        return $suporte;
    }
}
