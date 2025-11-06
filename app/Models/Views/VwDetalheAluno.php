<?php

namespace App\Models\Views;

use Illuminate\Database\Eloquent\Model;

class VwDetalheAluno extends Model
{
    protected $table = 'vw_detalhe_alunos';
    public $timestamps = false;

    protected $casts = [
        'questionarios' => 'array',
        'recompensas' => 'array'
    ];
}
