<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Formacao extends Model
{
    use SoftDeletes,HasFactory;
    protected $table = 'formacao';

    protected $fillable = [
        'id',
        'match_id',
        'first_team',
        'second_team',
        'first_formation',
        'second_formation',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
  
}
