<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Configuracao extends Model
{
    protected $table = 'configuracaos';
    protected $fillable = ['versao', 'model'];
}
