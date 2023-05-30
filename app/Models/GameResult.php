<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GameResult extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'id',
        'match_id',
        'first_team',
        'second_team',
        'finalizado'
    ];


    public function getMatchAttribute(){
        return MatchsDay::where('id', $this->attributes['match_id'])->get();
    }
}
