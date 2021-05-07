<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recompensas extends Model
{
    protected $table = 'recompensas';
    protected $fillable = ['tipo', 'descricao', 'imagem', 'valor'];
}
