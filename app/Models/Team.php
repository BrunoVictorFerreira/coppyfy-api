<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Team extends Model
{
    use SoftDeletes, HasFactory;
    protected $fillable = [
        'id',
        'name',
        'brasao_id',
        'group_id'
    ];

    public function brasao(){
        return $this->hasMany(Flag::class, 'id', 'brasao_id');
    }
    public function group(){
        return $this->hasMany(Group::class, 'group_id');
    }
    public function informations(){
        return $this->hasMany(TeamInformation::class, 'teams_id');
    }

}
