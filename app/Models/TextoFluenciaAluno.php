<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TextoFluenciaAluno extends Model
{
    protected $table = 'texto_fluencia_aluno';
    const CREATED_AT = null;
    protected $fillable = [
        'aluno_id', 'texto_fluencia_id', 'nota', 'tempo', 'velocidade', 'palavras_nao_lidas', 'audio'
    ];

    public function textoFluencia()
    {
        return $this->belongsTo(TextoFluencia::class, 'texto_fluencia_id');
    }

    public function aluno()
    {
        return $this->belongsTo(Aluno::class, 'aluno_id');
    }
}
