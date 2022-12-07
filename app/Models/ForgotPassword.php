<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ForgotPassword extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'id',
        'user_id',
        'code'
    ];
}
