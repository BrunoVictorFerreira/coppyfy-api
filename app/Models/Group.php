<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Log;

class Group extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'id',
        'name'
    ];

}
