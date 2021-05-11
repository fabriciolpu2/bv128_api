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

    public function historico()
    {
        return $this->hasOne(AlunoHistorico::class, 'aluno_id', 'id');
    }
    public function recompensas()
    {
        return $this->belongsToMany(Recompensas::class, 'recompensas_aluno', 'aluno_id', 'recompensa_id')
        ->withPivot('recompensa_tipo')->withTimestamps();
    }
    public function respostas()
    {
        return $this->belongsToMany(AlternativasQuestoes::class, 'aluno_respostas', 'aluno_id', 'questao_id');
    }
        
    
}
