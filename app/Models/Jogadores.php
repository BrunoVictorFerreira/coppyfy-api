<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Jogadores extends Model
{
    use SoftDeletes,HasFactory;
    protected $table = 'jogadores';

    protected $fillable = [
        'id',
        'team_id',
        'nome',
        'numero',        
        'created_at',
        'updated_at',
        'deleted_at'
    ];
  
    public function getImagemJogadorAttribute(){
        return ImagesJogadores::where('jogador_id', $this->attributes['id'])->get();
    }

}
