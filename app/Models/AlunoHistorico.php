<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AlunoHistorico extends Model
{
    protected $table = 'aluno_historicos';
    protected $fillable = ['aluno_id', 'missoes_concluidas', 'versao'];
    
}
