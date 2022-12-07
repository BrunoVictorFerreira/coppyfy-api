<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MatchsDay extends Model
{
    use SoftDeletes,HasFactory;

    protected $fillable = [
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
    ];
    
}
