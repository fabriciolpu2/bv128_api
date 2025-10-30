<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlunoQuestionarioView extends Model
{
    public $timestamps = false;

    protected $table = 'vw_alunos_questionarios';

    protected $casts = [
        'questionarios' => 'array'
    ];
}
