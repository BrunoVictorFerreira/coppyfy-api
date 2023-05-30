<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class MatchsDay extends Model
{
    use SoftDeletes,HasFactory;
    protected $fillable = [
        'id',
        'first_team',
        'second_team',
        'important',
        'first_turn',
        'second_turn',
        'third_turn',
        'octaves_turn',
        'fourth_turn',
        'semi_turn',
        'final_turn',
        'date',
        'finalizado'
    ];

    public function getfirstTeamDescriptionAttribute(){
        return Team::where('id', $this->attributes['first_team'])->get();
    }
    public function getSecondTeamDescriptionAttribute(){
        return Team::where('id', $this->attributes['second_team'])->get();
    }
    public function getResultAttribute(){
        return GameResult::where('match_id', $this->attributes['id'])->get();
    }

    public function getHistoricAttribute(){
        return HistoricoJogo::where('match_id', $this->attributes['id'])->get();
    }

    public function getInformacaoPartidaAttribute(){
        return InformacoesPartida::where('match_id', $this->attributes['id'])->get();
    }

    public function getFormacaoAttribute(){
        return Formacao::where('match_id', $this->attributes['id'])->get();
    }
    
}
