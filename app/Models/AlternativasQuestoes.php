<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AlternativasQuestoes extends Model
{
    protected $table = 'alternativas_questoes';
    protected $fillable = ['descricao', 'correta', 'questao_id', 'versao'];
    
    public function questao()
    {
        return $this->belongsTo(Questao::class);
    }
}
