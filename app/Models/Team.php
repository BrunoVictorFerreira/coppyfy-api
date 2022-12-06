<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Team extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'brasao_id',
        'group_id'
    ];

    public function brasao(){
        return $this->hasMany(Flag::class, 'brasao_id');
    }
    public function group(){
        return $this->hasMany(Group::class, 'group_id');
    }
}
