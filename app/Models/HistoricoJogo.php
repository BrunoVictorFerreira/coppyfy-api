<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class HistoricoJogo extends Model
{
    use SoftDeletes,HasFactory;
    protected $table = 'historico_jogo';

    protected $fillable = [
        'id',
        'match_id',
        'descricao',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    public function getMatchAttribute(){
        return MatchsDay::where('id', $this->attributes['match_id'])->get();
    }
}
