<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AlunoRespostas extends Model
{
    protected $table = 'aluno_respostas';
    protected $fillable = ['aluno_id', 'questao_id', 'resposta_id','correta',  'update_at'];
}
