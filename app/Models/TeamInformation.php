<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TeamInformation extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'id',
        'teams_id',
        'pts',
        'vit',
        'emp',
        'der',
        'gols',
        'sg'
    ];
}
