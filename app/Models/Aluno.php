<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    //
    protected $table = 'alunos';
    protected $fillable = ['nome', 'matricula', 'turma_id', 'idade', 'pontuacao', 'missoes_concluidas'];
    
    //public $with = ['turma'];
    public function turma()
    {
        return $this->belongsTo(Turma::class);
    }
}
