<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class ImagesJogadores extends Model
{
    use SoftDeletes,HasFactory;
    protected $table = 'images_jogadores';

    protected $fillable = [
        'id',
        'jogador_id',
        'name',
        'path',        
        'created_at',
        'updated_at',
        'deleted_at'
    ];
  
}
