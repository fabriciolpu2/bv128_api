<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlunoRespostaView extends Model
{
    protected $table = 'vw_alunos_respostas';

    protected $casts = [
        'respostas' => 'array'
    ];
}
