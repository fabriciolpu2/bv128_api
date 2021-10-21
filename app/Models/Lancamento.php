<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lancamento extends Model
{
    //
    protected $table = 'lancamentos';
    public $timestamps = false;
    protected $fillable = [
        'data_lancamentos',
        'num_documento',
        'operacao',
        'tipo_id',
        'valor',
        'conta_id'
    ];
}
