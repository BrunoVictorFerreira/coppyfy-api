<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class InformacoesPartida extends Model
{
    use SoftDeletes,HasFactory;
    protected $table = 'informacoes_partida';

    protected $fillable = [
        'id',
        'match_id',
        'first_team',
        'second_team',
        'informacoes',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
  
}
