<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Suporte extends Model
{
    use SoftDeletes,HasFactory;
    protected $table = 'suporte';

    protected $fillable = [
        'id',
        'usuario_id',
        'operador_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
  
    public function getMensagensSuporteAttribute(){
        return MensagemSuporte::where('suporte_id', $this->attributes['id'])->get();
    }

    public function getOperadorAttribute(){
        return User::where('id', $this->attributes['operador_id'])->first();
    }

    public function getUsuarioAttribute(){
        return User::where('id', $this->attributes['usuario_id'])->first();
    }

}
