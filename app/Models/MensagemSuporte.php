<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class MensagemSuporte extends Model
{
    use SoftDeletes,HasFactory;
    protected $table = 'mensagem_suporte';

    protected $fillable = [
        'id',
        'suporte_id',
        'usuario_id',
        'mensagem',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
  
}
