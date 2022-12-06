<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatchsDay extends Model
{
    use HasFactory;

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
